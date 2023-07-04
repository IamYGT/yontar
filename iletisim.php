<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
     <title>İletişim - Yontar Polyester </title>
	 <?php include("css.php")?>
</head> 
<body> 
    <div class="preloader">
        <img class="preloader__image" width="60" src="<?php echo $ayarlar["strURL"]; ?>/assets/images/resources/logo-3.png" alt="Yontar Logo">
    </div>

    <!-- /.preloader -->
    <div class="page-wrapper">
 <?php include("ust2.php")?>
        <section class="page-header clearfix" style="background-image: url(<?php echo $ayarlar["strURL"]; ?>/assets/images/backgrounds/page-header-bg.jpg);">
            <div class="container">
                <div class="page-header__inner clearfix">
                    <h2 class="wow slideInDown animated" data-wow-delay="0.3s" data-wow-duration="1500ms">İletişim
                    </h2>
                    <ul class="thm-breadcrumb list-unstyled wow slideInUp animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
                        <li><a href="<?php echo $ayarlar["strURL"]; ?>">Anasayfa</a></li>
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                        <li>İletişim</li>
                    </ul>
                </div>
            </div>
        </section> 
        <section style="margin-top:70px;" class="contact-box">
            <div class="container">
                <div class="row">
                    <!--Start Contact Box Single-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                        <div class="contact-box__single style3 text-center">
                            <div class="contact-box__single-icon">
                                <span class="icon-pin"></span>
                            </div>
                            <div class="contact-box__single-text">
                                <h2><a href="#">Adres</a></h2>
                                <p><?php echo $ayarlar["strAddress"]; ?></p>
                            </div>
                        </div>
                    </div>
                    <!--End Contact Box Single-->
                    <!--Start Contact Box Single-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1500ms">
                        <div class="contact-box__single style3 text-center">
                            <div class="contact-box__single-icon">
                                <span class="icon-letter"></span>
                            </div>
                            <div class="contact-box__single-text">
                                <h2><a href="#">Eposta</a></h2>
                                <p><a href="mailto:<?php echo $ayarlar["strMail"]; ?>"><?php echo $ayarlar["strMail"]; ?></a></p>
                                <p><a href="mailto:muhasebe@yontar.com.tr">muhasebe@yontar.com.tr</a></p>
                             </div>
                        </div>
                    </div>
                    <!--End Contact Box Single-->
                    <!--Start Contact Box Single-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1500ms">
                        <div class="contact-box__single style3 text-center">
                            <div class="contact-box__single-icon">
                                <span class="icon-phone-call"></span>
                            </div>
                            <div class="contact-box__single-text">
                                <h2><a href="#">Telefon</a></h2>
                                <p><a href="tel:<?php echo $ayarlar["strPhone"]; ?>"><?php echo $ayarlar["strPhone"]; ?></a></p>
                                <p><a href="tel:<?php echo $ayarlar["strFax"]; ?>"><?php echo $ayarlar["strFax"]; ?> (Fax) </a></p>
                            </div>
                        </div>
                    </div>
                    <!--End Contact Box Single-->
                </div>
            </div>
        </section>
        <!--Contact Box End-->

        <!--Contact Page Google Map Start-->
        <section class="contact-page-google-map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12746.362965463728!2d35.266905!3d36.995701!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x571bc726c0eb5989!2sYontar!5e0!3m2!1str!2str!4v1624703276161!5m2!1str!2str" class="contact-page-google-map__one" allowfullscreen=""></iframe>
         </section>
        <!--Contact Page Google Map End-->

        <!--Contact page Start-->
        <section class="contact-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="contact-page__inner wow slideInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="section-title text-center">
                                <div class="section-title__tagline">
                                    <span class="left"></span>
                                    <h4>Mesaj Gönderin</h4><span class="right"></span>
                                </div>
                                <h2 class="section-title__title">İletişim Formu</h2>
                            </div>
                            <form action="assets/inc/sendemail.php" class="contact-page__form contact-form-validated">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                        <div class="contact-page__input-box">
                                            <input type="text" placeholder="İsminiz" name="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                        <div class="contact-page__input-box">
                                            <input type="text" placeholder="Telefon" name="phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                        <div class="contact-page__input-box">
                                            <input type="email" placeholder="Eposta" name="email">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                        <div class="contact-page__input-box">
                                            <input type="email" placeholder="Konu" name="Subject">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="contact-page__input-box">
                                            <textarea name="message" placeholder="Mesajınız"></textarea>
                                        </div>
                                        <div class="contact-page__btn">
                                            <button type="submit">
                                                <span class="thm-btn">Gönder<i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section> 
		<?php include("alt.php")?>
</body>

</html>