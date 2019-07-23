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
                     Üyeler
					 
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
                           Blank
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
                                <h4><i class="icon-reorder"></i> Üyeler Tablosu</h4>
								<a href="<?=base_url()?>admin/uyeler/ekle" class="btn  btn-primary">Üye Ekle</a>
								
								
								
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
                                        <th><i class="icon-bullhorn"></i> Adı Soyadı</th>
                                        <th class="hidden-phone"><i class="icon-question-sign"></i> Kullanıcı</th>
                                        <th><i class="icon-bookmark"></i> Telefon</th>
                                        <th><i class=" icon-edit"></i> Şehir</th>
										<th><i class=" icon-edit"></i> Yetki</th>
										<th><i class=" icon-edit"></i> Durum</th>
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
                                        <td> <?=$rs->adsoy?></td>
                                        <td> <?=$rs->kullanici?></td>
                                        <td> <?=$rs->tel?></td>
                                        <td> <?=$rs->sehir?></td>
										<td> <?=$rs->yetki?></td>
										<td> <span class="label label-danger label-mini"><?=$rs->durum?></span></td>
										<td><a href="<?=base_url()?>admin/uyeler/duzenle/<?=$rs->Id?>"><button class="btn btn-primary"><i class="icon-pencil"></i></button></a></td>
										<td><a href="<?=base_url()?>admin/uyeler/sil/<?=$rs->Id?>"onclick="return confirm('Silmek İstediğinden Emin misin?')"><button class="btn btn-danger"><i class="icon-trash "></i></button></a></td>
                                    </tr>
								<?php }?>
									
                                    
                                    
                                   
                                
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
 