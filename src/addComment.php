<?php
$conn = mysqli_connect('localhost', 'goweb', 'webproject333!', 'goweb');
$sql = "INSERT INTO guestbook (wname, wpass, content, w3) VALUES('$_POST[wname]', '$_POST[wpass]', '$_POST[content]', '$_GET[w3]')";
$result = mysqli_query($conn,$sql);
?>
