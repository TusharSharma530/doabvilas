<?php 
$pageTitle = 'Offers';
require_once 'includes/header.php'; 
require_once 'includes/navbar.php'; 
?>

<!-- Page Hero -->
<section class="page-hero" style="background-image: url('assets/images/offers-hero.jpg');">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="page-hero-content">
            <span class="section-subtitle">Special</span>
            <h1 class="page-title">Exclusive Offers</h1>
            <p class="page-text">Take advantage of our special packages and promotions</p>
        </div>
    </div>
</section>

<!-- Offers Content -->
<section class="section-padding">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Current Offers</h2>
            <p class="section-text">Discover our handpicked offers designed for every occasion.</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="offer-card">
                    <span class="offer-badge">Limited Time</span>
                    <h4>Honeymoon Package</h4>
                    <p>Romantic getaway with complimentary spa, candlelight dinner, and room decoration.</p>
                    <span class="offer-price">Starting ₹24,999</span>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-gold me-2"></i> 2 nights in Premium Suite</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-gold me-2"></i> Complimentary breakfast</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-gold me-2"></i> Couples spa treatment</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-gold me-2"></i> Candlelight dinner</li>
                    </ul>
                    <a href="booking.php" class="btn btn-gold">Book Now</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="offer-card">
                    <span class="offer-badge">Weekend Special</span>
                    <h4>Weekend Retreat</h4>
                    <p>Escape the city with our weekend getaway package including breakfast and transfers.</p>
                    <span class="offer-price">Starting ₹18,999</span>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-gold me-2"></i> 2 nights in Deluxe Room</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-gold me-2"></i> Daily breakfast for two</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-gold me-2"></i> Airport transfers</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-gold me-2"></i> Late checkout</li>
                    </ul>
                    <a href="booking.php" class="btn btn-gold">Book Now</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="offer-card">
                    <span class="offer-badge">Corporate</span>
                    <h4>Business Package</h4>
                    <p>Complete business solution with meeting rooms, AV equipment, and team building activities.</p>
                    <span class="offer-price">Custom Pricing</span>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-gold me-2"></i> Conference room access</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-gold me-2"></i> AV equipment included</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-gold me-2"></i> Team lunch/dinner</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-gold me-2"></i> Customized itineraries</li>
                    </ul>
                    <a href="contact.php" class="btn btn-gold">Contact Us</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="offer-card">
                    <span class="offer-badge">Festival</span>
                    <h4>Festival Celebration</h4>
                    <p>Celebrate festivals in style with special decor, dining, and entertainment packages.</p>
                    <span class="offer-price">Starting ₹15,999</span>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-gold me-2"></i> Festive room decor</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-gold me-2"></i> Special dinner buffet</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-gold me-2"></i> Cultural performances</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-gold me-2"></i> Complimentary sweets</li>
                    </ul>
                    <a href="booking.php" class="btn btn-gold">Book Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/whatsapp-button.php'; ?>
<?php require_once 'includes/footer.php'; ?>
