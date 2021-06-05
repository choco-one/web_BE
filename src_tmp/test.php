<?php
$host = 'localhost';
$user = 'goweb';
$pw = 'webproject333!';
$dbName = 'goweb';

$conn = mysqli_connect($host, $user, $pw, $dbName);

$sql = "SELECT * FROM guestbook WHERE w3 = '$_GET[w3]'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$list_array = array("wname" => $row['wname'],
    "wdate" => $row['wdate'],
    "content" => $row['content']);

$result_array = json_encode($list_array);

echo $result_array;
?>