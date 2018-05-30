<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('PegawaiModel'); // Load PegawaiModel ke controller ini
	}

	public function index(){
		$data['pegawai'] = $this->PegawaiModel->view();
		$this->load->view('pegawai/index', $data);
	}

	public function tambah(){
		if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
			if($this->PegawaiModel->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
				$this->PegawaiModel->save(); // Panggil fungsi save() yang ada di PegawaiModel.php
				redirect('pegawai');
			}
		}

		$this->load->view('pegawai/form_tambah');
	}

	public function ubah($KdPegawai){
		if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
			if($this->PegawaiModel->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
				$this->PegawaiModel->edit($KdPegawai); // Panggil fungsi edit() yang ada di pegawaiModel.php
				redirect('pegawai');
			}
		}

		$data['pegawai'] = $this->PegawaiModel->view_by($KdPegawai);
		$this->load->view('pegawai/form_ubah', $data);
	}

	public function hapus($KdPegawai){
		$this->PegawaiModel->delete($KdPegawai); // Panggil fungsi delete() yang ada di PegawaiModel.php
		redirect('pegawai');
	}

	public function cari(){
	  $keyword = $this->input->get('cari', TRUE); //mengambil nilai dari form input cari
	  $data['pegawai'] = $this->PegawaiModel->cari($keyword); //mencari data karyawan berdasarkan inputan
	  $this->load->view('pegawai/index', $data); //menampilkan data yang sudah dicari
	}

		function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->m_login->cek_login("pegawai",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("web/index"));

		}else{
				echo "Username dan password salah !";
			}
		}

		function logout(){
			$this->session->sess_destroy();
			redirect(base_url('login'));
		}
}
