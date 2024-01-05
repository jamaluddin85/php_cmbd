<?php

// index array 
$family=["Jamal","Rita","Samiha Arja","Samina Saba","Samira Sara", "baba" ];
foreach($family as $value){
    echo $value. ", ";
}

echo "</br>";
echo "($family[0])";
echo "</br>";

var_dump($family);

echo "</br>";

echo "<pre>";
var_dump($family);
echo "</pre>";

echo phpversion();

echo "</br>"; echo "</br>";

for($i=0; $i<count($family); $i++){
    echo $family[$i]. "</br>";
}
echo "<p style='color:red'>This is forEach</p>";
// echo "</br>";

foreach($family as $value){
    echo $value. "</br>";
}

// associative array 

$studentinfo = [
    "name" => "Samiha Arja",
    "age" => 7.2,
    "schoolName" => "Model Academy",
    "id" => 232824,
];

foreach($studentinfo as $value){
    echo "<p style='color:orange; font-weight:700'>$value</p>";
}

echo "</br>";

foreach($studentinfo as $key => $value){
    echo "<p style='color:green; font-weight:700'> $key :$value</p>";
}

echo "</br>";
// multidimension array 

$myfamily = [
    ["Jamal", 38, "Mohadevpur"],
    ["Rita", 32, "Sapahar"],
    ["Arja", 7, "Mohadevpur"],
    ["Samira", 1.5, "Mohadevpur"],
    ["Samina", 1.5, "Mohadevpur"]
];

echo"<pre>";
print_r($myfamily);
echo"</pre>";

echo "</br>";

foreach($myfamily as $myfamily){
    foreach($myfamily as $key => $value){
        if($key==count($myfamily) - 1){
            echo $value;
        }else {
            echo $value. ",  ";
        }
        
    }
    echo "</br>";
}

$bdcity = ["Dhaka","Rajshahi","Chattogram","Khulna","Sylhet","Borisal", "Naogaon"];


?>
 
</br>

<form action="">
    <select name="" id="">
        <option value="">--Select your city--</option>
        <?php foreach($bdcity as $city){ ?>
        <option value=""><?=$city?></option>
        <?php }?>
    </select>
</form>