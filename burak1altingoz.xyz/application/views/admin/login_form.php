<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Login</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <link href="<?=base_url()?>assets/admin/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="<?=base_url()?>assets/admin/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="<?=base_url()?>assets/admin/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="<?=base_url()?>assets/admin/css/style.css" rel="stylesheet" />
   <link href="<?=base_url()?>assets/admin/css/style-responsive.css" rel="stylesheet" />
   <link href="<?=base_url()?>assets/admin/css/style-default.css" rel="stylesheet" id="style_color" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="lock">
    <div class="lock-header">
        <!-- BEGIN LOGO -->
        <a class="center" id="logo" href="index.html">
            <img class="center" alt="logo" src="<?=base_url()?>img/logo.png">
							
							<?php if ($this->session->flashdata("mesaj")) 
							{?>
							
						  <div class="alert alert-block alert-error fade in">
                              <button data-dismiss="alert" class="close" type="button">×</button>
                              <h4 class="alert-heading">HATA!</h4>
                              <p>
								<?=$this->session->flashdata("mesaj")?>
                              </p>
                          </div>
							<?php } ?>
        </a>
        <!-- END LOGO -->
    </div>
    <div class="login-wrap">
  
        
            <form id="login-form" action="<?=base_url()?>admin/login/login_ol" method="post">
			<div class="metro single-size red">
			<div class="locked">
                <i class="icon-lock"></i>
                <span>ADMİN</span>
            </div>
			</div>
				<div class="metro double-size green">
				
                <div class="input-append lock-input">
					
                    <input type="text" name="kullanici" required class="form-control" placeholder="Kullanıcı Adı">
					
				</div>
				</div>
				
				<div class="metro double-size yellow">
                <div class="input-append lock-input">
                    <input type="password" name="sifre" required class="form-control" placeholder="Şifre">
                </div>
				</div>
				
				<div class="metro single-size terques login">
					<button type="submit" class="btn login-btn">
                    Giriş
                    <i class=" icon-long-arrow-right"></i>
					</button>
				</div>
				
				  <div class="login-footer">
            <div class="remember-hint pull-left">
                <input type="checkbox" id=""> Beni Hatırla
            </div>
            <div class="forgot-hint pull-right">
                <a id="forget-password" class="" href="javascript:;">Şifreni mi unuttun?</a>
            </div>
        </div>
			</form>
        
		</div>
      
    </div>
</body>
<!-- END BODY -->
</html>