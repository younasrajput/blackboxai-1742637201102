<?php
require_once '../config.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get and sanitize input
    $package_name = sanitize_input($_POST['package_name'] ?? '');
    $package_price = floatval($_POST['package_price'] ?? 0);
    $country = sanitize_input($_POST['country'] ?? '');
    
    $response = ['success' => false, 'message' => ''];

    // Validate package selection
    if (!array_key_exists($package_name, $packages)) {
        $response['message'] = 'Invalid package selection.';
        header('Content-Type: application/json');
        echo json_encode($response);
        exit;
    }

    // Validate country selection
    if (!array_key_exists($country, $countries)) {
        $response['message'] = 'Invalid country selection.';
        header('Content-Type: application/json');
        echo json_encode($response);
        exit;
    }

    // Handle file upload
    if (!isset($_FILES['payment_proof']) || $_FILES['payment_proof']['error'] !== UPLOAD_ERR_OK) {
        $response['message'] = 'Please upload your payment proof.';
        header('Content-Type: application/json');
        echo json_encode($response);
        exit;
    }

    $file = $_FILES['payment_proof'];
    
    // Validate file size
    if ($file['size'] > MAX_FILE_SIZE)
