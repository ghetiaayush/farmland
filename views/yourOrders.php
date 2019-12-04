<?php
error_reporting(0);
 // print_r($orderData);
 // exit;
		$exScriptNameArray = explode('/',$_SERVER['SCRIPT_NAME']);
		// echo "<pre>";
		// print_r($exScriptNameArray);
		$DynamicUrl =  $_SERVER['REQUEST_SCHEME']."://".$_SERVER['SERVER_NAME'].'/'.$exScriptNameArray[1]."/assets/";
		// echo "<br>";
		// echo "http://localhost/june5/PHP/mvc/assets/";
		//echo $DynamicUrl;
?>
		<!DOCTYPE html>
		<html lang="en">
		<head>
		<title>Farmland - Order water page</title>
		<!-- for-mobile-apps -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Farmland Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
		<script type="application/x-javascript"> 
			addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
				function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- //for-mobile-apps -->
		<link href="<?php echo $DynamicUrl; ?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<link href="<?php echo $DynamicUrl; ?>css/style.css" rel="stylesheet" type="text/css" media="all" />
		<!-- js -->
		<script type="text/javascript" src="<?php echo $DynamicUrl; ?>js/jquery-2.1.4.min.js"></script>
		<!-- //js -->
		<link rel="stylesheet" href="<?php echo $DynamicUrl; ?>css/flexslider.css" type="text/css" media="screen" property="" />
		<!-- font-awesome icons -->
		<link rel="stylesheet" href="<?php echo $DynamicUrl; ?>css/font-awesome.min.css" />
		<!-- //font-awesome icons -->
		
		
	<style type="text/css">
	    body {
	        color: #566787;
			background: #f5f5f5;
			font-family: 'Varela Round', sans-serif;
			font-size: 13px;
		}
		.table-wrapper {
	        background: #fff;
	        padding: 20px 25px;
	        margin: 30px 0;
			border-radius: 3px;
	        box-shadow: 0 1px 1px rgba(0,0,0,.05);

	    }
		.table-title {        
			padding-bottom: 15px;
			background: #435d7d;
			color: #fff;
			padding: 16px 30px;
			margin: -20px -25px 10px;
			border-radius: 3px 3px 0 0;
	    }
	    .table-title h2 {
			margin: 5px 0 0;
			font-size: 24px;
		}
		.table-title .btn-group {
			float: right;
		}
		.table-title .btn {
			color: #fff;
			float: right;
			font-size: 13px;
			border: none;
			min-width: 50px;
			border-radius: 2px;
			border: none;
			outline: none !important;
			margin-left: 10px;
		}
		.table-title .btn i {
			float: left;
			font-size: 21px;
			margin-right: 5px;
		}
		.table-title .btn span {
			float: left;
			margin-top: 2px;
		}
	    table.table tr th, table.table tr td {
	        border-color: #e9e9e9;
			padding: 12px 15px;
			vertical-align: middle;
	    }
		table.table tr th:first-child {
			width: 60px;
		}
		table.table tr th:last-child {
			width: 100px;
		}
	    table.table-striped tbody tr:nth-of-type(odd) {
	    	background-color: #fcfcfc;
		}
		table.table-striped.table-hover tbody tr:hover {
			background: #f5f5f5;
		}
	    table.table th i {
	        font-size: 13px;
	        margin: 0 5px;
	        cursor: pointer;
	    }	
	    table.table td:last-child i {
			opacity: 0.9;
			font-size: 22px;
	        margin: 0 5px;
	    }
		table.table td a {
			font-weight: bold;
			color: #566787;
			display: inline-block;
			text-decoration: none;
			outline: none !important;
		}
		table.table td a:hover {
			color: #2196F3;
		}
		table.table td a.edit {
	        color: #FFC107;
	    }
	    table.table td a.delete {
	        color: #F44336;
	    }
	    table.table td i {
	        font-size: 19px;
	    }
		table.table .avatar {
			border-radius: 50%;
			vertical-align: middle;
			margin-right: 10px;
		}
		/* Modal styles */
		.modal .modal-dialog {
			max-width: 400px;
		}
		.modal .modal-header, .modal .modal-body, .modal .modal-footer {
			padding: 20px 30px;
		}
		.modal .modal-content {
			border-radius: 3px;
		}
		.modal .modal-footer {
			background: #ecf0f1;
			border-radius: 0 0 3px 3px;
		}
	    .modal .modal-title {
	        display: inline-block;
	    }
		.modal .form-control {
			border-radius: 2px;
			box-shadow: none;
			border-color: #dddddd;
		}
		.modal textarea.form-control {
			resize: vertical;
		}
		.modal .btn {
			border-radius: 2px;
			min-width: 100px;
		}	
		.modal form label {
			font-weight: normal;
		}	
	</style>

</head>
<body>
<!-- banner -->
	<div class="banner1">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="wthree_logo">
						<h1><a class="navbar-brand" href="home"><span>F</span>armland</a></h1>
					</div>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<?php
                    
                       if(isset($_SESSION['username'])){
					?>
					<nav> 
						<ul class="nav navbar-nav link-effect-5" id="link-effect-5">
							<li><a href="home" data-hover="Home">Home</a></li>
							<li><a href="services" data-hover="Services">Services</a></li>
							<li><a href="gallery" data-hover="Gallery">Gallery</a></li>
							<li><a href="contactus" data-hover="Contact Us">Contact Us</a></li>
							<li  class="active"><a href="orders" data-hover="Order">Order</a></li>
							<li class=""><a href="logout" data-hover="Logout">Logout</a></li>
						</ul>
						<?php    foreach ($userData as $value) { ?>
						<img src="<?php echo $value['photo']?>" height="50" width="50" style="margin-top:5px;margin-left:100px;">	
						<a href="viewProfile" style="margin-top:35px;margin-left:730px;">View profile</a>	
						<?php } ?>				
					</nav>
					<?php

                       }

                    else{
					?>				     
				     <script type="text/javascript">
					 	alert('First Must be login');
					 	document.location.href = 'login';
					 </script>
					<?php
                       }
                       ?>
				</div>
			</nav>
		</div>
	</div>
<!-- //banner -->
	<div class="mail">
		<div class="container">
			<div class="agileits_w3layouts_mail">
				<div class="col-md-4 agileits_w3layouts_mail_left">
					<div class="">
						<h4>
						<a href="orders">
							<i class="fa fa-arrow-circle-left" aria-hidden="true"
							style="font-size: 50px;color:#435D7D; !important"></i>
						</a></h4>
					</div>
				</div>				
				<div class="col-md-4 agileits_w3layouts_mail_left">
					<div class="w3_agileits_mail_left">
						<h4><i class="fa fa-user" aria-hidden="true"></i>Welcome</h4>
						<p class="wthree_address">
							<?php

                                 foreach ($userData as $value) {
                                 	
							  echo "<b>".$value['fullname']."</b>"; 

							 }
						 ?>
						</p>
					</div>
				</div>
				<div class="col-md-4 agileits_w3layouts_mail_left">
					<div class="">
					<center>
						<h3><i class="fa fa-bill" aria-hidden="true">
						<a href="yourBill" class="btn-lg btn btn-primary" 
						style="background-color:#435D7D; !important">
								Your Bill</a></i>
						</h3>
					</center>
					</div>
				</div>								
				<div class="clearfix"> </div>
			</div>			
		</div>
	
 <div class="container" >
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Manage <b>Orders</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="orders" class="btn btn-success" >
						 <span><b>Add New Order</b></span></a>
												
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover" >
                <thead style="font-size:18px;color:black;"  !important>
                    <tr>
                    	<th>Sr no.</th>
			           <th>Location</th>
						<th>Address</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Quantity</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody style="font-size:18px;color:black;"  !important>
                	<?php 
                	 $order = count($orderData);
                           $i = 1;
				if($order > 0){
                
                	foreach($orderData as $datas){
                		?>
                    <tr>						
                        <td><?php echo $i; ?></td>
                        <td><?php echo $datas['location']; ?></td>
                        <td><?php echo $datas['address']; ?></td>
                        <td><?php echo $datas['date']; ?></td>
                        <td><?php echo $datas['time']; ?></td>
						<td><?php echo $datas['quantity']; ?></td>
                        <td><?php echo $datas['status']; ?></td>
                        <td>
                           <a href="updateOrder?uid=<?php echo $datas['id']; ?>">
                           	<button class="btn btn-primary btn-sm">Edit</button>
                           </a>  
                           <a href="yourOrder?did=<?php echo $datas['id']; ?>" >
                           	<button class="btn btn-danger btn-sm" style="margin-top:3px;">
                           	Delete</button>
                           </a>
                        </td>
                    </tr>
                  <?php
                           $i++;
                     }
                 }
                 else{
                 	 echo "Orders not found";
                  }
              ?>					
                </tbody>
            </table>			
        </div>
    </div>
    </div>
	
	
<script type="text/javascript">
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
	<?php

       include 'footer.php';
    ?>