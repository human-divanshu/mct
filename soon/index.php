<!DOCTYPE html>
<html>
<head>
    <title>mycampustrips</title>
    <link href="https://fonts.googleapis.com/css?family=Baloo+Tammudu" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="comming.css">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
</head>
<body>

<div class="bgimg">
  <div class="middle">
    <p><span class="logofont">my<span class="logoblue">campus</span>trips</span></p>
    <h1>LAUNCHING ON</h1>
    <p>14<sup>th</sup> Nov, 2017<p> <h3>with joy for all!</h3>
    <hr>
    <p id="demo" style="font-size:30px"></p>
  </div>
</div>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Nov 14, 2017 15:37:25").getTime();//change date to change timer

// Update the count down every 1 second
var countdownfunction = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(countdownfunction);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script>

</body>
</html>