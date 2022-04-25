<?php

$username = $_POST['name'];
$usertel = $_POST['tel'];
$useremail = $_POST['email'];
$courses = $_POST['courses'];
$typeCourses = $_POST['type'];

echo ' username ' . $username;
echo ' usertel ' .  $usertel;
echo ' useremail ' .  $useremail;
echo ' courses ' .  $courses;
echo ' typeCourse ' .  $typeCourse;

// require_once __DIR__ . "/telegram.php"; // Send to Telegram
