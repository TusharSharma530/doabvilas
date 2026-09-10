<?php 
$pageTitle = 'Contact Us';
require_once 'includes/header.php'; 
require_once 'includes/navbar.php'; 
?>

<!-- Page Hero -->
<section class="page-hero" style="background-image: url('assets/images/contact-hero.jpg');">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="page-hero-content">
            <span class="section-subtitle">Get in Touch</span>
            <h1 class="page-title">Contact Us</h1>
            <p class="page-text">We'd love to hear from you</p>
        </div>
    </div>
</section>

<!-- Contact Content -->
<section class="section-padding">
    <div class="container">
        <div class="row g-5">
            <!-- Contact Form -->
            <div class="col-lg-7">
                <h2 class="section-title mb-4">Send Us a Message</h2>
                <form data-validate>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Full Name *</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email Address *</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="col-md-6">
                            <label for="phone" class="form-label">Phone Number *</label>
                            <input type="tel" class="form-control" id="phone" name="phone" required>
                        </div>
                        <div class="col-md-6">
                            <label for="subject" class="form-label">Subject</label>
                            <select class="form-select" id="subject" name="subject">
                                <option value="">Select Subject</option>
                                <option value="booking">Room Booking</option>
                                <option value="wedding">Wedding Enquiry</option>
                                <option value="event">Event Enquiry</option>
                                <option value="corporate">Corporate Booking</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="message" class="form-label">Your Message *</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-gold">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
            
            <!-- Contact Info -->
            <div class="col-lg-5">
                <h2 class="section-title mb-4">Contact Information</h2>
                
                <div class="contact-info-card mb-4">
                    <div class="d-flex align-items-start mb-4">
                        <div class="feature-icon me-3" style="width: 50px; height: 50px; min-width: 50px;">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div>
                            <h5>Address</h5>
                            <p class="mb-0"><?php echo SITE_ADDRESS; ?></p>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-start mb-4">
                        <div class="feature-icon me-3" style="width: 50px; height: 50px; min-width: 50px;">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <div>
                            <h5>Phone</h5>
                            <p class="mb-0"><a href="tel:<?php echo SITE_PHONE; ?>"><?php echo SITE_PHONE; ?></a></p>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-start mb-4">
                        <div class="feature-icon me-3" style="width: 50px; height: 50px; min-width: 50px;">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <div>
                            <h5>Email</h5>
                            <p class="mb-0"><a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a></p>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-start">
                        <div class="feature-icon me-3" style="width: 50px; height: 50px; min-width: 50px;">
                            <i class="bi bi-clock"></i>
                        </div>
                        <div>
                            <h5>Working Hours</h5>
                            <p class="mb-0">Reception: 24/7<br>Restaurant: 7 AM - 11 PM</p>
                        </div>
                    </div>
                </div>
                
                <!-- Map Placeholder -->
                <div class="map-placeholder" style="background: var(--dv-ivory); height: 250px; border-radius: var(--border-radius); display: flex; align-items: center; justify-content: center;">
                    <p class="text-muted mb-0">Map will be displayed here</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/whatsapp-button.php'; ?>
<?php require_once 'includes/footer.php'; ?>
