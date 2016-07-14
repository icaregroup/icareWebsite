<!DOCTYPE html>
<html>
<head>
<script src="js/jquery-1.7.2.min.js"></script>

</head>

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
$sql="UPDATE email_address SET email='".$_POST['a']."'where id='1'";



if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($con);   
?>
</body>
</html>
