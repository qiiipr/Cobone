<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myoffer";



$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->set_charset('utf8');
session_start();

$upload_file	=	"uploads/";

$site_title		=	"My Offers";

$expire_date	=	time()+(60*60*24*7); // s m h d


?>
