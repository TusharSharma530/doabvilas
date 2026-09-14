<?php 
$pageTitle = 'Contact Us - Doab Vilas Luxury Resort, Meerut';
require_once 'includes/header.php'; 
require_once 'includes/navbar.php'; 
?>

<!-- Hero Banner -->
<div class="banner banner-rooms-suites banner_wedding banner_dining">
    <div class="bg overlay-top overlay-bottom">
        <img src="assets/images/rooms/doab villas.png" alt="Contact Us" title="Contact Us" class="hero-bg-img" />
    </div>
    <div class="banner-container">
        <div class="container">
            <div class="content text-center">
                <div class="title">Get in Touch</div>
                <h1>CONTACT US</h1>
                <div class="scrdown">
                    <a href="#contactSection" aria-label="Scroll Down">
                        <i class="bi bi-chevron-down"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Info Cards -->
<section class="contact-info-section section-padding bg-ivory">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="contact-info-box text-center">
                    <div class="contact-icon">
                        <i class="bi bi-geo-alt"></i>
                    </div>
                    <h5>Address</h5>
                    <p>Meerut Bypass Rd, Sector - 3, Ansal's Sushant City, Meerut, Uttar Pradesh 250103, India</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact-info-box text-center">
                    <div class="contact-icon">
                        <i class="bi bi-telephone"></i>
                    </div>
                    <h5>Phone</h5>
                    <p><a href="tel:+917078733333">+91-7078733333</a></p>
                     <p><a href="tel:+91 9761866666">+91 9761866666</a></p>
                </div>
            </div>
           
            <div class="col-lg-4 col-md-6">
                <div class="contact-info-box text-center">
                    <div class="contact-icon">
                        <i class="bi bi-clock"></i>
                    </div>
                    <h5>Hours</h5>
                    <p>Reception: 24/7<br>Restaurant: 7 AM - 11 PM</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Content -->
<section class="contact-content-section section-padding bg-white" id="contactSection">
    <div class="container">
        <div class="row g-5 align-items-start">
            <!-- Contact Form -->
            <div class="col-lg-7">
                <div class="section-header text-start mb-4">
                    <span class="section-subtitle">Write to Us</span>
                    <h2 class="section-title">SEND US A MESSAGE</h2>
                </div>
                <form data-validate class="contact-form">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" required placeholder="Your Name *">
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="tel" class="form-control" id="phone" name="phone" required placeholder="Your Phone *">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <select class="form-select" id="subject" name="subject">
                                    <option value="">Select Subject</option>
                                    <option value="booking">Room Booking</option>
                                    <option value="wedding">Wedding Enquiry</option>
                                    <option value="event">Event Enquiry</option>
                                    <option value="corporate">Corporate Booking</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control" id="message" name="message" rows="5" required placeholder="Your Message *"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn-gold-submit">
                                SEND MESSAGE <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            
            <!-- Contact Info -->
            <div class="col-lg-5">
                <div class="section-header text-start mb-4">
                    <span class="section-subtitle">Reach Us</span>
                    <h2 class="section-title">CONTACT INFORMATION</h2>
                </div>
                
                <div class="contact-info-list">
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div class="contact-info-text">
                            <h5>Address</h5>
                            <p>Meerut Bypass Rd, Sector - 3, Ansal's Sushant City, Meerut, Uttar Pradesh 250103, India</p>
                        </div>
                    </div>
                    
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <div class="contact-info-text">
                            <h5>Phone</h5>
                            <p><a href="tel:+91 9761866666,">+91 9761866666,</a></p>
                            <p><a href="tel:+917078733333">+91-7078733333</a></p>
                        </div>
                    </div>
                    
                    
                    
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="bi bi-clock"></i>
                        </div>
                        <div class="contact-info-text">
                            <h5>Working Hours</h5>
                            <p>Reception: 24/7<br>Restaurant: 7 AM - 11 PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Google Map -->
<section class="map-section no-padding">
    <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.4979999999996!2d77.7089!3d28.9576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5a43173357b%3A0x2c42e82de01011e0!2sDoab%20Vilas!5e0!3m2!1sen!2sin!4v1234567890" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<?php require_once 'includes/whatsapp-button.php'; ?>
<?php require_once 'includes/footer.php'; ?>
