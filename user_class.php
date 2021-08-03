<?php
require 'config.php';

$fetch ="select * from user where role = 'user'";
$query= $db->query($fetch);


if($query->fetch_row() > 0){
    
$output="";
$i=0;

    while($data=$query->fetch_assoc()){
            $i++;
         $output .= "<tr>
        <td>{$i}</td>
        <td>{$data['name']}</td>
        <td>{$data['email']}</td>
        <td>{$data['company_name']}</td>
        <td>{$data['company_type']}</td>
        <td>{$data['phone']}</td>
        <td>{$data['country']}</td>
        <td>{$data['city']}</td>
        <td>{$data['state']}</td>
        <td>{$data['zip_code']}</td>
        <td>{$data['address']}</td>
        <td><button type='button' class='btn btn-danger del' data-id='{$data["id"]}'>Delete</button></td>
    </tr>";
    }
    echo $output;
}
else{
    echo "<td><h2>No Record Found</h2></td>";
}



?>