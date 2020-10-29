<?php
session_start();
require("dbconnect.php");
$id = $_GET["id"];  //抓id
$sql = "select * from todo where id = $id;";  //抓id資料
$result = mysqli_query($conn, $sql) or die("DB Error: Cannot retrieve message.");
$rs = mysqli_fetch_assoc($result)
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>
<body>
<h1>Update to do</h1>
<form method="post" action="updatetodomessage.php">  <!--顯示資料，傳給updatetodomessage修改-->
    <input name="id" type="hidden" value="<?= $rs['id']?>" />  
      Message Title: <input name="title" type="text" id="title" value="<?= $rs['title']?>" /> <br>

      Message Body: <input name="content" type="text" id="content" value="<?= $rs['content']?>" /> <br>

      importance:<input name="ipt" type="text" id="ipt" value="<?= $rs['ipt']?>" /> <br>-->
	  
      <input type="submit" name="Submit" value="修改" />
	</form>
  </tr>
</table>
</body>
</html>