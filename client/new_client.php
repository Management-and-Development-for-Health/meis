<?php
 include('../config.php');

 $output = '';
    $firstname = $_POST['firstname'] ;
    $middlename = $_POST['middlename'] ;
    $lastname = $_POST['lastname'] ;
    $dob = $_POST['dob'] ;
    $gender = $_POST['gender'] ;

	$city_name = $_POST['city_name'] ;
    // $file_no = $_POST['file_no'] ;
    // $uic = $_POST['uic'] ;
    $facility = $_POST['facility'] ;
    // $created_date = date("Y-m-d H:i:s"); 

    $two_firstname = strtoupper(substr($firstname, -2));
    $two_lastname = strtoupper(substr($lastname, -2));
    $three_region = strtoupper(substr($city_name,0, 3));
    $dob_date = strtotime($dob);
    $year = date("y", $dob_date);
    $two_first_date = date("d", $dob_date);
    $two_last_date = strtoupper(substr($year, -2));

    
    $auto_uic = $two_firstname. "-".$two_lastname."-".$three_region."-".$gender."-".$two_first_date."-".$two_last_date;
    $cid = $auto_uic;
    $user_id =  $_POST['user_id'];
    $activity = $_POST['activity'];

    $qr="select file_no, gender from clients";
       
    $result=mysqli_query($link,$qr);
    if(mysqli_num_rows($result)<=0)
    {
        if ($gender == 1) {
            $serialNo='ME0000';
        }
        else if ($gender == 2) {
            $serialNo='KE0000';
        }
        
    }   
    else
    while($data=mysqli_fetch_array($result))
    {
        $cur_ser=$data['file_no'];
        if($cur_ser=='')
        {
            $serialNo='A000000000';
        }
        else
        {
            if ($gender == 1) {
                $cur_ser = strtoupper(substr($cur_ser, -1));
                $serialNo="ME00".++$cur_ser;
            }
            elseif ($gender == 2) {
                $cur_ser = strtoupper(substr($cur_ser, -1));
                $serialNo="KE00".++$cur_ser;
            }
           
            
        }
    }

    $query1 = "INSERT INTO audit(user, activity) VALUES('$user_id', '$activity')";
    $query = "
    INSERT INTO clients(firstname,   middlename, lastname, dob, gender, city_name, file_no, uic, facility)  
     VALUES('$firstname',  '$middlename', '$lastname', '$dob', '$gender',  '$city_name', '$serialNo', '$auto_uic', '$facility') ";
if($link->query($query)===TRUE){
    if ($link->query($query1)===TRUE) {
        # code...
        header("location: ../screening/?cid=$cid");
    }
    header("location: ../screening/?cid=$cid");
}

?>