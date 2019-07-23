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
                     Üye Düzenleme Menüsü
                   </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#">Üyeler</a>
                           <span class="divider">/</span>
                       </li>
                       <li>
                           <a href="#" >Üye Tablosu</a>
						 	   
                           <span class="divider">/</span>
                       </li>
                       <li class="active">
                           Üye Düzenleme Bilgilerini Giriniz
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
			<form class="cmxform form-horizontal" id="commentForm" method="post" action="<?=base_url()?>admin/uyeler/guncelle/<?=$veri[0]->Id?>" novalidate="novalidate">
                                <div class="control-group ">
                                    <label for="cname" class="control-label">Adı Soyadı</label>
                                    <div class="controls">
                                        <input class="span6 " id="cname" name="adsoy" value="<?=$veri[0]->adsoy?>" minlength="2" type="text" required="">
                                    </div>
                                </div> 
                                <div class="control-group ">
                                    <label for="cemail" class="control-label">Kullanıcı Adı</label>
                                    <div class="controls">
                                        <input class="span6 " id="cemail" type="text" name="kullanici" value="<?=$veri[0]->kullanici?>" required="">
                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label for="curl" class="control-label">Şifre</label>
                                    <div class="controls">
                                        <input class="span6 " id="curl" type="email" name="sifre" value="<?=$veri[0]->sifre?>">
                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label for="curl" class="control-label">Telefon No:</label>
                                    <div class="controls">
                                        <input class="span6 " id="curl" type="text" name="tel" value="<?=$veri[0]->tel?>">
                                    </div>
                                </div>
								<div class="control-group ">
                                    <label for="curl" class="control-label">Adres</label>
                                    <div class="controls">
                                        <input class="span6 " id="curl" type="text" name="adres" value="<?=$veri[0]->adres?>">
                                    </div>
                                </div>
								<div class="control-group ">
                                    <label for="curl" class="control-label">Şehir</label>
                                    <div class="controls">
                                         <select class="span6 " name="sehir"  data-placeholder="Şehir" tabindex="1">
										<option value="">***<?=$veri[0]->sehir?>***</option>
                                        
                                        <option value="Ankara">Ankara</option>
                                        <option value="Aydın">Aydin</option>
                                        <option value="Karabük">Karabük</option>
                                        <option value="Manisa">Manisa</option>
                                    </select>

                                    </div>
                                </div>
								<div class="control-group ">
                                    <label for="curl" class="control-label">Yetki</label>
                                    <div class="controls">
                                         <select class="span6 " name="yetki" data-placeholder="Yetki" tabindex="1">
										<option value="">***<?=$veri[0]->yetki?>***</option>
                                        
                                        <option value="uye">uye</option>
                                        <option value="satici">satici</option>
                                        <option value="reklamci">reklamci</option>
                                        <option value="admin">admin</option>
                                    </select>

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
 