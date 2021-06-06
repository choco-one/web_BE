<?php
$conn = mysqli_connect('localhost', 'goweb', 'webproject333!', 'goweb');
$sql = "DELETE FROM guestbook WHERE wid='$_GET[wid]'";
$result = mysqli_query($conn,$sql);
?>