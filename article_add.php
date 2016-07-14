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
 
        echo "<div class='panel panel-default'>";
        echo    "<div class='panel-heading'>";
        echo        "<h3 class='panel-title'>";
        echo           "<a>发表时间：".$row['time']."</a>";
        echo            "<a style='float:right' data-toggle='collapse' data-parent='#accordion' href='#".$row['id']."'><span class='glyphicon glyphicon-chevron-down'></span>";
        echo            "</a>
                	</h3>
          	</div>";
        echo  "<div id=".$row['id']." class='panel-collapse collapse in'>";
        echo  "<hr>";
        echo  "<div class='row'>";
   
        echo 	"<div class='text'>".html_entity_decode($row['content'])."</div>";
     
        echo 		"<hr>

    		 	</div>
                </div>
    		</div><br>";
           
}

mysql_close($con);
?>  
    
    </body>
</html>