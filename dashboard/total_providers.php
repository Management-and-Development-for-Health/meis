<?php
require_once'../config.php';
	if(ISSET($_POST['search'])){
		$date1 = date("Y-m-d", strtotime($_POST['date1']));
		$date2 = date("Y-m-d", strtotime($_POST['date2']));
		$query=mysqli_query($link, "SELECT COUNT(id)  from providers  where  date(`created_at`) BETWEEN '$date1' AND '$date2' GROUP BY  id");
		$GLOBALS['total_providers']=mysqli_num_rows($query);
		if($total_providers>0){
		
?>
 <h4 class="text-c-purple"><?php echo htmlentities($total_providers);?></h4>
<?php
		
		}else{
			echo'
			<center>Record Not Found</center>';
		}
	}else{
		$query=mysqli_query($link, "select  COUNT(id)  from providers  where MONTH(created_at) = MONTH(CURRENT_DATE())
		AND YEAR(created_at) = YEAR(CURRENT_DATE())  GROUP BY  id");
        $GLOBALS['total_providers']=mysqli_num_rows($query);
		
?>
	<h4 class="text-c-purple"><?php echo htmlentities($total_providers);?></h4>
<?php
	
	}
?>
