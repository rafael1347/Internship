<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home Depot</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="mainstyle.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="/javascript.js"></script>
  
    
</head>
<body>

<div id="title" class="jumbotron text-center">
  <h1>The Money Investments</h1>
  <p>Learn. Invest. Grow</p> 
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="logout.php">Logout</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="ttcf.php">Tattooed Chef</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="dkng.php">DraftKings</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="upwk.php">Upwork</a>
      </li>    
      <li class="nav-item">
        <a class="nav-link" href="hd.php">Home Depot</a>
      </li>    
      <li class="nav-item">
        <a class="nav-link" href="ko.php">Coca-Cola</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Newsletter.php">Newsletter</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contactus.php">Contact Us</a>
      </li>
    </ul>
  </div>  
</nav>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h2>Home Depot</h2>
      <img src="hd.png" alt="Tattoed Chef" class="responsive">
      
      <h3>Important Links</h3>
 
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="https://www.homedepot.com/">Home Depot Website</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://ir.homedepot.com/">Investor Relations</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://ir.homedepot.com/financial-reports/sec-filings">SEC Filing</a>
        </li>
        
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h2>Stock Chart</h2>
      <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div id="tradingview_36278"></div>
  <div class="tradingview-widget-copyright responsive"><a href="https://www.tradingview.com/symbols/NASDAQ-HD/" rel="noopener" target="_blank"><span class="blue-text">TTCF Chart</span></a> by TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script>
    new TradingView.widget(
  {
  "autosize": true,
  "symbol": "NYSE:HD",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "light",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "container_id": "HD"
}
  );
  </script>

</div>
	<!-- TradingView Widget END -->


      <br>
      <h2>Company Profile</h2>
      <br>
      <p>The Home Depot, Inc. engages in the sale of building materials and home improvement products. Its products include building materials, home improvement products, lawn and garden products and decor products. The firm operates through the following geographical segments: U.S., Canada and Mexico. It offers home improvement installation services, and tool and equipment rental. The company was founded by Bernard Marcus, Arthur M. Blank, Kenneth Gerald Langone and Pat Farrah on June 29, 1978 and is headquartered at Atlanta, GA.</p>     
      <div>
      
      <h2>Company Headquarters</h2>
    <!--The div element for the map -->
    <div id="map" class="responsive"></div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
      $(Hd);
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDF-A5kLZ5Rc8B7xJ8wZo0BkK3xYpl5fOY&callback=Hd&libraries=&v=weekly"
      async
    ></script>
      </div>
      
      <div>
      <h2>Company Performance</h2> 
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="/javascript.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);
      
     
      </script>
<div id="barchart_material" class="responsive"></div>
      </div>
      
    </div>
  </div>
</div>
  
  <!--Footer-->
<div id ="title" class="jumbotron text-center">
</div>
  

</body>
</html>
