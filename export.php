<?php
include_once("config.php");
$query = "SELECT * FROM visits join clients on clients.uic = visits.uic ORDER BY tarehe_ya_hudhurio DESC";
$results = mysqli_query($link, $query) or die("database error:". mysqli_error($link));
$allOrders = array();
while( $order = mysqli_fetch_assoc($results) ) {
	$allOrders[] = $order;
}
$startDateMessage = '';
$endDate = '';
$noResult ='';
if(isset($_POST["export"])){
 if(empty($_POST["fromDate"])){
  $startDateMessage = '<label class="text-danger">Select start date.</label>';
 }else if(empty($_POST["toDate"])){
  $endDate = '<label class="text-danger">Select end date.</label>';
 } else {  
   $indicator = $_POST['data_group'];

  //  clients list export starts
  if ($indicator == 'clients') {
    # code...
    $orderQuery = "
	SELECT * FROM clients
	WHERE created_at >= '".$_POST["fromDate"]."' AND created_at <= '".$_POST["toDate"]."' ORDER BY created_at DESC";
  $orderResult = mysqli_query($link, $orderQuery) or die("database error:". mysqli_error($link));
  $filterOrders = array();
  while( $order = mysqli_fetch_assoc($orderResult) ) {
	$filterOrders[] = $order;
  }
  if(count($filterOrders)) {
	  $fileName = "Clients".date('Ymd') . ".csv";
	  header("Content-Description: File Transfer");
	  header("Content-Disposition: attachment; filename=$fileName");
	  header("Content-Type: application/csv;");
	  $file = fopen('php://output', 'w');
	  $header = array("File Number","UIC", "Firstname","Middlename","Lastname", "Age", "Gender", "Residance", "KVP Group", "Reistered Date");
	  fputcsv($file, $header);  
	  foreach($filterOrders as $order) {
      $dob = $order['dob'];
      $diff = (date('Y') - date('Y',strtotime($dob)));
      
      $reg = $order["created_at"];
      $reg = date("d, F, Y", strtotime($reg));

      if ($order['gender'] == '1') {
        # code...
        $gender = "Male";
      }else {
        # code...
        $gender = "Female";
      }
	   $orderData = array();
     $orderData[] = $order["file_no"];
	   $orderData[] = $order["uic"];
	   $orderData[] = $order["firstname"];
	   $orderData[] = $order["middlename"];
     $orderData[] = $order["lastname"];
	   $orderData[] = $diff;
      $orderData[] = $gender;
	   $orderData[] = $order["city_name"];
     $orderData[] = $order["kvp_group"];
     $orderData[] = $reg;
	   fputcsv($file, $orderData);
	  }
	  fclose($file);
	  exit;
  }
  else {
    $noResult = '<label class="text-danger">There are no record exist with this date range to export. Please choose different date range.</label>';  
   }
}
  //  PrEP New list export starts
  if ($indicator == 'prep_new') {
    # code...  select clients.dob, visits.id, visits.uic, MIN(visits.tarehe_ya_hudhurio) AS created, SUM(visits.namba_ya_vidonge_alivyopewa) AS pills, MAX(visits.tarehe_ya_hudhurio_lijalo) as next_visit, clients.kvp_group  from visits join clients on clients.uic = visits.uic  where visits.aina_ya_hudhurio in ('mpya','anaendelea')  GROUP BY  visits.uic"
    $orderQuery = "
	SELECT visits.uic, clients.kvp_group, visits.tarehe_ya_hudhurio_lijalo, clients.gender, visits.created_at, visits.namba_ya_vidonge_alivyopewa, clients.dob, visits.tarehe_ya_hudhurio, visits.mahali, visits.jina_la_mtoa_huduma FROM visits join clients on clients.uic = visits.uic
	WHERE  visits.aina_ya_hudhurio = 'mpya' and  visits.tarehe_ya_hudhurio >= '".$_POST["fromDate"]."' AND visits.tarehe_ya_hudhurio <= '".$_POST["toDate"]."' ORDER BY tarehe_ya_hudhurio DESC";
  $orderResult = mysqli_query($link, $orderQuery) or die("database error:". mysqli_error($link));
  $filterOrders = array();
  while( $order = mysqli_fetch_assoc($orderResult) ) {
	$filterOrders[] = $order;
  }
  if(count($filterOrders)) {
	  $fileName = "PrEP New".date('Ymd') . ".csv";
	  header("Content-Description: File Transfer");
	  header("Content-Disposition: attachment; filename=$fileName");
	  header("Content-Type: application/csv;");
	  $file = fopen('php://output', 'w');
	  $header = array("UIC","KVP Group",  "Age", "Visit Date","Pills Taken","Next Visit", "Mtoa Hudhuma", "Mahali");
	  fputcsv($file, $header);  
	  foreach($filterOrders as $order) {
      $dob = $order['dob'];
      $diff = (date('Y') - date('Y',strtotime($dob)));
      
      $reg = $order["created_at"];
      $reg = date("d, F, Y", strtotime($reg));

      if ($order['gender'] == '1') {
        # code...
        $gender = "Male";
      }else {
        # code...
        $gender = "Female";
      }
	   $orderData = array();
	   $orderData[] = $order["uic"];
	   $orderData[] = $order["kvp_group"];
	   $orderData[] = $diff;
     $orderData[] = $order["tarehe_ya_hudhurio"];
     $orderData[] = $order["namba_ya_vidonge_alivyopewa"];
     $orderData[] = $order["tarehe_ya_hudhurio_lijalo"];
     $orderData[] = $order["jina_la_mtoa_huduma"];
     $orderData[] = $order["mahali"];
	   fputcsv($file, $orderData);
	  }
	  fclose($file);
	  exit;
  }
  else {
    $noResult = '<label class="text-danger">There are no record exist with this date range to export. Please choose different date range.</label>';  
   }
}

// PrEP New exports ends 

   //  PrEP New list export starts
   if ($indicator == 'prep_curr') {
    # code...  select clients.dob, visits.id, visits.uic, MIN(visits.tarehe_ya_hudhurio) AS created, SUM(visits.namba_ya_vidonge_alivyopewa) AS pills, MAX(visits.tarehe_ya_hudhurio_lijalo) as next_visit, clients.kvp_group  from visits join clients on clients.uic = visits.uic  where visits.aina_ya_hudhurio in ('mpya','anaendelea')  GROUP BY  visits.uic"
    
  $from =  strtotime($_POST['fromDate']);
  $to = strtotime($_POST['toDate']);

  $diff =  $to - $from;
  $date_diff =  round($diff / (60 * 60 * 24));


$query=mysqli_query($link,"select clients.dob, visits.id, visits.namba_ya_vidonge_alivyopewa, visits.uic, MIN(visits.tarehe_ya_hudhurio) AS created, MAX(visits.tarehe_ya_hudhurio) as curr_date, SUM(visits.namba_ya_vidonge_alivyopewa) AS pills, MAX(visits.tarehe_ya_hudhurio_lijalo) as next_visit, clients.kvp_group  from visits join clients on clients.uic = visits.uic  where visits.aina_ya_hudhurio in ('mpya','anaendelea')  GROUP BY  visits.uic");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
$now = strtotime($to); // or your date as well
$visit_date = $row['curr_date'];
$curr_date = strtotime($visit_date);
$datediff = $now - $curr_date;

$date_diff1 =  round($datediff / (60 * 60 * 24));
$date_diff1 ++;
$vidonge = $row['namba_ya_vidonge_alivyopewa'];
}

  if ($date_diff <90) {
    # code...
 
    $orderQuery = "
	SELECT visits.uic, clients.kvp_group, visits.tarehe_ya_hudhurio_lijalo, clients.gender, visits.created_at, visits.namba_ya_vidonge_alivyopewa, clients.dob, visits.tarehe_ya_hudhurio, MAX(visits.tarehe_ya_hudhurio) as last_visit, MAX(tarehe_ya_hudhurio_lijalo) as next_visit, visits.mahali, visits.jina_la_mtoa_huduma FROM visits join clients on clients.uic = visits.uic
	WHERE visits.aina_ya_hudhurio = 'anaendelea'  and (visits.tarehe_ya_hudhurio >= '".$_POST['fromDate']."' and visits.tarehe_ya_hudhurio <= '".$_POST['toDate']."') OR (visits.tarehe_ya_hudhurio_lijalo >= '".$_POST['fromDate']."' and visits.tarehe_ya_hudhurio_lijalo <= '".$_POST['toDate']."') OR (visits.tarehe_ya_hudhurio_lijalo >= '".$_POST['toDate']."')GROUP BY visits.uic  ORDER BY tarehe_ya_hudhurio DESC";
  $orderResult = mysqli_query($link, $orderQuery) or die("database error:". mysqli_error($link));
  $filterOrders = array();
  while( $order = mysqli_fetch_assoc($orderResult) ) {
	$filterOrders[] = $order;
  }
  if(count($filterOrders)) {
	  $fileName = "PrEP CT".date('Ymd') . ".csv";
	  header("Content-Description: File Transfer");
	  header("Content-Disposition: attachment; filename=$fileName");
	  header("Content-Type: application/csv;");
	  $file = fopen('php://output', 'w');
	  $header = array("UIC","KVP Group",  "Age", "Last Visit Date","Pills Taken","Next Visit", "Mtoa Hudhuma", "Mahali");
	  fputcsv($file, $header);  
	  foreach($filterOrders as $order) {
      $dob = $order['dob'];
      $diff = (date('Y') - date('Y',strtotime($dob)));
      
      $reg = $order["created_at"];
      $reg = date("d, F, Y", strtotime($reg));

      if ($order['gender'] == '1') {
        # code...
        $gender = "Male";
      }else {
        # code...
        $gender = "Female";
      }
	   $orderData = array();
	   $orderData[] = $order["uic"];
	   $orderData[] = $order["kvp_group"];
	   $orderData[] = $diff;
     $orderData[] = $order["last_visit"];
     $orderData[] = $order["namba_ya_vidonge_alivyopewa"];
     $orderData[] = $order["next_visit"];
     $orderData[] = $order["jina_la_mtoa_huduma"];
     $orderData[] = $order["mahali"];
	   fputcsv($file, $orderData);
	  }
	  fclose($file);
	  exit;
  }
  else {
    $noResult = '<label class="text-danger">There are no record exist with this date range to export. Please choose different date range.</label>';  
   }
  }elseif ($date_diff>=90) {
    # code...

    $orderQuery = "
    SELECT visits.uic, clients.kvp_group, visits.tarehe_ya_hudhurio_lijalo, clients.gender, visits.created_at, visits.namba_ya_vidonge_alivyopewa, clients.dob, visits.tarehe_ya_hudhurio, MAX(tarehe_ya_hudhurio) as last_visit, MAX(tarehe_ya_hudhurio_lijalo) as next_visit, visits.mahali, visits.jina_la_mtoa_huduma FROM visits join clients on clients.uic = visits.uic
    WHERE visits.aina_ya_hudhurio = 'anaendelea'  and (visits.tarehe_ya_hudhurio >= '".$_POST['fromDate']."' and visits.tarehe_ya_hudhurio <= '".$_POST['toDate']."') OR (visits.tarehe_ya_hudhurio_lijalo >= '".$_POST['fromDate']."' and visits.tarehe_ya_hudhurio_lijalo <= '".$_POST['toDate']."') GROUP BY visits.uic  ORDER BY tarehe_ya_hudhurio DESC";
    $orderResult = mysqli_query($link, $orderQuery) or die("database error:". mysqli_error($link));
    $filterOrders = array();
    while( $order = mysqli_fetch_assoc($orderResult) ) {
    $filterOrders[] = $order;
    }
    if(count($filterOrders)) {
      $fileName = "PrEP Curr".date('Ymd') . ".csv";
      header("Content-Description: File Transfer");
      header("Content-Disposition: attachment; filename=$fileName");
      header("Content-Type: application/csv;");
      $file = fopen('php://output', 'w');
      $header = array("UIC","KVP Group",  "Age", "Visit Date","Pills Taken","Next Visit", "Mtoa Hudhuma", "Mahali");
      fputcsv($file, $header);  
      foreach($filterOrders as $order) {
        $dob = $order['dob'];
        $diff = (date('Y') - date('Y',strtotime($dob)));
        
        $reg = $order["created_at"];
        $reg = date("d, F, Y", strtotime($reg));
  
        if ($order['gender'] == '1') {
          # code...
          $gender = "Male";
        }else {
          # code...
          $gender = "Female";
        }
       $orderData = array();
       $orderData[] = $order["uic"];
       $orderData[] = $order["kvp_group"];
       $orderData[] = $diff;
       $orderData[] = $order["tarehe_ya_hudhurio"];
       $orderData[] = $order["namba_ya_vidonge_alivyopewa"];
       $orderData[] = $order["tarehe_ya_hudhurio_lijalo"];
       $orderData[] = $order["jina_la_mtoa_huduma"];
       $orderData[] = $order["mahali"];
       fputcsv($file, $orderData);
      }
      fclose($file);
      exit;
    }
    else {
      $noResult = '<label class="text-danger">There are no record exist with this date range to export. Please choose different date range.</label>';  
     }
  }
}

// PrEP Curr exports ends 

 }
}
?>