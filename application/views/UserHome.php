<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>User Home</title>
	<meta charset="utf-8">
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

	p.footer {
		text-align: right;
		font-size: 12px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;		
		/*border: 1px solid #D0D0D0;*/
		/*box-shadow: 0 0 5px #D0D0D0;*/
	}

	.container-fluid-2{
		background-color: #33FFFF;
		padding: initial;
		color: #444444;
		font-size: 16px;
	}

	.container-fluid-1{
		background-color: #33FFFF;
		padding: initial;
		font-size: 17px;
	}

	.col-md-12{
		text-align: center;
	}

	.btn-xl {
		font-weight: 600;
    color: #FFFFFF;
    background-color: #0099CC;
    border-color: #0099CC;
    border-radius: 5px;
    font-size: 20px;
    padding: 14px 30px;
		margin-bottom: 30px;
		margin-top: 60px;
	}

	.intro-heading {
    text-transform: uppercase;
    font-weight: 600;
    font-size: 46px;
    line-height: 75px;
    margin-bottom: 85px;
	}

	.intro-heading-1 {
    text-transform: uppercase;
    font-weight: 600;
    font-size: 46px;
    line-height: 75px;
    margin-bottom: 25px;
	}

	/* .photo-crop {
    background-image: url("../img/your-questions.jpg");
    background-size: contain;
    min-height: 330px;
	} */

	.text-center{
		margin-bottom: 20px;
	}

	.section-body{
		font: 400 16px/1.667 "Open Sans",sans-serif;
		/* font-size: 18px; */
		width: 80%;
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
					<li><a href="index.php/Login_Controllers/dangnhap" style="color: #FFFF33;">
					Xin chào ,<span class="glyphicon glyphicon-log-in"></span> Đăng xuất</a></li>
				</ul>
			</div>
	</div>
	<nav id="navigation" class="navbar navbar" style="margin-bottom: initial;"> <!--data-spy="affix" data-offset-top="10"-->
		<div class="container-fluid-1">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="fa fa-bars fa-2x"></span>                      
				</button>
				<a class="navbar-brand" href="#" style="color: #0099CC; font-weight: 600;">ABC---XYZ</a>
			</div>
			<div>
				<div class="collapse navbar-collapse" id="myNavbar" >
					<ul class="nav navbar-nav">
						<li><a href="#section1" style="color: #0099CC; font-weight: 600;">TRANG CHỦ</a></li>
						<li><a href="#section2" style="color: #0099CC; font-weight: 600;">GIỚI THIỆU</a></li>
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
	<div id="section1">
		<div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin: 0px;">
			<div class="carousel-inner">
				<div class="item active">
				<img src="img/4k-background.jpg" alt="4k-background.jpg" style="height: 550px; width: 100%;">
					<div class="carousel-caption">
						<div class="intro-heading" data-wow-duration="700ms" data-wow-delay="500ms" >Tạo những biểu mẫu sinh động</div>
						<p data-wow-duration="1000ms" class="wow slideInRight animated">.</p>
							<ul class="fa-ul text-center">
								<a href="https://twitter.com/" style="color: white;"><i class="fa fa-twitter-square" style="font-size: 28px;"></i></a>
								<a href="https://vi-vn.facebook.com/login/" style="color: white;"><i class="fa fa-facebook-square" style="font-size: 28px;"></i></a>
								<a href="https://gmail.com/" style="color: white;"><i class="fa fa-google-plus fa-lg" style="font-size: 28px;"></i></a>
								<li><a href="http://localhost/CI/index.php/Main/taobieumau" class="page-scroll btn btn-xl">Chuyển đến Form Biểu mẫu</a></li>
							</ul>
					</div>
				</div>
				<div class="item">
					<img src="img/background-slideshow.jpg" alt="background-slideshow.jpg" style="height: 550px; width: 100%;">
					<div class="carousel-caption">
					<div class="intro-heading-1" data-wow-duration="700ms" data-wow-delay="500ms">NHỮNG BIỂU MẪU TỐT NHẤT</div>
						<p data-wow-duration="1000ms" class="wow slideInRight animated">A</p>
						<p data-wow-duration="1000ms" class="wow slideInRight animated">B</p>
						<p data-wow-duration="1000ms" class="wow slideInRight animated">C</p>
						<!--<p data-wow-duration="1000ms" class="wow slideInRight animated">Tiếp cận công nghệ mới, chuyên sâu.</p>
						<p data-wow-duration="1000ms" class="wow slideInRight animated">Dự án thực tế, kihn nghiệm.</p>-->
						<ul class="fa-ul text-center">
							<a href="https://twitter.com/" style="color: white;"><i class="fa fa-twitter fa-lg" style="font-size: 28px;"></i></a>
							<a href="https://vi-vn.facebook.com/login/" style="color: white;"><i class="fa fa-facebook fa-lg" style="font-size: 28px;"></i></a>
							<a href="https://gmail.com/" style="color: white;"><i class="fa fa-google-plus fa-lg" style="font-size: 28px;"></i></a>
							<li><a href="http://localhost/CI/index.php/Main/taobieumau" class="page-scroll btn btn-xl">Chuyển đến Form Biểu mẫu</a></li>
						</ul>
					</div>
				</div>
			</div>
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<div id="section2" class="container">
  	<div class="row">
		<!--<div class="col-md-5">
			<img class="team1" src="img/team1.jpg" alt="team1">
			<img class="team2 collapse" src="img/team2.jpg" alt="team2">
		</div>-->
			<div class="col-md-12">
				<h2><strong>Nhận các câu trả lời nhanh chóng</strong></h2>
				<p style="font-size: 20px;">Lên kế hoạch cho chuyến cắm trại tiếp theo, quản lý đăng ký sự kiện, chuẩn bị một cuộc thăm dò nhanh, thu thập địa chỉ email cho bản tin, tạo một trò chơi giải đố nhanh và hơn thế nữa.</p>
			</div>
			<br>
			<div class="col-md-4" style="text-align: center;">
				
			</div>
			<div class="col-md-4" style="text-align: center; margin-left: -190px;">
					<section class="section-questions position-rel js-vertical-wrapper" id="section-q-a">
								<div class="section-centered maia-cols">
									<div class="photo-crop" ><img src="img/way-more.png" alt="way-more.png"></div>
								</div>
					</section>
			</div>
			<div class="col-md-4" style="text-align: center;">
				
			</div>
  	</div>
	<div id="section_dnb" class="container">
		<div class="row">
			<hr>
			<h2 style="text-align: center;"><strong>Hỏi và đáp theo cách của bạn</strong></h2>
			<p style="text-align: center; font-size: 20px;">Chọn từ một loạt các tùy chọn câu hỏi, từ câu hỏi trắc nghiệm đến danh sách 
			thả xuống theo thang tuyến tính. Thêm hình ảnh và video trên YouTube hoặc sáng tạo hơn bằng tính 
			năng <a href="https://support.google.com/docs/answer/141062?hl=vi&amp;ref_topic=6063584">phân nhánh trang và logic bỏ qua câu hỏi.</p>
			<br>
			<div class="col-md-4" style="text-align: center;">
				
			</div>
			<div class="col-md-4" style="text-align: center; margin-left: -125px;">
					<section class="section-questions position-rel js-vertical-wrapper" id="section-q-a">
								<div class="section-centered maia-cols">
									<div class="photo-crop" ><img src="img/your-questions.jpg" alt="your-questions.jpg"></div>
								</div>
					</section>
			</div>
			<div class="col-md-4" style="text-align: center;">
				
			</div>
		</div>
	</div>
		<div id="section3" class="container">
			<div class="row">
				<hr><br>
				
			</div>
		</div>
		</div>
	</div>
</div>
<br>
<br>
<footer id="footer" class="footer">
	<div class="container-fluid-2">
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

