<?php

class dashboard extends CI_Controller
{

    public function index()
    {
        $data['wisata'] = $this->model_wisata->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
    }
}
