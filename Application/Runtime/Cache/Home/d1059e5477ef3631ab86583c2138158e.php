<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<title>upload test</title>
	<script type="text/javascript" src="/tp323c/Public/js/jquery-1.9.1.min.js"></script>
</head>
<body>
<!-- <form action="/tp323c/Home/Upload/upload" enctype="multipart/form-data" method="post" > -->
<form action="" method="post" enctype="multipart/form-data"> 
<!-- <input type="text" name="name" /> -->
<input type="file" name="file" />
<input type="submit" value="提交" >
</form>
<script type="text/javascript">
	$(function(){
		data = $("input[name=file]").val();
		console.log('data',data);
		$("input[name=file]").change(function(){
			$.ajax({
				url:"<?php echo U('Home/upload/upload');?>",
				method: "post",
				// fileElementId:"avatar_uploder",
				data:{},
				success:function(obj){
					console.log('s',obj)
				},
				complete:function(obj){
					console.log('c',obj)
				},
				error:function(){
					console.log('e')
				}
			})
		})
	})
</script>
</body>
</html>