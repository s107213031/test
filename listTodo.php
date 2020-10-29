<?php
session_start();
require("dbconnect.php");
$sql = "select * from todo where status = 0;";
$cql = "select count(status) as count from todo where status = 1;";
$result = mysqli_query($conn, $sql) or die("DB Error: Cannot retrieve message.");
$result2 = mysqli_query($conn, $cql) or die("DB Error: Cannot retrieve message.");
$rs2 = mysqli_fetch_assoc($result2);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>無標題文件</title>
</head>

<body>

  <p>my Todo list !! </p>
  <hr />
  <table width="200" border="1">
    <tr>
      <td>id</td>
      <td>title</td>
      <td>message</td>
      <td>status</td>
      <td>action</td>
    </tr>
    <?php
    while ($rs = mysqli_fetch_assoc($result)) {
      echo "<tr><td>" . $rs['id'] . "</td>";
      echo "<td>{$rs['title']}</td>";
      echo "<td>", $rs['content'], "</td>";
      echo "<td>", $rs['status'];
      echo "<a href = 'todoSet.php?id={$rs['id']}'>&nbsp;OK</a>";
      echo "<td><a href = 'updatetodo.php?id={$rs['id']}'>update</a>";
    }
    ?>
  </table>
  <?php
    echo "共有&nbsp;",$rs2['count'],"&nbsp;項已完成"
  ?>
  <!--
  <a href="addMessageForm.php">Add Message</a>
  <a href="deleteMessageForm.php">Delete Message</a>
  -->
  <br/>
  <a href="addTodoForm.php">Add to do</a><br/>
  <a href="listdone.php">Done</a>
  <a href="listMessage.php">Back</a><br/>
 
</body>

</html>