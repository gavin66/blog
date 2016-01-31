<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!--移动设备优先,为了确保适当的绘制和触屏缩放，需要在 <head> 之中添加 viewport 元数据标签。-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
	<meta name="renderer" content="webkit">
	<meta name="keywords" content="博客,个人博客,Gavin的博客">
	<meta name="description" content="这是Gavin的个人博客">
	<!-- Laravel token 存放在 meta 标签中, 然后使用 jQuery 将它加入到所有的请求头中-->
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<!-- 在移动设备浏览器上，通过为视口（viewport）设置 meta 属性为 user-scalable=no 可以禁用其缩放（zooming）功能。
        这样禁用缩放功能后，用户只能滚动屏幕，就能让你的网站看上去更像原生应用的感觉。注意，这种方式不推荐所有网站使用，需看情况而定-->
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">-->

	<title>@yield('title','Gavin\' Blog')</title>

	<!-- Bootstrap css-->
	<link href="{{ style_link('http:','//cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css',
		'/plug-in/bootstrap-3.3.5/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="/style/signInUp.css" rel="stylesheet">
</head>
<body>

<div class="index-main">
	<div class="index-main-body">
		<div class="header">
			<p>Blog</p>
		</div>
		<div class="body">
			<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#sign-in" aria-controls="sign-in" role="tab" data-toggle="tab">登录</a></li>
				<li role="presentation"><a href="#sign-up" aria-controls="sign-up" role="tab" data-toggle="tab">注册</a></li>
			</ul>
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="sign-in">
					<form id="sign-in-form" action="">
						<div class="group-inputs">
							<input type="email" class="form-control-blog" name="email" placeholder="邮箱">
							<input type="password" class="form-control-blog" name="password" placeholder="密码">
							<input type="text" class="form-control-blog" name="captcha" placeholder="验证码">
						</div>
						<div class="wrapper-button">
							<button type="button" class="btn btn-primary btn-lg btn-block">登录</button>
						</div>
						<div class="remember-wrapper">

						</div>
						<div class="other-signin-wrapper">

						</div>
					</form>
				</div>
				<div role="tabpanel" class="tab-pane" id="sign-up">
					<form id="sign-up-form" action="">
						<div class="group-inputs">
							<input type="text" class="form-control-blog" name="fullname" placeholder="姓名">
							<input type="email" class="form-control-blog" name="email" placeholder="邮箱">
							<input type="password" class="form-control-blog" name="password" placeholder="密码">
							<input type="text" class="form-control-blog" name="captcha" placeholder="验证码">
						</div>
						<div class="wrapper-button">
							<button type="button" class="btn btn-primary btn-lg btn-block">注册</button>
						</div>
						<div class="other-signin-wrapper">

						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- 版权等信息 -->
<footer id="footer">
	<div class="container">
		<div class="copyright" itemscope itemtype="http://www.isgavin.me">
			©  2014 -
			<span itemprop="copyrightYear">2016</span>
			<a itemprop="copyrightHolder" href="http://www.isgavin.me">Gavin</a>
		</div>
		<div class="record">
			<a href="http://www.miibeian.gov.cn/" target="_blank">津ICP 备 15004268号</a>
		</div>
	</div>
</footer>

<!-- 粒子背景 -->
<div id="particles-js"></div>

<script src="/script/config/requireJS-config.js"></script>
<script data-main="/script/signInUp.js" src="/plug-in/RequireJS/require.min.js"></script>

</body>
</html>