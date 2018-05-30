<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PegawaiModel extends CI_Model {
	// Fungsi untuk menampilkan semua data pegawai
	public function view(){
		return $this->db->get('pegawai')->result();
	}

	public function view_by($KdPegawai){
		$this->db->where('KdPegawai', $KdPegawai);
		return $this->db->get('pegawai')->row();
	}

	// Fungsi untuk validasi form tambah dan ubah
	public function validation($mode){
		$this->load->library('form_validation'); // Load library form_validation untuk proses validasinya

		if($mode == "save")
			$this->form_validation->set_rules('input_kdpegawai', 'KdPegawai', 'required');
			$this->form_validation->set_rules('input_nama', 'Nama', 'required');
			$this->form_validation->set_rules('input_alamat', 'Alamat', 'required');
			$this->form_validation->set_rules('input_kodepos', 'KodePos', 'required');
			$this->form_validation->set_rules('input_notelp', 'NoTelp', 'required');
			$this->form_validation->set_rules('input_username', 'username', 'required');
			$this->form_validation->set_rules('input_password', 'password', 'required');

		if($this->form_validation->run()) // Jika validasi benar
			return TRUE; // Maka kembalikan hasilnya dengan TRUE
		else // Jika ada data yang tidak sesuai validasi
			return FALSE; // Maka kembalikan hasilnya dengan FALSE
	}

	// Fungsi untuk melakukan simpan data ke tabel pegawai
	public function save(){
		$data = array(
			"KdPegawai" => $this->input->post('input_kdpegawai'),
			"nama" => $this->input->post('input_nama'),
			"alamat" => $this->input->post('input_alamat'),
			"KodePos" => $this->input->post('input_kodepos'),
			"NoTelp" => $this->input->post('input_notelp'),
			"username" => $this->input->post('input_username'),
			"password" => $this->input->post('input_password')
		);

		$this->db->insert('pegawai', $data); // Untuk mengeksekusi perintah insert data
	}

	public function edit($KdPegawai){
		$data = array(
			"KdPegawai" => $this->input->post('input_kdpegawai'),
			"nama" => $this->input->post('input_nama'),
			"alamat" => $this->input->post('input_alamat'),
			"KodePos" => $this->input->post('input_kodepos'),
			"NoTelp" => $this->input->post('input_notelp'),
			"username" => $this->input->post('input_username'),
			"password" => $this->input->post('input_password')
		);

		$this->db->where('KdPegawai', $KdPegawai);
		$this->db->update('pegawai', $data); // Untuk mengeksekusi perintah update data
	}

	public function delete($KdPegawai){
		$this->db->where('KdPegawai', $KdPegawai);
		$this->db->delete('pegawai'); // Untuk mengeksekusi perintah delete data
	}
	public function cari($keyword){
	  $this->db->like('kdpegawai', $keyword)->or_like('nama', $keyword)->or_like('alamat', $keyword)->or_like('kodepos', $keyword)->or_like('notelp', $keyword)->or_like('username', $keyword)->or_like('password', $keyword);
		//mencari data yang serupa dengan keyword
	  return $this->db->get('pegawai')->result();
	}
}
