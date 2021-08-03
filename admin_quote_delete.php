<?php
require 'config.php';

$id =$_POST["id"];


$delete ="DELETE from quotes where id={$id}";
$query =$db->query($delete);
if($query ==1){
    echo 1;
} else{
    echo 0;
}
?>