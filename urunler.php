<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); 

 ?>
<!DOCTYPE html>
<html lang="tr">
<head>
     <title>Ürünler - Yontar Polyester </title>
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
                    <h2 class="wow slideInDown animated" data-wow-delay="0.3s" data-wow-duration="1500ms">Ürünler
                    </h2>
                    <ul class="thm-breadcrumb list-unstyled wow slideInUp animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
                        <li><a href="<?php echo $ayarlar["strURL"]; ?>">Anasayfa</a></li>
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                        <li>Ürünler</li>
                    </ul>
                </div>
            </div>
        </section> 
          <section class="blog-standard-one">
            <div class="container">
                <div class="row">
				 <!--Start Sidebar-->
                    <div class="col-xl-4 col-lg-3">
                        <div class="sidebar">
                             
<div class="sidebar__single">
<div class="sidebar__single-category wow fadeInUp animated" data-wow-delay="0.1s"
data-wow-duration="1200ms">
<h3 class="sidebar__single-title">Kategoriler</h3> 


					<nav class="sidebar card py-2 mb-4">
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
                    <!--End Sidebar-->
                
				
                    <div class="col-xl-8 col-lg-8">
                    <section class="team-one">
            <div class="container"> 
                <div class="row">
                    <div class="col-xl-12">
                        <div class="team-one__content-wrapper">
                            <div class="team-one__big-title">
                                <h2>Ürünler</h2>
                            </div>
                            <div class="row">
                                <!--Start Single Team One-->
                               <?php
				$veri_cek = $db->query("SELECT * FROM projeler WHERE proje_durum = 1 AND dil_id = '{$lang}' ORDER BY proje_ust_id DESC LIMIT 99");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
                    $categoryInfo = $db->query("SELECT * FROM kategoriler WHERE kategori_durum='1' AND kategori_ust_id = '{$veri_listele['kategori_id']}' AND dil_id='$lang'")->fetch(PDO::FETCH_ASSOC); ?> 			 
					<div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp animated animated"
                                    data-wow-delay="00ms" data-wow-duration="1500ms">
                                    <div class="team-one__single">
                                        <div class="team-one__single-wrapper">
                                            <div class="team-one__single-img">
                                                <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/projects/<?php echo $veri_listele["proje_resim"]; ?>" alt="<?php echo 	$veri_listele["proje_baslik"]; ?>" />
                                            </div>
                                            <div class="team-one__single-title">
                                                <h4><a href="<?php echo $ayarlar["strURL"]; ?>/urun/<?php echo $veri_listele["proje_seo"]; ?>"><?php echo 	$veri_listele["proje_baslik"]; ?></a></h4>
                                                <p><?php echo $categoryInfo["kategori_baslik"]; ?></p>
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
        </section> </div>

                   </div>
            </div>
        </section> 
		<?php include("alt.php")?>
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