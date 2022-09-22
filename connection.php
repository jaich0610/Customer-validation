<?php
    $connect = mysqli_connect("localhost","root","","phplogin") or die(mysqli_error());
        if (!$connect){
        die ("connection to Database failed !");
        }
        else{
        // echo"Database Connected<br><br><br>";
        }  
    ?>