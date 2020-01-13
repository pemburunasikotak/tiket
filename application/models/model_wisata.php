<?php

class model_wisata extends CI_Model
{

    public function tampil_data()
    {
        return $this->db->get('tb_wisata');
    }
    public function tambah_wisata($data, $table)
    {
        $this->db->insert($table, $data);
    }
}
