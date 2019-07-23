<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mesajlar extends CI_Controller {
	 public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->helper('url');
				$this->load->library('session');
				$this->load->database();
				$this->load->model('Database_Model');
				
        }

	
	public function index()
	{
		$query=$this->db->query("select * from mesajlar order by adsoy");
		$data["veriler"]=$query->result();
		
		$this->load->view('admin/mesaj_listesi',$data);
 	}
	
	
	public function mesaj_sil($Id) {
		$this->db->query('DELETE FROM mesajlar WHERE Id='.$Id);
		$this->session->set_flashdata("result","Mesaj başarıyla silindi.");
		redirect(base_url()."admin/Mesajlar");
	}
}
