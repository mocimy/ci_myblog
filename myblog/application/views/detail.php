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
      <a class="navbar-brand" href="../welcome/1">My Blog</a>
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
		<div class="container">
			<div class="page-header">
			<h1><strong><?php echo $res->title; ?></strong> <small>文章查看页</small></h1>
			</div>
			<div class="well">
				<?php echo $res->content; ?>
			</div>

			<form  method="POST" class="form-horizontal well" role="form">
				<div class="form-group">
					<div class="col-sm-12">
						<input type="text" class="form-control" id="name" name="name" placeholder="用户名">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<textarea class="form-control" rows="3" name="content" placeholder="评论"></textarea>
					</div>
				</div>
				<input type=hidden name="time" value="<?php echo date("Y/m/d"); ?>" >
				<div class="form-group">
					<div class="col-sm-10">
						<button type="submit" class="btn btn-default">提交</button>
					</div>
				</div>
			</form>

	<?php  foreach ($review->result() as $row):  ?>
			<div class="panel panel-info">
				<div class="panel-heading"><?php echo $row->name;?></div>
				<div class="panel-body">
					<?php echo $row->content;?>	
				</div>
				<div class="panel-footer"><?php echo $row->time;?></div>
			</div>
	<?php endforeach; ?>	
		</div>

    <div class="footer">
      <hr />
      <p class="text-muted text-center">Hello World</p>
    </div>
	</body>
</html>
