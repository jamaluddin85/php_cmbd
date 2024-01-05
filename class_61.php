<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Validation Part-1</title>
</head>
<body>
    
</body>
</html>

<!-- $_GET method  -->
<?php

echo $_GET['name'] ?? null;
?>
<form action="" method="get">
    <input type="text" name="name" placeholder="write your name">
    <input type="submit" value="Submit">
</form>

<br>

<!-- $_POST method  -->
<?php
    // echo $_POST['name'] ?? null;
    if(isset($_POST["showName"])){
    //    echo $_POST["name"];
       $newName= $_POST["name"];
    }

?>
<form action="" method="post">
    <input type="text" name="name" placeholder="write your name">
    <input type="submit" value="Submit" name="showName">
</form>
<?php
    echo $newName ?? null;
?>