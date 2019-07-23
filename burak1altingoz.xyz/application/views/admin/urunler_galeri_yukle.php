<?php
$this->load->view('admin/_header');
$this->load->view('admin/_sidebar');
?>
<!-- BEGIN PAGE -->
<div id="main-content">
<!-- BEGIN PAGE CONTAINER-->
<div class="container-fluid">
<!-- BEGIN PAGE HEADER-->
<div class="row-fluid">
<div class="span12">
<!-- BEGIN THEME CUSTOMIZER-->
<!-- END THEME CUSTOMIZER-->
<!-- BEGIN PAGE TITLE & BREADCRUMB-->
<h3 class="page-title">
Ürün galeri ekleme
</h3>
<ul class="breadcrumb">
<li>
<a href="#">Ürün Galeri Ekle</a>
</li>
<li class="pull-right search-wrap">
<form action="search_result.html" class="hidden-phone">
<div class="input-append search-input-area">
<input class="" id="appendedInputButton" type="text">
<button class="btn" type="button"><i class="icon-search"></i> </button>
</div>
</form>
</li>
</ul>
<!-- END PAGE TITLE & BREADCRUMB-->
</div>
</div>
<?php if ($this->session->flashdata("mesaj")){?>
<div class="alert alert-error">
<?=$this->session->flashdata("mesaj")?>
</div>
<?php }?>

<form class="cmxform form-horizontal"  method="post" enctype="multipart/form-data" action="<?=base_url()?>admin/urunler/galeri_kaydet/<?=$id?>" >
<div class="control-group ">

<div class="controls">
<input class="span6 " id="cname" name="resim" minlength="2" type="file" required="" placeholder="Yükleme İçin Gözat" onchange="this.form.submit()">
</div>
</div>



<div class="form-actions">
<button class="btn btn-success" type="submit">Kaydet</button>

</div>
</div>


</form>

<?php foreach($veriler as $rs){?>

<img src="<?=base_url()?>uploads/<?=$rs->resim?>" height="150" width="150" >

<a href="<?=base_url()?>admin/urunler/galeri_sil/<?=$id?>/<?=$rs->Id?>" onclick="return confirm('Silmek istediğinizden emin misiniz?')"><button class="btn btn-success" type="submit">Sil</button></a>

<?php }?>

<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->

<!-- END PAGE CONTENT-->
</div>
<!-- END PAGE CONTAINER-->
</div>
<!-- END PAGE -->
</div>
<!-- END CONTAINER -->

<?php
$this->load->view('admin/_footer');
?>
