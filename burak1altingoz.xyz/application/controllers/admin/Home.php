<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		
		if (!$this->session->userdata('admin_session'))
			redirect(base_url().'admin/login');
	}
	public function index()
	{
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		$this->load->view('admin/_content');
		$this->load->view('admin/_footer');


		}
		
	public function ayarlar()
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		
		$this->load->view('admin/ayarlar',$data);
	}
	
	public function ayarlar_guncelle($id)
	{
		$data= array(
			'adi' => $this->input->post('adi'),
			'keywords' => $this->input->post('keywords'),
			'description' => $this->input->post('description'),	
			'name' => $this->input->post('name'),	
			'smtpserver' => $this->input->post('smtpserver'),
			'smtpport' => $this->input->post('smtpport'),	
			'smtpemail' => $this->input->post('smtpemail'),	
			'password' => $this->input->post('password'),	
			'adres' => $this->input->post('adres'),	
			'sehir' => $this->input->post('sehir'),	
			'tel' => $this->input->post('tel'),	
			'fax' => $this->input->post('fax'),	
			'email' => $this->input->post('email'),	
			'hakkimizda' => $this->input->post('hakkimizda'),	
			'iletisim' => $this->input->post('iletisim'),		
			'facebook' => $this->input->post('facebook'),
			'twitter' => $this->input->post('twitter'),
			'instagram' => $this->input->post('instagram'),				
			'pinterest' => $this->input->post('pinterest'),
			);
		$this->load->model('Database_Model');
		$this->Database_Model->update_data("ayarlar",$data,$id);
		$this->session->set_flashdata("mesaj","Ayar Güncelleme Başarılı");
		redirect(base_url().'admin/home/ayarlar');
		
	}
	
	
	
	
}