<?php 
$pageTitle = 'Weddings & Events';
require_once 'includes/header.php'; 
require_once 'includes/navbar.php'; 
?>

<!-- Page Hero -->
<section class="page-hero" style="background-image: url('assets/images/weddings/weddings-hero.jpg');">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="page-hero-content">
            <span class="section-subtitle">Celebrations</span>
            <h1 class="page-title">Weddings & Events</h1>
            <p class="page-text">Create timeless memories at our magnificent venues</p>
        </div>
    </div>
</section>

<!-- Venues Overview -->
<section class="section-padding">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Our Venues</h2>
            <p class="section-text">Choose from our stunning venues for your special celebration.</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <a href="diamond.php" class="venue-card">
                    <img src="assets/images/weddings/diamond-hall.jpg" alt="Diamond Hall" loading="lazy">
                    <div class="venue-overlay">
                        <h4>Diamond Hall</h4>
                        <p>Grand ballroom for magnificent celebrations</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="jashan-party-lawn.php" class="venue-card">
                    <img src="assets/images/weddings/jashan-lawn.jpg" alt="Jashan Party Lawn" loading="lazy">
                    <div class="venue-overlay">
                        <h4>Jashan Party Lawn</h4>
                        <p>Expansive outdoor space for lavish events</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="aquarius-pool.php" class="venue-card">
                    <img src="assets/images/weddings/aquarius-pool.jpg" alt="Aquarius Pool" loading="lazy">
                    <div class="venue-overlay">
                        <h4>Aquarius Pool</h4>
                        <p>Stunning poolside venue for cocktail events</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="sapphire.php" class="venue-card">
                    <img src="assets/images/weddings/sapphire.jpg" alt="Sapphire" loading="lazy">
                    <div class="venue-overlay">
                        <h4>Sapphire</h4>
                        <p>Intimate venue for exclusive gatherings</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <h2>Plan Your Dream Event</h2>
        <p>Contact our events team to start planning your perfect celebration</p>
        <div class="d-flex gap-3 justify-content-center flex-wrap">
            <a href="booking.php" class="btn btn-gold">Enquire Now</a>
            <a href="contact.php" class="btn btn-outline-white">Contact Us</a>
        </div>
    </div>
</section>

<?php require_once 'includes/whatsapp-button.php'; ?>
<?php require_once 'includes/footer.php'; ?>
