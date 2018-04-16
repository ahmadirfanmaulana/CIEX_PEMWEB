<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('ModelSiswa');
  }

  function index()
  {
    $data['content'] = 'siswa/home';

    $siswa = $this->ModelSiswa->get();

    $data['data'] = array(
      "siswa" => $siswa->result(),
    );


    $this->load->view('common/content', $data);
  }

  public function tambah()
  {
    $data['content'] = 'siswa/tambah';
    $data['data'] = [];

    // creating
    if ($this->input->post('button')) {
      $this->ModelSiswa->create();
    }
    elseif ($this->input->post('buttonback')) {
      $this->ModelSiswa->create();

      redirect('siswa');
    }


    $this->load->view('common/content', $data);
  }

  public function edit($siswa_id)
  {
    $data['content'] = 'siswa/edit';

    // data for view
    $data['data'] = array(
      'siswa' => $this->db->get_where('siswa', ['siswa_id' => $siswa_id])->row()
    );

    // updating
    if ($this->input->post('button')) {
      $this->ModelSiswa->update($siswa_id);
    }
    elseif ($this->input->post('buttonback')) {
      $this->ModelSiswa->update($siswa_id);

      redirect('siswa');
    }

    $this->load->view('common/content', $data);
  }

  public function hapus()
  {
    if ($this->input->post('id')) {
      $this->db->delete('siswa', ['siswa_id' => $this->input->post('id')]);

      echo json_encode([
        'message' => 'Berhasil dihapus'
      ]);
    }
  }

}
