// Form Validation
document.addEventListener('DOMContentLoaded', function() {
    // Password confirmation validation
    const registerForm = document.querySelector('#registerModal form');
    if (registerForm) {
        registerForm.addEventListener('submit', function(e) {
            const password = registerForm.querySelector('input[name="password"]');
            const confirmPassword = registerForm.querySelector('input[name="confirm_password"]');
            
            if (password.value !== confirmPassword.value) {
                e.preventDefault();
                alert('Passwords do not match!');
            }
        });
    }

    // Package selection handling
    const countrySelect = document.getElementById('countrySelect');
    if (countrySelect) {
        countrySelect.addEventListener('change', function() {
            const country = this.value;
            const paymentDetails = document.getElementById('paymentDetails');
            const bankDetails = document.getElementById('bankDetails');
            
            if (country) {
                paymentDetails.classList.remove('d-none');
                bankDetails.innerHTML = getBankDetails(country);
            } else {
                paymentDetails.classList.add('d-none');
            }
        });
    }

    // Add animation classes to elements when they come into view
    const animateOnScroll = function() {
        const elements = document.querySelectorAll('.feature-card, .package-card');
        elements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
            const elementBottom = element.getBoundingClientRect().bottom;
            
            if (elementTop < window.innerHeight && elementBottom > 0) {
                element.classList.add('fade-in');
            }
        });
    };

    // Run on scroll
    window.addEventListener('scroll', animateOnScroll);
    // Run once on load
    animateOnScroll();
});

// Package Selection Handler
function selectPackage(packageName, price) {
    document.getElementById('package_name').value = packageName;
    document.getElementById('package_price').value = price;
    
    // Reset country selection and hide payment details
    const countrySelect = document.getElementById('countrySelect');
    const paymentDetails = document.getElementById('paymentDetails');
    if (countrySelect) {
        countrySelect.value = '';
    }
    if (paymentDetails) {
        paymentDetails.classList.add('d-none');
    }
    
    // Show modal using Bootstrap's data attribute
    const modalElement = document.getElementById('packageModal');
    const modal = new bootstrap.Modal(modalElement);
    modal.show();
}

// Bank Details by Country
function getBankDetails(country) {
    const bankDetails = {
        'UK': {
            'Bank Name': 'Barclays Bank',
            'Account Number': '12345678',
            'Sort Code': '12-34-56',
            'SWIFT': 'BARCGB22'
        },
        'IN': {
            'Bank Name': 'State Bank of India',
            'Account Number': '87654321',
            'IFSC Code': 'SBIN0123456',
            'UPI ID': 'business@sbi'
        },
        'PK': {
            'Bank Name': 'HBL Bank',
            'Account Number': '98765432',
            'IBAN': 'PK36HABB0000123456789',
            'Branch Code': '0123'
        },
        'BD': {
            'Bank Name': 'BRAC Bank',
            'Account Number': '45678912',
            'Branch': 'Dhaka Main',
            'Routing Number': '123456789'
        }
    };

    let html = '';
    for (const [key, value] of Object.entries(bankDetails[country])) {
        html += `<p class="mb-1"><strong>${key}:</strong> ${value}</p>`;
    }
    return html;
}

// Social Login Handlers
document.querySelectorAll('.btn-outline-danger, .btn-outline-primary').forEach(button => {
    button.addEventListener('click', function(e) {
        e.preventDefault();
        alert('Social login integration coming soon!');
    });
});

// Navbar Active State
const setActiveNavItem = () => {
    const currentPage = window.location.pathname.split('/').pop() || 'index.php';
    document.querySelectorAll('.nav-link').forEach(link => {
        if (link.getAttribute('href') === currentPage) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });
};

// Form File Input Validation
document.querySelectorAll('input[type="file"]').forEach(input => {
    input.addEventListener('change', function() {
        const file = this.files[0];
        const maxSize = 5 * 1024 * 1024; // 5MB
        const allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];

        if (file) {
            if (file.size > maxSize) {
                alert('File is too large. Maximum size is 5MB.');
                this.value = '';
            } else if (!allowedTypes.includes(file.type)) {
                alert('Invalid file type. Please upload an image (JPEG, PNG, or GIF).');
                this.value = '';
            }
        }
    });
});

// Run on page load
setActiveNavItem();