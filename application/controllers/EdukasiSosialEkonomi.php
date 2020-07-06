<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EdukasiSosialEkonomi extends CI_Controller
{
    public function index()
    {
        // Menu user
        $data['menu'] = $this->User_model->getMenu();
        $data['artikel'] = $this->User_model->getAllArtikel('edukasi_sosial_ekonomi');

        $this->load->view('user/templates/header', $data);
        $this->load->view('user/edukasisosialekonomi', $data);
        $this->load->view('user/templates/footer');
    }

    public function detailArtikel($id)
    {
        // Menu user
        $data['menu'] = $this->User_model->getMenu();
        $data['detail'] = $this->User_model->getArtikelById($id, 'edukasi_sosial_ekonomi');

        $this->load->view('user/templates/header', $data);
        $this->load->view('user/edukasisosialekonomi/detailartikel', $data);
        $this->load->view('user/templates/footer');
    }
}
