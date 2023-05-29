<?php
// API endpoint to get response for user query
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.openai.com/v1/chat/completions",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => array(
        "Content-Type: application/json",
        "Authorization: Bearer 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"
    ),
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode(array(
        "model" => "gpt-3.5-turbo",
        "messages" => array(
            array("role" => "user", "content" => "You are a helpful assistant that translates user queries into concise search terms"),
            array("role" => "user", "content" => $_POST["query"])
        )
    ))
));
$response = curl_exec($curl);
curl_close($curl);

// Parse API response
$response = json_decode($response, true);
$aiResponse = $response['choices'][0]['message']['content'];
$keywords = $aiResponseArray;
echo json_encode($aiResponse);

// Check if there are any keywords
if (empty($aiResponseArray)) {
    echo 'No keywords found.';
    exit;
}

// $like_condition = implode(' OR ', array_fill(0, count($keywords), 'TopicName LIKE ?'));

// $output = array();
// foreach ($aiResponseArray as $keyword) {
// 	$conn = mysqli_connect("89.117.188.204", "u121593376_adhithya", "63799740710@Adhithya", "u121593376_eeresources");

// 	if (!$conn) {
// 		die("Connection failed: " . mysqli_connect_error());
// 	}

// 	$sql = "SELECT TopicName, Resources FROM resourcesmaster_01 WHERE  $like_condition LIMIT 7";
// 	echo json_encode($sql);
//     $result = mysqli_query($conn, $sql);

// 	if (mysqli_num_rows($result) > 0) {
// 		while($row = mysqli_fetch_assoc($result)) {
// 			$output[] = array(
// 				"type" => "video",
// 				"content" => $row['link']
// 			);
// 		}
// 	}
// 	mysqli_close($conn);
// }

// // If no video links found, send default message
// if (count($output) == 0) {
// 	$output[] = array(
// 		"type" => "text",
// 		"content" => "Sorry, no videos found for your query."
// 	);
// }

// // Send response back to the chat app
// echo json_encode($output);

?>
