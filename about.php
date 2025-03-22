<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - SocialTask Hub</title>
    
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
                        <a class="nav-link" href="packages.php">Packages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="about.php">About Us</a>
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

    <!-- About Hero Section -->
    <section class="about-hero py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">About SocialTask Hub</h1>
                    <p class="lead mb-4">We're revolutionizing the way people earn money through social media engagement. Our platform connects users with opportunities to monetize their social media presence while helping businesses grow their online reach.</p>
                    <div class="d-flex gap-3">
                        <div class="text-center">
                            <h3 class="text-primary mb-2">10K+</h3>
                            <p class="mb-0">Active Users</p>
                        </div>
                        <div class="text-center">
                            <h3 class="text-primary mb-2">50K+</h3>
                            <p class="mb-0">Tasks Completed</p>
                        </div>
                        <div class="text-center">
                            <h3 class="text-primary mb-2">100+</h3>
                            <p class="mb-0">Countries</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="https://images.pexels.com/photos/3183150/pexels-photo-3183150.jpeg" alt="Team working" class="img-fluid rounded-3 shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- Our Mission Section -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <i class="fas fa-bullseye fa-3x text-primary mb-3"></i>
                            <h3>Our Mission</h3>
                            <p class="mb-0">To create opportunities for people worldwide to earn income through social media engagement while helping businesses grow their online presence.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <i class="fas fa-eye fa-3x text-primary mb-3"></i>
                            <h3>Our Vision</h3>
                            <p class="mb-0">To become the world's leading platform for monetizing social media activity and creating meaningful connections between users and businesses.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <i class="fas fa-heart fa-3x text-primary mb-3"></i>
                            <h3>Our Values</h3>
                            <p class="mb-0">We believe in transparency, fairness, and creating value for both our users and businesses through authentic social media engagement.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">How SocialTask Hub Works</h2>
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="text-center">
                        <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 80px; height: 80px;">
                            <i class="fas fa-user-plus fa-2x"></i>
                        </div>
                        <h4>1. Sign Up</h4>
                        <p>Create your account and choose your preferred earning package.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center">
                        <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 80px; height: 80px;">
                            <i class="fas fa-tasks fa-2x"></i>
                        </div>
                        <h4>2. Access Tasks</h4>
                        <p>Browse available tasks that match your interests and skills.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center">
                        <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 80px; height: 80px;">
                            <i class="fas fa-check-circle fa-2x"></i>
                        </div>
                        <h4>3. Complete Tasks</h4>
                        <p>Engage with social media content and submit proof of completion.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center">
                        <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 80px; height: 80px;">
                            <i class="fas fa-money-bill-wave fa-2x"></i>
                        </div>
                        <h4>4. Get Paid</h4>
                        <p>Earn money for completed tasks and grow your income.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Meet Our Team</h2>
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm">
                        <img src="https://images.pexels.com/photos/2379004/pexels-photo-2379004.jpeg" class="card-img-top" alt="Team member">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-1">John Smith</h5>
                            <p class="text-muted mb-3">CEO & Founder</p>
                            <div class="social-links">
                                <a href="#" class="text-dark me-2"><i class="fab fa-linkedin"></i></a>
                                <a href="#" class="text-dark me-2"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm">
                        <img src="https://images.pexels.com/photos/3796217/pexels-photo-3796217.jpeg" class="card-img-top" alt="Team member">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-1">Sarah Johnson</h5>
                            <p class="text-muted mb-3">Operations Director</p>
                            <div class="social-links">
                                <a href="#" class="text-dark me-2"><i class="fab fa-linkedin"></i></a>
                                <a href="#" class="text-dark me-2"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm">
                        <img src="https://images.pexels.com/photos/2379005/pexels-photo-2379005.jpeg" class="card-img-top" alt="Team member">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-1">Mike Wilson</h5>
                            <p class="text-muted mb-3">Tech Lead</p>
                            <div class="social-links">
                                <a href="#" class="text-dark me-2"><i class="fab fa-linkedin"></i></a>
                                <a href="#" class="text-dark me-2"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm">
                        <img src="https://images.pexels.com/photos/3796235/pexels-photo-3796235.jpeg" class="card-img-top" alt="Team member">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-1">Emily Brown</h5>
                            <p class="text-muted mb-3">Customer Success</p>
                            <div class="social-links">
                                <a href="#" class="text-dark me-2"><i class="fab fa-linkedin"></i></a>
                                <a href="#" class="text-dark me-2"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="js/script.js"></script>
</body>
</html>