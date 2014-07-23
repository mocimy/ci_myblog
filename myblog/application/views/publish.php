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
        <li class="active"><a href="./publish">发布文章</a></li>
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
				<h1><strong>发布文章</strong> <small>文章发布表单页</small></h1>
			</div>
			<div class="row">
				 <?php if(!isset($username)) :?><div class="alert alert-danger" role="alert">您尚未登陆，无法发表文章</div>  <?php endif; ?>
				<form method="POST" role="form" target="id_iframe">
					<div class="form-group">
						<label for="title">标题</label>
						<input type="text" class="form-control" id="title"  name="title" placeholder="填写文章标题"   <?php if(!isset($username)) echo 'disabled'; ?> >
					</div>
					<div class="form-group">
						<label for="content">内容</label>
						<textarea class="form-control" name="content" rows="12" <?php if(!isset($username)) echo 'disabled'; ?> ></textarea>
					</div>
					<input type=hidden name="time" value="<?php echo date("Y/m/d"); ?>" >
					<?php if(isset($username)) :?><input type=hidden name="name" value="<?php echo $username; ?>" ><?php endif; ?>
					<button type="submit" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"  <?php if(!isset($username)) echo 'disabled'; ?> >发布</button>
				</form>
			</div>
		</div>
		<iframe id="id_iframe" name="id_iframe" style="display:none;"></iframe> 

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">发布成功</h4>
      </div>
      <div class="modal-body">
       恭喜！发布成功！<a href="./article">点击这里跳转至文章列表</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
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
