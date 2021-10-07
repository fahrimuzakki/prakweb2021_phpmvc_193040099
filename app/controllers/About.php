<?php

class About extends Controller {
    public function index($nama = 'Mohamad Fahri Muzakki', $pekerjaan = 'Mahasiswa', $umur = 20)
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About me';
         $this->view('templates/header', $data); 
         $this->view('about/index', $data); 
         $this->view('templates/footer'); 
    }
    public function page()
    {
        $data['judul'] = 'Pages'; 
        $this->view('templates/header', $data); 
        $this->view('About/page');
        $this->view('templates/footer');
    }
}