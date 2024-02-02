<?php
// Set the target URL
$targetUrl = 'https://now.gg';

// Set up cURL to make the request
$ch = curl_init($targetUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the request
$response = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
    header('HTTP/1.1 500 Internal Server Error');
    echo 'Error fetching data';
} else {
    // Set CORS headers
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    // Return the response
    echo $response;
}

// Close cURL session
curl_close($ch);
?>