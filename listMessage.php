<?php
session_start();
require("dbconnect.php");
$sql = "select * from guestbook;";
$result = mysqli_query($conn, $sql) or die("DB Error: Cannot retrieve message.");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>無標題文件</title>
</head>

<body>

  <p>my guest book !! </p>
  <hr />
  <table width="200" border="1">
    <tr>
      <td>id</td>
      <td>title</td>
      <td>message</td>
      <td>name</td>
      <td>action</td>
    </tr>
    <?php
    while ($rs = mysqli_fetch_assoc($result)) {
      echo "<tr><td>" . $rs['id'] . "</td>";
      echo "<td>{$rs['title']}</td>";
      echo "<td>", $rs['msg'], "</td>";
      echo "<td>" . $rs['name'] . "</td>";
      echo "<td><a href = 'update.php?id={$rs['id']}'>update</a></td></tr>";
    }
    ?>
  </table>
  <a href="addMessageForm.php">Add Message</a>
  <a href="deleteMessageForm.php">Delete Message</a><br/><br/>
  <a href="listTodoB.php">list To do - Boss</a><br/>
  <a href="listTodoE.php">list To do - employee</a>
</body>

</html>