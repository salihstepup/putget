<?php
include '../dbconfig.php';

$put=file_get_contents('php://input');
$data=(array)json_decode($put, true);


$squery="INSERT INTO list (`listitem`) VALUES ('".$data[0]['name']."')";
$result=$mysqli->query($squery);

print_r($data[0]);

?>