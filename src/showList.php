<!DOCTYPE html>
<html lang="utf-8">
<head>
    <meta charset="utf-8">
    <title>3! 3! 마쑤리~!</title>
</head>
<body>
<?php
    $conn = mysqli_connect("localhost","goweb","webproject333!");
    $db = mysqli_select_db($conn, "goweb");
    $sql = "SELECT * FROM guestbook WHERE w3 = '$_GET[w3]' ORDER BY wid DESC";
    $result = $conn->query($sql);
if (!$result) {
printf("에러: %s\n", $conn->error);
}
?>
<br/>
<form action="addComment.php?w3=<?=$_GET['w3']?>" method="post">
    <table border=1 width=600>
        <tr>
            <td>이름</td>
            <td><input type="text" name="wname"></td>
            <td>password</td>
            <td><input type="password" name="wpass"></td>
        </tr>
        <tr>
            <td colspan=4>
                <textarea placeholder="내용을 입력하세요" name="content" rows="8" cols="80"></textarea>
            </td>
        </tr>
        <tr>
            <td colspan=4 align=right><input type="submit" value="확인"></td>
        </tr>
    </table>
</form>
<br/>
<?php
    while($row=$result->fetch_array()){
echo "
<table width=600 border=1>
    <tr>";
        echo "
        <td>NO.$row[wid]</td>
        ";
        echo "
        <td>$row[wname]</td>
        ";
        echo "
        <td>$row[wdate]</td>
        ";
        echo "
        <td><a href='editCheck.php?wid=$row[wid]'>수정</a></td>
        ";
        echo "
        <td><a href='deleteComment.php?wid=$row[wid]'>삭제</a></td>
    </tr>
    ";
    echo "
    <tr>
        <td colspan=5>$row[content]</td>
        ";
        echo "
    </tr>
</table>
";
echo "<br/>";
}
?>
</body>
</html>