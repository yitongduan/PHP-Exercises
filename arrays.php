<?php
    /*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

$food = [
    1 => "hotpot",
    "pizza",
    "mango",
    "cake"
];
    
    
/*
Print every array element in a new line.
*/
echo "<pre>";
print_r($food);
echo "</pre>";



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/
echo "<ul>";
echo "<li>" . $food[1] . "</li>";
echo "<li>" . $food[2] . "</li>";
echo "<li>" . $food[3] . "</li>";
echo "<li>" . $food[4] . "</li>";
echo "</ul>";



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/
$food_assoc = [
    "hotpot" => "main course",
    "pizza" => "main course",
    "mango" => "fruit",
    "cake" => "dessert"
];
/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/

foreach ($food_assoc as $key => $value) {
    echo "{$key} | {$value} <br>";
}


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/

$food_assoc = [
    "pizza" => [
    "type" => "main course",
    "origin" => "Italy"
],
    
    "hotpot" => [
    "type" => "main course",
    "origin" => "China"
],
    
    "mango" => [
    "type" => "fruit",
    "origin" => "Global"
],
    
    "cake" => [
    "type" => "dessert",
    "origin" => "Greece"
]
];
    
    
/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/

foreach ($food_assoc as $key => $value) {
    echo "$key";
    foreach ($food_assoc[$key] as $k => $v) {
    echo " | {$v}";
}
    echo "<br>";
}

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/
echo "<table border=\"1\" width=\"40%\" align=\"left\">\n";
 $i = 0;

 foreach ($food_assoc as $key => $value) {
    if($i==0){
        echo "<th>food</th>";
        foreach($value as $cate => $v) {
             echo "<th>$cate</th>";
        }
    }
     echo "<tr>";
        echo "<td> $key </td>";
    foreach ($food_assoc[$key] as $key1 => $va){
        echo "<td> $va </td>";
    }
    echo "</tr>";
    $i++;
}

echo "</table>";

?>