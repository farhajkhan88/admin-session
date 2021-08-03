<?php

require 'config.php';


$fetch_status = "Select * from user where status = 0";
$query = $db->query($fetch_status);


 $Status=$query->num_rows;
    echo $Status;

?>