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
                     ürünler
                   </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#">ürünler</a>
                           <span class="divider">/</span>
                       </li>
                       <li>
                           <a href="#" >ürün Tablosu</a>
						 	   
                           <span class="divider">/</span>
                       </li>
                       <li class="active">
                           ürün Bilgilerini Giriniz
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
                                <button class="close" data-dismiss="alert">×</button>
                                <strong>Hata!</strong> <?=$this->session->flashdata("mesaj")?>
                            </div>
			<?php }?>
			<img src="<?=base_url()?>uploads/<?=$veri[0]->resim?>" height="20" width="450">
			<form class="cmxform form-horizontal"  method="post" enctype="multipart/form-data" action="<?=base_url()?>admin/urunler/resim_kaydet/<?=$id?>" >
                                <div class="control-group ">
                                    
                                    <div class="controls">
                                        <input class="span6 " id="cname" name="resim" minlength="2" type="file" required="" placeholder="Yükleme İçin Gözat">
                                    </div>
                                </div>
                               
                                
								
                                <div class="form-actions">
                                    <button class="btn btn-success" type="submit">Yükle</button>
                                    
                                </div>
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
 