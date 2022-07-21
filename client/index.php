<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: ../index.php");
    exit;
}

$firstname_err = "";
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate firstname
    if(empty(trim($_POST["firstname"]))){
        $firstname_err = "Please enter a Firstname.";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>MEIS | New Client</title>
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
                                                        <h5>Register New Client</h5>
                                                        <span>Please fill all required fields</span>
                                                       
                                                        <div class="card-block">

                                                        <!-- Alert Message starts -->
                 
                                                                <!-- Alert Message Ends -->
                                                        <form  action="new_client.php" method="POST" id="example-advanced-form">
                                                        <div class="row">

                                                            <div class="col-sm-12 col-xl-4 m-b-30">
                                                            <h4 class="sub-title">Firstname</h4>
                                                                <div class="col-sm-12">
                                                                    <input type="text" class="form-control" name="firstname"  placeholder="Enter Firstname" required = "required">
                                                                    <span class="help-block" style="color: red;"><?php echo $firstname_err; ?></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-xl-4 m-b-30">
                                                            <h4 class="sub-title">Middle Name</h4>
                                                                <div class="col-sm-12">
                                                                    <input type="text" class="form-control" name="middlename" placeholder="Enter Middlename">
                                                                    <span class="messages"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-xl-4 m-b-30">
                                                            <h4 class="sub-title">Last name</h4>
                                                                <div class="col-sm-12">
                                                                    <input type="text" class="form-control" name="lastname"  placeholder="Enter Lastname" required = "required">
                                                                    <span class="messages"></span>
                                                                </div>
                                                            </div>
                                                            </div>
                                                            <div class="row">

                                                            <div class="col-sm-12 col-xl-4 m-b-30">
                                                            <h4 class="sub-title">Gender</h4>
                                                                <div class="col-sm-12">
                                                                  <select class="form-control">
                                                                    <option>Male</option>
                                                                    <option>Female</option>
                                                                  </select>
                                                                    <span class="messages"></span>
                                                                </div>
                                                            </div>

<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Gender</h4>
<div class="form-radio">
                                                                        <div class="radio radiofill radio-primary radio-inline">
                                                                            <label>
                                                                                <input type="radio" name="gender" value="1" data-bv-field="member">
                                                                                <i class="helper"></i>Male
                                                                            </label>
                                                                        </div>
                                                                        <div class="radio radiofill radio-primary radio-inline">
                                                                            <label>
                                                                                <input type="radio" name="gender" value="2" data-bv-field="member">
                                                                                <i class="helper"></i>Female
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <span class="messages"></span>
</div>
<div class="col-sm-12 col-xl-4 m-b-30">
 <h4 class="sub-title">Place of Birth</h4>
 <input list="region" class="form-control" name="city_name">
<datalist id="region" name = "city_name">
<?php 
include('../config.php');
$query=mysqli_query($link,"select * from cities");
while($row=mysqli_fetch_array($query))
{?>

<option value="<?php echo $row['city_name'];?>">

<?php } ?>
</datalist>
                
</div>
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Date of Birth</h4>
    <div class="col-sm-12">
        <input type="date" class="form-control" name="dob" max="2009-12-31"  placeholder="Enter Date of Birth" required = "required">
        <span class="messages"></span>
    </div>
</div>
</div>
<div class="row">

<!-- <div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">File number <span style="color: gainsboro;">(optional)</span></h4>
    <div class="col-sm-12">
        <input type="text" class="form-control" name="file_no"  placeholder="Enter File number">
        <span class="messages"></span>
    </div>
</div> -->
<!-- <div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">UIC</h4>
    <div class="col-sm-12">
        <input type="text" class="form-control" pattern="[A-Z]{2}[-][A-Z]{2}[-][A-Z]{3}[-][0-2]{1}[-][0-9]{2}[-][0-9]{2}" name="uic"  placeholder="Enter UIC (FA-BA-MWN-1-09-99)" required = "required">
        <span class="messages"></span>
    </div>
</div> -->
<div class="col-sm-12 col-xl-4 m-b-30">
 <!-- <h4 class="sub-title">Facility Name</h4> -->
 <?php 
$query=mysqli_query($link,"select * from users where username = '".$_SESSION['username']."'");
while($row=mysqli_fetch_array($query))
{?>
 <input  class="form-control" name="facility"  value="<?php echo $row['facility'];?>" hidden>


<?php } ?>

 <input  class="form-control" name="activity"  value="Created User" hidden>     

 <input type="text" value="<?php echo $_SESSION['id']; ?>" hidden name="user_id">         
</div>
</div>
</div>
                                                          
                                                            <div class="row">
                                                                <label class="col-sm-2"></label>
                                                               
                                                                <div class="notifications">
                                                                <button type="submit" class="btn btn-success waves-effect" data-type="success" data-from="top" data-align="right" onClick="return confirm('Do you really want to submit ?')">Submit</button>
                                                              
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

<script type="text/javascript" src="../files/assets/js/bootstrap-growl.min.js"></script>


</body>
</html>