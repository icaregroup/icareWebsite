<html>
    <body>
<?php
$con = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
if (!$con)
{
  die('Could not connect: ' . mysql_error());
}
else{
mysql_select_db(SAE_MYSQL_DB, $con);
}

$result = mysql_query("SELECT * FROM admin");
while($row = mysql_fetch_array($result))
  {
    if(($_POST[username]===$row['username'])&&($_POST[password]===$row['password'])){
        echo "<script type='text/javascript'> ";
        echo " window.location.href='index.php'";
        echo "</script>";
        break;
    }else{
        echo "<script language=\"JavaScript\">\r\n";
		echo " alert(\"Wrong username or password\");\r\n";
		echo " history.back();\r\n";
		echo "</script>";
		exit;
    }
  }

mysql_close($con);
?>
    </body>
</html>