<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GaleryKKM extends CI_Controller
{
    public function index()
    {
        // Menu user
        $data['menu'] = $this->User_model->getMenu();
        $data['photo'] = $this->User_model->getAllPhotoKKM();

        $this->load->view('user/templates/header', $data);
        $this->load->view('user/galeryKKM', $data);
        $this->load->view('user/templates/footer');
    }
}
