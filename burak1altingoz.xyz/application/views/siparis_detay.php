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
						<h4 class="title"><span class="text"><strong>SİPARİŞ</strong> LİSTESİ</span></h4>
						<table class="table table-striped">
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
							//$tutar=$rs->satfiyat * $rs->adet;
							$toplam+=$rs->$tutar;
							?>
								<tr>
								    <td style="width:10px"><?=$rn?></td>
								    <td><?=$rs->adi?></td>
									<td><?=$rs->fiyat?> TL</td>
									<td><?=$rs->adet?></td>
									<td><?=$rs->tutar?> TL</td>
									<a href="<?=base_url()?>uye/siparis_iptal/<?=$rs->Id?>" onclick="return confirm('İptal Edilecek Emin misiniz?')" class="btn btn-block btn-danger btn-xs">
					  <i class="fa fa-remove"></i>İptal</a></td>
									
								
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
