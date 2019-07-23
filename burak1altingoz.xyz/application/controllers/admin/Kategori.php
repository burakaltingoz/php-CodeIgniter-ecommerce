<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller 
{
	    public function __construct()
        {
                parent::__construct();
                $this->load->helper('url');

        }

	
		public function index()
		{
			$query = $this->db->query("SELECT * FROM kategoriler ORDER BY parent_id");
			$data["veriler"]=$query->result();
			$this->load->view('admin/kategori_liste',$data);
			
		}
		
		public function ekle()
		{
			$this->load->view('admin/kategori_ekle');
			
		}
		
		public function ekle_kaydet()
		{
			$data = array (
				
				'adi'=>$this->input->post('kategori_adi'),
				'parent_id'=>$this->input->post('parent_id'),
				'description'=>$this->input->post('description'),
				'keywords'=>$this->input->post('keywords'),
				'durum'=>$this->input->post('durum'),
			);
			
			$this->db->insert("kategoriler",$data);
			$this->session->set_flashdata("mesaj",'Kategori kaydedildi');
			redirect(base_url().'admin\kategori');
		}
		
		public function sil($id)
		{
			$this->db->query("DELETE FROM kategoriler WHERE id=$id");
			$this->session->set_flashdata("mesaj",'Kategori Silindi!');
			redirect(base_url().'admin\kategori');
		}
		
		public function duzenle($id)
		{			
			$query = $this->db->query("SELECT * FROM kategoriler WHERE id=$id");
			$data["veri"]=$query->result();
			$this->load->view('admin/kategori_duzenle_formu',$data);
		}
		
		public function guncelle($id)
		{
			$data = array (
				
				'adi'=>$this->input->post('adi'),
				'parent_id'=>$this->input->post('parent_id'),
				'description'=>$this->input->post('description'),
				'keywords'=>$this->input->post('keywords'),
				'durum'=>$this->input->post('durum'),
			);
			
			$this->load->model('Database_Model');
			$this->Database_Model->update_data("kategoriler",$data,$id);
			$this->session->set_flashdata("mesaj",'Kategori Güncellendi!');
			redirect(base_url().'admin\kategori');
		}
		
		
}	
?>