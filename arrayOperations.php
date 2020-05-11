<?php

## There are 3 Types of Array ::

# 1> Indexed arrays - Arrays with a numeric index
# 2> Associative arrays - Arrays with named keys
# 3> Multidimensional arrays - Arrays containing one or more arrays

$cars = array("Volvo", "BMW", "Toyota");
echo "count is ".count($cars);
echo "\n";

# 1> Indexed arrays : The index can be assigned automatically (index always starts at 0)
$arrlength = count($cars);
for($x = 0; $x < $arrlength; $x++) {
  // array ele access by index
  echo $cars[$x];
  echo "\n";
}
echo "\n";

# 2> Associative Arrays : Associative arrays are arrays that use named keys that you assign to them.
#There are two ways to create an associative array: 

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
#or:
$age['Peter'] = "35";
$age['Ben'] = "37";
$age['Joe'] = "43";

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "\n";
}
