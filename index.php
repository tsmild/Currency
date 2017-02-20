<html>
<?php
	session_start();
?>
<head>
	<meta charset="utf-8">
	<title>Currency Converter</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
    	.vertical-center {
  			min-height: 100%; 
  			min-height: 100vh;
  			display: flex;
  			align-items: center;
  			}
  			body{
  			background-image: url("img/currency.png");
  			width: 100%;
			min-height: 100%; 
  			min-height: 100vh;
  			background-size: cover;
			}
			h1,h4{color:#fff;}	
			.btn{box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
			.btn{    
				color: #fff;
    			background-color: #d81c17;
    			border-color: #d81c17;
    		}
    		.btn:hover{
    			color: #fff;
    			background-color: #791512;
    			border-color: #791512;
    		}
    </style>
</head>
<body>
	
	<div class="vertical-center" >
		<div class="container">
		<form action="cur_convert.php" method="post">
	
		<div class="row text-center">
			<div class="col-md-12"><h1>Currency Converter</h1></div>
			<div class="col-md-12"><h4>Change value for money is Thailand (Bath)</h4></div>
		</div>
		<p>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
			<div class="col-md-12">
				<div class="col-md-7 form-group">
					<input type="number" class="form-control" name="money1" placeholder="กรอกค่าเงินที่ต้องการจะทราบ">
				</div>
				<div class="col-md-5">
					 <select class="form-control" name="typemoney">
            			<option value="HKD" selected>Hongkong Dollar</option>
            			<option value="EUR">Euro (€)</option>
            			<option value="SGD">Singapore Dollar</option>
          			</select>
				</div>
			</div>
			<div class="col-md-2"></div>
			<div class="col-md-8 form-group">
				<?php 
				$result = $_SESSION["converted"]." บาทไทย (THB)"; 
				?>
				<input type="text" class="form-control text-center" value="<?php echo $result ?>" disabled>
			</div>
			<div class="col-md-12">
		<div class="col-md-5"></div>
			<input type="submit" class="btn" value="Convert">
		</div>
		
		</div>
		</div>
			</form>
			
	</div>


</div>
</body>
</html>