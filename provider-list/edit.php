<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>MEIS | Clients</title>
<meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Gradient Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
      <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
      <meta name="author" content="Phoenixcoded" />
      <!-- Favicon icon -->
      <link rel="icon" href="../files/assets/images/favicon.ico" type="image/x-icon">
      <!-- Google font-->
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
      <!-- waves.css -->
      <link rel="stylesheet" href="../files/assets/pages/waves/css/waves.min.css" type="text/css" media="all">
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
      <!-- Data Table Css -->
      <link rel="stylesheet" type="text/css" href="../files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
      <link rel="stylesheet" type="text/css" href="../files/assets/pages/data-table/css/buttons.dataTables.min.css">
      <link rel="stylesheet" type="text/css" href="../files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
      <link rel="stylesheet" type="text/css" href="../files/assets/pages/data-table/extensions/buttons/css/buttons.dataTables.min.css">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="../files/assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="../files/assets/css/jquery.mCustomScrollbar.css">
    </head>
<body>
<?php include('../include/nav.php');?>
<div class="pcoded-content">
                       
                       <div class="pcoded-inner-content">
                           <!-- Main-body start -->
                           <div class="main-body">
                               <div class="page-wrapper">
                                   <!-- Page-body start -->
                                   <div class="page-body">
                                   <div class="row">
                                            <div class="col-sm-12">
                                                <!-- HTML5 Export Buttons table start -->
                                                <div class="card">
                                                    <div class="card-header table-card-header">
                                                        <h5>Edit Provider</h5>
                                                    </div>
                                                    <div class="card-block">

                                                    <form  action="update_provider.php" method="POST" id="example-advanced-form">
                                                    <?php
   include('../config.php');
$query1=mysqli_query($link,"select * from providers where id='".$_GET['cid']."'");
while($row1=mysqli_fetch_array($query1)) 
{
?>
                                                        <div class="row">
                                                        <input type="hidden" value="<?php echo htmlentities($row1['id']);?>" name="id">
                                                            <div class="col-sm-12 col-xl-4 m-b-30">
                                                            <h4 class="sub-title">Firstname</h4>
                                                                <div class="col-sm-12">
                                                                    <input type="text" class="form-control" name="firstname"  placeholder="Enter Firstname" value="<?php echo htmlentities($row1['firstname']);?>" required = "required">
                                                                    <span class="help-block" style="color: red;"></span>
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
 <h4 class="sub-title">Phone</h4>
 <input type="text" class="form-control" name="phone" value="<?php echo htmlentities($row1['phone']);?>" placeholder="Enter Phone" required = "required">
                                                              
                
</div>
<div class="col-sm-12 col-xl-4 m-b-30">
<h4 class="sub-title">Date of Birth</h4>
    <div class="col-sm-12">
        <input type="date" class="form-control" name="dob" value="<?php echo htmlentities($row1['dob']);?>"  placeholder="Enter Date of Birth" required = "required">
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
<input type="text" value="<?php echo $_SESSION['id']; ?>" hidden name="user_id">   
<button type="submit" class="btn btn-success waves-effect" data-type="success" data-from="top" data-align="right" onClick="return confirm('Do you really want to submit ?')">Update</button>
                                                                   
</div>
</div>
                                                          
                                              <?php }?>           
                                                        </div>
                                                        </form>

                                                    </div>
                                                </div>
                                                <!-- HTML5 Export Buttons end -->
                                            </div>
                                   </div>
                                   </div>
                               </div>
                           </div>
                       </div>


                       <!-- Warning Section Ends -->
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
<!-- data-table js -->
<script src="../files/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="../files/assets/pages/data-table/js/jszip.min.js"></script>
<script src="../files/assets/pages/data-table/js/pdfmake.min.js"></script>
<script src="../files/assets/pages/data-table/js/vfs_fonts.js"></script>
<script src="../files/assets/pages/data-table/extensions/buttons/js/dataTables.buttons.min.js"></script>
<script src="../files/assets/pages/data-table/extensions/buttons/js/buttons.flash.min.js"></script>
<script src="../files/assets/pages/data-table/extensions/buttons/js/jszip.min.js"></script>
<script src="../files/assets/pages/data-table/extensions/buttons/js/vfs_fonts.js"></script>
<script src="../files/assets/pages/data-table/extensions/buttons/js/buttons.colVis.min.js"></script>
<script src="../files/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="../files/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="../files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="../files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<!-- Custom js -->
<script src="../files/assets/pages/data-table/extensions/buttons/js/extension-btns-custom.js"></script>
<script src="../files/assets/js/pcoded.min.js"></script>
<script src="../files/assets/js/vertical/vertical-layout.min.js"></script>
<script src="../files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="../files/assets/js/script.js"></script>
</body>
</html>