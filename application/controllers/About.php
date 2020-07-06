<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
    public function index()
    {
        // Menu user
        $data['menu'] = $this->User_model->getMenu();
        $data['photo'] = $this->User_model->getAllPhotoKKM();

        $this->load->view('user/templates/header', $data);
        $this->load->view('user/about', $data);
        $this->load->view('user/templates/footer');
    }
}
