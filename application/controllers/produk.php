<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class produk extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('ProdukModel'); // Load produkModel ke controller ini
	}

	public function index(){
		$data['produk'] = $this->ProdukModel->view();
		$this->load->view('produk/index', $data);
	}

	public function tambah(){
		if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
			if($this->ProdukModel->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
				$this->ProdukModel->save(); // Panggil fungsi save() yang ada di produkModel.php
				redirect('produk');
			}
		}

		$this->load->view('produk/form_tambah');
	}

	public function ubah($KdPrdk){
		if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
			if($this->ProdukModel->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
				$this->ProdukModel->edit($KdPrdk); // Panggil fungsi edit() yang ada di produkModel.php
				redirect('produk');
			}
		}

		$data['produk'] = $this->ProdukModel->view_by($KdPrdk);
		$this->load->view('produk/form_ubah', $data);
	}

	public function hapus($KdPrdk){
		$this->ProdukModel->delete($KdPrdk); // Panggil fungsi delete() yang ada di produkModel.php
		redirect('produk');
	}

	public function cari(){
	  $keyword = $this->input->get('cari', TRUE); //mengambil nilai dari form input cari
	  $data['produk'] = $this->ProdukModel->cari($keyword); //mencari data karyawan berdasarkan inputan
	  $this->load->view('produk/index', $data); //menampilkan data yang sudah dicari
	}
}
