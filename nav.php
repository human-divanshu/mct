<nav class="navbar navbar-default">
  <div style="margin-top:12px;" class="visible-lg visible-md">&nbsp;</div>
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     <a class="navbar-brand" href="#"><span class="logofont">my<span class="logoblue">campus</span>trips</span></a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#tripspane">Search Trips</a></li>
<?php
  if(!isset($_SESSION['login'])) {
?>        
        <li><a href="login.php">Login</a></li>
        <li><a href="register.php">Signup</a></li>
<?php
  } else {
?>
        <li><a href="logout.php">Logout</a></li>
<?php
}
?>        
      </ul>
    </div>
  </div>
</nav>
