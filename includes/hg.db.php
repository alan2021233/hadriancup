<?php

$dbServername = "gator4121.hostgator.com";
$dbUsername = "aland";
$dbPassword = "Alannadg44!";
$dbName = "aland_hadriancup";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
//Need this to show chinese characters
mysqli_set_charset($conn, "utf8");
