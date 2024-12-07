<?php
// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the raw POST data
    $rawData = file_get_contents('php://input');

    // Decode the JSON data
    $data = json_decode($rawData, true);

    // Check if the required fields are present
    if (isset($data['date']) && isset($data['message'])) {
        // Validate the date format
        $date = DateTime::createFromFormat('Y-m-d', $data['date']);
        if ($date && $date->format('Y-m-d') === $data['date']) {
            // Check if the data matches the expected values
            if ($data['date'] === '2020-05-13' && $data['message'] === 'Init commit') {
                // Return the JSON response
                header('Content-Type: application/json');
                echo json_encode(['lastStop' => 'gandalf']);
            } else {
                // Data does not match the expected values
                http_response_code(400);
                echo "Incorrect data, go back to the very start of the history and you will find out!";
            }
        } else {
            // Invalid date format
            http_response_code(400);
            echo "Invalid date format. Expected format: YYYY-MM-DD.";
        }
    } else {
        // Missing fields
        http_response_code(400);
        echo "Invalid JSON. Required fields: 'date' and 'message'.";
    }
    return;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The King Huňka!</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<div class="m-4 text-center">
    <h1>Tell me, when and how it all started.</h1>

    <!--
        I will make it much easier for you, send me a letter, via post...
        History is a nice thing. When you have versions...
    -->

    <img src="hunka.png" alt="The KING!" class="img-fluid">
</div>

</body>
</html>
