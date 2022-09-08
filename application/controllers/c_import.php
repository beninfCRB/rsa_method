<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_import extends CI_Controller
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
			'title' => 'Import Data',
            'route' => $route
		];
		$this->routes->load('main/dashboard','import/import',$data);
	}

    public function push(){
        $table = $this->input->post('data');
        $secure = $this->input->post('type_of_import');

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

            $this->__import($table,$array,$secure);
        }


    }

	public function __import($table,$data_array,$secure)
	{
        // var_dump($data_array);
        // die;
		    $fileName = $_FILES['file']['name'].'_'.Time();
          
			$config['upload_path'] = './assets/importFile/'; //path upload
			$config['file_name'] = $fileName;  // nama file
			$config['allowed_types'] = 'xls|xlsx'; //tipe file yang diperbolehkan
			$config['max_size'] = 100000; // maksimal sizze
	 
			$this->load->library('upload'); //meload librari upload
			$this->upload->initialize($config);
			  
			if(! $this->upload->do_upload('file') ){
				echo $this->upload->display_errors();
                exit();
			}
				  
			$inputFileName = './assets/importFile/'.$fileName;
	 
			try {
					$inputFileType = PHPExcel_IOFactory::identify($inputFileName);
					$objReader = PHPExcel_IOFactory::createReader($inputFileType);
					$objPHPExcel = $objReader->load($inputFileName);
				} catch(Exception $e) {
					die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
				}
	 
				$sheet = $objPHPExcel->getSheet(0);
				$highestRow = $sheet->getHighestRow();
				$highestColumn = $sheet->getHighestColumn();
	 
				for ($row = 2; $row <= $highestRow; $row++){                  //  Read a row of data into an array                 
					$rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,NULL,TRUE,FALSE);   
	 
					 // Sesuaikan key array dengan nama kolom di database
                    $row_excel=[];
                    for($a=0;$a<=count($data_array)-3;$a++){
                        if($secure == 'enc'){
                            $row_excel = array_merge($row_excel,[$data_array[$a] =>enc(strval($rowData[0][$a]))]);
                        }else{
                            $row_excel = array_merge($row_excel,[$data_array[$a] =>strval($rowData[0][$a])]);
                        }
                    }           

                // var_dump($row_excel);
                // die;
                    if($secure == 'enc'){
                        $data = array_merge($row_excel,["id_".$table => uniqid(),"type_of_".$table => 'enc',"created_at" => date('Y-m-d H:i:s'),"updated_at" => date('Y-m-d H:i:s')]);
                    }else{
                        $data = array_merge($row_excel,["id_".$table => uniqid(),"type_of_".$table => 'dec',"created_at" => date('Y-m-d H:i:s'),"updated_at" => date('Y-m-d H:i:s')]);
                    }

                // var_dump($data);
                // die;
	 
					$this->db->insert($table,$data);
                }
                set_pesan('data berhasil diimport.');
                redirect('c_import');
	}
}
