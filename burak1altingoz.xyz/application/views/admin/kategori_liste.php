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
                           <a href="#">Kategori Listesi</a>
                           <span class="divider">/</span>
                       </li>
                       <li>
                           <a href="#" >Kategori Tablosu</a>
						   
						 	   
                           <span class="divider">/</span>
                       </li>
                       <li class="active">
                           Kategoriler
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
                                <h4><i class="icon-reorder"></i> Kategori Tablosu</h4>
								<a href="<?=base_url()?>admin/Kategori/ekle" class="btn  btn-primary">Kategori Ekle</a>
								
								
								
								
                            <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <a href="javascript:;" class="icon-remove"></a>
                            </span>
                            </div>
							
							
							
							
                            <div class="widget-body">
                                <table class="table table-striped table-bordered table-advance table-hover">
                                    <thead>
										<tr>
											<th>Kategori Adı</th>
											<th>Parent ID</th>
											<th>Description</th>								
											<th>Keywords</th>
											
											<th>Durum</th>
											<th>İşlemler</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$sno=0;
										foreach($veriler as $rs)
										{ $sno++;
										?>	
										<tr>
							
											<td><?=$rs->adi?></td>
											<td><?=$rs->parent_id?></td>
											<td><?=$rs->description?></td>
											<td><?=$rs->keywords?></td>
											
											<td><?=$rs->durum?></td>									
											
											<td>
												<a href="<?=base_url()?>admin/Kategori/duzenle/<?=$rs->Id?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil">Düzenle</a></i></button>
												<a href="<?=base_url()?>admin/Kategori/sil/<?=$rs->Id?>" onclick="return confirm('Kayıt Silicenek Emin Misiniz?')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o ">Sil</i></button>
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
 