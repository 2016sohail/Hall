<!DOCTYPE html>
<html lang="en" class="full-height">

<!-- Mirrored from moldthemes.com/mold_discover/signup_page.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Feb 2017 16:36:29 GMT -->
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mold Discover</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />

    <link rel="stylesheet" href="assets/css/bootstrap.css" media="all" >
    <link rel="stylesheet" href="assets/css/jqueryui.css" media="all" >
    <link rel="stylesheet" href="vendor/animate-css/animate.css" media="all" >
    <link rel="stylesheet" href="assets/font/iconfont/iconstyle.css" media="all" >
    <link rel="stylesheet" href="assets/font/font-awesome/css/font-awesome.css" media="all" >
    <link rel="stylesheet" href="assets/css/main.css" media="all" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script type="text/javascript" src="vendor/js-cookie/src/js.cookie.js"></script>
    <style id="moldcustomize">
    </style>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

        // ga('create', 'UA-83435216-1', 'auto');
        // ga('send', 'pageview');

    </script>
</head>
<body class="login" style="background-image: url('assets/img/home_img/mountain.jpg');">
	<div class="pre-loader">
		<div class="loading-img"></div>
	</div>
	
	<div class="form-box">
		<div class="form-head">
			<div class="mold-logo">
				<div class="mold">Mold</div>
				<div class="logo"></div>
				<div class="logo-txt">Discover</div>
			</div>
			<hr>
			<div class="txt">Sign Up</div>
		</div>
		<div class="form-body">
			<form>
				<div class="form-group">
					<label>First Name</label>
					<div class="input-group">
						<div class="input-group-addon icon-user"></div>
						<input type="text" name="firstname" class="form-control" placeholder="First Name"/>
					</div>
				</div>
				<div class="form-group">
					<label>Last Name</label>
					<div class="input-group">
						<div class="input-group-addon icon-user"></div>
						<input type="text" name="lastname" class="form-control" placeholder="Last Name"/>
					</div>
				</div>
				<div class="form-group">
					<label>User Name</label>
					<div class="input-group">
						<div class="input-group-addon icon-user"></div>
						<input type="text" class="form-control" placeholder="User Name"/>
					</div>
				</div>
				<div class="form-group">
					<label>Email Address</label>
					<div class="input-group">
						<div class="input-group-addon icon-mail"></div>
						<input type="email" name="email" class="form-control" placeholder="Your Email Address"/>
					</div>
				</div>
				<div class="form-group">
					<label>Contact</label>
					<div class="input-group">
						<div class="input-group-addon" style="padding: 0 14px;"><i class="fa fa-phone"></i></div>

						<input type="number" name="contact" class="form-control" placeholder="Your Address"/>
					</div>
				</div>
				<div class="form-group">
					<label>Password</label>
					<div class="input-group">
						<div class="input-group-addon icon-lock"></div>
						<input type="password" name="password" class="form-control" placeholder="Password"/>
					</div>
				</div>
				<div class="form-group">
					<label>Confirm Password</label>
					<div class="input-group">
						<div class="input-group-addon icon-lock"></div>
						<input type="password" name="confirmpass" class="form-control" placeholder="Password"/>
					</div>
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox"> Remember me
					</label>
				</div>
				<br>
				<button type="submit" id="registercust" class="btn btn-primary hvr-sweep-to-right">Log In</button>
			</form>
		</div>
	</div>
	
<script type="text/javascript" src="vendor/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="vendor/jqueryui/jquery-ui-1.10.3.custom.min.js"></script>
<script type="text/javascript" src="vendor/jquery.ui.touch-punch.min.js"></script>
<script type="text/javascript" src="vendor/bootstrap/dist/js/bootstrap.min.js"></script>

<script type="text/javascript" src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="vendor/retina.min.js"></script>
<script type="text/javascript" src="assets/js/min/main.min.js"></script>

<link href="assets/css/controlpanel.css" rel="stylesheet">
<link href="vendor/colpick-jQuery-Color-Picker-master/css/colpick.css" rel="stylesheet"  type="text/css" />
<link href="vendor/colorpicker/css/evol-colorpicker.min.css" rel="stylesheet" type="text/css" />

<div class="control-panel">
	<div class="panel-opener"><span class="icon-setting"></span> <span class="icon-cross"></span></div>
	<div class="clearfix">
		<form>
			<div>
				<label for="primary-color">Primary Color</label>
				<input name="primary-color" id="primary-color" class="form-control" value="#558B2F"/>
			</div>
			<div>
				<label for="base-color">Base Color</label>
				<input name="base-color" id="base-color" class="form-control" value="#111111" style="border-color: #111111; width: 215px"/>
			</div>
			<div>
				<label for="headfont">Head Font <span>Only Google Font</span></label>
				<input name="headfont" id="headfont" class="form-control" value="Raleway"/>
			</div>
			<div>
				<label for="bodyfont">Body Font <span>Only Google Font</span></label>
				<input name="bodyfont" id="bodyfont" class="form-control" value="Open Sans"/>
			</div>
			<div class="clearfix">
				<button id="hexrefresh" class="btn btn-default sweep-to-right" data-toggle="tooltip" data-placement="bottom" title="Reset" type="button"><span class="icon-sync"></span>Reset</button>
				<button id="hexchange" class="btn btn-default sweep-to-right" data-toggle="tooltip" data-placement="bottom" title="Apply" type="button"><span class="icon-arrow-right"></span>Apply</button>
			</div>
		</form>
	</div>
<!-- 	<div class="download-text">
		This control panel is just for presentational purpose and is not included in the final purchase. However there is clear documentation on changing color scheme and fonts. 
	</div> -->
</div>

<script src="vendor/colpick-jQuery-Color-Picker-master/js/colpick.js" type="text/javascript"></script>
<script src="vendor/colorpicker/js/evol-colorpicker.min.js" type="text/javascript"></script>
<script src="assets/js/min/controlpanel.min.js" type="text/javascript"></script>

	<!-- Current Page JS -->
	<script type="text/javascript" src="assets/js/min/login.min.js"></script>

</body>

<!-- Mirrored from moldthemes.com/mold_discover/signup_page.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Feb 2017 16:36:29 GMT -->
</html>