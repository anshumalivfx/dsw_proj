<?php
session_start();
// get session from var dump
echo "Session ID: " . session_id() . "<br>";
echo "Session Name: " . session_name() . "<br>";
echo "name: " . $_SESSION['name'] . "<br>";
echo '<pre>Session: ';
var_dump($_SESSION);
echo '</pre>';
?>
