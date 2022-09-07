<?php
class Fungsi{
    //input untuk enkripsi
    function input($table='',$name,$new=TRUE)
    {
        date_default_timezone_set("Asia/Jakarta");
        $CI = &get_instance();
        if($new){
            $data = array("id_".$table =>uniqid(),'created_at'=>date('Y-m-d H:i:s'),'updated_at'=> date('Y-m-d H:i:s'));
        }else{
            $data = array("id_".$table =>uniqid(),'updated_at'=> date('Y-m-d H:i:s'));
        }

        foreach($name as $n){
            if(strstr($n,'_id')){
                $data = array_merge($data,[$n => $CI->input->post($n)]);
            }elseif($n == 'type_of_'.$table){
                $data = array_merge($data,[$n=> 'enc']);
            }else{
                $data = array_merge($data,[$n => enc($CI->input->post($n))]);
            }
        }
        return $data;
    }

    //input untuk dekripsi
    function inputOf($table='',$name,$new=TRUE)
    {
        date_default_timezone_set("Asia/Jakarta");
        $CI = &get_instance();
        if($new){
            $data = array("id_".$table =>uniqid(),'created_at'=>date('Y-m-d H:i:s'),'updated_at'=> date('Y-m-d H:i:s'));
        }else{
            $data = array("id_".$table =>uniqid(),'updated_at'=> date('Y-m-d H:i:s'));
        }

        foreach($name as $n){
            if(strstr($n,'_id')){
                $data = array_merge($data,[$n => $CI->input->post($n)]);
            }elseif($n == 'type_of_'.$table){
                $data = array_merge($data,[$n=> 'dec']);
            }else{
                $data = array_merge($data,[$n => $CI->input->post($n)]);
            }
        }
        return $data;
    }
}

?>