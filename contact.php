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
                <div class="title" style="color: #fff;">Get in Touch</div>
                <h1 style="color: #fff;">CONTACT US</h1>
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
<section class="contact-info-section section-padding" style="background: var(--dv-ivory);">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="contact-info-box text-center">
                    <div class="contact-icon">
                        <i class="bi bi-geo-alt"></i>
                    </div>
                    <h5>Address</h5>
                    <p>Doab Vilas, Meerut, Uttar Pradesh, India</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="contact-info-box text-center">
                    <div class="contact-icon">
                        <i class="bi bi-telephone"></i>
                    </div>
                    <h5>Phone</h5>
                    <p><a href="tel:+917455802240">+91-7455802240</a></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="contact-info-box text-center">
                    <div class="contact-icon">
                        <i class="bi bi-envelope"></i>
                    </div>
                    <h5>Email</h5>
                    <p><a href="mailto:info@doabvilas.com">info@doabvilas.com</a></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
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
<section class="contact-content-section section-padding" id="contactSection" style="background: var(--dv-white);">
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
                                <input type="email" class="form-control" id="email" name="email" required placeholder="Your Email *">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="tel" class="form-control" id="phone" name="phone" required placeholder="Your Phone *">
                            </div>
                        </div>
                        <div class="col-md-6">
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
                            <p>Doab Vilas, Meerut,<br>Uttar Pradesh, India</p>
                        </div>
                    </div>
                    
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <div class="contact-info-text">
                            <h5>Phone</h5>
                            <p><a href="tel:+917455802240">+91-7455802240</a></p>
                        </div>
                    </div>
                    
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <div class="contact-info-text">
                            <h5>Email</h5>
                            <p><a href="mailto:info@doabvilas.com">info@doabvilas.com</a></p>
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
<section class="map-section" style="padding: 0;">
    <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.5!2d77.7!3d28.9!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjjCsDU0JzAwLjAiTiA3N8KwNDInMDAuMCJF!5e0!3m2!1sen!2sin!4v1234567890" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<style>
/* Contact Info Section */
.contact-info-section { padding: 60px 0; }

.contact-info-box {
    background: #fff;
    padding: 30px 20px;
    border-radius: 8px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.08);
    transition: all 0.4s ease;
}

.contact-info-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.12);
}

.contact-icon {
    width: 70px;
    height: 70px;
    background: var(--dv-gold);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 15px;
}

.contact-icon i {
    font-size: 28px;
    color: #fff;
}

.contact-info-box h5 {
    font-family: 'Playfair Display', serif;
    font-size: 1.2rem;
    color: var(--dv-dark);
    margin-bottom: 10px;
}

.contact-info-box p {
    color: #666;
    font-size: 0.95rem;
    margin: 0;
}

.contact-info-box a {
    color: #666;
    text-decoration: none;
    transition: color 0.3s;
}

.contact-info-box a:hover {
    color: var(--dv-gold);
}

/* Contact Form */
.contact-form .form-group {
    margin-bottom: 0;
}

.contact-form .form-control,
.contact-form .form-select {
    width: 100%;
    padding: 12px 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 15px;
    transition: border-color 0.3s;
    background: #fff;
}

.contact-form .form-control:focus,
.contact-form .form-select:focus {
    border-color: var(--dv-gold);
    outline: none;
    box-shadow: none;
}

.contact-form textarea.form-control {
    resize: vertical;
    min-height: 120px;
}

.btn-gold-submit {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: var(--dv-gold);
    color: #fff;
    border: none;
    padding: 12px 30px;
    font-size: 14px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.btn-gold-submit:hover {
    background: var(--dv-dark);
    gap: 15px;
}

/* Contact Info List */
.contact-info-list {
    display: flex;
    flex-direction: column;
    gap: 25px;
}

.contact-info-item {
    display: flex;
    align-items: flex-start;
    gap: 15px;
}

.contact-info-icon {
    width: 50px;
    height: 50px;
    min-width: 50px;
    background: var(--dv-gold);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.contact-info-icon i {
    font-size: 20px;
    color: #fff;
}

.contact-info-text h5 {
    font-family: 'Playfair Display', serif;
    font-size: 1.1rem;
    color: var(--dv-dark);
    margin-bottom: 5px;
}

.contact-info-text p {
    color: #666;
    font-size: 0.95rem;
    margin: 0;
    line-height: 1.6;
}

.contact-info-text a {
    color: #666;
    text-decoration: none;
    transition: color 0.3s;
}

.contact-info-text a:hover {
    color: var(--dv-gold);
}

/* Map */
.map-container {
    width: 100%;
}

.map-container iframe {
    width: 100%;
    height: 450px;
    display: block;
}

@media (max-width: 767px) {
    .contact-info-section { padding: 40px 0; }
    .map-container iframe { height: 300px; }
}
</style>

<?php require_once 'includes/whatsapp-button.php'; ?>
<?php require_once 'includes/footer.php'; ?>
