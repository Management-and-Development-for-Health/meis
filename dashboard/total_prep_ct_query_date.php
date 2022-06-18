<?php
require_once'../config.php';
	if(ISSET($_POST['search'])){
		$date1 = date("Y-m-d", strtotime($_POST['date1']));
		$date2 = date("Y-m-d", strtotime($_POST['date2']));
		$query=mysqli_query($link, "SELECT COUNT(uic)  from visits  where aina_ya_hudhurio in ('anaendelea') and date(`tarehe_ya_hudhurio`) BETWEEN '$date1' AND '$date2' GROUP BY  uic");
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
		$query=mysqli_query($link, "select  COUNT(uic)  from visits  where aina_ya_hudhurio in ('anaendelea')and amepima_na_kupewa_majibu = 'hasi' and MONTH(tarehe_ya_hudhurio) = MONTH(CURRENT_DATE())
		AND YEAR(tarehe_ya_hudhurio) = YEAR(CURRENT_DATE())  GROUP BY  uic");
        $row=mysqli_num_rows($query);
		
?>
	<h4 class="text-c-purple"><?php echo htmlentities($row);?></h4>
<?php
	
	}
?>
