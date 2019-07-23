<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?=$sayfa?> <?=$veri[0]->adi?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?=$veri[0]->description?>">
		<meta name="keywords" content="<?=$veri[0]->keywords?>">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="<?=base_url()?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="<?=base_url()?>assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		
		<link href="<?=base_url()?>assets/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="<?=base_url()?>assets/css/flexslider.css" rel="stylesheet"/>
		<link href="<?=base_url()?>assets/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="<?=base_url()?>assets/js/jquery-1.7.2.min.js"></script>
		<script src="<?=base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>				
		<script src="<?=base_url()?>assets/js/superfish.js"></script>	
		<script src="<?=base_url()?>assets/js/jquery.scrolltotop.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>		
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<form method="POST" class="search_form">
						<input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt">
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">	
                            <?php 
								if($this->session->userdata("uye_session"))
								{?>
							<li><a href="<?=base_url()?>home"><span class ="icon-home"></span>Anasayfa</a></li>						
							<li><a href="<?=base_url()?>uye"><span class ="icon-user"></span>Hesabım</a></li>
							<li><a href="<?=base_url()?>uye/sepetim"><span class ="icon-shopping-cart"></span>Sepet</a></li>		
                            
							<li class="dropdown ">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="fa fa-user"></span><strong>
							<?=$this->session->uye_session["adsoy"]?></strong> <b class="caret"></b></a>
							<div class="dropdown-menu">
							<a href="<?=base_url()?>Uye/hesabim"><strong>Hesap Bilgileri</strong></a><br>
							<a href="<?=base_url()?>Uye/sepetim"><strong>Sepetim</strong></a><br>
							<a href="<?=base_url()?>Uye/siparisler"><strong>Şiparişlerim</strong></a><br>
							<a href="<?=base_url()?>Uye/cikis"><strong>Çikiş</strong></a><br>
								</div>
								</li>
								<?php }
								else
								{?>
							<li><a href="<?=base_url()?>home"><span class ="icon-home"></span>Anasayfa</a></li>						
							<li><a href="<?=base_url()?>uye"><span class ="icon-user"></span>Hesabım</a></li>
							<li><a href="<?=base_url()?>uye/sepetim"><span class ="icon-shopping-cart"></span>Sepet</a></li>		
                            <li><a href="<?=base_url()?>home/login_ol"><span class ="icon-edit"></span>Kayıt</a></li>
							<li class="dropdown">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="icon-lock"></span> Giriş<b class="caret"></b></a>
							<div class="dropdown-menu">
							
							
							<form class="form-horizontal loginFrm" method="post" action="<?=base_url()?>home/login">
							
							<div class="control-group">
							<input type="text" class="span2" name="kullanici" id="inputEmail" placeholder="Kullanıcı Adı">
							</div>
								
								<div class="control-group">
							<input type="password" class="span2" name="sifre" id="inputPassword" placeholder="Şifre">
							</div>
							
							<div class="control-group">
							<label class="checkbox">
							<input type="checkbox"> Beni Hatırla
							</label>
							<button type="submit" class="shopBtn btn-block">Giriş</button>
							</div>
							
							</form>
							</div>
							</li>
								<?php }
								?>
								
						
						</ul>
					</div>
				</div>
			</div>
		</div>
		