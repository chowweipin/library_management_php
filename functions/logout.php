<?php
session_start();

if (
    isset($_SESSION) &&
    session_unset() &&
    session_destroy()
) {
    echo "<script>alert('Logout Successful')</script>";
    echo "<script>location.href='http://localhost/library_management'</script>";
} else {
    echo "<script>location.href='http://localhost/library_management'</script>";
}