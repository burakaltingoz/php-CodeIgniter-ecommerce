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
								
								
								
								
                            <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <a href="javascript:;" class="icon-remove"></a>
                            </span>
                            </div>
							
							
							
							
                            <div class="widget-body">
                                <table class="table table-striped table-bordered table-advance table-hover">
                                    <thead>
                                    <tr>
										<th>Adı Soyadı</th>
											<th>Email</th>
																			
											<th>Mesaj</th>
											
											
											<th>Sil</th>
											
										</tr>
									</thead>
									<tbody>
										<?php
										$sno=0;
										foreach($veriler as $rs)
										{ $sno++;
										?>	
										<tr>
							
											<td><?=$rs->adsoy?></td>
											<td><?=$rs->email?></td>
											
											<td><?=$rs->mesaj?></td>
											
																		
											
											<td>
												
												<a href="<?=base_url()?>admin/Mesajlar/mesaj_sil/<?=$rs->Id?>" onclick="return confirm('Kayıt Silicenek Emin Misiniz?')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o ">Sil</i></button>
											</td>
										</tr>
										<?php } ?>
									
                                    
                                    
                                   
                                
                                    </tbody>
                                </table>
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
 