<?php

class m_crud extends CI_model
{
    public function findall($table){
        return $this->db->get($table)->result();
    }

    public function code($table)
    {
        $query = "SELECT count(id_$table)+1 as $table FROM $table";
        return $this->db->query($query)->row();
    }

    public function withjoin($table,$join,$on){
        $this->db->select('*',$table.'.type_of as type');
        $this->db->from($table);
        $this->db->join($join, $on);
        return $this->db->get()->result();
    }

    public function withjoinid($table,$join,$on,$w,$c){
        $this->db->select('*',"'$table'.type_of as type");
        $this->db->from($table);
        $this->db->join($join, $on);
        $this->db->where($w,$c);
        return $this->db->get()->row();
    }

    public function with2joinid($table,$join1,$join2,$where=null)
    {
        $query = "SELECT *  FROM $table INNER JOIN $join1 ON ".$join1."_id = id_".$join1." INNER JOIN $join2 ON ".$join2."_id = id_".$join2." ".$where;
        return $this->db->query($query)->row();
    }

    public function with2join($table,$join1,$join2)
    {
        $query = "SELECT *  FROM $table INNER JOIN $join1 ON ".$join1."_id = id_".$join1." INNER JOIN $join2 ON ".$join2."_id = id_".$join2." ";
        return $this->db->query($query)->result();
    }

    public function with3join($table,$join1,$join2,$join3)
    {
        $query = "SELECT * FROM $table INNER JOIN $join1 ON ".$join1."_id = id_".$join1." INNER JOIN $join2 ON ".$join2."_id = id_".$join2." INNER JOIN $join3 ON ".$join3."_id = id_".$join3;
        return $this->db->query($query)->result();
    }

    public function with3joinid($table,$join1,$join2,$join3,$where=null)
    {
        $query = "SELECT * FROM $table INNER JOIN $join1 ON ".$join1."_id = id_".$join1." INNER JOIN $join2 ON ".$join2."_id = id_".$join2." INNER JOIN $join3 ON ".$join3."_id = id_".$join3." ".$where;
        return $this->db->query($query)->row();
    }

    public function with4join($table,$join1,$join2,$join3,$join4)
    {
        $query = "SELECT * FROM $table INNER JOIN $join1 ON ".$join1."_id = id_".$join1." INNER JOIN $join2 ON ".$join2."_id = id_".$join2." INNER JOIN $join3 ON ".$join3."_id = id_".$join3." INNER JOIN $join4 ON ".$join4."_id = id_".$join4;
        return $this->db->query($query)->result();
    }

    public function with4joinid($table,$join1,$join2,$join3,$join4,$where=null)
    {
        $query = "SELECT * FROM $table INNER JOIN $join1 ON ".$join1."_id = id_".$join1." INNER JOIN $join2 ON ".$join2."_id = id_".$join2." INNER JOIN $join3 ON ".$join3."_id = id_".$join3." INNER JOIN $join4 ON ".$join4."_id = id_".$join4."  ".$where;
        return $this->db->query($query)->row();
    }

    public function penetapan()
    {
        $query = "SELECT * FROM penetapan as pe INNER JOIN kendaraan ON pe.kendaraan_id = id_kendaraan INNER JOIN pemilik ON pe.pemilik_id = id_pemilik INNER JOIN kepemilikan ON pe.kepemilikan_id = id_kepemilikan INNER JOIN pengecekan ON pe.pengecekan_id = id_pengecekan INNER JOIN pendaftaran ON pe.pendaftaran_id = id_pendaftaran INNER JOIN petugas ON pe.petugas_id = id_petugas";
        return $this->db->query($query)->result();
    }

    public function penetapanid($id)
    {
        $query = "SELECT * FROM penetapan as pe INNER JOIN kendaraan ON pe.kendaraan_id = id_kendaraan INNER JOIN pemilik ON pe.pemilik_id = id_pemilik INNER JOIN kepemilikan ON pe.kepemilikan_id = id_kepemilikan INNER JOIN pengecekan ON pe.pengecekan_id = id_pengecekan INNER JOIN pendaftaran ON pe.pendaftaran_id = id_pendaftaran INNER JOIN petugas ON pe.petugas_id = id_petugas WHERE id_penetapan = '$id'";
        return $this->db->query($query)->row();
    }

    public function cetakid($id)
    {
        $query = "SELECT * FROM penetapan as pe INNER JOIN kendaraan ON pe.kendaraan_id = id_kendaraan INNER JOIN pemilik ON pe.pemilik_id = id_pemilik INNER JOIN kepemilikan ON pe.kepemilikan_id = id_kepemilikan INNER JOIN pengecekan ON pe.pengecekan_id = id_pengecekan INNER JOIN pendaftaran ON pe.pendaftaran_id = id_pendaftaran INNER JOIN petugas ON pe.petugas_id = id_petugas WHERE pe.kepemilikan_id = '$id'";
        return $this->db->query($query)->row();
    }

    public function getId1($id)
    {
        $query = "SELECT * FROM pengecekan as pe INNER JOIN pendaftaran ON pe.pendaftaran_id = id_pendaftaran INNER JOIN petugas ON pe.petugas_id = id_petugas WHERE pe.id_pengecekan = '$id'";
        return $this->db->query($query)->row();
    }

    public function getId2($id)
    {
        $query = "SELECT * FROM pendaftaran as pe INNER JOIN kepemilikan ON pe.kepemilikan_id = id_kepemilikan WHERE pe.id_pendaftaran = '$id'";
        return $this->db->query($query)->row();
    }

    public function getId3($id)
    {
        $query = "SELECT * FROM kepemilikan as pe INNER JOIN pemilik ON pe.pemilik_id = id_pemilik INNER JOIN kendaraan ON pe.kendaraan_id = id_kendaraan WHERE pe.id_kepemilikan = '$id'";
        return $this->db->query($query)->row();
    }

    public function findone($table,$id){
        return $this->db->get_where($table,['id_'.$table =>$id])->row();
    } 

    public function create($table,$data){
        $this->db->insert($table, $data);
    }

    public function update($table,$id,$data){
        $this->db->where('id_'.$table, $id);
        $this->db->update($table, $data);
    }

    public function _count($table)
    {
        return $this->db->count_all($table);
    }

}