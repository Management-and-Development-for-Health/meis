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
    <!-- jpro forms css -->
    <link rel="stylesheet" type="text/css" href="../files/assets/pages/j-pro/css/demo.css">
    <link rel="stylesheet" type="text/css" href="../files/assets/pages/j-pro/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../files/assets/pages/j-pro/css/j-forms.css">
    <!-- Switch component css -->
    <link rel="stylesheet" type="text/css" href="../files/bower_components/switchery/css/switchery.min.css">
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
                                   <div class="wrapper wrapper-640">
                                                            <form action="#" method="post" class="j-forms" novalidate>
                                   <div class="divider gap-bottom-25"></div>
                                                                    <!-- start show/hide elements select -->
                                                                    <div class="unit">
                                                                        <label class="label">Show additional elements</label>
                                                                        <label class="input select" id="show-elements-select">
                                                                            <select>
                                                                                <option value="none">select action...</option>
                                                                                <option value="field-1">show field № 1</option>
                                                                                <option value="field-2">show field № 2</option>
                                                                                <option value="field-1-2">show field № 1 and field № 2</option>
                                                                            </select>
                                                                            <i></i>
                                                                        </label>
                                                                    </div>
                                                                    <!-- end show/hide elements select -->
                                                                    <!-- start field 1 select -->
                                                                    <div class="unit hidden" id="field-1">
                                                                        <label class="label">Field № 1</label>
                                                                        <div class="input">
                                                                            <input type="text" placeholder="field № 1">
                                                                        </div>
                                                                    </div>
                                                                    <!-- end field 1 select  -->
                                                                    <!-- start field 2 select -->
                                                                    <div class="unit hidden" id="field-2">
                                                                        <label class="label">Field № 2</label>
                                                                        <div class="input">
                                                                            <input type="text" placeholder="field № 2">
                                                                        </div>
                                                                    </div>
                                                                    <!-- end field 2 select  -->
                                                                    <div class="divider-text gap-top-45 gap-bottom-45">
                                                                        <span>Select condition</span>
                                                                    </div>
                                                                    <!-- start selects -->
                                                                    <div class="j-row">
                                                                        <div class="span4 unit">
                                                                            <label class="label">Car</label>
                                                                            <select id="car">
                                                                                <option value="none">select a car...</option>
                                                                                <option value="VO">Volvo</option>
                                                                                <option value="VW">Volkswagen</option>
                                                                                <option value="BMW">BMW</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="span4 unit">
                                                                            <label class="label">Model</label>
                                                                            <select id="car-model">
                                                                                <option value="">select a model...</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="span4 unit">
                                                                            <label class="label">Color</label>
                                                                            <select id="car-model-color">
                                                                                <option value="">select a color...</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end selects -->
                                                            </form>
                                            </div>
                                   </div>
                               </div>
                           </div>
                       </div>


                       <!-- Warning Section Ends -->
<!-- Warning Section Ends -->
<!-- Required Jquery -->
<script type="text/javascript" src="../files/bower_components/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="../files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="../files/bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="../files/bower_components/bootstrap/js/bootstrap.min.js"></script>
<!-- waves js -->
<script src="../files/assets/pages/waves/js/waves.min.js"></script>
<!-- j-pro js -->
<script type="text/javascript" src="../files/assets/pages/j-pro/js/jquery.ui.min.js"></script>
<script type="text/javascript" src="../files/assets/pages/j-pro/js/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="../files/assets/pages/j-pro/js/jquery-cloneya.min.js"></script>
<script type="text/javascript" src="../files/assets/pages/j-pro/js/j-forms-additions.min.js"></script>
<!-- Switch component js -->
<script type="text/javascript" src="../files/assets/pages/advance-elements/swithces.js"></script>
<script type="text/javascript" src="../files/bower_components/switchery/js/switchery.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="../files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="../files/bower_components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="../files/bower_components/modernizr/js/css-scrollbars.js"></script>
<script src="../files/assets/js/pcoded.min.js"></script>
<script src="../files/assets/js/vertical/vertical-layout.min.js"></script>
<script src="../files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="../files/assets/js/script.js"></script>
</body>
</html>