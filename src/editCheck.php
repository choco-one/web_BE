<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
$conn = mysqli_connect("localhost", "goweb", "webproject333!");
$db = mysqli_select_db($conn, "goweb");
if ($_POST['wpass'] == null) {
    ?>
    <form method="post" action="">
        <table border=1>
            <tr>
                <td>비밀번호</td>
                <td><input type="password" name="wpass"/></td>
                <td><input type="submit" value="확인"/></td>
            </tr>
        </table>
    </form>
    <?php
    exit;
}
$sql = "SELECT wpass FROM guestbook WHERE wid='$_GET[wid]'";
$result = $conn->query($sql);
$row = $result->fetch_array();
if ($row['wpass'] == $_POST['wpass']) {
    echo "<script>alert('수정 페이지로 이동합니다');";
    echo "location.href='editComment.php?wid=$_GET[wid]'</script>";
} else {
    echo "<script>alert('비밀번호가 틀렸습니다');";
    echo "location.href='index.html'</script>";
}
?>
</body>
</html>
