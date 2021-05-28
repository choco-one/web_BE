<?php
$conn = mysqli_connect("localhost", "goweb", "webproject333!");
$db = mysqli_select_db($conn, "goweb");
$sql="UPDATE guestbook SET content='$_POST[editcont]', wdate=now() WHERE wid='$_GET[wid]'";
$result=$conn->query($sql);
echo "<script>alert('수정이 완료되었습니다.')</script>";
echo "<script>location.href='index.html';</script>";
?>