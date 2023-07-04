<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
     <title>Sıkça Sorulan Sorular - Yontar Polyester </title>
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
                    <h2 class="wow slideInDown animated" data-wow-delay="0.3s" data-wow-duration="1500ms">Sıkça Sorulan Sorular
                    </h2>
                    <ul class="thm-breadcrumb list-unstyled wow slideInUp animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
                        <li><a href="<?php echo $ayarlar["strURL"]; ?>">Anasayfa</a></li>
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                        <li>Sıkça Sorulan Sorular</li>
                    </ul>
                </div>
            </div>
        </section> 
		
		 <section class="faq-one">
            <div class="container">
                <div class="section-title">
                    <div class="section-title__tagline">
                        <span class="left"></span>
                        <h4>SSS</h4>
                    </div>
                    <h2 class="section-title__title">Sıkça Sorulan Sorular</h2>
                </div>
                <div class="row">
                    <div class="col-xl-8">
                        <div class="faq-one__content-box">
                            <div class="accrodion-grp" data-grp-name="faq-one-accrodion">

 <?php
				$countActive = 1;
				$veri_cek = $db->query("SELECT * FROM sss WHERE haber_durum = 1 AND dil_id = '{$lang}' ORDER BY haber_ust_id ASC LIMIT 9999999999");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?>  <div class="accrodion <?php echo ($countActive == 1 ? 'active' : null); ?>">
                                    <div class="accrodion-title">
                                        <h4> <?php echo $veri_listele["haber_baslik"]; ?></h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p><?php echo $veri_listele["haber_aciklama"]; ?></p>
                                        </div>
                                    </div>
                                </div>
  <?php 
				 $countActive++;
					}
				}else{
					"Listelenecek veri bulunamadı.";
				}
?>

                           </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="faq-one__right">
                            <div class="faq-one__right-img">
                                <img src="assets/images/resources/faq-v1-img.jpg" alt="" />
                                <div class="faq-one__right-img-overlay">
                                    <div class="section-title">
                                        <div class="section-title__tagline">
                                            <span class="left"></span>
                                            <h4>Yontar</h4><span class="right"></span>
                                        </div>
                                        <h2 class="section-title__title">Daha fazla
bilgiye mi<br>
ihtiyacınız var ?
</h2>
                                    </div>
                                    <div class="faq-one__right-btn">
                                        <a href="<?php echo $ayarlar["strURL"]; ?>/iletisim" class="thm-btn">İletişim <i class="fa fa-angle-double-right"
                                                aria-hidden="true"></i></a>
                                    </div>
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