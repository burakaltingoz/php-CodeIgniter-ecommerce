<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
{
parent::__construct();

$this->load->model('Database_Model');
$this->load->helper('url');


}

		public function index()
	{
		$query=$this->db->query("SELECT COUNT(Id) AS say FROM sepet");
		$data["sepet"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM urunler WHERE grubu='kampanya'");
		$data["kampanya"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM urunler ORDER BY Id DESC LIMIT 4");
		$data["yeni"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM urunler ORDER BY RAND() LIMIT 6");
		$data["random"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="";
		$data["menu"]="anasayfa";
		
		$this->load->view('_header',$data);
		$this->load->view('_sidebar');
		$this->load->view('_slider');
		$this->load->view('_content');
		$this->load->view('_footer');
	}
		public function hakkimizda()
	{
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Hakkımızda ||";
		$data["menu"]="hakkimizda";
		
		$this->load->view('_header',$data);
		$this->load->view('_sidebar');
		$this->load->view('hakkimizda');
		$this->load->view('_footer');
	}
	public function iletisim()
	{
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$query->result();
		$data["menu"]="iletisim";
		
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="İletişim || ";
		
		
		$this->load->view('iletisim',$data);
		
	}
	public function bize_ulasin()
	{
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["bize_ulasin"]=$query->result();
		$data["menu"]="bize_ulasin";
		
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="bize_ulasin || ";
		
		
		$this->load->view('bize_ulasin',$data);
		
	}
	public function mesaj_kaydet()
	{
		$data=array(
		'adsoy' => $this->input->post('adsoy'),
		'email' => $this->input->post('email'),
		'tel' => $this->input->post('tel'),
		'mesaj' => $this->input->post('mesaj'),
		'durum' => $this->input->post('durum'),
		'ip' => $_SERVER['REMOTE_ADDR']
		
		
		
		
		);
		$this->db->insert("mesajlar",$data);
		$this->session->set_flashdata("mesaj","Mesajınız Gönderilmiştir");
		redirect(base_url().'home/bize_ulasin');
		
		
	}
	public function uye_kaydet()
	{
		$data=array(
		'adsoy' => $this->input->post('adsoy'),
		'kullanici' => $this->input->post('kullanici'),
		'eposta' => $this->input->post('eposta'),
		'sifre' => $this->input->post('sifre'),
		'durum' => $this->input->post('durum'),
		
		
		
		
		
		);
		$this->db->insert("mesajlar",$data);
		$this->session->set_flashdata("mesaj","Mesajınız Gönderilmiştir");
		redirect(base_url().'home/bize_ulasin');
		
		
	}
	public function login_ol()
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Uye Login || ";
		$data["menu"]="uye";
		
		$this->load->view('login_ol',$data);
		
		
	}
	public function login()
	{
		
		$kullanici=$this->input->post("kullanici");
		$sifre=$this->input->post("sifre");
		
		echo $kullanici = $this->security->xss_clean($kullanici);
		echo $sifre = $this->security->xss_clean($sifre);
		
		$this->load->model("Database_Model");
		$result = $this->Database_Model->login('uyeler',$kullanici,$sifre);
		
		if ($result)
		{
			$sess_array = array(
			'id'=> $result[0]->Id,
			'yetki'=> $result[0]->yetki,
			'kullanici'=> $result[0]->kullanici,
			'adsoy'=> $result[0]->adsoy,
			'resim'=> $result[0]->resim,
			);
			
			$this->session->set_userdata("uye_session",$sess_array);
			redirect(base_url().'uye');
			
		}
		else
		{
			$this->session->set_flashdata("mesaj","Hatalı Kullanıcı Adı veya Şifre");
			redirect(base_url().'home/login_ol');
			
		}
	}
		public function urundetay($id)
	{
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]= $query->result();
		$data["menu"]= "urun";
		$data["sayfa"]= null;
		
		$data["veri"]= $this->Database_Model->get_urun($id);
		
		$query=$this->db->query("SELECT * FROM urunler_resim WHERE urun_id=$id");
		$data["resimler"]= $query->result();
		$this->load->view('urun_detay',$data);
		
		
	}
		public function siparisler($durum)
	{
		$query=$this->db->query("SELECT * FROM siparis WHERE siparisdurumu='$durum'");
		$data["veriler"]= $query->result();
		
		
		
		$this->load->view('siparisler_listesi',$data);
		
		
	}
	public function kategorii($id)
	{
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM kategoriler");
		$data["veri"]=$query->result();
		
		$data["sayfa"]=null;
		$data["menu"]="kategori";
		$query=$this->db->query("SELECT * FROM urunler WHERE kategori=$id");
		$data["veriler"]=$query->result();
		
		
		
		$this->load->view('urun_listele',$data);
		
		
		
		
	}
	
}