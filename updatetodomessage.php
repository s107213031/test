<?php
require("dbconnect.php");
$id = $_POST['id'];
$title = mysqli_real_escape_string($conn, $_POST['title']);  //mysqli_real_escape_string 限制使用者只能輸入資料
$msg = mysqli_real_escape_string($conn, $_POST['content']);
$ipt = mysqli_real_escape_string($conn, $_POST['ipt']);
//title = mysqli_real_escape_string($conn, $_POST['title']);  

if ($title) { //if title is not empty
	$sql = "UPDATE `todo` SET `title` = '$title', `content` = '$msg' , `ipt` = '$ipt' WHERE `todo`.`id` = '$id'"; //修改資料 
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
	echo "Message updated";
} else {
	echo "Message title cannot be empty";
}
?>

<body>
	<br/>
	<a href="listTodoB.php">Back</a>
</body>