# Silent fopen() Failure in PHP

This example demonstrates a common, yet subtle, error in PHP file handling. The `fopen()` function doesn't always explicitly throw an error; it silently returns `false` on failure.  This can lead to unexpected behavior if you don't properly check for this return value.

The `bug.php` file shows how a naive use of `fopen()` can cause unexpected issues. The `bugSolution.php` file provides a corrected version.

**Key takeaway:** Always check the return value of `fopen()` to handle all file opening failures, not just "file not found" errors.  Use error logging or other mechanisms to identify the nature of the issue if it isn't immediately apparent.