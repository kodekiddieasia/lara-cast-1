<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Laravel App</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to right, #e3f2fd, #ffffff);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
        }
        .about-container {
            max-width: 900px;
            margin: 80px auto;
            padding: 40px;
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        .about-header {
            text-align: center;
            margin-bottom: 30px;
        }
        .about-header i {
            font-size: 2.5rem;
            color: #0d6efd;
        }
        .about-header h1 {
            margin-top: 10px;
            font-size: 2.5rem;
        }
        .about-content p {
            font-size: 1.1rem;
            line-height: 1.8;
        }
    </style>
</head>
<body>

<div class="container about-container">
    <div class="about-header">
        <i class="fas fa-info-circle"></i>
        <h1>About Us</h1>
    </div>

    <div class="about-content">
        <p>Hello from the About Page! We're a passionate team dedicated to building clean and modern Laravel applications.</p>
        <p>Our goal is to create fast, secure, and responsive apps with an excellent user experience. Whether you're a developer, designer, or entrepreneur — you're in the right place.</p>
        <p><strong>Tech stack highlights:</strong> Laravel 12, Bootstrap 5, SQLite, Font Awesome, and more.</p>
    </div>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
