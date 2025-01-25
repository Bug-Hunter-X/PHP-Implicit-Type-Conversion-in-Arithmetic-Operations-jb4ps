```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    //Explicit type check and conversion
    if (is_numeric($number)){
        $sum += (int)$number; 
    } else {
        trigger_error('Non-numeric value encountered in array.');
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, '4'];
$sum = calculateSum($numbers);
echo "Sum: " . $sum; 
```