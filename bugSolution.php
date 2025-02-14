```php
$file = fopen("myfile.txt", "r");
if ($file === false) {
    // Handle the error - this is crucial!
    $error = error_get_last();
    error_log("Error opening file: " . (isset($error['message']) ? $error['message'] : 'Unknown error') );
    // Consider alternative actions like using a default file or exiting gracefully.
} else {
    // Process the file
    while (($line = fgets($file)) !== false) {
        // Process $line
    }
    fclose($file);
}
```