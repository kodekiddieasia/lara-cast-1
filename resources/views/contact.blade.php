<x-layout>
    <x-slot name="heading">
        About Page
    </x-slot>


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

    @push('styles')
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
    @endpush

    @push('scripts')
        <!-- Font Awesome CDN -->
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    @endpush
</x-layout>
