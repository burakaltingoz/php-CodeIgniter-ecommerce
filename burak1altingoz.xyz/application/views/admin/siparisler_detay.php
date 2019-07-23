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
                     Siparişler
					 
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
                           Sipariş Güncelleme
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
                                <h4><i class="icon-reorder"></i> Siparişler Güncellemesi</h4>
								
								
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
									<th>Adı</th>
									<th>Fiyat</th>
									<th>Miktar</th>
									<th>Tutar</th>
									<th>İptal</th>
									
								</tr>
							</thead>
							<tbody>
							<?php
							$rn=0;
							$toplam=0;
							
							foreach ($veriler as $rs)
							{ $rn++;
							$toplam+=$rs->tutar;
							
							?>
								<tr>
								    <td><?=$rs->adi?></td>
									<td><?=$rs->fiyat?> TL</td>
									<td><?=$rs->adet?></td>
									<td><?=$rs->tutar?> TL</td>
									<td><a href="" class="btn btn-block btn-danger btn-xs"><i class="fa fa-remove"></i>İptal</td>
									
								</tr>	
                         <?php
							}
  
                  ?>  
								
									  
							</tbody>
						</table>
						<hr>
						<p class="cart-total right">
							<strong>Toplam <?=$toplam?> TL</strong>
							
						</p>
						</hr>
						
						<form method="post" action="<?=base_url()?>admin/siparisler/guncelle/<?=$siparisid?>">	
						
							Kargo Bilgileri  :<input class="form-control" value="<?=$veri[0]->kargo?>" type="text" name="kargo">
							
							İşlem       :
							<select name="siparisdurumu" class="form-control">
							<option><?=$veri[0]->siparisdurumu?></option>
							<option>onaylandi</option>
							<option>Iptal</option>
							<option>kargoda</option>
							<option>tamamlandi</option>
							</select>
							
							Açıklama :
							<textarea class="form-control" name="aciklama" rows=5 cols=100><?=$veri[0]->aciklama?></textarea>
							 
							<button class="shopBtn" type="submit" value="Sepete Ekle"><strong>GÜNCELLE</strong></button>
							</form>
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
 