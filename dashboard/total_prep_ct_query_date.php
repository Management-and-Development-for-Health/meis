<?php
require_once'../config.php';
	if(ISSET($_POST['search'])){
		$date1 = date("Y-m-d", strtotime($_POST['date1']));
		$date2 = date("Y-m-d", strtotime($_POST['date2']));
		$query=mysqli_query($link, "SELECT COUNT(uic)  from visits  where aina_ya_hudhurio in ('anaendelea') and date(`tarehe_ya_hudhurio`) BETWEEN '$date1' AND '$date2' GROUP BY  uic");
		$query_fsw=mysqli_query($link, "SELECT COUNT(visits.uic), clients.kvp_group  from visits join clients on clients.uic =  visits.uic where clients.kvp_group = 'FSW' and aina_ya_hudhurio in ('anaendelea') and date(`tarehe_ya_hudhurio`) BETWEEN '$date1' AND '$date2' GROUP BY  visits.uic");
		$query_msm=mysqli_query($link, "SELECT COUNT(visits.uic), clients.kvp_group  from visits join clients on clients.uic =  visits.uic where clients.kvp_group = 'MSM' and aina_ya_hudhurio in ('anaendelea') and date(`tarehe_ya_hudhurio`) BETWEEN '$date1' AND '$date2' GROUP BY  visits.uic");
		$query_agyw=mysqli_query($link, "SELECT COUNT(visits.uic), clients.kvp_group  from visits join clients on clients.uic =  visits.uic where clients.kvp_group = 'AGYW' and aina_ya_hudhurio in ('anaendelea') and date(`tarehe_ya_hudhurio`) BETWEEN '$date1' AND '$date2' GROUP BY  visits.uic");
		$query_pwid=mysqli_query($link, "SELECT COUNT(visits.uic), clients.kvp_group  from visits join clients on clients.uic =  visits.uic where clients.kvp_group = 'PWID' and aina_ya_hudhurio in ('anaendelea') and date(`tarehe_ya_hudhurio`) BETWEEN '$date1' AND '$date2' GROUP BY  visits.uic");
		$query_couples=mysqli_query($link, "SELECT COUNT(visits.uic), clients.kvp_group  from visits join clients on clients.uic =  visits.uic where clients.kvp_group = 'Discordant Couples' and aina_ya_hudhurio in ('anaendelea') and date(`tarehe_ya_hudhurio`) BETWEEN '$date1' AND '$date2' GROUP BY  visits.uic");
		$query_men=mysqli_query($link, "SELECT COUNT(visits.uic), clients.kvp_group  from visits join clients on clients.uic =  visits.uic where clients.kvp_group = 'Risk Men' and aina_ya_hudhurio in ('anaendelea') and date(`tarehe_ya_hudhurio`) BETWEEN '$date1' AND '$date2' GROUP BY  visits.uic");
		$GLOBALS['total_count_prep_ct_men']=mysqli_num_rows($query_men);
		$GLOBALS['total_count_prep_ct_couples']=mysqli_num_rows($query_couples);
		$GLOBALS['total_count_prep_ct_pwid']=mysqli_num_rows($query_pwid);
		$GLOBALS['total_count_prep_ct_agyw']=mysqli_num_rows($query_agyw);
		$GLOBALS['total_count_prep_ct_msm']=mysqli_num_rows($query_msm);
		$GLOBALS['total_count_prep_ct_fsw']=mysqli_num_rows($query_fsw);
		$GLOBALS['total_count_prep_ct']=mysqli_num_rows($query);
		if($total_count_prep_ct>0){
		
?>
 <h4 class="text-c-purple"><?php echo htmlentities($total_count_prep_ct);?></h4>
<?php
		
		}else{
			echo'
			<center>Record Not Found</center>';
		}
	}else{
		$query=mysqli_query($link, "select  COUNT(uic)  from visits  where aina_ya_hudhurio in ('anaendelea')and amepima_na_kupewa_majibu = 'hasi' and MONTH(tarehe_ya_hudhurio) = MONTH(CURRENT_DATE())
		AND YEAR(tarehe_ya_hudhurio) = YEAR(CURRENT_DATE())  GROUP BY  uic");
		$query_fsw=mysqli_query($link, "SELECT COUNT(visits.uic), clients.kvp_group  from visits join clients on clients.uic =  visits.uic where clients.kvp_group = 'FSW' and aina_ya_hudhurio in ('anaendelea') and MONTH(tarehe_ya_hudhurio) = MONTH(CURRENT_DATE())
		AND YEAR(tarehe_ya_hudhurio) = YEAR(CURRENT_DATE()) GROUP BY  visits.uic");
		$query_msm=mysqli_query($link, "SELECT COUNT(visits.uic), clients.kvp_group  from visits join clients on clients.uic =  visits.uic where clients.kvp_group = 'MSM' and aina_ya_hudhurio in ('anaendelea') and MONTH(tarehe_ya_hudhurio) = MONTH(CURRENT_DATE())
		AND YEAR(tarehe_ya_hudhurio) = YEAR(CURRENT_DATE()) GROUP BY  visits.uic");
		$query_agyw=mysqli_query($link, "SELECT COUNT(visits.uic), clients.kvp_group  from visits join clients on clients.uic =  visits.uic where clients.kvp_group = 'AGYW' and aina_ya_hudhurio in ('anaendelea') and MONTH(tarehe_ya_hudhurio) = MONTH(CURRENT_DATE())
		AND YEAR(tarehe_ya_hudhurio) = YEAR(CURRENT_DATE()) GROUP BY  visits.uic");
		$query_pwid=mysqli_query($link, "SELECT COUNT(visits.uic), clients.kvp_group  from visits join clients on clients.uic =  visits.uic where clients.kvp_group = 'PWID' and aina_ya_hudhurio in ('anaendelea') and MONTH(tarehe_ya_hudhurio) = MONTH(CURRENT_DATE())
		AND YEAR(tarehe_ya_hudhurio) = YEAR(CURRENT_DATE()) GROUP BY  visits.uic");
		$query_men=mysqli_query($link, "SELECT COUNT(visits.uic), clients.kvp_group  from visits join clients on clients.uic =  visits.uic where clients.kvp_group = 'Risk Men' and aina_ya_hudhurio in ('anaendelea') and MONTH(tarehe_ya_hudhurio) = MONTH(CURRENT_DATE())
		AND YEAR(tarehe_ya_hudhurio) = YEAR(CURRENT_DATE()) GROUP BY  visits.uic");
		$query_couples=mysqli_query($link, "SELECT COUNT(visits.uic), clients.kvp_group  from visits join clients on clients.uic =  visits.uic where clients.kvp_group = 'Discordant Couples' and aina_ya_hudhurio in ('anaendelea') and MONTH(tarehe_ya_hudhurio) = MONTH(CURRENT_DATE())
		AND YEAR(tarehe_ya_hudhurio) = YEAR(CURRENT_DATE()) GROUP BY  visits.uic");
		$GLOBALS['total_count_prep_ct_couples']=mysqli_num_rows($query_couples);
		$GLOBALS['total_count_prep_ct_men']=mysqli_num_rows($query_men);
		$GLOBALS['total_count_prep_ct_pwid']=mysqli_num_rows($query_pwid);
		$GLOBALS['total_count_prep_ct_agyw']=mysqli_num_rows($query_agyw);
		$GLOBALS['total_count_prep_ct_msm']=mysqli_num_rows($query_msm);
		$GLOBALS['total_count_prep_ct_fsw']=mysqli_num_rows($query_fsw);
        $GLOBALS['total_count_prep_ct']=mysqli_num_rows($query);
		
?>
	<h4 class="text-c-purple"><?php echo htmlentities($total_count_prep_ct);?></h4>
<?php
	
	}
?>
