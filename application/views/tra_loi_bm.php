<?php $attrs = json_decode($bieu_mau->attributes); ?>


<!DOCTYPE html>
<html>
<head>
	<title>Trả lời Biểu mẫu</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"/>
    <style>
    
        .open-button {
          background-color: #555;
          color: white;
          padding: 16px 20px;
          border: none;
          cursor: pointer;
          opacity: 0.8;
          position: fixed;
          bottom: 23px;
          right: 28px;
          width: 280px;
        }
        
        
        .form-popup {
          display: none;
          position: fixed;
          left: 400px;
          border: none;
          z-index: 9;
          margin-top: 50px;
        }
        
        /* Add styles to the form container */
        .form-container {
          height: 515px;
          max-width: 600px;
          padding: 10px;
          background-color: white;
          
        }
        
        /* Full-width input fields */
        .form-container input[type=text] {
          width: 100%;
          padding: 15px;
          margin: 5px 0 22px 0;
          border: none;
          background: #f1f1f1;
        }
        
        /* When the inputs get focus, do something */
        .form-container input[type=text]:focus{
          background-color: #ddd;
          outline: none;
        }
        
        /* Set a style for the submit/login button */
        .form-container .btn {
          background-color: #4CAF50;
          color: white;
          padding: 16px 20px;
          border: none;
          cursor: pointer;
          width: 100%;
          margin-bottom:10px;
          opacity: 0.8;
        }
        
        /* Add a red background color to the cancel button */
        .form-container .cancel {
          background-color: red;
        }
        
        /* Add some hover effects to buttons */
        .form-container .btn:hover, .open-button:hover {
          opacity: 1;
        }
        
        .tab {
            overflow: hidden;
            margin-left: 439px;
            margin-right: 439px;
        }

        
        .tab button {
            background-color: inherit; 
            text-align: center;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 12px;
            transition: 0.3s;
            font-size: 18px;
        }

        .tab button:hover {
            background-color: #ddd;
        }

        /* đổi màu nền cho tab đang được hiển thị nội dung */
        .tab button.active {
            background-color: #ccc;
        }

        /* định dạng nội dung hiển thị */
        .tabcontent {
            display: none;
            padding: 6px 12px;
            
            border-top: none;
        }
        
        li{
            list-style-type: none;
        }
        
        .tab-content:hover{
            border-left: 3px solid #0000FF;
        }
        
        .body-form{
            margin-top: 100px;
        }
        
        .body-form input[type=text]{
            display: inline-block;
            border: none;
            background: #CCCCCC;
    	}
        
        .top{
        	height: 150px;
        	background: rgb(103, 58, 183);
        	position: relative;
        }
        
        .left{
        	font-size: 22px;
        	margin-top: 12px;
        }
        
        .right{
        	text-align: center;
        	font-size: 22px;
        	margin-top: 12px;
        }
        
        #ip_right{
        	width: 90px;
        	height: 40px;
        	border-radius: 5px;
        	color: white;
        	font-size: 22px;
        	text-align: center;
        }
        
        #title{
        	border: 0px;
        	/*background: rgb(103, 58, 183);*/
        	background-color: red;
        	color: black;
        	width: 90%;
        	font-size: 22px;
        }
        
        i{
        	color: white;
        }
        
        .bottom{
        	height: auto;
        	background: #BEBEBE;
        }
        
        .container{
        	position: absolute;
        	background: #F5F5F5;
        	height: auto;
        	min-height: 450px;
        	box-shadow: 0.5px 1px 1px 1px;
        	margin-left: 7%;
        	margin-top: -45px;
        }
        
        #id_control{
        	color: #696969;
        }
        
        .control{
        	margin-top: 2%;
        	border: 0.5px solid;
        	position: fixed;
        	width: 40px;
        	height: 118px;
        	text-align: center;
        	font-size: 22px;
        	left: 94%;
        	background: #F8F8FF;
        }
        
        .justify-content-center{
        	border-bottom: 0.5px solid;
        	min-height: 40px;
        	text-align: center;
        	padding: 7px;
        	
        }
        
        a{
        	color: rgba(0, 0, 0, 0.5);
        	font-weight: 450;
        	font-size: 20px;
        	text-transform: uppercase;;
        }
        
        a:hover{
        	text-decoration: none;
        	color: rgb(103, 58, 183);
        }
        
        .content{
        	margin-top: 7px;
        }
        
        textarea{
        	width: 95%;
        	border: none;
        	padding-left: 25px; 
        	background: none;
        	font-size: 15px;
        }
        
        #ip_content-top{
        	font-size: 25px;
        	height: 45px;
            font-weight: bold;
        }
        
        #ip_content-bottom{
        	font-size: 15px;
        	height: 33px;
        }
        
     
        
        .form-item:hover{
        	border-left: 5px solid rgb(103, 58, 183);
        }
        
        .form-container:hover{
        	border-left: none;
        }
        
        #choose{
        	background: none;
        	border: 0px;
        	padding-left: 25px;
        	width: 175px;
        }
        
        #them{
        	color: #1a73e8;
        }
        
        #them:hover{
        	color: rgb(103, 58, 183);
        }
        
        .select{
        	width: 100%;
        	padding: 5px;
        	margin: 5px;
        }
        
        input,  textarea, select {
            background: #CCCCCC !important;
            width: 100%;
            border: none;
        }

        input{
        	height: 40px;
        	border: 1px solid #3366CC;
        	padding-left: 25px;
        	background: none;
        	font-size: 15px;
            margin-bottom: 7.5px;
        }

        input[type="radio"] {
        	width: inherit;
        	height: inherit;
        }

        h1{
        	font-size: 30px;
        }

    </style>
</head>
<body>
<div class="container-fluid top">
		<div class="row align-item-start">
			<div class="col-md-4 left">
				<i class="fas fa-arrow-left" ></i>&nbsp;&nbsp;
				<input id="title" type="text" name="name" value="Mẫu không có tiêu đề">
			</div>
			<div class="col-md-4 offset-md-4 right">
                <i class="fas fa-cog"></i>&nbsp;&nbsp;
				<!-- <input style="padding: 5px; background: white; color: blue;" onclick="openForm()" id="ip_right" type="submit" name="gui" value="GỬI">&nbsp;&nbsp; -->
				<i class="fas fa-ellipsis-v"></i>&nbsp;&nbsp;
				<i class="fas fa-user"></i>
			</div>	
		</div>
</div>
<div class="container-fluid bottom">
		<div id="body" class="container">
			<div class="row justify-content-center">
				<div class="col-md-2">
					<a href="#">Câu hỏi</a>
				</div>
			</div>
            <!-- Form trả lời biểu mẫu -->
			<form id="form_tieude" action="" method="POST">
				<?php foreach ($attrs as $key => $attr) : ?>
					<h1><?= !is_null($attr->title) ? $attr->title : 'Cau hoi khong co tieu de' ?></h1>
					<?php if ($attr->type == 'radio' || $attr->type == 'combobox') : ?>
						<?php foreach ($attr->options as $op_key => $option) :  ?>
							<?php if ($op_key == 'other') : ?>
								<?php continue; ?>
							<?php endif; ?>
							<input type="radio"  name="$key"> <?= $option ?> <br>
						<?php endforeach; ?>
					<?php endif; ?>
					<?php if ($attr->type == 'radio') : ?>
						<input type="text" placeholder="Khac">
					<?php endif; ?>

					<?php if ($attr->type == 'text') : ?>
						<input type="text" />
					<?php endif; ?>

					<?php if ($attr->type == 'textarea') : ?>
						<textarea type="text"></textarea>
					<?php endif; ?>

				<?php endforeach; ?>
			</form>
            <!-- End Form trả lời biểu mẫu -->
            <br>
        </div>
</div>
