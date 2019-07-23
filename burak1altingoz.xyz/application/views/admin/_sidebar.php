   <!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid">
      <!-- BEGIN SIDEBAR -->
      <div class="sidebar-scroll">
          <div id="sidebar" class="nav-collapse collapse">

              <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
              <div class="navbar-inverse">
                  <form class="navbar-search visible-phone">
                      <input type="text" class="search-query" placeholder="Search" />
                  </form>
              </div>
              <!-- END RESPONSIVE QUICK SEARCH FORM -->
              <!-- BEGIN SIDEBAR MENU -->
              <ul class="sidebar-menu">
                  <li class="sub-menu">
                      <a class="" href="<?=base_url()?>admin">
                          <i class="icon-home"></i>
                          <span>Anasayfa</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a class="" href="<?=base_url()?>admin/uyeler">
                          <i class="icon-user"></i>
                          <span>Üyeler</span>
                          
                      </a>
                     
                  </li>
                 <li class="sub-menu">
                      <a class="" href="<?=base_url()?>admin/urunler">
                          <i class="icon-cloud"></i>
                          <span>Ürünler</span>
                          
                      </a>
                     
                  </li>
				  <li class="sub-menu">
                      <a class="" href="<?=base_url()?>admin/home/ayarlar">
                          <i class="icon-laptop"></i>
                          <span>Ayarlar</span>
                          
                      </a>
                     
                  </li>
				  <li class="sub-menu">
                      <a class="" >
                          <i class="icon-shopping-cart"></i>
                          <span>Siparişler</span>
						   <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="<?=base_url()?>admin/siparisler/liste/yeni">Yeni</a></li>
                      <li><a class="" href="<?=base_url()?>admin/siparisler/liste/onayli">Onaylananlar</a></li>
					  <li><a class="" href="<?=base_url()?>admin/siparisler/liste/iptal">İptal Edilenler</a></li>
                      <li><a class="" href="<?=base_url()?>admin/siparisler/liste/kargoda">Kargodakiler</a></li>
                      <li><a class="" href="<?=base_url()?>admin/siparisler/liste/tamamlandi">Tamamlananlar</a></li>
                     
                  </ul>

                          
                      </a>
                     
                  </li>
				  <li class="sub-menu">
                      <a class="" href="<?=base_url()?>admin/Mesajlar">
                          <i class="icon-inbox"></i>
                          <span>Web Mesajları</span>
                          
                      </a>
                     
                  </li>
				  <li class="">
						<a href="<?=base_url()?>admin/Kategori">
							<i class=" icon-eject"></i>
							<span class="menu-text"> Kategoriler </span>
						</a>

						<b class="arrow"></b>
					</li>
              </ul>
              <!-- END SIDEBAR MENU -->
          </div>
      </div>
      <!-- END SIDEBAR -->
