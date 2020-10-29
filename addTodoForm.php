<?php
session_start();
require("dbconnect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>
<body>
<h1>Add New Todo</h1>
<form method="post" action="addTodo.php">

      Title: <input name="title" type="text" id="title" /> <br>

      Message: <input name="content" type="text" id="content" /> <br>

      Importance: <input name="ipt" type="text" id="ipt" /> <br>

      <!--Author: <input name="myname" type="text" id="myname" />-->
	  
      <input type="submit" name="Submit" value="送出" />
      <br/>
      <a href="listTodoB.php">Back</a>
	</form>
  </tr>
</table>
</body>
</html>
