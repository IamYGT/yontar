<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php");
	 $tekil_veri_cek = $db->query("SELECT * FROM haberler WHERE haber_durum = 1 AND haber_seo = '{$_GET["url"]}'  ")->fetch(PDO::FETCH_ASSOC); 

 ?>
<!DOCTYPE html>
<html lang="tr"> 
<head>
     <title><?php echo $tekil_veri_cek["haber_baslik"]; ?> - Yontar Polyester</title>
 <?php include("css.php")?>
</head> 
<body>

    <div class="preloader">
        <img class="preloader__image" width="60" src="<?php echo $ayarlar["strURL"]; ?>/assets/images/loader.png" alt="">
    </div>

    <!-- /.preloader -->
    <div class="page-wrapper"> 
       <?php include("ust2.php")?> 
        <section class="page-header clearfix" style="background-image: url(<?php echo $ayarlar["strURL"]; ?>/assets/images/backgrounds/page-header-bg.jpg);">
            <div class="container">
                <div class="page-header__inner clearfix">
                    <h2 class="wow slideInDown animated" data-wow-delay="0.3s" data-wow-duration="1500ms"><?php echo $tekil_veri_cek["haber_baslik"]; ?>
                    </h2>
                    <ul class="thm-breadcrumb list-unstyled wow slideInUp animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
                        <li><a href="">Anasayfa</a></li>
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                        <li><?php echo $tekil_veri_cek["haber_baslik"]; ?></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->


        <!--Blog Details Start-->
        <section class="blog-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="blog-details__left">
                            <!--Start Single Blog Standard One-->
                            <div class="blog-standard-one__single">
                                <div class="blog-standard-one__single-img">
                                    <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/haberler/<?php echo $tekil_veri_cek["haber_resim"]; ?>" alt="Yontar Polyester">
                                </div>
                                <ul class="meta-info list-unstyled">
                                     <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $tekil_veri_cek["haber_tarih"]; ?></a>
                                    </li> 
                                </ul>
                                <h2 style="    margin-bottom: 10px;" class="blog-standard-one__single-title"><?php echo $tekil_veri_cek["haber_baslik"]; ?></h2>      
                            </div>
                            <!--End Single Blog Standard One-->
                            <div class="blog-details__text1">
                              <?php echo $tekil_veri_cek["haber_aciklama"]; ?>
                            </div>
                            
                        
                        </div>
                    </div>




                    <!--Start Sidebar-->
                    <div class="col-xl-4 col-lg-5">
                        <div class="sidebar">
                            

                            <!--Start Single Sidebar-->
                            <div class="sidebar__single">
                                <div class="sidebar__single-latest-news wow fadeInUp animated" data-wow-delay="0.3s" data-wow-duration="1200ms">
                                    <h3 class="sidebar__single-title">Son Haberler</h3>
                                   
    <?php
				$veri_cek = $db->query("SELECT * FROM haberler WHERE haber_durum = 1   ORDER BY haber_ust_id DESC LIMIT 4");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?>  <div class="sidebar__single-latest-news-single">
                                        <div class="sidebar__single-latest-news-img">
                                            <img style="    height: 50px;" src="<?php echo $ayarlar["strURL"]; ?>/uploads/haberler/<?php echo $veri_listele["haber_resim"]; ?>" alt="<?php echo 	$veri_listele["haber_baslik"]; ?>">
                                        </div>
                                        <div class="sidebar__single-latest-news-text">
                                            <h4><a href="<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo 	$veri_listele["haber_baslik"]; ?></a></h4>
                                            <ul class="meta-info list-unstyled">
                                                <li><a href="<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $veri_listele["haber_seo"]; ?>"><i class="fa fa-calendar" aria-hidden="true"></i><?php echo date("d/m/Y", strtotime($veri_listele["haber_tarih"])); ?></a></li>
                                            </ul>
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
                            <!--End Single Sidebar-->

                            <!--Start Single Sidebar-->
                            <div class="sidebar__single">
                                <div class="sidebar__single-contact-box wow fadeInUp animated" data-wow-delay="0.5s" data-wow-duration="1200ms">
                                    <div class="shape1"><img src="assets/images/shapes/sidebar-contact-box-shape1.png" alt=""></div>
                                    <div class="shape2"><img src="assets/images/shapes/sidebar-contact-box-shape2.png" alt=""></div>
                                    <h2>Daha fazla <br> bilgiye mi <br> ihtiyacınız var ?</h2>
                                    <div class="sidebar__single-contact-box-btn">
                                        <a href="<?php echo $ayarlar["strURL"]; ?>/iletisim" class="thm-btn">İletişim<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="sidebar__single-contact-box-img">
                                        <img src="assets/images/blog/blog-sidebar-img1.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <!--End Single Sidebar-->

                           
                            <!--End Single Sidebar-->
                        </div>
                    </div>
                    <!--End Sidebar-->
                </div>
            </div>
        </section>
        <!--Blog DetailsEnd-->

 
		
       <?php include("alt.php")?>
</body>

</html>