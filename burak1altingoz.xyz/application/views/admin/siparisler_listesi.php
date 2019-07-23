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
                           <a href="#">Siparişler</a>
                           <span class="divider">/</span>
                       </li>
                       <li>
                           <a href="#" >Sipariş Tablosu</a>
						 	   
                           <span class="divider">/</span>
                       </li>
                       <li class="active">
                           Sipariş
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
                                <h4><i class="icon-reorder"></i> Siparişler Tablosu</h4>
								
								
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
									<th>Tarih</th>
									<th>Adı</th>
									<th>Tutar</th>
									<th>Şehir</th>
									<th>Durumu</th>
									<th>Detay</th>
								</tr>
							</thead>
							<tbody>
							<?php
							$rn=0;
							
							foreach ($veriler as $rs)
							{ $rn++;
							
							?>
								<tr>
								    <td><?=$rs->tarih?></td>
									<td><?=$rs->adsoy?></td>
									<td><?=$rs->tutar?> TL</td>
									<td><?=$rs->sehir?></td>
									<td><?=$rs->siparisdurumu?></td>
									<td><a href="<?=base_url()?>admin/siparisler/siparisdetay/<?=$rs->Id?>" class="btn btn-block btn-danger btn-xs"><i class="fa fa-remove"></i>Detay</td>
									
								</tr>	
                         <?php
							}
  
                  ?>  
								
									  
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
 