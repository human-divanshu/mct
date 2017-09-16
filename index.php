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
    			<div class="visible-lg visible-md" style="margin-top:170px;">&nbsp;</div>
    			<div id="tag">
    				Are you ready to make
    				<span>lifetime memories ?</span>
    			</div>
    			<div id="tag2">
    				Plan, pack and go !
    			</div><br>
    			<div id="sociallogins">
    				<button id="glogin" type="button">login with google</button>
    				<div class="visible-xs visible-sm">&nbsp;</div>
    				<!--<div class="fb-login-button" data-scope="public_profile,email" onlogin="checkLoginState();"></div>-->
    				<div class="fb-login-button" data-max-rows="1" data-size="medium" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false" data-scope="public_profile,email" onlogin="checkLoginState();"></div>
    			</div>
    		</div>
    		<div class="col-md-6">
    			
    		</div>
    	</div>
    </div>    
<?php require_once("footer.php"); ?>
    
</body>
</html>
