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
            <button class="filter-btn" data-filter="dining">Dining</button>
            <button class="filter-btn" data-filter="experiences">Experiences</button>
        </div>
        
        <!-- Gallery Grid -->
        <div class="row g-3 gallery-grid">
            
            <!-- Rooms -->
            <div class="col-md-4 col-lg-3 gallery-item" data-category="rooms">
                <div class="gallery-card">
                    <img src="assets/images/rooms/room1.png" alt="Luxury Room" class="img-fluid" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Luxury Room</span>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-lg-3 gallery-item" data-category="rooms">
                <div class="gallery-card">
                    <img src="assets/images/rooms/room2.png" alt="Premium Suite" class="img-fluid" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Premium Suite</span>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-lg-3 gallery-item" data-category="rooms">
                <div class="gallery-card">
                    <img src="assets/images/rooms/rooms lobby.jpeg" alt="Rooms Lobby" class="img-fluid" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Rooms Lobby</span>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-lg-3 gallery-item" data-category="rooms">
                <div class="gallery-card">
                    <img src="assets/images/rooms/doab villas.png" alt="Doab Vilas" class="img-fluid" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Doab Vilas</span>
                    </div>
                </div>
            </div>
            
            <!-- Venues -->
            <div class="col-md-4 col-lg-3 gallery-item" data-category="venues">
                <div class="gallery-card">
                    <img src="assets/images/rooms/diamond-hall.png" alt="Diamond Hall" class="img-fluid" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Diamond Hall</span>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-lg-3 gallery-item" data-category="venues">
                <div class="gallery-card">
                    <img src="assets/images/rooms/Saphhire hall.jpeg" alt="Sapphire Hall" class="img-fluid" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Sapphire Hall</span>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-lg-3 gallery-item" data-category="venues">
                <div class="gallery-card">
                    <img src="assets/images/rooms/Auirious pool.JPG" alt="Aquarius Pool" class="img-fluid" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Aquarius Pool</span>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-lg-3 gallery-item" data-category="venues">
                <div class="gallery-card">
                    <img src="assets/images/weddings/wedding and events.jpg" alt="Wedding Venue" class="img-fluid" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Wedding Venue</span>
                    </div>
                </div>
            </div>
            
            <!-- Dining -->
            <div class="col-md-4 col-lg-3 gallery-item" data-category="dining">
                <div class="gallery-card">
                    <img src="assets/images/dining/bar-and-restaurants--DineWine.jpg" alt="Bar & Restaurant" class="img-fluid" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Bar & Restaurant</span>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-lg-3 gallery-item" data-category="dining">
                <div class="gallery-card">
                    <img src="assets/images/dining/frigos-gourmet-live-kitchen--DineWine.jpg" alt="Frigo's Gourmet" class="img-fluid" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Frigo's Gourmet</span>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-lg-3 gallery-item" data-category="dining">
                <div class="gallery-card">
                    <img src="assets/images/dining/the-long-Island-pub-bar--DineWine.jpg" alt="The Long Island" class="img-fluid" loading="lazy">
                    <div class="gallery-overlay">
                        <span>The Long Island</span>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-lg-3 gallery-item" data-category="dining">
                <div class="gallery-card">
                    <img src="assets/images/dining/alfresco-pool-side-bar--DineWine.jpg" alt="Alfresco Pool Bar" class="img-fluid" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Alfresco Pool Bar</span>
                    </div>
                </div>
            </div>
            
            <!-- Experiences -->
            <div class="col-md-4 col-lg-3 gallery-item" data-category="experiences">
                <div class="gallery-card">
                    <img src="assets/images/weddings/corporate-events-and-meetings.jpg" alt="Corporate Events" class="img-fluid" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Corporate Events</span>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-lg-3 gallery-item" data-category="experiences">
                <div class="gallery-card">
                    <img src="assets/images/weddings/celebrations.jpg" alt="Celebrations" class="img-fluid" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Celebrations</span>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-lg-3 gallery-item" data-category="experiences">
                <div class="gallery-card">
                    <img src="assets/images/weddings/festival-events.jpg" alt="Festival Events" class="img-fluid" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Festival Events</span>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-lg-3 gallery-item" data-category="experiences">
                <div class="gallery-card">
                    <img src="assets/images/rooms/our staff.JPG" alt="Our Staff" class="img-fluid" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Our Staff</span>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<style>
.gallery-section { padding: 60px 0; }

.gallery-filter { display: flex; flex-wrap: wrap; justify-content: center; gap: 10px; }

.filter-btn {
    background: transparent;
    border: 2px solid var(--dv-gold);
    color: var(--dv-dark);
    padding: 8px 25px;
    font-size: 14px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 1px;
    cursor: pointer;
    transition: all 0.3s ease;
    border-radius: 30px;
}

.filter-btn:hover,
.filter-btn.active {
    background: var(--dv-gold);
    color: #fff;
}

.gallery-card {
    position: relative;
    overflow: hidden;
    border-radius: 8px;
    cursor: pointer;
}

.gallery-card img {
    width: 100%;
    height: 220px;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.gallery-card:hover img {
    transform: scale(1.1);
}

.gallery-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(transparent, rgba(0,0,0,0.8));
    padding: 20px 15px 15px;
    opacity: 0;
    transition: opacity 0.4s ease;
}

.gallery-card:hover .gallery-overlay {
    opacity: 1;
}

.gallery-overlay span {
    color: #fff;
    font-size: 14px;
    font-weight: 500;
    letter-spacing: 0.5px;
}

.gallery-item.hidden {
    display: none;
}

@media (max-width: 767px) {
    .gallery-card img { height: 180px; }
    .filter-btn { padding: 6px 18px; font-size: 12px; }
}
</style>

<script>
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
