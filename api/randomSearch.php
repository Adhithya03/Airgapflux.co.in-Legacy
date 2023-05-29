<?php
header('Content-type: application/json');
header('Access-Control-Allow-Origin: *');

$servername = "89.117.157.1";
$username = "u244798336_adhithya";
$password = "63799740710@Adhithya";
$dbname = "u244798336_agp_main";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("SELECT DISTINCT TopicName FROM resourcesmaster_01 WHERE LENGTH(TopicName) < 20 ORDER BY RAND() LIMIT 1");
$stmt->execute();

$result = $stmt->get_result();


$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

$json_output = json_encode($data);

$stmt->close();
$conn->close();

echo $json_output;
?>
