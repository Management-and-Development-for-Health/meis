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
<title>MEIS |PrEP Curr</title>
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
                                                        <h5>Clients Visits</h5>
                                                    </div>
                                                    
                                                    <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="footer-search" class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                
                                                                    <tr>
                                                                        <th>UIC</th>
                                                                        <th>KVP Group</th>
                                                                        <th>Age</th>
                                                                        <th>First Visit Date</th>
                                                                        <th>Pills Taken</th>
                                                                        <th>Next Visit</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php
                                                                require_once('../config.php');
                                                                $query=mysqli_query($link,"select clients.dob, visits.id, visits.uic, MIN(visits.tarehe_ya_hudhurio) AS created, SUM(visits.namba_ya_vidonge_alivyopewa) AS pills, MAX(visits.tarehe_ya_hudhurio_lijalo) as next_visit, clients.kvp_group  from visits join clients on clients.uic = visits.uic  where visits.aina_ya_hudhurio in ('mpya','anaendelea')  GROUP BY  visits.uic");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>        
                                                                    <tr>
                                                                        <td><?php echo htmlentities($row['uic']);?></td>
                                                                        <td><?php echo htmlentities($row['kvp_group']);?></td>
                                                                        <td><?php $dob = $row['dob'];
                                                                        $diff = (date('Y') - date('Y',strtotime($dob)));
                                                                        echo $diff;?></td>
                                                                        <td><?php 
                                                                        $first_visit = date("d, F, Y", strtotime($row['created']));
                                                                        echo htmlentities($first_visit);?></td>
                                                                        <td><?php echo htmlentities($row['pills']);?></td>
                                                                        <td><?php 
                                                                        $date_visit = date("d, F, Y", strtotime($row['next_visit']));
                                                                        echo htmlentities($date_visit);?></td>
                                                                        <td><a href="../client-visits/?cid=<?php echo htmlentities($row['id']);?>"><i class="fa fa-eye"></i></a></td>
                                                                    </tr>
                                                                    <?php }?>
                                                                </tbody>
                                                                <tfoot>
                                                                <tr>
                                                                        <th>UIC</th>
                                                                        <th>KVP Group</th>
                                                                        <th>Age</th>
                                                                        <th>First Visit Date</th>
                                                                        <th>Pills Taken</th>
                                                                        <th>Next Visit</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
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
<script src="../files/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="../files/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="../files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="../files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<!-- Custom js -->
<script src="../files/assets/pages/data-table/js/data-table-custom.js"></script>
<script src="../files/assets/js/pcoded.min.js"></script>
<script src="../files/assets/js/vertical/vertical-layout.min.js"></script>
<script src="../files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="../files/assets/js/script.js"></script>
</body>
</html>