            <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Quản trị Người dùng</title>
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
		margin-bottom: 50px;
	}

	li{
		list-style-type: none;
		text-align: left;
		color: white;
        
	}

	.container-fluid-3{
		background-color: #33FFFF;
		padding-top: initial;
		color: #444444;
		font-size: 16px;
		margin-top: 200px;
	}

	.sidebar-left{
		background: #337AB7;
		padding-right: 15px;
		padding-left: 15px;
		margin-top: -21px;
		margin-left: initial;
		width: 200px;
		color: white;
        height: 750px;
	}

	.col-md-10{
		margin-left: 200px;
        margin-top: -730px;
	}

	.col-md-6{
		width: 30%;
		padding: 5px 5px 5px 5px;
	}

	button {
		color: #444;
		border: none;
		outline: 0;
		display: inline-block;
		padding: 8px;
		background-color: #33FFFF;
		text-align: center;
		cursor: pointer;
		width: 100%;
	}
    
    input[type=text] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #DDDDDD;
	}

	.row-1{
		margin: -10px 0 0 100px;
	}

	li:hover{
		background: #3A5FCD;
	}

</style>
</head>
<body>
<div id="body">
	<div class="navbar navbar-default" style="background-color:#CC99FF; height:10px; margin-bottom: initial; font-size: 12px;">
			<div class="container" >
				<ul class="collapse navbar-collapse nav navbar-nav navbar-left" style="margin-top: 14px;">
					<a href="#" style="color: #FFFF33;"><span class="glyphicon glyphicon-envelope"></span> abcdef@gmail.com</a>
					<a href="#" style="color: #FFFF33;"><span class="glyphicon glyphicon-earphone"></span> 0386.823.XXX</a>
				</ul>
				<ul class="nav navbar-nav navbar-right" style="margin-top: 14px;">
					<a href="http://localhost/CI/index.php/Login_Controllers/login" style="color: #FFFF33;"><span class="glyphicon glyphicon-log-in"></span> Đăng nhập/Đăng ký</a>
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
	<div class="row" style="margin-bottom: -240px;">
			<div id="panne_left" class="col-md-2" style="padding-top: 20px;">
				<div class="sidebar-left">
					<div class="row">
						<div class="col-md-6">
							<img class="avatar_admin" src="img/avatar.png" alt="avatar">
						</div>
						<div class="col-md-6-1" style="width: 400px;">
							<div class="col-md-6" style="padding-top: 5px;">
								<p>Xin chào, Admin</p>
							</div>
						</div>
					</div>
					<div class="row" style="text-align: center;padding-top: 5px;">
						<i class="fa fa-envelope-o fa-2x"></i>
						<i class="fa fa-user-o fa-2x"></i>
						<i class="fa fa-cog fa-2x"></i>
					</div>
					<div class="clearfix"></div>
					<div class="row" style="text-align: center;">
						
					</div>
					<div class="clearfix"><hr></div>
                    <a href="" style="text-decoration: none;"><li style="text-align: left; height: 30px; padding-top: 5px; font-size: 16px; margin-bottom: 10px; margin-left: 14px;"> Dashboard</li></a>
					<ul class="sidebar-menu" style="margin-left: -40px;">
						<div class="btn-group dropright">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background:#337AB7;color: white; font-size: 16px; margin-bottom: 10px;"> Quản lý người dùng</button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                     <li><a class="dropdown-item" href="http://localhost/CI/index.php/Quantri_Controllers/quanly_nguoidung">Danh sách người dùng</a></li>
                                </div>
                        </div>
                        <div class="btn-group dropright">
						  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background:#337AB7;color: white; font-size: 16px; margin-bottom: 10px;"> Quản lý biểu mẫu</button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a href="" style="text-decoration: none;"><li class="bieumau" style="height: 30px; padding-top: 5px; font-size: 16px;"> </li></a>
				          </div>
                        </div>
                        <div class="btn-group dropright">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background:#337AB7;color: white; font-size: 16px; margin-bottom: 10px;"> Quản lý địa giới</button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="http://localhost/CI/index.php/Diagioi_Controller/quanly_diagioi">Danh sách địa giới</a></li>
                                <li><a class="dropdown-item" href="http://localhost/CI/index.php/Diagioi_Controller/them_diagioi">Thêm mới địa giới</a></li>
                              </div>
                        </div>
                        <div class="btn-group dropright">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background:#337AB7;color: white; font-size: 16px; margin-bottom: 10px;"> Quản lý đơn vị</button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="http://localhost/CI/index.php/Donvi_Controller/list_donvi">Danh sách đơn vị</a></li>
                                <li><a class="dropdown-item" href="http://localhost/CI/index.php/Donvi_Controller/them_donvi">Thêm mới đơn vị</a></li>
                              </div>
                        </div>		
					</ul>
				</div>
			</div>
            <div class="col-md-10">
			<div class="row-1" >
				<h2><strong>Thêm địa giới</strong></h2>
                    <form action="" method="POST">
    					<select name="id_parent" style="width: 80%; display: inline-block; border: none; background: #DDDDDD; padding: 15px; margin: 5px 0 22px 0;">
                            <option value="0">--- Chọn cấp trên ---</option>
                            <?php
                            foreach($arr_Users2 as $local){ ?>
                                <option value="<?php echo $local['id'] ?>">|--<?php echo $local['ten_diagioi'] ?></option>
                            <?php
							}
				            ?>
    					</select>   
                        <h4 style="color: black;">Tên địa giới</h4><input type="text" name="diagioi" style="width: 80%;"required/>
                        <input type="submit" class="btn btn-primary" value="Tạo" style="width: 30%; height: 45px; margin-left: 510px;"/>
                    </form>
            </div>
            </div>
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