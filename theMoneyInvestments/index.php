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
  <title>Tattooed Chef</title>
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
        <a class="nav-link" href="newsletter.php">Newsletter</a>
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
      <h2>Tattooed Chef</h2>
      <img src="ttcf.png" alt="Tattoed Chef" class="responsive">
      
      <h3>Important Links</h3>
 
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="https://tattooedchef.com">Tattoed Chef Website</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://ir.tattooedchef.com/">Investor Relations</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://ir.tattooedchef.com/financial-information/sec-filings">SEC Filing</a>
        </li>
        
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h2>Stock Chart</h2>
      <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <script src="javascript.js">$(ttcf)</script>
  <div id="TTCF"></div>
  <div class="tradingview-widget-copyright responsive"><a href="https://www.tradingview.com/symbols/NASDAQ-TTCF/" rel="noopener" target="_blank"><span class="blue-text">TTCF Chart</span></a> by TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script>
   new TradingView.widget(
  {
  "autosize": true,
  "symbol": "NASDAQ:TTCF",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "light",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "container_id": "TTCF"
}
  );
  
  </script>

</div>
<!-- TradingView Widget END -->


      <br>
      <h2>Company Profile</h2>
      <p>Tattooed Chef, Inc., a plant-based food company, produces and sells a portfolio of frozen foods. It supplies plant-based products to retailers in the United States. The company offers ready-to-cook bowls, zucchini spirals, riced cauliflower, acai and smoothie bowls, cauliflower crust pizza, and plant-based burgers. Its products are available in private label and Tattooed Chef brand name in the frozen food section of retail food stores. As of December 31, 2020, it operated 4,300 retail outlets, as well as offers its products through the e-commerce channel. Tattooed Chef, Inc. is headquartered in Paramount, California.</p>
     
      <div>
      
      <h2>Company Headquarters</h2>
    <!--The div element for the map -->
    <div id="map" class="responsive"></div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
      $(initMap);
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDF-A5kLZ5Rc8B7xJ8wZo0BkK3xYpl5fOY&callback=initMap&libraries=&v=weekly"
      async
    ></script>
      </div>
      
      <div>
      <h2>Company Performance</h2> 
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

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
