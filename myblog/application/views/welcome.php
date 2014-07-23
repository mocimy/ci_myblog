<?php 
  if(isset($_COOKIE['username'])) 
    $username=$_COOKIE['username'];
?>
body { padding-top: 70px; }
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="./welcome">My Blog</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="../article">文章列表</a></li>
        <li><a href="../publish">发布文章</a></li>
      </ul>
      <form class="navbar-form navbar-left" role="search" action="http://www.baidu.com/baidu" >
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search" name=word>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <?php   if(!isset($username))  {   ?>   <li><a href="../login">登陆</a></li>
        <?php }   else  {   ?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $username; ?> <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="../delcook">登出</a></li>
          </ul>
        </li>
        <?php  }  ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="jumbotron">
<div class="container">
  <h1><?php switch ($id) {
      case 1:  echo "My Blog";  break;
      case 2:  echo "登陆成功";  break;
      case 3:  echo "登陆失败";  break;
      case 4:  echo "注册成功";  break;
      case 5:  echo "注销成功"; break;
  } ?> </h1>
  <p><?php switch ($id) {
      case 1:  echo "My Blog";  break;
      case 2:  echo "欢迎再次光临，今天您想做点什么？";  break;
      case 3:  echo "请检查您的登陆信息是否有误。"; ?> <a href="../login">点击这里返回登陆页面</a> <?php break;
      case 4:  echo "您的注册信息正在被管理员审核，通过审核后您将可以自由发表博文。";  break;
      case 5:  echo "您已成功注销。现在您可以浏览文章和发表评论。";  break;
  } ?></p>
<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img data-src="holder.js/300x300" src="http://i1.tietuku.com/aa2ea5c05d811b63.jpg" alt="..." style="height: 200px; width: 100%; display: block;">
      <div class="caption">
        <h2>文章列表</h2>
        <p>任何人都可以从文章列表查看所有博文。你可以删除自己的博文。</p>
        <p><a href="../article" class="btn btn-primary" role="button">进入</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img data-src="holder.js/300x300" src="http://i1.tietuku.com/2f8f933de0c79e81.jpg" alt="..." style="height: 200px; width: 100%; display: block;">
      <div class="caption">
        <h2>用户页面</h2>
        <p>你可以在这里登陆或注册。注册需要管理员的审核。</p>
        <p><a href="../login" class="btn btn-primary" role="button">进入</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img data-src="holder.js/300x300" src="http://i1.tietuku.com/298a4750a2148223.jpg" alt="..." style="height: 200px; width: 100%; display: block;">
      <div class="caption">
        <h2>发布页面</h2>
        <p>如果你已登陆，你可以在这里发表自己的博文。</p>
        <p><a href="../publish" class="btn btn-primary" role="button">进入</a> 
      </div>
    </div>
  </div>
</div>
  <div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img data-src="holder.js/300x300" src="http://i1.tietuku.com/bc99179e2f40eafc.jpg" alt="..." style="height: 200px; width: 100%; display: block;">
      <div class="caption">
        <h2>管理页面</h2>
        <p>管理员由于管理用户的页面，普通用户不能访问。</p>
        <p><a href="../admin" class="btn btn-primary" role="button">进入</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img data-src="holder.js/300x300" src="http://i1.tietuku.com/298a4750a2148223.jpg" alt="..." style="height: 200px; width: 100%; display: block;">
      <div class="caption">
        <h2>下载源代码</h2>
        <p>此博客完全开源。你可以自由传播、分享源代码。</p>
        <p><a href="#" class="btn btn-primary" role="button">进入</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img data-src="holder.js/300x300" src="http://i1.tietuku.com/57544c8b6b745b82.jpg" alt="..." style="height: 200px; width: 100%; display: block;">
      <div class="caption">
        <h2>联系我们</h2>
        <p>点击下面的按钮，给我发电子邮件。</p>
        <p><a href="mailto:278004541@qq.com" class="btn btn-primary" role="button">进入</a> 
      </div>
    </div>
  </div>
</div>
    <div class="footer">
      <hr />
      <p class="text-muted text-center">Hello World</p>
    </div>
  </body>
</html>
</body>
</html>
