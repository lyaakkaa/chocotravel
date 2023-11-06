<?php
$dbhost = "localhost";
$dbname = 'chocotravel';
$dbuser = "postgres";
$dbpass = "dimash7628";

$conn = pg_connect("host=$dbhost dbname=$dbname user=$dbuser password=$dbpass");

if (!$conn) {
    die("Error connecting to the database");
}
?>
