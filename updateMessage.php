<?php
require("dbconnect.php");
$id = $_POST['id'];
$title = mysqli_real_escape_string($conn, $_POST['title']);  //mysqli_real_escape_string 限制使用者只能輸入資料
$msg = mysqli_real_escape_string($conn, $_POST['msg']);
$name = mysqli_real_escape_string($conn, $_POST['myname']);


if ($title) { //if title is not empty
	$sql = "UPDATE `guestbook` SET `title` = '$title', `msg` = '$msg', `name` = '$name' WHERE `guestbook`.`id` = '$id'"; //修改資料 
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
	echo "Message updated";
} else {
	echo "Message title cannot be empty";
}
?>

<body>
	<br/>
	<a href="listMessage.php">Back to list</a>
</body>