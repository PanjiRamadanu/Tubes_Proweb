<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PengirimanModel extends CI_Model {
	// Fungsi untuk menampilkan semua data
	public function view(){
		return $this->db->get('pengiriman')->result();
	}

	public function view_by($KdPengiriman){
		$this->db->where('KdPengiriman', $KdPengiriman);
		return $this->db->get('pengiriman')->row();
	}

	// Fungsi untuk validasi form tambah dan ubah
	public function validation($mode){
		$this->load->library('form_validation'); // Load library form_validation untuk proses validasinya

		if($mode == "save")
			$this->form_validation->set_rules('input_kdpengiriman', 'KdPengiriman', 'required');
			$this->form_validation->set_rules('input_kdpelanggan', 'KdPelanggan', 'required');
			$this->form_validation->set_rules('input_kdpegawai', 'KdPegawai', 'required');
			$this->form_validation->set_rules('input_kdpemesanan', 'KdPemesanan', 'required');
			$this->form_validation->set_rules('input_jnsjasa', 'JnsJasa', 'required');
			$this->form_validation->set_rules('input_biaya', 'Biaya', 'required');
			$this->form_validation->set_rules('input_nfpengiriman', 'NFpengiriman', 'required');
			$this->form_validation->set_rules('input_status', 'Status', 'required');
			$this->form_validation->set_rules('input_tglpengiriman', 'TglPengiriman', 'required');

		if($this->form_validation->run()) // Jika validasi benar
			return TRUE; // Maka kembalikan hasilnya dengan TRUE
		else // Jika ada data yang tidak sesuai validasi
			return FALSE; // Maka kembalikan hasilnya dengan FALSE
	}

	// Fungsi untuk melakukan simpan data ke tabel
	public function save(){
		$data = array(
			"KdPengiriman" => $this->input->post('input_kdpengiriman'),
			"KdPelanggan" => $this->input->post('input_kdpelanggan'),
			"KdPegawai" => $this->input->post('input_kdpegawai'),
			"KdPemesanan" => $this->input->post('input_kdpemesanan'),
			"JnsJasa" => $this->input->post('input_jnsjasa'),
			"Biaya" => $this->input->post('input_biaya'),
			"NFpengiriman" => $this->input->post('input_nfpengiriman'),
			"Status" => $this->input->post('input_status'),
			"TglPengirimanr" => $this->input->post('input_tglpengiriman')
		);

		$this->db->insert('pengiriman', $data); // Untuk mengeksekusi perintah insert data
	}

	public function edit($KdPengiriman){
		$data = array(
			"KdPengiriman" => $this->input->post('input_kdpengiriman'),
			"KdPelanggan" => $this->input->post('input_kdpelanggan'),
			"KdPegawai" => $this->input->post('input_kdpegawai'),
			"KdPemesanan" => $this->input->post('input_kdpemesanan'),
			"JnsJasa" => $this->input->post('input_jnsjasa'),
			"Biaya" => $this->input->post('input_biaya'),
			"NFpengiriman" => $this->input->post('input_nfpengiriman'),
			"Status" => $this->input->post('input_status'),
			"TglPengirimanr" => $this->input->post('input_tglpengiriman')
		);

		$this->db->where('KdPengiriman', $KdPengiriman);
		$this->db->update('pengiriman', $data); // Untuk mengeksekusi perintah update data
	}

	public function delete($KdPengiriman){
		$this->db->where('KdPengiriman', $KdPengiriman);
		$this->db->delete('pengiriman'); // Untuk mengeksekusi perintah delete data
	}
	
	public function cari($keyword){
	  $this->db->like('kdpengiriman', $keyword)->or_like('kdpelanggan', $keyword)->or_like('kdpegawai', $keyword)->or_like('kdpemesanan', $keyword)->or_like('jnsjasa', $keyword)->or_like('biaya', $keyword)->or_like('nfpengiriman', $keyword)->or_like('status', $keyword)->or_like('tglpengiriman', $keyword);
		//mencari data yang serupa dengan keyword
	  return $this->db->get('pengiriman')->result();
	}
}
