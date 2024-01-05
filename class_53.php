<?php
$numOne = 21;
$numTwo = 7;
$operator = '/';

switch($operator){
    case '+':
        echo $numOne+$numTwo;
        break;

    case '-':
        echo $numOne-$numTwo;
        break;

    case '*':
        echo $numOne*$numTwo;
        break;

    case '/':
        echo $numOne/$numTwo;
        break;
}

echo "</br>";
echo "</br>";

// while loop 
$num = 1;

while($num<=10){
    echo $num . "<br>";
    $num++;
}


echo "</br>";

//  for loop 

for($num_for=5; $num_for<10; $num_for++){
    echo $num_for . "<br>";
}

echo "</br>";
// foreach loop 

$family=["Jamal","Rita","Samiha Arja","Samina Saba","Samira Sara" ];
foreach($family as $value){
    echo $value. ", ";
}

?>
