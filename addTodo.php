<?php
require("dbconnect.php");
$title=mysqli_real_escape_string($conn,$_POST['title']);
$content=mysqli_real_escape_string($conn,$_POST['content']);
$ipt=mysqli_real_escape_string($conn,$_POST['ipt']);
//$name=mysqli_real_escape_string($conn,$_POST['myname']);
//INSERT INTO `todo` (`id`, `title`, `content`, `status`) VALUES (NULL, '9988', '8899', 

if ($title) { //if title is not empty
	$sql = "insert into todo (title, content, ipt) values ('$title', '$content', '$ipt');"; //新增資料 
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
	echo "Message added";
} else {
	echo "Message title cannot be empty";
}
?>
<br/>
<a href="listTodoB.php">Back</a>