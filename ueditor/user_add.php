<html>
    
<head>  
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

$result = mysql_query("SELECT * FROM comments");

while($row = mysql_fetch_array($result))
{   
    
            echo  "<tbody>";
            echo     "<tr>";
            echo        "<td>".$row['id']."</td>";
            echo        "<td>".$row['username']."</td>";
            echo        "<td>".$row['email']."</td>";
            echo        "<td>".$row['time']."</td>";
            echo        "<td><button class='btn btn-danger btn-lg' id='".$row['id']."'onclick='test(this)'>删除用户</button></td>";
            echo     "</tr>";
            echo   "</tbody>";
       
}

mysql_close($con);
?>
 
<script type="text/javascript">
function test(obj)
{

    var postdata=obj.id;
    //document.getElementById('num').value=parseInt(document.getElementById('num').value)+1;
    //parseInt(a,b)将a解析成b进制数
    $.ajax({ 
       url:'user_delete.php ',
       type:'post',         //数据发送方式  
       data:'a='+postdata,         //要传递的数据 
       success:function(msg){    
   
    }  
     }); 
    window.location.href="user.php";
}
</script>
    
    </body>
</html>