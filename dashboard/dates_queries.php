<?php
require_once'../config.php';
	if(ISSET($_POST['search'])){
		$date1 = date("Y-m-d", strtotime($_POST['date1']));
		$date2 = date("Y-m-d", strtotime($_POST['date2']));
		$query=mysqli_query($link, "SELECT * FROM `clients` WHERE date(`created_at`) BETWEEN '$date1' AND '$date2'");
		$row=mysqli_num_rows($query);
		if($row>0){
		
?>
 <h4 class="text-c-purple"><?php echo htmlentities($row);?></h4>
<?php
		
		}else{
			echo'
			<center>Record Not Found</center>';
		}
	}else{
		$query=mysqli_query($conn, "SELECT * FROM `clients`");
        $row=mysqli_num_rows($query);
		while($fetch=mysqli_fetch_array($query)){
?>
	<h4 class="text-c-purple"><?php echo htmlentities($row);?></h4>
<?php
		}
	}
?>
