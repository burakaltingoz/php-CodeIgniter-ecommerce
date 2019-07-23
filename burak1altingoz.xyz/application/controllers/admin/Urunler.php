<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Urunler extends CI_Controller {

public function __construct()
{
parent::__construct();

$this->load->model('Database_Model');
$this->load->helper('url');


}
public function index()
{
//$query=$this->db->query("SELECT * FROM urunler ORDER BY adi");
//$data["veriler"]=$query->result();
$data["veriler"]=$this->Database_Model->get_urunler();

$this->load->view('admin/urunler_liste',$data);



}
public function ekle()
{

$this->load->view('admin/urunler_ekle');

}
public function ekle_kaydet()
{
$data=array(
'adi' => $this->input->post('adi'),
'kodu' => $this->input->post('kodu'),
'turu' => $this->input->post('turu'),
'kategori' => $this->input->post('kategori'),
'afiyat' => $this->input->post('afiyat'),
'sfiyat' => $this->input->post('sfiyat'),
'stok' => $this->input->post('stok'),
'keywords' => $this->input->post('keywords'),
'aciklama' => $this->input->post('aciklama'),
'durum' => $this->input->post('durum'),
'tarih' => $this->input->post('tarih'),
'resim' => $this->input->post('resim'),
'grubu' => $this->input->post('grubu'),



);
$this->db->insert("urunler",$data);
$this->session->set_flashdata("mesaj","Üye Kaydı Gerçekleştirildi");
redirect(base_url().'admin/urunler');


}
public function duzenle($id)
{
$query=$this->db->query("SELECT * FROM kategoriler");
$data["veriler"]=$query->result();
$data["veri"]=$this->Database_Model->get_urun($id);
$this->load->view('admin/urunler_duzenle_formu',$data);



}
public function guncelle($id)
{
//form verileri alınıyor
$data=array(
'adi' => $this->input->post('adi'),
'kodu' => $this->input->post('kodu'),
'turu' => $this->input->post('turu'),
'kategori' => $this->input->post('kategori'),
'afiyat' => $this->input->post('afiyat'),
'sfiyat' => $this->input->post('sfiyat'),
'stok' => $this->input->post('stok'),
'description' => $this->input->post('description'),
'keywords' => $this->input->post('keywords'),
'aciklama' => $this->input->post('aciklama'),
'durum' => $this->input->post('durum'),
'tarih' => $this->input->post('tarih'),
'resim' => $this->input->post('resim'),
'grubu' => $this->input->post('grubu'),



);

$this->Database_Model->update_data("urunler",$data,$id);
$this->session->set_flashdata("mesaj","Üye Güncelleme Başarılı");
redirect(base_url().'admin/urunler');


}
public function sil ($id)
{
$this->db->query("DELETE FROM urunler WHERE Id= $id");
$this->session->set_flashdata("mesaj","Üye Silme Başarılı");
redirect(base_url().'admin/urunler');

}
public function resim_yukle($id)
{
$query=$this->db->query("SELECT * FROM urunler WHERE Id= $id");
$data["veri"]=$query->result();
$data["id"]=$id;
$this->load->view('admin/urunler_resim_yukle',$data);

}
public function resim_kaydet($id)
{
$data["id"]=$id;
$config['upload_path']          = './uploads/';

$config['allowed_types']        = 'gif|jpg|png';
$config['max_size']             = 1000;
$config['max_width']            = 1024;
$config['max_height']           = 1024;

$this->load->library('upload', $config);

if ( ! $this->upload->do_upload('resim'))
{
$error = $this->upload->display_errors();
$this->session->set_flashdata("mesaj","Yüklemede Hata Oluştu:".$error);

$this->load->view('admin/urunler\resim_yukle',$data);
}
else
{
$upload_data = $this->upload->data();

$data=array(

'resim' => $upload_data["file_name"]
);
$this->load->model('Database_Model');
$this->Database_Model->update_data("urunler",$data,$id);

redirect(base_url().'admin/urunler');



}

}

public function galeri_yukle($id)
{
$query=$this->db->query("SELECT * FROM urunler_resim WHERE urun_id= $id");
$data["veriler"]=$query->result();
$data["id"]=$id;
$this->load->view('admin/urunler_galeri_yukle',$data);

}
public function galeri_kaydet($id)
{
$data["id"]=$id;

$config['upload_path']          = './uploads/';
$config['allowed_types']        = 'gif|jpg|png';
$config['max_size']             = 1000;
$config['max_width']            = 1024;
$config['max_height']           = 1024;

$this->load->library('upload', $config);

if ( ! $this->upload->do_upload('resim'))
{
$error = $this->upload->display_errors();
$this->session->set_flashdata("mesaj","Yüklemede Hata Oluştu:".$error);

redirect(base_url().'admin/urunler/galeri_yukle/'.$id);
}
else
{
$upload_data = $this->upload->data();

$data=array(
	'urun_id' => $id,
	'resim' => $upload_data["file_name"]
	);
$this->db->insert("urunler_resim",$data);

$this->session->set_flashdata("mesaj","Resim Galeriye Yüklendi");
redirect(base_url().'admin/urunler/galeri_yukle/'.$id);



}

}

public function galeri_sil($urunid,$resimid)
{
$this->db->query("DELETE FROM urunler_resim WHERE Id= $resimid");
$this->session->set_flashdata("mesaj","Resmi Galeriden Silme Başarılı");
redirect(base_url().'admin/urunler/galeri_yukle/'.$urunid);

}

}