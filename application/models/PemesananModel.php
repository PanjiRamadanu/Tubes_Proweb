<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PemesananModel extends CI_Model {
	// Fungsi untuk menampilkan semua data
	public function view(){
		return $this->db->get('pemesanan')->result();
	}

	public function view_by($KdPemesanan){
		$this->db->where('KdPemesanan', $KdPemesanan);
		return $this->db->get('pemesanan')->row();
	}

	// Fungsi untuk validasi form tambah dan ubah
	public function validation($mode){
		$this->load->library('form_validation'); // Load library form_validation untuk proses validasinya

		if($mode == "save")
			$this->form_validation->set_rules('input_kdpemesanan', 'KdPemesanan', 'required');
			$this->form_validation->set_rules('input_kdpelanggan', 'KdPelanggan', 'required');
			$this->form_validation->set_rules('input_kdpegawai', 'KdPegawai', 'required');
			$this->form_validation->set_rules('input_kdprdk', 'KdPrdk', 'required');
			$this->form_validation->set_rules('input_kdpengiriman', 'KdPengiriman', 'required');
			$this->form_validation->set_rules('input_kuantitas', 'Kuantitas', 'required');
			$this->form_validation->set_rules('input_nfpemesanan', 'NFpemesanan', 'required');
			$this->form_validation->set_rules('input_status', 'Status', 'required');
			$this->form_validation->set_rules('input_tglpemesanan', 'TglPemesanan', 'required');
			$this->form_validation->set_rules('input_biaya', 'Biaya', 'required');

		if($this->form_validation->run()) // Jika validasi benar
			return TRUE; // Maka kembalikan hasilnya dengan TRUE
		else // Jika ada data yang tidak sesuai validasi
			return FALSE; // Maka kembalikan hasilnya dengan FALSE
	}

	// Fungsi untuk melakukan simpan data ke tabel
	public function save(){
		$data = array(
			"KdPemesanan" => $this->input->post('input_kdpemesanan'),
			"KdPelanggan" => $this->input->post('input_kdpelanggan'),
			"KdPegawai" => $this->input->post('input_kdpegawai'),
			"KdPrdk" => $this->input->post('input_kdprdk'),
			"KdPengiriman" => $this->input->post('input_kdpengiriman'),
			"Kuantitas" => $this->input->post('input_kuantitas'),
			"NFpemesanan" => $this->input->post('input_nfpemesanan'),
			"Status" => $this->input->post('input_status'),
			"TglPemesananr" => $this->input->post('input_tglpemesanan'),
			"Biaya" => $this->input->post('input_biaya')
		);

		$this->db->insert('pemesanan', $data); // Untuk mengeksekusi perintah insert data
	}

	public function edit($KdPemesanan){
		$data = array(
			"KdPemesanan" => $this->input->post('input_kdpemesanan'),
			"KdPelanggan" => $this->input->post('input_kdpelanggan'),
			"KdPegawai" => $this->input->post('input_kdpegawai'),
			"KdPrdk" => $this->input->post('input_kdprdk'),
			"KdPengiriman" => $this->input->post('input_kdpengiriman'),
			"Kuantitas" => $this->input->post('input_kuantitas'),
			"NFpemesanan" => $this->input->post('input_nfpemesanan'),
			"Status" => $this->input->post('input_status'),
			"TglPemesananr" => $this->input->post('input_tglpemesanan'),
			"Biaya" => $this->input->post('input_biaya')
		);

		$this->db->where('KdPemesanan', $KdPemesanan);
		$this->db->update('pemesanan', $data); // Untuk mengeksekusi perintah update data
	}

	public function delete($KdPemesanan){
		$this->db->where('KdPemesanan', $KdPemesanan);
		$this->db->delete('pemesanan'); // Untuk mengeksekusi perintah delete data
	}
	public function cari($keyword){
	  $this->db->like('kdpemesanan', $keyword)->or_like('kdpelanggan', $keyword)->or_like('kdpegawai', $keyword)->or_like('kdprdk', $keyword)->or_like('kdpengiriman', $keyword)->or_like('kuantitas', $keyword)->or_like('nfpemesanan', $keyword)->or_like('status', $keyword)->or_like('tglpemesanan', $keyword)->or_like('biaya', $keyword);
		//mencari data yang serupa dengan keyword
	  return $this->db->get('pemesanan')->result();
	}
}
