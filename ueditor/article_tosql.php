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
$q=htmlspecialchars(stripslashes($_POST["editor"]));
$time=date("Y-m-d h:i:sa");
$sql="INSERT INTO article(content,time)
VALUES
('$q','$time')";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "<script type='text/javascript'> ";
echo " window.location.href='article.php'";
echo "</script>";  
mysql_close($con);   
?>
    </body>
</html>