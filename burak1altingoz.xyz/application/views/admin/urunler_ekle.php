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
                     Ürünler
                   </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#">Ürünler</a>
                           <span class="divider">/</span>
                       </li>
                       <li>
                           <a href="#" >Ürün Tablosu</a>
						 	   
                           <span class="divider">/</span>
                       </li>
                       <li class="active">
                           Ürün Bilgilerini Giriniz
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
			<form class="cmxform form-horizontal" id="commentForm" method="post" action="<?=base_url()?>admin/urunler/ekle_kaydet" novalidate="novalidate">
                                <div class="control-group ">
                                    <label for="cname" class="control-label">Ürün adi</label>
                                    <div class="controls">
                                        <input class="span6 " id="cname" name="adi" minlength="2" type="text" required="">
                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label for="cemail" class="control-label">Ürün Kodu</label>
                                    <div class="controls">
                                        <input class="span6 " id="cemail" type="text" name="kodu" required="">
                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label for="curl" class="control-label">Ürün Türü</label>
                                    <div class="controls">
                                         <select class="span6 " name="turu" data-placeholder="Şehir" tabindex="1">
                                        <option value="">Bir Kategori Seçiniz</option>
                                        <option value="kadin">kadin</option>
                                        <option value="erkek">erkek</option>
                                        <option value="cocuk">cocuk</option>
                                        
                                    </select>

                                    </div>
                                </div>
								<div class="control-group ">
                                    <label for="curl" class="control-label">Kategori</label>
                                    <div class="controls">
                                         <select class="span6 " name="kategori" data-placeholder="kategori" tabindex="1">
                                        <option value="">Bir Kategori Seçiniz</option>
                                        <option value="Spor">Spor</option>
                                        <option value="Aksesuar">Aksesuar</option>
                                        <option value="Ayakkabı">Ayakkabı</option>
                                        <option value="Giyim">Giyim</option>
                                    </select>

                                    </div>
                                </div>
								 <div class="control-group ">
                                    <label for="curl" class="control-label">Alış Fiyatı:</label>
                                    <div class="controls">
                                        <input class="span6 " id="curl" type="text" name="afiyat">
                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label for="curl" class="control-label">Satış Fiyatı:</label>
                                    <div class="controls">
                                        <input class="span6 " id="curl" type="text" name="sfiyat">
                                    </div>
                                </div>
								<div class="control-group ">
                                    <label for="curl" class="control-label">Stok Miktarı</label>
                                    <div class="controls">
                                        <input class="span6 " id="curl" type="text" name="stok">
                                    </div>
                                </div>
								<div class="control-group ">
                                    <label for="curl" class="control-label">Anahtar Kelimeler</label>
                                    <div class="controls">
                                        <input class="span6 " id="curl" type="text" name="keywords">
                                    </div>
                                </div>
								<div class="control-group ">
                                    <label for="curl" class="control-label">Açıklama</label>
                                    <div class="controls">
                                        <input class="span6 " id="curl" type="text" name="aciklama">
                                    </div>
                                </div>
								
								
								<div class="control-group ">
                                    <label for="curl" class="control-label">Durum</label>
                                    <div class="controls">
                                         <select class="span6 " name="durum" data-placeholder="Durum" tabindex="1">
                                        <option value="">Durumu Belirtiniz</option>
                                        <option value="aktif">aktif</option>
                                        <option value="pasif">pasif</option>
                                        
                                    </select>

                                    </div>
                                </div>
								<div class="control-group ">
                                    <label for="curl" class="control-label">Tarih</label>
                                    <div class="controls">
                                        <input class="span6 " id="curl" type="text" name="tarih">
                                    </div>
                                </div>
								<div class="control-group ">
                                    <label for="curl" class="control-label">Ürün Grubu</label>
                                    <div class="controls">
                                        <input class="span6 " id="curl" type="text" name="grubu">
                                    </div>
                                </div>
								
                                <div class="form-actions">
                                    <button class="btn btn-success" type="submit">Kaydet</button>
                                    <button class="btn" type="button">Vazgeç</button>
                                </div>


                            </form>
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
 