```php
function processData(array $data): array {
  // Create a copy to avoid modifying the original array
  $processedData = array_values($data);

  // ... some code to process the data ...
  foreach ($processedData as &$value) {
    $value *= 2;
  }

  return $processedData;
}

$data = [1, 2, 3, 4, 5];
$processedData = processData($data);

var_dump($data); // Output: array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) }
var_dump($processedData); // Output: array(5) { [0]=> int(2) [1]=> int(4) [2]=> int(6) [3]=> int(8) [4]=> int(10) }
```