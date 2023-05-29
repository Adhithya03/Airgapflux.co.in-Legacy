<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
        <meta property="og:title" content="AirGapFlux: Your One-Stop Resource for Electrical Engineering Education">
        <meta property="og:description" content="Discover the latest and greatest in electrical engineering education. Find tutorials, guides, and resources all in one place at AirGapFlux.co.in">
        <meta property="og:image" content="https://www.airgapflux.co.in/images/logo3.png">
        <meta property="og:url" content="https://www.airgapflux.co.in/">
        <meta property="og:type" content="website">

        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=0.78" />
        
        <title>Explore all resources</title>

        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="js/popper.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-4.4.1.js"></script>
        <script type="text/javascript" src="js/explore.js?t=<?=time()?>"></script>

        
        <!-- CSS -->
        <link rel="stylesheet" href="css/bootstrap-4.4.1.css" />
        <link rel="stylesheet" type="text/css" href="css/main.css?t=<?=time()?>">
        <link rel="stylesheet" type="text/css" href="css/explore.css?t=<?=time()?>">
        
        <!-- ICONS -->
        
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <link href="images/search.svg" rel="icon" type="image/x-icon" />
        <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" /> -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Aboreto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Dosis&family=Exo+2:wght@300&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Montserrat:ital,wght@1,400&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark">
        <p class='menu text-center'>Exlpore</p>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item" >
        <a class="nav-link" href="/explore.php" >Explore</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/index.php">Search</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/inject.php">Add to Library</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://forms.gle/Lf4Jp3AweCkxNVpV8">Feedback</a>
      </li>
    </ul>
  </div>
</nav>


<div class="container">
  </head>
  <body>
    <h1 class='text-center'>Subjects</h1>
  <div class="row">
  <div class="col-4">
    <ul class="subject-list">
      <li><a href="#oali">Analog Electronics</a></li>
      <li><a href="#bect">Electric Circuits</a></li>
      <li><a href="#coel">Consumer Electronics</a></li>
      <li><a href="#cosy">Control Systems</a></li>
      <li><a href="#diel">Digital Electronics</a></li>
      <li><a href="#doem">Design Of Electrical Machines</a></li>
      <li><a href="#dsip">Digital Signal Processing</a></li>
    </ul>
  </div>
  <div class="col-4">
    <ul class="subject-list">
      <li><a href="#edac">Electronic Devices And Circuits</a></li>
      <li><a href="#emfi">Electromagnetic Fields</a></li>
      <li><a href="#mach">Electrical Machines</a></li>
      <li><a href="#basc">Fundamentals of EEE</a></li>
      <li><a href="#main">Measurements</a></li>
      <li><a href="#mpmc">Microprocessors</a></li>
      <li><a href="#plsc">Plc And Scada</a></li>
    </ul>
  </div>
  <div class="col-4">
    <ul class="subject-list">
      <li><a href="#poel">Power Electronics</a></li>
      <li><a href="#posy">Power Systems</a></li>
      <li><a href="#phys">Physics</a></li>
      <li><a href="#prsw">Protection And Switch Gear</a></li>
      <li><a href="#slsd">Solid State Drives</a></li>
      <li><a href="#spem">Special Machines</a></li>
      <li><a href="#tmdt">Transmission And Distribution</a></li>
    </ul>
  </div>
</div>
<br><br>
        <?php
            // $con = MySQLi_connect("localhost", "root", "", "eeresources");
            $con = MySQLi_connect("localhost", "u121593376_adhithya", "63799740710@Adhithya", "u121593376_eeresources");

        if (MySQLi_connect_errno()) {
            echo "Failed to connect to MySQL: " . MySQLi_connect_error();
        }
        $subjects = array(
            "basc" => "Fundamentals of EEE",
            "bect" => "Electric Circuits",
            "coel" => "Consumer Electronics",
            "cosy" => "Control Systems",
            "diel" => "Digital Electronics",
            "doem" => "Design Of Electrical Machines",
            "dsip" => "Digital Signal Processing",
            "edac" => "Electronic Devices And Circuits",
            "emfi" => "Electromagnetic Fields",
            "mach" => "Electrical Machines",
            "main" => "Measurements",
            "mpmc" => "Microprocessors",
            "oali" => "Op Amp & Linear Ic",
            "phys" => "Physics",
            "plsc" => "Plc And Scada",
            "poel" => "Power Electronics",
            "posy" => "Power Systems",
            "prsw" => "Protection And Switch Gear",
            "slsd" => "Solid State Drives",
            "spem" => "Special Machines",
            "tmdt" => "Transmission And Distribution"
        );

        $query = "SELECT DISTINCT Subject, TopicName, `Resource Type`, `Category`  FROM resourcesmaster_01 ORDER BY Subject, TopicName";
        $result = MySQLi_query($con, $query);

        $currentSubject = "";
     ?>
<div class="row">
  <div class="col-xs-12">
    <p class="leg">Link Color Code:</p>
    <div class="rect">
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <span class="legend-circle purple-legend"></span> 
        <p class="legtext">Resources</p>
      </div>
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <span class="legend-circle yellow-legend"></span> 
        <p class="legtext">Simulation</p>
      </div>
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <span class="legend-circle green-legend"></span>  
        <p class="legtext">Books</p>
      </div>
    </div>
  </div>
</div>



       
      <?php while($row = MySQLi_fetch_array($result)) {
            $subject = $subjects[$row['Subject']];
            if ($currentSubject != $subject) {
                if ($currentSubject != "") {
                    echo "</div>";
                }
                echo "<p class='subject text-center' id='".$row['Subject']."'>" . $subject . "</p>";
                echo "<div class='row'>";
                $currentSubject = $subject;
            }
            echo "<div class='col-md-3'>";
            
            if ($row['Category'] === "boks") {
              $class = "green";
            } else if ($row['Category'] === "simu") {
              $class = "yellow";
            } else if ($row['Category'] === "reso") {
              $class = "purple";
            } else {
              $class = "linkbro"; 
            }
            
            echo "<a class='$class' href='https://airgapflux.co.in?search=" .$row['TopicName'] . "&subject=" . $row['Subject'] . "&restype=" . $row['Resource Type']. "'>";
            echo "<p>";
            echo "<p>"  . $row['TopicName'] . "</p>";
            echo "</a>";
            echo "</div>";
        }
        echo "</div>";
        MySQLi_close($con);
        ?>
        </div>

        <button class="go-to-top">
                <svg viewBox="0 0 24 24">
                    <path d="M7.41,15.41L12,10.83L16.59,15.41L18,14L12,8L6,14L7.41,15.41Z" />
                </svg>
            </button>
            <!-- <a title="GDPR-compliant Web Analytics" href="https://clicky.com/101400280"><img alt="Clicky" src="//static.getclicky.com/media/links/badge.gif" border="0" /></a> -->
<script async src="//static.getclicky.com/101400280.js"></script>
<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/101400280ns.gif" /></p></noscript>
</body>
</html>
