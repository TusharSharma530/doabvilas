<?php 
$pageTitle = 'Services';
require_once 'includes/header.php'; 
require_once 'includes/navbar.php'; 
?>

<!-- Page Hero -->
<section class="page-hero" style="background-image: url('assets/images/experiences/services-hero.jpg');">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="page-hero-content">
            <span class="section-subtitle">Premium</span>
            <h1 class="page-title">Services</h1>
            <p class="page-text">Premium amenities and personalized service</p>
        </div>
    </div>
</section>

<!-- Services Content -->
<section class="section-padding">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Our Services</h2>
            <p class="section-text">Experience world-class hospitality with our comprehensive range of services.</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-concierge-bell"></i>
                    </div>
                    <h4>24/7 Concierge</h4>
                    <p>Our dedicated concierge team is always available to assist with any request.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-car-front"></i>
                    </div>
                    <h4>Airport Transfer</h4>
                    <p>Complimentary airport pickup and drop-off in luxury vehicles.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-spa"></i>
                    </div>
                    <h4>Spa & Wellness</h4>
                    <p>Rejuvenate with our range of spa treatments and wellness programs.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-dumbbell"></i>
                    </div>
                    <h4>Fitness Center</h4>
                    <p>State-of-the-art gym equipment for your fitness routine.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-wifi"></i>
                    </div>
                    <h4>Free Wi-Fi</h4>
                    <p>High-speed internet access throughout the property.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-p-circle"></i>
                    </div>
                    <h4>Valet Parking</h4>
                    <p>Complimentary valet parking for all guests.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/whatsapp-button.php'; ?>
<?php require_once 'includes/footer.php'; ?>
