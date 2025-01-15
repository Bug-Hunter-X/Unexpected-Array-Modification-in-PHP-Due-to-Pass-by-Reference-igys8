# PHP Pass-by-Reference Bug

This repository demonstrates a common pitfall in PHP: the unexpected modification of arrays due to pass-by-reference semantics.  Even if a function doesn't explicitly modify an array, changes within the function can affect the original array if it's passed without using the `&` operator.

## Bug Description
The `processData` function appears to return a modified copy of the input array. However, because PHP arrays are passed by reference by default, modifications made inside the function directly affect the original array.