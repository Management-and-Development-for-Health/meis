<?php
 include('../config.php');

 $output = '';
    $firstname = $_POST['firstname'] ;
    $middlename = $_POST['middlename'] ;
    $lastname = $_POST['lastname'] ;
    $dob = $_POST['dob'] ;
    $gender = $_POST['gender'] ;
	$phone = $_POST['phone'] ;
    $user_id = $_POST['user_id'] ;
    $dob_date = strtotime($dob);
    $currentDate = date("d-m-Y");
    $age = date_diff(date_create($dob), date_create($currentDate));
    $age = $age->format("%y");
    $query = "
    INSERT INTO providers(firstname,   middlename, lastname, dob, gender, phone, age,user_id)  
     VALUES('$firstname',  '$middlename', '$lastname', '$dob', '$gender',  '$phone', '$age',  '$user_id') ";
if($link->query($query)===TRUE){

    header("location: ../provider-list/");
}

?>