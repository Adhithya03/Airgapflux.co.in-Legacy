<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

function fetch_gpt_response($query, $api_key) {
    require 'vendor/autoload.php';

    $api_url = "https://api.openai.com/v1/chat/completions";
    $messages = [
        ["role" => "system", "content" => "You are a helpful assistant that translates user queries into concise search terms."],
        ["role" => "user", "content" => $query]
    ];

    $client = new Client();
    $response = $client->post($api_url, [
        'headers' => [
            'Content-Type' => 'application/json',
            'Authorization' => "Bearer {$api_key}"
        ],
        'json' => [
            'model' => "gpt-3.5-turbo",
            'messages' => $messages,
            'max_tokens' => 10, // You can adjust this value if needed
            'temperature' => 0.7, // Adjust this value for more exploration (higher value) or more focused response (lower value)
        ]
    ]);

    $content = json_decode($response->getBody()->getContents(), true);
    $size = count($content['choices']);
    $rewritten_query = $size > 0 ? $content['choices'][0]['message']['content'] : '';

    return trim($rewritten_query);
}


echo fetch_gpt_response("explain about armature reaction", "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");

?>
</body>
</html>