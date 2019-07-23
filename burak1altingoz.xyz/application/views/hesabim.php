<?php
$this->load->view('_header');
$this->load->view('_sidebar');

?>
<?php 
if (!$this->session->userdata("uye_session"))
	redirect(base_url().'uye/login_ol');
?>
		<div id="wrapper" class="container">	
			<section class="header_text sub">
			
				<h4><span>ÜYE HESAP</span></h4>
			</section>
			<section class="main-content">	
<div class="row">
<?php $this->load->view('_uyeslider');?>		
				
					<div class="span7">					
						<h4 class="title"><span class="text"><strong>Üye Hesap Bilgileri</strong></span></h4>
						<?php if ($this->session->flashdata("mesaj")){?>
                          <div class="alert alert-error">
                          <?=$this->session->flashdata("mesaj")?>
                            </div>
                              <?php }?>
						<form method="post" action="<?=base_url()?>uye/uye_guncelle">
							<input type="hidden" name="next" value="/">
							<fieldset>
								<div class="control-group">
									<label class="control-label">Adı Soyadı</label>
									<div class="controls">
										<input type="text" placeholder="Kullanıcı Adınızı Giriniz" value="<?=$uye[0]->adsoy?>" name="adsoy" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Telefon</label>
									<div class="controls">
										<input type="text" placeholder="Telefon Numarası" value="<?=$uye[0]->tel?>" name="tel" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Email</label>
									<div class="controls">
										<input type="email" placeholder="Email Adresi" value="<?=$uye[0]->eposta?>" name="eposta" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Şifre</label>
									<div class="controls">
										<input type="password" placeholder="Şifre" value="<?=$uye[0]->sifre?>" name="sifre" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Adres</label>
									<div class="controls">
										<input type="text" placeholder="Adres" value="<?=$uye[0]->adres?>" name="adres" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Şehir</label>
									<div class="controls">
										<input type="text" placeholder="Şehir" value="<?=$uye[0]->sehir?>" name="sehir" class="input-xlarge">
									</div>
								</div>
								
								
								<div class="control-group">
									<input tabindex="3" class="btn btn-inverse large" type="submit" value="Güncelle">
									<hr>
								
								</div>
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
