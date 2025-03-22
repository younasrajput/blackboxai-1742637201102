<?php
require_once '../config.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get and sanitize input
    $name = sanitize_input($_POST['name'] ?? '');
    $email = sanitize_input($_POST['email'] ?? '');
    $phone = sanitize_input($_POST['phone'] ?? '');
    $country = sanitize_input($_POST['country'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    $response = ['success' => false, 'message' => ''];

    // Validation
    if (empty($name) || empty($email) || empty($country) || empty($password) || empty($confirm_password)) {
        $response['message'] = 'Please fill in all required fields.';
    } elseif (!is_valid_email($email)) {
        $response['message'] = 'Invalid email format.';
    } elseif (strlen($password) < 8) {
        $response['message'] = 'Password must be at least 8 characters long.';
    } elseif ($password !== $confirm_password) {
        $response['message'] = 'Passwords do not match.';
    } elseif (!array_key_exists($country, $countries)) {
        $response['message'] = 'Invalid country selection.';
    } else {
        // TODO: Add database connection and user creation
        // For demo purposes, simulate successful registration
        $_SESSION['user_id'] = time(); // Using timestamp as temporary ID
        $_SESSION['user_email'] = $email;
        $_SESSION['user_name'] = $name;
        $_SESSION['user_country'] = $country;
        
        $response['success'] = true;
        $response['message'] = 'Registration successful! Please select a package to start earning.';
    }

    // Send JSON response
    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}

// If not POST request, redirect to home
header('Location: ../index.php');
exit;