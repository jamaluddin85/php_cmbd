<?php
if(isset($_POST["submit1"])){
    $name = $_POST["name"];
    $email = $_POST["email"];


    if(empty($name)){
        $message = "Name is required";
    }elseif(!preg_match("/^[A-Za-z. ]*$/", $name)){
        $message = "Special chareter is not allowed";
    }else{
        $correctName = $name;
    }
}

if(empty($email)){
    $emessage = "Email is required";
}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $emessage = "valide email is required";
}else{
    $correctEmail = $email;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation Part-1</title>
</head>
<body>

<div>
    <form action="" method="post">
        <div>
            <label for="name">Name: <?= $name?> </label> <br>
            <input type="text" name="name" placeholder="Write your name" value="<?= $name ?? null ?>">
            <div style="color: red;">
                <?= $message ?? null ?>
            </div>
        </div>
        <!-- for email  -->
        <div>
            <label for="email">Name: <?= $email?> </label> <br>
            <input type="text" name="email" placeholder="Write your email" value="<?= $email ?? null ?>"> <!-- type= email dile php message ta echo hobe na--> 

            <div style="color: red;">
                <?= $emessage ?? null ?>
            </div>
        </div>
        <br>
        <div>
            <input type="submit" value="Submit" name="submit1">
        </div>
    </form>
</div>
    
</body>
</html>