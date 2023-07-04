<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr"> 
<head>
     <title>Haberler - Yontar Polyester </title>
 <?php include("css.php")?>
</head> 
<body> 
    <div class="preloader">
        <img class="preloader__image" width="60" src="<?php echo $ayarlar["strURL"]; ?>/assets/images/loader.png" alt="Yontar Loading">
    </div> 
    <div class="page-wrapper">
 <?php include("ust2.php")?>
        <section class="page-header clearfix" style="background-image: url(<?php echo $ayarlar["strURL"]; ?>/assets/images/backgrounds/page-header-bg.jpg);">
            <div class="container">
                <div class="page-header__inner clearfix">
                    <h2 class="wow slideInDown animated" data-wow-delay="0.3s" data-wow-duration="1500ms">Haberler</h2>
                    <ul class="thm-breadcrumb list-unstyled wow slideInUp animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
                        <li><a href="<?php echo $ayarlar["strURL"]; ?>">Anasayfa</a></li>
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                        <li>Haberler</li>
                    </ul>
                </div>
            </div>
        </section> 
        <section class="blog-one">
            <div class="container">
                <div class="row">
<?php
				$veri_cek = $db->query("SELECT * FROM haberler WHERE haber_durum = 1");
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
        <?php include("alt.php")?>
</body> 
</html>