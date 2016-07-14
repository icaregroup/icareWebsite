<?php
$con = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
if (!$con)
{
  die('Could not connect: ' . mysql_error());
}
else{
mysql_select_db(SAE_MYSQL_DB, $con);
$sql = "CREATE TABLE comments
(
id int auto_increment primary key not null,
username text,
email text,
content text,
time text
)";
mysql_query($sql,$con);
}

mysql_close($con);
?>