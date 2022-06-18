<?php
 include('../config.php');

 $output = '';
 $id = $_POST['id'];
    $firstname = $_POST['firstname'] ;
    $middlename = $_POST['middlename'] ;
    $lastname = $_POST['lastname'] ;
    $email = $_POST['email'] ;
    $gender = $_POST['gender'] ;

	$username = $_POST['username'] ;
    $phone = $_POST['phone'] ;
    $password = $_POST['password'] ;
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    $facility = $_POST['facility'] ;
    // $created_date = date("Y-m-d H:i:s"); 

    $query = "UPDATE users SET firstname = '$firstname', middlename = '$middlename', lastname = '$lastname', email = '$email', gender = '$gender', username = '$username', phone = '$phone', password = '$password_hash', facility = '$facility' WHERE id = '$id'";
if($link->query($query)===TRUE){
    echo "thank you"; 
	header("location: ../user-profile/");
    
}
?>