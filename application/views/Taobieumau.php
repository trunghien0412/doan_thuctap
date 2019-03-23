<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CI</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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

	#body {
		
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

	.container-fluid-1{
		background-color: #33FFFF;
		padding: initial;
		font-size: 17px;
	}

    .container-fluid-2{
		background-color: #33FFFF;
		padding: initial;
		color: #444444;
		font-size: 16px;
		margin-top: 50px;
	}
    
    .docs-homescreen-empty-section-notice{
        background-color: #EEEEEE;
        border-radius:2px;
        box-shadow: 5px 5px 4px rgba(0,0,0,.1);
        text-align: center;
        height: 120px;
    }

	.docs-homescreen-empty-section-notice-1{
		background-color: #394242;
	}
	.container-fluid-3{
		background-color: #33FFFF;
		padding-top: initial;
		color: #444444;
		font-size: 16px;
		margin-top: 120px;
	}

	.docs-hs-tmp-sc-showcase .docs-homescreen-grid-header-title.docs-homescreen-grid-header-title {
    	color: rgba(255,255,255,.87);
    	font-size: 16px;
    	font-weight: 500;
    	line-height: 1;
    	margin: 0;
    	padding: 0;
	}

	.container-1{
		margin-top: 5px;
		
	}

	.svg-wrapper {
		margin-top: 0;
		position: relative;
		width: 152px;
		height: 114px;
		display: inline-block;
		border-radius: 3px;
		margin-left: 5px;
		margin-right: 5px;
		background: #CCFFFF;
	}

	#shape {
		stroke-width: 6px;
		fill: transparent;
		stroke: #009FFD;
		stroke-dasharray: 85 400;
		stroke-dashoffset: -220;
		transition: 1s all ease;
	}

	.svg-wrapper:hover #shape {
		stroke-dasharray: 50 0;
		stroke-width: 3px;
		stroke-dashoffset: 0;
		stroke: #06D6A0;
	}

	#text {
  		margin-top: -35px;
  		text-align: center;
	}

	#text a {
  		color: white;
  		text-decoration: none;
  		font-weight: 100;
  		font-size: 1.1em;
	}

	.docs-hs-tmp-widthwrapper {
		margin: -110px 0 0 0;
		position: relative;
		width: 100%;
		height: 230px;
		text-align: center;
	}

	.docs-homescreen-itemholder-content {
 		margin-left: 80px;
    	width: 1515px;
	}

	.docs-homescreen-templates-templateview {
    	display: inline-block;
    	margin: 0 0 24px 0;
    	vertical-align: top;
	}

	img:hover{
		border: 1px solid blue;
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
					<li><a href="http://localhost/CI/index.php/Login_Controllers/login" style="color: #FFFF33;"><span class="glyphicon glyphicon-log-in"></span> Đăng nhập/Đăng ký</a></li>
				</ul>
			</div>
	</div>
	<nav id="navigation" class="navbar navbar" style="margin-bottom: -110px;"><!--data-spy="affix" data-offset-top="500"-->
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
	<div class="container-1">
		<div class="docs-homescreen-empty-section-notice-1" tabindex="0" style="height: 250px;">
			<div class="docs-homescreen-empty-section-notice-message docs-homescreen-empty-section-new-user-notice" tabindex="0" role="region" style="padding-top: 100px; font-size: 19px; margin-top: 110px; font-family: Verdana,sans-serif; font-weight: 600; margin-bottom: 40px; ">
				<div class="docs-hs-tmp-widthwrapper">
					<div class="docs-hs-tmp-sch docs-hs-tmp-sch-content docs-hs-tmp-sch-ns docs-hs-tmp-contractedcontentholder docs-hs-overflow">
						<div class="docs-hs-tmp-contractedheadercontainer-relative">
							<div class="docs-hs-tmp-contractedheader">
								<div class="docs-hs-tmp-contractedheader-text" style="color: white; margin: 20px auto; margin-left: -970px; font-size: 18px">Bắt đầu biểu mẫu mới</div>
							</div>
						</div>
					</div>
					<div class="docs-homescreen-templates-templateview docs-homescreen-templates-templateview-showcase" role="option" id=":1d" tabindex="-1" aria-disabled="false">
						<div class="docs-homescreen-itemholder-content docs-homescreen-templates-gallery">
							<div class='btn-1' style="width: 200px;">
								<a href="http://localhost/CI/index.php/Main/bieumau"><img src="https://ssl.gstatic.com/docs/templates/thumbnails/forms-blank.png"  alt="" style="height: 160px; width: 200px; margin-top: -8px; border-radius: 5px;"></a>
									<p style="color: white; font-size: 14px;">Trống</p>
							</div>
							<div class='btn-2' style="width: 200px; margin-left: 250px; margin-top: -181px;">
								<a href="http://localhost/CI/index.php/Main/bieumau"><img src="https://ssl.gstatic.com/docs/templates/thumbnails/1p-ycZA_Ihhg4WA8ccQN-eIFjVACGq7syHx0IWQMxLY0_400.png" alt="" style="height: 160px; width: 200px; margin-top: -8px; border-radius: 5px;"></a>
									<p style="color: white; font-size: 14px;">Thông tin liên hệ</p>
							</div>
							<div class='btn-3' style="width: 200px; margin-left: 500px; margin-top: -181px;">
								<a href="http://localhost/CI/index.php/Main/bieumau"><img src="https://ssl.gstatic.com/docs/templates/thumbnails/17xIWXxEvbJg0l0EK-mbhPbC7vrjoFdMAHAIr0HEW2jc_400.png" alt="" style="height: 160px; width: 200px; margin-top: -8px; border-radius: 5px;"></a>
									<p style="color: white; font-size: 14px;">Trả lời sự kiện</p>
							</div>
							<div class='btn-4' style="width: 200px; margin-left: 750px; margin-top: -181px;">
								<a href="http://localhost/CI/index.php/Main/bieumau"><img src="https://ssl.gstatic.com/docs/templates/thumbnails/1y4FA-HH6Tq5XHL7q2snu7EfBXmpsFsAY5Dzmcf70Y1s_400.png" alt="" style="height: 160px; width: 200px; margin-top: -8px; border-radius: 5px;"></a>
									<p style="color: white; font-size: 14px;">Đăng ký sự kiện</p>
							</div>
							<div class='btn-5' style="width: 200px; margin-left: 1000px; margin-top: -181px;">
								<a href="http://localhost/CI/index.php/Main/bieumau"><img src="https://ssl.gstatic.com/docs/templates/thumbnails/1HNKwycLbuS5oLyO-_9WGFy6SDEEfS67wo6Bxp3jI5DY_400.png" alt="" style="height: 160px; width: 200px; margin-top: -8px; border-radius: 5px;"></a>
									<p style="color: white; font-size: 14px;">Lời mời sự kiện</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="docs-homescreen-empty-section-notice" tabindex="0" style="height: 250px;">
			<div class="docs-homescreen-empty-section-notice-message docs-homescreen-empty-section-new-user-notice" tabindex="0" role="region" style="padding-top: 100px; font-size: 19px; margin-top: 110px; font-family: Verdana,sans-serif; font-weight: 600; margin-bottom: 40px; ">
				<div class="docs-homescreen-empty-section-new-user-notice-heading">Chưa có biểu mẫu nào</div>
					<div class="docs-homescreen-empty-section-create">Nhấp vào + để tạo biểu mẫu mới.</div>
			</div>
				<div class="docs-homescreen-empty-section-notice-message docs-homescreen-empty-section-search-result-notice" tabindex="0" role="region" style="display: none;">Không có tệp nào của bạn phù hợp với bộ lọc tìm kiếm và chủ sở hữu này.</div>
				<div class="docs-homescreen-empty-section-notice-message docs-homescreen-empty-section-owner-filter-notice" tabindex="0" role="region" style="display: none;">Không có tệp nào của bạn phù hợp với bộ lọc của chủ sở hữu này.</div>
			</div>
		</div>
	</div>
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
			<p style="text-align: center;">Copyright 2018. Designed by <span style="color: yellow;">Group One</span> Studio. All Rights Reserved.</p>
		</div>
	</div>
</footer>