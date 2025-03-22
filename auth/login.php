<?php
require_once '../config.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = sanitize_input($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $response = ['success' => false, 'message' => ''];

    // Basic validation
    if (empty($email) || empty($password)) {
        $response['message'] = 'Please fill in all fields.';
    } elseif (!is_valid_email($email)) {
        $response['message'] = 'Invalid email format.';
    } else {
        // TODO: Add database connection and user verification
        // For demo purposes, using hardcoded credentials
        if ($email === 'demo@example.com' && $password === 'demo123') {
            $_SESSION['user_id'] = 1;
            $_SESSION['user_email'] = $email;
            $_SESSION['user_name'] = 'Demo User';
            $response['success'] = true;
            $response['message'] = 'Login successful!';
        } else {
            $response['message'] = 'Invalid credentials.';
        }
    }

    // Send JSON response
    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}

// If not POST request, redirect to home
header('Location: ../index.php');
exit;