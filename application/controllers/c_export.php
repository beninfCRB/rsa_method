<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_export extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_crud','crud');
        $this->load->library('excel');
		ini_set('display_errors','off');
        if ($this->session->userdata('username') == NULL) {
            redirect('c_login');
        }
	}

    private function _validasi()
    {
        $this->form_validation->set_rules('data', 'Data Excel', 'required');
    }

	public function index()
	{
        $route = ['petugas','pemilik','kendaraan','kepemilikan','pendaftaran','pengecekan','penetapan','pembayaran'];
		$data = [
			'title' => 'Export Data',
            'route' => $route
		];
		$this->routes->load('main/dashboard','export/export',$data);
	}

    public function push(){
        $table = $this->input->post('data');
        $secure = $this->input->post('type_of_export');

        $this->_validasi();

        if ($this->form_validation->run() == false) {
            $this->index();
        }else{
            $fields = $this->db->list_fields($table);

            foreach ($fields as $field)
            {
               $array[] = $field;
            }

            array_splice($array,0,1);

            $this->__export($table,$array,$secure);
        }


    }

	public function __export($table,$data_array,$secure)
	{
        $object = new PHPExcel();
        $object->setActiveSheetIndex(0);
        $column = 0;
        for($a=0;$a<count($data_array)-3;$a++){
            $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $data_array[$a]);
            $column++;
        }
        $data = $this->db->get($table)->result_array();
        // var_dump($data);
        // die;
        $excel_row = 2;
        foreach($data as $row)
        {
            for($a=0;$a<count($data_array)-3;$a++){
                if($secure == 'enc' && $row['type_of_'.$table] == 'dec'){
                    $object->getActiveSheet()->setCellValueByColumnAndRow($a, $excel_row, enc($row[$data_array[$a]]));
                }elseif($secure != 'enc' && $row['type_of_'.$table] == 'enc'){
                    $object->getActiveSheet()->setCellValueByColumnAndRow($a, $excel_row, dec($row[$data_array[$a]]));
                }else{
                    $object->getActiveSheet()->setCellValueByColumnAndRow($a, $excel_row, $row[$data_array[$a]]);
                }
            }
            $excel_row++;
        }
        $file_name = $table.'_'.time().".xlsx";
        $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename='.$file_name);
        $object_writer->save('php://output');
	}
}
