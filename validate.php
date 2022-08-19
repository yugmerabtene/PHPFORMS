<?php
// SECURITY
include_once 'functions.php';


// define variables and set to empty values
$email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = test_input($_POST["email"]);
}


