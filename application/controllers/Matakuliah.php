<?php
    class Matakuliah extends CI_Controller {
        public function index(){
            $this->load->model('matakuliah_model','mtkl1');

            $this->mtkl1->nama= 'Dasar-Dasar Pemrograman';
            $this->mtkl1->sks= '3';
            $this->mtkl1->kode= 'ddp123';

            $this->load->model('matakuliah_model','mtkl2');

            $this->mtkl2->nama= 'Pemrograman WEb';
            $this->mtkl2->sks= '3';
            $this->mtkl2->kode= 'WEB123';

            $list_mtkl = [$this->mtkl1, $this->mtkl2];
            $data['list_mtkl'] = $list_mtkl;

            $this->load->view('layouts/header');
            $this->load->view('matakuliah/index', $data);
            $this->load->view('layouts/footer');
        }
    }
?>