<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<title>limit input</title>
	<script type="text/javascript" src="/tp323c/Public/js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="/tp323c/Public/js/function.js"></script>
	<script type="text/javascript" src="/tp323c/Public/js/common.js"></script>
	<style type="text/css">
		.test {
			height: 20px;
			background: red ;
		}
	</style>
</head>
<body>
<dd><span id="inputnums_text">还可以输入</span><strong style="color: rgb(102, 102, 102); font-family: Constantia, Georgia, Arial; font-size: 20px;" id="inputnums">26</strong>字</dd>
<textarea id="content" maxlength="26"></textarea>
<input type="text" maxlength="4">
<div class="test">
	<p>hello</p>
</div>
<div class="test">
	<p>hello</p>
</div>
<div class="test">
	<p>hello</p>
</div>
<div class="test">
	<p>hello</p>
</div>
<div>hello</div>
<script type="text/javascript">
	var c = document.getElementsByClassName("test");
	// c = $(c)
	var i = document.getElementById("inputnums_text");
	// i = $(i)
	var t = document.getElementsByTagName('div');
	var cc = $('.test');
	var ii = $('#inputnums_text')
	var tt = $('div');
	var ccc = $C('test')
	console.log('c',c);
	console.log('cc',cc)
	console.log('ccc',ccc)
	console.log('i',i);
	console.log('ii',ii)
	console.log('t',t);
	console.log('tt',tt)
	t.style.color="blue";
</script>
</body>
</html>