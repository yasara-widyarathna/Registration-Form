<?php
session_start();

$response = array('logged_in' => false);

if (isset($_SESSION['user_id'])) {
    $response['logged_in'] = true;
}

echo json_encode($response);
?>
