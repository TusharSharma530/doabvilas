<!-- Footer -->
<footer class="site-footer">
    <div class="container">
        <div class="footer-top">
            <div class="row">
                <!-- Logo -->
                <div class="col-lg-2 col-md-4 mb-4 mb-lg-0">
                    <a href="index.php" class="footer-logo">
                        <img src="assets/images/logo/doab-villas-logo.avif" alt="Doab Vilas Logo">
                    </a>
                </div>
                
                <!-- Services -->
                <div class="col-lg-2 col-md-4 mb-4 mb-lg-0">
                    <h5 class="footer-title">SERVICES</h5>
                    <ul class="footer-links">
                        <li><a href="rooms.php">Rooms & Suites</a></li>
                        <li><a href="dining.php">Dine & Wine</a></li>
                        <li><a href="weddings.php">Celebrations</a></li>
                        <li><a href="jashan-party-lawn.php">Events</a></li>
                    </ul>
                </div>
                
                <!-- Quick Links -->
                <div class="col-lg-2 col-md-4 mb-4 mb-lg-0">
                    <h5 class="footer-title">QUICK LINKS</h5>
                    <ul class="footer-links">
                        <li><a href="about.php">About us</a></li>
                        <li><a href="offers.php">Offers</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                </div>
                
                <!-- Connect -->
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <h5 class="footer-title">CONNECT</h5>
                    <div class="footer-connect">
                        <p class="footer-address">
                            <?php echo SITE_ADDRESS; ?>
                        </p>
                        <ul class="footer-contact-list">
                            <li>
                                <i class="bi bi-envelope"></i>
                                <a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a>
                            </li>
                            <li>
                                <i class="bi bi-telephone"></i>
                                <span>Front Office : <?php echo SITE_PHONE; ?></span>
                            </li>
                            <li>
                                <i class="bi bi-phone"></i>
                                <span>Reservation : +91-8191900048</span>
                            </li>
                            <li>
                                <i class="bi bi-phone"></i>
                                <span>Bar/Restaurant : +91-7618444235</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- Social & Buttons -->
                <div class="col-lg-3 col-md-6">
                    <div class="footer-social-top">
                        <a href="#" class="social-link-sm" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="social-link-sm" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="social-link-sm" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                        <a href="#" class="social-link-sm" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" class="social-link-sm" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="social-link-sm" aria-label="RSS"><i class="bi bi-rss"></i></a>
                        <a href="#" class="social-link-sm" aria-label="Pinterest"><i class="bi bi-pinterest"></i></a>
                    </div>
                    <div class="footer-buttons">
                        <button type="button" class="btn btn-gold-outline" data-bs-toggle="modal" data-bs-target="#quickEnquiryModal">Quick Enquiry</button>
                    </div>
                </div>
            </div>
        </div>
        
        <hr class="footer-divider">
        
        <div class="footer-bottom">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <p class="footer-copyright">
                        &copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. All rights reserved.
                    </p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="footer-credit">Designed with love for luxury hospitality</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Quick Enquiry Modal (Bravura Resort Style) -->
<div class="modal fade luxury-modal" id="quickEnquiryModal" tabindex="-1" aria-labelledby="quickEnquiryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content luxury-modal-content">
            <div class="modal-header border-0 pb-0">
                <div class="modal-title-wrap">
                    <span class="modal-subtitle">Doab Vilas Meerut</span>
                    <h4 class="modal-title" id="quickEnquiryModalLabel">Quick Enquiry</h4>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-3">
                <form action="contact.php" method="POST" id="quickEnquiryForm">
                    <div class="mb-3">
                        <label class="form-label text-gold small">Full Name *</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person"></i></span>
                            <input type="text" name="name" class="form-control" placeholder="Enter your full name" required>
                        </div>
                    </div>
                    <div class="row g-2 mb-3">
                        <div class="col-md-6">
                            <label class="form-label text-gold small">Email Address *</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" name="email" class="form-control" placeholder="name@domain.com" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label text-gold small">Contact Number *</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                                <input type="tel" name="phone" class="form-control" placeholder="+91 XXXXX XXXXX" required>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-gold small">Interested In</label>
                        <select name="service" class="form-select">
                            <option value="rooms">Rooms & Suites Booking</option>
                            <option value="weddings">Weddings & Celebrations</option>
                            <option value="banquet">Banquet Halls & Party Lawns</option>
                            <option value="dining">Dine & Wine Reservation</option>
                            <option value="corporate">Corporate Event / Conference</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-gold small">Message / Requirements</label>
                        <textarea name="message" rows="3" class="form-control" placeholder="Tell us how we can help make your stay exceptional..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-gold w-100 py-2 fw-bold text-uppercase">
                        <i class="bi bi-send-fill me-2"></i>Submit Enquiry Now
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Login Modal (Bravura Resort Style) -->
<div class="modal fade luxury-modal" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content luxury-modal-content">
            <div class="modal-header border-0 pb-0">
                <div class="modal-title-wrap">
                    <span class="modal-subtitle">Doab Vilas Portal</span>
                    <h4 class="modal-title" id="loginModalLabel">Member Login</h4>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-3">
                <form action="#" method="POST" id="loginForm" onsubmit="event.preventDefault(); alert('Login OTP sent successfully!');">
                    <div class="mb-3">
                        <label class="form-label text-gold small">Mobile Number / Email ID *</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-phone"></i></span>
                            <input type="text" class="form-control" placeholder="Enter Mobile Number / Email" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-gold w-100 py-2 fw-bold text-uppercase mb-3">
                        <i class="bi bi-shield-lock me-2"></i>Get OTP & Continue
                    </button>
                    <p class="text-center text-muted small mb-0">By continuing, you agree to our Terms & Conditions and Privacy Policy.</p>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Main JS -->
<script src="<?php echo JS_URL; ?>main.js"></script>
</body>
</html>
