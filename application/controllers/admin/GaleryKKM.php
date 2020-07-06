<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GaleryKKM extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    public function index()
    {
        $data['title'] = 'Galery KKM';
        $data['user'] = $this->db->get_where('admin', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['photo'] = $this->Admin_model->getAllPhotoKKM();
        $data['menu'] = $this->Admin_model->queryMenu();

        $this->load->view('admin/templates/admin_header', $data);
        $this->load->view('admin/templates/admin_sidebar', $data);
        $this->load->view('admin/templates/admin_topbar', $data);
        $this->load->view('admin/galerykkm', $data);
        $this->load->view('admin/templates/admin_footer');
    }

    public function addPhoto()
    {
        $this->form_validation->set_rules(
            'judul',
            'Judul',
            'required|trim',
            ['required' => 'Judul Harus Diisi!']
        );
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Galery KKM';
            $data['user'] = $this->db->get_where('admin', ['email' =>
            $this->session->userdata('email')])->row_array();

            $data['photo'] = $this->Admin_model->getAllPhotoKKM();
            $data['menu'] = $this->Admin_model->queryMenu();

            $this->load->view('admin/templates/admin_header', $data);
            $this->load->view('admin/templates/admin_sidebar', $data);
            $this->load->view('admin/templates/admin_topbar', $data);
            $this->load->view('admin/galerykkm', $data);
            $this->load->view('admin/templates/admin_footer');
        } else {
            $judul = htmlspecialchars($this->input->post('judul', true));
            $gambar = $_FILES['gambar']['name'];
            if ($gambar) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']     = '5048';
                $config['upload_path'] = './assets/Bootslander/img/galleryKKM/';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('gambar')) {
                    echo "Gambar gagal diupload";
                } else {
                    $gambar = $this->upload->data('file_name');
                }
            }

            $data = [
                'judul'         => $judul,
                'gambar'        => $gambar
            ];

            $this->Admin_model->addNewArtikel($data, 'galery_kkm');
            $this->session->set_flashdata('message', 'Ditambahkan');
            redirect('admin/galerykkm/');
        }
    }

    public function deletePhoto($id)
    {

        $this->Admin_model->deletePhoto($id, 'galery_kkm');
        $this->session->set_flashdata('message', 'Dihapus');
        redirect('admin/galerykkm/');
    }

    public function editPhoto($id)
    {
        $data['title'] = 'Galery KKM';
        $data['subTitle'] = 'Edit Photo';
        $data['photo'] = $this->Admin_model->editPhoto($id, 'galery_kkm')->row_array();
        $data['user'] = $this->db->get_where('admin', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->Admin_model->queryMenu();

        $this->load->view('admin/templates/admin_header', $data);
        $this->load->view('admin/templates/admin_sidebar', $data);
        $this->load->view('admin/templates/admin_topbar', $data);
        $this->load->view('admin/gallerykkm/editPhoto', $data);
        $this->load->view('admin/templates/admin_footer');
    }

    public function updatePhoto()
    {
        $this->form_validation->set_rules(
            'judul',
            'Judul',
            'required|trim',
            ['required' => 'Judul Harus Diisi!']
        );
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Gallery KKM';
            $data['subTitle'] = 'Edit Photo';
            $data['user'] = $this->db->get_where('admin', ['email' =>
            $this->session->userdata('email')])->row_array();
            $data['menu'] = $this->Admin_model->queryMenu();

            $this->load->view('admin/templates/admin_header', $data);
            $this->load->view('admin/templates/admin_sidebar', $data);
            $this->load->view('admin/templates/admin_topbar', $data);
            $this->load->view('admin/gallerykkm/editPhoto', $data);
            $this->load->view('admin/templates/admin_footer');
        } else {
            $this->Admin_model->updatePhoto();
            $this->session->set_flashdata('message', 'Diedit');
            redirect('admin/galerykkm/');
        }
    }

    public function detailPhoto($id)
    {
        $data['title'] = 'Galery KKM';
        $data['subTitle'] = 'Detail Photo';
        $data['user'] = $this->db->get_where('admin', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['detail'] = $this->Admin_model->getPhotoById($id, 'galery_kkm');
        $data['menu'] = $this->Admin_model->queryMenu();

        $this->load->view('admin/templates/admin_header', $data);
        $this->load->view('admin/templates/admin_sidebar', $data);
        $this->load->view('admin/templates/admin_topbar', $data);
        $this->load->view('admin/gallerykkm/detailphoto', $data);
        $this->load->view('admin/templates/admin_footer');
    }
}
