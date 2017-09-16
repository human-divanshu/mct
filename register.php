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
    <link rel="stylesheet" type="text/css" href="css/register.css">
    <script type="text/javascript" src="fblogin/fb.js"></script>
</head>
<body>
<?php require_once("nav.php"); ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-4">Sign up
                <br>
                <form>
                    <input type="text" placeholder="Full name"><br><br>
                    <input type="text" placeholder="Email"><br><br>
                    <input type="text" placeholder="Phone number"><br><br>
                    <input type="password" placeholder="Password"><br><br>
                    <input type="submit" value="Sign up">
                </form>
            </div>
        </div>
    </div>    
<?php require_once("footer.php"); ?>
    
</body>
</html>
