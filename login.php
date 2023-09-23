<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Replace with your own authentication logic here
    if ($username === "admin" && $password === "password") {
        echo "Login successful!";
    } else {
        echo "Login failed!";
    }
}
?>
