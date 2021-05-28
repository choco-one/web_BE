<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<?php
$conn = mysqli_connect("localhost", "goweb", "webproject333!");
$db = mysqli_select_db($conn, "goweb");
$sql = "INSERT INTO guestbook (wname, wpass, content, w3) VALUES('$_POST[wname]', '$_POST[wpass]', '$_POST[content]', '$_POST[w3]')";
$conn->query($sql);
echo "<script>alert('글이 등록되었습니다.');";
echo "location.href='index.html';</script>";
?>
</body>
</html>
