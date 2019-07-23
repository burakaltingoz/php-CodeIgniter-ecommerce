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
			<form class="cmxform form-horizontal" id="commentForm" method="post" action="<?=base_url()?>admin/kategori/guncelle/<?=$veri[0]->Id?>" novalidate="novalidate">
                                <div class="control-group ">
                                    <label for="cname" class="control-label">Adı</label>
                                    <div class="controls">
                                        <input class="span6 " id="cname" name="adi" value="<?=$veri[0]->adi?>" minlength="2" type="text" required="">
                                    </div>
                                </div> 
                                <div class="control-group ">
                                    <label for="cname" class="control-label">Parent Id</label>
                                    <div class="controls">
                                        <input class="span6 " id="cname" name="parent_id" value="<?=$veri[0]->parent_id?>" minlength="2" type="text" required="">
                                    </div>
                                </div> 
								<div class="control-group ">
                                    <label for="cname" class="control-label">Description</label>
                                    <div class="controls">
                                        <input class="span6 " id="cname" name="description" value="<?=$veri[0]->description?>" minlength="2" type="text" required="">
                                    </div>
                                </div>
								<div class="control-group ">
                                    <label for="cname" class="control-label">Keywords</label>
                                    <div class="controls">
                                        <input class="span6 " id="cname" name="keywords" value="<?=$veri[0]->keywords?>" minlength="2" type="text" required="">
                                    </div>
                                </div>
								
								<div class="control-group ">
                                    <label for="curl" class="control-label">Ürün Türü</label>
                                    <div class="controls">
                                         <select class="span6 " name="durum" data-placeholder="Durum" tabindex="1">
										<option value="">***<?=$veri[0]->durum?>***</option>
                                      
                                       <option>AKTİF</option>
								       <option>PASİF</option>
                                        
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
 
 <script type="text/javascript" src="<?=base_url()?>assets/admin/ckeditor/ckeditor.js"></script>
 <script type="text/javascript" src="<?=base_url()?>assets/admin/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
 <script>
 $(function (){
	 CKEDITOR.replace('aciklama')
	 $('textarea').wysihtml5()
 })
 </script>
	 
 

 
 