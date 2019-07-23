<div id="wrapper" class="container">

			<section class="main-content">
				<div class="row">
					<div class="span12">													
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Feature <strong>Products</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel" class="myCarousel carousel slide">
									<div class="carousel-inner">
					
					
					
					
					
					
					                  
										<div class="active item">
											<ul class="thumbnails">
                                   <?php
                                       foreach($random as $rs)
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
										
										
									</div>							
								</div>
							</div>						
						</div>
						
						
						
										
									</div>							
								</div>
							</div>						
						
						<div class="row feature_box">						
							<div class="span4">
								<div class="service">
									<div class="responsive">	
										<img src="<?=base_url()?>assets/images/feature_img_2.png" alt="" />
										<h4>MODERN <strong>TASARIMLAR</strong></h4>
																			
									</div>
								</div>
							</div>
							<div class="span4">	
								<div class="service">
									<div class="customize">			
										<img src="<?=base_url()?>assets/images/feature_img_1.png" alt="" />
										<h4>ÜCRESİZ <strong>KARGO</strong></h4>
										
									</div>
								</div>
							</div>
							<div class="span4">
								<div class="service">
									<div class="support">	
										<img src="<?=base_url()?>assets/images/feature_img_3.png" alt="" />
										<h4>24/7 CANLI <strong>DESTEK</strong></h4>
										
									</div>
								</div>
							</div>	
						</div>		
					</div>				
				</div>
				</section>
				</div>