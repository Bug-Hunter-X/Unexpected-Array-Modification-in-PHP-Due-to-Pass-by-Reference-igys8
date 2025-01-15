```php
function processData(array $data): array {
  // ... some code to process the data ...
  return $data;
}

$data = [1, 2, 3, 4, 5];
$processedData = processData($data);

// Unexpected behavior: $processedData is modified even though the function doesn't explicitly modify it
// This is due to passing array by reference in PHP
foreach ($processedData as &$value) {
    $value *= 2;
}

var_dump($processedData); // Output: array(5) { [0]=> int(2) [1]=> int(4) [2]=> int(6) [3]=> int(8) [4]=> int(10) }
```