<?php
session_start();

if(!isset($_SESSION['login'])) {
	header("Location: index.php");
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
    			
    		</div>
    		<div class="col-md-6">
    			<?php
    				echo $_SESSION['email'];
    				echo "<br>";
                    echo $_SESSION['name'];
                    echo "<br>";
    				echo "<img src='".$_SESSION['picture']['url']."'>";
    			
    			?>
    		</div>
    	</div>
    </div>    
<?php require_once("footer.php"); ?>
    
</body>
</html>
