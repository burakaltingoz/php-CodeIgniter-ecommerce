<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		
	}

	
	public function index()
	{
		$this->load->view('admin/login_form');
		


		}
		public function login_ol()
	{
		$kullanici= $this->input->post("kullanici");
	    $sifre= $this->input->post("sifre");
		
	    $kullanici = $this->security->xss_clean($kullanici);
		$sifre = $this->security->xss_clean($sifre);
		$this->load->model('Database_Model');
	
	$result= $this->Database_Model->login("admin",$kullanici,$sifre);
	
	if($result){
		
		$sess_array = array(
			'id' => $results[0]->Id,
			'kullanici' => $result[0]->kullanici,
			'sifre' => $result[0]->sifre,
			'yetki' => $result[0]->yetki,
			'adsoy' => $result[0]->adsoy,
			'resim' => $result[0]->resim		
			);
			
			$this->session->set_userdata("admin_session",$sess_array);
			redirect(base_url().'admin');		
	
	}
	
	else
	{
		$this->session->set_flashdata("mesaj","Hatalı kullanıcı adı yada şifre!!");
		redirect(base_url().'admin/login');
	
	}
	
	}
	public function login_cik(){
		$this->session->unset_userdata("admin_session");
		redirect(base_url().'admin/login');	
	}
}