<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/Public/static/css/public.css">
	<link rel="stylesheet" type="text/css" href="/Public/static/css/login.css">
	<script type="text/javascript" src="/Public/static/js/jquery-2.2.2.min.js"></script>
	<script type="text/javascript" src="/Public/static/js/login.js"></script>
	<title></title>
</head>
<body>
 	<!-- <div class="header">
 		<div class="logo">
 			<a href="#" class="logo_link"></a>
 		</div>
 	</div> -->
 	<!-- 主体内容 -->
 	<div class="box">
 		<form class="wrap" action="/index.php/Admin/Login/login" method="post">
 			<div class="user">
 				<ul>
 					<li class="user_item user_on">用户登录</li>
 					<li class="user_item user_off">管理员</li>
 				</ul>
 			</div>
 			<div class="id">
 				<div><input name="username" class="inputArea inputArea_user" placeholder="用户账号"></div>
 				<div><input name="password" class="inputArea inputArea_password" type="password" placeholder="密码"></div>
 			</div>
 			<div class="code">
 				<div><input class="codeInput" placeholder="验证码"></input></div>
 				<div class="showCode"></div>
 			</div>
 			<div class="option">
 				<input type="submit" class="register">登录</div>
 				<!-- <div class="remember"><input type="checkbox">记住账号</div>
 				<div class="forget"><a href="#">忘记密码</a></div> -->
 			</div>
 		</form> 
 	</div>
</body>
</html>