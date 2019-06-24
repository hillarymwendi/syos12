<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form align="center" action="upload.php" method="POST">
            please enter pass key:<br><br>
            <input type="text" name="pass" required>
            <input type="submit" name="login" value="log in">
        </form>
        <?php
        $pass="";
        
        
        if (isset($_POST['login'])) {
            
        if(!$pass=='jkusda2019'){
            echo "successiful";
           
header("location: share.php"); 
        }
        else{
            echo "wrong pass key";
        }
        }
        ?>
    </body>
</html>












