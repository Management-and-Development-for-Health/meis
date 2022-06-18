<?php
require_once('../config.php');
if(isset($_GET['cid']) && $_GET['action']=='del')
{
$userid=$_GET['cid'];
$query=mysqli_query($link,"delete from visits where id='$userid'");
header('location:../PrEP-Curr/');
}
?>