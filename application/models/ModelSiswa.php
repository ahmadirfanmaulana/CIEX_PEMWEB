<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelSiswa extends CI_Model{

  public function data_siswa()
  {
    $data = [
      "nama" => "Ahmad Irfan Maulana",
      "kelas" => "XI RPL 1",
      "umur" => 15
    ];

    return $data;
  }

  // get
  public function get()
  {
    return $this->db->get('siswa');
  }

  // create
  public function create()
  {
    $nama      = $this->input->post('nama');
    $nis       = $this->input->post('nis');
    $nisn      = $this->input->post('nisn');
    $alamat      = $this->input->post('alamat');
    $jk        = $this->input->post('jenis_kelamin');
    $tmp_lahir = $this->input->post('tmp_lahir');
    $tgl_lahir = $this->input->post('tgl_lahir');

    $data = array(
      'siswa_nama' => $nama,
      'siswa_alamat' => $alamat,
      'siswa_nis' => $nis,
      'siswa_nisn' => $nisn,
      'siswa_jk' => $jk,
      'siswa_tmp_lahir' => $tmp_lahir,
      'siswa_tgl_lahir' => $tgl_lahir,
      'siswa_entri' => date('Y-m-d H:i:s')
    );

    $this->db->insert('siswa',$data);

  }

  public function update($siswa_id)
  {
    $nama      = $this->input->post('nama');
    $nis       = $this->input->post('nis');
    $nisn      = $this->input->post('nisn');
    $alamat    = $this->input->post('alamat');
    $jk        = $this->input->post('jenis_kelamin');
    $tmp_lahir = $this->input->post('tmp_lahir');
    $tgl_lahir = $this->input->post('tgl_lahir');

    $data = array(
      'siswa_nama' => $nama,
      'siswa_alamat' => $alamat,
      'siswa_nis' => $nis,
      'siswa_nisn' => $nisn,
      'siswa_jk' => $jk,
      'siswa_tmp_lahir' => $tmp_lahir,
      'siswa_tgl_lahir' => $tgl_lahir,
      'siswa_entri' => date('Y-m-d H:i:s')
    );

    $this->db->where('siswa_id', $siswa_id);
    $this->db->update('siswa',$data);
  }

}
