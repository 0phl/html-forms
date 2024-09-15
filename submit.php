<?php
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$user_email = $_POST["user_email"];
$user_passoword = $_POST["user_password"];
$date = $_POST["date"];
$yearlevel = $_POST["year-level"];

echo "<strong>First Name:</strong> " . htmlspecialchars($first_name) . "<br>";
echo "<strong>Last Name:</strong> " . htmlspecialchars($last_name) . "<br>";
echo "<strong>Email:</strong> " . htmlspecialchars($user_email) . "<br>";
echo "<strong>Password:</strong> " . htmlspecialchars($user_passoword) . "<br>";
echo "<strong>Date:</strong> " . htmlspecialchars($date) . "<br>";
echo "<strong>Year Level:</strong> " . htmlspecialchars($yearlevel) . "<br>";




?>