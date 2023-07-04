 <?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); 
	 $tekil_veri_cek = $db->query("SELECT * FROM projeler WHERE proje_durum = 1 AND proje_seo = '{$_GET["url"]}' AND dil_id = '{$lang}' ")->fetch(PDO::FETCH_ASSOC); 
    $categoryInfo = $db->query("SELECT * FROM kategoriler WHERE kategori_ust_id = {$tekil_veri_cek['kategori_id']} AND dil_id = '{$lang}'")->fetch(PDO::FETCH_ASSOC); 
 ?>
<!DOCTYPE html>
<html lang="tr">
<head>
     <title><?php echo $tekil_veri_cek["proje_baslik"]; ?> - Yontar Polyester </title>
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
                    <h2 class="wow slideInDown animated" data-wow-delay="0.3s" data-wow-duration="1500ms"><?php echo $tekil_veri_cek["proje_baslik"]; ?>
                    </h2>
                    <ul class="thm-breadcrumb list-unstyled wow slideInUp animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
                        <li><a href="<?php echo $ayarlar["strURL"]; ?>">Anasayfa</a></li>
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
						  <li><a href="<?php echo $ayarlar["strURL"]; ?>/urunler">Ürünler</a></li>
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li> 
                         <li><?php echo $tekil_veri_cek["proje_baslik"]; ?></li>
                    </ul>
                </div>
            </div>
        </section> 
         
        <section class="team-details-one">
            <div class="container">
                <div class="row">
                    <!--Start Team Details One Left-->
                    <div class="col-xl-6">
                        <div class="team-details-one__left">
                            <div class="team-details-one__left-img">
                                <img style="    height: 510px;" src="<?php echo $ayarlar["strURL"]; ?>/uploads/projects/<?php echo $tekil_veri_cek["proje_resim"]; ?>" alt="<?php echo $tekil_veri_cek["proje_baslik"]; ?>">
                            </div>
                            <div class="team-details-one__left-title text-center">
                                <h2><a href="#"><?php echo $tekil_veri_cek["proje_baslik"]; ?></a></h2>
                                <p><?php echo $categoryInfo["kategori_baslik"] ?></p> 
                            </div>
                        </div>
                    </div>
                    <!--End Team Details One Left-->
                    <!--Start Team Details One Right-->
                    <div class="col-xl-6">
                        <div class="team-details-one__right">
                            <div class="team-details-one__right-top-text">
                                <h2><?php echo $tekil_veri_cek["proje_baslik"]; ?></h2>
                                <?php echo $tekil_veri_cek["proje_aciklama"]; ?>
                            </div>
                            <div class="row">
                    <?php
                            $imagesList = $db->query("SELECT * FROM files WHERE ustid = {$tekil_veri_cek["proje_ust_id"]} AND itable = 2");
                            if ($imagesList->rowCount()){
                                foreach($imagesList as $image){
                    ?>
                                <div class="col-lg-6">
                                    <img alt="" src="<?php echo $ayarlar["strURL"]; ?>/uploads/files/<?php echo $image["name"]; ?>" class="img-fluid">
                                </div>
                    <?php
                                }
                            }
                    ?>
                            </div>
                        </div>
                    </div>
                    <!--End Team Details One Right-->
                </div>
            </div>
        </section>
        <?php include("alt.php")?>
</body>

</html>