<?php

 

 if(isset($_POST["fileupload"]) ){
    include "connection.php";    
         //$f=""; 
        
      //$statusMsg = '';
 
 $category=$_REQUEST['category'];
 $title="";
$story="";
$name="";
$uname="";
//$fileName="";
$tmp_name="";
$title = mysqli_real_escape_string($con, $_POST['title']);
$story = mysqli_real_escape_string($con, $_POST['story']);
$uname = mysqli_real_escape_string($con, $_POST['uname']);
$f="";
// File upload path

  $fnm =  $_FILES['f']['name'];
    $dst = "./uploads/".$fnm;


    if($category=='self'){
   
    move_uploaded_file($_FILES["f"]["tmp_name"], $dst);
            // Insert image file name into database
            $result = "INSERT INTO ads(title, news, name, file, destination) VALUES('$title', '$story', '$uname', '$fnm', '$dst')";
    }
    else{
        echo 'no file chosen';
    }
   mysqli_query($con, $result);
          $ros= mysqli_query($con, $result);
  if($ros== true){
       echo "new record added";
  }
  else{
      echo"failed". mysqli_error($con);
      mysqli_close($con);
  }       
  if($category=='bible'){
   
   //   move_uploaded_file($_FILES["file"]["tmp_name"], $dst);
            // Insert image file name into database
            $result = "INSERT INTO uploads(title, news, name, file, destination) VALUES('$title', '$story', '$uname', '$fileName', '$dst')";
    }
    else{
        echo 'no file chosen';
    }
   mysqli_query($con, $result);
          $ros= mysqli_query($con, $result);
  if($ros== true){
       echo "new record added";
  }
  else{
      echo"failed". mysqli_error($con);
      mysqli_close($con);
  }    
  if($category=='bible'){
   
   //   move_uploaded_file($_FILES["file"]["tmp_name"], $dst);
            // Insert image file name into database
            $result = "INSERT INTO pipo(title, news, name, file, destination) VALUES('$title', '$story', '$uname', '$fileName', '$dst')";
    }
    else{
        echo 'no file chosen';
    }
   mysqli_query($con, $result);
          $ros= mysqli_query($con, $result);
  if($ros== true){
       echo "new record added";
  }
  else{
      echo"failed". mysqli_error($con);
      mysqli_close($con);
  } 
  if($category=='mission'){
   
   //   move_uploaded_file($_FILES["file"]["tmp_name"], $dst);
            // Insert image file name into database
            $result = "INSERT INTO mission(title, news, name, file, destination) VALUES('$title', '$story', '$uname', '$fileName', '$dst')";
    }
    else{
        echo 'no file chosen';
    }
   mysqli_query($con, $result);
          $ros= mysqli_query($con, $result);
  if($ros== true){
       echo "new record added";
  }
  else{
      echo"failed". mysqli_error($con);
      mysqli_close($con);
  }  
  header("location: index.php");  
    }   
 
 
 
        
    
   
?>    





















