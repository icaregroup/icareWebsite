<?php
$con = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
if (!$con)
{
  die('Could not connect: ' . mysql_error());
}
else{
echo "<script language=\"JavaScript\">\r\n";
echo " alert(\"Thank you for your message!\");\r\n";
echo " history.back();\r\n";
echo "</script>";
mysql_select_db(SAE_MYSQL_DB, $con);
}
$time=date("Y-m-d h:i:sa");
$sql="INSERT INTO comments(username,email,content,time)
VALUES
('$_POST[name]','$_POST[email]','$_POST[content]','$time')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "<script type='text/javascript'> ";
echo " window.location.href='index.html'";
echo "</script>";    
mysql_close($con);   
?>