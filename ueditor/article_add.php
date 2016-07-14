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

$result = mysql_query("SELECT * FROM article ORDER BY id DESC");

while($row = mysql_fetch_array($result))
{   
              echo   "<li class='container'> ";
              echo    "<div class='message_wrap'> <span class='arrow'></span>";
              echo      "<div class='info'> <a class='name'>管理员：ICareApp</a> <span class='time'>时间：'".$row['time']."'</span>";
              echo        "<div class='options_arrow'>";
              echo          "<div class='dropdown pull-right'> <a class='dropdown-toggle ' id='dLabel' role='button' data-toggle='dropdown' data-target='#' href='#'> <i class=' icon-caret-down'></i> </a>";
              echo            "<ul class='dropdown-menu ' role='menu' aria-labelledby='dLabel'>";
              echo              "<li><a href='#'  onclick='test(this)' id='".$row['id']."'><i class=' icon-trash icon-large'></i> Delete</a></li>";
              echo              "<li><a href='http://service.weibo.com/share/share.php?appkey=&title=&url=http://icareapp.applinzi.com/&pic=&searchPic=false&style=simple' target='_blank'><i class=' icon-share icon-large'></i> Share</a></li>";
              echo            "</ul>
                        </div>
                      </div>
                    </div>";
              echo      "<div class='text'>".html_entity_decode($row['content'])."</div>";
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
       url:'article_delete.php ',
       type:'post',         //数据发送方式  
       data:'a='+postdata,         //要传递的数据 
       success:function(msg){    
   
    }  
     }); 
    window.location.href="article.php";
}
</script>
   
    
    </body>
</html>