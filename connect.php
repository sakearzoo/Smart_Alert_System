<?php
$MyUsername = "sensorpi";  // enter your username for mysql
$MyPassword = "123456";  // enter your password for mysql
$MyHostname = "localhost";      // this is usually "localhost" unless your database resides on a different server

$dbh = mysql_connect($MyHostname , $MyUsername, $MyPassword);
$selected = mysql_select_db("sensorpi",$dbh); //Enter your database name here 
?>