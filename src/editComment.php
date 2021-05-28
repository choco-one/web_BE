<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
$conn = mysqli_connect("localhost", "goweb", "webproject333!");
$db = mysqli_select_db($conn, "goweb");
?>
<form method="post" action="updateComment.php?wid=<?=$_GET['wid']?>">
    <table width=600 border=1>
        <tr>
            <td>게시글을 수정해주세요.</td>
        </tr>
        <tr>
            <td><textarea placeholder="내용을 입력하세요" name="editcont" rows="8" cols="80"></textarea></td>
        </tr>
        <tr>
            <td align=right><input type="submit" value="확인"/></td>
        </tr>
    </table>
</form>
</body>
</html>