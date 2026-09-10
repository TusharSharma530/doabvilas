<?php 
$pageTitle = 'Diamond Hall';
require_once 'includes/header.php'; 
require_once 'includes/navbar.php'; 
?>

<!-- Page Hero -->
<section class="page-hero" style="background-image: url('https://images.unsplash.com/photo-1519167758481-83f550bb49b3?w=1920&q=80');">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="page-hero-content">
            <span class="section-subtitle">Wedding Venue</span>
            <h1 class="page-title">Diamond Hall</h1>
            <p class="page-text">Our grand ballroom for magnificent celebrations</p>
        </div>
    </div>
</section>

<!-- Venue Details -->
<section class="section-padding">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <img src="https://images.unsplash.com/photo-1519167758481-83f550bb49b3?w=800&q=80" alt="Diamond Hall" class="img-fluid rounded" loading="lazy">
            </div>
            <div class="col-lg-6">
                <span class="section-subtitle">Grand Ballroom</span>
                <h2 class="section-title">Diamond Hall</h2>
                <p class="mb-4">Our majestic Diamond Hall is the perfect setting for grand weddings and large-scale celebrations. With its soaring ceilings, crystal chandeliers, and elegant decor, this venue creates an atmosphere of pure opulence.</p>
                
                <div class="row mb-4">
                    <div class="col-6">
                        <p><strong>Capacity:</strong> 500-1000 guests</p>
                    </div>
                    <div class="col-6">
                        <p><strong>Area:</strong> 15,000 sq ft</p>
                    </div>
                </div>
                
                <h4 class="mb-3">Features</h4>
                <ul class="list-unstyled mb-4">
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-gold me-2"></i> Climate controlled environment</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-gold me-2"></i> State-of-the-art sound system</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-gold me-2"></i> LED lighting system</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-gold me-2"></i> Bridal suite included</li>
                </ul>
                
                <a href="booking.php" class="btn btn-gold">Enquire Now</a>
            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/whatsapp-button.php'; ?>
<?php require_once 'includes/footer.php'; ?>
