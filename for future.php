$query=mysqli_query($link,"select clients.dob, visits.id, visits.namba_ya_vidonge_alivyopewa, visits.uic, MIN(visits.tarehe_ya_hudhurio) AS created, MAX(visits.tarehe_ya_hudhurio) as curr_date, SUM(visits.namba_ya_vidonge_alivyopewa) AS pills, MAX(visits.tarehe_ya_hudhurio_lijalo) as next_visit, clients.kvp_group  from visits join clients on clients.uic = visits.uic  where visits.aina_ya_hudhurio in ('mpya','anaendelea')  GROUP BY  visits.uic");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
$now = time(); // or your date as well
$visit_date = $row['curr_date'];
$curr_date = strtotime($visit_date);
$datediff = $now - $curr_date;

$date_diff =  round($datediff / (60 * 60 * 24));
$vidonge = $row['namba_ya_vidonge_alivyopewa'];
if ($vidonge <= $date_diff) {
    # code...