<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class web extends CI_Controller {

  	public function shop(){
  		$this->load->view('web/shop');
    }

    public function blogsingle(){
  		$this->load->view('web/blogsingle');
    }

    public function cart(){
  		$this->load->view('web/cart');
    }

    public function checkout(){
  		$this->load->view('web/checkout');
    }

    public function contactus(){
  		$this->load->view('web/contactus');
    }

    public function index(){
  		$this->load->view('web/index');
    }

    public function login(){
  		$this->load->view('web/login');
    }

    public function productdetails(){
  		$this->load->view('web/productdetails');
    }

    public function blog(){
  		$this->load->view('web/blog');
    }

  



}
