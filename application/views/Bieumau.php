<!DOCTYPE html>
<html>
<head>
	<title>Tạo Biểu mẫu</title>
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
        	background: rgb(103, 58, 183);
        	color: white;
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
        
        #xong{
            float: right;
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
        
        .form-item input, .form-item textarea, .form-item select {
            background: #fff !important;
            width: 100%;
            border: none;
        }

        .form-item input{
        	height: 40px;
        	border: none;
        	padding-left: 25px;
        	background: none;
        	font-size: 15px;
            margin-bottom: 7.5px;
        }

    </style>
</head>
<body>
<div class="container-fluid top">
    <div class="form-popup" id="myForm" style="display: none;">
                  <form action="/" class="form-container">
                    <div class="header-form" style="margin-top: -10px;background: #0033CC; color: white;width: 600px;height: 55px;margin-left: -10px;">
                    <h3><strong>Gửi biểu mẫu</strong></h3>
                    <i class="fas fa-times" onclick="closeForm()" style="float: right; margin-top: -35px; margin-right: 10px;font-size: 28px"></i>
                    </div>
                    
                    <div class="body-form">
                    
                    <div class="custom-control custom-checkbox" style="margin-top: -85px; font-size: 18px; margin-bottom: 10px;">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                        <label class="custom-control-label" for="defaultUnchecked">Thu thập đơn vị</label>
                        <div class="chiase" style="float: right;">
                            <i class="fab fa-facebook" data-toggle="tooltip" data-placement="top" title="Chia sẻ biểu mẫu qua Facebook" style="color: blue; font-size: 26px; margin-right: 10px;"></i>  
                            <i class="fas fa-envelope" data-toggle="tooltip" data-placement="top" title="Chia sẻ biểu mẫu qua Gmail" style="color: blue; font-size: 26px;"></i>
                        </div>
                    </div>

                    <b>Đơn vị nhận</b>
                    <select name="donvi" style="width: 100%; display: inline-block; border: none; background: #DDDDDD; padding: 15px; margin: 5px 0 22px 0;">
							<option value="0">-- Chọn đơn vị --</option>
    							<?php
                                foreach($arr_Users3 as $local){ ?>
                            <option value="<?php echo $local['id'] ?>">|--<?php echo $local['tendv'] ?></option>
                                <?php
    							}
    				            ?>
                    </select>
                
                    <b>Chủ đề</b>
                    <input type="text" name="cd" required>
                    
                    <b>Tin nhắn</b>
                    <input type="text" name="tn" required>
                    </div>
                    <input type="submit" class="btn btn-primary" style="width: 15%; float: right;margin-top: 45px; height: 8%; padding: 5px 5px 5px 5px; background: #0099CC" value="GỬI" />
                    <input type="submit" class="btn btn-primary" onclick="closeForm()" style="width: 15%; float: right; margin-right: 1px; height: 8%; background: #0099CC; margin-top: 45px; padding: 5px 5px 5px 5px;" value="HỦY" />
                  </form>
                </div>
		<div class="row align-item-start">
			<div class="col-md-4 left">
				<i class="fas fa-arrow-left" ></i>&nbsp;&nbsp;
				<input id="title" type="text" name="name" value="Mẫu không có tiêu đề">
			</div>
			<div class="col-md-4 offset-md-4 right">
                <i class="fas fa-cog"></i>&nbsp;&nbsp;
				<input style="padding: 5px; background: white; color: blue;" onclick="openForm()" id="ip_right" type="submit" name="gui" value="GỬI">&nbsp;&nbsp;
				<i class="fas fa-ellipsis-v"></i>&nbsp;&nbsp;
				<i class="fas fa-user"></i>
			</div>	
		</div>
</div>
<div class="container-fluid bottom">
		<div id="body" class="container">
			<div class="row justify-content-center">
				<div class="col-md-2 question">
					<a href="#">Câu hỏi</a>
				</div>
				<div class="col-md-2 answer">
					<a href="#">Câu trả lời</a>
				</div>
			</div>
            <!-- Form tiêu đề -->
			<form id="form_tieude" action="" method="POST">
				<div class="row content">
    				<div class="col-md-12">
    					<textarea id="ip_content-top" name="tieude" placeholder="Mẫu chưa có tiêu đề"></textarea>
    					<!-- <input id="ip_content-top" type="text" name="tieude" placeholder="Mẫu chưa có tiêu đề" /> -->
    				</div>
    				<div class="col-md-12">
    					<textarea style="" id="ip_content-bottom" name="mota" placeholder="Mô tả biểu mẫu"></textarea>
    					<!-- <input id="ip_content-bottom" type="text" name="" placeholder="Mô tả biểu mẫu"> -->
    				</div>
                    <!-- <input type="submit" class="btn btn-primary" value="Xong" style="padding: 5px;color: white; width: 100px; margin-left: 40px; background: blue;" /> -->       
  				</div>
                <div id="form">
			</form>
            <!-- End Form tiêu đề -->
            <br>
            
            <!-- Form câu hỏi -->
            <?php
  	         $string_row="
                <div>
                    <div class='row form-item'>
    		          <div class='col-md-12'>
    		            <div class='row'>
    		              <div id='info' class='col-md-10' >
    		                <input rel='title' name='' placeholder='Câu hỏi không có tiêu đề' />
    		              </div>
    		              <div id='item' class='col-md-2' >
    		                <select rel='select_box' class='select' name='' onchange='addInput(0);'>
    		                  <option value='text'>TEXT</option>
    		                  <option value='radio'>RADIO</option>
    		                  <option value='combobox'>COMBOBOX</option>
    		                  <option value='textarea'>TEXTAREA</option>
    		                </select>
    		              </div>
    		            </div>
    		          </div>
    		          <div rel='more' class='col-md-12'>
                      </div>
    		          <div rel='more_a' class='col-md-12 text-center'></div>
                      <hr>
    		        </div> 
                 </div>";
            ?>
            
                	<script type="text/javascript">

                        $(document).ready(function(row_index){
                            $('#xong').click(function(){
                                var tieude = $("input[name='tieude']").val();
                                var mota = $("input[name='mota']").val();
                                var tieude_cauhoi = $("input[name="'tieude_'+row_index"]").val();
                                $.ajax({
                                    type:'POST',
                                    data: {tieude: tieude, mota: mota},
                                    url: 'Main.php',
                                    dataType: 'json',
                                    success :  function(data){
                                            $('#result1').html(data);
                                    }
                                    });
                            });
                        });
                    </script>

		        <script type="text/javascript">
                
		        	var html_row="<?php echo str_replace("\r\n", ' ',$string_row) ; ?>";
		        	var arr_Rows=[];
                    var arr_select = [];
                    var arr_div = [];
		        	arr_Rows[0]= html_row;
                    arr_select[0] = html_row;
                    
                    
                    function add_new_row(){
                        
                        var arr_Rows_Lenght = arr_Rows.length;
                        var html_row_new = $(html_row);
                        var row_index = arr_Rows_Lenght;
             
                       html_row_new.find('#tieude').attr('name', `tieude[${row_index}]`);
                  
                        html_row_new.find('[rel="select_box"]')
                        .eq(0)
                        .attr('name', `attrs[${row_index}][type]`)
                        .attr('onchange', `addInput(${row_index}, this)`)
                        .change()
                        
                        html_row_new.find('[rel="title"]')
                            .eq(0)
                            .attr({
                                name: `attrs[${row_index}][title]`
                            })

                        arr_Rows[arr_Rows_Lenght] = html_row_new;
                        arr_select[arr_Rows_Lenght] = html_row_new;
                        $('#form').append(html_row_new.html());
                    }
		        </script>
            </div>
            <!-- End Form câu hỏi -->
            <form>
                <input id="xong" type="submit" value="Xong" class="btn btn-primary" style="width: 7%; margin-left: 40px;"/>  
            </form>   
		</div>
        	<div class="control">
        		<i id="id_control" onclick="add_new_row()" class="fas fa-plus-circle"></i><br>
        		<i id="id_control" class="fas fa-image"></i><br>
        		<i id="id_control" class="fab fa-youtube"></i>
        	</div>
</div>
</body>
</html>

<script type="text/javascript">
  function addInput(row_index, e)
  {

    var get_id_select = $(e).val();
    var parent  = $(e).parentsUntil('#form');

    var get_id_view = parent.find('[rel="more"]')
    var get_id_moreA = parent.find('[rel="more_a"]');
    
    get_id_moreA.html('')

    if (get_id_select == "radio" || get_id_select == "combobox")
    {

      get_id_view.html('')
      get_id_moreA.html('')


      for (var i = 1; i < 4; i++) {
          get_id_view.append(input(row_index, i))
      }
        
       
        

        var a =  create_element('a')
        let total_input = get_id_view.find('input').length || 3;

          a.html('Add').click(function(){
            if  (get_id_select == 'combobox') {
                return get_id_view.append(input(row_index, ++total_input))
            }
            get_id_view.find('input').eq(total_input).before(input(row_index, ++total_input))
          })
     
          if  (get_id_select !== 'combobox') {
            get_id_view.append(input(row_index, 'other'))
          }

            get_id_moreA.append(a)
    }

    else if (get_id_select == "text" || get_id_select == "textarea"){
	    get_id_view.html('');

        get_id_select = get_id_select == "text" ? "input" : get_id_select;

        let attr = get_id_select == "textarea" ? {
            cols: "20",
            rows: "5"
        } : {}
        get_id_view.append(input(row_index, get_id_select, attr))
    }
    
  }


  function input(row_index, index, type = "input", attr = {}){
   
        if (typeof type === "object") {
            attr = type;
       }

       if (typeof index === 'string' && index !== 'other') {
        type = index;
        index = null
       }

        const ele = create_element(type);

    ele
        .attr('name', `attrs[${row_index}][options]${index !== null ? `[${index}]` : ''}`)
        .attr('placeholder', `${ index !== 'other' ? `Tùy chọn ${index || ''}` : 'Khac' }`)
        .attr(attr)

      return ele;
  }

  function create_element(ele_name)
  {
        let ele = $(`<${ele_name}>`)
        return ele;
  }
</script>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>