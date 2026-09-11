<?php 
$pageTitle = 'Contact Us';
require_once 'includes/header.php'; 
require_once 'includes/navbar.php'; 
?>

<!-- Contact Info Cards -->
<section class="section-padding pt-5" style="background: #f8f9fa;">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="contact-info-box text-center p-4 bg-white rounded-3 shadow-sm h-100">
                    <div class="feature-icon mx-auto mb-3" style="width: 70px; height: 70px; min-width: 70px; background: var(--dv-green);">
                        <i class="bi bi-geo-alt text-white"></i>
                    </div>
                    <h5 class="mb-2">Address</h5>
                    <p class="mb-0 text-muted"><?php echo SITE_ADDRESS; ?></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="contact-info-box text-center p-4 bg-white rounded-3 shadow-sm h-100">
                    <div class="feature-icon mx-auto mb-3" style="width: 70px; height: 70px; min-width: 70px; background: var(--dv-green);">
                        <i class="bi bi-telephone text-white"></i>
                    </div>
                    <h5 class="mb-2">Phone</h5>
                    <p class="mb-0"><a href="tel:<?php echo SITE_PHONE; ?>" class="text-decoration-none text-muted"><?php echo SITE_PHONE; ?></a></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="contact-info-box text-center p-4 bg-white rounded-3 shadow-sm h-100">
                    <div class="feature-icon mx-auto mb-3" style="width: 70px; height: 70px; min-width: 70px; background: var(--dv-green);">
                        <i class="bi bi-envelope text-white"></i>
                    </div>
                    <h5 class="mb-2">Email</h5>
                    <p class="mb-0"><a href="mailto:<?php echo SITE_EMAIL; ?>" class="text-decoration-none text-muted"><?php echo SITE_EMAIL; ?></a></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="contact-info-box text-center p-4 bg-white rounded-3 shadow-sm h-100">
                    <div class="feature-icon mx-auto mb-3" style="width: 70px; height: 70px; min-width: 70px; background: var(--dv-green);">
                        <i class="bi bi-clock text-white"></i>
                    </div>
                    <h5 class="mb-2">Hours</h5>
                    <p class="mb-0 text-muted">Reception: 24/7<br>Restaurant: 7 AM - 11 PM</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Content -->
<section class="section-padding">
    <div class="container">
        <div class="row g-5 align-items-start">
            <!-- Contact Form -->
            <div class="col-lg-7">
                <div class="section-subtitle">Write to Us</div>
                <h2 class="section-title mb-4">Send Us a Message</h2>
                <form data-validate>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Full Name *</label>
                            <input type="text" class="form-control" id="name" name="name" required placeholder="Your Name">
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email Address *</label>
                            <input type="email" class="form-control" id="email" name="email" required placeholder="Your Email">
                        </div>
                        <div class="col-md-6">
                            <label for="phone" class="form-label">Phone Number *</label>
                            <input type="tel" class="form-control" id="phone" name="phone" required placeholder="Your Phone">
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
                            <textarea class="form-control" id="message" name="message" rows="5" required placeholder="Write your message here..."></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-gold">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
            
            <!-- Contact Info -->
            <div class="col-lg-5">
                <div class="section-subtitle">Reach Us</div>
                <h2 class="section-title mb-4">Contact Information</h2>
                
                <div class="contact-info-card">
                    <div class="d-flex align-items-start mb-4">
                        <div class="feature-icon me-3" style="width: 50px; height: 50px; min-width: 50px;">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div>
                            <h5>Address</h5>
                            <p class="mb-0">
                                <?php echo SITE_ADDRESS_LINE1; ?><br>
                                <?php echo SITE_ADDRESS_LINE2; ?><br>
                                <?php echo SITE_CITY; ?>, <?php echo SITE_STATE; ?> <?php echo SITE_PINCODE; ?><br>
                                <?php echo SITE_COUNTRY; ?>
                            </p>
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
            </div>
        </div>
    </div>
</section>

<!-- Google Map -->
<section class="section-padding pt-0">
    <div class="container">
        <div class="map-container rounded-3 overflow-hidden shadow" style="height: 450px;">
            <iframe src="<?php echo SITE_GOOGLE_MAP; ?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>

<?php require_once 'includes/whatsapp-button.php'; ?>
<?php require_once 'includes/footer.php'; ?>
