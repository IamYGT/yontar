<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
     <title>Anasayfa - Yontar Polyester </title>
	 <?php include("css.php")?>
</head>
<body>
    <div class="preloader">
        <img class="preloader__image" width="60" src="assets/images/loader.png" alt="">
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
       <?php include("ust2.php")?>
	   <div class="row"> 
	   <div class="col-md-3">  
                <div style="margin-top: 53px;" class="ustkisim">
                  <i class="demo-icon icon-th-list-1"></i>
                  <span>Kategoriler</span>
                </div>
                <div class="sidebar">
                             
<div class="sidebar__single">
<div style="    margin-left: 14px;"  class="sidebar__single-category wow fadeInUp animated" data-wow-delay="0.1s"
data-wow-duration="1200ms">
 

					<nav  style="    border: 0;" class="sidebar card py-2 mb-4">
					<ul class="nav flex-column" id="nav_accordion">

					<li class="nav-item has-submenu">
					<?php 
									$list = $db->query("SELECT * FROM kategoriler WHERE altkategori_id='0' AND dil_id='$lang'");
									foreach($list as $row){
					?> 

										<a class="nav-link" href="#"> <?php echo $row["kategori_baslik"]; ?> <i class="fa fa-chevron-right" aria-hidden="true"></i>  </a>
											<ul class="submenu collapse">
					<?php 
											$listPage = $db->query("SELECT * FROM kategoriler WHERE kategori_durum='1' AND altkategori_id = '".$row["kategori_ust_id"]."' AND dil_id='$lang'");
											foreach($listPage as $rowPage){
					?>
												<li><a class="nav-link" href="<?php echo $ayarlar["strURL"]."/".$row["kategori_seo"]."/".$rowPage["kategori_seo"]."-c-".$rowPage["kategori_ust_id"]; ?>"><?php echo $rowPage["kategori_baslik"]; ?></a> </li>
					<?php 
											}
					?>
											</ul>
										</li> 

					<?php 
									}
					?>
</ul>
</nav> 
</div>
</div> 
                        </div>
          </div>	   
	   <div class="col-md-9 col-12"> 
	    <section class="main-slider main-slider-one">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": false, "effect": "fade", "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
        },
        "navigation": {
        "nextEl": "#main-slider__swiper-button-next",
        "prevEl": "#main-slider__swiper-button-prev"
        },
        "autoplay": {
        "delay": 5000
        }}'>

                <div class="swiper-wrapper">
                      <?php
				$veri_cek = $db->query("SELECT * FROM slayt WHERE slayt_durum = 1 AND dil_id = '{$lang}' ORDER BY slayt_ust_id");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?> <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(<?php echo $ayarlar["strURL"]; ?>/uploads/sliders/<?php echo $veri_listele["slayt_resim"]; ?>);"></div>
                        <div class="image-layer-overlay"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="main-slider__content text-center">
                                        <div class="shape1"><img src="assets/images/shapes/main-slider-one-shape1.png"
                                                alt="" /></div>
                                        <div class="section-title">
                                            <div class="section-title__tagline">
                                                <span class="left"></span>
                                                <h4><?php echo 	$veri_listele["slayt_baslik"]; ?></h4><span class="right"></span>
                                            </div>
                                            <h2 class="section-title__title"><?php echo 	$veri_listele["slayt_aciklama"]; ?></h2>
                                        </div>
                                        <div class="main-slider__button-box">
                                            <div class="btns-box">
                                                <a href="<?php echo 	$veri_listele["slayt_butonlink"]; ?>" class="thm-btn"><?php echo 	$veri_listele["slayt_buton"]; ?></a>
                                            </div> 
                                        </div>
                                    </div>
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
                </div>

                <!-- If we need navigation buttons -->
                <div class="swiper-pagination" id="main-slider-pagination"></div>
                <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                        <span class="icon-left"></span>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                        <span class="icon-right"></span>
                    </div>
                </div>

            </div>
        </section>
		
</div>
</div>

		<section class="contact-form-one"
            style="background-image: url(assets/images/backgrounds/contact-form-one-bg.png);">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline">
                        <span class="left"></span>
                        <h4>Yontar Polyester</h4>
                    </div>
                    <h2 class="section-title__title">Ürün Kataloglarımızı <br> İnceleyin</h2>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="contact-form .select_one"> 
                        <form id="basketForm" action="" method="post" onsubmit="return false;" >
                                <div class="row"> 
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                        <div class="input-box">
                                            <select class="form-control"  name="aracmarka" id="marka"> 
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                        <div class="input-box">
                                            <select class="form-control"  disabled title="Kategori seçilmedi." name="aracmodel"  id="model">
                                                <option value="">Kategori Seçilmedi</option>
                                            </select>
                                        </div>
                                    </div>
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                        <div class="input-box">
                                            <select class="form-control" disabled title="Alt Kategori seçilmedi."  name="aracyil"  id="yil">
                                                <option value="">Kategori Seçilmedi</option> 
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="button-box text-center">
                                            <a class="btn-one gradient-bg-1" data-loading-text="Lütfen Bekleyin..." id="go_arac_detay" ><span class="thm-btn" style="cursor: pointer; ">Ürünü İncele<i class="fa fa-angle-double-right" aria-hidden="true"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Features One End-->
        <!--About One Start-->
        <section class="about-one">
            <div class="container">
                <div class="row">
                    <!-- Start About One Left-->
                    <div class="col-xl-6">
                        <div class="about-one__left">
                            <div class="shape1 float-bob-y"><img src="assets/images/shapes/thm-shape-1.png" alt="">
                            </div>
                            <div  style="    width: 633px;" class="about-one__left-img">
                                <img src="uploads/pages/y.jpg" alt="">
                            </div>
                             
                        </div>
                    </div>
                    <!-- End About One Left-->
                    <!-- Start About One Right-->
                    <div class="col-xl-6">
                        <div class="about-one__right">
                            <div style="    margin-bottom: 5px;" class="section-title">
                                <div class="section-title__tagline">
                                    <span class="left"></span>
                                    <h4>Yontar Polyester</h4>
                                </div>
                                <h2 class="section-title__title">Hakkımızda</h2>
                            </div>
                            <div class="about-one__right-inner">
                                <p class="about-one__right-text"> Yontar Ticaret 1983 yılında bir aile şirketi olarak kurulmuş ve 1997 yılından itibaren yönetimi ikinci kuşak devralmıştır 1984 yılından bugüne polyester sektörüne hizmet vermektedir.
<br>
<br>
Şirketimiz , Cam Elyaf ve Poliya Polyesterin Akdeniz bölge distribütörüdür. Adana merkezli olan şirketimizin , Antalya da hizmet veren bir şubesi de bulunmaktadır.

</p>
                                <div class="about-one__author-box">
                                    <div class="img-box">
                                        <img src="assets/images/about/about-v1-author.png" alt="">
                                    </div>
                                    <div class="title">
                                        <h3>Bayilik & Dağıtım</h3>
                                        <p>Yontar Ticaret Cam Elyaf ve Poliya Polyesterin Akdeniz bölge distribütörüdür.<br>Adana merkezli olan şirketimizin , Antalya da hizmet veren bir şubesi de bulunmaktadır.</p>
                                        <h5>Poliya Polyester</h5>
                                    </div>
                                </div>
                                <div class="about-one__btn">
                                    <a href="<?php echo $ayarlar["strURL"]; ?>/kurumsal/hakkimizda" class="thm-btn">Daha Fazla Bilgi<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End About One Right-->
                </div>
            </div>
        </section>
		
		
        <section class="features-one clearfix">
            <div class="container">
                <div class="row">
                    <!--Start Single Features One -->
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="features-one__single wow fadeInLeft animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="features-one__single-left">
                                <div class="features-one__single-left-icon">
                                    <img src="assets/images/icon/features-v1-icon1.png" alt="Yontar">
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
                                    <img src="assets/images/icon/features-v1-icon2.png" alt="Yontar">
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
        <!--About One End-->
        <!--Start Feauters Two-->
        <section class="feauters-two">
            <div class="feauters-two__bg" style="background-image: url(assets/images/backgrounds/feature-v1-bg.png);">
            </div>
            <div class="container">
                <div class="section-title">
                    <div class="section-title__tagline">
                        <span class="left"></span>
                        <h4>Yontar Polyester</h4>
                    </div>
                    <h2 class="section-title__title">Ürünlerimiz</h2>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="feauters-two__content-box">
                            <div class="feauters-two__big-title">
                                <h2>Yontar</h2>
                            </div>
                            <div class="shape1 zoom-fade">
                                <img src="assets/images/shapes/feature-v1-shape1.png" alt="">
                            </div>
                            <div class="shape2 zoom-fade">
                                <img src="assets/images/shapes/feature-v1-shape2.png" alt="">
                            </div>
                            <div class="row">
                               

 <?php
				$veri_cek = $db->query("SELECT * FROM projeler WHERE proje_durum = 1 AND dil_id = '{$lang}' ORDER BY proje_ust_id DESC LIMIT 4");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?> 		                                <div class="col-xl-3 col-lg-3 col-md-6">
                                    <div class="feauters-two__single wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                        <div class="feauters-two__single-inner">
                                            <div class="img-holder">
                                                <div class="inner">
                                                    <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/projects/<?php echo $veri_listele["proje_resim"]; ?>" alt="<?php echo 	$veri_listele["proje_baslik"]; ?>">
                                                </div>
                                            </div>
                                            <div class="title-holder">
                                                <h3><a href="<?php echo $ayarlar["strURL"]; ?>/urun/<?php echo $veri_listele["proje_seo"]; ?>"><?php echo 	$veri_listele["proje_baslik"]; ?></a></h3>
                                                <div class="btn">
                                                    <a href="<?php echo $ayarlar["strURL"]; ?>/urun/<?php echo $veri_listele["proje_seo"]; ?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="overlay">
                                                <div class="title">
                                                    <h3><a href="<?php echo $ayarlar["strURL"]; ?>/urun/<?php echo $veri_listele["proje_seo"]; ?>"><?php echo 	$veri_listele["proje_baslik"]; ?></a></h3>
                                                     <div class="btn">
                                                        <a href="<?php echo $ayarlar["strURL"]; ?>/urun/<?php echo $veri_listele["proje_seo"]; ?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
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
							 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Feauters Two-->
        <!--Counter One Start-->
        <section class="counter-one clearfix">
            <div class="auto-container">
                <div class="counter-one__wrapper clearfix wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="shape1"><img src="assets/images/shapes/counter-v1-shape.png" alt=""></div>
                    <div class="row">
                        <!--Start Counter One Single-->
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="counter-one__single">
                                <div class="counter-one__single-icon">
                                    <img src="assets/images/resources/counter-v1-img1.png" alt="">
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
                                    <img src="assets/images/resources/counter-v1-img2.png" alt="">
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
                                    <img src="assets/images/resources/counter-v1-img3.png" alt="">
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
                                <div class="counter-one__company-chievement-img" style="background-image: url(assets/images/resources/counter-v1-bg-img.jpg);">
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
		
        <section style="    padding: 120px 0px 0;" class="team-one">
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
        <section class="blog-one">
            <div class="shape1 wow slideInRight" data-wow-delay="500ms" data-wow-duration="2500ms"><img src="assets/images/shapes/blog-v1-shape1.png" alt=""></div>
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline">
                        <span class="left"></span>
                        <h4>Yontar Polyester</h4><span class="right"></span>
                    </div>
                    <h2 class="section-title__title">Haberler</h2>
                </div>
                <div class="row">
                    <!--Start Single Blog One-->
                  
				 <?php
			$veri_cek = $db->query("SELECT * FROM haberler WHERE haber_durum = 1 AND dil_id = '{$lang}' ORDER BY haber_ust_id DESC LIMIT 3");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?> 	<div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="blog-one__single">
                            <div class="blog-one__single-img">
                                <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/haberler/<?php echo $veri_listele["haber_resim"]; ?>" alt="<?php echo $veri_listele["haber_baslik"]; ?>">
                                <div class="overlay-icon">
                                    <a href="<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $veri_listele["haber_seo"]; ?>"><span class="icon-plus"></span></a>
                                </div>
                            </div>
                            <div class="blog-one__single-text-box">
                                <h3 class="blog-one__single-title"><a href="<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo $veri_listele["haber_baslik"]; ?></a></h3>
                                <p class="blog-one__single-text"><?php echo $veri_listele["haber_kisaaciklama"]; ?></p>
                                <ul class="blog-one__meta-info list-unstyled">
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo date("d/m/Y", strtotime($veri_listele["haber_tarih"])); ?></li>
                                 </ul>
                            </div>
                        </div>
                    </div>
              <?php 
					}
				}else{
					"Listelenecek veri bulunamadı.";
				}
?>
                    
					
                </div>
            </div>
        </section>
        <!--Blog One End-->
       
		 <?php include("alt.php")?>
         <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

	<script type="text/javascript"> 
			$(document).ready(function(){
				$.get("/ajax.php?markalar", function(data, status){
					var data = JSON.parse(data);
					var options = '';
						options += '<option data-link="none" value="none">Kategori Seçiniz</option>';
					for (var i = 0; i < data.length; i++) {
						options += '<option data-link="'+ data[i].link +'" value="' + data[i].marka_id + '">' + data[i].marka + '</option>';
					} 
					$('#marka').html(options);
					$("#marka").form-select("refresh");

					$("#model").html('').prop('disabled', true).form-select("refresh");
					$("#yil").html('').prop('disabled', true).form-select("refresh");
				});

				$("#marka").change(function(){
					$.get("/ajax.php?arac_modelleri&marka_id=" + $(this).val(), function(data, status){
						var data = JSON.parse(data);

						if (data.state === 'error') {
							$('#model').html('<option data-link="none" value="none">' + data.message + '</option>');
							$("#model").prop('disabled', false).form-select("refresh");
							return;
						}

						var options = ''; 
							options += '<option data-link="none" value="none">Alt Kategori Seçiniz</option>';
						for (var i = 0; i < data.length; i++) {
							options += '<option data-link="'+ data[i].link +'" value="' + data[i].model_id + '">' + data[i].model + '</option>';
						}

						$('#model').html(options);
						$("#model").prop('disabled', false).form-select("refresh");

						$("#yil").html('das').prop('disabled', true).form-select("refresh");
					});
				});

				$("#model").change(function(){
					$.get("/ajax.php?arac_yillari&model_id=" + $(this).val(), function(data, status){
						var data = JSON.parse(data);

						if (data.state === 'error') {
							$('#yil').html('<option data-link="none" value="none">' + data.message + '</option>');
							$("#yil").prop('disabled', false).form-select("refresh");
							return;
						}

						var options = '';
						
							options += '<option data-link="none" value="none">Ürün Seçiniz</option>';
						for (var i = 0; i < data.length; i++) {
							options += '<option data-link="'+ data[i].link +'" value="' + data[i].yil_id + '">' + data[i].yil + '</option>';
						}
						$('#yil').html(options);
						$("#yil").prop('disabled', false).form-select("refresh");

					});
				});

				$('#go_arac_detay').click(function(e) {
					e.stopPropagation();
					var kategori = $('#marka option:selected').data('link');
					var model = $('#model option:selected').data('link');
					var yil = $('#yil option:selected').data('link');

					if (!model || !yil || model == "none" || yil == "none") {
						alert('Lütfen Tüm seçimleri doğru yapınız.');
						return;
					}

					var link = 'urun'; 
					link += '/' + yil ;

					window.location = '/'+link;
				});
				
			});
</script> 

<style>
.katarea{
	    padding-left: 23px;
    
}
.ustkisim{
	
     -moz-transition: all 0.35s ease 0s;
    -o-transition: all 0.35s ease 0s;
    -webkit-transition: all 0.35s ease 0s;
    transition: all 0.35s ease 0s;
    background: #ed1b24;
    color: #fff;
    padding: 10px 20px;
    line-height: 25px;
    font-weight: 700;
    text-transform: capitalize;
    display: block;
    position: relative;
    cursor: pointer;
	border-radius: 0;
    margin-left: 14px;}
</style>

<style>
		.team-one {
    position: relative;
    display: block;
    background: #ffffff;
    border-top: none;
    padding: 0 0px 120px;
    z-index: 1;
}

.sidebar li .submenu{ 
	list-style: none; 
	margin: 0; 
	padding: 0; 
	padding-left: 1rem; 
	padding-right: 1rem;
}

.sidebar__single-title::before {
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 1px;
    background: #fff;
    content: "";
}

.sidebar__single-title {
    position: relative;
    display: block;
    color: #2e2e36;
    font-size: 24px;
    line-height: 32px;
    font-weight: 700;
    padding-bottom: 0;
    margin-bottom: 21px;
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgb(0 0 0 / 4%);
    border-radius: .25rem;
}

a:hover {
    color: #ED1B24;
}

li
{
	    list-style-type: none;


}

@media only screen and (max-width: 767px)
.sidebar {
    max-width: none;
    margin-top: 0px !important;
}

</style>
<script>
document.addEventListener("DOMContentLoaded", function(){
  document.querySelectorAll('.sidebar .nav-link').forEach(function(element){
    
    element.addEventListener('click', function (e) {

      let nextEl = element.nextElementSibling;
      let parentEl  = element.parentElement;	

        if(nextEl) {
            e.preventDefault();	
            let mycollapse = new bootstrap.Collapse(nextEl);
            
            if(nextEl.classList.contains('show')){
              mycollapse.hide();
            } else {
                mycollapse.show();
                // find other submenus with class=show
                var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
                // if it exists, then close all of them
                if(opened_submenu){
                  new bootstrap.Collapse(opened_submenu);
                }
            }
        }
    }); // addEventListener
  }) // forEach
}); 
// DOMContentLoaded  end
</script>

</body>
</html>