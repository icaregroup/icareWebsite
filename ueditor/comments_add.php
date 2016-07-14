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

$result = mysql_query("SELECT * FROM comments ORDER BY id DESC");

while($row = mysql_fetch_array($result))
{   
              echo   "<li class='from_user left'> <a href='#' class='avatar'><img src='img/message_avatar1.png'/></a>";
              echo    "<div class='message_wrap'> <span class='arrow'></span>";
              echo      "<div class='info'> <a class='name'>用户：'".$row['username']."'</a> <span class='time'>时间：'".$row['time']."'</span>";
              echo        "<div class='options_arrow'>";
              echo          "<div class='dropdown pull-right'> <a class='dropdown-toggle ' id='dLabel' role='button' data-toggle='dropdown' data-target='#' href='#'> <i class=' icon-caret-down'></i> </a>";
              echo            "<ul class='dropdown-menu ' role='menu' aria-labelledby='dLabel'>";
              echo             "<li><a data-toggle='modal' href='#example'onclick='email(this)' id='".$row['email']."' ><i class=' icon-share-alt icon-large'></i> Reply</a></li>";
              echo              "<li><a href='#'  onclick='test(this)' id='".$row['id']."'><i class=' icon-trash icon-large'></i> Delete</a></li>";
              echo            "</ul>
                        </div>
                      </div>
                    </div>";
              echo      "<div class='text'>'".$row['content']."' </div>";
              echo    "</div>
                </li><br></br>";
           
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
       url:'comments_delete.php ',
       type:'post',         //数据发送方式  
       data:'a='+postdata,         //要传递的数据 
       success:function(msg){    
   
    }  
     }); 
    window.location.href="comments.php";
}
</script>

<script type="text/javascript">
function email(obj)
{

    var postdata=obj.id;
    //document.getElementById('num').value=parseInt(document.getElementById('num').value)+1;
    //parseInt(a,b)将a解析成b进制数
    $.ajax({ 
       url:'test.php ',
       type:'post',         //数据发送方式  
       data:'a='+postdata,         //要传递的数据 
       success:function(msg){    
           
    }  
     }); 
   
}
</script>    
    
    </body>
</html>