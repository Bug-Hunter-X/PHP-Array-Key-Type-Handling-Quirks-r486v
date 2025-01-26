# PHP Array Key Type Handling Quirks

This example demonstrates a potential pitfall in PHP when using numeric strings as array keys.  PHP's loose typing system can lead to unexpected results if you're not careful about the data types you're using as keys.

The `incrementArrayValue` function is designed to increment the value associated with a given key. However, when a numeric string ('1') is passed instead of an integer (1), PHP treats them as separate keys. This can lead to subtle bugs, especially when dealing with data coming from external sources or user input, where the type might not be strictly controlled.