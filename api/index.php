<?php
header('Content-type: application/json');
header('Access-Control-Allow-Origin: *');

// Collect search parameters from the client
$subject = $_GET['subject'] ?? '';
$Name = $_GET['name'] ?? '';
$resType = $_GET['resType'] ?? '';
$limit = $_GET['limit'] ?? '12';

// Database credentials
$servername = "89.117.157.1";
$username = "u244798336_adhithya";
$password = "63799740710@Adhithya";
$dbname = "u244798336_agp_main";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("SELECT * FROM resourcesmaster_01 WHERE `Subject` LIKE ? AND `TopicName` LIKE ? AND `Resource Type` LIKE ? LIMIT $limit");
$subject = '%' . $subject . '%';
$Name = '%' . $Name . '%';
$resType = '%' . $resType . '%';
$stmt->bind_param("sss", $subject, $Name, $resType);

// Execute the prepared statement
$stmt->execute();

// Get the results
$result = $stmt->get_result();

// Fetch the results as an array
$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

// Convert the data array to JSON format
$json_output = json_encode($data);

// Close the prepared statement
$stmt->close();

// Close the connection
$conn->close();

// Display the JSON output
echo $json_output;
?>
