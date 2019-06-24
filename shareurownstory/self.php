
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/home.css" type="text/css"/>
        <title>PERSONAL STORIES</title>
    </head>
    <body>
      <style type="text/css">
            body{
    background-image: url(bible1.jpg); 
    background-size: cover;
}</style>
     <?php
        
        include 'connection.php';
        mysqli_select_db($con, $database);
        $query= "select * from ads";
       $result = mysqli_query($con, $query);
        $rowcount = mysqli_num_rows($result);
   ?>
      
         <div id="maka">  
           <?php
           while($row= mysqli_fetch_assoc($result)){
               ?>   
            
                <?php echo $row["title"]."<br><br>";?>
                 <?php echo $row["news"]."<br><br>";?>
                 <?php echo $row["name"]."<br><br>";?>
            
            <?php
           }
        ?>
         </div>
           
        
        </body>
</html>


