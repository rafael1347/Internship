   <?php
 $DB_HOST = 'db5001800455.hosting-data.io';
    $DB_NAME     = 'dbs1483307';
    $DB_USER  = 'dbu1551191';
    $DB_PASS   = 'Fes29Sky123!';
    $charset    = 'utf8';
$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

  if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
  }

 ?>
<!DOCTYPE HTML>  
<html lang="en">
<head>
  <title>Newsletter</title>
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
  
  
  
  
 
<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr= $stateErr = "";
$name = $email = $gender = $comment = $website = $state = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["website"])) {
    $websiteErr = "Website is required";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }


  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  
  if (empty($_POST["state"])) {
    $stateErr = "Selection is required";
  } else {
    $state = test_input($_POST["state"]);
  }
  

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div>
<h2>Newsletter Sign up</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error">*<?php echo $websiteErr;?></span>

  <br><br>
 
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  

<?php
if(isset($_POST["number"]))
{    
    $number = $_POST["number"];
    if((is_numeric($number)) && ($number > 0) && ($number < 6))
    {
        echo "Selected rating: " . $number;
        // Write the rating to the database here
    }
    else
        echo "The rating has to be a number between 1 and 5!";
}
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    Rate this Website from 1 to 5:
    <select name="number">
      <option value=""></option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
    <input type="submit" name="btnSendForm" id = "btnSendForm" value="Submit"/>
</form>
  </form>
  </div>
<?php

    //connection
    $servername = 'db5001800455.hosting-data.io';
    $dbname     = 'dbs1483307';
    $username   = 'dbu1551191';
    $password   = 'Fes29Sky123!';
    $charset    = 'utf8';

    $dsn = "mysql:host=$servername;dbname=$dbname;charset=$charset";
   

    $dbh = new PDO($dsn, $username, $password);

// check if the form has been submitted. If it has, start to process the form and save it to the database
if (isset($_POST['btnSendForm'])&& !empty($_POST["gender"])&& !empty($_POST["number"])&& !empty($_POST["name"])&& !$emailErr&& !$websiteErr) {


    //check your inputs are set and validate,filter and sanitize
    $name        = $_POST['name'];
    $email      = $_POST['email'];
    $website = $_POST['website'];
    $gender      = $_POST['gender'];
    $number        = $_POST['number'];

    //prepare and bind
    $stmt = $dbh->prepare("INSERT INTO From_Data (name, email, website, gender, rating)VALUES (?,?,?,?,?)");
    if ($stmt->execute(array($name,$email,$website,$gender,$number))) {

        echo "Successfully Signed Up!";
      
    }
 
  
}
  ?>


  







<?php
echo "<h2>Your Input:</h2>";

echo "<table>";
 echo "<tr><th>Name</th><th>Email</th><th>Website</th><th>Gender</th><th>Rating</th></tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}

$servername = 'db5001800455.hosting-data.io';
    $dbname     = 'dbs1483307';
    $username   = 'dbu1551191';
    $password   = 'Fes29Sky123!';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT name, email, website,gender,rating FROM From_Data");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>
  
  <!--Footer-->
<div id ="title" class="jumbotron text-center">
</div>

</body>
</html>