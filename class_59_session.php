
<?php
    session_start();

   if(!isset($_SESSION["name"])){
        header("location:class_59.php");
   }

    echo "Name: ". $_SESSION ["name"]."<br>";
    echo "Address: ". $_SESSION ["address"]."<br>";
    echo "Status: ". $_SESSION ["status"]."<br>";
    echo "Country Name: ". $_SESSION ["cuntry"]."<br>";





?>