<?php
$this->load->view('_header');
$this->load->view('_sidebar');

?>
<section class="main content">

<div class="span8">													
						<div class="row4">
							<div class="span12">
<br><br><br><br>
											<div class="active item">
											<ul class="thumbnails">
                                   <?php
                                       foreach($veriler as $rs)
									   {?>
                                    <li class="span4">
<div class="product-box">	
<a class="zoomTool" href="<?=base_url()?>home/urundetay/<?=$rs->Id?>" title="sepete ekle"><span class="sale_tag"></span></a>
<a href="<?=base_url()?>home/urundetay/<?=$rs->Id?>"><img src="<?=base_url()?>uploads/<?=$rs->resim?>" width="200" height="200"></a>
<div class="caption">

<a class="category"><?=$rs->adi?></a>
<h4>
<a class="defaultBtn" href="<?=base_url()?>home/urundetay/<?=$rs->Id?>" title="Detay için Tıkla"></a>
<a class="shopBtn" title="sepete ekle"></span></a>
<p class="price"><?=$rs->sfiyat?> TL</p>

</h4>
</div>
</div>
</li>

									   <?php }?>							
											
												
												
											</ul>
										</div>
		</section>
				 
					
					
					</div>
					</div>
					</div>
						<script src="<?=base_url()?>assets/js/common.js"></script>		
    </body>
</html>
<?php
$this->load->view('_footer');
?>