<?php 

class Dashboard extends CI_Controller {
    
    public function __construct() {
        
        parent::__construct();

        if($this->session->userdata('role_id') != '2') {
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Kamu Belum Login!!
            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            </div>');
            redirect('auth/login');
        }
    }

    public function update_cart() {
        $rowid = $this->input->post('rowid');
        $qty = $this->input->post('qty');
    
        $data = array(
            'rowid' => $rowid,
            'qty'   => $qty,
        );
    
        $this->cart->update($data);
        redirect('dashboard/keranjang'); 
    }

    public function tambah_ke_keranjang($id) {

        $kopi = $this->model_kopi->find($id);

        $data = array(
            'id'        => $kopi->id_kopi,
            'qty'       => 1,
            'price'     => $kopi->harga,
            'name'      => $kopi->nama_kopi

        );

        $this->cart->insert($data);
        redirect('welcome');
    }


    public function detail_keranjang() {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('keranjang');
        $this->load->view('templates/footer');
    }

    public function hapus_keranjang() {
        $this->cart->destroy();
        redirect('welcome');
    }

    public function pembayaran() {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pembayaran');
        $this->load->view('templates/footer');
    }

    public function proses_pesanan() {
        $is_processed = $this->model_invoice->index();
        if($is_processed) {
            $this->cart->destroy();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('proses_pesanan');
            $this->load->view('templates/footer');
        } else {
            echo "Maaf, Pesanan Anda Gagal Diproses!";
        }
        
    }

    public function detail($id_kpi) {
        $data['kopi'] = $this->model_kopi->detail_kopi($id_kpi);
        $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('detail_kopi', $data);
            $this->load->view('templates/footer');
    }
}

