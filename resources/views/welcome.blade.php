<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punjab Board of Technical Education</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 100px 0;
        }
        .feature-box {
            padding: 30px;
            border-radius: 10px;
            margin-bottom: 30px;
            transition: transform 0.3s;
        }
        .feature-box:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-graduation-cap"></i> PBTE Lahore
            </a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="/admin/dashboard">Admin Login</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section text-center">
        <div class="container">
            <h1 class="display-4 mb-4">Punjab Board of Technical Education</h1>
            <p class="lead mb-4">First Annual Examination, 2001 - Diploma Verification System</p>
            <a href="/admin/dashboard" class="btn btn-light btn-lg">Admin Dashboard</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-box bg-primary text-white">
                        <i class="fas fa-user-graduate fa-3x mb-3"></i>
                        <h4>Student Management</h4>
                        <p>Easily manage student records and diploma information</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box bg-success text-white">
                        <i class="fas fa-file-pdf fa-3x mb-3"></i>
                        <h4>PDF Generation</h4>
                        <p>Generate and download diplomas in PDF format</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box bg-info text-white">
                        <i class="fas fa-search fa-3x mb-3"></i>
                        <h4>Result Verification</h4>
                        <p>Verify student results through unique roll numbers</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How to Use -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">How to Use the System</h2>
            <div class="row">
                <div class="col-md-6">
                    <h5>For Administrators:</h5>
                    <ol>
                        <li>Go to Admin Dashboard</li>
                        <li>Add new students with complete information</li>
                        <li>Manage existing student records</li>
                        <li>Generate diplomas and results</li>
                    </ol>
                </div>
                <div class="col-md-6">
                    <h5>For Students:</h5>
                    <ol>
                        <li>Get your unique roll number from admin</li>
                        <li>Visit: yourdomain.com/result/YOUR_ROLL_NO</li>
                        <li>View and download your diploma</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <p>&copy; 2024 Punjab Board of Technical Education Lahore. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
</body>
</html>