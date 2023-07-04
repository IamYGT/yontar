<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
     <title>Satış Noktalarımız - Yontar Polyester </title>
	 <?php include("css.php")?>
</head> 
<body> 
    <div class="preloader">
        <img class="preloader__image" width="60" src="<?php echo $ayarlar["strURL"]; ?>/assets/images/resources/logo-3.png" alt="Yontar Logo">
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
 <?php include("ust2.php")?>
        <!--Page Header Start-->
        <section class="page-header clearfix" style="background-image: url(<?php echo $ayarlar["strURL"]; ?>/assets/images/backgrounds/page-header-bg.jpg);">
            <div class="container">
                <div class="page-header__inner clearfix">
                    <h2 class="wow slideInDown animated" data-wow-delay="0.3s" data-wow-duration="1500ms">Satış Noktalarımız
                    </h2>
                    <ul class="thm-breadcrumb list-unstyled wow slideInUp animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
                        <li><a href="<?php echo $ayarlar["strURL"]; ?>/index">Anasayfa</a></li>
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                        <li>Satış Noktalarımız</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->
        <!--Team One Start-->
        <section class="team-one">
            <div class="container">
                <div class="section-title">
                    <div class="section-title__tagline">
                        <span class="left"></span>
                        <h4>Yontar</h4>
                    </div>
                    <h2 class="section-title__title">Satış Noktalarımız</h2>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="team-one__content-wrapper">
                            <div class="team-one__big-title">
                                <h2>Yontar</h2>
                            </div>
                            <div class="row">

    <?php
				$veri_cek = $db->query("SELECT * FROM satis WHERE haber_durum = 1");
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
                                                <h5 style="margin-bottom:8px;"><?php echo 	$veri_listele["haber_description"]; ?></h5>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Team One End-->
<?php include("alt.php")?>
</body>
</html>