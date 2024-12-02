<?php

class Model_kategori extends CI_Model {

    public function data_arabika() {
        return $this->db->get_where('tb_kopi',array('kategori' => 'arabika'));
    }

    public function data_robusta() {
        return $this->db->get_where('tb_kopi',array('kategori' => 'robusta'));
    }

    public function data_v60() {
        return $this->db->get_where('tb_kopi',array('kategori' => 'v60'));
    }

    public function data_latte() {
        return $this->db->get_where('tb_kopi',array('kategori' => 'latte'));
    }

    public function data_cold_brew() {
        return $this->db->get_where('tb_kopi',array('kategori' => 'cold brew'));
    }
}