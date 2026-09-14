<?php 
$pageTitle = 'Gallery - Doab Vilas Luxury Resort, Meerut';
require_once 'includes/header.php'; 
require_once 'includes/navbar.php'; 
?>

<!-- Hero Banner -->
<div class="banner banner-rooms-suites banner_wedding banner_dining">
    <div class="bg overlay-top overlay-bottom">
        <img src="assets/images/rooms/doab villas 1.png" alt="Gallery" title="Gallery" class="hero-bg-img" />
    </div>
    <div class="banner-container">
        <div class="container">
            <div class="content text-center">
                <div class="title">Visual Journey</div>
                <h1>GALLERY</h1>
                <div class="scrdown">
                    <a href="#gallerySection" aria-label="Scroll Down">
                        <i class="bi bi-chevron-down"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Gallery Section -->
<section class="gallery-section section-padding" id="gallerySection">
    <div class="container">
        <div class="section-header text-center mb-5">
            <span class="section-subtitle">Explore</span>
            <h2 class="section-title">PHOTO GALLERY</h2>
        </div>
        
        <!-- Gallery Filter -->
        <div class="gallery-filter text-center mb-5">
            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="rooms">Rooms</button>
            <button class="filter-btn" data-filter="venues">Venues</button>
            <button class="filter-btn" data-filter="pool">Pool</button>
            <button class="filter-btn" data-filter="lobby">Lobby</button>
            <button class="filter-btn" data-filter="staff">Staff</button>
        </div>
        
        <!-- Gallery Grid -->
        <div class="row g-3 gallery-grid">
            
            <!-- Rooms -->
            <div class="col-md-4 col-lg-3 gallery-item" data-category="rooms">
                <div class="gallery-card" onclick="openLightbox('assets/images/rooms/room1.png', 'Luxury Room')">
                    <img src="assets/images/rooms/room1.png" alt="Luxury Room" class="img-fluid" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Luxury Room</span>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-lg-3 gallery-item" data-category="rooms">
                <div class="gallery-card" onclick="openLightbox('assets/images/rooms/room2.png', 'Premium Suite')">
                    <img src="assets/images/rooms/room2.png" alt="Premium Suite" class="img-fluid" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Premium Suite</span>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-lg-3 gallery-item" data-category="rooms">
                <div class="gallery-card" onclick="openLightbox('assets/images/rooms/rooms lobby.jpeg', 'Rooms Lobby')">
                    <img src="assets/images/rooms/rooms lobby.jpeg" alt="Rooms Lobby" class="img-fluid" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Rooms Lobby</span>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-lg-3 gallery-item" data-category="rooms">
                <div class="gallery-card" onclick="openLightbox('assets/images/rooms/doab villas.png', 'Doab Vilas')">
                    <img src="assets/images/rooms/doab villas.png" alt="Doab Vilas" class="img-fluid" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Doab Vilas</span>
                    </div>
                </div>
            </div>
            
            <!-- Venues -->
            <div class="col-md-4 col-lg-3 gallery-item" data-category="venues">
                <div class="gallery-card" onclick="openLightbox('assets/images/rooms/diamond-hall.png', 'Diamond Hall')">
                    <img src="assets/images/rooms/diamond-hall.png" alt="Diamond Hall" class="img-fluid" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Diamond Hall</span>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-lg-3 gallery-item" data-category="venues">
                <div class="gallery-card" onclick="openLightbox('assets/images/rooms/Saphhire hall.jpeg', 'Sapphire Hall')">
                    <img src="assets/images/rooms/Saphhire hall.jpeg" alt="Sapphire Hall" class="img-fluid" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Sapphire Hall</span>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-lg-3 gallery-item" data-category="venues">
                <div class="gallery-card" onclick="openLightbox('assets/images/rooms/Auirious pool.JPG', 'Aquarius Pool')">
                    <img src="assets/images/rooms/Auirious pool.JPG" alt="Aquarius Pool" class="img-fluid" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Aquarius Pool</span>
                    </div>
                </div>
            </div>
            
            <!-- Dining -->
            <div class="col-md-4 col-lg-3 gallery-item" data-category="venues">
                <div class="gallery-card" onclick="openLightbox('assets/images/dining/highwayrestaurant.webp', 'Highway Restaurant')">
                    <img src="assets/images/dining/highwayrestaurant.webp" alt="Highway Restaurant" class="img-fluid" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Highway Restaurant</span>
                    </div>
                </div>
            </div>
            
            <!-- Pool Images -->
            <div class="col-md-4 col-lg-3 gallery-item" data-category="pool">
                <div class="gallery-card" onclick="openLightbox('assets/images/gallery/pool1.JPG', 'Pool View 1')">
                    <img src="assets/images/gallery/pool1.JPG" alt="Pool View 1" class="img-fluid" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Pool View 1</span>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-lg-3 gallery-item" data-category="pool">
                <div class="gallery-card" onclick="openLightbox('assets/images/gallery/pool2.JPG', 'Pool View 2')">
                    <img src="assets/images/gallery/pool2.JPG" alt="Pool View 2" class="img-fluid" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Pool View 2</span>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-lg-3 gallery-item" data-category="pool">
                <div class="gallery-card" onclick="openLightbox('assets/images/gallery/pool3.JPG', 'Pool View 3')">
                    <img src="assets/images/gallery/pool3.JPG" alt="Pool View 3" class="img-fluid" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Pool View 3</span>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-lg-3 gallery-item" data-category="pool">
                <div class="gallery-card" onclick="openLightbox('assets/images/gallery/pool4.JPG', 'Pool View 4')">
                    <img src="assets/images/gallery/pool4.JPG" alt="Pool View 4" class="img-fluid" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Pool View 4</span>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-lg-3 gallery-item" data-category="pool">
                <div class="gallery-card" onclick="openLightbox('assets/images/gallery/pool5.JPG', 'Pool View 5')">
                    <img src="assets/images/gallery/pool5.JPG" alt="Pool View 5" class="img-fluid" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Pool View 5</span>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-lg-3 gallery-item" data-category="pool">
                <div class="gallery-card" onclick="openLightbox('assets/images/gallery/pool6.JPG', 'Pool View 6')">
                    <img src="assets/images/gallery/pool6.JPG" alt="Pool View 6" class="img-fluid" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Pool View 6</span>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-lg-3 gallery-item" data-category="pool">
                <div class="gallery-card" onclick="openLightbox('assets/images/gallery/pool7.JPG', 'Pool View 7')">
                    <img src="assets/images/gallery/pool7.JPG" alt="Pool View 7" class="img-fluid" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Pool View 7</span>
                    </div>
                </div>
            </div>
            
            <!-- Entry Lobby Images -->
            <div class="col-md-4 col-lg-3 gallery-item" data-category="lobby">
                <div class="gallery-card" onclick="openLightbox('assets/images/gallery/entry loby1 (1).JPG', 'Entry Lobby 1')">
                    <img src="assets/images/gallery/entry loby1 (1).JPG" alt="Entry Lobby 1" class="img-fluid" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Entry Lobby 1</span>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-lg-3 gallery-item" data-category="lobby">
                <div class="gallery-card" onclick="openLightbox('assets/images/gallery/entry loby1 (2).JPG', 'Entry Lobby 2')">
                    <img src="assets/images/gallery/entry loby1 (2).JPG" alt="Entry Lobby 2" class="img-fluid" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Entry Lobby 2</span>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-lg-3 gallery-item" data-category="lobby">
                <div class="gallery-card" onclick="openLightbox('assets/images/gallery/entry loby1 (3).JPG', 'Entry Lobby 3')">
                    <img src="assets/images/gallery/entry loby1 (3).JPG" alt="Entry Lobby 3" class="img-fluid" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Entry Lobby 3</span>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-lg-3 gallery-item" data-category="lobby">
                <div class="gallery-card" onclick="openLightbox('assets/images/gallery/entry loby1 (4).JPG', 'Entry Lobby 4')">
                    <img src="assets/images/gallery/entry loby1 (4).JPG" alt="Entry Lobby 4" class="img-fluid" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Entry Lobby 4</span>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-lg-3 gallery-item" data-category="lobby">
                <div class="gallery-card" onclick="openLightbox('assets/images/gallery/entry loby1 (5).JPG', 'Entry Lobby 5')">
                    <img src="assets/images/gallery/entry loby1 (5).JPG" alt="Entry Lobby 5" class="img-fluid" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Entry Lobby 5</span>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-lg-3 gallery-item" data-category="lobby">
                <div class="gallery-card" onclick="openLightbox('assets/images/gallery/entry loby1 (6).JPG', 'Entry Lobby 6')">
                    <img src="assets/images/gallery/entry loby1 (6).JPG" alt="Entry Lobby 6" class="img-fluid" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Entry Lobby 6</span>
                    </div>
                </div>
            </div>
            
            <!-- Staff Images -->
            <div class="col-md-4 col-lg-3 gallery-item" data-category="staff">
                <div class="gallery-card" onclick="openLightbox('assets/images/gallery/staff1.JPG', 'Staff 1')">
                    <img src="assets/images/gallery/staff1.JPG" alt="Staff 1" class="img-fluid" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Staff 1</span>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-lg-3 gallery-item" data-category="staff">
                <div class="gallery-card" onclick="openLightbox('assets/images/gallery/staff2.JPG', 'Staff 2')">
                    <img src="assets/images/gallery/staff2.JPG" alt="Staff 2" class="img-fluid" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Staff 2</span>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-lg-3 gallery-item" data-category="staff">
                <div class="gallery-card" onclick="openLightbox('assets/images/gallery/staff3.JPG', 'Staff 3')">
                    <img src="assets/images/gallery/staff3.JPG" alt="Staff 3" class="img-fluid" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Staff 3</span>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-lg-3 gallery-item" data-category="staff">
                <div class="gallery-card" onclick="openLightbox('assets/images/gallery/staff4.JPG', 'Staff 4')">
                    <img src="assets/images/gallery/staff4.JPG" alt="Staff 4" class="img-fluid" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Staff 4</span>
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

document.addEventListener('DOMContentLoaded', function() {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');
    
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            // Remove active class from all buttons
            filterBtns.forEach(b => b.classList.remove('active'));
            // Add active class to clicked button
            this.classList.add('active');
            
            const filter = this.getAttribute('data-filter');
            
            galleryItems.forEach(item => {
                if (filter === 'all' || item.getAttribute('data-category') === filter) {
                    item.classList.remove('hidden');
                } else {
                    item.classList.add('hidden');
                }
            });
        });
    });
});
</script>

<?php require_once 'includes/whatsapp-button.php'; ?>
<?php require_once 'includes/footer.php'; ?>
