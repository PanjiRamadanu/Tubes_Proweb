<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PelangganModel extends CI_Model {
	// Fungsi untuk menampilkan semua data
	public function view(){
		return $this->db->get('pelanggan')->result();
	}

	public function view_by($KdPelanggan){
		$this->db->where('KdPelanggan', $KdPelanggan);
		return $this->db->get('pelanggan')->row();
	}

	// Fungsi untuk validasi form tambah dan ubah
	public function validation($mode){
		$this->load->library('form_validation'); // Load library form_validation untuk proses validasinya

		if($mode == "save")
			$this->form_validation->set_rules('input_kdpelanggan', 'KdPelanggan', 'required');
			$this->form_validation->set_rules('input_namapertama', 'NamaPertama', 'required');
			$this->form_validation->set_rules('input_namaterakhir', 'NamaTerakhir', 'required');
			$this->form_validation->set_rules('input_email', 'Email', 'required');
			$this->form_validation->set_rules('input_notelp', 'NoTelp', 'required');
			$this->form_validation->set_rules('input_kodepos', 'KodePos', 'required');
			$this->form_validation->set_rules('input_kota', 'Kota', 'required');
			$this->form_validation->set_rules('input_username', 'username', 'required');
			$this->form_validation->set_rules('input_password', 'password', 'required');

		if($this->form_validation->run()) // Jika validasi benar
			return TRUE; // Maka kembalikan hasilnya dengan TRUE
		else // Jika ada data yang tidak sesuai validasi
			return FALSE; // Maka kembalikan hasilnya dengan FALSE
	}

	// Fungsi untuk melakukan simpan data ke tabel
	public function save(){
		$data = array(
			"KdPelanggan" => $this->input->post('input_kdpelanggan'),
			"NamaPertama" => $this->input->post('input_namapertama'),
			"NamaTerakhir" => $this->input->post('input_namaterakhir'),
			"Email" => $this->input->post('input_email'),
			"NoTelp" => $this->input->post('input_notelp'),
			"KodePos" => $this->input->post('input_kodepos'),
			"Kota" => $this->input->post('input_kota'),
			"username" => $this->input->post('input_username'),
			"password" => $this->input->post('input_password')
		);

		$this->db->insert('pelanggan', $data); // Untuk mengeksekusi perintah insert data
	}

	public function edit($KdPelanggan){
		$data = array(
			"KdPelanggan" => $this->input->post('input_kdpelanggan'),
			"NamaPertama" => $this->input->post('input_namapertama'),
			"NamaTerakhir" => $this->input->post('input_terakhir'),
			"Email" => $this->input->post('input_email'),
			"NoTelp" => $this->input->post('input_notelp'),
			"KodePos" => $this->input->post('input_kodepos'),
			"Kota" => $this->input->post('input_kota'),
			"username" => $this->input->post('input_username'),
			"password" => $this->input->post('input_password')
		);

		$this->db->where('KdPelanggan', $KdPelanggan);
		$this->db->update('pelanggan', $data); // Untuk mengeksekusi perintah update data
	}

	public function delete($KdPelanggan){
		$this->db->where('KdPelanggan', $KdPelanggan);
		$this->db->delete('pelanggan'); // Untuk mengeksekusi perintah delete data
	}
	public function cari($keyword){
	  $this->db->like('kdpelanggan', $keyword)->or_like('namapertama', $keyword)->or_like('namaterakhir', $keyword)->or_like('email', $keyword)->or_like('notelp', $keyword)->or_like('kodepos', $keyword)->or_like('kota', $keyword)->or_like('username', $keyword)->or_like('password', $keyword);
		//mencari data yang serupa dengan keyword
	  return $this->db->get('pelanggan')->result();
	}
}
