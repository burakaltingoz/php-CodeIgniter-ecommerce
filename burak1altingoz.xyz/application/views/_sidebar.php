<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="<?=base_url()?>home" class="logo pull-left"><img src="<?=base_url()?>assets/images/logo.png" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
						<ul>
					 <?php
					 $anasayfa=null;
					 $hakkimizda=null;
					 $kategoriler=null;
					 $kampanyalar=null;
					 $bize_ulasin=null;
					 $iletisim=null;
					 if ($menu=="anasayfa")
						 $anasayfa="active";
					 if ($menu=="hakkimizda")
						 $hakkimizda="active";
					 if ($menu=="kategoriler")
						 $kategoriler="active";
					 if ($menu=="kampanyalar")
						 $kampanyalar="active";
					 if ($menu=="bize_ulasin")
						 $bize_ulasin="active";
					 if ($menu=="iletisim")
						 $iletisim="active";
					 
					 ?>
						
							<li class="<?=$anasayfa?>"><a href="<?=base_url()?>home">Anasayfa</a>					
								
							</li>															
							<li class="<?=$hakkimizda?>"><a href="<?=base_url()?>home/hakkimizda">Hakkımızda</a></li>
							<li class="<?=$kategoriler?>"><a>Kategoriler</a>
							<ul >									
									<?php foreach ($veri as $rs) {?>
										<li><a href="<?=base_url()?>home/kategorii/<?=$rs->Id?>"><br><span class="icon-chevron-right"></span><?=$rs->adi?></a>
											
										</a></li>
									<?php }?>
								</ul>
								</li>
						    
                            <li class="<?=$bize_ulasin?>"><a href="<?=base_url()?>home/bize_ulasin">Bize Ulaşın</a></li>
                            							
							<li class="<?=$iletisim?>"><a href="<?=base_url()?>home/iletisim">İletişim</a></li>
								
														
							
						</ul>
					</nav>
				</div>
			</section>
			</div>
			