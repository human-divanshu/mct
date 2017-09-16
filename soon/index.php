<?php
session_start();

if(isset($_SESSION['login'])) {
	header("Location: dashboard.php");
	exit();
}
?>
<!doctype html>
<html>
<head>
    <?php require_once("common-head.php"); ?>
    <title>Website Name</title>
    <script type="text/javascript" src="fblogin/fb.js"></script>
</head>
<body>
<?php require_once("nav.php"); ?>
    <div class="container">
    	<div class="row">
    		<div class="col-md-6">
    			<div id="tag">
    				Are you ready to make
    				<span>lifetime memories ?</span>
    			</div>
    			<div id="tag2">
    				Plan. Pack. Go!
    			</div>
    			<div id="sociallogins">
    				<button id="glogin" type="button">login with google</button>
    				<div class="fb-login-button" data-scope="public_profile,email" onlogin="checkLoginState();"></div>
    			</div>
    		</div>
    	</div>
    </div>    
<?php require_once("footer.php"); ?>
    
</body>
</html>
