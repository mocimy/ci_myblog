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

<?php if(isset($username)&&$username=='root'): ?>
<div class="container">
      <div class="page-header">
        <h1><strong>管理页面</strong> <small>管理用户页</small></h1>
      </div>
      <div class="row">
        <table class="table">
          <thead>
            <tr>
              <th>用户名</th>
              <th>组别</th>
              <th>电子邮件</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
            <?php  foreach ($user1->result() as $row):  ?>
            <tr>
              <td><?php echo $row->username; ?></td>
              <td>正式用户</td>
              <td><?php echo $row->email; ?></td>
              <td><a href="./del_user/<?php echo $row->id; ?>">删除</a> </tr>
            <?php endforeach; ?>

            <?php  foreach ($user2->result() as $row):  ?>
            <tr>
              <td><?php echo $row->username; ?></td>
              <td>未批准用户</td>
              <td><?php echo $row->email; ?></td>
              <td><a href="./allow_user/<?php echo $row->id; ?>">批准</a> <a href="./refuse_user/<?php echo $row->id; ?>">拒绝</a> </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
<?php else: ?>
    <div class="container">
      <div class="page-header">
        <h1><strong>您没有权限访问此页面。</strong> </h1>
      </div>
      </div>

<?php endif; ?>
    <div class="footer">
      <hr />
      <p class="text-muted text-center">Hello World</p>
    </div>
  </body>
</html>
