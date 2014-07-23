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
        <li class="active"><a href="./article">文章列表</a></li>
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
				<h1><strong>文章列表</strong> <small>文章列表页</small></h1>
			</div>
			<div class="row">
				<table class="table">
					<thead>
						<tr>
							<th>标题</th>
							<th>作者</th>
							<th>日期</th>
							<th>操作</th>
						</tr>
					</thead>
					<tbody>
						<?php  foreach ($res->result() as $row):  ?>
						<tr>
							<td><a href="./detail/<?php echo $row->id;?>"><?php echo $row->title; ?></a></td>
							<td><?php echo $row->name;?></td>
							<td><?php echo $row->time; ?></td>
							<td><?php if(isset($username)&&$row->name==$username): ?>
							<a href="./delarticle/<?php echo $row->id; ?>">删除</a>
							<?php endif; ?></td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>

    <div class="footer">
      <hr />
      <p class="text-muted text-center">Hello World</p>
    </div>
	</body>
</html>
