<?php
session_start();
require("dbconnect.php");
?>
<h1>Delete Message</h1>
<table>
  <tr>
    <form method="post" action="deleteMessage.php">
      <td><label>
          Message ID: <input name="id" type="text" id="id" />
        </label></td>

      <td><label>
          <input type="submit" name="Submit" value="送出" />
        </label></td>
    </form>
  </tr>
</table>
<a href="listMessage.php">Back</a>