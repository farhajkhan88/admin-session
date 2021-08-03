<?php

require 'config.php';


$fetch_status = "SELECT COUNT(id) as total FROM `quotes`";
$query = $db->query($fetch_status);


$data=$query->fetch_assoc();
echo $data['total'];

?>