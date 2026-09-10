<?php 
$pageTitle = 'About Us';
require_once 'includes/header.php'; 
require_once 'includes/navbar.php'; 
?>

<!-- Page Hero -->
<section class="page-hero" style="background-image: url('assets/images/about-hero.jpg');">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="page-hero-content">
            <span class="section-subtitle">Our Story</span>
            <h1 class="page-title">About Doab Vilas</h1>
            <p class="page-text">A legacy of hospitality spanning decades</p>
        </div>
    </div>
</section>

<!-- About Content -->
<section class="section-padding">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <img src="assets/images/about-detail.jpg" alt="About Doab Vilas" class="img-fluid rounded" loading="lazy">
            </div>
            <div class="col-lg-6">
                <span class="section-subtitle">Our Heritage</span>
                <h2 class="section-title">A Legacy of Hospitality</h2>
                <p>Nestled in the heart of the city, Doab Vilas stands as a beacon of luxury and refined taste. Our heritage of warm hospitality spans decades, creating unforgettable experiences for every guest who walks through our doors.</p>
                <p>From our meticulously designed rooms to our world-class dining and event spaces, every detail has been thoughtfully curated to offer you an experience beyond compare.</p>
                <p>We believe in blending traditional Indian warmth with modern sophistication, creating a unique atmosphere that feels both familiar and extraordinary.</p>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="section-padding" style="background-color: var(--dv-ivory);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Our Values</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-heart"></i>
                    </div>
                    <h4>Hospitality</h4>
                    <p>We treat every guest as family, ensuring a warm and welcoming experience.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-gem"></i>
                    </div>
                    <h4>Excellence</h4>
                    <p>We strive for perfection in every detail of our service.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-leaf"></i>
                    </div>
                    <h4>Sustainability</h4>
                    <p>We are committed to eco-friendly practices and responsible tourism.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/whatsapp-button.php'; ?>
<?php require_once 'includes/footer.php'; ?>
