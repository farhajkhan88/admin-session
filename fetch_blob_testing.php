

<form action="" enctype="multipart/form-data" method="post">

<input type="file" name="image" id="">
<button type="submit" name="submit">submit</button>
</form>
<?php

require 'config.php';

if(isset($_POST['submit'])){

$name     = $_FILES['image']['name'];
$type     = $_FILES['image']['type'];
// $tmp_name     = $_FILES['image']['tmp_name'];
$tmp_name = addslashes(file_get_contents($_FILES['image']['tmp_name']));
$size     = $_FILES['image']['size'];
$error    = $_FILES['image']['error'];

// print_r($_FILES['image']);
// echo $tmp_name;
$file_query=$db->query("INSERT INTO `test`(`quote_name`, `user_id`, `type`, `name`) VALUES ('92','13','$type','$tmp_name')");
print_r($file_query);
echo $db->error;

if($file_query > 0){
    move_uploaded_file($tmp_name,"test/".$name);
    echo "Inserted";
}
else{
    echo "some thing went wrong";
}


}

// // $quote_id = $data['id'];
        
   
// $count= count($_FILES['image']['name']);
//         for ($i=0; $i <$count ; $i++) 
//         { 
//                 $f_name = $_FILES['file']['name'][$i];
                
//                   $file_tmp_name   =   file_get_contents($_FILES['image']['tmp_name'][$i]);
//            $f_type = $_FILES['image']['type'][$i];

               
//                     $fileex = explode(".",$f_name);
                  
                 
//                    $fileext =strtolower(end($fileex));
//                 $fileext2 =strtolower(prev($fileex));
               
//                 $file_name_new = uniqid($fileext2,true).".".$fileext;
//                  $des = "upload/".$file_name_new;

//                $file_query=$db->query("INSERT INTO `qoute_file`(`quote_id`, `user_id`,`file_type` ,`file_name`) VALUES ('118','118','$f_type','$file_tmp_name')");
    
//                 move_uploaded_file($file_tmp_name[$i],$des);
//             }
    








// require 'config.php';

// $fetch ="SELECT * FROM `quote_file` WHERE quote_file.quote_id = 89 and quote_file.user_id = 13 ";
// $query= $db->query($fetch);

// print_r($query);


    

// $output="";
// $i=0;

//     while($data=mysqli_fetch_array($query)){
//         // echo "<pre>";
//         // print_r($data);
//         // echo "</pre>";
//         // header("Content-type: " . $data[3]);
//         $decoder =base64_encode($data[3]);
//         // $image = imagecreatefromstring($decoder);
//         if(!$image){
//             die("ye bhi nahi chal raha");
//         }else{
//                  header("Content-type:");
//                  imagejpeg($image);
//                  imagedestory($image);
//         }
//         // echo $data[3];
       
//     //   echo ' 

//     //        <img src="data:image/jpg;base64,'.base64.encode($data[3]).'" alt="Forest" width="600" height="400"/>
      
        
//     // ';

// }

// // else{
// //     echo "<td><h2>No Record Found</h2></td>";
// // }

$fetch ="SELECT * FROM `test`";
$fetch2= $db->query($fetch);
$data =$fetch2->fetch_assoc();
print_r($data);
   while($data =$fetch2->fetch_assoc()){
      
        //   header("Content-Type:'.$data['type'].'");
// echo $data['name'];



   echo '<img src="data:'.$data['type'].';base64,'.base64_encode($data['name']).'" height="100px" width="100px" alt="">';

   } 


?>


