<html>
    <body>
<?php
function deleteblog($id){
$con = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
$te=intval($id);
echo $te;
if (!$con)
{
  die('Could not connect: ' . mysql_error());
}
else{
mysql_select_db(SAE_MYSQL_DB, $con);
}

mysql_query("DELETE FROM comments WHERE id=".$te);
mysql_close($con);
}

$q=$_POST['a'];
deleteblog($q);
?>
<script type="text/javascript">
window.location.href="user.php";
</script>
    </body>
</html>