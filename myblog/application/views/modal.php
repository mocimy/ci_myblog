<!DOCTYPE html>
<html>
<head>
   <title>Bootstrap 实例 - 模态框（Modal）插件</title>
   <link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
   <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
   <script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</head>
<body>

<div class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

		<div class="container">
			<div class="page-header">
				<h1><strong>发布文章</strong> <small>文章发布表单页</small></h1>
			</div>
			<div class="row">
				 <?php if(!isset($username)) :?><div class="alert alert-danger" role="alert">您尚未登陆，无法发表文章</div>  <?php endif; ?>
				<form method="POST" role="form">
					<div class="form-group">
						<label for="title">标题</label>
						<input type="text" class="form-control" id="title"  name="title" placeholder="填写文章标题"   <?php if(!isset($username)) echo 'disabled'; ?> >
					</div>
					<div class="form-group">
						<label for="content">内容</label>
						<textarea class="form-control" name="content" rows="12" <?php if(!isset($username)) echo 'disabled'; ?> ></textarea>
					</div>
					<button type="submit" class="btn btn-primary"  <?php if(!isset($username)) echo 'disabled'; ?> >发布</button>
				</form>
			</div>
		</div>


</body>
</html>
