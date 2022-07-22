<?php
 include('../config.php');

 $output = '';
 $id = $_POST['id'];
    $firstname = $_POST['firstname'] ;
    $middlename = $_POST['middlename'] ;
    $lastname = $_POST['lastname'] ;
    $dob = $_POST['dob'] ;
    $gender = $_POST['gender'] ;

    $breast_feeding = $_POST['breast_feeding'] ;
    $is_pregnant = $_POST['is_pregnant'] ;

	$city_name = $_POST['city_name'] ;
    $file_no = $_POST['file_no'] ;
    // $uic = $_POST['uic'] ;
    $facility = $_POST['facility'] ;
    
    $two_firstname = strtoupper(substr($firstname, -2));
    $two_lastname = strtoupper(substr($lastname, -2));
    $three_region = strtoupper(substr($city_name,0, 3));
    $dob_date = strtotime($dob);
    $year = date("y", $dob_date);
    $two_first_date = date("d", $dob_date);
    $two_last_date = strtoupper(substr($year, -2));

    
    $uic = $two_firstname. "-".$two_lastname."-".$three_region."-".$gender."-".$two_first_date."-".$two_last_date;
   

    $query = "UPDATE clients SET firstname = '$firstname', middlename = '$middlename', lastname = '$lastname', breast_feeding = '$breast_feeding', is_pregnant = '$is_pregnant', dob = '$dob', gender = '$gender', city_name = '$city_name', file_no = '$file_no', uic = '$uic', facility = '$facility' WHERE id = '$id'";
   
    if($link->query($query)===TRUE){
    echo "thank you"; 
	header("location: ../client-list/");
    
}
?>