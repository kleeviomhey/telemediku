<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    private $urlAPI = 'https://api.kawalcorona.com/';

    private $urlVideo = 'https://www.googleapis.com/youtube/v3/search?part=snippet&key=AIzaSyAsegcmQGDYTEIV9O0TWe0Se19T26i_mTM&channelId=UC5BMIWZe9isJXLZZWPWvBlg&maxResults=3&order=date&q=corona';

    public function index()
    {
        // $this->output->cache(60);
        // Indonesia
        $indonesia = $this->readAPI('indonesia');
        $indo = [];

        foreach ($indonesia as $value) {
            $indo = [
                'positif' => $value['positif'],
                'sembuh' => $value['sembuh'],
                'dirawat' => $value['dirawat'],
                'meninggal' => $value['meninggal']
            ];
        }

        $data['indonesia'] = $indo;

        // // Provinsi
        $data['provinsi'] = $this->readAPI('indonesia/provinsi');
        // Satu provinsi
        $data['banten'] = $this->getSingleProvince(36);
        // update video 
        $datayoutubevideo = $this->readAPIYoutube($this->urlVideo);
        $data['video'] = $datayoutubevideo['items'];
        // $data['video'] = $youtubevideo['items'][0]['id']['videoId'];
        // $data['video'] = $youtubevideo['items'][0]['snippet']['title'];
        // Menu user
        $data['menu'] = $this->User_model->getMenu();
        // Collapse
        $data['collapse'] = $this->User_model->getAllCollapse();
        // FAQ
        $data['faq'] = $this->User_model->getAllFaq();


        $this->load->view('user/templates/header', $data);
        $this->load->view('user/index', $data);
        $this->load->view('user/templates/footer');
    }

    public function readAPI($url)
    {
        $readURL = file_get_contents($this->urlAPI . $url);
        $data = json_decode($readURL, true);

        return $data;
    }

    public function getSingleProvince($Kode_Provi)
    {
        $data = $this->readAPI('indonesia/provinsi');

        $result = [];
        foreach ($data as $value) {

            if ($value['attributes']['Kode_Provi'] == $Kode_Provi) {

                $result = [
                    'provinsi' => $value['attributes']['Provinsi'],
                    'positif' => $value['attributes']['Kasus_Posi'],
                    'sembuh' => $value['attributes']['Kasus_Semb'],
                    'meninggal' => $value['attributes']['Kasus_Meni']

                ];
            }
        }
        return $result;
    }

    // API Youtube
    //AIzaSyAsegcmQGDYTEIV9O0TWe0Se19T26i_mTM

    public function readAPIYoutube($url)
    {
        $readURL = file_get_contents($url);
        $data = json_decode($readURL, true);

        return $data;
    }

    public function edukasi_covid19()
    {
        // Menu user
        $data['menu'] = $this->User_model->getMenu();

        $this->load->view('user/templates/header', $data);
        $this->load->view('user/coba', $data);
        $this->load->view('user/templates/footer');
    }
}
