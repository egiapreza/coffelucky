<?php

class Kategori extends CI_Controller {

    public function arabika() {
    $data['arabika'] = $this->model_kategori->data_arabika()->result();
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('arabika', $data);
    $this->load->view('templates/footer');
    }

    public function robusta() {
        $data['robusta'] = $this->model_kategori->data_robusta()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('robusta', $data);
        $this->load->view('templates/footer');
    }

    public function v60() {
        $data['v60'] = $this->model_kategori->data_v60()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v60', $data);
        $this->load->view('templates/footer');
    }

    public function latte() {
        $data['latte'] = $this->model_kategori->data_latte()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('latte', $data);
        $this->load->view('templates/footer');
    }

    public function cold_brew() {
        $data['cold_brew'] = $this->model_kategori->data_cold_brew()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('cold_brew', $data);
        $this->load->view('templates/footer');
    }
    
}