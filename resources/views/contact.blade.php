<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Laravel App</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #f0f4f8, #d9e2ec);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .contact-container {
            max-width: 800px;
            margin: 80px auto;
            background: #fff;
            border-radius: 12px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        .contact-header {
            text-align: center;
            margin-bottom: 30px;
        }
        .contact-header i {
            color: #007bff;
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        .form-control, .btn {
            border-radius: 0.5rem;
        }
    </style>
</head>
<body>

<div class="container contact-container">
    <div class="contact-header">
        <i class="fas fa-envelope-open-text"></i>
        <h1>Contact Us</h1>
        <p class="text-muted">We’d love to hear from you. Please fill out the form below.</p>
    </div>

    <form>
        <div class="mb-3">
            <label for="name" class="form-label">Your Name</label>
            <input type="text" class="form-control" id="name" placeholder="John Doe">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email" placeholder="you@example.com">
        </div>
        <div class="mb-3">
            <label for="subject" class="form-label">Subject</label>
            <input type="text" class="form-control" id="subject" placeholder="What’s this about?">
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Your Message</label>
            <textarea class="form-control" id="message" rows="5" placeholder="Type your message here..."></textarea>
        </div>
        <button type="submit" class="btn btn-primary w-100">
            <i class="fas fa-paper-plane me-2"></i> Send Message
        </button>
    </form>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
