<?php 
$pageTitle = 'Garden';
require_once 'includes/header.php'; 
require_once 'includes/navbar.php'; 
?>

<!-- Page Hero -->
<section class="page-hero" style="background-image: url('https://images.unsplash.com/photo-1585320806297-9794b3e4eeae?w=1920&q=80');">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="page-hero-content">
            <span class="section-subtitle">Nature</span>
            <h1 class="page-title">Garden</h1>
            <p class="page-text">Tranquil green spaces for peaceful moments</p>
        </div>
    </div>
</section>

<!-- Garden Details -->
<section class="section-padding">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <img src="https://images.unsplash.com/photo-1585320806297-9794b3e4eeae?w=800&q=80" alt="Garden" class="img-fluid rounded" loading="lazy">
            </div>
            <div class="col-lg-6">
                <span class="section-subtitle">Nature</span>
                <h2 class="section-title">Our Gardens</h2>
                <p>Immerse yourself in the beauty of our meticulously maintained gardens. Perfect for morning walks, evening strolls, or simply enjoying a quiet moment amidst nature.</p>
                <p>Our garden spaces feature rare botanical specimens, decorative water features, and seating areas designed for relaxation and contemplation.</p>
            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/whatsapp-button.php'; ?>
<?php require_once 'includes/footer.php'; ?>
