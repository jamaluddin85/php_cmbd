<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regular Expression, $GLOBALS, $ SERVER and Session</title>
</head>
<body>
    <a href="https://www.w3schools.com/php/php_regex.asp" target="_blank" rel="noopener noreferrer">Click for regex</a>
    <br>

    <a href="https://www.w3schools.com/php/php_ref_regex.asp" target="_blank" >Click for regex ref</a>
    <br><br>
    
</body>
</html>

<?php 

// PHP Regex function: preg_match(), preg_match_all() and preg_replace()

// preg_match()
    $str = "Jamal Rita Arja Samira Samina jamal rita";
    $pattern = "/jamal/i";

    echo preg_match($pattern, $str); 

    echo "<br>";
    // preg_match_all()

    echo preg_match_all($pattern, $str);

    echo "<br>";

    // preg_replace()
   $str = "this is my family";
   $pattern = "/My/i";
   echo $str;
   echo "<br>";
    echo preg_replace($pattern, "Jamal's", $str);

    echo "<br>";

    // Mobile number formate 
    $mobbileNum = "+01710504753";
    $pattern = "/^(\+\d{0,1})\d{11}$/";  ///^(\+\d{1,3}[- ]?)?\d{10}$/
    echo preg_match($pattern, $mobbileNum);

    echo "<br>";

    // password match
    $password = "@5Tsd2A1ff2";
    $pattern = "/^[a-zA-Z0-9@#$%&*!]{9,}$/"; //{9} means exxect 9 number but {9,} means minimum 9 and we can use more than 9

    echo preg_match($pattern, $password);

    echo "<br>";

    // email validation 
    $email="jamal@gmail.com";
    $pattern = "/^[a-z0-9]+@[a-z]\.[a-z]/";
    echo preg_match($pattern, $email);

    echo "<br>";

    // Supper global varialble 

    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    // echo "<br>";
    // echo $_SERVER['HTTP_HOST'];
    // echo "<br>";
    // echo $_SERVER['HTTP_REFERER'];
    // echo "<br>";
    // echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];
    echo "<br>";
    echo $_SERVER['SERVER_PORT'];
    echo "<br>";
    echo $_SERVER['REQUEST_URI'];
    echo "<br>";
    echo "<pre>";
    print_r($_SERVER);
    echo "</pre>";

    echo "<br>";



?>

<!-- <?php
$password = "jamal25jj";

if (preg_match('/^.{8,}$/', $password)) {
    echo "Password is valid.";
} else {
    echo "Password must be at least 8 characters long.";
}
?> -->

<?php
session_start();

$_SESSION["name"]="Md. Jamal Uddin";
$_SESSION["address"]="Dhaka";
$_SESSION["status"]="Job holder";
$_SESSION["cuntry"]="Bangladesh";

echo "This is session name: ". $_SESSION["name"];
?>