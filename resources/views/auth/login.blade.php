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
	<meta name="csrf-token" content="{{ csrf_token()}}" />
	<!-- 在移动设备浏览器上，通过为视口（viewport）设置 meta 属性为 user-scalable=no 可以禁用其缩放（zooming）功能。
        这样禁用缩放功能后，用户只能滚动屏幕，就能让你的网站看上去更像原生应用的感觉。注意，这种方式不推荐所有网站使用，需看情况而定-->
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">-->

	<title>@yield('title','Gavin\' Blog')</title>
	<style>
		#particles{
			width: 100%;
			height: 100%;
			background-color: #b61924;
			background-image: url('');
			background-size: cover;
			background-position: 50% 50%;
			background-repeat: no-repeat;
			position: absolute;
			top: 0;
			z-index: -1;
		}

	</style>
	<!-- Bootstrap css-->
	<link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<link href="//cdn.bootcss.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Login</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="/auth/login">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail Address</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> Remember Me
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary" style="margin-right: 15px;">
									Login
								</button>

								<a href="/password/email">Forgot Your Password?</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="particles">

</div>

<footer id="footer">
	<div class="container">
		<div class="copyright" itemscope>
			©  2014 -
			{{--©2015 isgavin.me 备案号:津ICP备15004268号--}}
			<span itemprop="copyrightYear">2015</span>
			<a itemprop="copyrightHolder" href="http://www.isgavin.me">Gavin</a>
		</div>
		<div class="record">
			<a href="http://www.miibeian.gov.cn/" target="_blank">津ICP备15004268号</a>
		</div>
	</div>
</footer>

<!-- jquery 使用bootstrap等其他框架,插件必须导入的-->
<script src="//cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>
<!-- bootstrap的主要js-->
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!-- velocity 动画切换的jQuery插件-->
<script src="//cdn.bootcss.com/velocity/1.2.2/velocity.min.js"></script>
<script src="//cdn.bootcss.com/particles.js/2.0.0/particles.min.js"></script>
{{--<script src="//cdn.bootcss.com/velocity/1.2.2/velocity.ui.min.js"></script>--}}

<script>
	particlesJS.load('particles', '{{asset('js/particles.json')}}', function() {
		console.log('callback - particles.js config loaded');
	});
</script>

</body>
</html>