<?php
require_once '../config.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get and sanitize input
    $package_name = sanitize_input($_POST['package_name'] ?? '');
    $package_price = floatval($_POST['package_price'] ?? 0);
    $country = sanitize_input($_POST['country'] ?? '');
    
    $response = ['success' => false, 'message' => ''];

    // Validation
    if (empty($package_name) || $package_price <= 0 || empty($country)) {
        $response['message'] = 'Invalid package selection or country.';
    } elseif (!isset($_FILES['payment_proof']) || $_FILES['payment_proof']['error'] !== UPLOAD_ERR_OK) {
        $response['message'] = 'Please upload your payment proof.';
    } elseif (!in_array($_FILES['payment_proof']['type'], ALLOWED_FILE_TYPES)) {
        $response['message'] = 'Invalid file type. Please upload an image (JPEG, PNG, or GIF).';
    } elseif ($_FILES['payment_proof']['size'] > MAX_FILE_SIZE) {
        $response['message'] = 'File is too large. Maximum size is 5MB.';
    } else {
        // Create uploads directory if it doesn't exist
        if (!file_exists(UPLOAD_PATH)) {
            mkdir(UPLOAD_PATH, 0755, true);
        }

        // Generate unique filename
        $file_extension = pathinfo($_FILES['payment_proof']['name'], PATHINFO_EXTENSION);
        $unique_filename = uniqid('payment_') . '.' . $file_extension;
        $upload_path = UPLOAD_PATH . $unique_filename;

        // Move uploaded file
        if (move_uploaded_file($_FILES['payment_proof']['tmp_name'], $upload_path)) {
            // TODO: Add database entry for payment submission
            // For demo purposes, simulate successful submission
            
            // Store payment details in session
            $_SESSION['pending_payment'] = [
                'package' => $package_name,
                'price' => $package_price,
                'country' => $country,
                'proof_file' => $unique_filename,
                'submitted_at' => date('Y-m-d H:i:s')
            ];

            $response['success'] = true;
            $response['message'] = 'Payment proof submitted successfully! Our team will verify your payment within 24 hours.';
        } else {
            $response['message'] = 'Failed to upload payment proof. Please try again.';
        }
    }

    // Send JSON response
    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}

// If not POST request, redirect to packages page
header('Location: ../packages.php');
exit;
