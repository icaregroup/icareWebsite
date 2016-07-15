这里是[iCare-亲情专属通信系统](http://icareapp.applinzi.com)网站的源代码，以下是对网站的一些介绍：

## 关于iCare移动应用

iCare是我们小组的赵月同学和她的伙伴做的一个国家级大学生创新项目。iCare是一个助老的亲情专属通信系统App，运行在安卓手机平台。我们的网站主页有这个应用的APK安装包下载链接，大家可以下载试用。由于兼容性可能做得不是很出色，我们不能保证应用在所有型号和系统版本的安卓手机上都能正常运行。这个项目做得非常出色，我们在这里要感谢所有这个大创项目中的同学，因为你们的努力，才会有今天这个网站的诞生。

## 关于网站功能

对于游客来说，本网站主要有以下功能：  
* 展示iCare移动应用，分为产品定位、创意来源、特色功能、界面展示、团队介绍这几个部分。  
* 提供应用安装包的下载功能，在主页标题下面点击“下载应用”按钮即可。  
* 点击导航栏的“团队日志”可以查看团队发布的所有文章，以发表时间由近至远排序。  
* 游客可以在最下方的留言板写下自己的名字和邮箱并给我们反馈意见，我们在后台可以看到。  
* 游客可以点击左上角的“点赞”按钮给我们点赞，支持我们的工作。  

在后台管理方面（后台使用php实现），本网站主要有以下功能：  
* 管理员点击主页右上角的“后台登录”按钮可以进入管理员登录界面，在这个页面输入正确的用户名和密码后可以进入后台控制面板。  
* 在后台系统的首页，管理员可以看到网站当前的用户数、点赞数、消息数和文章数（其中用户数和消息数都来源于数据库中的同一张表，游客留言后，该用户的相关信息及留言被存到这个表中，用户数和消息数与这个表的行数同步更新）。  
* 在“用户”页面，管理员可以查看用户信息表，包含每个用户的ID、用户名、邮箱和注册时间（就是用户留言的时间），并可以删除用户。删除用户相当于在对应的数据库表中删除相应的行。  
* 在“消息”页面，管理员可以看到所有用户在留言板写下的反馈意见，包括用户的名称和时间信息。针对每条信息，管理员可以点击右上角的下三角标志，选择回复或删除信息。回复信息就是发邮件到用户提交的邮箱，编辑好邮件内容后点击发送，若用户留的邮箱没有问题，该用户可以立即收到我们的邮件。删除信息的效果和“用户”页面中的删除用户相同。  
* 点击导航栏中的“文章管理”，可以选择发布文章或删除文章。在发布文章页面，我们提供了功能较为强大的文章编辑器，支持发布包含文本、表情、图片等元素的文章。在删除文章页面可以看到已经发布的所有文章，并可以点击文章右上角的下三角标志选择删除。

## 后台登录的用户名和密码

用户名：icareapp  
密码：1234


