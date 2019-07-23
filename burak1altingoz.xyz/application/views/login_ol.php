<?php
$this->load->view('_header');
$this->load->view('_sidebar');

?>
		<div id="wrapper" class="container">

		
			<section class="header_text sub">
			
				<h4><span>GİRİŞ Yap-Üye Ol</span></h4>
			</section>
			<section class="main-content">				
				
				
				<?php if ($this->session->flashdata("mesaj")){?>
                          <div class="alert alert-error">
                          <?=$this->session->flashdata("mesaj")?>
                            </div>
                              <?php }?>
							  
							  
					<div class="row">	
					
					<div class="span6">					
						<h4 class="title"><span class="text"><strong>GİRİŞ</strong></span></h4>
						
					
						
						
						<form method="post" action="<?=base_url()?>home/login">
						
							<input type="hidden" name="next" value="/">
							<fieldset>
								<div class="control-group">
									<label class="control-label">Kullanıcı Adı</label>
									<div class="controls">
										<input type="text" placeholder="Kullanıcı Adınızı Giriniz" name="kullanici" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Şifre</label>
									<div class="controls">
										<input type="password" placeholder="Şifrenizi Giriniz" name="sifre" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<input tabindex="3" class="btn btn-inverse large" type="submit" value="Giriş yap">
									<hr>
								
								</div>
							</fieldset>
						</form>				
					</div>
					
					
					<div class="span6">					
						<h4 class="title"><span class="text"><strong>Kayıt</strong> Formu</span></h4>
						
						<form method="post" action="<?=base_url()?>uye/uye_kaydet" class="form-stacked">
						
							<fieldset>
								<div class="control-group">
									<label class="control-label">Kullanıcı Adı</label>
									<div class="controls">
										<input type="text" name="kullanici" placeholder="Kullanıcı Adınızı Giriniz" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Email adresi:</label>
									<div class="controls">
										<input type="email" name="eposta" placeholder="Email Adresini Giriniz" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Şifre:</label>
									<div class="controls">
										<input type="password" name="sifre" placeholder="Şifrenizi Giriniz" class="input-xlarge">
									</div>
								</div>							                            
								
								
								<div class="actions"><input tabindex="9" class="btn btn-inverse large" type="submit" value="Hesap Oluştur"></div>
							</fieldset>
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
