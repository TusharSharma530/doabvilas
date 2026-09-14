<?php 
$pageTitle = 'Sapphire';
require_once 'includes/header.php'; 
require_once 'includes/navbar.php'; 
?>

<!-- Page Hero -->
<section class="page-hero" style="background-image: url('https://images.unsplash.com/photo-1478146059778-26028b07395a?w=1920&q=80');">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="page-hero-content">
            <span class="section-subtitle">Exclusive Venue</span>
            <h1 class="page-title">Sapphire</h1>
            <p class="page-text">Intimate venue for exclusive gatherings</p>
        </div>
    </div>
</section>

<!-- Venue Details -->
<section class="section-padding">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <img src="https://images.unsplash.com/photo-1478146059778-26028b07395a?w=800&q=80" alt="Sapphire" class="img-fluid rounded" loading="lazy">
            </div>
            <div class="col-lg-6">
                <span class="section-subtitle">Exclusive Space</span>
                <h2 class="section-title">Sapphire</h2>
                <p class="mb-4">Our intimate Sapphire venue offers an exclusive setting for sophisticated gatherings. Ideal for corporate events, cocktail dinners, and private parties.</p>
                
                <div class="row mb-4">
                    <div class="col-6">
                        <p><strong>Capacity:</strong> 100-200 guests</p>
                    </div>
                    <div class="col-6">
                        <p><strong>Area:</strong> 4,000 sq ft</p>
                    </div>
                </div>
                
                <a href="booking.php" class="btn btn-gold">Enquire Now</a>
            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/whatsapp-button.php'; ?>
<?php require_once 'includes/footer.php'; ?>
