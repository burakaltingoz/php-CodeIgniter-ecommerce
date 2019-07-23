<div class="row6">
<div class="well np">
<div id="myCarousel" class="container">
<div  class="carousel-inner">
				
					<?php
					$say=0;
					$aktif=null;
					foreach($kampanya as $rs)
					{ $say++;
					if ($say==1)
						$aktif="active";
					else
						$aktif=null;
					?>
					<div class="item <?=$aktif?>">
					<a href="<?=base_url()?>home/urundetay/<?=$rs->Id?>">
					<img style="width:1200px; height:300px;" src="<?=base_url()?>uploads/<?=$rs->resim?>" alt="bootstrap ecommerce templates"> </a>
					<div class="carousel-caption">
					<h4><?=$rs->adi?></h4>
					 <p><span><?=$rs->description?></span></p>
					 </div>
					 </div>
					<?php }?>
					
					
					</div>	
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>	
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>						
			
			</div>
			</div>
			
			
			
			
			