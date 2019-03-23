<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign Up User</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }


	body {
		background-color: #FFFFFF;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;	
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
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
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#container {
		margin: 10px;		
		/*border: 1px solid #D0D0D0;*/
		/*box-shadow: 0 0 5px #D0D0D0;*/
	}

	p.footer {
		text-align: right;
		font-size: 12px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0px 10px 0 10px;
		margin: 20px 0 0 0;
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
		margin-bottom: -600px;
		margin-top: -15px;
	}

	#form-center button{
        background-color: #0099CC;
        color: white;
        padding: 14px 20px;
        margin: 8px 0px;
        border: none;
        font-size: 16px;
        width: 100%;
        opacity: 1;
	}

	input[type=text], input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #DDDDDD;
	}

	#form-center{
		width: 40%;
		border: 1px solid #DDDDDD;
		margin-left: 80px;
	}
    
    #form-center-right{
		width: 40%;
		border: 1px solid #DDDDDD;
		margin-left: 180px;
	}

	.col-md-6{
		margin: -38px 0px 0px;
	}

	.container-fluid-3{
		background-color: #33FFFF;
		padding-top: initial;
		color: #444444;
		font-size: 16px;
		margin-top: 580px;
	}
    
    .container-fluid-4{
		background-color: #FFFFFF;
		padding: initial;
		color: #444444;
		font-size: 17px;
		margin-bottom: 50px;
        float: right;
	}
    
</style>
</head>
<body>
<div id="body">
	<div class="navbar navbar-default" style="background-color:#CC99FF; height:10px; margin-bottom: initial; font-size: 12px;">
			<div class="container" >
				<ul class="collapse navbar-collapse nav navbar-nav navbar-left">
					<li><a href="#" style="color: #FFFF33;"><span class="glyphicon glyphicon-envelope"></span> abcdef@gmail.com</a></li>
					<li><a href="#" style="color: #FFFF33;"><span class="glyphicon glyphicon-earphone"></span> 0386.823.XXX</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="http://localhost/CI/index.php/Login_Controllers/dangnhap" style="color: #FFFF33;"><span class="glyphicon glyphicon-log-in"></span> Đăng nhập/Đăng ký</a></li>
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
        <h2 style="text-align: center;"><strong>Sửa thông tin tài khoản</strong></h2>	
				<hr>
			<div class="col-md-6" style="width: 100%; margin-top: 55px; margin-bottom: 140px;">
				
                <div id="form-center" class="col-md-6">				
				
						<form action="<?php echo base_url(); ?>Quantri_Controllers/sua_nguoidung/<?php echo $info['id']; ?>" method="POST">
						<h4><label for="user"><b>Tên tài khoản</b></label></h4>
						<input type="text" placeholder="Username" name="user" style="width: 100%;" value="<?php echo $info['username'] ?>" required>
						
						<br>

						<h4><label for="dpn"><b>Tên hiển thị</b></label></h4>
						<input type="text" placeholder="Display Name" name="displayname" style="width: 100%;" value="<?php echo $info['display_name'] ?>" required>
				
						<br>

						<h4><label for="pwd"><b>Mật khẩu cũ</b></label></h4>
						<input type="password" placeholder="Password" name="pass" style="width: 100%;" value="<?php echo $info['password'] ?>" required>
                        
                        <br>
                        
                        <h4><label for="eml"><b>Email</b></label></h4>
						<?php echo form_error('email'); ?><input type="text" placeholder="Email" name="email" value="<?php echo $info['email'] ?>" style="width: 100%;"required>
						
                        
				</div>
			</div>
            <div class="col-md-6" style="width: 100%; margin-top: -589px; margin-bottom: 140px; margin-left: 535px;">
				<div id="form-center-right" class="col-md-6">				
                        
						<h4><label for="pwd"><b>Mật khẩu mới</b></label></h4>
						<input type="password" placeholder="Password" name="passmoi" style="width: 100%;"required>
                        
                        <br>

						<h4><label for="pwd"><b>Xác nhận mật khẩu</b></label></h4>
						<?php echo form_error('c_passmoi'); ?><input type="password" placeholder="Confirm Password" name="c_passmoi" style="width: 100%;"required>

                        <br>

						<h4><label for="dc"><b>Địa chỉ</b></label></h4>
						<select name="address" style="width: 100%; display: inline-block; border: none; background: #DDDDDD; padding: 15px; margin: 5px 0 22px 0;">
							<option value="0">-- Chọn địa chỉ --</option>
							<?php
                            foreach($arr_Users1 as $local){ ?>
                                <option value="<?php echo $local['id'] ?>">|--<?php echo $local['ten_diagioi'] ?></option>
                            <?php
							}
				            ?>
						</select>

						<br>

						<h4><label for="dv"><b>Đơn vị</b></label></h4>
						<select name="donvi" style="width: 100%; display: inline-block; border: none; background: #DDDDDD; padding: 15px; margin: 5px 0 22px 0;">
							<option value="0">-- Chọn đơn vị --</option>
							<?php
                            foreach($arr_Users3 as $local){ ?>
                                <option value="<?php echo $local['id'] ?>">|--<?php echo $local['tendv'] ?></option>
                            <?php
							}
				            ?>
						</select>
				</div>
			</div>
            <div>
			     <input type="submit" class="btn btn-primary" value="Đăng ký" style="width: 60%; height: 45px; margin-left: 270px; margin-top: -190px;"/>
			</div>
            </form>
  	</div>
</div>
</body>
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
</html>