<!-- Footer -->
<footer class="site-footer">
    <div class="container">
        <div class="row">
            <!-- About Column -->
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <a href="index.php" class="footer-brand">DOAB VILAS</a>
                <p class="footer-about">
                    A premium luxury destination offering world-class hospitality, 
                    exquisite dining, and magnificent event venues. Experience the 
                    perfect blend of traditional Indian warmth and modern elegance.
                </p>
                <div class="footer-social">
                    <a href="#" class="social-link" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="social-link" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="social-link" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="social-link" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                    <a href="#" class="social-link" aria-label="Pinterest"><i class="bi bi-pinterest"></i></a>
                </div>
            </div>
            
            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                <h5 class="footer-title">Quick Links</h5>
                <ul class="footer-links">
                    <li><a href="rooms.php">Rooms</a></li>
                    <li><a href="suites.php">Suites</a></li>
                    <li><a href="dining.php">Dining</a></li>
                    <li><a href="weddings.php">Weddings</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="offers.php">Offers</a></li>
                </ul>
            </div>
            
            <!-- Experiences -->
            <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                <h5 class="footer-title">Experiences</h5>
                <ul class="footer-links">
                    <li><a href="pool.php">Pool</a></li>
                    <li><a href="garden.php">Garden</a></li>
                    <li><a href="services.php">Spa & Wellness</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="booking.php">Book Now</a></li>
                </ul>
            </div>
            
            <!-- Contact Info -->
            <div class="col-lg-4 col-md-6">
                <h5 class="footer-title">Contact Info</h5>
                <ul class="footer-contact">
                    <li>
                        <i class="bi bi-geo-alt-fill"></i>
                        <span><?php echo SITE_ADDRESS; ?></span>
                    </li>
                    <li>
                        <i class="bi bi-telephone-fill"></i>
                        <a href="tel:<?php echo SITE_PHONE; ?>"><?php echo SITE_PHONE; ?></a>
                    </li>
                    <li>
                        <i class="bi bi-envelope-fill"></i>
                        <a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a>
                    </li>
                    <li>
                        <i class="bi bi-clock-fill"></i>
                        <span>Reception: 24/7</span>
                    </li>
                </ul>
            </div>
        </div>
        
        <hr class="footer-divider">
        
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start">
                <p class="footer-copyright">
                    &copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. All rights reserved.
                </p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <ul class="footer-legal">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Sitemap</a></li>
                </ul>
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
