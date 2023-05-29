<?php
header('Content-type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Content-Type, Accept');

$input_data = file_get_contents('php://input');

$data = json_decode($input_data, true);


$subject = $data['subject'];
$category = $data['category'];
$topicname = $data['topicname'];
$resources = $data['resources'];
$restype = $data['restype'];
$notes = $data['notes'];
$rating = $data['rating'];
$difficulty = $data['difficulty'];


function convertYoutubeUrl($url){
  $pattern = '/^https?:\/\/(www\.)?youtu(be|\.be)\/(.*)$/';
  if (preg_match($pattern, $url)) {
      $url_parts = parse_url($url);
      $path_parts = pathinfo($url_parts['path']);
      $video_id = $path_parts['filename'];
      $time = isset($url_parts['query']) ? '&'.trim($url_parts['query']) : '';
      $new_url = 'https://www.youtube.com/watch?v='.$video_id.$time;
      return $new_url;
  } else { 
      return $url;
  }
}

$youtube_link  = convertYoutubeUrl($resources);
$resources  = convertYoutubeUrl($resources);


$servername = "89.117.157.1";
$username = "u244798336_adhithya";
$password = "63799740710@Adhithya";
$dbname = "u244798336_agp_main";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Insert data into database including the video ID and thumbnail filename
if (isset($video_id)) {
    $sql = "INSERT INTO resourcesmaster_01 (Subject, Category, TopicName, Resources, `Resource Type`, Notes, ConceptualRating, `LevelOfDifficulty`) VALUES ('$subject', '$category', '$topicname', '$resources', $restype, '$notes', $rating, $difficulty)";
} else {
    $sql = "INSERT INTO resourcesmaster_01 (Subject, Category, TopicName, Resources, `Resource Type`, Notes, ConceptualRating, `LevelOfDifficulty`) VALUES ('$subject', '$category', '$topicname', '$resources', $restype, '$notes', $rating, $difficulty)";
}

if (mysqli_query($conn, $sql)) {
    $response = ["success" => true, "message" => "Added your resource, Thank you :)"];
} else {
    $response = ["success" => false, "message" =>  mysqli_error($conn)];
}

$query = "SELECT id FROM resourcesmaster_01 ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $query);
$id = mysqli_fetch_assoc($result)['id'];





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
    
    $filename = $id . ".jpg";
    $path = "../thumbnailcache/images/" . $filename;
    $thumbnail_data = file_get_contents("https://img.youtube.com/vi/" . $video_id . "/hqdefault.jpg");
    $thumbnail = imagecreatefromstring($thumbnail_data);
    $height = imagesy($thumbnail);
    $cropped_thumbnail = imagecreatetruecolor(imagesx($thumbnail), $height - 90);
    imagecopy($cropped_thumbnail, $thumbnail, 0, 0, 0, 45, imagesx($thumbnail), $height - 90);
    imagejpeg($cropped_thumbnail, $path);
    
    
  }
  
  mysqli_close($conn);
  echo json_encode($response);
  ?>  