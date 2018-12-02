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
        <form action=" " method="post">
            <label> Trokut </label>
            <br>
            <br>
            <label> Unesi prvu stranicu </label>
            <br>
            <input type="text" name =str1>
            <br>
            <label> Unesi drugu stranicu </label>
            <br>
            <input type="text" name =str2>
            <br>
    
            <label> Unesi trecu stranicu </label>
            <br>
            <input type="text" name =str3>
            <br>
            
            <label> Unesi visinu </label>
            <br>
            <input type="text" name =vis>
            <br>
 
            <br>
            <input type = "submit" name ="submit" value="Izracunaj">
            <br>
            <br>
            
          
            
            
           
        <?php
       if (isset($_POST['submit'])){
           
           $str1= $_POST['str1'];
           $str2= $_POST['str2'];
           $str3= $_POST['str3'];
           $vis= $_POST['vis'];
   
           
           echo "Opseg trokuta je: " .($str1 + $str2 + $str3);
           echo "\n\nPovrsina trokuta je: " .(($str1 * $vis)/2);
       }
           
        ?>
            
          
   </body>
</html>
