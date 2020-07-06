<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public function queryMenu()
    {
        $queryMenu = "SELECT `admin_menu`.`id`, `menu`
        FROM `admin_menu` JOIN `user_access_menu` 
            ON `admin_menu`.`id` = `user_access_menu`.`menu_id`
        ORDER BY `user_access_menu`.`menu_id` ASC
        ";
        return $this->db->query($queryMenu)->result_array();
    }

    public function getAllCollapse()
    {
        return $this->db->get('collapse')->result_array();
    }

    public function deleteCollapse($id)
    {
        $this->db->delete('collapse', ['id' => $id]);
    }

    public function getAllFaq()
    {
        return $this->db->get('faq')->result_array();
    }

    public function addFaq()
    {
        $data = [
            "question" => $this->input->post('question', true),
            "answer" => $this->input->post('answer', true)
        ];

        $this->db->insert('faq', $data);
    }

    public function editFaq($id, $table)
    {
        return $this->db->get_where($table, ['id' => $id]);
    }

    public function updateFaq()
    {
        $id = htmlspecialchars($this->input->post('id', true));
        $question = htmlspecialchars($this->input->post('question', true));
        $answer = htmlspecialchars($this->input->post('answer', true));


        $data = [
            'question'         => $question,
            'answer'     => $answer,
        ];
        $this->db->where('id', $id);
        $this->db->update('faq', $data);
    }

    public function deleteFaq($id)
    {
        $this->db->delete('faq', ['id' => $id]);
    }

    public function getAllEduCovid()
    {
        return $this->db->get('edukasi_covid')->result_array();
    }
    public function getAllEduSosKom()
    {
        return $this->db->get('edukasi_sosial_ekonomi')->result_array();
    }

    public function addNewArtikel($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function deleteArtikel($id, $table)
    {
        $this->db->delete($table, ['id' => $id]);
    }

    public function editArtikel($id, $table)
    {
        return $this->db->get_where($table, ['id' => $id]);
    }

    public function updateArtikel()
    {
        $id = htmlspecialchars($this->input->post('id', true));
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
            // 'gambar'        => $gambar,
            'tanggal'       => time(),
            'oleh'          => 'admin'
        ];
        // CEK JIKA ADA GAMBAR YANG AKAN DI UPLOAD
        $upload_image = $_FILES['gambar']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['upload_path'] = './assets/Bootslander/img/edukasiCovid19/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
                $old_image = $data['user']['gambar'];
                if ($old_image != 'default.png') {
                    unlink(FCPATH . 'assets/Bootslander/img/edukasiCovid19/' . $old_image);
                }

                $new_image = $this->upload->data('file_name');
                $this->db->set('gambar', $new_image);
                $this->db->where('id', $id);
                $this->db->update('edukasi_covid', $data);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $this->db->where('id', $id);
        $this->db->update('edukasi_covid', $data);
    }

    public function updateArtikelSosKom()
    {
        $id = htmlspecialchars($this->input->post('id', true));
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
            // 'gambar'        => $gambar,
            'tanggal'       => time(),
            'oleh'          => 'admin'
        ];
        // CEK JIKA ADA GAMBAR YANG AKAN DI UPLOAD
        $upload_image = $_FILES['gambar']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['upload_path'] = './assets/Bootslander/img/edukasiSosialEkonomi/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
                $old_image = $data['user']['gambar'];
                if ($old_image != 'default.png') {
                    unlink(FCPATH . 'assets/Bootslander/img/edukasiSosialEkonomi/' . $old_image);
                }

                $new_image = $this->upload->data('file_name');
                $this->db->set('gambar', $new_image);
                $this->db->where('id', $id);
                $this->db->update('edukasi_sosial_ekonomi', $data);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $this->db->where('id', $id);
        $this->db->update('edukasi_sosial_ekonomi', $data);
    }

    public function getArtikelById($id, $table)
    {
        return $this->db->get_where($table, ['id' => $id])->row_array();
    }

    public function getAllPhotoKKM()
    {
        return $this->db->get('galery_kkm')->result_array();
    }

    public function addNewPhoto($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function deletePhoto($id, $table)
    {
        $this->db->delete($table, ['id' => $id]);
    }

    public function getPhotoById($id, $table)
    {
        return $this->db->get_where($table, ['id' => $id])->row_array();
    }

    public function editPhoto($id, $table)
    {
        return $this->db->get_where($table, ['id' => $id]);
    }

    public function updatePhoto()
    {
        $id = htmlspecialchars($this->input->post('id', true));
        $judul = htmlspecialchars($this->input->post('judul', true));
        $gambar = $_FILES['gambar']['name'];

        $data = [
            'judul'         => $judul
        ];
        // CEK JIKA ADA GAMBAR YANG AKAN DI UPLOAD
        $upload_image = $_FILES['gambar']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']     = '3048';
            $config['upload_path'] = './assets/Bootslander/img/galleryKKM/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
                $photo = $this->Admin_model->editPhoto($id, 'galery_kkm')->row_array();
                $old_image = $photo['gambar'];
                if ($old_image != 'default.png') {
                    unlink(FCPATH . 'assets/Bootslander/img/galleryKKM/' . $old_image);
                }

                $new_image = $this->upload->data('file_name');
                $this->db->set('gambar', $new_image);
                $this->db->where('id', $id);
                $this->db->update('galery_kkm', $data);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $this->db->where('id', $id);
        $this->db->update('galery_kkm', $data);
    }

    public function editBanner($id, $table)
    {
        return $this->db->get_where($table, ['id' => $id]);
    }

    public function updateBanner()
    {
        $id = htmlspecialchars($this->input->post('id', true));;
        // CEK JIKA ADA GAMBAR YANG AKAN DI UPLOAD
        $upload_image = $_FILES['gambar']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']     = '2048';
            $config['upload_path'] = './assets/Bootslander/img/collapse/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
                $photo = $this->Admin_model->editBanner($id, 'collapse')->row_array();
                $old_image = $photo['image'];
                if ($old_image != 'default.png') {
                    unlink(FCPATH . 'assets/Bootslander/img/collapse/' . $old_image);
                }

                $new_image = $this->upload->data('file_name');
                // var_dump($new_image);
                // die();
                $this->db->set('image', $new_image);
                $this->db->where('id', $id);
                $this->db->update('collapse');
            } else {
                echo $this->upload->display_errors();
            }
        }
    }
}
