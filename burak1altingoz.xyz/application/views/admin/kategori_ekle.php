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
                     Web Mesajları
					 
                   </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#">Web Mesajları</a>
                           <span class="divider">/</span>
                       </li>
                       <li>
                           <a href="#" >Mesaj Tablosu</a>
						   
						 	   
                           <span class="divider">/</span>
                       </li>
                       <li class="active">
                           Size Gelen Mesajlar
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
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
             <div class="row-fluid">
                    <div class="span12">
                        <!-- BEGIN BASIC PORTLET-->
                        <div class="widget orange">
                            <div class="widget-title">
                                <h4><i class="icon-reorder"></i> Mesaj Tablosu</h4>
								<a href="<?=base_url()?>admin/Kategori/ekle" class="btn  btn-primary">Kategori Ekle</a>
								
								
								
								
                            <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <a href="javascript:;" class="icon-remove"></a>
                            </span>
                            </div>
							
							
							
							
                            <div class="widget-body">
                                <form class="form-horizontal style-form" action="<?=base_url()?>admin/Kategori/ekle_kaydet" method="post">
							
							<div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">KATEGORİ ADI</label>
                              <div class="col-sm-10">
                                <input type="text" name="kategori_adi" class="form-control" placeholder="">
                              </div>
							</div>
							
							<div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">PARENT ID</label>
                              <div class="col-sm-10">
                                <input type="text" name="parent_id" class="form-control" placeholder="">
                              </div>
							</div>
							
							<div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">DESCRİPTİON</label>
                              <div class="col-sm-10">
                                <input type="text" name="description" required class="form-control" placeholder="">
                              </div>
							</div>
							
							<div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">KEYWORDS</label>
                              <div class="col-sm-10">
                                <input type="text" name="keywords" class="form-control" placeholder="">
                              </div>
							</div>
							
							<div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">DURUM</label>
                              <div class="col-sm-10">
                                <select name="durum" class="form-control">
								<option>AKTİF</option>
								<option>PASİF</option>
								</select>
							  </div>
							</div>
							
							<div class="form-group">
								<div class="col-sm-10" align="center">
								<button type="submit" class="btn btn-theme03">Kaydet</button>
								</div>
							</div>
						</form>
                            </div>
                        </div>
                        <!-- END BASIC PORTLET-->
						
						<div class="alert alert-success">
                                <button class="close" data-dismiss="alert">×</button>
                                <?= $this->session->flashdata("mesaj")?>
								</div>
								
                    </div>
                </div>
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
 