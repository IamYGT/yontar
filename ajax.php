<?php  require("include/baglan.php"); require("include/fonksiyon.php");  include_once("inc.lang.php");

        if (isset($_GET['markalar'])) {
		
			$arac_marka = $db->query("SELECT * FROM kategoriler WHERE altkategori_id='0' AND dil_id='$lang'");
			foreach($arac_marka as $arac_markaList){
				$bilgial[] = array(
					"marka_id"			=>	$arac_markaList["kategori_ust_id"],
					"marka"				=>	$arac_markaList["kategori_baslik"],
					"link"				=>	$arac_markaList["kategori_seo"]
				);
			} 
			echo json_encode($bilgial);
		}
        
		if (isset($_GET['arac_modelleri'])) {
			if (!isset($_GET['marka_id'])) {
				echo json_encode(['state' => 'error', 'message' => 'Kategori belirtilmedi.']);
				return;
			}
			$arac_model = $db->query("SELECT * FROM kategoriler WHERE kategori_durum='1' AND altkategori_id = '{$_GET['marka_id']}' AND dil_id='$lang'");
			foreach($arac_model as $arac_modelList){
				$bilgial[] = array(
					"model_id"			=>	$arac_modelList["kategori_ust_id"],
					"marka_id"			=>	$arac_modelList["kategori_ust_id"],
					"model"				=>	$arac_modelList["kategori_baslik"],
					"link"				=>	$arac_modelList["kategori_seo"]
				);
			} 
			if (!count($bilgial) > 0) {
				echo json_encode(['state' => 'error', 'message' => 'Alt kategori bulunamadı.']);
				return;
			} 
			echo json_encode($bilgial);
		}
		
		if (isset($_GET['arac_yillari'])) {
			if (! isset($_GET['model_id'])) {
				echo json_encode(['state' => 'error', 'message' => 'Kategori belirtilmedi.']);
				return;
			} 
		
			$arac_yil = $db->query("SELECT * FROM projeler WHERE kategori_id = '{$_GET['model_id']}'  AND proje_durum = 1 AND dil_id = '{$lang}'");
			foreach($arac_yil as $arac_yilList){
				$bilgial[] = array(
					"yil_id"			=>	$arac_yilList["proje_ust_id"],
					"model_id"			=>	$arac_yilList["kategori_id"],
					"yil"				=>	$arac_yilList["proje_baslik"],
					"link"				=>	$arac_yilList["proje_seo"],
				);
			} 

			if (! count($bilgial) > 0) {
				echo json_encode(['state' => 'error', 'message' => 'Ürün bulunamadı.']);
				return;
			}

			echo json_encode($bilgial);
		}