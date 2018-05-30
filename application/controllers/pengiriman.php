<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengiriman extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('PengirimanModel'); // Load PengirimanModel ke controller ini
	}

	public function index(){
		$data['pengiriman'] = $this->PengirimanModel->view();
		$this->load->view('pengiriman/index', $data);
	}

	public function tambah(){
		if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
			if($this->PengirimanModel->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
				$this->PengirimanModel->save(); // Panggil fungsi save() yang ada di PengirimanModel.php
				redirect('pengiriman');
			}
		}

		$this->load->view('pengiriman/form_tambah');
	}

	public function ubah($KdPengiriman){
		if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
			if($this->PengirimanModel->validaion("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
				$this->PengirimanModel->edit($KdPengiriman); // Panggil fungsi edit() yang ada di pengirimanModel.php
				redirect('pengiriman');
			}
		}

		$data['pengiriman'] = $this->PengirimanModel->view_by($KdPengiriman);
		$this->load->view('pengiriman/form_ubah', $data);
	}

	public function hapus($KdPengiriman){
		$this->PengirimanModel->delete($KdPengiriman); // Panggil fungsi delete() yang ada di PengirimanModel.php
		redirect('pengiriman');
	}
	
	public function cari(){
	  $keyword = $this->input->get('cari', TRUE); //mengambil nilai dari form input cari
	  $data['pengiriman'] = $this->PengirimanModel->cari($keyword); //mencari data berdasarkan inputan
	  $this->load->view('pengiriman/index', $data); //menampilkan data yang sudah dicari
	}
}
