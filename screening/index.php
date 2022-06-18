<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: index.php");
    exit;
}
require_once('../config.php');
if (isset($_POST['submit'])) {
    # code...

    $uic = $_POST['uic'];
    $kvp = $_POST ['kvp'];

    $cid = $uic;
    $query = " update clients set kvp_group = '$kvp' where uic = '$uic'";
if($link->query($query)===TRUE){
    echo "thank you"; 
	header("location: ../visits/?cid=$cid");
    
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>MEIS | Screening</title>
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
                                                      <!-- client form starts -->
                                                      <div class="card">
                                                    <div class="card-header">
                                                        <h5>Screen Client</h5>
                                                        <!-- <span>Please fill all required fields</span> -->
                                                       
                                                        <div class="card-block">
                                                        <form id="example-advanced-form" action="index.php" method="post" novalidate>
                                                        <div class="row">

                                                    
                                                            <div class="col-sm-12 col-xl-6 m-b-30">
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
    
<input list="names" class="form-control" name="uic" value="<?php  echo $uic; ?>" >
 <?php }}
 ?>


                
</div>
<div class="col-sm-12 col-xl-6 m-b-30">
 <h4 class="sub-title">KVP Group</h4>
 <input list="brow" class="form-control" name="kvp">
<datalist id="brow">
  <option value="FSW">
  <option value="PWID">
  <option value="MSM">
  <option value="AGYW">
  <option value="Risk Men">
  <option value="Discordant Couple">
</datalist>
                
</div>
                                                            </div>
                                           
                                                            <div class="row">
                                                                <label class="col-sm-2"></label>
                                                                <div class="col-sm-10">
                                                                    <button type="submit" class="btn btn-primary m-b-0" name="submit" onClick="return confirm('Do you really want to submit ?')" >Submit</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </form>
                                                        </div>
                                                </div>
                                                <!-- client form ends -->
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

<!-- Custom js -->
<script src="../files/assets/pages/forms-wizard-validation/form-wizard.js"></script>
<script src="../files/assets/js/pcoded.min.js"></script>
<script src="../files/assets/js/vertical/vertical-layout.min.js"></script>
<script src="../files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="../files/assets/js/script.js"></script>
</body>
</html>