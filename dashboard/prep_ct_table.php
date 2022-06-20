<?php
require_once'../config.php';
	if(ISSET($_POST['search'])){
		$date1 = date("Y-m-d", strtotime($_POST['date1']));
		$date2 = date("Y-m-d", strtotime($_POST['date2']));
		$query=mysqli_query($link, "SELECT clients.id, clients.kvp_group, clients.dob, count(visits.uic) AS uic FROM `visits` join clients on clients.uic =  visits.uic  WHERE clients.kvp_group = 'FSW' and  date(`visits.tarehe_ya_hudhurio`) BETWEEN '$date1' AND '$date2' GROUP By visits.uic");
		$row=mysqli_num_rows($query);
		if($row>0){
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
		}else{
			echo'
			<tr>
				<td colspan = "4"><center>Record Not Found</center></td>
			</tr>';
		}
	}else{
		$query=mysqli_query($link, "SELECT * FROM `member`") or die(mysqli_error());
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
