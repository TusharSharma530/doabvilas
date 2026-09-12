<?php 
$pageTitle = 'Rooms & Suites, Luxury Hotels and Resorts, Accommodation in Meerut';
require_once 'includes/header.php'; 
require_once 'includes/navbar.php'; 
?>

<!-- ==========================================
     HERO BANNER - EXACT BRAVURA RESORT STYLE
     ========================================== -->
<div class="banner banner-rooms-suites">
    <div class="bg overlay-top overlay-bottom">
        <img src="assets/images/rooms/room1.png" alt="Rooms & Suites" title="Rooms & Suites" class="hero-bg-img" />
    </div>
    <div class="banner-container">
        <div class="container">
            <div class="content text-center">
                <div class="title">Exclusive</div>
                <h1>ROOMS & SUITES</h1>
                <div class="scrdown">
                    <a href="#roomsListingSection" aria-label="Scroll Down">
                        <i class="bi bi-chevron-down"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ==========================================
     LUXURY DELUX ROOMS SECTION
     ========================================== -->
<section class="rooms-suites-section section-padding" id="roomsListingSection">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2 class="section-title" style="font-size: clamp(1.8rem, 4vw, 2.5rem);">Luxury Delux Rooms</h2>
        </div>
        
        <div class="row g-4">
            <!-- 1. Premium Rooms -->
            <div class="col-lg-6">
                <a href="room-detail.php?room=premium" class="wedding-grid-card">
                    <div class="wedding-grid-img">
                        <img src="assets/images/rooms/room1.png" alt="Premium Rooms" title="Premium Rooms" class="img-fluid" loading="lazy" />
                    </div>
                    <div class="wedding-grid-content">
                        <h3 class="wedding-grid-title">Premium Rooms</h3>
                        <p class="wedding-grid-text">Experience luxury and comfort in our elegantly designed Premium Rooms with modern amenities, plush interiors, and stunning views for a truly royal stay.</p>
                    </div>
                </a>
            </div>
            
            <!-- 2. Premium Executive Rooms -->
            <div class="col-lg-6">
                <a href="room-detail.php?room=executive" class="wedding-grid-card">
                    <div class="wedding-grid-img">
                        <img src="assets/images/rooms/room2.png" alt="Premium Executive Rooms" title="Premium Executive Rooms" class="img-fluid" loading="lazy" />
                    </div>
                    <div class="wedding-grid-content">
                        <h3 class="wedding-grid-title">Premium Executive Rooms</h3>
                        <p class="wedding-grid-text">Indulge in the finest executive experience with spacious interiors, premium furnishings, and world-class amenities for the discerning traveler.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/whatsapp-button.php'; ?>
<?php require_once 'includes/footer.php'; ?>
