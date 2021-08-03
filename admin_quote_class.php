<?php
require 'config.php';

$fetch ="SELECT * ,quotes.id AS quote_id FROM `quotes`,`user` WHERE quotes.user_id = user.id";
$query= $db->query($fetch);


if($query->fetch_row() > 0){
    
//  print_r($query);
$output="";
$i=0;

    while($data=$query->fetch_assoc()){
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
            $i++;
         $output .= "<tr>
        <td>{$i}</td>
        <td>{$data['name']}</td>
        <td>{$data['email']}</td>
        <td>{$data['phone']}</td>
        <td>{$data['quote_name']}</td>
        <td>{$data['height']}</td>
        <td>{$data['width']}</td>
        <td>{$data['color']}</td>
        <td>{$data['requirement']}</td>
        <td>{$data['fabric']}</td>
        <td>{$data['placement']}</td>
        <td>{$data['additional']}</td>
        <td>{$data['price']}</td>
        <td><button type='button' class='btn btn-danger quote_del' data-id='{$data["quote_id"]}'>Delete</button></td>
    </tr>";
    }
    echo $output;
}
else{
    echo "<td><h2>No Record Found</h2></td>";
}



?>