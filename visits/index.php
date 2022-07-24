<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>MEIS | Visits</title>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Gradient Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
      <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
      <meta name="author" content="Phoenixcoded" />
      <!-- Favicon icon -->
      <link rel="icon" href="../files/assets/images/favicon.ico" type="image/x-icon">
      <!-- Google font-->     <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="../files/bower_components/bootstrap/css/bootstrap.min.css">
      <!-- waves.css -->
      <link rel="stylesheet" href="../files/assets/pages/waves/css/waves.min.css" type="text/css" media="all">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="../files/assets/icon/themify-icons/themify-icons.css">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="../files/assets/icon/icofont/css/icofont.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="../files/assets/icon/font-awesome/css/font-awesome.min.css">
      <!-- Select 2 css -->
    <link rel="stylesheet" href="../files/bower_components/select2/css/select2.min.css" />
    <!-- Multi Select css -->
    <link rel="stylesheet" type="text/css" href="../files/bower_components/bootstrap-multiselect/css/bootstrap-multiselect.css" />
    <link rel="stylesheet" type="text/css" href="../files/bower_components/multiselect/css/multi-select.css" />
      <!--forms-wizard css-->
      <link rel="stylesheet" type="text/css" href="../files/bower_components/jquery.steps/css/jquery.steps.css">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="../files/assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="../files/assets/css/jquery.mCustomScrollbar.css">
</head>
<body>
<?php include '../include/nav.php';?>

<div class="pcoded-content">

<div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <div class="row">
                                        <div class="col-sm-12">
                                                      <!-- Form wizard with validation card start -->
                                                      <div class="card">
                                                    <div class="card-header">
                                                        <h5>PrEP Form</h5>
                                                        <span>Jaza Taarifa zote kwa umakini </span>
                                                    </div>
                                                    <div class="card-block">
                                                    <span><?php if (isset($_POST['submit'])) {
                                                        # code...
                                                        echo $msg;
                                                    }?></span>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div id="wizard">
                                                                    <section>
                                                                    <!-- <div class="col-sm-12 col-xl-3 m-b-30">
                                                                <h4 class="sub-title">Jina la Mteja</h4>
                                                                <p> Chagua jina la mteja
                                                                </p>
                                                                <select class="js-example-basic-single col-sm-12">
                                                                   <option value="Benson">Bensoni Isaya</option>
                                                                </select>
                                                            </div> -->
                                                            
                                                                        <form class="wizard-form" id="example-advanced-form" action="submit_visit.php" method="POST">
                                                                        <form action="#" method="post" class="j-forms" novalidate>
                                                                            <h3> Taarifa za Awali (1-7)</h3>
                                                                            <fieldset>

                                                                            <div class="row">
                                                                            <div class="col-sm-12 col-xl-3 m-b-30">
 <h4 class="sub-title">UIC</h4>
 <?php

if (isset($_GET['cid'])=='') {
?>
<input list="brow" class="form-control" name="uic" required="required">
<datalist id="brow">
<?php 
include('../config.php');
$query=mysqli_query($link,"select * from clients");
while($row=mysqli_fetch_array($query))
{?>

<option value="<?php echo $row['uic'];?> ">

<?php } ?>
</datalist>

<?php }else {
    
     $uic = $_GET['cid'];
 
 if ($_GET['cid']!="") {?>
    
<input list="names" class="form-control" name="uic" id="uic" value="<?php  echo $uic; ?>" >
 <?php }}
 ?>
                
</div>
                                                                                <div class="col-sm-12 col-xl-3 m-b-30">
                                                                <h4 class="sub-title">Mahali</h4>

                                                                <select name="mahali" class="form-control form-control-default" required = "required">
                                                                <option value="">Chagua</option>
                                                                    <option value="kituoni">1. Kituoni</option>
                                                                    <option value="jamii">2. Jamii</option>

                                                                </select>
                                                            </div>

                                                            <div class="col-sm-12 col-xl-3 m-b-30">
                                                                <h4 class="sub-title">Tarehe ya Hudhurio</h4>
                                                                <input type="date" class="form-control" name="tarehe_ya_hudhurio" required = "required" >
                                                            </div>
                                                            <div class="col-sm-12 col-xl-3 m-b-30">
                                                                <h4 class="sub-title">Aina ya Hudhurio la Mteja</h4>
                                                                <select name="aina_ya_hudhurio" class="form-control  form-control-default" required = "required" id="mselect1" onChange="hudhurio();">
                                                                <option value="">Chagua</option>
                                                                    <option value="mpya">1. Mteja Mpya</option>
                                                                    <option value="anaendelea">2. Anaendelea</option>
                                                                    <option value="amerudia kuanza upya">3. Amerudia kuanza upya</option>
                                                                    <option value="amehamia">4. Amehamia</option>
                                                                    <option value="alitembelea_kituo_kingine">5. Alitembelea kituo kingine</option>

                                                                </select>
                                                            </div>



                                                        </div>

                                                        <div class="row">


                                                                                                                         <div class="col-sm-12 col-xl-3 m-b-30">
                                                                <h4 class="sub-title">Amepima na Kupokea Majibu</h4>

                                                                <select name="amepima_na_kupewa_majibu" class="form-control form-control-default" required = "required" id="mselect" onChange="amepima();">
                                                                <option value="">Chagua</option>
                                                                    <option value="chanya">1. Chanya</option>
                                                                    <option value="hasi">2. Hasi</option>
                                                                    <option value="batili">3. Batili</option>
                                                                    <option value="amekataa kupima">4. Amekataa Kupima</option>
                                                                    <option value="amekataa kupokea majibu">5. Amekataa Kupokea Majibu</option>
                                                                    <option value="hausiki">6. Hausiki</option>

                                                                </select>
                                                            </div>
                                                                            <div class="col-sm-12 col-xl-5 m-b-30">
                                                                                <h4 class="sub-title">Kama majibu ni chanya ameandikishwa CTC</h4>
                                                                                <select name="ameandikishwa_ctc" class="form-control  form-control-default" required = "required" id="ameandikishwa_ctc">
                                                                                <option value="">Chagua</option>
                                                                                    <option value="ndio">1. Ndio</option>
                                                                                    <option value="hapana">2. Hapana</option>
                                                                                    <option value="hausiki">3. Hausiki</option>


                                                                                </select>
                                                                            </div>
                                                                            <div class="col-sm-12 col-xl-4 m-b-30" >
                                                                                <h4 class="sub-title">Hali ya PrEP Katika hudhurio</h4>

                                                                                <select name="hali_ya_PrEP_mahudhurio" class="form-control form-control-default" required = "required" id="hali_ya_PrEP">
                                                                                <option value="">Chagua</option>
                                                                                    <option value="mpya">1. Mpya/Ameanza</option>
                                                                                    <option value="anaendelea">2. Anaendelea</option>
                                                                                    <option value="ameanza upya tena">3. Ameanza upya Tena</option>
                                                                                    <option value="ametoka clinic nyingine">4.Ametoka kliniki nyingine</option>
                                                                                    <option value="ameachishwa">5. Ameachishwa</option>


                                                                                </select>
                                                                                
                                                                            </div>
                                                                            <div class="col-sm-12 col-xl-4 m-b-30" id="hide">
                                                                                <!-- <h4 class="sub-title">Hali ya PrEP Katika hudhurio</h4> -->
<input type="text" class="form-group" hidden>
                                                                                
                                                                            </div>
                                                                            <div class="row">
                                                                            <div class="col-sm-12 col-xl-5 m-b-30">
                                                                            <button class="btn btn-primary m-b-0" style="display: none;" id="submit_pos" name="submit">submit</button>
                                                                            </div>
                                                                            </div>


                                                                        </div>


                                                                            </fieldset>
                                                                            <h3> Utambuzi wa magonjwa (8-13) </h3>
                                                                            <fieldset id="hide">
                                                                            <div class="row">


                                                                            <div class="col-sm-12 col-xl-3 m-b-30">
                   <h4 class="sub-title">Kisukari</h4>

                   <select name="kisukari" class="form-control form-control-default" required = "required">
                   <option value="">Chagua</option>
                       <option value="ametibiwa yuko vizuri">1. Ametibiwa yuko Vizuri</option>
                       <option value="hajatibiwa hayuko vizuri">2. Hajatibiwa Hayuko Vizuri</option>
                       <option value="hana">3. Hana</option>


                   </select>
               </div>
                               <div class="col-sm-12 col-xl-5 m-b-30">
                                   <h4 class="sub-title">Shinikizo la damu</h4>
                                   <select name="shinikizo_la_damu" class="form-control  form-control-default" required = "required">
                                   <option value="">Chagua</option>
                       <option value="ametibiwa yuko vizuri">1. Ametibiwa yuko Vizuri</option>
                       <option value="hajatibiwa hayuko vizuri">2. Hajatibiwa Hayuko Vizuri</option>
                       <option value="hana">3. Hana</option>



                                   </select>
                               </div>
                               <div class="col-sm-12 col-xl-4 m-b-30">
                                   <h4 class="sub-title">Ugonjwa wa Figo</h4>

                                   <select name="ugonjwa_wa_figo" class="form-control form-control-default" required = "required">
                                   <option value="">Chagua</option>
                        <option value="ametibiwa yuko vizuri">1. Ametibiwa yuko Vizuri</option>
                       <option value="hajatibiwa hayuko vizuri">2. Hajatibiwa Hayuko Vizuri</option>
                       <option value="hana">3. Hana</option>



                                   </select>
                               </div>


                           </div>

                           <div class="row">


                   <div class="col-sm-12 col-xl-3 m-b-30">
                   <h4 class="sub-title">Ugonjwa wa Ini</h4>

                   <select name="ugonjwa_wa_ini" class="form-control form-control-default" required = "required">
                   <option value="">Chagua</option>
                       <option value="ndio">1. Ndio</option>
                       <option value="hana">2. Hana</option>


                   </select>
               </div>
                               <div class="col-sm-12 col-xl-5 m-b-30">
                                   <h4 class="sub-title">Anatumia dawa za kuathiri Figo</h4>
                                   <select name="dawa_za_kuathiri_figo" class="form-control  form-control-default" required = "required" id="mselect2" onchange="athariFigo();">
                                   <option value="">Chagua</option>
                       <option value="ndio">1. Ndio (Acha Hastahili)</option>
                       <option value="hana">2. Hana (Endelea)</option>



                                   </select>
                               </div>
                               <div class="col-sm-12 col-xl-3 m-b-30" >
                                   <h4 class="sub-title">Amefanyiwa kipimo cha HBV</h4>

                                   <select name="amenfanyiwa_kipimo_cha_hbv" class="form-control form-control-default" required = "required" id="hide1">
                                   <option value="">Chagua</option>
                                   <option value="ndio">1. Ndio</option>
                       <option value="hapana">2. Hapana</option>
                       <option value="haiusiki">3. Haiusiki</option>
                               </select>
                               </div>

                               <div class="col-sm-12 col-xl-3 m-b-30" >
                                   <h4 class="sub-title">Majibu ya kipimo cha HBV</h4>

                                   <select name="majibu_ya_kipimo_cha_hbv" class="form-control form-control-default" required = "required" id="hide1">
                                   <option value="">Chagua</option>
                                   <option value="hasi">1. Hasi</option>
                       <option value="chanya">2. Chanya</option>
                       <option value="haiusiki">3. Haiusiki</option>
                               </select>
                               </div>
                               <div class="col-sm-12 col-xl-3 m-b-30" >
                                   <h4 class="sub-title">Amefanyiwa kipimo cha HCV</h4>

                                   <select name="amenfanyiwa_kipimo_cha_hcv" class="form-control form-control-default" required = "required" id="hide1">
                                   <option value="">Chagua</option>
                                   <option value="ndio">1. Ndio</option>
                       <option value="hapana">2. Hapana</option>
                       <option value="haiusiki">3. Haiusiki</option>
                               </select>
                               </div>
                               <div class="col-sm-12 col-xl-3 m-b-30" >
                                   <h4 class="sub-title">Majibu ya kipimo cha HCV</h4>

                                   <select name="majibu_ya_kipimo_cha_hcv" class="form-control form-control-default" required = "required" id="hide1">
                                   <option value="">Chagua</option>
                                   <option value="hasi">1. Hasi</option>
                       <option value="chanya">2. Chanya</option>
                       <option value="haiusiki">3. Haiusiki</option>
                               </select>
                               </div>
                               <div class="col-sm-12 col-xl-3 m-b-30" >
                                   <h4 class="sub-title">Amefanyiwa kipimo cha CrCL</h4>

                                   <select name="amenfanyiwa_kipimo_cha_crcl" class="form-control form-control-default" required = "required" id="hide1">
                                   <option value="">Chagua</option>
                                   <option value="ndio">1. Ndio</option>
                       <option value="hapana">2. Hapana</option>
                       <option value="haiusiki">3. Haiusiki</option>
                               </select>
                               </div>
                               <div class="col-sm-12 col-xl-4 m-b-30" >
                                   <h4 class="sub-title">Serum Creatinine Results (CrCL) Umol/L</h4>

                                   <select name="CrCl" class="form-control form-control-default" required = "required" id="hide1">
                                   <option value="">Chagua</option>
                                   <option value="> 60 umol/L">1. >60 umol/L apewe huduma</option>
                       <option value="< 60 umol/L">2. < 60 umol/L asipewe huduma </option>
                       <option value="majibu hayapo au kipimo hakijafanyika na anaonekana yupo vizuri kiafya">3. Majibu Hayapo au kipimo hakijafanyika na anaonekana yupo vizuri kiafya</option>
                       <option value="haihusiki">4. Haihusiki</option>


                                   </select>
                               </div>
                               <div class="col-sm-12 col-xl-4 m-b-30" id="hide">
                                                                                <!-- <h4 class="sub-title">Hali ya PrEP Katika hudhurio</h4> -->
<input type="text" class="form-group" hidden>
                                                                                
                                                                            </div>
                               <div class="row">
                                                                            <div class="col-sm-12 col-xl-5 m-b-30">
                                                                            <button class="btn btn-primary m-b-0" style="display: none;" id="submit_ini" name="submit">submit</button>
                                                                            </div>
                                                                            </div>
                           </div>
                                                                            </fieldset>
                                                                            <h3> Uchunguzi wa PrEP (14-19) </h3>
                                                                            <fieldset>
                                                                                 <div class="row">


                                                                                                                         <div class="col-sm-12 col-xl-4 m-b-30">
                                                                <h4 class="sub-title">Umri => 15 na uzito > 35KG</h4>

                                                                <select name="umri_15_35kg" class="form-control form-control-default" required = "required" id="mselect3" onchange="uzito();">
                                                                <option value="">Chagua</option>
                                                                    <option value="ndio">1. Ndio (endelea)</option>
                                                                    <option value="hapana">2. Hapana (asipewe huduma)</option>
                                                                </select>
                                                            </div>
                                                                            <div class="col-sm-12 col-xl-4 m-b-30">
                                                                                <h4 class="sub-title">Dalili za maambukizi ya VVU</h4>
                                                                                <select name="	dalili_za_maambukizi_ya_VVU" class="form-control  form-control-default" required = "required" id="hide_dalili" onchange="dalili();">
                                                                                <option value="">Chagua</option>
                                                                                    <option value="ndio">1. Ndio (Acha Hastahili)</option>
                                                                                    <option value="hana">2. Hana (endelea)</option>


                                                                                </select>
                                                                            </div>
                                                                            <div class="col-sm-12 col-xl-4 m-b-30">
                                                                                <h4 class="sub-title">Anastahili kutumia PrEP</h4>

                                                                                <select name="anastahili_kutumia_PrEP" class="form-control form-control-default" required = "required" id="hide_anastahili">
                                                                                <option value="">Chagua</option>
                                                                                    <option value="ndio">1. Ndio</option>
                                                                                    <option value="hapana">2. Hapana</option>
                                                                                    


                                                                                </select>
                                                                            </div>


                                                                        </div>

                                                                        <div class="row">


<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Aina ya Dawa PrEP aliyopewa</h4>
<input type="text" value="TDF/FTC" name="aina_ya_dawa_PrEP_aliyopewa"  class="form-control" id="hide_dawa">
</div>
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Namba ya Vidonge Alivyopewa</h4>
<input type="number" class="form-control" name="namba_ya_vidonge_alivyopewa" placeholder="Weka 0 kama hajapewa" id="hide_vidonge">
</div>
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Sababu za kumwachisha PrEP</h4>

<select  class="form-control form-control-default" name="sababu_za_kumwachisha_PrEP" required = "required" id="hide_sababu">
<option value="">Chagua</option>
<option value="ameambukizwa vvu">1. Ameambukizwa VVU</option>
<option value="madhara ya dawa au allergy">2. Madhara ya Dawa au allergy</option>
<option value="matumizi hafifu">3. Matumizi Hafifu</option>
<option value="mteja ameamua kuacha">4. Mateja Ameamua Kuacha</option>
<option value="haihusiki">5. Haihusiki</option>
<option value="nyingine">6. Nyingine</option>



</select>
</div>

<div class="col-sm-12 col-xl-4 m-b-30" id="hide">
                                                                                <!-- <h4 class="sub-title">Hali ya PrEP Katika hudhurio</h4> -->
<input type="text" class="form-group" hidden>
                                                                                
                                                                            </div>
                               <div class="row">
                                                                            <div class="col-sm-12 col-xl-5 m-b-30">
                                                                            <button class="btn btn-primary m-b-0" style="display: none;" id="submit_uzito" name="submit">submit</button>
                                                                            </div>
                                                                            </div>
</div>


                                                                            </fieldset>
                                                                           
                                                                          
                                                                            <h3> Udhurio Lijalo (20-27) </h3>
                                                                            <fieldset>
                                                                            <div class="row">


<div class="col-sm-12 col-xl-3 m-b-30">
<h4 class="sub-title">Matumizi/ Ufuasi wa PrEP</h4>
<select name="matumizi_ya_PrEP" class="form-control form-control-default" required = "required">
<option value="">Chagua</option>
<option value="hafifu">1. Hafifu</option>
<option value="mzuri">2. Mzuri</option>
<option value="haihusiki">3. Haihusiki</option>



</select>
</div>
<div class="col-sm-12 col-xl-3 m-b-30">
<h4 class="sub-title">Sababu za ufuasi Hafifu/ Matumizi duni ya PrEP</h4>
<select name="sababu_za_ufuasi_hafifu" class="form-control form-control-default" required = "required">
<option value="">Chagua</option>
<option value="amesahau">1. Amesahau</option>
<option value="amepoteza / amaeishiwa dawa">2. Amepoteza/ Ameishiwa dawa</option>
<option value="mzigo wa dawa">3. Mzigo wa dawa</option>
<option value="madhara">4. Madhara</option>
<option value="stigma">5. Stigma</option>
<option value="hayupo hatarini">6. Hayupo Hatarini</option>
<option value="nyingine">7. Nyingine</option>



</select>
</div>
<div class="col-sm-12 col-xl-3 m-b-30">
<h4 class="sub-title">Kuchunguzwa magonjwa ya ngono</h4>

<select name="kuchunguzwa_magonjwa_ya_ngono" class="form-control form-control-default" required = "required">
<option value="">Chagua</option>
<option value="ndio">1. Ndio</option>
<option value="hapana">2. Hapana</option>




</select>
</div>
<div class="col-sm-12 col-xl-3 m-b-30">
<h4 class="sub-title">Ametibiwa magonjwa ya ngono</h4>

<select name="ametibiwa_magonjwa_ya_ngono" class="form-control form-control-default" required = "required">
<option value="">Chagua</option>
<option value="elimu imetolewa">1. Elimu imetolewa</option>
<option value="amechunguzwa na ametibiwa">2. Amechunguzwa na ametibiwa</option>
<option value="amechunguzwa na amepewa rufaa">3. Amechunguzwa na amepewa rufaa</option>




</select>
</div>


</div>
<div class="row">


<div class="col-sm-12 col-xl-3 m-b-30">
<h4 class="sub-title">Madhara ya PrEP</h4>
<select name="madhara_ya_PrEP" class="form-control form-control-default" required = "required">
<option value="">Chagua</option>
<option value="kichefuchefu">1. Kichefuchefu</option>
<option value="maumivu ya tumbo">2. Maumivu ya tumbo</option>
<option value="maumivu ya kichwa">3. Maumivu ya kichwa</option>
<option value="kuharisha">4. Kuharisha</option>
<option value="kukosa hamu ya kula">5. Kukosa hamu ya kula</option>
<option value="kizunguzungu">6. Kizunguzungu</option>
<option value="nyingine">7. Nyingine</option>
<option value="hamna">8. hamna</option>



</select>
</div>


<div class="col-sm-12 col-xl-3 m-b-30">
<h4 class="sub-title">Kondomu za kike</h4>
<input type="text" class="form-control" name="kondomu_za_kike">
</div>

<div class="col-sm-12 col-xl-3 m-b-30">
<h4 class="sub-title">Kondomu za kiume</h4>
<input type="text" class="form-control" name="kondomu_za_kiume">
</div>

<div class="col-sm-12 col-xl-3 m-b-30">
<h4 class="sub-title">Idadi ya vielelezo vya elimu ya afya alivyopewa</h4>
<input type="text" class="form-control" name="idadi_ya_vielelezo_vya_elimu_afya_alivyopewa">
</div>

<div class="col-sm-12 col-xl-3 m-b-30">
<h4 class="sub-title">Huduma Nyingine alizopata</h4>
<input type="text" class="form-control" name="huduma_nyingine_alizopewa">
</div>


<div class="col-sm-12 col-xl-3 m-b-30">
<h4 class="sub-title">Tarehe ya Hudhurio lijalo</h4>

<input type="date" class="form-control" name="tarehe_ya_hudhurio_lijalo" >
</div>
<div class="col-sm-12 col-xl-3 m-b-30">
<h4 class="sub-title">Jina la Mtoa Huduma</h4>
<!-- <input type="text" class="form-control" name="jina_la_mtoa_huduma" required="required" > -->

<select name="jina_la_mtoa_huduma" required="required" class="form-control">
<?php 
include('../config.php');
$query=mysqli_query($link,"select * from providers");
// $row=mysqli_fetch_array($query);
while ($row=mysqli_fetch_array($query)) {?>
 
<option value="<?php echo $row['firstname']?> <?php echo $row['lastname']?>"><?php echo $row['firstname']?> <?php echo $row['lastname']?></option>
 <?php } ?>
</select>
</div>


</div>

<div>
<button type="submit" class="btn btn-primary m-b-0" name="submit" id="final_submit">Submit</button>
</div>
                                                                            </fieldset>
                                                                        </form>
                                                                        </form>
                                                                    </section>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Form wizard with validation card end -->
                                        </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
</div>

</div>


<script>
function amepima() {
    var mselect  =  document.getElementById("mselect");
    var mselectvalue = mselect.options[mselect.selectedIndex].value;
    var mdivone =  document.getElementById("hali_ya_PrEP");
    var mdivtwo =  document.getElementById("submit_pos");

      if (mselectvalue == "chanya") {
          alert("Mteja ana maambukizi ya VVU Hastahili Huduma ya PrEP");
       mdivtwo.style.display = "block";
       mdivone.style.display = "none";

      }else if (mselectvalue == "hasi") {
        $('select[name="ameandikishwa_ctc"]:first').val('hausiki') ;
        document.getElementById("ameandikishwa_ctc").disabled = true;
        mdivtwo.style.display = "none";
      mdivone.style.display = "block";
      }
     
      else {
      mdivtwo.style.display = "none";
      mdivone.style.display = "block";
      
      }  
}
  
function athariFigo() {
    var mselect  =  document.getElementById("mselect2");
    var mselectvalue = mselect.options[mselect.selectedIndex].value;
    var mdivone =  document.getElementById("hide1");
    var mdivtwo =  document.getElementById("submit_ini");

      if (mselectvalue == "ndio") {
        alert("Mteja hastahili Huduma ya PrEP");
       mdivtwo.style.display = "block";
       mdivone.style.display = "none";

      }
     
      else {
      mdivtwo.style.display = "none";
      mdivone.style.display = "block";
      
      }  
}

function uzito() {
    var mselect  =  document.getElementById("mselect3");
    var mselectvalue = mselect.options[mselect.selectedIndex].value;
    var mdivone =  document.getElementById("hide_sababu");
    var mdivtwo =  document.getElementById("submit_uzito");
    var mdivthree =  document.getElementById("hide_sababu");
    var mdivfour =  document.getElementById("hide_dawa");
    var mdivfive =  document.getElementById("hide_vidonge");
    var mdivsix =  document.getElementById("hide_dalili");
    var mdivseven =  document.getElementById("hide_anastahili");

      if (mselectvalue == "hapana") {
          alert("Uzito wa Mteja ni chini ya KG 15: Hastahili Huduma ya PrEP")
       mdivtwo.style.display = "block";
       mdivone.style.display = "none";
       mdivthree.style.display = "none";
       mdivfour.style.display = "none";
       mdivfive.style.display = "none";
       mdivsix.style.display = "none";
       mdivseven.style.display = "none";

      }
      else if (mselectvalue == "ndio") {
        mdivtwo.style.display = "none";
       mdivone.style.display = "block";
       mdivthree.style.display = "block";
       mdivfour.style.display = "block";
       mdivfive.style.display = "block";
       mdivsix.style.display = "block";
       mdivseven.style.display = "block";
      }
     
      else {
      mdivtwo.style.display = "none";
      mdivone.style.display = "block";
      
      }  
}
function dalili() {
    var mselect  =  document.getElementById("hide_dalili");
    var mselectvalue = mselect.options[mselect.selectedIndex].value;
    var mdivone =  document.getElementById("hide_sababu");
    var mdivtwo =  document.getElementById("submit_uzito");
    var mdivthree =  document.getElementById("hide_sababu");
    var mdivfour =  document.getElementById("hide_dawa");
    var mdivfive =  document.getElementById("hide_vidonge");
    var mdivseven =  document.getElementById("hide_anastahili");

      if (mselectvalue == "ndio") {
          alert("Mteja anadalili za VVU Hastahili huduma ya PrEP");
       mdivtwo.style.display = "block";
       mdivone.style.display = "none";
       mdivthree.style.display = "none";
       mdivfour.style.display = "none";
       mdivfive.style.display = "none";
       mdivseven.style.display = "none";

      }
      else if (mselectvalue == "hana") {
        mdivtwo.style.display = "none";
       mdivone.style.display = "block";
       mdivthree.style.display = "block";
       mdivfour.style.display = "block";
       mdivfive.style.display = "block";
       mdivseven.style.display = "block";
      }
     
      else {
      mdivtwo.style.display = "none";
      mdivone.style.display = "block";
      
      }  
}

function hudhurio() {
    var mselect  =  document.getElementById("mselect1");
    var mselectvalue = mselect.options[mselect.selectedIndex].value;
    var mdivone =  document.getElementById("hide");
    var mdivtwo =  document.getElementById("submit_pos");

      if (mselectvalue == "mpya") {
        $('select[name="hali_ya_PrEP_mahudhurio"]:first').val('mpya') ;
        document.getElementById("hali_ya_PrEP").disabled = true;

      }
     else if (mselectvalue == "anaendelea") {
        $('select[name="hali_ya_PrEP_mahudhurio"]:first').val('anaendelea') ;
        document.getElementById("hali_ya_PrEP").disabled = true;
     }
     else if (mselectvalue == "amerudia kuanza upya") {
        $('select[name="hali_ya_PrEP_mahudhurio"]:first').val('ameanza upya tena') ;
        document.getElementById("hali_ya_PrEP").disabled = true;
     } 
     else if (mselectvalue == "amehamia") {
        $('select[name="hali_ya_PrEP_mahudhurio"]:first').val('ametoka clinic nyingine') ;
        document.getElementById("hali_ya_PrEP").disabled = false;
     }
     else if (mselectvalue == "") {
        $('select[name="hali_ya_PrEP_mahudhurio"]:first').val('') ;
        document.getElementById("hali_ya_PrEP").disabled = false;
     }
    
}

$('#final_submit').on('click', function(){
            var uic =  $('#uic').val();
            
            $.ajax({
      	url: 'checkuic.php',
      	type: 'post',
      	data: {
            'check_uic':1,
      		'uic' : uic,
      	},
      	success: function(response){
            if (response == 'client') {
                alert('uic doesnt exist');
            }
      		
    
      	}
      });
});
</script>
<!-- Required Jquery -->
<script type="text/javascript" src="../files/bower_components/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="../files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="../files/bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="../files/bower_components/bootstrap/js/bootstrap.min.js"></script>
<!-- waves js -->
<script src="../files/assets/pages/waves/js/waves.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="../files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="../files/bower_components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="../files/bower_components/modernizr/js/css-scrollbars.js"></script>
<!--Forms - Wizard js-->
<script src="../files/bower_components/jquery.cookie/js/jquery.cookie.js"></script>
<script src="../files/bower_components/jquery.steps/js/jquery.steps.js"></script>
<script src="../files/bower_components/jquery-validation/js/jquery.validate.js"></script>
<!-- Validation js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
<script type="text/javascript" src="../files/assets/pages/form-validation/validate.js"></script>

<!-- Select 2 js -->
<script type="text/javascript" src="../files/bower_components/select2/js/select2.full.min.js"></script>
<!-- Multiselect js -->
<script type="text/javascript" src="../files/bower_components/bootstrap-multiselect/js/bootstrap-multiselect.js">
</script>
<script type="text/javascript" src="../files/bower_components/multiselect/js/jquery.multi-select.js"></script>
<script type="text/javascript" src="../files/assets/js/jquery.quicksearch.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="../files/assets/pages/advance-elements/select2-custom.js"></script>
<script src="../files/assets/pages/forms-wizard-validation/form-wizard.js"></script>
<script src="../files/assets/js/pcoded.min.js"></script>
<script src="../files/assets/js/vertical/vertical-layout.min.js"></script>
<script src="../files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="../files/assets/js/script.js"></script>
</body>
</html>