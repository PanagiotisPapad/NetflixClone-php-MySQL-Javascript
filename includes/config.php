<?php
ob_start(); // Turns on output buffering
session_start(); // Starts the session - Checks if the user is logged in

date_default_timezone_set("Europe/Athens");

try {
    $con = new PDO("mysql:dbname=netflix;host=localhost", "root", "");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); 
} 
catch (PDOException $e) {
    exit("Connection to database failed: " . $e->getMessage());
}
?>