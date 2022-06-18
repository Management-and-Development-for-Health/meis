<?php
if(isset($_POST['btnView']))
{
    function test()
    {
        $GLOBALS['from'] =  $_POST['StartDate'];
        $GLOBALS['to'] =  $_POST['EndDate'];
        $date_range =  $GLOBALS['from'] + $GLOBALS['to'];
        header("location: ../dashboard/?range=$date_range");
        // header('Location: '.$newURL);
    }

}
else{
    function test()
    {
        $GLOBALS['from'] = date('Y-m-01');    $GLOBALS['to'] = date('Y-m-t');
        $date_range =  $GLOBALS['from'] + $GLOBALS['to'];
        header("location: ../dashboard/?range=$date_range");
    }
}
?>