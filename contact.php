<?php
$pageTitle = "Contact Us";
include 'includes/header.php';
include 'includes/breadcrumb.php';
?>

<!-- Contact Info Section -->
<section class="section-padding bg-light-gray pb-0">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="section-title">Get In <span>Touch</span></h2>
            <p class="text-muted">We are available 24/7 to answer your queries and provide the best security solutions.
            </p>
        </div>

        <div class="row g-4">
            <!-- Office Address -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="contact-info-card">
                    <div class="contact-icon-wrapper">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h4 class="fw-bold text-secondary mb-3">Office Location</h4>
                    <p class="text-muted mb-0">No.2, M.G. Road, Thiruvanmiyur,<br>Chennai, Tamil Nadu - 600041.</p>
                </div>
            </div>

            <!-- Email Address -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="contact-info-card">
                    <div class="contact-icon-wrapper">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h4 class="fw-bold text-secondary mb-3">Email Address</h4>
                    <p class="text-muted mb-0">srisaiss505@gmail.com<br>Response within 24 hours.</p>
                </div>
            </div>

            <!-- Phone Number -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="contact-info-card">
                    <div class="contact-icon-wrapper">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <h4 class="fw-bold text-secondary mb-3">Phone Number</h4>
                    <p class="text-muted mb-0">+91 72008 64976<br>Mr. R. Meen Barali</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Form & Map Section -->
<section class="section-padding bg-light-gray">
    <div class="container">
        <div class="row g-4 align-items-stretch">

            <!-- Map Area -->
            <div class="col-lg-6" data-aos="fade-right">
                <div class="map-container">
                    <!-- Google Maps Embed for Thiruvanmiyur, Chennai -->
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.6108380011115!2d80.25389767505176!3d12.99672451432701!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5267f36527872d%3A0x804b2dc6c6b4d6d9!2s2%2C%20Mahatma%20Gandhi%20Rd%2C%20Subramaniam%20Colony%2C%20Thiruvanmiyur%2C%20Chennai%2C%20Greater%20Chennai%2C%20Tamil%20Nadu%20600041!5e0!3m2!1sen!2sin!4v1787312799695!5m2!1sen!2sin"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <!-- Form Area (Reusing Quote Card Styling) -->
            <div class="col-lg-6" data-aos="fade-left">
                <div class="quote-card p-4 p-md-5">
                    <h3 class="mb-4 fw-bold">Send a <span>Message</span></h3>
                    <form action="#" method="POST">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <input type="text" class="form-control p-3" placeholder="Full Name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control p-3" placeholder="Email Address" required>
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control p-3" placeholder="Phone Number" required>
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control p-3" placeholder="Subject" required>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control p-3" rows="5"
                                    placeholder="Write your message here..."></textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-primary-custom w-100 fs-5 py-3"><i
                                        class="fas fa-paper-plane me-2"></i> Submit Request</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>