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
                           Ürün
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
                                <h4><i class="icon-reorder"></i> Ürünler Tablosu</h4>
								<a href="<?=base_url()?>admin/urunler/ekle" class="btn  btn-primary">Ürün Ekle</a>
								
								<div class="alert alert-success">
                                <button class="close" data-dismiss="alert">×</button>
                                <strong><?= $this->session->flashdata("mesaj")?></strong> 
                            </div>
								
                            <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <a href="javascript:;" class="icon-remove"></a>
                            </span>
                            </div>
                            <div class="widget-body">
                                <table class="table table-striped table-bordered table-advance table-hover">
                                    <thead>
                                    <tr>
										<th>Sıra No</th>
                                        <th><i class="icon-bullhorn"></i> Adı</th>
                                        <th class="hidden-phone"><i class="icon-question-sign"></i> Kategori</th>
                                        <th><i class="icon-bookmark"></i> Alış Fiyatı</th>
                                        <th><i class=" icon-edit"></i> Satış Fiyatı</th>
										<th><i class=" icon-edit"></i> Resim</th>
										<th><i class=" icon-edit"></i> Galeri</th>
										
										<th><i class=" icon-edit"></i> Düzenle</th>
										<th><i class=" icon-edit"></i> Sil</th>
                                    </tr>
                                    </thead>
                                    <tbody>
								<?php
								$sno=0;
								foreach ($veriler as $rs)
								{ $sno++;
								?>
									<tr>
                                        <td> <?=$sno?> </td>
                                        <td> <?=$rs->adi?></td>
                                        <td> <?=$rs->katadi?></td>
                                        <td> <?=$rs->afiyat?></td>
                                        <td> <?=$rs->sfiyat?></td>
										<td> 
										<?php if ($rs->resim){?>
										<a href="<?=base_url()?>admin/urunler/resim_yukle/<?=$rs->Id?>"><img src="<?=base_url()?>uploads/<?=$rs->resim?>" height="20" width="35"></a>
									
					
										<?php } else {?>
										<a href="<?=base_url()?>admin/urunler/resim_yukle/<?=$rs->Id?>"><button class="btn btn-small btn-warning"><i class="icon-plus icon-white"></i> Ekle</button></a>
										<?php }?>
										</td>
									
									
										<td>
										<a href="<?=base_url()?>admin/urunler/galeri_yukle/<?=$rs->Id?>"><button class="btn btn-small btn-warning"><i class="icon-plus icon-white"></i> Galeri Ekle</button></a>
										
										</td>
										
										<td><a href="<?=base_url()?>admin/urunler/duzenle/<?=$rs->Id?>"><button class="btn btn-primary"><i class="icon-pencil"></i></button></a></td>
									
										<td><a href="<?=base_url()?>admin/urunler/sil/<?=$rs->Id?>"onclick="return confirm('Silmek İstediğinden Emin misin?')"><button class="btn btn-danger"><i class="icon-trash "></i></button></a></td>
                                    </tr>
								<?php }?>
									
                                    
                                    
                                   
                                
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END BASIC PORTLET-->
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
 