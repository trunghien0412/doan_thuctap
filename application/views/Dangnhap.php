<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login User</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<style type="text/css">

	.container{
		width: 100%;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #FFFFFF;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #F9F9F9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#form-left{
		width: 50%;
		margin-top: 130px;
		padding-right: 0px;
		text-align: center;
		float: inherit;
		padding-left: 0px;
	}

	#form-right{
		width: 47%;
		border: 1px solid #DDDDDD;
		float: right;
	}

	#form-right button{
        background-color: #0099CC;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        font-size: 16px;
        width: 100%;
        opacity: 1;
	}

	p.footer {
		text-align: right;
		font-size: 12px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	input[type=text], input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #DDDDDD;
	}

	.dangky{
    display: block;  
    font-size: 16px;
    color: #288ad6;
    text-align: center;
    margin: 10px auto 10px;
    width: 200px;
	}

	.container-fluid{
		background-color: #99FFFF;
		/*color: #FFFF33;*/
	}

	.container-fluid-1{
		background-color: #33FFFF;
		padding: initial;
		font-size: 17px;
	}

	.container-fluid-2{
		background-color: #FFFFFF;
		padding: initial;
		color: #444444;
		font-size: 17px;
		margin-bottom: 520px;
	}

	.container-fluid-3{
		background-color: #33FFFF;
		padding: initial;
		color: #444444;
		font-size: 16px;
	}

	</style>
</head>
<div id="body">
	<div class="navbar navbar-default" style="background-color:#CC99FF; height:10px; margin-bottom: initial; font-size: 12px;">
			<div class="container" >
				<ul class="collapse navbar-collapse nav navbar-nav navbar-left">
					<li><a href="#" style="color: #FFFF33;"><span class="glyphicon glyphicon-envelope"></span> abcdef@gmail.com</a></li>
					<li><a href="#" style="color: #FFFF33;"><span class="glyphicon glyphicon-earphone"></span> 0386.823.XXX</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#" style="color: #FFFF33;"><span class="glyphicon glyphicon-log-in"></span> Đăng nhập/Đăng ký</a></li>
				</ul>
			</div>
	</div>
	<nav id="navigation" class="navbar navbar" style="margin-bottom: initial;"><!--data-spy="affix" data-offset-top="500"-->
		<div class="container-fluid-1">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="fa fa-bars fa-2x"></span>                      
				</button>
				<a class="navbar-brand" href="http://localhost/CI" style="color: #0099CC; font-weight: 600;">ABC---XYZ</a>
			</div>
			<div>
				<div class="collapse navbar-collapse" id="myNavbar" >
					<ul class="nav navbar-nav">
						<li><a href="http://localhost/CI" style="color: #0099CC; font-weight: 600;">TRANG CHỦ</a></li>
						<li><a href="" style="color: #0099CC; font-weight: 600;">GIỚI THIỆU</a></li>
						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: #0099CC; font-weight: 600;">CHỨC NĂNG<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="http://localhost/CI/index.php/Main/taobieumau"style="color: #0099CC; font-weight: 600;">TẠO BIỂU MẪU</a></li>
					</ul>
						</li>
						<li><a href="#footer" style="color: #0099CC; font-weight: 600;">LIÊN HỆ</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right" style="margin-bottom: -13px;">
						<li>
							<li><input type="search" placeholder="Search" name="s" style="position: relative; color: #0099CC; min-height: 50px; background-color: #FFFFFF; border: 1px solid #66FFFF; border-radius: 5px; margin-bottom: 0px;" required></li>
							<li><button class="search-submit btn btn-primary" type="submit" style="height: 50px;"><i class="fa fa-search"></i></button></li>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>	
	<div class="container-fluid-2">
		<!--<img class="img" src="img/background1.jpg" alt="img_front">-->	
		<div class="col-md-6" style="width: 100%; margin-top: 80px;">
			<div id="form-left" class="col-md-6">				
					<h2 style="font-size: 40px;">Hãy đăng ký để có quyền truy cập</h2>
					<a class="dangky" href="http://localhost/CI/index.php/Login_Controllers/dangky" style="background: #0099CC; color: white; padding: 12px; border-radius: 5px;"> Đăng ký</a>
			</div>
			<div id="form-right" class="col-md-6">			
				<h2><strong>Đăng nhập</strong></h2>
				<hr>
				<form method="POST">
					<h4><b>Username</b></h4>
						<div class="input-group input-group-lg">
							<span class="input-group-addon" >
								<span class="glyphicon glyphicon-user" ></span>
							</span>
							<input class="form-control" type="text" placeholder="Username" name="username" style="width: 100%; margin-top: initial;"required>
						</div>					
					<br>
					<h4><b>Password</b></h4>
						<div class="input-group input-group-lg">
							<span class="input-group-addon" >
								<span class="glyphicon glyphicon-lock" ></span>
							</span>
							<input class="form-control" type="password" placeholder="Enter Password" name="password" style="width: 100%; margin-top: initial;" required>
						</div>
					<label style="margin-top: 20px;">
						<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
					</label>
						<div>
							<input type="submit" class="btn btn-primary" value="Đăng nhập" style="width: 100%; margin-bottom: 10px; height: 45px;"/>
						</div>
				</form>
			</div>
		</div>
  	</div>
</div>
<br>
<br>
<footer id="footer" class="footer">
	<div class="container-fluid-3">
		<div class="row">
			<div class="col-md-4" style="text-align: justify;">
				<h1><strong>ABC---XYZ</strong></h1>
				<p>Group One là học viên tiên phong tại Việt Nam áp dụng phương pháp đào tạo mới, trong lĩnh vực đào tạo CNTT, đáp ứng mọi nhu cầu của doanh nghiệp</p>
			</div>
			<div class="col-md-4" style="text-align: justify;">
				<h1><strong>LIÊN HỆ</strong></h1>
				<span class="glyphicon glyphicon-map-marker"> Đồng Tháp</span>
				<div class="clearfix"></div>
				<span class="glyphicon glyphicon-earphone"> 0386.823.XXX</span>
				<div class="clearfix"></div>
				<span class="glyphicon glyphicon-envelope"> abcdef@gmail.com</span>
			</div>
			<div class="col-md-4" style="text-align: justify;">
				<h1><strong>THÔNG TIN</strong></h1>
				<div class="clearfix"></div>
				<span>Khóa Học</span>
				<div class="clearfix"></div>
				<span>Giới Thiệu</span>
				<div class="clearfix"></div>
				<span>Liên Hệ</span>
			</div>
		</div>
		<hr>
		<div class="row" style="text-align: justify;">
			<p style="text-align: center;">Copyright 2018. Designed by <span style="color: #caca36">Group One</span> Studio. All Rights Reserved.</p>
		</div>
	</div>
</footer>