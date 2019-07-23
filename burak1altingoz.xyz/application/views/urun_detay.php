<?php
$this->load->view('_header');
$this->load->view('_sidebar');

?>
		<div id="wrapper" class="container">	
			<section class="header_text sub">
			
				<h4><span>Ürün Detayı</span></h4>
			</section>
			<section class="main-content">				
				<div class="row">						
					<div class="span9">
						<div class="row">
							<div class="span4">
							<div class="item active">
								<img src="<?=base_url()?>uploads/<?=$veri[0]->resim?>">
</div>								
								
							</div>
							<?php
							
							foreach ($resimler as $rs)
							{ 
							
							?>
								<div class="item active">
								<a href="#"><img src="<?=base_url()?>uploads/<?=$rs->resim?>"></a>
								</div>
										<?php
									}?>
									
							
							<div class="span5">
								<address>
									<strong>Ürün Adı:</strong> <span><?=$veri[0]->adi?></span><br>
									<strong>Stok Miktarı:</strong> <span><?=$veri[0]->stok?></span><br>
									<strong>Ürün Id:</strong> <span><?=$veri[0]->Id?></span><br>
																	
								</address>									
								<h4><strong>FİYAT: <?=$veri[0]->sfiyat?> TL</strong></h4>
							</div>
							<div class="span5">
								<form class="form-inline" method="post" action="<?=base_url()?>uye/sepete_ekle">
								
									
									<p>&nbsp;</p>
									<label>Adet:</label>
									<input type="number" name="adet" class="span1" min="1" max="<?=$veri[0]->stok?>" placeholder="1">
									<input type="hidden" name="urunid" class="span1" value="<?=$veri[0]->Id?>">
									<input type="hidden" name="resim" class="span1" value="<?=$veri[0]->resim?>">
									<button class="btn btn-inverse" value="Sepete Ekle" type="submit">Sepete Ekle</button>
								</form>
							</div>							
						</div>
						<div class="row">
							<div class="span9">
								<ul class="nav nav-tabs" id="myTab">
									<li class="active"><a href="#home">Açıklama</a></li>
									<li class="active"><a href="#home">Taglar</a></li>
									
								</ul>							 
								<div class="tab-content">
									<div class="tab-pane active" id="home"><strong><?=$veri[0]->aciklama?></strong></div>
									<div class="tab-pane" id="profile">
										<table class="table table-striped shop_attributes">	
											<tbody>
												<tr class="">
													<th>Anahtar Kelimeler</th>
													<td><strong><?=$veri[0]->keywords?></strong></td>
												</tr>		
												
											</tbody>
										</table>
									</div>
									
								</div>							
							</div>						
							
						</div>
					</div>
					
						
						
						
					
						
						
						
						
				</div>
			</section>
			
			
			
		</div>
		
		
		
		<script src="<?=base_url()?>assets/js/common.js"></script>		
    </body>
</html>
<?php
$this->load->view('_footer');
?>
