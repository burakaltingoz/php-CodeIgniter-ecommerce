<?php
$this->load->view('_header');
$this->load->view('_sidebar');

?>
		<div id="wrapper" class="container">	
			<section class="header_text sub">
			
				<h4><span>siparis HESAP</span></h4>
			</section>
			<section class="main-content">	
			<div class="row">
				<?php $this->load->view('_uyeslider');?>		
				
					<div class="span10">					
						<h4 class="title"><span class="text"><strong>Sipariş</strong> Durumu</span></h4>
						<table class="table table-striped">
							<thead>
								<tr>
									
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
								    
								     
									<td><?=$rs->adsoy?></td>
									<td><?=$rs->tutar?> TL</td>
									<td><?=$rs->sehir?></td>
									<td>
									<?php if ($rs->siparisdurumu=="kargoda")
									{
										?>
										<a href="<?=$rs->kargo?>" target="_blank" class="btn btn-block btn-danger btn-xs"><i class="fa fa-remove"></i>Kargo Takip</a>
										<?php
									}?>
									<?=$rs->siparisdurumu?>
									</td>
									<td><a href="<?=base_url()?>uye/siparisdetay/<?=$rs->Id?>" class="btn btn-block btn-danger btn-xs"><i class="fa fa-remove"></i>Detay</td>
									
								</tr>	
                         <?php
							}
  
                  ?>
								
									  
							</tbody>
						</table>
						
						
											
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
