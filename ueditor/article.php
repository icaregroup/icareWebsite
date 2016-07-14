<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>IcareApp Admin System</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.useso.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/pages/dashboard.css" rel="stylesheet">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<script src="js/jquery-1.7.2.min.js"></script>

</head>
<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="index.php">ICareApp Admin System</a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-user"></i> ICareApp <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="login.html">Logout</a></li>
            </ul>
          </li>
        </ul>
        <form class="navbar-search pull-right">
          <input type="text" class="search-query" placeholder="Search">
        </form>
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li><a href="index.php"><i class="icon-dashboard"></i><span>总览</span> </a> </li>
        <li><a href="user.php"><i class="icon-user"></i><span></span>用户</a> </li>
        <li><a href="comments.php"><i class="icon-comment"></i><span>消息</span> </a> </li>
        <li class="dropdown">					
					<a class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-file"></i>
						<span>文章管理</span>
						<b class="caret"></b>
					</a>	
				
					<ul class="dropdown-menu">
                        <li><a href="editor.php">发布文章</a></li>
						<li><a href="article.php">删除文章</a></li>
                    </ul>    				
				</li>
          <li><a href="../index.html"><i class="icon-home"></i><span>网站首页</span> </a> </li>
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->

    <div class="container">
      <div class="row">
        <div class="span12">
          <!-- /widget -->
          <div class="widget">
            <div class="widget-header"> <i class="icon-file"></i>
              <h3>Articles</h3>
            </div>
            
           <div id="example" class="modal hide fade in" style="display: none; ">
           <div class="modal-header">
           <a class="close" data-dismiss="modal">×</a>
           <h3>回复邮件</h3>
           </div>
           <div class="modal-body">
           <form action="comments_email.php" method="post" enctype="multipart/form-data">
                           邮件主题: <input type="text" name="subject" size="80">
                    <br><br>
                            邮件内容:<br/>
                    <textarea tyle="text" class="comments" name="message" style="width:400px;height:200px"></textarea><br>
                    <br><br>
                    <input type="submit" class="btn btn-info btn-lg" value="确认发送">
                    <a href="#" class="btn" data-dismiss="modal">关闭</a>
                    </form>		        
           </div>         
           </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <ul class="messages_layout">
                <?php include 'article_add.php'?>
              </ul>
            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget --> 
        </div>
        <!-- /span6 -->
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 

  

<!-- Le javascript
================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="js/jquery-1.7.2.min.js"></script> 
<script src="js/excanvas.min.js"></script> 
<script src="js/chart.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.js"></script>
<script language="javascript" type="text/javascript" src="js/full-calendar/fullcalendar.min.js"></script>
 
<script src="js/base.js"></script> 
</body>
</html>
