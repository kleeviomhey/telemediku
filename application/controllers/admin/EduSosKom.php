<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EduSosKom extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Edukasi Sosial Ekonomi';
        $data['user'] = $this->db->get_where('admin', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['artikel'] = $this->Admin_model->getAllEduSosKom();
        $data['menu'] = $this->Admin_model->queryMenu();

        $this->load->view('admin/templates/admin_header', $data);
        $this->load->view('admin/templates/admin_sidebar', $data);
        $this->load->view('admin/templates/admin_topbar', $data);
        $this->load->view('admin/edukasisosialekonomi', $data);
        $this->load->view('admin/templates/admin_footer');
    }

    public function addArtikel()
    {
        $data['title'] = 'Edukasi Sosial Ekonomi';
        $data['subTitle'] = 'Tambah Artikel';
        $data['user'] = $this->db->get_where('admin', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->Admin_model->queryMenu();

        $this->load->view('admin/templates/admin_header', $data);
        $this->load->view('admin/templates/admin_sidebar', $data);
        $this->load->view('admin/templates/admin_topbar', $data);
        $this->load->view('admin/edukasisoskom/addartikel', $data);
        $this->load->view('admin/templates/admin_footer');
    }

    public function addNewArtikel()
    {
        $this->form_validation->set_rules(
            'judul',
            'Judul',
            'required|trim',
            ['required' => 'Judul Harus Diisi!']
        );
        $this->form_validation->set_rules(
            'paragraf1',
            'Paragraf 1',
            'required',
            ['required' => 'Paragraf 1 Harus Diisi!']
        );
        $this->form_validation->set_rules(
            'paragraf2',
            'Paragraf 2',
            'required',
            ['required' => 'Paragraf 2 Harus Diisi!']
        );
        $this->form_validation->set_rules(
            'paragraf3',
            'Paragraf 3',
            'required',
            ['required' => 'Paragraf 3 Harus Diisi!']
        );
        $this->form_validation->set_rules(
            'paragraf4',
            'Paragraf 4',
            'required',
            ['required' => 'Paragraf 4 Harus Diisi!']
        );
        $this->form_validation->set_rules(
            'paragraf5',
            'Paragraf 5',
            'required',
            ['required' => 'Paragraf 5 Harus Diisi!']
        );
        // $this->form_validation->set_rules(
        //     'paragraf6',
        //     'Paragraf 6',
        //     'required',
        //     ['required' => 'Paragraf 6 Harus Diisi!']
        // );
        // $this->form_validation->set_rules(
        //     'paragraf7',
        //     'Paragraf 7',
        //     'required',
        //     ['required' => 'Paragraf 7 Harus Diisi!']
        // );

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Edukasi Sosial Ekonomi';
            $data['subTitle'] = 'Tambah Artikel';
            $data['user'] = $this->db->get_where('admin', ['email' =>
            $this->session->userdata('email')])->row_array();
            $data['artikel'] = $this->Admin_model->getAllEduSosKom();
            $data['menu'] = $this->Admin_model->queryMenu();

            $this->load->view('admin/templates/admin_header', $data);
            $this->load->view('admin/templates/admin_sidebar', $data);
            $this->load->view('admin/templates/admin_topbar', $data);
            $this->load->view('admin/edukasisoskom/addArtikel', $data);
            $this->load->view('admin/templates/admin_footer');
        } else {

            $judul = htmlspecialchars($this->input->post('judul', true));
            $paragraf1 = htmlspecialchars($this->input->post('paragraf1', true));
            $paragraf2 = htmlspecialchars($this->input->post('paragraf2', true));
            $paragraf3 = htmlspecialchars($this->input->post('paragraf3', true));
            $paragraf4 = htmlspecialchars($this->input->post('paragraf4', true));
            $paragraf5 = htmlspecialchars($this->input->post('paragraf5', true));
            $paragraf6 = htmlspecialchars($this->input->post('paragraf6', true));
            $paragraf7 = htmlspecialchars($this->input->post('paragraf7', true));
            $paragraf8 = htmlspecialchars($this->input->post('paragraf8', true));
            $paragraf9 = htmlspecialchars($this->input->post('paragraf9', true));
            $gambar = $_FILES['gambar']['name'];
            // var_dump($_FILES);
            // die();
            if ($gambar) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['upload_path'] = './assets/Bootslander/img/edukasiSosialEkonomi/';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('gambar')) {
                    echo "Gambar gagal diupload";
                } else {
                    $gambar = $this->upload->data('file_name');
                }
            }

            $data = [
                'judul'         => $judul,
                'paragraf1'     => $paragraf1,
                'paragraf2'     => $paragraf2,
                'paragraf3'     => $paragraf3,
                'paragraf4'     => $paragraf4,
                'paragraf5'     => $paragraf5,
                'paragraf6'     => $paragraf6,
                'paragraf7'     => $paragraf7,
                'paragraf8'     => $paragraf8,
                'paragraf9'     => $paragraf9,
                'gambar'        => $gambar,
                'tanggal'       => time(),
                'oleh'          => 'admin'
            ];

            $this->Admin_model->addNewArtikel($data, 'edukasi_sosial_ekonomi');
            $this->session->set_flashdata('message', 'Ditambahkan');
            redirect('admin/edusoskom/');
        }
    }

    public function deleteArtikel($id)
    {

        $this->Admin_model->deleteArtikel($id, 'edukasi_sosial_ekonomi');
        $this->session->set_flashdata('message', 'Dihapus');
        redirect('admin/edusoskom/');
    }

    public function editArtikel($id)
    {
        $data['title'] = 'Edukasi Sosial Ekonomi';
        $data['subTitle'] = 'Edit Artikel';
        $data['artikel'] = $this->Admin_model->editArtikel($id, 'edukasi_sosial_ekonomi')->row_array();
        $data['user'] = $this->db->get_where('admin', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->Admin_model->queryMenu();

        $this->load->view('admin/templates/admin_header', $data);
        $this->load->view('admin/templates/admin_sidebar', $data);
        $this->load->view('admin/templates/admin_topbar', $data);
        $this->load->view('admin/edukasisoskom/editArtikel', $data);
        $this->load->view('admin/templates/admin_footer');
    }

    public function updateArtikel()
    {
        $this->form_validation->set_rules(
            'judul',
            'Judul',
            'required|trim',
            ['required' => 'Judul Harus Diisi!']
        );
        $this->form_validation->set_rules(
            'paragraf1',
            'Paragraf 1',
            'required',
            ['required' => 'Paragraf 1 Harus Diisi!']
        );
        $this->form_validation->set_rules(
            'paragraf2',
            'Paragraf 2',
            'required',
            ['required' => 'Paragraf 2 Harus Diisi!']
        );
        $this->form_validation->set_rules(
            'paragraf3',
            'Paragraf 3',
            'required',
            ['required' => 'Paragraf 3 Harus Diisi!']
        );
        $this->form_validation->set_rules(
            'paragraf4',
            'Paragraf 4',
            'required',
            ['required' => 'Paragraf 4 Harus Diisi!']
        );
        $this->form_validation->set_rules(
            'paragraf5',
            'Paragraf 5',
            'required',
            ['required' => 'Paragraf 5 Harus Diisi!']
        );

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Edukasi Sosial Ekonomi';
            $data['subTitle'] = 'Edit Artikel';
            $data['user'] = $this->db->get_where('admin', ['email' =>
            $this->session->userdata('email')])->row_array();
            // $data['artikel'] = $this->Admin_model->getAllEduCovid();
            $data['menu'] = $this->Admin_model->queryMenu();

            $this->load->view('admin/templates/admin_header', $data);
            $this->load->view('admin/templates/admin_sidebar', $data);
            $this->load->view('admin/templates/admin_topbar', $data);
            $this->load->view('admin/edukasisoskom/editArtikel', $data);
            $this->load->view('admin/templates/admin_footer');
        } else {
            $this->Admin_model->updateArtikelSosKom();
            $this->session->set_flashdata('message', 'Diedit');
            redirect('admin/edusoskom/');
        }
    }

    public function detailArtikel($id)
    {
        $data['title'] = 'Edukasi Sosial Ekonomi';
        $data['subTitle'] = 'Detail Artikel';
        $data['user'] = $this->db->get_where('admin', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['detail'] = $this->Admin_model->getArtikelById($id, 'edukasi_sosial_ekonomi');
        $data['menu'] = $this->Admin_model->queryMenu();

        $this->load->view('admin/templates/admin_header', $data);
        $this->load->view('admin/templates/admin_sidebar', $data);
        $this->load->view('admin/templates/admin_topbar', $data);
        $this->load->view('admin/edukasisoskom/detailartikel', $data);
        $this->load->view('admin/templates/admin_footer');
    }
}
