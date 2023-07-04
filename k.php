<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php");
	 $tekil_veri_cek = $db->query("SELECT * FROM icerikler WHERE icerik_durum = 1 AND icerik_seo = '{$_GET["url"]}' AND dil_id = '{$lang}' ")->fetch(PDO::FETCH_ASSOC); 

 ?>
<!DOCTYPE html>
<html lang="tr">
<head>
     <title><?php echo $tekil_veri_cek["icerik_baslik"]; ?> - Yontar Polyester </title>
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
                    <h2 class="wow slideInDown animated" data-wow-delay="0.3s" data-wow-duration="1500ms"><?php echo $tekil_veri_cek["icerik_baslik"]; ?></h2>
                    <ul class="thm-breadcrumb list-unstyled wow slideInUp animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
                        <li><a href="<?php echo $ayarlar["strURL"]; ?>/index">Anasayfa</a></li>
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                        <li><?php echo $tekil_veri_cek["icerik_baslik"]; ?></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->


        <!--About One Start-->
        <section style="    padding: 120px 0px 230px;" class="about-one about-one--about">
            <div class="container">
                <div class="row">
                    <!-- Start About One Left-->
                    <div class="col-xl-6">
                        <div class="about-one__left">
                            <div class="about-one--about__big-title">
                                <h2>Yontar</h2>
                            </div>
                            <div class="shape1"><img src="<?php echo $ayarlar["strURL"]; ?>/assets/images/shapes/thm-shape-1.png" alt=""></div>
                            <div class="about-one__left-img">
                                <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/pages/<?php echo $tekil_veri_cek["icerik_resim"]; ?>" alt="">
                            </div>
                             
                        </div>
                    </div>
                    <!-- End About One Left-->

                    <!-- Start About One Right-->
                    <div class="col-xl-6">
                        <div class="about-one__right">
                            <div  style=" margin-bottom: 10px;"  class="section-title">
                                <div class="section-title__tagline">
                                    <span class="left"></span>
                                    <h4>Yontar Polyester</h4>
                                </div>
                                <h2 class="section-title__title"><?php echo $tekil_veri_cek["icerik_baslik"]; ?></h2>
                            </div>
                            <div class="about-one__right-inner">
                                <p class="about-one__right-text"><?php echo $tekil_veri_cek["icerik_aciklama"]; ?></p>
                                
                                 
								 
                            </div>
                        </div>
                    </div>
                    <!-- End About One Right-->
                </div>
            </div>
        </section>
 
       <section class="counter-one clearfix">
            <div class="auto-container">
                <div class="counter-one__wrapper clearfix wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="shape1"><img src="<?php echo $ayarlar["strURL"]; ?>/assets/images/shapes/counter-v1-shape.png" alt=""></div>
                    <div class="row">
                        <!--Start Counter One Single-->
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="counter-one__single">
                                <div class="counter-one__single-icon">
                                    <img src="<?php echo $ayarlar["strURL"]; ?>/assets/images/resources/counter-v1-img1.png" alt="">
                                </div>
                                <div class="counter-one__outer">
                                    <div class="counter-one__box">
                                        <h2 class="counter-one__single-text">
                                            <span class="odometer" data-count="<?php echo $ayarlar["mutlumusteri"]; ?>">00</span>
                                            <span class="icon">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </span>
                                        </h2>
                                    </div>
                                    <div class="counter-one__title">
                                        <h6>Mutlu Müşteri</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Counter One Single-->
                        <!--Start Counter One Single-->
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="counter-one__single">
                                <div class="counter-one__single-icon">
                                    <img src="<?php echo $ayarlar["strURL"]; ?>/assets/images/resources/counter-v1-img2.png" alt="">
                                </div>
                                <div class="counter-one__outer">
                                    <div class="counter-one__box">
                                        <h2 class="counter-one__single-text">
                                            <span class="odometer" data-count="<?php echo $ayarlar["dosyasayisi"]; ?>">">00</span>
                                            <span class="icon">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </span>
                                        </h2>
                                    </div>
                                    <div class="counter-one__title">
                                        <h6>Ürün Sayısı</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Counter One Single-->
                        <!--Start Counter One Single-->
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="counter-one__single">
                                <div class="counter-one__single-icon">
                                    <img src="<?php echo $ayarlar["strURL"]; ?>/assets/images/resources/counter-v1-img3.png" alt="">
                                </div>
                                <div class="counter-one__outer">
                                    <div class="counter-one__box">
                                        <h2 class="counter-one__single-text">
                                            <span class="odometer" data-count="<?php echo $ayarlar["tecrube"]; ?>">">00</span>
                                            <span class="icon">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </span>
                                        </h2>
                                    </div>
                                    <div class="counter-one__title">
                                        <h6>Yıllık Tecrübe</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Counter One Single-->
                        <!--Start Counter One Single-->
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="counter-one__company-chievement-box clearfix">
                                <div class="counter-one__company-chievement-img" style="background-image: url(<?php echo $ayarlar["strURL"]; ?>/assets/images/resources/counter-v1-bg-img.jpg);">
                                    <div class="overly-content">
                                        <h2>Yontar<br> Polyester</h2>
                                        <div class="button">
                                            <a href="iletisim" class="thm-btn company-chievement-btn">İletişim <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Counter One Single-->
                    </div>
                </div>
            </div>
        </section> 
		
        <section class="team-one">
            <div class="container">
                <div class="section-title">
                    <div class="section-title__tagline">
                        <span class="left"></span>
                        <h4>Yontar</h4>
                    </div>
                    <h2 class="section-title__title">Satış <br>Ortaklarımız</h2>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="team-one__content-wrapper">
                            <div class="team-one__big-title">
                                <h2>Satış</h2>
                            </div>
                            <div class="row">
                           
    <?php
				$veri_cek = $db->query("SELECT * FROM satis WHERE haber_durum = 1 AND dil_id = '{$lang}' ORDER BY haber_ust_id DESC LIMIT 4");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?> 
                                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                    <div class="team-one__single">
                                        <div class="team-one__single-wrapper">
                                            <div class="team-one__single-img">
                                                <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/satis/<?php echo $veri_listele["haber_resim"]; ?>" alt="<?php echo 	$veri_listele["haber_baslik"]; ?>">
                                            </div>
                                            <div class="team-one__single-title">
                                                <h3 style="margin-bottom:8px;"> <?php echo 	$veri_listele["haber_baslik"]; ?> </h3>
                                                <h5 style="margin-bottom:10px;"><?php echo 	$veri_listele["haber_description"]; ?></h5>
											<ul class="list-unstyled">
                                        <li>
                                            <div class="text">
                                                <p> <i class="icon-pin map" aria-hidden="true"></i> <?php echo 	$veri_listele["haber_kisaaciklama"]; ?></p>
                                            </div>
                                        </li>
                                        <li>
                                             <div class="text">
                                                <a href="tel:<?php echo 	$veri_listele["haber_aciklama"]; ?>"> <i class="icon-phone-call" aria-hidden="true"></i> <?php echo 	$veri_listele["haber_aciklama"]; ?></a>
                                            </div>
                                        </li>
                                    </ul>                                       
											</div>
                                        </div>
                                    </div>
                                </div>
								<?php 
					}
				}else{
					"Listelenecek veri bulunamadı.";
				}
?>
                                <div class="team-one__button">
                                    <a href="<?php echo $ayarlar["strURL"]; ?>/satis-noktalarimiz" class="thm-btn team-one__btn">Tüm Satış Noktalarımız <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> 
       
	   
	   <?php include("alt.php")?>
</body>

</html>