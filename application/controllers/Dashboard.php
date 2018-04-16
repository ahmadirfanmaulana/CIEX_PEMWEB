<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('ModelSiswa');
  }

  function index()
  {
    $data_siswa = $this->ModelSiswa->data_siswa();

    // data
    $nama = $data_siswa['nama'];
    $data['content'] = 'dashboard';

    $siswa = $this->db->get('siswa');

    $data['data'] = array(
      "siswa" => $siswa->result(),
      "nama" => "Ahmad Irfan"
    );

    // load view
    $this->load->view('common/content', $data);
  }

  public function siswa()
  {
    $data_siswa = $this->ModelSiswa->data_siswa();

    $nama  = $data_siswa['nama'];
    $kelas = $data_siswa['kelas'];
    $umur  = $data_siswa['umur'];

    echo "Nama : " . $nama . "<br>";
    echo "Kelas : " . $kelas . "<br>";
    echo "Umur : " . $umur . "<br>";
  }

}
