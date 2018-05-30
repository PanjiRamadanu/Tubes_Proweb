<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ProdukModel extends CI_Model {
	// Fungsi untuk menampilkan semua data
	public function view(){
		return $this->db->get('produk')->result();
	}

	public function view_by($KdPrdk){
		$this->db->where('KdPrdk', $KdPrdk);
		return $this->db->get('produk')->row();
	}

	// Fungsi untuk validasi form tambah dan ubah
	public function validation($mode){
		$this->load->library('form_validation'); // Load library form_validation untuk proses validasinya

		if($mode == "save")
			$this->form_validation->set_rules('input_KdPrdk', 'KdPrdk', 'required');
			$this->form_validation->set_rules('input_Merek', 'Merek', 'required');
			$this->form_validation->set_rules('input_Nama', 'Nama', 'required');
			$this->form_validation->set_rules('input_Warna', 'Warna', 'required');
			$this->form_validation->set_rules('input_Ukuran', 'Ukuran', 'required');
			$this->form_validation->set_rules('input_Harga', 'Harga', 'required');
			$this->form_validation->set_rules('input_Jumlah', 'Jumlah', 'required');
			$this->form_validation->set_rules('input_Baik', 'Baik', 'required');
			$this->form_validation->set_rules('input_Rusak', 'Rusak', 'required');
			$this->form_validation->set_rules('input_Hilang', 'Hilang', 'required');

		if($this->form_validation->run()) // Jika validasi benar
			return TRUE; // Maka kembalikan hasilnya dengan TRUE
		else // Jika ada data yang tidak sesuai validasi
			return FALSE; // Maka kembalikan hasilnya dengan FALSE
	}

	// Fungsi untuk melakukan simpan data ke tabel
	public function save(){

		$data = array(
			"KdPrdk" => $this->input->post('input_KdPrdk'),
			"Merek" => $this->input->post('input_Merek'),
			"Nama" => $this->input->post('input_Nama'),
			"Warna" => $this->input->post('input_Warna'),
			"Ukuran" => $this->input->post('input_Ukuran'),
			"Harga" => $this->input->post('input_Harga'),
			"Jumlah" => $this->input->post('input_Jumlah'),
			"Baik" => $this->input->post('input_Baik'),
			"Rusak" => $this->input->post('input_Rusak'),
			"Hilang" => $this->input->post('input_Hilang')
		);

		$this->db->insert('produk', $data); // Untuk mengeksekusi perintah insert data
	}

	public function edit($KdPrdk){
		$data = array(
			"KdPrdk" => $this->input->post('input_KdPrdk'),
			"Merek" => $this->input->post('input_Merek'),
			"Nama" => $this->input->post('input_Nama'),
			"Warna" => $this->input->post('input_Warna'),
			"Ukuran" => $this->input->post('input_Ukuran'),
			"Harga" => $this->input->post('input_Harga'),
			"Jumlah" => $this->input->post('input_Jumlah'),
			"Baik" => $this->input->post('input_Baik'),
			"Rusak" => $this->input->post('input_Rusak'),
			"Hilang" => $this->input->post('input_Hilang')
		);

		$this->db->where('KdPrdk', $KdPrdk);
		$this->db->update('produk', $data); // Untuk mengeksekusi perintah update data
	}

	public function delete($KdPrdk){

		$this->db->where('KdPrdk', $KdPrdk);
		$this->db->delete('produk'); // Untuk mengeksekusi perintah delete data
	}

	public function cari($keyword){
	  $this->db->like('Nama', $keyword)->or_like('KdPrdk', $keyword)->or_like('Merek', $keyword)->or_like('Warna', $keyword)->or_like('Ukuran', $keyword)->or_like('Harga', $keyword)->or_like('Jumlah', $keyword)->or_like('Baik', $keyword)->or_like('Rusak', $keyword)->or_like('Hilang', $keyword);
		//mencari data yang serupa dengan keyword
	  return $this->db->get('produk')->result();
	}
}
