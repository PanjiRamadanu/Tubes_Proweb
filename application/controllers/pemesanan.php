<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pemesanan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('PemesananModel'); // Load PemesananModel ke controller ini
	}

	public function index(){
		$data['pemesanan'] = $this->PemesananModel->view();
		$this->load->view('pemesanan/index', $data);
		$this->load->library('Table', $data);
	}

	public function tambah(){
		if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
			if($this->PemesananModel->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
				$this->PemesananModel->save(); // Panggil fungsi save() yang ada di PemesananModel.php
				redirect('pemesanan');
			}
		}

		$this->load->view('pemesanan/form_tambah');
	}

	public function ubah($KdPemesanan){
		if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
			if($this->PemesananModel->validaion("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
				$this->PemesananModel->edit($KdPemesanan); // Panggil fungsi edit() yang ada di pemesananModel.php
				redirect('pemesanan');
			}
		}

		$data['pemesanan'] = $this->PemesananModel->view_by($KdPemesanan);
		$this->load->view('pemesanan/form_ubah', $data);
	}

	public function hapus($KdPemesanan){
		$this->PemesananModel->delete($KdPemesanan); // Panggil fungsi delete() yang ada di PemesananModel.php
		redirect('pemesanan');
	}
	
	public function cari(){
	  $keyword = $this->input->get('cari', TRUE); //mengambil nilai dari form input cari
	  $data['pemesanan'] = $this->PemesananModel->cari($keyword); //mencari data karyawan berdasarkan inputan
	  $this->load->view('pemesanan/index', $data); //menampilkan data yang sudah dicari
	}
}
