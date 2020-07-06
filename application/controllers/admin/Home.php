<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function collapse()
    {
        $data['title'] = 'Collapse';
        $data['user'] = $this->db->get_where('admin', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['collapse'] = $this->Admin_model->getAllCollapse();
        $data['menu'] = $this->Admin_model->queryMenu();

        $this->load->view('admin/templates/admin_header', $data);
        $this->load->view('admin/templates/admin_sidebar', $data);
        $this->load->view('admin/templates/admin_topbar', $data);
        $this->load->view('admin/collapse', $data);
        $this->load->view('admin/templates/admin_footer');
    }

    public function add_collapse()
    {
        // cek jika ada gambar yang akan diupload
        $upload_image = $_FILES['image']['name'];
        // var_dump($upload_image);
        // die();

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']     = '2048';
            // $config['max_width']    = '1280';
            // $config['max_height']   = '500';
            $config['upload_path'] = './assets/Bootslander/img/collapse/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                $this->db->insert('collapse', ['image' => $this->upload->data('file_name')]);
                $upload_image = $this->upload->data('file_name');
                $this->session->set_flashdata('message', 'Ditambahkan');
                redirect('admin/home/collapse');
            } else {
                echo $this->upload->display_errors();
            }
        }
    }

    public function deleteCollapse($id)
    {
        $this->Admin_model->deleteCollapse($id);
        $this->session->set_flashdata('message', 'Dihapus');
        redirect('admin/home/collapse/');
    }

    public function faq()
    {
        $data['title'] = 'F.A.Q';
        $data['user'] = $this->db->get_where('admin', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['faq'] = $this->Admin_model->getAllFaq();
        $data['menu'] = $this->Admin_model->queryMenu();

        $this->load->view('admin/templates/admin_header', $data);
        $this->load->view('admin/templates/admin_sidebar', $data);
        $this->load->view('admin/templates/admin_topbar', $data);
        $this->load->view('admin/faq', $data);
        $this->load->view('admin/templates/admin_footer');
    }

    public function addFaq()
    {
        $this->form_validation->set_rules('question', 'Question', 'required');
        $this->form_validation->set_rules('answer', 'Answer', 'required');

        if ($this->form_validation->run() == FALSE) {
            redirect('admin/home/faq');
        } else {
            $this->Admin_model->addFaq();
            $this->session->set_flashdata('message', 'Ditambahkan');
            redirect('admin/home/faq');
        }
    }
    // sudah sw
    public function editFaq($id)
    {
        $data['title'] = 'F.A.Q';
        $data['subTitle'] = 'Edit FAQ';
        $data['faq'] = $this->Admin_model->editFaq($id, 'faq')->row_array();
        $data['user'] = $this->db->get_where('admin', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->Admin_model->queryMenu();

        $this->load->view('admin/templates/admin_header', $data);
        $this->load->view('admin/templates/admin_sidebar', $data);
        $this->load->view('admin/templates/admin_topbar', $data);
        $this->load->view('admin/faq/editFAQ', $data);
        $this->load->view('admin/templates/admin_footer');
    }
    //sudah sw
    public function updateFaq()
    {
        $this->form_validation->set_rules(
            'question',
            'Question',
            'required|trim',
            ['required' => 'Question Harus Diisi!']
        );
        $this->form_validation->set_rules(
            'answer',
            'Answer',
            'required',
            ['required' => 'Answer Harus Diisi!']
        );
        if ($this->form_validation->run() == false) {
            $data['title'] = 'F.A.Q';
            $data['subTitle'] = 'Edit FAQ';
            $data['user'] = $this->db->get_where('admin', ['email' =>
            $this->session->userdata('email')])->row_array();
            $data['menu'] = $this->Admin_model->queryMenu();

            $this->load->view('admin/templates/admin_header', $data);
            $this->load->view('admin/templates/admin_sidebar', $data);
            $this->load->view('admin/templates/admin_topbar', $data);
            $this->load->view('admin/faq/editFAQ', $data);
            $this->load->view('admin/templates/admin_footer');
        } else {
            $this->Admin_model->updateFaq();
            $this->session->set_flashdata('message', 'Diedit');
            redirect('admin/home/faq/');
        }
    }
    // sudah sw
    public function deleteFaq($id)
    {
        $this->Admin_model->deleteFaq($id);
        $this->session->set_flashdata('message', 'Dihapus');
        redirect('admin/home/faq');
    }

    public function editCollapse($id)
    {
        $data['title'] = 'Collapse';
        $data['subTitle'] = 'Edit Banner';
        $data['photo'] = $this->Admin_model->editBanner($id, 'Collapse')->row_array();
        $data['user'] = $this->db->get_where('admin', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->Admin_model->queryMenu();

        $this->load->view('admin/templates/admin_header', $data);
        $this->load->view('admin/templates/admin_sidebar', $data);
        $this->load->view('admin/templates/admin_topbar', $data);
        $this->load->view('admin/collapse/editCollapse', $data);
        $this->load->view('admin/templates/admin_footer');
    }

    public function updateCollapse()
    {
        $this->Admin_model->updateBanner();
        $this->session->set_flashdata('message', 'Diedit');
        redirect('admin/home/collapse/');
    }
}
