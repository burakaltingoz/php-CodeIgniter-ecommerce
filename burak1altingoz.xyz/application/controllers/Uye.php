<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uye extends CI_Controller {
	public function __construct()
{
parent::__construct();

$this->load->model('Database_Model');
$this->load->helper('url');

if (!$this->session->userdata("uye_session"))
	redirect(base_url().'home/login_ol');


}

		public function index()
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM uyeler WHERE Id=".$this->session->uye_session["id"]);
		$data["uye"]=$query->result();
		$data["sayfa"]="Üye Paneli";
		$data["menu"]="uye";
		$this->load->view('hesabim',$data);
		
		
	}
		public function cikis ()
	{
		$this->session->unset_userdata("uye_session");
		redirect(base_url().'home');
		
		
		
	}
	public function hesabim()
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Uye Hesabı || ";
		$data["menu"]="uye";
		
		$query=$this->db->query("SELECT * FROM uyeler WHERE Id=".$this->session->uye_session["id"]);
		$data["uye"]= $query->result();
		
		
		
		$this->load->view('hesabim',$data);
		
	}
	
	public function siparisler()
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="siparis Hesabı || ";
		$data["menu"]="uye";
		
		$query=$this->db->query("SELECT * FROM siparis WHERE musteri_id=".$this->session->uye_session["id"]);
		$data["veriler"]= $query->result();
		
		
		
		$this->load->view('siparisler',$data);
		
		
		
		
		
		
	}
	
	public function uye_guncelle()
	{
		$data=array(
		'adsoy' => $this->input->post('adsoy'),
		'sehir' => $this->input->post('sehir'),
		'tel' => $this->input->post('tel'),
		'adres' => $this->input->post('adres'),
		'sifre' => $this->input->post('sifre'),
		'eposta' => $this->input->post('eposta'),
		
		
		
		
		
		);
		$id=$this->session->uye_session["id"];
		
		$this->Database_Model->update_data("uyeler",$data,$id);
		$this->session->set_flashdata("mesaj","Üye Bilgileriniz Güncellendi");
		redirect(base_url().'uye/hesabim');
		
		
	}
	
	
	public function uye_kaydet()
	{
		$data=array(
		'kullanici' => $this->input->post('kullanici'),
		'eposta' => $this->input->post('eposta'),
		'sifre' => $this->input->post('sifre'),
		'durum' => $this->input->post('durum'),
		'adsoy' => $this->input->post('adsoy'),
		'sehir' => $this->input->post('sehir'),
		'tel' => $this->input->post('tel'),
		'yetki' => $this->input->post('yetki'),
		
		'adres' => $this->input->post('adres'),
		
		'resim' => $this->input->post('resim'),
		
		);
		$this->db->insert("uyeler",$data);
		$this->session->set_flashdata("mesaj","Uye Kaydı Başarılı");
		redirect(base_url().'home/login_ol');
		
	
	
}
public function sepete_ekle()
	{
		$data=array(
		'urun_id' => $this->input->post('urunid'),
		'adet' => $this->input->post('adet'),
		'resim' => $this->input->post('resim'),
		'musteri_id' => $this->session->uye_session["id"]
		
		
		);
		
		
		
		$this->db->insert("sepet",$data);
		$this->session->set_flashdata("mesaj","<p align='center'>Ürün Sepete Eklendi</p>" );
		//redirect(base_url().'home/urundetay/'.$this->input->post('urunid'));
		redirect(base_url().'uye/sepetim');
	}
	public function sepetim()
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Sepetim || ";
		$data["menu"]="sepetim";
		
		$id=$this->session->uye_session["id"];
		
		
		$data['veriler']= $this->Database_Model->sepet_urunler($id);
		
		
		
		$this->load->view('sepet',$data);
		
	}
	public function sepetsil($id)
	{
		$this->db->query("DELETE FROM sepet WHERE Id= $id");
		$this->session->set_flashdata("mesaj","<p align='center'>Ürün Sepetten Silindi</p>" );
		redirect(base_url().'uye/sepetim');
		
		
		
	}
	public function satinal()
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Satın Alma || ";
		$data["menu"]="sepetim";
		
		$data["toplam"] =$this->input->post('toplam');
		$id=$this->session->uye_session["id"];
		
		$query=$this->db->query("SELECT * FROM uyeler WHERE Id= $id");
		$data["uye"]= $query->result();
		
		
		
		$this->load->view('satinalma',$data);
		
	}
	public function siparis_tamamla()
	{
		$data=array(
		'siparisdurumu' => $this->input->post('yeni'),
		'adsoy' => $this->input->post('adsoy'),
		'musteri_id' => $this->session->uye_session["id"],
		'adres' => $this->input->post('adres'),
		'sehir' => $this->input->post('sehir'),
		'tel' => $this->input->post('tel'),
		'siparisdurumu' => 'Yeni',
		'tutar' => $this->input->post('toplam'),
		'IP' => $_SERVER['REMOTE_ADDR']
		
		);
		
		
		
		$this->db->insert("siparis",$data);
		$siparis_id = $this->db->insert_id();
		$id=$this->session->uye_session["id"];
		$veriler= $this->Database_Model->sepet_urunler($id);
		foreach ($veriler as $rs)
		{
			$data=array(
		'adi' => $rs->urunadi,
		'fiyat' => $rs->satfiyat,
		'musteri_id' => $id,
		'urun_id' => $rs->urun_id,
		'siparis_id' => $sipari_sid,
		'adet' => $rs->adet,
		'tutar' => $rs->adet*$rs->satfiyat
		);
		$this->db->insert("siparis_urunler",$data);
		
		}
		$this->db->query("DELETE FROM sepet WHERE musteri_id= $id");
		
		
		
		
		
		redirect(base_url().'uye/islemson');
		
	}
	public function islemson()
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="İşlem Tamamlandı || ";
		$data["menu"]="satinalma";
		
		
		
		$this->load->view('islemson',$data);
		
	}
	
		public function siparisdetay($siparis_id)
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]= $query->result();
		$data["sayfa"]= "Sipariş Detayı  ||";
		$data["menu"]= "uye";
		
		
		$id=$this->session->uye_session["id"];
		
		
		$query=$this->db->query("SELECT * FROM siparis_urunler WHERE siparis_id=$siparis_id");
		$data["veriler"]= $query->result();
		
		
		
		$this->load->view('siparis_detay',$data);
		
		
		
		
		
		
	}

	
		
	
	
	
}