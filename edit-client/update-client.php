<?php
 include('../config.php');

 $output = '';
 $id = $_POST['id'];
    $firstname = $_POST['firstname'] ;
    $middlename = $_POST['middlename'] ;
    $lastname = $_POST['lastname'] ;
    $dob = $_POST['dob'] ;
    $gender = $_POST['gender'] ;

	$city_name = $_POST['city_name'] ;
    $file_no = $_POST['file_no'] ;
    $uic = $_POST['uic'] ;
    $facility = $_POST['facility'] ;
    // $created_date = date("Y-m-d H:i:s"); 

    $query = "UPDATE clients SET firstname = '$firstname', middlename = '$middlename', lastname = '$lastname', dob = '$dob', gender = '$gender', city_name = '$city_name', file_no = '$file_no', uic = '$uic', facility = '$facility' WHERE id = '$id'";
if($link->query($query)===TRUE){
    echo "thank you"; 
	header("location: ../client-list/");
    
}
?>