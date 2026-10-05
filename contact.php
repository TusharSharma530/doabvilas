<?php 
require_once 'includes/header.php'; 
?>

<!-- Hero Banner -->
<?php
$query = "SELECT featured_img FROM category WHERE id = 75 LIMIT 1";
$result = mysqli_query($con, $query);

$featured_img = '';
if ($result && mysqli_num_rows($result)) {
    $category = mysqli_fetch_assoc($result);
    if (!empty($category['featured_img'])) {
        $featured_img = $category['featured_img'];
    }
}
?>

<!-- Hero Banner -->
<div class="banner banner-rooms-suites banner_wedding banner_dining">
    <div class="bg overlay-top overlay-bottom">
        <img src="<?= htmlspecialchars($featured_img) ?>"
             alt="Contact Us"
             title="Contact Us"
             class="hero-bg-img" />
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
                    <p><?= htmlspecialchars(SITE_ADDRESS); ?></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact-info-box text-center">
                    <div class="contact-icon">
                        <i class="bi bi-telephone"></i>
                    </div>
                    <h5>Phone</h5>
                    <p><?php echo htmlspecialchars(SITE_PHONE); ?></p>
                    <p><?php echo htmlspecialchars(SITE_ALTERNATE_PHONE); ?></p>
                </div>
            </div>
           
            <div class="col-lg-4 col-md-6">
                <div class="contact-info-box text-center">
                    <div class="contact-icon">
                        <i class="bi bi-clock"></i>
                    </div>
                    <h5>Hours</h5>
                    <p>Reception: 24/7<br><?= htmlspecialchars(RECEPTION_TIME); ?></p>
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
                <form data-validate class="contact-form" id="contactForm">

                    <input type="hidden" name="form_source" value="contact_us">

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
                            <button type="submit" class="btn-gold-submit" id="contactSubmitBtn">
                                SEND MESSAGE <i class="bi bi-arrow-right"></i>
                            </button>

                        </div>
                    </div>
                </form>

                <!-- Shown in place of the form once the email is sent -->
                <div class="contact-success-box" id="contactSuccess" role="status" aria-live="polite">
                    <div class="contact-success-icon"><i class="bi bi-check-lg"></i></div>
                    <h3>Thank You!</h3>
                    <p>Your message has been sent successfully.<br>Our team will get back to you shortly.</p>
                    <button type="button" class="btn-gold-submit" id="contactSendAnother">
                        SEND ANOTHER MESSAGE <i class="bi bi-arrow-right"></i>
                    </button>
                </div>
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
                            <?php echo SITE_ADDRESS; ?>
                        </div>
                    </div>
                    
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <div class="contact-info-text">
                            <h5>Phone</h5>
                            <p><?php echo htmlspecialchars(SITE_PHONE); ?></p>
                            <p><?php echo htmlspecialchars(SITE_ALTERNATE_PHONE); ?></p>
                        </div>
                    </div>
                    
                    
                    
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="bi bi-clock"></i>
                        </div>
                        <div class="contact-info-text">
                            <h5>Working Hours</h5>
                            <p>Reception: 24/7<br><?= htmlspecialchars(RECEPTION_TIME); ?></p>
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
        <iframe 
            src="<?= htmlspecialchars(SITE_MAP_IFRAME); ?>"
            width="100%" 
            height="450" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="strict-origin-when-cross-origin">
        </iframe>
    </div>
</section>



<?php require_once 'includes/footer.php'; ?>
