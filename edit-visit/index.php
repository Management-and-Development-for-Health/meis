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
                                                    <?php
   include('../config.php');
$query1=mysqli_query($link,"select * from visits where id='".$_GET['cid']."'");
while($row1=mysqli_fetch_array($query1)) 
{
?>
                                                        <h5>Edit  Visit For: <?php echo $row1['uic'];?> </h5>
                                                        <span>Jaza Taarifa zote kwa umakini </span>
                                                    </div>
                                                    <div class="card-block">
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
                                                            
                                                                        <form class="wizard-form" id="example-advanced-form" action="update-visit.php" method="POST">
<input type="hidden" value="<?php echo htmlentities($row1['id']);?>" name="id">
                                                                            <h3> Taarifa za Awali (1-7)</h3>
                                                                            <fieldset>

                                                                            <div class="row">
                                                                            <div class="col-sm-12 col-xl-3 m-b-30">
 <h4 class="sub-title">UIC</h4>
<input list="brow" class="form-control" name="uic" value="<?php echo htmlentities($row1['uic']);?>" required="required">
<datalist id="brow">
<?php 

$query=mysqli_query($link,"select * from clients");

while($row=mysqli_fetch_array($query))
{?>


<option value="<?php echo $row['uic'];?> ">

<?php } ?>
</datalist>
                
</div>
                                                                                <div class="col-sm-12 col-xl-3 m-b-30">
                                                                <h4 class="sub-title">Mahali</h4>

                                                                <select name="mahali" class="form-control form-control-default" required = "required">
                                                                    <option value="<?php echo htmlentities($row1['mahali']);?>"><?php echo htmlentities($row1['mahali']);?></option>
                                                                    <option value="kituoni">Kituoni</option>
                                                                    <option value="jamii">Jamii</option>

                                                                </select>
                                                            </div>

                                                            <div class="col-sm-12 col-xl-3 m-b-30">
                                                                <h4 class="sub-title">Tarehe ya Hudhurio</h4>
                                                                <input type="date" class="form-control" name="tarehe_ya_hudhurio" value="<?php echo htmlentities($row1['tarehe_ya_hudhurio']);?>" required = "required">
                                                            </div>
                                                            <div class="col-sm-12 col-xl-3 m-b-30">
                                                                <h4 class="sub-title">Aina ya Hudhurio la Mteja</h4>
                                                                <select name="aina_ya_hudhurio" class="form-control  form-control-default" required = "required">
                                                                    <option value="<?php echo htmlentities($row1['aina_ya_hudhurio']);?>"><?php echo htmlentities($row1['aina_ya_hudhurio']);?></option>
                                                                    <option value="mpya">Mteja Mpya</option>
                                                                    <option value="anaendelea">Anaendelea</option>
                                                                    <option value="amerudia kuanza upya">Amerudia kuanza upya</option>
                                                                    <option value="amehamia">Amehamia</option>

                                                                </select>
                                                            </div>



                                                        </div>

                                                        <div class="row">


                                                                                                                         <div class="col-sm-12 col-xl-3 m-b-30">
                                                                <h4 class="sub-title">Amepima na Kupokea Majibu</h4>

                                                                <select name="amepima_na_kupewa_majibu" class="form-control form-control-default" required = "required">
                                                                    <option value="<?php echo htmlentities($row1['amepima_na_kupewa_majibu']);?>"><?php echo htmlentities($row1['amepima_na_kupewa_majibu']);?></option>
                                                                    <option value="chanya">Chanya</option>
                                                                    <option value="hasi">Hasi</option>
                                                                    <option value="batili">Batili</option>
                                                                    <option value="amekataa kupima">Amekataa Kupima</option>
                                                                    <option value="amekataa kupokea majibu">Amekataa Kupokea Majibu</option>
                                                                    <option value="hausiki">Hausiki</option>

                                                                </select>
                                                            </div>
                                                                            <div class="col-sm-12 col-xl-5 m-b-30">
                                                                                <h4 class="sub-title">Kama majibu ni chanya ameandikishwa CTC</h4>
                                                                                <select name="ameandikishwa_ctc" class="form-control  form-control-default" required = "required">
                                                                                    <option value="<?php echo htmlentities($row1['ameandikishwa_ctc']);?>"><?php echo htmlentities($row1['ameandikishwa_ctc']);?></option>
                                                                                    <option value="ndio">Ndio</option>
                                                                                    <option value="hapana">Hapana</option>
                                                                                    <option value="hausiki">Hausiki</option>


                                                                                </select>
                                                                            </div>
                                                                            <div class="col-sm-12 col-xl-4 m-b-30">
                                                                                <h4 class="sub-title">Hali ya PrEP Katika hudhurio</h4>

                                                                                <select name="hali_ya_PrEP_mahudhurio" class="form-control form-control-default" required = "required">
                                                                                    <option value="<?php echo htmlentities($row1['hali_ya_PrEP_mahudhurio']);?>"><?php echo htmlentities($row1['hali_ya_PrEP_mahudhurio']);?></option>
                                                                                    <option value="mpya">Mpya/Ameanza</option>
                                                                                    <option value="anaendelea">Anaendelea</option>
                                                                                    <option value="ameanza upya tena">Ameanza upya Tena</option>
                                                                                    <option value="ametoka clinic nyingine">Ametoka kliniki nyingine</option>
                                                                                    <option value="ameachishwa">Ameachishwa</option>


                                                                                </select>
                                                                            </div>


                                                                        </div>


                                                                            </fieldset>
                                                                            <h3> Utambuzi wa magonjwa (8-13) </h3>
                                                                            <fieldset>
                                                                            <div class="row">


                                                                            <div class="col-sm-12 col-xl-3 m-b-30">
                   <h4 class="sub-title">Kisukari</h4>

                   <select name="kisukari" class="form-control form-control-default" required = "required">
                   <option value="<?php echo htmlentities($row1['kisukari']);?>"><?php echo htmlentities($row1['kisukari']);?></option>
                       <option value="ametibiwa yuko vizuri">Ametibiwa yuko Vizuri</option>
                       <option value="hajatibiwa hayuko vizuri">Hajatibiwa Hayuko Vizuri</option>
                       <option value="hana">Hana</option>


                   </select>
               </div>
                               <div class="col-sm-12 col-xl-5 m-b-30">
                                   <h4 class="sub-title">Shinikizo la damu</h4>
                                   <select name="shinikizo_la_damu" class="form-control  form-control-default" required = "required">
                      <option value="<?php echo htmlentities($row1['shinikizo_la_damu']);?>"><?php echo htmlentities($row1['shinikizo_la_damu']);?></option>
                       <option value="ametibiwa yuko vizuri">Ametibiwa yuko Vizuri</option>
                       <option value="hajatibiwa hayuko vizuri">Hajatibiwa Hayuko Vizuri</option>
                       <option value="hana">Hana</option>



                                   </select>
                               </div>
                               <div class="col-sm-12 col-xl-4 m-b-30">
                                   <h4 class="sub-title">Ugonjwa wa Figo</h4>

                                   <select name="ugonjwa_wa_figo" class="form-control form-control-default" required = "required">
                                   <option value="<?php echo htmlentities($row1['ugonjwa_wa_figo']);?>"><?php echo htmlentities($row1['ugonjwa_wa_figo']);?></option>
                                   <option value="ametibiwa yuko vizuri">Ametibiwa yuko Vizuri</option>
                       <option value="hajatibiwa hayuko vizuri">Hajatibiwa Hayuko Vizuri</option>
                       <option value="hana">Hana</option>



                                   </select>
                               </div>


                           </div>

                           <div class="row">


                   <div class="col-sm-12 col-xl-3 m-b-30">
                   <h4 class="sub-title">Ugonjwa wa Ini</h4>

                   <select name="ugonjwa_wa_ini" class="form-control form-control-default" required = "required">
                      <option value="<?php echo htmlentities($row1['ugonjwa_wa_ini']);?>"><?php echo htmlentities($row1['ugonjwa_wa_ini']);?></option>
                       <option value="ndio">Ndio</option>
                       <option value="hana">Hana</option>


                   </select>
               </div>
                               <div class="col-sm-12 col-xl-5 m-b-30">
                                   <h4 class="sub-title">Dawa za kuathiri Figo</h4>
                                   <select name="dawa_za_kuathiri_figo" class="form-control  form-control-default" required = "required">
                       <option value="<?php echo htmlentities($row1['dawa_za_kuathiri_figo']);?>"><?php echo htmlentities($row1['dawa_za_kuathiri_figo']);?></option>
                       <option value="ndio">Ndio (Acha Hastahili)</option>
                       <option value="hana">Hana (Endelea)</option>



                                   </select>
                               </div>
                               <div class="col-sm-12 col-xl-4 m-b-30">
                                   <h4 class="sub-title">Serum Creatinine Results (CrCL) Umol/L</h4>

                                   <select name="CrCl" class="form-control form-control-default" required = "required">
                                   <option value="<?php echo htmlentities($row1['CrCl']);?>"><?php echo htmlentities($row1['CrCl']);?></option>
                                   <option value="> 60 umol/L">>60 umol/L</option>
                       <option value="< 60 umol/L">< 60 umol/L </option>
                       <option value="majibu hayapo au kipimo hakijafanyika na anaonekana yupo vizuri kiafya">Majibu Hayapo au kipimo hakijafanyika na anaonekana yupo vizuri kiafya</option>
                       <option value="majibu hayapo au kipimo hakijafanyika na anaonekana hayupo vizuri kiafya">Majibu Hayapo au kipimo hakijafanyika na anaonekana hayupo vizuri kiafya</option>


                                   </select>
                               </div>


                           </div>
                                                                            </fieldset>
                                                                            <h3> Uchunguzi wa PrEP (14-19) </h3>
                                                                            <fieldset>
                                                                                 <div class="row">


                                                                                                                         <div class="col-sm-12 col-xl-4 m-b-30">
                                                                <h4 class="sub-title">Umri => 15 na uzito > 35KG</h4>

                                                                <select name="umri_15_35kg" class="form-control form-control-default" required = "required">
                                                                    <option value="<?php echo htmlentities($row1['umri_15_35kg']);?>"><?php echo htmlentities($row1['umri_15_35kg']);?></option>
                                                                    <option value="ndio">Ndio (endelea)</option>
                                                                    <option value="hapana">Hapana (asipewe huduma)</option>
                                                                </select>
                                                            </div>
                                                                            <div class="col-sm-12 col-xl-4 m-b-30">
                                                                                <h4 class="sub-title">Dalili za maambukizi ya VVU</h4>
                                                                                <select name="dalili_za_maambukizi_ya_VVU" class="form-control  form-control-default" required = "required">
                                                                                    <option value="<?php echo htmlentities($row1['dalili_za_maambikizi_ya_VVU']);?>"><?php echo htmlentities($row1['dalili_za_maambikizi_ya_VVU']);?></option>
                                                                                    <option value="ndio">Ndio (Acha Hastahili)</option>
                                                                                    <option value="hana">Hana (endelea)</option>


                                                                                </select>
                                                                            </div>
                                                                            <div class="col-sm-12 col-xl-4 m-b-30">
                                                                                <h4 class="sub-title">Anastahili kutumia PrEP</h4>

                                                                                <select name="anastahili_kutumia_PrEP" class="form-control form-control-default" required = "required">
                                                                                    <option value="<?php echo htmlentities($row1['anastihili_kutumia_PrEP']);?>"><?php echo htmlentities($row1['anastihili_kutumia_PrEP']);?></option>
                                                                                    <option value="ndio">Ndio</option>
                                                                                    <option value="hapana">Hapana</option>
                                                                                    


                                                                                </select>
                                                                            </div>


                                                                        </div>

                                                                        <div class="row">


<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Aina ya Dawa PrEP aliyopewa</h4>
<input type="text" value="Truvada" name="aina_ya_dawa_PrEP_aliyopewa" disabled class="form-control">
</div>
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Namba ya Vidonge Alivyopewa</h4>
<input type="number" class="form-control" name="namba_ya_vidonge_alivyopewa" value="<?php echo htmlentities($row1['namba_ya_vidonge_alivyopewa']);?>" placeholder="Weka 0 kama hajapewa">
</div>
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Sababu za kumwachisha PrEP</h4>

<select  class="form-control form-control-default" name="sababu_za_kumwachisha_PrEP" required = "required">
<option value="<?php echo htmlentities($row1['sababu_za_kumwachisha_PrEP']);?>"><?php echo htmlentities($row1['sababu_za_kumwachisha_PrEP']);?></option>
<option value="ameambukizwa vvu">Ameambukizwa VVU</option>
<option value="madhara ya dawa au allergy">Madhara ya Dawa au allergy</option>
<option value="matumizi hafifu">Matumizi Hafifu</option>
<option value="mteja ameamua kuacha">Mateja Ameamua Kuacha</option>
<option value="haihusiki">Haihusiki</option>
<option value="nyingine">Nyingine</option>



</select>
</div>


</div>


                                                                            </fieldset>
                                                                           
                                                                          
                                                                            <h3> Udhurio Lijalo (20-27) </h3>
                                                                            <fieldset>
                                                                            <div class="row">


<div class="col-sm-12 col-xl-3 m-b-30">
<h4 class="sub-title">Matumizi/ Ufuasi wa PrEP</h4>
<select name="matumizi_ya_PrEP" class="form-control form-control-default" required = "required">
<option value="<?php echo htmlentities($row1['matumizi_ya_PrEP']);?>"><?php echo htmlentities($row1['matumizi_ya_PrEP']);?></option>
<option value="hafifu">Hafifu</option>
<option value="mzuri">Mzuri</option>
<option value="haihusiki">Haihusiki</option>



</select>
</div>
<div class="col-sm-12 col-xl-3 m-b-30">
<h4 class="sub-title">Sababu za ufuasi Hafifu/ Matumizi duni ya PrEP</h4>
<select name="sababu_za_ufuasi_hafifu" class="form-control form-control-default" required = "required">
<option value="<?php echo htmlentities($row1['sababu_za_ufuasi_hafifu']);?>"><?php echo htmlentities($row1['sababu_za_ufuasi_hafifu']);?></option>
<option value="amesahau">Amesahau</option>
<option value="amepoteza / amaeishiwa dawa">Amepoteza/ Ameishiwa dawa</option>
<option value="mzigo wa dawa">Mzigo wa dawa</option>
<option value="madhara">Madhara</option>
<option value="stigma">Stigma</option>
<option value="hayupo hatarini">Hayupo Hatarini</option>
<option value="nyingine">Nyingine</option>



</select>
</div>
<div class="col-sm-12 col-xl-3 m-b-30">
<h4 class="sub-title">Kuchunguzwa magonjwa ya ngono</h4>

<select name="kuchunguzwa_magonjwa_ya_ngono" class="form-control form-control-default" required = "required">
<option value="<?php echo htmlentities($row1['kuchunguzwa_magonjwa_ya_ngono']);?>"><?php echo htmlentities($row1['kuchunguzwa_magonjwa_ya_ngono']);?></option>
<option value="ndio">Ndio</option>
<option value="hapana">Hapana</option>




</select>
</div>
<div class="col-sm-12 col-xl-3 m-b-30">
<h4 class="sub-title">Ametibiwa magonjwa ya ngono</h4>

<select name="ametibiwa_magonjwa_ya_ngono" class="form-control form-control-default" required = "required">
<option value="<?php echo htmlentities($row1['ametibiwa_magonjwa_ya_ngono']);?>"><?php echo htmlentities($row1['ametibiwa_magonjwa_ya_ngono']);?></option>
<option value="elimu imetolewa">Elimu imetolewa</option>
<option value="amechunguzwa na ametibiwa">Amechunguzwa na ametibiwa</option>
<option value="amechunguzwa na amepewa rufaa">Amechunguzwa na amepewa rufaa</option>




</select>
</div>


</div>
<div class="row">


<div class="col-sm-12 col-xl-3 m-b-30">
<h4 class="sub-title">Madhara ya PrEP</h4>
<select name="madhara_ya_PrEP" class="form-control form-control-default" required = "required">
<option value="<?php echo htmlentities($row1['madhara_ya_PrEP']);?>"><?php echo htmlentities($row1['madhara_ya_PrEP']);?></option>
<option value="kichefuchefu">Kichefuchefu</option>
<option value="maumivu ya tumbo">Maumivu ya tumbo</option>
<option value="maumivu ya kichwa">Maumivu ya kichwa</option>
<option value="kuharisha">Kuharisha</option>
<option value="kukosa hamu ya kula">Kukosa hamu ya kula</option>
<option value="kizunguzungu">Kizunguzungu</option>
<option value="nyingine">Nyingine</option>
<option value="hamna">hamna</option>



</select>
</div>
<div class="col-sm-12 col-xl-3 m-b-30">
<h4 class="sub-title">Huduma Nyingine alizopata</h4>
<input type="text" class="form-control" name="huduma_nyingine_alizopewa" value="<?php echo htmlentities($row1['huduma_nyingine_alizopewa']);?>">
</div>
<div class="col-sm-12 col-xl-3 m-b-30">
<h4 class="sub-title">Tarehe ya Hudhurio lijalo</h4>

<input type="date" class="form-control" name="tarehe_ya_hudhurio_lijalo" value="<?php echo htmlentities($row1['tarehe_ya_hudhurio_lijalo']);?>" >
</div>
<div class="col-sm-12 col-xl-3 m-b-30">
<h4 class="sub-title">Jina la Mtoa Huduma</h4>
<input type="text" class="form-control" name="jina_la_mtoa_huduma" required="required" value="<?php echo htmlentities($row1['jina_la_mtoa_huduma']);?>" >
</div>


</div>

<div>
<button type="submit" class="btn btn-primary m-b-0" name="submit"  onClick="return confirm('Do you really want to Update Data ?')">Update</button>
</div>
                                                                            </fieldset>
                                                                            <?php }?>
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