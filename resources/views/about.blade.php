<x-layout>
    <x-slot name="heading">
        About Page
    </x-slot>

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

    @push('styles')
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
    @endpush

    @push('scripts')
        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    @endpush
</x-layout>
