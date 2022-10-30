<?php 
# This is the main configuration file
# Only non sensitive files for this file as its in github
# sensitive file are #included.

# host and base URL etc
$host = "https://baked-bean.co.uk";
$basedir = "";
$URL = $host . $basedir;

#debug Mode
$debugmode = 0;
//$debugmode = 1;

# Database
include 'dbsettings.php';

# functions
include 'functions.php';

?>