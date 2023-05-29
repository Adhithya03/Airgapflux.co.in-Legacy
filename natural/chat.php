<?php

// Set up Curl request to ChatGpt API using CORS Anywhere
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
            array("role" => "system", "content" => "You are a helpful assistant that translates user queries into concise search terms"),
            array("role" => "user", "content" => $_POST["query"])
        )
    ))
));
$response = curl_exec($curl);
curl_close($curl);

$response = json_decode($response, true);
$aiResponse = $response['choices'][0]['message']['content'];
// $aiResponseArray = array_map('trim', explode(',', $aiResponse));

echo $aiResponse;

// Check if there are any keywords
if (empty($aiResponseArray)) {
    echo 'No keywords found.';
    exit;
}

// $con = new mysqli("89.117.188.204", "u121593376_adhithya", "63799740710@Adhithya", "u121593376_eeresources");

// if ($con->connect_error) {
//     die("Connection failed: " . $con->connect_error);
// }

// $keywords = $aiResponseArray;

// $like_condition = implode(' OR ', array_fill(0, count($keywords), 'TopicName LIKE ?'));

// // Prepare the query statement
// $stmt = $con->prepare("SELECT TopicName, Resources FROM resourcesmaster_01 WHERE $like_condition LIMIT 7");

// // Bind the parameters to the placeholder
// $stmt_params = array_map(function ($kw) {
//     return "%$kw%";
// }, $keywords);
// $stmt->bind_param(str_repeat('s', count($stmt_params)), ...$stmt_params);

// $stmt->execute();
// $result = $stmt->get_result();

// // Check if any rows were returned
// if ($result->num_rows > 0) {
//     $output = '';
//     // Loop through each row and print the data to the screen
//     while ($row = mysqli_fetch_array($result)) {
//         $output .= '<p>' . $row['TopicName'] . '</p>';
//         if (strpos($row['Resources'], 'youtube.com')) {
//             $video_id = explode('?v=', $row['Resources']);
//             $output .= '<a href="' . $row['Resources'] . '" class="video"><img src="https://img.youtube.com/vi/' . $video_id[1] . '/hqdefault.jpg" /><span class="play-button"></span></a>';
//         } else {
//             $output .= '<p>' . $row['Resources'] . '</p>';
//         }
//         $output .= '<br>';
//     }
//     echo $output;
// } else {
//     echo 'No results found.';
// }

// $stmt->close();
// $con->close();
