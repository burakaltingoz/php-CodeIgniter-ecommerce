     <!-- BEGIN PAGE -->
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->
            <div class="row-fluid">
               <div class="span12">
                   <!-- BEGIN THEME CUSTOMIZER-->
             
                   <!-- END THEME CUSTOMIZER-->
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                     Anasayfa
                   </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#">Anasayfa</a>
                           
                       </li>
                       <li class="pull-right search-wrap">
                           <form action="search_result.html" class="hidden-phone">
                               <div class="input-append search-input-area">
                                   <input class="" id="appendedInputButton" type="text">
                                   <button class="btn" type="button"><i class="icon-search"></i> </button>
                               </div>
                           </form>
                       </li>
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
             <div class="row-fluid">
                 <div class="span12">
                     <!-- BEGIN BLANK PAGE PORTLET-->
                     		 
						 
						 
						 <div class="widget tabbable green">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Site Ayarları</h4>
                        </div>
                        <div class="widget-body">
                            <div class="tabbable widget-tabs">
                                <ul class="nav nav-tabs">
                                    
                                    
                                    
                                    
                                    <li ><a href="#iletisim" data-toggle="tab">İletişim</a></li>
									<li ><a href="#hakkimizda" data-toggle="tab">Hakkımızda</a></li>
									<li ><a href="#sosyal" data-toggle="tab">Sosyal</a></li>
									<li><a href="#email" data-toggle="tab">E-mail</a></li>
									<li><a href="#genel" data-toggle="tab">Genel</a></li>
                                </ul>
                                <div class="tab-content">
                                    
                                    <div class="tab-pane" id="email">
                                        <p>
                                           <form class="cmxform form-horizontal" id="commentForm" method="post" action="<?=base_url()?>admin/uyeler/ekle_kaydet" novalidate="novalidate">
                                <div class="control-group ">
                                    <label for="cname" class="control-label">Adı Soyadı</label>
                                    <div class="controls">
                                        <input class="span6 " id="cname" name="adsoy" minlength="2" type="text" required="">
                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label for="cemail" class="control-label">Kullanıcı Adı</label>
                                    <div class="controls">
                                        <input class="span6 " id="cemail" type="text" name="kullanici" required="">
                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label for="curl" class="control-label">Şifre</label>
                                    <div class="controls">
                                        <input class="span6 " id="curl" type="password" name="sifre">
                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label for="curl" class="control-label">Telefon No:</label>
                                    <div class="controls">
                                        <input class="span6 " id="curl" type="text" name="tel">
                                    </div>
                                </div>
								<div class="control-group ">
                                    <label for="curl" class="control-label">Adres</label>
                                    <div class="controls">
                                        <input class="span6 " id="curl" type="text" name="adres">
                                    </div>
                                </div>
								<div class="control-group ">
                                    <label for="curl" class="control-label">Şehir</label>
                                    <div class="controls">
                                         <select class="span6 " name="sehir" data-placeholder="Şehir" tabindex="1">
                                        <option value="">Bir Şehir Seçiniz</option>
                                        <option value="Ankara">Ankara</option>
                                        <option value="Aydın">Aydın</option>
                                        <option value="Karabük">Karabük</option>
                                        <option value="Manisa">Manisa</option>
                                    </select>

                                    </div>
                                </div>
								<div class="control-group ">
                                    <label for="curl" class="control-label">Yetki</label>
                                    <div class="controls">
                                         <select class="span6 " name="yetki" data-placeholder="Yetki" tabindex="1">
                                        <option value="">Yetkilendirme Yapınız</option>
                                        <option value="uye">uye</option>
                                        <option value="satici">satici</option>
                                        <option value="reklamci">reklamci</option>
                                        <option value="admin">admin</option>
                                    </select>

                                    </div>
                                </div>
								<div class="control-group ">
                                    <label for="curl" class="control-label">Durum</label>
                                    <div class="controls">
                                         <select class="span6 " name="durum" data-placeholder="Durum" tabindex="1">
                                        <option value="">Durumu Belirtiniz</option>
                                        <option value="aktif">aktif</option>
                                        <option value="pasif">pasif</option>
                                        
                                    </select>

                                    </div>
                                </div>
								
                                <div class="form-actions">
                                    <button class="btn btn-success" type="submit">Kaydet</button>
                                    <button class="btn" type="button">Vazgeç</button>
                                </div>


                            </form>
                                        </p>
                                    </div>
                                    <div class="tab-pane" id="sosyal">
                                        <p>
                                            Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                                        </p>
                                    </div>
									<div class="tab-pane" id="hakkimizda">
                                        <p>
                                            asdasd
                                        </p>
                                    </div>
									<div class="tab-pane" id="iletisim">
                                        <p>
                                            422
											25
                                        </p>
                                    </div>
									<div class="tab-pane active" id="genel">
                                        <p>
                                            Genel Ayarlar
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
						 
						 
                     </div>
                     <!-- END BLANK PAGE PORTLET-->
                 </div>
             </div>
            <!-- END PAGE CONTENT-->
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->
   </div>
   <!-- END CONTAINER -->