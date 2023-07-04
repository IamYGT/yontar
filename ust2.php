   <header class="main-header main-header--three  clearfix">
            <div class="main-header-three__top main-header-four__top">
                <div class="auto-container">
                    <div class="main-header-three__top-inner main-header-four__top-inner clearfix">
                        <div class="main-header-three__top-left main-header-four__top-left">
                            <ul class="list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-phone-call"></span>
                                    </div>
                                    <div class="text">
                                        <p>Telefon : <a href="tel:<?php echo $ayarlar["strPhone"]; ?>"><?php echo $ayarlar["strPhone"]; ?></a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-envelope"></span>
                                    </div>
                                    <div class="text">
                                        <p>Eposta : <a href="mailto:<?php echo $ayarlar["strMail"]; ?>"><?php echo $ayarlar["strMail"]; ?></a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-clock"></span>
                                    </div>
                                    <div class="text">
                                        <p><?php echo $ayarlar["strAnalytics"]; ?></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="main-header-three__bottom main-header-four__bottom">
                <div class="auto-container">
                    <div class="main-header-three__bottom-inner main-header-four__bottom-inner clearfix">
                        <nav class="main-menu main-menu--1">
                            <div class="main-menu__inner">
                                <div class="left">
                                    <div class="logo-box3 logo-box3--style2">
                                        <a href="<?php echo $ayarlar["strURL"]; ?>">
                                            <img src="<?php echo $ayarlar["strURL"]; ?>/assets/images/resources/logo-3.png" alt="Yontar Logo">
                                        </a>
                                    </div>
                                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                    <ul class="main-menu__list">
                                        <li class="<?php echo ($_SERVER["PHP_SELF"] == "/index.php" ? "current" : null) ?>">
                                            <a href="<?php echo $ayarlar["strURL"]; ?>">Anasayfa</a>
                                            <ul>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Kurumsal</a>
                                            <ul>
											<?php
				$veri_cek = $db->query("SELECT * FROM icerikler WHERE icerik_durum = 1 AND dil_id = '{$lang}' ORDER BY icerik_ust_id");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?> 
												<li><a href="<?php echo $ayarlar["strURL"]; ?>/kurumsal/<?php echo $veri_listele["icerik_seo"]; ?>"><?php echo 	$veri_listele["icerik_baslik"]; ?></a></li> 
                                              
											  <?php 
					}
				}else{
					"Listelenecek veri bulunamadı.";
				}
?>
												</ul>
                                        </li>
										 <li class="<?php echo ($_SERVER["PHP_SELF"] == "/urunler.php" ? "current" : null) ?>" >
                                            <a href="<?php echo $ayarlar["strURL"]; ?>/urunler">Ürünler</a> 
                                        </li>
										  
                                        <li class="<?php echo ($_SERVER["PHP_SELF"] == "/satis-noktalarimiz.php" ? "current" : null) ?>"> <a href="<?php echo $ayarlar["strURL"]; ?>/satis-noktalarimiz">Satış Noktalarımız</a></li>
                                       
                                        <li class="<?php echo ($_SERVER["PHP_SELF"] == "/haberler.php" ? "current" : null) ?>"><a href="<?php echo $ayarlar["strURL"]; ?>/haberler">Haberler</a></li>
                                        <li class="<?php echo ($_SERVER["PHP_SELF"] == "/sss.php" ? "current" : null) ?>"><a href="<?php echo $ayarlar["strURL"]; ?>/sss">S.S.S</a></li>
                                        <li class="<?php echo ($_SERVER["PHP_SELF"] == "/iletisim.php" ? "current" : null) ?>"><a href="<?php echo $ayarlar["strURL"]; ?>/iletisim">İletişim</a></li>
                                    </ul>
                                </div>
                              <div class="main-header-four__bottom_right">
                                    <div class="main-menu__right">
                                        <div class="btn-box">
                                            <a href="tel:<?php echo $ayarlar["strPhone"]; ?>" class="thm-btn">  <?php echo $ayarlar["strPhone"]; ?>   </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <div class="stricky-header stricky-header--style4 stricked-menu main-menu">
            <div class="sticky-header__content">
            </div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->