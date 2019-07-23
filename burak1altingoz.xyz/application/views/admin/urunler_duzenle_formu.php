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
                     Ürün Düzenleme Menüsü
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
                           Ürün Düzenleme Bilgilerini Giriniz
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
			<form class="cmxform form-horizontal" id="commentForm" method="post" action="<?=base_url()?>admin/urunler/guncelle/<?=$veri[0]->Id?>" novalidate="novalidate">
                                <div class="control-group ">
                                    <label for="cname" class="control-label">Adı</label>
                                    <div class="controls">
                                        <input class="span6 " id="cname" name="adi" value="<?=$veri[0]->adi?>" minlength="2" type="text" required="">
                                    </div>
                                </div> 
                                <div class="control-group ">
                                    <label for="cname" class="control-label">Ürün Kodu</label>
                                    <div class="controls">
                                        <input class="span6 " id="cname" name="kodu" value="<?=$veri[0]->kodu?>" minlength="2" type="text" required="">
                                    </div>
                                </div> 
								<div class="control-group ">
                                    <label for="curl" class="control-label">Ürün Türü</label>
                                    <div class="controls">
                                         <select class="span6 " name="turu" data-placeholder="Durum" tabindex="1">
										<option value="">***<?=$veri[0]->turu?>***</option>
                                      
                                        <option value="kadin">Kadin</option>
                                        <option value="pasif">Erkek</option>
										<option value="pasif">Cocuk</option>
                                        
                                    </select>

                                    </div>
                                </div>
								
                              
                               
								
								<div class="control-group ">
                                    <label for="curl" class="control-label">Kategori</label>
                                    <div class="controls">
                                         <select class="span6 " name="kategori"  data-placeholder="Kategori" tabindex="1">
										<option value="<?=$veri[0]->kategori?>">***<?=$veri[0]->katadi?>***</option>
                                        
										<?php foreach($veriler as $rs){?>
										
										<option value="<?=$rs->Id?>">***<?=$rs->adi?>***</option>

										<?php }?>
                                        
                                    </select>

                                    </div>
                                </div> 
								<div class="control-group ">
                                    <label for="cname" class="control-label">Alış Fiyatı</label>
                                    <div class="controls">
                                        <input class="span6 " id="cname" name="afiyat" value="<?=$veri[0]->afiyat?>" minlength="2" type="text" required="">
                                    </div>
                                </div> 
								<div class="control-group ">
                                    <label for="cname" class="control-label">Satış Fiyatı</label>
                                    <div class="controls">
                                        <input class="span6 " id="cname" name="sfiyat" value="<?=$veri[0]->sfiyat?>" minlength="2" type="text" required="">
                                    </div>
                                </div> 
								<div class="control-group ">
                                    <label for="cname" class="control-label">Stok Miktarı</label>
                                    <div class="controls">
                                        <input class="span6 " id="cname" name="stok" value="<?=$veri[0]->stok?>" minlength="2" type="text" required="">
                                    </div>
                                </div> 
								<div class="control-group ">
                                    <label for="cname" class="control-label">Anahtar Kelimeler</label>
                                    <div class="controls">
                                        <input class="span6 " id="cname" name="keywords" value="<?=$veri[0]->keywords?>" minlength="2" type="text" required="">
                                    </div>
                                </div>
								<div class="control-group ">
                                    <label for="cname" class="control-label">Açıklama</label>
                                    <div class="controls">
                                        <input class="span6 " id="cname" name="aciklama" value="<?=$veri[0]->aciklama?>" minlength="2" type="text" required="">
                                    </div>
                                </div> 
								<div class="control-group ">
                                    <label for="curl" class="control-label">Durum</label>
                                    <div class="controls">
                                         <select class="span6 " name="durum" data-placeholder="Durum" tabindex="1">
										<option value="">***<?=$veri[0]->durum?>***</option>
                                      
                                        <option value="aktif">aktif</option>
                                        <option value="pasif">pasif</option>
                                        
                                    </select>

                                    </div>
                                </div>
								<div class="control-group ">
                                    <label for="cname" class="control-label">Tarih</label>
                                    <div class="controls">
                                        <input class="span6 " id="cname" name="tarih" value="<?=$veri[0]->tarih?>" minlength="2" type="text" required="">
                                    </div>
                                </div> 
								<div class="control-group ">
                                    <label for="cname" class="control-label">Ürün Grubu</label>
                                    <div class="controls">
                                        <input class="span6 " id="cname" name="grubu" value="<?=$veri[0]->grubu?>" minlength="2" type="text" required="">
                                    </div>
                                </div> 
								
								
								
                                <div class="form-actions">
                                    <button class="btn btn-success" type="submit">Güncelle</button>
                                    
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
 
 <script type="text/javascript" src="<?=base_url()?>assets/admin/ckeditor/ckeditor.js"></script>
 <script type="text/javascript" src="<?=base_url()?>assets/admin/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
 <script>
 $(function (){
	 CKEDITOR.replace('aciklama')
	 $('textarea').wysihtml5()
 })
 </script>
	 
 

 
 