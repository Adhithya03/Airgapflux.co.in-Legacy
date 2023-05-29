<!DOCTYPE html>
<html>
    <head>

        <meta property="og:title" content="AirGapFlux: Your One-Stop Resource for Electrical Engineering Education">
        <meta property="og:image" content="https://www.airgapflux.co.in/images/logo2.png">
        <meta property="og:url" content="https://www.airgapflux.co.in/">
        <meta property="og:type" content="website">
        

        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=0.75" />

        <title>Airgapflux Search</title>

        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="js/popper.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-4.4.1.js"></script>
        <!-- <script type="text/javascript" src="js/script.js"></script> -->
        <script type="text/javascript" src="js/script.js?t=<?= time() ?>"></script>
        
        <!-- CSS -->
        <link rel="stylesheet" href="css/bootstrap-4.4.1.css"/>
        <!-- <link rel="stylesheet" href="css/search.css"/> -->
        <link rel="stylesheet" type="text/css" href="css/search.css?t=<?= time() ?>">
        <link rel="stylesheet" type="text/css" href="css/main.css?t=<?= time() ?>">
        
        
        <!-- ICONS -->
        
        <link href="images/search.svg" rel="icon" type="image/x-icon" />
        <!-- For Stars Don't remove -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
      
        <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" /> -->
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Aboreto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Dosis&family=Exo+2:wght@300&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Montserrat:ital,wght@1,400&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&family=Figtree&family=Jura&family=Laila&family=Overpass&family=Quattrocento&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <p class='menu text-center'>Search</p>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/explore.php">Explore</a>
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
            <center>
                <h1>Airgapflux Search Page</h1>
            </center>
            <div class="row">
            <div class="col-md-6 col-sm-12">
                <fieldset>
                    <div class="search">
                        <input type="text" id="search" placeholder="Search our database" />
                    </div>
                </fieldset>
            </div>
    <div class="col-md-6 col-sm-12">
        <fieldset>
            <select name="subject" id="subject">
            <option selected value>Searching all Subjects</option>
                <option value="oali">Analog Electronics</option>
                <option value="bect">Circuit Theory </option>
                <option value="coel">Consumer Electronics </option>
                <option value="cosy">Control Systems </option>
                <option value="diel">Digital Electronics </option>
                <option value="doem">Design Of Electrical Machines </option>
                <option value="dsip">Digital Signal Processing </option>
                <option value="edac">Electronic Devices And Circuits </option>
                <option value="emfi">Electromagnetic Fields </option>
                <option value="mach">Electrical Machines </option>
                <option value="basc">Fundamentals</option>
                <option value="main">Measurements </option>
                <option value="mpmc">Microprocessors </option>
                <option value="plsc">Plc And Scada </option>
                <option value="poel">Power Electronics </option>
                <option value="posy">Power Systems </option>
                <option value="prsw">Protection And Switch Gear </option>
                <option value="phys">Physics</option>
                <option value="slsd">Solid State Drives </option>
                <option value="spem">Special Machines </option>
                <option value="tmdt">Transmission And Distribution </option>
        </select>
                </fieldset>
            </div>
            </div>
            
            <div>
                <div class="custom-radio">
                    <input type="radio" name="restype" id="resDis" value checked />
                    <label for="resDis">Any</label>
                </div>
                <div class="custom-radio">
                    <input type="radio" name="restype" id="em0" value="0" />
                    <label for="em0">Video</label>
                </div>
                <div class="custom-radio">
                    <input type="radio" name="restype" id="em1" value="1" />
                    <label for="em1">Text</label>
                </div>
            </div>

            <div class="disp" id="display">
            <p class='donno text-center'>Checkout our  <a href="https://beta.airgapflux.co.in/">new site</a> under construction </p>
            <!-- <p class='donno text-center text-muted'>Please use search box for topic of your interest. or visit <a href="https://airgapflux.co.in/explore.php">Explore page</a></p> -->
              <!-- <h4 class='rand text-center text-muted'>Below are some <strong>random</strong> resources from our database.</h4> -->
                    <?php
                    // $con = MySQLi_connect("localhost", "root", "", "eeresources");
                    // $con = MySQLi_connect("localhost", "u121593376_adhithya", "63799740710@Adhithya", "u121593376_eeresources");
                    $con = MySQLi_connect(
                        "89.117.188.204",
                        "u121593376_adhithya",
                        "63799740710@Adhithya",
                        "u121593376_eeresources"
                    );

                    $query =
                        "SELECT * FROM resourcesmaster_01 ORDER BY RAND() LIMIT 7";
                    $results = mysqli_query($con, $query);

                    foreach ($results as $Result) { ?>
                            <div class="divider"></div>
                            <h2> 
                            <?php
                            if ($Result["Category"] == "boks") {
                                echo '<i class="material-icons">book</i> ';
                            } elseif ($Result["Category"] == "simu") {
                                echo '<i class="material-icons">computer</i> ';
                            } elseif ($Result["Category"] == "reso") {
                                echo '<i class="material-icons">lightbulb</i> ';
                            }
                            echo $Result["TopicName"] . "</h2>";
                            ?>
                            <p class='starrat'> 
                            <?php for (
                                $i = 0;
                                $i < $Result["ConceptualRating"];
                                $i++
                            ) {
                                echo '<i class="material-icons">star</i>';
                            } ?>
                            </p>
                            <p class='ytlink'>
                            <a href='<?php echo $Result["Resources"]; ?>'>
                                <?php echo $Result["Resources"]; ?>
                            </a>
                            </p>
                        
                            <?php
                            $play_path = "./images/play.png";
                            $youtube_link = $Result["Resources"];

                            $parts = parse_url($youtube_link);
                            if (
                              isset($parts["host"]) &&
                              ($parts["host"] == "www.youtube.com" || $parts["host"] == "youtu.be") && // include both formats
                              strpos($parts["path"], "/playlist") === false &&
                              strpos($parts["path"], "/channel") === false &&
                              strpos($parts["path"], "/user") === false &&
                              strpos($parts["path"], "@") === false
                            ) {
                              if ($parts["host"] == "www.youtube.com") { // extract video id from query string for "watch?v=" format
                                parse_str($parts["query"], $query);
                                $video_id = substr($query["v"], 0, 11);
                              } else { // extract video id from path for "youtu.be/" format
                                $video_id = substr($parts["path"], 1, 11);
                              }
                              
                              $filename =  $Result["id"] . ".jpg";
                              $path = "./thumbnailcache/images/" . $filename;
                            
                                echo '<center>';
                                echo '<div class="aborder">';
                                echo '<a target="_blank" href="' . $youtube_link . '">';
                                echo '<img class="thumbnail" src="' . $path . '">';
                                echo '<img class="play-icon" src="' . $play_path . '">';
                                echo '</a>';
                                echo '</div>';
                                echo '</center>';
                            
                              } 
                          

                            if (!empty($Result["Notes"])) {
                                require_once "lib/parsedown-1.7.4/Parsedown.php";
                                $Parsedown = new Parsedown();
                                $markdown_text = $Result["Notes"];
                                $html = $Parsedown->text($markdown_text);
                                echo "<div class='notes'>" . $html . "</div>";
                            }
                            if (!empty($Result["Summary"])) {
                                    require_once 'lib/parsedown-1.7.4/Parsedown.php';
                                    $Parsedown = new Parsedown();
                                    $markdown_text = $Result["Summary"];
                                    $html = $Parsedown->text($markdown_text);
                                    $summary_id = "summary_" . uniqid(); // Generate a unique ID
                                    echo "<div class='summary'>";
                                    echo "<button onclick='document.getElementById(\"$summary_id\").style.display=\"block\";this.style.display=\"none\";'>Show Summary</button>";
                                    echo "<div id='$summary_id' style='display:none;'>". $html ."</div>";
                                    echo "</div>";
                                  }
                            }
                    ?>
            </div>
        </div>



        <footer class="footer fixed py-3 my-12">
            <p class="copy text-center text-muted"><a href="https://forms.gle/Lf4Jp3AweCkxNVpV8">Feedback</a></p>
            <p class="copy text-center text-muted">&copy; 2023 Adhithya</p>
        </footer>
        <button class="go-to-top">
                <svg viewBox="0 0 24 24">
                    <path d="M7.41,15.41L12,10.83L16.59,15.41L18,14L12,8L6,14L7.41,15.41Z" />
                </svg>
            </button>
    </body>
</html>