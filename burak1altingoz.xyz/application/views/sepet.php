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
						<h4 class="title"><span class="text"><strong>Sepet</strong> BİLGİSİ</span></h4>
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Ürün</th>
									<th>İsim</th>
									<th>Adet</th>
									<th>Parça Fiyatı</th>
									<th>Toplam Fiyatı</th>
								</tr>
							</thead>
							<tbody>
							<?php
							$rn=0;
							$toplam=0;
							foreach ($veriler as $rs)
							{ $rn++;
							$tutar=$rs->satfiyat * $rs->adet;
							$toplam+=$tutar;
							?>
								<tr>
								    <td><img src="<?=base_url()?>uploads/<?=$rs->urunresim?>"></td>
									<td><?=$rs->urunadi?></td>
									<td><input type="text" readonly value="<?=$rs->adet?>" class="input-mini"></td>
								    <td><?=$rs->satfiyat?></td>
									<td><?=($rs->satfiyat * $rs->adet)?>TL</td>
									<td><a href="<?=base_url()?>uye/sepetsil/<?=$rs->Id?>" class="btn btn-block btn-danger btn-xs"><i class="fa fa-remove"></i>Sil</td>
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
						<form method="post" action="<?=base_url()?>uye/satinal" class="buttons center">				
							<input type="hidden" name="toplam" value="<?=$toplam?>">
							<button class="btn" type="submit" value="Sepete Ekle">Satın Al</button>
							</form>
											
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
