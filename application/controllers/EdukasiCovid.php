<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EdukasiCovid extends CI_Controller
{
    public function index()
    {
        // Menu user
        $data['menu'] = $this->User_model->getMenu();
        $data['artikel'] = $this->User_model->getAllArtikel('edukasi_covid');

        $this->load->view('user/templates/header', $data);
        $this->load->view('user/edukasicovid19', $data);
        $this->load->view('user/templates/footer');
    }

    public function detailArtikel($id)
    {
        // Menu user
        $data['menu'] = $this->User_model->getMenu();
        $data['detail'] = $this->User_model->getArtikelById($id, 'edukasi_covid');

        $this->load->view('user/templates/header', $data);
        $this->load->view('user/edukasicovid/detailartikel', $data);
        $this->load->view('user/templates/footer');
    }
}
