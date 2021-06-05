<?php
$wname = "";
$wdate = "";
$content = "";
$conn = mysqli_connect('localhost', 'goweb', 'webproject333!', 'goweb');
$sql = "SELECT wname, content, wdate FROM guestbook WHERE w3 = '$_GET[w3]' ORDER BY wid DESC";
$statement = mysqli_prepare($conn, $sql);
$result = mysqli_stmt_execute($statement);
mysqli_stmt_store_result($statement);
mysqli_stmt_bind_result($statement, $wname,$content, $wdate);

$response = array();
$res = array();
if($result){
    while(mysqli_stmt_fetch($statement)){
        $res["wname"] = $wname;
        $res["content"] = $content;
        $res["wdate"] = $wdate;
        $response[] = $res;
    }
}
echo json_encode($response);
?>
