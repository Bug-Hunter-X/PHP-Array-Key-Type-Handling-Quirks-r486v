```php
<?php
function incrementArrayValue(array &$arr, $key) {
  if (!isset($arr[$key])) {
    $arr[$key] = 0; 
  }
  $arr[$key]++;
}

$myArray = [];
incrementArrayValue($myArray, 'a');
echo $myArray['a']; // Outputs 1
incrementArrayValue($myArray, 'a');
echo $myArray['a']; // Outputs 2

//The unexpected behavior
incrementArrayValue($myArray, 1);
echo $myArray[1]; //Outputs 1
incrementArrayValue($myArray, 1);
echo $myArray[1]; //Outputs 2

incrementArrayValue($myArray, '1');
echo $myArray['1']; //Outputs 1
incrementArrayValue($myArray, '1');
echo $myArray['1']; //Outputs 2
?>
```