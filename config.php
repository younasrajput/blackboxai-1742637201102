<?php
// Database Configuration (if needed later)
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'socialtaskhub');

// Package Configuration
$packages = [
    'Starter' => [
        'name' => 'Starter',
        'price_before' => 18,
        'price_after' => 10,
        'features' => [
            'Basic Tasks Access',
            '5 Tasks Per Day',
            'Email Support',
            'Basic Analytics'
        ]
    ],
    'Standard' => [
        'name' => 'Standard',
        'price_before' => 36,
        'price_after' => 20,
        'features' => [
            'Premium Tasks Access',
            '10 Tasks Per Day',
            'Priority Support',
            'Detailed Analytics'
        ]
    ],
    'Premium' => [
        'name' => 'Premium',
        'price_before' => 54,
        'price_after' => 30,
        'features' => [
            'VIP Tasks Access',
            '20 Tasks Per Day',
            '24/7 Support',
            'Advanced Analytics'
        ]
    ],
    'Elite' => [
        'name' => 'Elite',
        'price_before' => 90,
        'price_after' => 50,
        'features' => [
            'Unlimited Tasks Access',
            'Unlimited Tasks Per Day',
            'Dedicated Support',
            'Custom Analytics'
        ]
    ]
];

// Country-specific Bank Details
$bankDetails = [
    'UK' => [
        'bank_name' => 'Barclays Bank',
        'account_number' => '12345678',
        'sort_code' => '12-34-56',
        'swift' => 'BARCGB22'
    ],
    'IN' => [
        'bank_name' => 'State Bank of India',
        'account_number' => '87654321',
        'ifsc_code' => 'SBIN0123456',
        'upi_id' => 'business@sbi'
    ],
    'PK' => [
        'bank_name' => 'HBL Bank',
        'account_number' => '98765432',
        'iban' => 'PK36HABB0000123456789',
        'branch_code' => '0123'
    ],
    'BD' => [
        'bank_name' => 'BRAC Bank',
        'account_number' => '45678912',
        'branch' => 'Dhaka Main',
        'routing_number' => '123456789'
    ]
];

// Available Countries
$countries = [
    'UK' => 'United Kingdom',
    'IN' => 'India',
    'PK' => 'Pakistan',
    'BD' => 'Bangladesh'
];

// Task Categories
$taskCategories = [
    'like' => 'Like & React',
    'follow' => 'Follow & Subscribe',
    'share' => 'Share & Repost',
    'comment' => 'Comment & Engage',
    'watch' => 'Watch & View'
];

// Social Media Platforms
$platforms = [
    'facebook' => 'Facebook',
    'instagram' => 'Instagram',
    'twitter' => 'Twitter',
    'youtube' => 'YouTube',
    'tiktok' => 'TikTok',
    'linkedin' => 'LinkedIn'
];

// Referral Settings
define('REFERRAL_REWARD', 5); // $5 per successful referral

// Payment Settings
define('MIN_WITHDRAWAL', 10); // Minimum withdrawal amount
define('WITHDRAWAL_FEE', 1); // Withdrawal fee

// System Settings
define('SITE_NAME', 'SocialTask Hub');
define('SITE_EMAIL', 'support@socialtaskhub.com');
define('ADMIN_EMAIL', 'admin@socialtaskhub.com');
define('SUPPORT_PHONE', '+1234567890');

// Error Reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Session Configuration
ini_set('session.cookie_httponly', 1);
ini_set('session.use_only_cookies', 1);
ini_set('session.cookie_secure', 1);

// Time Zone
date_default_timezone_set('UTC');

// File Upload Settings
define('MAX_FILE_SIZE', 5 * 1024 * 1024); // 5MB
define('ALLOWED_FILE_TYPES', ['image/jpeg', 'image/png', 'image/gif']);
define('UPLOAD_PATH', 'uploads/');

// Security Settings
define('HASH_ALGO', PASSWORD_BCRYPT);
define('HASH_COST', 12);

// API Keys (if needed)
define('GOOGLE_CLIENT_ID', '');
define('GOOGLE_CLIENT_SECRET', '');
define('FACEBOOK_APP_ID', '');
define('FACEBOOK_APP_SECRET', '');

// Function to sanitize input
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Function to validate email
function is_valid_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Function to generate random string
function generate_random_string($length = 10) {
    return bin2hex(random_bytes($length));
}

// Function to format currency
function format_currency($amount) {
    return '$' . number_format($amount, 2);
}

// Function to check if user is logged in
function is_logged_in() {
    return isset($_SESSION['user_id']);
}

// Function to check if user is admin
function is_admin() {
    return isset($_SESSION['is_admin']) && $_SESSION['is_admin'] === true;
}