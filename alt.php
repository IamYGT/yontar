  <section class="features-one features-one--features-five clearfix">
            <div class="container">
                <div class="row">
                    <!--Start Single Features One -->
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="features-one__single wow fadeInLeft animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="features-one__single-left">
                                <div class="features-one__single-left-icon">
                                    <img src="<?php echo $ayarlar["strURL"]; ?>/assets/images/icon/features-v1-icon1.png" alt="Yontar">
                                </div>
                                <div class="features-one__single-left-text">
                                    <h4><a href="<?php echo $ayarlar["strURL"]; ?>/satis-noktalarimiz">Satış Ekiplerine<br>Ulaşmak için Tıklayın</a></h4>
                                </div>
                            </div>
                            <div class="features-one__single-right">
                                <div class="features-one__single-right-btn">
                                    <a href="<?php echo $ayarlar["strURL"]; ?>/satis-noktalarimiz"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Features One -->
                    <!--Start Single Features One -->
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="features-one__single wow fadeInRight animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="features-one__single-left">
                                <div class="features-one__single-left-icon">
                                    <img src="<?php echo $ayarlar["strURL"]; ?>/assets/images/icon/features-v1-icon2.png" alt="Yontar">
                                </div>
                                <div class="features-one__single-left-text">
                                    <h4><a href="<?php echo $ayarlar["strURL"]; ?>/urunler">Ürün Pörtföyümüze Ulaşmak İçin Tıklayın</a></h4>
                                </div>
                            </div>
                            <div class="features-one__single-right">
                                <div class="features-one__single-right-btn">
                                    <a href="<?php echo $ayarlar["strURL"]; ?>/urunler"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Features One -->
                </div>
            </div>
        </section>
		<footer class="footer-one">
            <div class="container">
                <div class="footer-one__top">
                    <div class="footer-one__bg" style="background-image: url(<?php echo $ayarlar["strURL"]; ?>/assets/images/backgrounds/footer-v1-bg.png);"></div>
                    <div class="big-title">
                        <h2>YONTAR</h2>
                    </div>
                    <div class="row">
                        <!--Start Footer Widget Column-->
                        <div class="col-xl-2 col-lg-2 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                            <div class="footer-widget__column footer-widget__overview mar-top">
                                <h3 class="footer-widget__title">Menü</h3>
                                <ul class="footer-widget__overview-list list-unstyled">
                                    <li><a href="<?php echo $ayarlar["strURL"]; ?>/index"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Anasayfa</a></li>
                                    <li><a href="<?php echo $ayarlar["strURL"]; ?>/urunler"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Ürünler</a></li>
                                    <li><a href="<?php echo $ayarlar["strURL"]; ?>/satis-noktalarimiz"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Satış Noktalarımız</a></li>
                                    <li><a href="<?php echo $ayarlar["strURL"]; ?>/haberler"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Haberler</a></li>
                                    <li><a href="<?php echo $ayarlar["strURL"]; ?>/sss"><i class="fa fa-angle-double-right" aria-hidden="true"></i>S.S.S</a></li>
                                    <li><a href="<?php echo $ayarlar["strURL"]; ?>/iletisim"><i class="fa fa-angle-double-right" aria-hidden="true"></i>İletişim</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--End Footer Widget Column-->
                        <!--Start Footer Widget Column-->
                        <div class="col-xl-3 col-lg-3 col-md-6 wow animated fadeInUp" data-wow-delay="0.3s">
                            <div class="footer-widget__column footer-widget__company mar-top">
                                <h3 class="footer-widget__title">Kurumsal</h3>
                                <ul class="footer-widget__company-list list-unstyled">
                                     
									 <?php
				$veri_cek = $db->query("SELECT * FROM icerikler WHERE icerik_durum = 1 AND dil_id = '{$lang}' ORDER BY icerik_ust_id");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?> 
												<li><a href="<?php echo $ayarlar["strURL"]; ?>/kurumsal/<?php echo $veri_listele["icerik_seo"]; ?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i> <?php echo 	$veri_listele["icerik_baslik"]; ?></a></li> 
                                              
											  <?php 
					}
				}else{
					"Listelenecek veri bulunamadı.";
				}
?>

                                 
								</ul>
                            </div>
                        </div>
                        <!--End Footer Widget Column-->
                        <!--Start Footer Widget Column-->
                        <div class="col-xl-3 col-lg-3 col-md-6 wow animated fadeInUp" data-wow-delay="0.5s">
                            <div class="footer-widget__column footer-widget__newsletter mar-top">
                                <h3 class="footer-widget__title">İletişime Geçin</h3>
								 <div class="footer-contact-info">
                                    <ul class="list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <i class="icon-pin map" aria-hidden="true"></i>
                                            </div>
                                            <div class="text">
                                                <p><?php echo $ayarlar["strAddress"]; ?></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="icon-letter" aria-hidden="true"></i>
                                            </div>
                                            <div class="text">
                                                <a href="mailto:<?php echo $ayarlar["strMail"]; ?>"><?php echo $ayarlar["strMail"]; ?></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="icon-phone-call" aria-hidden="true"></i>
                                            </div>
                                            <div class="text">
                                                <a href="tel:<?php echo $ayarlar["strPhone"]; ?>"><?php echo $ayarlar["strPhone"]; ?></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                              
                            </div>
                        </div>
                        <!--End Footer Widget Column-->
                        <!--Start Footer Widget Column-->
                        <div class="col-xl-4 col-lg-4 col-md-6 wow animated fadeInUp" data-wow-delay="0.7s">
                            <div class="footer-widget__column footer-widget__about">
                                <div style="    margin-top: 113px;" class="footer-widget__about-logo">
                                    <a href="<?php echo $ayarlar["strURL"]; ?>/index"><img src="<?php echo $ayarlar["strURL"]; ?>/assets/images/resources/footer-v1-logo.png" alt=""></a>
                                </div>
                               
                            </div>
                        </div>
                        <!--End Footer Widget Column-->
                    </div>
                </div>
                <!--Start Footer One Bottom-->
                <div class="footer-one__bottom">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="footer-one__bottom-inner">
                                <div class="footer-one__bottom-text text-center">
                                    <p>2021 <a href="#">Yontar</a> &copy; Her Hakkı Saklıdır. Design By <a href="https://www.seyhanweb.com"> Seyhan Web </a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Footer One Bottom-->
            </div>
        </footer>
        <!--End Footer One-->
    </div><!-- /.page-wrapper -->
    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="assets/images/resources/logo-1.png" width="155" alt=""></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->
            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="icon-phone-call"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@conbiz.com</a>
                </li>
                <li>
                    <i class="icon-letter"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->
        </div>
        <!-- /.mobile-nav__content -->
    </div> 
    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
    <script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/jquery/jquery-3.5.1.min.js"></script>
    <script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/odometer/odometer.min.js"></script>
    <script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/swiper/swiper.min.js"></script>
    <script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/wow/wow.js"></script>
    <script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/isotope/isotope.js"></script>
    <script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/countdown/countdown.min.js"></script>
    <script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/twentytwenty/twentytwenty.js"></script>
    <script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/twentytwenty/jquery.event.move.js"></script>
    <script src="<?php echo $ayarlar["strURL"]; ?>/assets/js/conbiz.js"></script>
		<script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
		<style>
		.form-control
		{
			color: #2e2e36;
    font-size: 18px;
    font-weight: 700;
    width: 100%;
    height: 75px;
    background: #f4f4f5;
    border: 2px solid transparent;
    padding: 0 40px;
    margin-bottom: 30px;
    border-radius: 5px;
    outline: none;
    transition: all 200ms linear;
    transition-delay: 0.1s;
		}
		</style>
