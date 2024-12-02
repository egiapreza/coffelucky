<?php 

class Data_kopi extends CI_Controller {

    public function __construct() {
        
        parent::__construct();

        if($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Kamu Belum Login!!
            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            </div>');
            redirect('auth/login');
        }
    }

    public function index() {

        $data['kopi'] = $this->model_kopi->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_kopi', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_aksi() {
        $nama_kopi = $this->input->post('nama_kopi');
        $keterangan = $this->input->post('keterangan');
        $kategori = $this->input->post('kategori');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');
        $gambar = $_FILES['gambar']['name'];
    
        if ($gambar = '') {} else {
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
    
            $this->load->library('upload', $config);
    
            if (!$this->upload->do_upload('gambar')) {
                echo "Gambar Gagal diUpload!";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }
    
        $data = array(
            'nama_kopi' => $nama_kopi,
            'keterangan' => $keterangan,
            'kategori' => $kategori,
            'harga' => $harga,
            'stok' => $stok,
            'gambar' => $gambar
        );
    
        $this->model_kopi->tambah_kopi($data, 'tb_kopi');
        redirect('admin/data_kopi/index');
    }
    

    public function edit($id) {
        $where = array('id_kopi' =>$id);
        $data['kopi'] = $this->model_kopi->edit_kopi($where, 'tb_kopi')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_kopi', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update()
{
    $id = $this->input->post('id_kopi');
    $nama_kopi = $this->input->post('nama_kopi');
    $keterangan = $this->input->post('keterangan');
    $kategori = $this->input->post('kategori');
    $harga = $this->input->post('harga');
    $stok = $this->input->post('stok');
    $old_image = $this->input->post('old_image');

    $config['upload_path'] = './uploads';
    $config['allowed_types'] = 'jpg|jpeg|png|gif';
    $config['overwrite'] = true;

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('gambar')) {
        $error = array('error' => $this->upload->display_errors());
        $new_image = $old_image;
    } else {
        $data = array('upload_data' => $this->upload->data());
        $new_image = $data['upload_data']['file_name'];
    }

    $data = array(
        'nama_kopi' => $nama_kopi,
        'keterangan' => $keterangan,
        'kategori' => $kategori,
        'harga' => $harga,
        'stok' => $stok,
        'gambar' => $new_image
    );

    $where = array(
        'id_kopi' => $id
    );

    $this->model_kopi->update_data_gambar($where, $data, 'tb_kopi');
    unlink(FCPATH . 'uploads/' . $old_image); // Menghapus gambar lama
    redirect('admin/data_kopi/index');
    }

    public function hapus ($id) {
        $where = array('id_kopi' => $id);
        $this->model_kopi->hapus_data($where, 'tb_kopi');
        redirect('admin/data_kopi/index');
    }
}