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
      <a class="navbar-brand" href="./welcome/1">My Blog</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="./article">文章列表</a></li>
        <li><a href="./publish">发布文章</a></li>
      </ul>
      <form class="navbar-form navbar-left" role="search" action="http://www.baidu.com/baidu" >
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search" name=word>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <?php   if(!isset($username))  {   ?>   <li><a href="./login">登陆</a></li>
        <?php }   else  {   ?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $username; ?> <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="./delcook">登出</a></li>
          </ul>
        </li>
        <?php  }  ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
			<div class="page-header">
				<h1><strong>用户页面</strong> <small>进行登陆或注册</small></h1>
			</div>
<div class="row">
  <div class="col-xs-5">
	<br/><br/>
    <?php if(isset($username)) :?><div class="alert alert-danger" role="alert">您已登陆，快去发表文章吧</div>  <?php endif; ?>
	<br/><br/>
     <form method="POST" role="form">
          <div class="form-group">
            <label for="title">用户名</label>
            <input type="text" class="form-control" id="username"  name="username" <?php if(isset($username)) echo 'disabled'; ?> >
          </div>
			<div class="form-group">
            <label for="title">密码</label>
            <input type="password" class="form-control" id="password"  name="password" <?php if(isset($username)) echo 'disabled'; ?> >
          </div>
          <button type="submit" class="btn btn-primary"  <?php if(isset($username)) echo 'disabled'; ?> >登陆</button>
        </form>
  </div>
  <div class="col-xs-2"></div>
  <div class="col-xs-5">
  <h2>没有账号？没关系，立即注册一个。</h2>
        <form method="POST" role="form">
          <div class="form-group">
            <label for="title">用户名</label>
            <input type="text" class="form-control" id="username"  name="new_username">
          </div>
      <div class="form-group">
            <label for="title">密码</label>
            <input type="password" class="form-control" id="password"  name="new_password">
          </div>
      <div class="form-group">
            <label for="title">电子邮件</label>
            <input type="text" class="form-control" id="email"  name="email">
          </div>
          <button type="submit" class="btn btn-primary" >注册</button>
        </form>
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
