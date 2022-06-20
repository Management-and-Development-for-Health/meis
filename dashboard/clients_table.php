<?php
require_once'../config.php';
	if(ISSET($_POST['search'])){
		$date1 = date("Y-m-d", strtotime($_POST['date1']));
		$date2 = date("Y-m-d", strtotime($_POST['date2']));
		$query=mysqli_query($link, "SELECT *  from clients  where kvp_group = 'FSW' and  date(`created_at`) BETWEEN '$date1' AND '$date2'");
		$row=mysqli_num_rows($query);
		if($row>0){
		
?>
 <?php echo htmlentities($row);?>
<?php
		
		}else{
			echo'
			<center>Record Not Found</center>';
		}
	}else{
		$query=mysqli_query($link, "SELECT *  from clients  where kvp_group = 'FSW' and MONTH(created_at) = MONTH(CURRENT_DATE())
		and YEAR(created_at) = YEAR(CURRENT_DATE())");
        $row=mysqli_num_rows($query);
		
?>
	<?php echo htmlentities($row);?>
<?php
	
	}
?>
