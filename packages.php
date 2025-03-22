<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packages - SocialTask Hub</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">
                <i class="fas fa-tasks me-2"></i>SocialTask Hub
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="packages.php">Packages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-light ms-2" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-warning ms-2" data-bs-toggle="modal" data-bs-target="#registerModal">Register</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Packages Section -->
    <section class="packages-section py-5">
        <div class="container">
            <h1 class="text-center mb-5">Choose Your Earning Package</h1>
            <div class="row g-4">
                <!-- Starter Package -->
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 package-card">
                        <div class="card-header bg-primary text-white text-center py-4">
                            <h3 class="mb-0">Starter</h3>
                        </div>
                        <div class="card-body text-center">
                            <div class="price-wrapper mb-4">
                                <span class="text-muted text-decoration-line-through">$18/month</span>
                                <h2 class="display-4 mb-0">$10</h2>
                                <span class="text-muted">/month</span>
                            </div>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Basic Tasks Access</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>5 Tasks Per Day</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Email Support</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Basic Analytics</li>
                            </ul>
                            <button type="button" class="btn btn-primary btn-lg w-100" onclick="selectPackage('Starter', 10)">
                                Select Package
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Standard Package -->
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 package-card">
                        <div class="card-header bg-success text-white text-center py-4">
                            <h3 class="mb-0">Standard</h3>
                        </div>
                        <div class="card-body text-center">
                            <div class="price-wrapper mb-4">
                                <span class="text-muted text-decoration-line-through">$36/month</span>
                                <h2 class="display-4 mb-0">$20</h2>
                                <span class="text-muted">/month</span>
                            </div>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Premium Tasks Access</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>10 Tasks Per Day</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Priority Support</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Detailed Analytics</li>
                            </ul>
                            <button type="button" class="btn btn-success btn-lg w-100" onclick="selectPackage('Standard', 20)">
                                Select Package
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Premium Package -->
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 package-card">
                        <div class="card-header bg-info text-white text-center py-4">
                            <h3 class="mb-0">Premium</h3>
                        </div>
                        <div class="card-body text-center">
                            <div class="price-wrapper mb-4">
                                <span class="text-muted text-decoration-line-through">$54/month</span>
                                <h2 class="display-4 mb-0">$30</h2>
                                <span class="text-muted">/month</span>
                            </div>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>VIP Tasks Access</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>20 Tasks Per Day</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>24/7 Support</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Advanced Analytics</li>
                            </ul>
                            <button type="button" class="btn btn-info btn-lg w-100" onclick="selectPackage('Premium', 30)">
                                Select Package
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Elite Package -->
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 package-card">
                        <div class="card-header bg-warning text-dark text-center py-4">
                            <h3 class="mb-0">Elite</h3>
                        </div>
                        <div class="card-body text-center">
                            <div class="price-wrapper mb-4">
                                <span class="text-muted text-decoration-line-through">$90/month</span>
                                <h2 class="display-4 mb-0">$50</h2>
                                <span class="text-muted">/month</span>
                            </div>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Unlimited Tasks Access</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Unlimited Tasks Per Day</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Dedicated Support</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Custom Analytics</li>
                            </ul>
                            <button type="button" class="btn btn-warning btn-lg w-100" onclick="selectPackage('Elite', 50)">
                                Select Package
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Package Selection Modal -->
    <div class="modal fade" id="packageModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Complete Your Purchase</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="packageForm" action="payment/submit.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="package_name" id="package_name">
                        <input type="hidden" name="package_price" id="package_price">
                        
                        <div class="mb-3">
                            <label class="form-label">Select Your Country</label>
                            <select class="form-select" name="country" id="countrySelect" required>
                                <option value="">Choose a country</option>
                                <option value="UK">United Kingdom</option>
                                <option value="IN">India</option>
                                <option value="PK">Pakistan</option>
                                <option value="BD">Bangladesh</option>
                            </select>
                        </div>

                        <div id="paymentDetails" class="d-none">
                            <div class="alert alert-info">
                                <h6 class="mb-3">Bank Details</h6>
                                <div id="bankDetails"></div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Upload Payment Screenshot</label>
                                <input type="file" class="form-control" name="payment_proof" accept="image/*" required>
                                <div class="form-text">Please upload a screenshot of your payment transaction.</div>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Submit Payment Proof</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Login to Your Account</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form action="auth/login.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>
                    <div class="text-center mt-3">
                        <p>Or login with:</p>
                        <button class="btn btn-outline-danger me-2">
                            <i class="fab fa-google"></i> Google
                        </button>
                        <button class="btn btn-outline-primary">
                            <i class="fab fa-facebook-f"></i> Facebook
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Register Modal -->
    <div class="modal fade" id="registerModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create Your Account</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form action="auth/register.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" name="phone">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Country</label>
                            <select class="form-select" name="country" required>
                                <option value="">Select Country</option>
                                <option value="UK">United Kingdom</option>
                                <option value="IN">India</option>
                                <option value="PK">Pakistan</option>
                                <option value="BD">Bangladesh</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" name="confirm_password" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Register</button>
                    </form>
                    <div class="text-center mt-3">
                        <p>Or register with:</p>
                        <button class="btn btn-outline-danger me-2">
                            <i class="fab fa-google"></i> Google
                        </button>
                        <button class="btn btn-outline-primary">
                            <i class="fab fa-facebook-f"></i> Facebook
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>SocialTask Hub</h5>
                    <p>Turn your social media activity into a profitable venture.</p>
                </div>
                <div class="col-md-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.php" class="text-white">Home</a></li>
                        <li><a href="packages.php" class="text-white">Packages</a></li>
                        <li><a href="about.php" class="text-white">About Us</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Connect With Us</h5>
                    <div class="social-links">
                        <a href="#" class="text-white me-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white me-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <div class="text-center">
                <p class="mb-0">&copy; 2024 SocialTask Hub. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Bundle JS (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="js/script.js"></script>
    <script>
        let myModal;
        
        document.addEventListener('DOMContentLoaded', function() {
            myModal = new bootstrap.Modal(document.getElementById('packageModal'));
        });
        
        function selectPackage(packageName, price) {
            document.getElementById('package_name').value = packageName;
            document.getElementById('package_price').value = price;
            
            const countrySelect = document.getElementById('countrySelect');
            const paymentDetails = document.getElementById('paymentDetails');
            if (countrySelect) countrySelect.value = '';
            if (paymentDetails) paymentDetails.classList.add('d-none');
            
            myModal.show();
        }
    </script>
</body>
</html>