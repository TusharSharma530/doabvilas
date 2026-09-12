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
                <div class="wedding-grid-card" onclick="openLightbox('assets/images/rooms/room1.png', 'Premium Rooms')" style="cursor: pointer;">
                    <div class="wedding-grid-img">
                        <img src="assets/images/rooms/room1.png" alt="Premium Rooms" title="Premium Rooms" class="img-fluid" loading="lazy" />
                    </div>
                    <div class="wedding-grid-content">
                        <p class="wedding-grid-text">Experience luxury and comfort in our elegantly designed Premium Rooms with modern amenities, plush interiors, and stunning views for a truly royal stay.</p>
                    </div>
                </div>
            </div>
            
            <!-- 2. Premium Executive Rooms -->
            <div class="col-lg-6">
                <div class="wedding-grid-card" onclick="openLightbox('assets/images/rooms/room2.png', 'Premium Executive Rooms')" style="cursor: pointer;">
                    <div class="wedding-grid-img">
                        <img src="assets/images/rooms/room2.png" alt="Premium Executive Rooms" title="Premium Executive Rooms" class="img-fluid" loading="lazy" />
                    </div>
                    <div class="wedding-grid-content">
                        <p class="wedding-grid-text">Indulge in the finest executive experience with spacious interiors, premium furnishings, and world-class amenities for the discerning traveler.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Lightbox Modal -->
<div id="galleryLightbox" class="gallery-lightbox" onclick="closeLightbox()">
    <span class="lightbox-close" onclick="closeLightbox()">&times;</span>
    <img id="lightboxImg" src="" alt="">
    <div id="lightboxCaption" class="lightbox-caption"></div>
</div>

<style>
.gallery-lightbox {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.9);
    z-index: 9999;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.gallery-lightbox.active {
    display: flex;
}

.gallery-lightbox img {
    max-width: 90%;
    max-height: 85vh;
    object-fit: contain;
    border-radius: 8px;
}

.lightbox-close {
    position: absolute;
    top: 20px;
    right: 30px;
    color: #fff;
    font-size: 40px;
    font-weight: bold;
    cursor: pointer;
    z-index: 10000;
    transition: color 0.3s;
}

.lightbox-close:hover {
    color: var(--dv-gold);
}

.lightbox-caption {
    color: #fff;
    font-size: 18px;
    margin-top: 15px;
    font-weight: 500;
    letter-spacing: 1px;
}
</style>

<script>
function openLightbox(src, caption) {
    document.getElementById('lightboxImg').src = src;
    document.getElementById('lightboxCaption').textContent = caption;
    document.getElementById('galleryLightbox').classList.add('active');
    document.body.style.overflow = 'hidden';
}

function closeLightbox() {
    document.getElementById('galleryLightbox').classList.remove('active');
    document.body.style.overflow = '';
}

document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closeLightbox();
});
</script>

<?php require_once 'includes/whatsapp-button.php'; ?>
<?php require_once 'includes/footer.php'; ?>
