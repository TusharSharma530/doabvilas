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
                        <li><a href="offers.php">Offers</a></li>
                        <li><a href="diamond.php">Meetings</a></li>
                        <li><a href="aquarius-pool.php">Banquet</a></li>
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
                        <li><a href="#">Guest Comments</a></li>
                        <li><a href="#">Feedback</a></li>
                        <li><a href="#">Career With Us</a></li>
                        <li><a href="#">Sitemap</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
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
                        <a href="offers.php" class="btn btn-gold-outline">Special Offers</a>
                        <a href="#" class="btn btn-gold-outline">Quick Enquiry</a>
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

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Main JS -->
<script src="<?php echo JS_URL; ?>main.js"></script>
</body>
</html>
