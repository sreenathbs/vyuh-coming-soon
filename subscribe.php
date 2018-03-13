<?php

$servername = "localhost";
$username = "";
$password = "";
$dbname = "vyuh";
// Create connection
$db = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

$email = $_POST['email'];

$sql = $db->prepare("INSERT INTO `subscribers`('email') VALUES(?)");
$sql->bind_param('s', $email);
$sql->execute();

header('Location: http://aagneyavyuh.co.in/subscribed.html');

?>
