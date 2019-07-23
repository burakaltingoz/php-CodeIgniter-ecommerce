<?php
$this->load->view('_header');
$this->load->view('_sidebar');

?>
		<div id="wrapper" class="container">	
			<section class="header_text sub">
			
				<h4><span>Satın Alma Ödeme</span></h4>
			</section>
			<section class="main-content">	
			<div class="row">
				<?php $this->load->view('_uyeslider');?>		
				
					<div class="span10">					
						<h4 class="title"><span class="text"><strong>Satın</strong> Alma</span></h4>
						
						<form class="cmxform form-horizontal" id="commentForm" method="post" action="<?=base_url()?>uye/siparis_tamamla" novalidate="novalidate">
						<?php if ($this->session->flashdata("mesaj")){?>
						<div class="callout callout-info">
						<p><?=$this->session->flashdata("mesaj")?></p>
						</div>
						
						
							<?php }?>
								<div class="control-group ">
							
                                    <label for="inputLname" class="control-label">Adınız Soyadınız<sup>*</sup></label>
                                    <div class="controls">
                                        <input class="hidden" name="adsoy" placeholder="Adınız Soyadınız" value="yeni" minlength="2" type="text">
                                    </div>
                                </div>
                                <div class="control-group ">
							
                                    <label for="inputLname" class="control-label">Adınız Soyadınız<sup>*</sup></label>
                                    <div class="controls">
                                        <input class="span6" name="adsoy" placeholder="Adınız Soyadınız" value="<?=$uye[0]->adsoy?>" minlength="2" type="text">
                                    </div>
                                </div>
								<div class="control-group ">
								<label for="inputLname" class="control-label">Telefon Numarası<sup>*</sup></label>
                                    <div class="controls">
                                        <input class="span6" name="tel" placeholder="Telefon Numarası" value="<?=$uye[0]->tel?>" minlength="2" type="text">
                                    </div>
                                </div>
								<div class="control-group ">
								<label for="inputLname" class="control-label">Adres<sup>*</sup></label>
                                    <div class="controls">
                                        <input class="span6" name="adres" placeholder="Adresiniz" value="<?=$uye[0]->adres?>" minlength="2" type="text">
                                    </div>
                                </div>
								<div class="control-group ">
								<label for="inputLname" class="control-label">Şehir<sup>*</sup></label>
                                    <div class="controls">
                                        <input class="span6" name="sehir" placeholder="Adınız Soyadınız" value="<?=$uye[0]->sehir?>" minlength="2" type="text">
                                    </div>
                                </div>
								<div class="control-group ">
								<label class="control-label">Toplam Tutar<sup>*</sup></label>
                                    <div class="controls">
                                        <input class="span6" name="toplam" readonly value="<?=$toplam?>" minlength="2" type="text">
                                    </div>
                                </div>
								
								<div class="control-group ">
							
                                    <div class="controls">
                                        <input class="exclusive shopBtn" name="submitAccount" value="SİPARİŞİ TAMAMLA" minlength="2" type="submit">
                                    </div>
                                </div>
								
                                
						
						
											
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
