<h1>PHP array function</h1>

<!-- array() -->
<?php 
$city = array("Dhaka","Rajshahi","Chattogram","Khulna","Sylhet","Borisal", "Naogaon");

echo "<pre>";
print_r($city);
echo "</pre>";

// is_array()

var_dump(is_array($city)); //it is array or not
echo "<br>";

// in_array()
var_dump(in_array("Naogaon", $city)); //use to find out a value in a array
echo "<br>";

// array_merge() to use marge two array
$family=["Jamal","Rita","Samiha Arja","Samina Saba","Samira Sara", "baba" ];

$newarry = array_merge($family, $city);
echo "<pre>";
print_r($newarry);
echo "</pre>";

echo "<br>";
// array_keys() it gives only the key value is a associative array
$studentinfo = [
    "name" => "Samiha Arja",
    "age" => 7.2,
    "schoolName" => "Model Academy",
    "id" => 232824,
];

echo "<br>";

$allkeys = array_keys($studentinfo);
print_r($allkeys);

echo "<br>";
// array_key_exists() 
var_dump(array_key_exists("name" ,$studentinfo));
echo "<br>";
// array_shift() , 1st value remove
array_shift($city);
print_r($city);

echo "<br>";
// array_unshift()
array_unshift($city, "Mohadevpur", "Khajur");
print_r($city);

// array_push(), add value at the end
echo "<br>";
array_push($city, "Mirpur", "AhmedNagor");
print_r($city);

// array_pop() remove value at the end
echo "<br>";
array_pop($city);
print_r($city);

echo "<br>";
// array_values() , give only the value of a array

$allvaues = array_values($family);
print_r($allvaues);

echo "<br>";
// array_map(), works as like as loop
array_map(function ($names){
    echo $names . "<br>";
}, $family); 

?>


<!-- Array functions:
i. array()
ii. is_array()
iii. in_array()
iv. array_merge()
v. array_keys()
vi. array_key_exists()
vii. array_shift()
viii. array_unshift()
ix. array_push()
x. array_pop()
xi. array_values()
xii. array_map()
xiii. array_unique() 
xiv. array_slice()
xv. array_diff()
xvi. array_search()
xvii.array_reverse() -->