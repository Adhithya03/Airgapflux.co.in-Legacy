<?php

// $con = MySQLi_connect("localhost", "root", "", "eeresources");
// $con = MySQLi_connect("localhost", "u121593376_adhithya", "63799740710@Adhithya", "u121593376_eeresources");
$con = MySQLi_connect("89.117.188.204", "u121593376_adhithya", "63799740710@Adhithya", "u121593376_eeresources");
if (MySQLi_connect_errno()) {
    echo "Failed to connect to MySQL: " . MySQLi_connect_error();
}


if (isset($_POST["search"])) {

    $Name = mysqli_real_escape_string($con, $_POST["search"]);
    $subject = mysqli_real_escape_string($con, $_POST["subject"]);   
    // $resType = mysqli_real_escape_string($con, $_POST["restype"]);

    $Query = "SELECT * FROM resourcesmaster_01 WHERE `Subject` LIKE '%$subject%' AND `TopicName` LIKE '%$Name%' LIMIT 12";

    $ExecQuery = mysqli_query($con, $Query);
    $results = mysqli_fetch_all($ExecQuery, MYSQLI_ASSOC);

    if (empty($results)) {
      echo "<p class='text-muted'>No match found. Please try to think of different term.</p>";
    } else {
?>
<?php
foreach ($results as $Result) { ?>
  <div class="result-divider">
    <div class="divider"></div>
    <h2> 
      <?php 
        if ($Result["Category"] == "boks") {
          echo '<i class="material-icons">book</i> ';
        }
        elseif ($Result["Category"] == "simu") {
          echo '<i class="material-icons">computer</i> ';
        } elseif ($Result["Category"] == "reso") {
          echo '<i class="material-icons">lightbulb</i> ';
        }
        echo $Result["TopicName"]."</h2>";
      ?>
    <p class='starrat'> 
      <?php 
        for ($i = 0; $i < $Result["ConceptualRating"]; $i++) {
          echo '<i class="material-icons">star</i>';
        } 
      ?>
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
          require_once 'lib/parsedown-1.7.4/Parsedown.php';
          $Parsedown = new Parsedown();
          $markdown_text = $Result["Notes"];
          $html = $Parsedown->text($markdown_text);
          echo "<div class='notes'>". $html ."</div>";
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
        }
    }
            ?>
</body>
</html>