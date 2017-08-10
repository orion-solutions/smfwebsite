<?php
$host_name = 'db694202085.db.1and1.com';
$database = 'db694202085';
$user_name = 'dbo694202085';
$password = 'ruchunUt7e$h';
$sql = "SELECT * FROM `Newsletter`";
if (mysql_errno()) {
    die('<p>Failed to connect to MySQL: '.mysql_error().'</p>');
} else {
    echo '<p>Connection to MySQL server successfully established.</p >';
}