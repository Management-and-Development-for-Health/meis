<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: index.php");
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
                                                        <h5>Edit user</h5>
                                                        <span>Please fill all required fields</span>
                                                       
                                                        <div class="card-block">

                                                        <!-- Alert Message starts -->
                 
                                                                <!-- Alert Message Ends -->
                                                        <form  action="update-user.php" method="POST" id="example-advanced-form">
                                                        <?php
   include('../config.php');
$query1=mysqli_query($link,"select * from users where id='".$_GET['cid']."'");
while($row1=mysqli_fetch_array($query1)) 
{
?>
                                                        <div class="row">
<input type="hidden" value="<?php echo htmlentities($row1['id']);?>" name="id">
                                                            <div class="col-sm-12 col-xl-4 m-b-30">
                                                            <h4 class="sub-title">Firstname</h4>
                                                                <div class="col-sm-12">
                                                                    <input type="text" class="form-control" name="firstname"  placeholder="Enter Firstname" value="<?php echo htmlentities($row1['firstname']);?>" required = "required">
                                                                    <span class="help-block" style="color: red;"><?php echo $firstname_err; ?></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-xl-4 m-b-30">
                                                            <h4 class="sub-title">Middle Name</h4>
                                                                <div class="col-sm-12">
                                                                    <input type="text" class="form-control" name="middlename" placeholder="Enter Middlename" value="<?php echo htmlentities($row1['middlename']);?>">
                                                                    <span class="messages"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-xl-4 m-b-30">
                                                            <h4 class="sub-title">Last name</h4>
                                                                <div class="col-sm-12">
                                                                    <input type="text" class="form-control" name="lastname"  placeholder="Enter Lastname" value="<?php echo htmlentities($row1['lastname']);?>" required = "required">
                                                                    <span class="messages"></span>
                                                                </div>
                                                            </div>
                                                            </div>
                                                            <div class="row">

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
<h4 class="sub-title">Email</h4>
    <div class="col-sm-12">
        <input type="email" class="form-control" name="email"  value="<?php echo htmlentities($row1['email']);?>" placeholder="Enter Email" required = "required">
        <span class="messages"></span>
    </div>
</div>
<div class="col-sm-12 col-xl-4 m-b-30">
 <h4 class="sub-title">Facility Name</h4>
 <input list="brow" class="form-control" name="facility" value="<?php echo htmlentities($row1['facility']);?>" required = "required">
<datalist id="brow">
<?php 
include('../config.php');
$query=mysqli_query($link,"select * from facilities");
while($row=mysqli_fetch_array($query))
{?>

<option value="<?php echo $row['facility_name'];?>">

<?php } ?>
</datalist>
                
</div>
</div>
<div class="row">

<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Phone number</h4>
    <div class="col-sm-12">
        <input type="text" class="form-control" name="phone" value="<?php echo htmlentities($row1['phone']);?>" placeholder="Enter File number" required = "required">
        <span class="messages"></span>
    </div>
</div>
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">username</h4>
    <div class="col-sm-12">
        <input type="text" class="form-control" value="<?php echo htmlentities($row1['username']);?>" name="username" placeholder="Enter Username" required = "required">
        <span class="messages"></span>
    </div>
</div>
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Password</h4>
    <div class="col-sm-12">
        <input type="password" class="form-control"  name="password" placeholder="Enter Password" required = "required">
        <span class="messages"></span>
    </div>
</div>


</div>
</div>
                                                          
                                                            <div class="row">
                                                                <label class="col-sm-2"></label>
                                                               
                                                                <div class="notifications">
                                                                <button type="submit" class="btn btn-success waves-effect" data-type="success" data-from="top" data-align="right" onClick="return confirm('Do you really want to Update ?')">Update</button>
                                                              
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </form>
                                                        <?php }?>
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