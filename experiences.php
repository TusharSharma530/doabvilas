<?php 
$pageTitle = 'Experiences';
require_once 'includes/header.php'; 
require_once 'includes/navbar.php'; 
?>

<!-- Page Hero -->
<section class="page-hero" style="background-image: url('assets/images/experiences/experiences-hero.jpg');">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="page-hero-content">
            <span class="section-subtitle">Discover</span>
            <h1 class="page-title">Experiences</h1>
            <p class="page-text">Create unforgettable memories with our curated experiences</p>
        </div>
    </div>
</section>

<!-- Experiences Grid -->
<section class="section-padding">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <a href="pool.php" class="venue-card">
                    <img src="https://images.unsplash.com/photo-1575429198097-0414ec08e8cd?w=600&q=80" alt="Pool" loading="lazy">
                    <div class="venue-overlay">
                        <h4>Pool</h4>
                        <p>Relax by our pristine swimming pool</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="garden.php" class="venue-card">
                    <img src="https://images.unsplash.com/photo-1585320806297-9794b3e4eeae?w=600&q=80" alt="Garden" loading="lazy">
                    <div class="venue-overlay">
                        <h4>Garden</h4>
                        <p>Tranquil green spaces for peaceful moments</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="dining.php" class="venue-card">
                    <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?w=600&q=80" alt="Dining" loading="lazy">
                    <div class="venue-overlay">
                        <h4>Dining</h4>
                        <p>Culinary journeys for the senses</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="services.php" class="venue-card">
                    <img src="https://images.unsplash.com/photo-1544161515-4ab6ce6db874?w=600&q=80" alt="Services" loading="lazy">
                    <div class="venue-overlay">
                        <h4>Services</h4>
                        <p>Premium amenities and personalized service</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/whatsapp-button.php'; ?>
<?php require_once 'includes/footer.php'; ?>
