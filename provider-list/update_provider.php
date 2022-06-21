<?php
 include('../config.php');

 $output = '';
 $id = $_POST['id'];
    $firstname = $_POST['firstname'] ;
    $middlename = $_POST['middlename'] ;
    $lastname = $_POST['lastname'] ;
    $gender = $_POST['gender'] ;
    $phone = $_POST['phone'] ;
    $dob = $_POST['dob'] ;
    $user_id = $_POST['user_id'] ;
    // $created_date = date("Y-m-d H:i:s"); 

    $query = "UPDATE providers SET firstname = '$firstname', middlename = '$middlename', lastname = '$lastname', gender = '$gender', dob = '$dob', phone = '$phone',  WHERE id = '$id'";
if($link->query($query)===TRUE){
    echo "thank you"; 
	header("location: ../provider-list/");
    
}
?>