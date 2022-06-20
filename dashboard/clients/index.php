
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
      <link rel="icon" href="../../files/assets/images/favicon.ico" type="image/x-icon">
      <!-- Google font-->
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
      <!-- waves.css -->
      <link rel="stylesheet" href="../../files/assets/pages/waves/css/waves.min.css" type="text/css" media="all">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="../../files/bower_components/bootstrap/css/bootstrap.min.css">
      <!-- waves.css -->
      <link rel="stylesheet" href="../../files/assets/pages/waves/css/waves.min.css" type="text/css" media="all">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="../../files/assets/icon/themify-icons/themify-icons.css">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="../../files/assets/icon/icofont/css/icofont.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="../../files/assets/icon/font-awesome/css/font-awesome.min.css">
      <!-- Data Table Css -->
      <link rel="stylesheet" type="text/css" href="../../files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
      <link rel="stylesheet" type="text/css" href="../../files/assets/pages/data-table/css/buttons.dataTables.min.css">
      <link rel="stylesheet" type="text/css" href="../../files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
      <link rel="stylesheet" type="text/css" href="../../files/assets/pages/data-table/extensions/buttons/css/buttons.dataTables.min.css">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="../../files/assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="../../files/assets/css/jquery.mCustomScrollbar.css">
    </head>
<body>


                                   <div class="row">
                                            <div class="col-12">
                                                <!-- HTML5 Export Buttons table start -->
                                                <div class="card">
                                                    <div class="card-header table-card-header">
                                                        <h5>Clients</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="basic-btn" class="table table-striped table-bordered nowrap" style="width: 100%;">
                                                                <thead>
                                                                
                                                                    <tr>
                                                                        <th>KVP Group</th>
                                                                        <th colspan="9">Male</th>
                                                                        <th colspan="9">Female</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                    
                                                                    <tr>
                                                                        <tr>
                                                                           <td>
                                                                            <td>Total</td>
                                                                            <td>15-19 </td>
                                                                            <td >20-24</td>
                                                                            <td>25-29 </td>
                                                                            <td >30-34</td>
                                                                            <td>35-39 </td>
                                                                            <td >40-44</td>
                                                                            <td>45-49 </td>
                                                                            <td >50+</td>
                                                                            <td>15-19 </td>
                                                                            <td >20-24</td>
                                                                            <td>25-29 </td>
                                                                            <td >30-34</td>
                                                                            <td>35-39 </td>
                                                                            <td >40-44</td>
                                                                            <td>45-49 </td>
                                                                            <td >50+</td>
                                                                           </td>
                                                                          
                                                                        </tr>
                                                                        <tr>
                                                                        <td>FSW </td>
                                                                        <td> 
                                                                        <?php include('clients_table.php');?></td>

                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'FSW' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 14 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 20) and gender = 1 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>

                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'FSW' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 19 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 25) and gender =  1 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'FSW' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 24 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 30) and gender = 1 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'FSW' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 29 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 35) and gender = 1 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'FSW' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 34 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 40) and gender = 1 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'FSW' and ((YEAR(CURRENT_DATE())-YEAR(dob)) >39 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 45) and gender = 1 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'FSW' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 44 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 50) and gender = 1 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'FSW' and (YEAR(CURRENT_DATE())-YEAR(dob)) > 49 and gender = 1 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>

                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'FSW' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 14 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 20) and gender = 2 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>

                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'FSW' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 19 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 25) and gender =  2 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'FSW' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 24 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 30) and gender = 2 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'FSW' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 29 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 35) and gender = 2 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'FSW' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 34 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 40) and gender = 2 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'FSW' and ((YEAR(CURRENT_DATE())-YEAR(dob)) >39 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 45) and gender = 2 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'FSW' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 44 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 50) and gender = 2 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'FSW' and (YEAR(CURRENT_DATE())-YEAR(dob)) > 49 and gender = 2 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                                                        </tr>
                                                                        <tr>
                                                                        <td>MSM</td>
                                                                        <td> 
                                                                        <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'MSM' GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>

                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'MSM' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 14 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 20) and gender = 1 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>

                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'MSM' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 19 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 25) and gender =  1 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'MSM' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 24 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 30) and gender = 1 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'MSM' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 29 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 35) and gender = 1 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'MSM' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 34 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 40) and gender = 1 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'MSM' and ((YEAR(CURRENT_DATE())-YEAR(dob)) >39 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 45) and gender = 1 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'MSM' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 44 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 50) and gender = 1 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'MSM' and (YEAR(CURRENT_DATE())-YEAR(dob)) > 49 and gender = 1 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>

                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'MSM' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 14 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 20) and gender = 2 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>

                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'MSM' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 19 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 25) and gender =  2 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'MSM' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 24 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 30) and gender = 2 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'MSM' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 29 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 35) and gender = 2 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'MSM' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 34 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 40) and gender = 2 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'MSM' and ((YEAR(CURRENT_DATE())-YEAR(dob)) >39 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 45) and gender = 2 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'MSM' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 44 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 50) and gender = 2 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'MSM' and (YEAR(CURRENT_DATE())-YEAR(dob)) > 49 and gender = 2 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                                                        </tr> 
                                                                        <tr>
                                                                        <td>PWID</td>
                                                                        <td> 
                                                                        <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'PWID' GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>

                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'PWID' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 14 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 20) and gender = 1 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>

                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'PWID' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 19 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 25) and gender =  1 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'PWID' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 24 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 30) and gender = 1 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'PWID' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 29 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 35) and gender = 1 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'PWID' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 34 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 40) and gender = 1 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'PWID' and ((YEAR(CURRENT_DATE())-YEAR(dob)) >39 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 45) and gender = 1 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'PWID' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 44 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 50) and gender = 1 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'PWID' and (YEAR(CURRENT_DATE())-YEAR(dob)) > 49 and gender = 1 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>

                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'PWID' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 14 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 20) and gender = 2 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>

                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'PWID' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 19 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 25) and gender =  2 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'PWID' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 24 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 30) and gender = 2 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'PWID' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 29 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 35) and gender = 2 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'PWID' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 34 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 40) and gender = 2 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'PWID' and ((YEAR(CURRENT_DATE())-YEAR(dob)) >39 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 45) and gender = 2 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'PWID' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 44 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 50) and gender = 2 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'PWID' and (YEAR(CURRENT_DATE())-YEAR(dob)) > 49 and gender = 2 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                                                        </tr> 
                                                                        <tr>
                                                                        <td>AGYW</td>
                                                                        <td> 
                                                                        <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'AGYW' GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>

                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'AGYW' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 14 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 20) and gender = 1 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>

                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'AGYW' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 19 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 25) and gender =  1 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'AGYW' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 24 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 30) and gender = 1 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'AGYW' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 29 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 35) and gender = 1 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'AGYW' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 34 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 40) and gender = 1 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'AGYW' and ((YEAR(CURRENT_DATE())-YEAR(dob)) >39 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 45) and gender = 1 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'AGYW' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 44 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 50) and gender = 1 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'AGYW' and (YEAR(CURRENT_DATE())-YEAR(dob)) > 49 and gender = 1 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>

                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'AGYW' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 14 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 20) and gender = 2 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>

                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'AGYW' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 19 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 25) and gender =  2 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'AGYW' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 24 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 30) and gender = 2 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'AGYW' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 29 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 35) and gender = 2 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'AGYW' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 34 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 40) and gender = 2 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'AGYW' and ((YEAR(CURRENT_DATE())-YEAR(dob)) >39 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 45) and gender = 2 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'AGYW' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 44 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 50) and gender = 2 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'AGYW' and (YEAR(CURRENT_DATE())-YEAR(dob)) > 49 and gender = 2 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                                                        </tr>
                                                                        <tr>
                                                                        <td>Risk Men</td>
                                                                        <td> 
                                                                        <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'Risk Men' GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>

                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'Risk Men' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 14 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 20) and gender = 1 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>

                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'Risk Men' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 19 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 25) and gender =  1 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'Risk Men' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 24 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 30) and gender = 1 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'Risk Men' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 29 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 35) and gender = 1 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'Risk Men' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 34 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 40) and gender = 1 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'Risk Men' and ((YEAR(CURRENT_DATE())-YEAR(dob)) >39 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 45) and gender = 1 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'Risk Men' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 44 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 50) and gender = 1 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'Risk Men' and (YEAR(CURRENT_DATE())-YEAR(dob)) > 49 and gender = 1 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>

                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'Risk Men' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 14 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 20) and gender = 2 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>

                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'Risk Men' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 19 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 25) and gender =  2 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'Risk Men' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 24 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 30) and gender = 2 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'Risk Men' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 29 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 35) and gender = 2 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'Risk Men' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 34 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 40) and gender = 2 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'Risk Men' and ((YEAR(CURRENT_DATE())-YEAR(dob)) >39 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 45) and gender = 2 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'Risk Men' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 44 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 50) and gender = 2 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'Risk Men' and (YEAR(CURRENT_DATE())-YEAR(dob)) > 49 and gender = 2 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                                                        </tr>
                                                                        <tr>
                                                                        <td>Discordant couples</td>
                                                                        <td> 
                                                                        <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'Discordant Couple' GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>

                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'Discordant Couple' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 14 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 20) and gender = 1 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>

                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'Discordant Couple' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 19 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 25) and gender =  1 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'Discordant Couple' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 24 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 30) and gender = 1 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'Discordant Couple' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 29 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 35) and gender = 1 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'Discordant Couple' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 34 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 40) and gender = 1 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'Discordant Couple' and ((YEAR(CURRENT_DATE())-YEAR(dob)) >39 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 45) and gender = 1 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'Discordant Couple' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 44 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 50) and gender = 1 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'Discordant Couple' and (YEAR(CURRENT_DATE())-YEAR(dob)) > 49 and gender = 1 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>

                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'Discordant Couple' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 14 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 20) and gender = 2 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>

                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'Discordant Couple' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 19 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 25) and gender =  2 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'Discordant Couple' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 24 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 30) and gender = 2 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'Discordant Couple' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 29 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 35) and gender = 2 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'Discordant Couple' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 34 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 40) and gender = 2 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'Discordant Couple' and ((YEAR(CURRENT_DATE())-YEAR(dob)) >39 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 45) and gender = 2 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'Discordant Couple' and ((YEAR(CURRENT_DATE())-YEAR(dob)) > 44 and (YEAR(CURRENT_DATE())-YEAR(dob)) < 50) and gender = 2 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                     <td>  <?php 
                   $query2=mysqli_query($link,"SELECT COUNT(id)  from clients where kvp_group = 'Discordant Couple' and (YEAR(CURRENT_DATE())-YEAR(dob)) > 49 and gender = 2 GROUP BY id");
                               $num2 = mysqli_num_rows($query2);
                            //    $total = $num1 + $num2;
                                     {
                                        ?>
                                     <?php  echo htmlentities($num2);}?></td>
                                                                        </tr>
                                                    
                                                                    </tr>
                                                                </tbody>
                                                               
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- HTML5 Export Buttons end -->
                                            </div>
                                   </div>
                          

                       <!-- Warning Section Ends -->
<!-- Required Jquery -->
<script type="text/javascript" src="../../files/bower_components/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="../../files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="../../files/bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="../../files/bower_components/bootstrap/js/bootstrap.min.js"></script>
<!-- waves js -->
<script src="../../files/assets/pages/waves/js/waves.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="../../files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="../../files/bower_components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="../../files/bower_components/modernizr/js/css-scrollbars.js"></script>
<!-- data-table js -->
<script src="../../files/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../files/assets/pages/data-table/js/jszip.min.js"></script>
<script src="../../files/assets/pages/data-table/js/pdfmake.min.js"></script>
<script src="../../files/assets/pages/data-table/js/vfs_fonts.js"></script>
<script src="../../files/assets/pages/data-table/extensions/buttons/js/dataTables.buttons.min.js"></script>
<script src="../../files/assets/pages/data-table/extensions/buttons/js/buttons.flash.min.js"></script>
<script src="../../files/assets/pages/data-table/extensions/buttons/js/jszip.min.js"></script>
<script src="../../files/assets/pages/data-table/extensions/buttons/js/vfs_fonts.js"></script>
<script src="../../files/assets/pages/data-table/extensions/buttons/js/buttons.colVis.min.js"></script>
<script src="../../files/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="../../files/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="../../files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<!-- Custom js -->
<script src="../../files/assets/pages/data-table/extensions/buttons/js/extension-btns-custom.js"></script>
<script src="../../files/assets/js/pcoded.min.js"></script>
<script src="../../files/assets/js/vertical/vertical-layout.min.js"></script>
<script src="../../files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="../../files/assets/js/script.js"></script>
</body>
</html>