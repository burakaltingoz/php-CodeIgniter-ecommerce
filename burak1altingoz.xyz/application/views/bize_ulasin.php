<?php
$this->load->view('_header');
$this->load->view('_sidebar');
?>
		<div id="wrapper" class="container">	
			<section class="header_text sub">
			
				<h4><span>Bize Yazın</span></h4>
			</section>
			<section class="main-content">				
				<div class="row">				
					<div class="span5">
						<div>
							<h5>Kişisel İletişim Adresleri</h5>
							<p><strong>Telefon:</strong>&nbsp;05324543234<br>
							<strong>Email:</strong>&nbsp;<a href="#">habb0680@gmail.com</a>								
							</p>
							<br/>
						</div>
					</div>
					<div class="span7">
						<p><?php if ($this->session->flashdata("mesaj")){?>
<div class="alert alert-error">
<?=$this->session->flashdata("mesaj")?>
</div>
<?php }?></p>
						<form method="post" action="<?=base_url()?>home/mesaj_kaydet">
							<fieldset>
								<div class="clearfix">
									<label for="name"><span>Ad Soyad:</span></label>
									<div class="input">
										<input tabindex="1" size="18" name="adsoy" type="text" value="" class="input-xlarge" placeholder="Ad">
									</div>
								</div>
								
								<div class="clearfix">
									<label for="email"><span>Email:</span></label>
									<div class="input">
										<input tabindex="2" size="25" name="email" type="text" value="" class="input-xlarge" placeholder="email">
									</div>
								</div>
								
								<div class="clearfix">
									<label for="message"><span>Mesaj:</span></label>
									<div class="input">
										<textarea tabindex="3" class="input-xlarge" id="message" name="mesaj" rows="7" placeholder="mesaj"></textarea>
									</div>
								</div>
								
								<div class="actions">
									<button tabindex="3" type="submit" class="btn btn-inverse">Gönder</button>
								</div>
							</fieldset>
						</form>
					</div>				
				</div>
			</section>			
			
			
			
		</div>
		
		<script src="themes/js/common.js"></script>		
    </body>
</html>
<?php
$this->load->view('_footer');
?>
