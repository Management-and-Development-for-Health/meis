<?php
require_once('../config.php');
if (isset($_POST['check_uic'])) {
    # code...
        $uic =  $_POST['uic'];
        $query = mysqli_query($link, "SELECT * FROM clients WHERE uic = '$uic'");

        if (mysqli_num_rows($query) > 0) {
            
            echo "client";
        }
    else {
        echo "no_client";
    }

    exit();
}

?>