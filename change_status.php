<?php

require 'config.php';
$update = "update user set status= 1";
$query= $db->query($update);

?>