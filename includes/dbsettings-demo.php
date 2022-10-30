<?php 
# This is the database configuration file
# This file comtains the sensitive parametersi
# that should not be committed to git.

$dbhost="localhost";
$dbport="";
$dbuser="USER";
$dbpass="PASSWORD";
$dbname="bakedbeanv1";

// Make the database connection
$db = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
?>
