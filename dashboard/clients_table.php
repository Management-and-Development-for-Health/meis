<?php
	require_once'../config.php';
	if(ISSET($_POST['search'])){
		$date1 = date("Y-m-d", strtotime($_POST['date1']));
		$date2 = date("Y-m-d", strtotime($_POST['date2']));
		$total_fsw=mysqli_query($link, "SELECT * FROM `clients` WHERE kvp_group = 'FSW' and date(`created_at`) BETWEEN '$date1' AND '$date2'");
		$row_total_fsw = mysqli_num_rows($total_fsw);
		if($row>0){
		
?>
	<tr>
		<td><?php echo $fetch['firstname']?></td>
		<td><?php echo $fetch['lastname']?></td>
		<td><?php echo $fetch['project']?></td>
		<td><?php echo $fetch['date_submit']?></td>
	</tr>
<?php
	
		}else{
			echo'
			<tr>
				<td colspan = "4"><center>Record Not Found</center></td>
			</tr>';
		}
	}else{
		$query=mysqli_query($conn, "SELECT * FROM `member`") or die(mysqli_error());
		while($fetch=mysqli_fetch_array($query)){
?>
	<tr>
		<td><?php echo $fetch['firstname']?></td>
		<td><?php echo $fetch['lastname']?></td>
		<td><?php echo $fetch['project']?></td>
		<td><?php echo $fetch['date_submit']?></td>
	</tr>
<?php
		}
	}
?>
