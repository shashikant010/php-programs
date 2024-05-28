<?php 
session_start(); 
if (!isset($_SESSION['counter'])) { 
$_SESSION['counter'] = 0; 
} 
$_SESSION['counter']++; 
echo "Session ID: " . session_id() . "<br>"; 
echo "Counter: " . $_SESSION['counter'] . "<br>"; 
echo "Session Cookie Parameters:<br>"; 
echo "Name: " . session_name() . "<br>"; 
echo "Cookie Lifetime: " . ini_get('session.cookie_lifetime') . " seconds<br>"; 
echo "Cookie Path: " . ini_get('session.cookie_path') . "<br>"; 
echo "Cookie Domain: " . ini_get('session.cookie_domain') . "<br>"; 
?> 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="UTF-8"> 
<title>Session Management Example</title> 
</head> 
<body> 
<h1>Session Management Example</h1> 
<p>This page demonstrates session management in PHP.</p> 
</body> 
</html> 