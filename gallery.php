<?php 
$pageTitle = 'Gallery';
require_once 'includes/header.php'; 
require_once 'includes/navbar.php'; 
?>

<!-- Page Hero -->
<section class="page-hero" style="background-image: url('assets/images/gallery/gallery-hero.jpg');">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="page-hero-content">
            <span class="section-subtitle">Visual Journey</span>
            <h1 class="page-title">Gallery</h1>
            <p class="page-text">Explore the beauty of Doab Vilas through our collection</p>
        </div>
    </div>
</section>

<!-- Gallery Content -->
<section class="section-padding">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Photo Gallery</h2>
            <p class="section-text">Take a visual tour of our property and discover what makes us special.</p>
        </div>
        
        <!-- Gallery Filter -->
        <div class="gallery-filter text-center mb-5">
            <button class="btn btn-outline-gold active" data-filter="all">All</button>
            <button class="btn btn-outline-gold" data-filter="rooms">Rooms</button>
            <button class="btn btn-outline-gold" data-filter="venues">Venues</button>
            <button class="btn btn-outline-gold" data-filter="dining">Dining</button>
            <button class="btn btn-outline-gold" data-filter="experiences">Experiences</button>
        </div>
        
        <!-- Gallery Grid -->
        <div class="row g-3 gallery-grid">
            <!-- Gallery items will be added here -->
        </div>
    </div>
</section>

<?php require_once 'includes/whatsapp-button.php'; ?>
<?php require_once 'includes/footer.php'; ?>
