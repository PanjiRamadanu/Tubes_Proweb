<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PengadaanModel extends CI_Model {
	// Fungsi untuk menampilkan semua data
	public function view(){
		return $this->db->get('pengadaan')->result();
	}

	public function view_by($KdPengadaan){
		$this->db->where('KdPengadaan', $KdPengadaan);
		return $this->db->get('pengadaan')->row();
	}

	// Fungsi untuk validasi form tambah dan ubah
	public function validation($mode){
		$this->load->library('form_validation'); // Load library form_validation untuk proses validasinya

		if($mode == "save")
			$this->form_validation->set_rules('input_kdpengadaan', 'KdPengadaan', 'required');
			$this->form_validation->set_rules('input_kdprdk', 'KdPrdk', 'required');
			$this->form_validation->set_rules('input_kuantitas', 'Kuantitas', 'required');
			$this->form_validation->set_rules('input_tglpemesanan', 'TglPemesanan', 'required');
			$this->form_validation->set_rules('input_tgltiba', 'TglTiba', 'required');
			$this->form_validation->set_rules('input_keterangan', 'Keterangan', 'required');

		if($this->form_validation->run()) // Jika validasi benar
			return TRUE; // Maka kembalikan hasilnya dengan TRUE
		else // Jika ada data yang tidak sesuai validasi
			return FALSE; // Maka kembalikan hasilnya dengan FALSE
	}

	// Fungsi untuk melakukan simpan data ke tabel
	public function save(){
		$data = array(
			"KdPengadaan" => $this->input->post('input_kdpengadaan'),
			"KdPrdk" => $this->input->post('input_kdprdk'),
			"Kuantitas" => $this->input->post('input_kuantitas'),
			"TglPemesananr" => $this->input->post('input_tglpemesanan'),
			"TglTiba" => $this->input->post('input_tgltiba'),
			"Keterangan" => $this->input->post('input_keterangan')
		);

		$this->db->insert('pengadaan', $data); // Untuk mengeksekusi perintah insert data
	}

	public function edit($KdPengadaan){
		$data = array(
			"KdPengadaan" => $this->input->post('input_kdpengadaan'),
			"KdPrdk" => $this->input->post('input_kdprdk'),
			"Kuantitas" => $this->input->post('input_kuantitas'),
			"TglPemesananr" => $this->input->post('input_tglpemesanan'),
			"TglTiba" => $this->input->post('input_tgltiba'),
			"Keterangan" => $this->input->post('input_keterangan')
		);

		$this->db->where('KdPengadaan', $KdPengadaan);
		$this->db->update('pengadaan', $data); // Untuk mengeksekusi perintah update data
	}

	public function delete($KdPengadaan){
		$this->db->where('KdPengadaan', $KdPengadaan);
		$this->db->delete('pengadaan'); // Untuk mengeksekusi perintah delete data
	}
	
	public function cari($keyword){
	  $this->db->like('kdpengadaan', $keyword)->or_like('kdprdk', $keyword)->or_like('kuantitas', $keyword)->or_like('tglpemesanan', $keyword)->or_like('tgltiba', $keyword)->or_like('keterangan', $keyword);
		//mencari data yang serupa dengan keyword
	  return $this->db->get('pengadaan')->result();
	}
}
