<?php

require 'config.php';
$update = "update quotes set status= 1";
$query= $db->query($update);

?>