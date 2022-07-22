<?php

require_once('../config.php');
$output = "";

    $uic = $_POST['uic'];
    $mahali = $_POST ['mahali'];
    $tarehe_ya_hudhurio = $_POST['tarehe_ya_hudhurio'];
    $aina_ya_hudhurio = $_POST ['aina_ya_hudhurio'];
    $amepima_na_kupewa_majibu = $_POST['amepima_na_kupewa_majibu'];
    $ameandikishwa_ctc = $_POST ['ameandikishwa_ctc'];
    $hali_ya_PrEP_mahudhurio = $_POST['hali_ya_PrEP_mahudhurio'];
    $kisukari = $_POST ['kisukari'];
    $shinikizo_la_damu = $_POST['shinikizo_la_damu'];
    $ugonjwa_wa_figo = $_POST ['ugonjwa_wa_figo'];
    $ugonjwa_wa_ini = $_POST['ugonjwa_wa_ini'];
    $dawa_za_kuathiri_figo = $_POST ['dawa_za_kuathiri_figo'];
    $CrCl = $_POST['CrCl'];
    $umri_15_35kg = $_POST ['umri_15_35kg'];
    $dalili_za_maambukizi_ya_VVU = $_POST['dalili_za_maambukizi_ya_VVU'];
    $anastahili_kutumia_PrEP = $_POST ['anastahili_kutumia_PrEP'];
    $aina_ya_dawa_PrEP_aliyopewa = $_POST['aina_ya_dawa_PrEP_aliyopewa'];
    $namba_ya_vidonge_alivyopewa = $_POST ['namba_ya_vidonge_alivyopewa'];
    $sababu_za_kumwachisha_PrEP = $_POST['sababu_za_kumwachisha_PrEP'];
    $matumizi_ya_PrEP = $_POST ['matumizi_ya_PrEP'];
    $sababu_za_ufuasi_hafifu = $_POST['sababu_za_ufuasi_hafifu'];
    $kuchunguzwa_magonjwa_ya_ngono = $_POST ['kuchunguzwa_magonjwa_ya_ngono'];
    $ametibiwa_magonjwa_ya_ngono = $_POST['ametibiwa_magonjwa_ya_ngono'];
    $madhara_ya_PrEP = $_POST ['madhara_ya_PrEP'];
    $huduma_nyingine_alizopewa = $_POST ['huduma_nyingine_alizopewa'];
    $tarehe_ya_hudhurio_lijalo = $_POST['tarehe_ya_hudhurio_lijalo'];
    $jina_la_mtoa_huduma = $_POST ['jina_la_mtoa_huduma'];


    $get_id=mysqli_query($link, "SELECT id FROM clients WHERE uic = '.$uic.'");
    echo $get_id;
    $query = " 
    INSERT INTO visits(uic, mahali, tarehe_ya_hudhurio, aina_ya_hudhurio, amepima_na_kupewa_majibu, ameandikishwa_ctc, hali_ya_PrEP_mahudhurio, kisukari, shinikizo_la_damu, ugonjwa_wa_figo, ugonjwa_wa_ini, dawa_za_kuathiri_figo, CrCl, umri_15_35kg, dalili_za_maambukizi_ya_VVU, anastahili_kutumia_PrEP, aina_ya_dawa_PrEP_aliyopewa, namba_ya_vidonge_alivyopewa, sababu_za_kumwachisha_PrEP, matumizi_ya_PrEP, sababu_za_ufuasi_hafifu, kuchunguzwa_magonjwa_ya_ngono, ametibiwa_magonjwa_ya_ngono, madhara_ya_PrEP, huduma_nyingine_alizopewa, tarehe_ya_hudhurio_lijalo, jina_la_mtoa_huduma ) 
    VALUES ('$uic','$mahali', '$tarehe_ya_hudhurio', '$aina_ya_hudhurio', '$amepima_na_kupewa_majibu', '$ameandikishwa_ctc', '$hali_ya_PrEP_mahudhurio', '$kisukari','$shinikizo_la_damu', '$ugonjwa_wa_figo', '$ugonjwa_wa_ini', '$dawa_za_kuathiri_figo', '$CrCl', '$umri_15_35kg', '$dalili_za_maambukizi_ya_VVU', '$anastahili_kutumia_PrEP', '$aina_ya_dawa_PrEP_aliyopewa', '$namba_ya_vidonge_alivyopewa', '$sababu_za_kumwachisha_PrEP', '$matumizi_ya_PrEP', '$sababu_za_ufuasi_hafifu', '$kuchunguzwa_magonjwa_ya_ngono', '$ametibiwa_magonjwa_ya_ngono', '$madhara_ya_PrEP', '$huduma_nyingine_alizopewa', '$tarehe_ya_hudhurio_lijalo', '$jina_la_mtoa_huduma') ";
if($link->query($query)===TRUE){
    $msg = "Successfully Submited ";
	header("location: ../visits/");
    
}


?>