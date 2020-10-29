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
<h1>Cancel Todo</h1>
<table>
  <tr>
    <form method="post" action="cancelTodo.php">
      <td><label>
          Message ID: <input name="id" type="text" id="id" />
        </label></td>

      <td><label>
          <input type="submit" name="Submit" value="送出" />
        </label></td>
    </form>
  </tr>
</table>
</form> 
</tr>
</table>
</body>
</html>

