<?php

require 'config.php';
$update = "update contact_us set status= 1";
$query= $db->query($update);

?>