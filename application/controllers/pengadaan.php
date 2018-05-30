<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengadaan extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('PengadaanModel'); // Load PengadaanModel ke controller ini
	}

	public function index(){
		$data['pengadaan'] = $this->PengadaanModel->view();
		$this->load->view('pengadaan/index', $data);
	}

	public function tambah(){
		if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
			if($this->PengadaanModel->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
				$this->PengadaanModel->save(); // Panggil fungsi save() yang ada di PengadaanModel.php
				redirect('pengadaan');
			}
		}

		$this->load->view('pengadaan/form_tambah');
	}

	public function ubah($KdPengadaan){
		if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
			if($this->PengadaanModel->validaion("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
				$this->PengadaanModel->edit($KdPengadaan); // Panggil fungsi edit() yang ada di pengadaanModel.php
				redirect('pengadaan');
			}
		}

		$data['pengadaan'] = $this->PengadaanModel->view_by($KdPengadaan);
		$this->load->view('pengadaan/form_ubah', $data);
	}

	public function hapus($KdPengadaan){
		$this->PengadaanModel->delete($KdPengadaan); // Panggil fungsi delete() yang ada di PengadaanModel.php
		redirect('pengadaan');
	}
	
	public function cari(){
	  $keyword = $this->input->get('cari', TRUE); //mengambil nilai dari form input cari
	  $data['pengadaan'] = $this->PengadaanModel->cari($keyword); //mencari data karyawan berdasarkan inputan
	  $this->load->view('pengadaan/index', $data); //menampilkan data yang sudah dicari
	}
}
