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
    <title>MEIS | Client Details</title>
   <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
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

                                        <?php
$id =  $_GET['cid'];
include ('../config.php');
$query1=mysqli_query($link,"select * from clients join facilities on facilities.facility_name = clients.facility join councils on councils.id = facilities.council_id where clients.id='$id'");
while($row1=mysqli_fetch_array($query1)) 
{


                                        ?>
                                        <div class="col-sm-12">
                                                      <!-- client form starts -->
                                                      <div class="card">
                                                    <div class="card-header">
                                                        <h5>UIC: <?php echo htmlentities($row1['uic']);?></h5>
                                                   </div>

                                                   <!-- content starts here  -->

                                                   <div class="row invoice-contact">
                                                        <div class="col-md-8">
                                                            <div class="invoice-box row">
                                                                <div class="col-sm-12">
                                                                    <table class="table table-responsive invoice-table table-borderless">
                                                                        <tbody>
                                                                        <tr>
                                                                                <td>Facility Code: <?php echo htmlentities($row1['facility_code']);?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Facility Name: <?php echo htmlentities($row1['facility_name']);?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Council Name: <?php echo htmlentities($row1['council_name']);?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Residance: <?php echo htmlentities($row1['city_name']);?></td>
                                                                            </tr> 

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row invoive-info">
                                                            <div class="col-md-3 col-xs-12 invoice-client-info">
                                                                <h6>Full Name</h6>
                                                                <h6 class="m-0"><?php echo htmlentities($row1['firstname']);?> <?php echo htmlentities($row1['middlename']);?> <?php echo htmlentities($row1['lastname']);?></h6>
                                                            </div>
                                                            <div class="col-md-3 col-xs-12 ">
                                                                <h6>Date of Birth :</h6>
                                                                <table class="table table-responsive invoice-table invoice-order table-borderless">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><?php echo htmlentities($row1['dob']);?></td>
                                                                        </tr>
                                                                       
                                                                     
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="col-md-3 col-xs-12">
                                                                <h6 class="m-b-20">File Number</h6>
                                                                <table class="table table-responsive invoice-table invoice-order table-borderless">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><?php echo htmlentities($row1['file_no']);?></td>
                                                                        </tr>
                                                                       
                                                                     
                                                                    </tbody>
                                                                </table>
                                                    
                                                            </div>
                                                            <div class="col-md-3 col-xs-12">
                                                                <h6 class="m-b-20">KVP Group</h6>
                                                                <table class="table table-responsive invoice-table invoice-order table-borderless">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><?php echo htmlentities($row1['kvp_group']);?></td>
                                                                        </tr>
                                                                       
                                                                     
                                                                    </tbody>
                                                                </table>
                                                    
                                                            </div>
                                                        </div>
                                                        <?php }?>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                
                                                            <a href="../edit-client/?cid=<?php echo htmlentities($id);?>"><button class="btn btn-out-dashed waves-effect waves-light btn-info btn-square">Edit</button></a>
            
            <a href="../visits/"><button class="btn btn-out-dashed waves-effect waves-light btn-success btn-square">Add Visit</button></a>
                                                               </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Invoice card end -->

                                                   <!-- Content ends here -->
                                                      </div>
                                        </div>
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
    <!-- Custom js -->
    <script src="../files/assets/js/pcoded.min.js"></script>
    <script src="../files/assets/js/vertical/vertical-layout.min.js"></script>
    <script src="../files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="../files/assets/js/script.js"></script>  
</body>
</html>