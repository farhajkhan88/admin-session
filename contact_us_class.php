<?php
require 'config.php';

$fetch ="SELECT * FROM `contact_us`";
$contact_us= $db->query($fetch);
 

if($contact_us->fetch_row() > 0){
    
$output="";
$i=0;

// print_r($contact_data);
    while($contact_data=$contact_us->fetch_assoc()){
       
            $i++;
         $output .= "<tr>
        <td>{$i}</td>
        <td>{$contact_data['name']}</td>
        <td>{$contact_data['email']}</td>
        <td>{$contact_data['phone']}</td>
        <td>{$contact_data['company_name']}</td>
        <td>{$contact_data['subject']}</td>
        <td>{$contact_data['message']}</td>
        <td><button type='button' class='btn btn-danger contact_del' data-id='{$contact_data["id"]}'>Delete</button></td>
    </tr>";
    }
    echo $output;
}
else{
    echo "<td><h2>No Record Found</h2></td>";
}



?>