<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('PelangganModel'); // Load PelangganModel ke controller ini
	}

	public function index(){
		$data['pelanggan'] = $this->PelangganModel->view();
		$this->load->view('pelanggan/index', $data);
	}

	public function tambah(){
		if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
			if($this->PelangganModel->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
				$this->PelangganModel->save(); // Panggil fungsi save() yang ada di PelangganModel.php
				redirect('pelanggan');
			}
		}

		$this->load->view('pelanggan/form_tambah');
	}

	public function ubah($KdPelanggan){
		if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
			if($this->PelangganModel->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
				$this->PelangganModel->edit($KdPelanggan); // Panggil fungsi edit() yang ada di PelangganModel.php
				redirect('pelanggan');
			}
		}

		$data['pelanggan'] = $this->PelangganModel->view_by($KdPelanggan);
		$this->load->view('pelanggan/form_ubah', $data);
	}

	public function hapus($KdPelanggan){
		$this->PelangganModel->delete($KdPelanggan); // Panggil fungsi delete() yang ada di PelangganModel.php
		redirect('pelanggan');
	}
	
	public function cari(){
	  $keyword = $this->input->get('cari', TRUE); //mengambil nilai dari form input cari
	  $data['pelanggan'] = $this->PelangganModel->cari($keyword); //mencari data karyawan berdasarkan inputan
	  $this->load->view('pelanggan/index', $data); //menampilkan data yang sudah dicari
	}
}
