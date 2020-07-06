<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function getMenu()
    {
        return $this->db->get('user_menu')->result_array();
    }

    public function getAllCollapse()
    {
        return $this->db->get('collapse')->result_array();
    }

    public function getAllFAQ()
    {
        return $this->db->get('faq')->result_array();
    }

    public function getAllArtikel($table)
    {
        return $this->db->get($table)->result_array();
    }

    public function getArtikelById($id, $table)
    {
        return $this->db->get_where($table, ['id' => $id])->row_array();
    }

    public function getAllPhotoKKM()
    {
        return $this->db->get('galery_kkm')->result_array();
    }
}
