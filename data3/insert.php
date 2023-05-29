<?php
// Database connection
$servername = "89.117.188.204";
$username = "u121593376_root";
$password = "63799740710@Adhithya";
$dbname = "u121593376_agp_rdbms";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get the form data
$resourceTitle = $_POST['resourceTitle'];
$resourceLink = $_POST['resourceLink'];
$resourceDescription = $_POST['resourceDescription'];
$ratingID = $_POST['ratingID'];
$notes = $_POST['notes'];
$conceptualRating = $_POST['conceptualRating'];
$levelOfDifficulty = $_POST['levelOfDifficulty'];
$summary = $_POST['summary'];

// Insert data into the respective tables
$sql_resources = "INSERT INTO Resources (ResourceTitle, ResourceLink, ResourceDescription) VALUES ('$resourceTitle', '$resourceLink', '$resourceDescription')";
$sql_notes = "INSERT INTO Notes (RatingID, Notes) VALUES ('$ratingID', '$notes')";
$sql_resource_ratings = "INSERT INTO ResourceRatings(RatingID, ConceptualRating, LevelOfDifficulty, Summary) VALUES ('$ratingID', '$conceptualRating', '$levelOfDifficulty', '$summary')";

if ($conn->query($sql_resources) === TRUE && $conn->query($sql_notes) === TRUE && $conn->query($sql_resource_ratings) === TRUE) {
  echo "New resource, notes, and ratings added successfully.";
} else {
  echo "Error: " . $sql_resources . "<br>" . $conn->error;
  echo "Error: " . $sql_notes . "<br>" . $conn->error;
  echo "Error: " . $sql_resource_ratings . "<br>" . $conn->error;
}

$conn->close();
?>
