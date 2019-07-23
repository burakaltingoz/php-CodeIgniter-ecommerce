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
                     Ayarlar
                   </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#">Site Ayarları</a>
                           
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
				 <div class="alert-heading" style="color:#597940"><strong>
                                <button class="close" data-dismiss="alert">×</button>
                                <?= $this->session->flashdata("mesaj")?>
								</strong>
								</div>
								
                     <!-- BEGIN BLANK PAGE PORTLET-->
                     		 
						
						 
						 <div class="widget tabbable green">
						 
						 
						 
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Site Ayarları </h4>
							
							
							
							
                        </div> 
						
						
						
						<form class="cmxform form-horizontal" id="commentForm" method="post" action="<?=base_url()?>admin/home/ayarlar_guncelle/<?=$veri[0]->Id?>" novalidate="novalidate">
						
							
                        <div class="widget-body">
                            <div class="tabbable widget-tabs">
                                <ul class="nav nav-tabs"> 
								    <li ><a href="#iletisim" data-toggle="tab">İletişim</a></li>
									<li ><a href="#hakkimizda" data-toggle="tab">Hakkımızda</a></li>
									<li ><a href="#sosyal" data-toggle="tab">Sosyal</a></li>
									<li><a href="#email" data-toggle="tab">E-mail</a></li>
									<li><a href="#genel" data-toggle="tab">Genel</a></li>
                                </ul>
								
                                <div class="tab-content">
									<div class="tab-pane active" id="genel">
										<div class="control-group ">
											<label for="cname" class="control-label">Adı</label>
											<div class="controls">
											<input class="span6 " id="genel" name="adi" value="<?=$veri[0]->adi?>" type="text" required="">
											</div>
										</div> 
										<div class="control-group ">
											<label for="cname" class="control-label">Description</label>
											<div class="controls">
											<input class="span6 " id="genel" name="description" value="<?=$veri[0]->description?>" type="text" required="">
											</div>
										</div> 
										<div class="control-group ">
											<label for="cname" class="control-label">Keywords</label>
											<div class="controls">
											<input class="span6 " id="genel" name="keywords" value="<?=$veri[0]->keywords?>" type="text" required="">
											</div>
										</div>
										<div class="control-group ">
											<label for="cname" class="control-label">Adres</label>
											<div class="controls">
											<input class="span6 " id="genel" name="adres" value="<?=$veri[0]->adres?>" type="text" required="">
											</div>
										</div>
										<div class="control-group ">
											<label for="cname" class="control-label">Telefon</label>
											<div class="controls">
											<input class="span6 " id="genel" name="tel" value="<?=$veri[0]->tel?>" type="text" required="">
											</div>
										</div>
										<div class="control-group ">
											<label for="cname" class="control-label">Şehir</label>
											<div class="controls">
											<input class="span6 " id="genel" name="sehir" value="<?=$veri[0]->sehir?>" type="text" required="">
											</div>
										</div>
									</div>
								
								
								
								
								
								
								<div class="tab-pane " id="email">
								<div class="control-group ">
                                    <label for="cname" class="control-label">Smtp Server</label>
                                    <div class="controls">
                                        <input class="span6 " id="email" name="smtpserver" value="<?=$veri[0]->smtpserver?>" type="text" required="">
                                    </div>
                                </div> 
								<div class="control-group ">
                                    <label for="cname" class="control-label">Smtp E-mail</label>
                                    <div class="controls">
                                        <input class="span6 " id="email" name="smtpemail" value="<?=$veri[0]->smtpemail?>" type="text" required="">
                                    </div>
                                </div> 
								<div class="control-group ">
                                    <label for="cname" class="control-label">Port</label>
                                    <div class="controls">
                                        <input class="span6 " id="email" name="smtpport" value="<?=$veri[0]->smtpport?>" type="number" required="">
                                    </div>
                                </div> 
								<div class="control-group ">
                                    <label for="cname" class="control-label">Smtp Şifre</label>
                                    <div class="controls">
                                        <input class="span6 " id="email" name="password" value="<?=$veri[0]->password?>" type="password" required="">
                                    </div>
                                </div> 
								
									
										
								</div>
								
								<div class="tab-pane " id="sosyal">
								<div class="control-group ">
                                    <label for="cname" class="control-label">Facebook</label>
                                    <div class="controls">
                                        <input class="span6 " id="sosyal" name="facebook" value="<?=$veri[0]->facebook?>" type="text" required="">
                                    </div>
                                </div> 
								<div class="control-group ">
                                    <label for="cname" class="control-label">Twitter</label>
                                    <div class="controls">
                                        <input class="span6 " id="sosyal" name="twitter" value="<?=$veri[0]->twitter?>" type="text" required="">
                                    </div>
                                </div> 
								<div class="control-group ">
                                    <label for="cname" class="control-label">İnstagram</label>
                                    <div class="controls">
                                        <input class="span6 " id="sosyal" name="instagram" value="<?=$veri[0]->instagram?>" type="text" required="">
                                    </div>
                                </div> 
								<div class="control-group ">
                                    <label for="cname" class="control-label">Pinterest</label>
                                    <div class="controls">
                                        <input class="span6 " id="sosyal" name="pinterest" value="<?=$veri[0]->pinterest?>" type="text" required="">
                                    </div>
                                </div> 
								
								</div>
								
								<div class="tab-pane " id="hakkimizda">
								<div class="control-group ">
                                    <textarea class="span12 ckeditor" name="hakkimizda" rows=10 cols=10> <?=$veri[0]->hakkimizda?> </textarea> 
                                </div> 
								</div>
								
								<div class="tab-pane " id="iletisim">
								<div class="control-group ">
                                    <textarea class="span12 ckeditor" name="iletisim" rows=10 cols=100> <?=$veri[0]->iletisim?> </textarea> 
                                </div> 
								</div>
                               
                               
								
								
								
								
                                </div>
                            </div>
							

                        </div>
						
			
								
						<div class="form-actions">
                                    <button class="btn btn-success" type="submit">Güncelle</button>
                                    
                                </div>
						
								</form>
								
								
                    </div>
					
					
						 
						 
                     </div>
                     <!-- END BLANK PAGE PORTLET-->
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
 
 
  
 <script type="text/javascript" src="<?=base_url()?>assets/admin/ckeditor/ckeditor.js"></script>
 <script type="text/javascript" src="<?=base_url()?>assets/admin/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
 <script>
 $(function (){
	 CKEDITOR.replace('aciklama')
	 $('textarea').wysihtml5()
 })
 </script>
	 
 
