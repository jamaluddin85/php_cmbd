<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP problem solving</title>
</head>
<body>
    <h1 style="text-align: center;">PHP problem solving</h1>
</body>
</html>
<?php 

// Find maximum number from an array
$number = [22,23,95,101,55,42, 55, 22, 202, 201];
echo max($number);

echo "<br>";
// Find 2nd max number from an array
rsort($number);
$UniqueNum = array_unique($number);
$maxNum2 = array_slice($UniqueNum, 1);
echo "2nd max number is ". $maxNum2[0];

echo "<br>";

// Sort array from min to max

sort($number);
print_r($number); 

echo "<br>";
// Calculate average number of an array
$avg = array_sum($number)/count($number);
echo "Avarage number is ". $avg;

echo "<br>";

?>


<!-- i. Find maximum number from an array
ii. Find 2nd max number from an array
iii. Sort array from min to max
iv. Calculate average number of an array
v. Merging 2 different types of array together
vi. Search data from an array
vii. Show array data in lowercase and uppercase
viii. Get unique values
ix. Remove duplicate values
x. Check if email address is unique
xi. Check unique username
xii. Merge 2 comma separated lists with unique value only
xiii. Difference between 2 multi-dimensional arrays
xiv. Check if all values are string or not
xv. Union of 2 arrays
xvi. Filter out array data with some specific keys
xvii.Filter a multi-dimensional array.
xviii. Remove all white spaces from an array
xix. Combine 2 array and use one array data as keys and others as values
xx. Convert string to array -->


