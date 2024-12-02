<?php 

class Model_kopi extends CI_Model {
    public function tampil_data(){
        return $this->db->get('tb_kopi');
    }

    public function tambah_kopi($data,$table) {
        $this->db->insert($table,$data);
    }

    public function edit_kopi($where,$table) {
        return $this->db->get_where($table,$where);
    }

    public function update_data($where,$data,$table) {
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function update_data_gambar($where, $data, $table) {
    $this->db->where($where);
    $this->db->update($table, $data);
    }

    public function hapus_data($where,$table) {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function find($id) {
        $result = $this->db->where('id_kopi', $id)
                           ->limit(1)
                           ->get('tb_kopi');
        if($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    public function detail_kopi($id_kpi) {
        $result = $this->db->where('id_kopi',$id_kpi)->get('tb_kopi');
        if($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

}