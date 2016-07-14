<html>
    <head>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body>
<?php
require("class.phpmailer.php"); //下载的文件必须放在该文件所在目录
$con = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
if (!$con)
{
  die('Could not connect: ' . mysql_error());
}
else{
mysql_select_db(SAE_MYSQL_DB, $con);
}

$result = mysql_query("SELECT * FROM email_address");

while($row = mysql_fetch_array($result))
  {
  $toaddress=$row['email'];
  }

$subject=$_POST['subject'];
$body=$_POST['message'];

while(true){
if($subject!=''&& $body!=''){

$mail = new PHPMailer(); //建立邮件发送类
$mail->IsSMTP(); // 使用SMTP方式发送
$mail->Host = "smtp.163.com"; // 您的企业邮局域名
$mail->SMTPAuth = true; // 启用SMTP验证功能
$mail->Username = "wenshaoguo0611@163.com"; // 邮局用户名(请填写完整的email地址)
$mail->Password = "ws1234"; // 邮局密码
$mail->From = "wenshaoguo0611@163.com"; //邮件发送者email地址
$mail->FromName = "ICareApp";
$mail->AddAddress("$toaddress", "");//收件人地址，可以替换成任何想要接收邮件的email信箱,格式是AddAddress("收件人email","收件人姓名")
//$mail->AddReplyTo("", "");
//$mail->AddAttachment("/var/tmp/file.tar.gz"); // 添加附件
//$mail->IsHTML(true); // set email format to HTML //是否使用HTML格式
$mail->Subject = "$subject"; //邮件标题
$mail->Body = "$body"; //邮件内容
$mail->AltBody = "This is the body in plain text for non-HTML mail clients"; //附加信息，可以省略
if(!$mail->Send())
{
echo "邮件发送失败. <p>";
echo "错误原因: " . $mail->ErrorInfo;
exit;
}
echo "邮件发送成功";
echo "<script type='text/javascript'> ";
echo " window.location.href='comments.php'";
echo "</script>"; 
break;
}
}
mysql_close($con);      
?>
    </body>
</html>
