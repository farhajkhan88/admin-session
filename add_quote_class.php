<?php
session_start();
require 'config.php';







if(isset($_POST['submit_quote'])){

   $user_id = $_SESSION['u_id'];
    

    $quote_name      =   mysqli_real_escape_string($db,$_POST['quote_name']);
    $requirement     =   mysqli_real_escape_string($db,$_POST['requirement']);
    $height          =   mysqli_real_escape_string($db,$_POST['height']);
    $placement       =   mysqli_real_escape_string($db,$_POST['placement']);
    $width           =   mysqli_real_escape_string($db,$_POST['width']);
    $fabric          =   mysqli_real_escape_string($db,$_POST['fabric']);
    $color           =   mysqli_real_escape_string($db,$_POST['color']);
    $addition        =   mysqli_real_escape_string($db,$_POST['addition']);
 
  
    

    
    if(!empty($quote_name)|!empty($requirement)|!empty($height)|!empty($placement)|!empty($width)|!empty($fabric)|!empty($color)|!empty($addition)|!empty($user_id)|!empty($file_name)){
        
   

        
        $insert ="INSERT INTO  `quotes`(`user_id`, `quote_name`, `height`, `width`, `color`, `requirement`, `fabric`, `placement`, `additional`, `price`) VALUES('$user_id','$quote_name','$height','$width','$color','$requirement','$fabric','$placement','$addition','0')";
        $query = $db->query($insert);
        if($query >0){

                $fetch = "SELECT * FROM `quotes` WHERE user_id = ".$user_id." ORDER BY id DESC LIMIT 1";
             
    $qutes_last_data = $db->query($fetch);
    
    if( $qutes_last_data ->num_rows > 0){
        $data   = $qutes_last_data->fetch_assoc();
        //  print_r($data);
                   $quote_id = $data['id'];
        
   
        $count= count($_FILES['file']['name']);
                for ($i=0; $i <$count ; $i++) 
                { 
                        $f_name = $_FILES['file']['name'][$i];
                        
                          $file_tmp_name   =   file_get_contents($_FILES['file']['tmp_name'][$i]);
                   $f_type = $_FILES['file']['type'][$i];

                       
                            $fileex = explode(".",$f_name);
                          
                         
                           $fileext =strtolower(end($fileex));
                        $fileext2 =strtolower(prev($fileex));
                       
                        $file_name_new = uniqid($fileext2,true).".".$fileext;
                         $des = "upload/".$file_name_new;

                       $file_query=$db->query("INSERT INTO `qoute_file`(`quote_id`, `user_id`,`file_type` ,`file_name`) VALUES ('$quote_id','$user_id','$f_type','$file_tmp_name')");
            
                        move_uploaded_file($file_tmp_name[$i],$des);
                    }
            
            
            echo "Insert The Records";
            header("location:add_quote.php");
                }
        }
        else{
            echo "Fields Are Required";
        }
        
    }
    else{
            echo "";
    }
}
?>