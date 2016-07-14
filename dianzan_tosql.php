<?php
$con = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
if (!$con)
{
  die('Could not connect: ' . mysql_error());
}
else{
echo "<script language=\"JavaScript\">\r\n";
echo " alert(\"Thank you!\");\r\n";
echo " history.back();\r\n";
echo "</script>";
mysql_select_db(SAE_MYSQL_DB, $con);
}
$time=date("Y-m-d h:i:sa");
$coo="icareapp";
$sql="INSERT INTO dianzan(dianzan,time)
VALUES
('$coo','$time')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "<script type='text/javascript'> ";
echo " window.location.href='index.html'";
echo "</script>";
mysql_close($con);   
?>