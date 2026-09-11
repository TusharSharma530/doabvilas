<?php 
$pageTitle = 'Rooms & Suites';
require_once 'includes/header.php'; 
require_once 'includes/navbar.php'; 
?>

<!-- Page Hero -->
<section class="page-hero" style="background-image: url('assets/images/rooms/premium-rooms--Room.jpg');">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="page-hero-content">
            <span class="section-subtitle">Accommodations</span>
            <h1 class="page-title">Our Rooms & Suites</h1>
            <p class="page-text">Experience comfort, elegance, and world-class luxury in our beautifully designed rooms</p>
        </div>
    </div>
</section>

<!-- Rooms Content -->
<section class="section-padding" style="background-color: var(--dv-ivory);">
    <div class="container">
        <div class="section-header text-center mb-5">
            <span class="section-subtitle">Stay With Us</span>
            <h2 class="section-title">Luxury Rooms & Suites</h2>
            <p class="section-text">Each room is thoughtfully designed to provide the ultimate comfort, luxury, and relaxation.</p>
        </div>
        
        <div class="row g-4 justify-content-center">
            <!-- Premium Rooms -->
            <div class="col-md-6 col-lg-3">
                <div class="related-room-card img_hover">
                    <figure class="room-card-figure">
                        <a href="room-detail.php?room=premium">
                            <img src="assets/images/rooms/premium-rooms--Room.jpg" alt="Premium Rooms" class="img-fluid" loading="lazy">
                        </a>
                    </figure>
                    <div class="room-card-content">
                        <div class="catName">
                            <a href="room-detail.php?room=premium">Premium Rooms</a>
                        </div>
                        <div class="price">Rs. 5,899</div>
                        <a href="room-detail.php?room=premium" class="btn-more-rooms">View Details <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Premium Executive Rooms -->
            <div class="col-md-6 col-lg-3">
                <div class="related-room-card img_hover">
                    <figure class="room-card-figure">
                        <a href="room-detail.php?room=executive">
                            <img src="assets/images/rooms/premium-executive-rooms--Room.jpg" alt="Premium Executive Rooms" class="img-fluid" loading="lazy">
                        </a>
                    </figure>
                    <div class="room-card-content">
                        <div class="catName">
                            <a href="room-detail.php?room=executive">Premium Executive Rooms</a>
                        </div>
                        <div class="price">Rs. 6,350</div>
                        <a href="room-detail.php?room=executive" class="btn-more-rooms">View Details <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Premium Junior Suite Rooms -->
            <div class="col-md-6 col-lg-3">
                <div class="related-room-card img_hover">
                    <figure class="room-card-figure">
                        <a href="room-detail.php?room=junior-suite">
                            <img src="assets/images/rooms/Premium-Junior-Suites-rooms--Room.jpg" alt="Premium Junior Suite Rooms" class="img-fluid" loading="lazy">
                        </a>
                    </figure>
                    <div class="room-card-content">
                        <div class="catName">
                            <a href="room-detail.php?room=junior-suite">Premium Junior Suite Rooms</a>
                        </div>
                        <div class="price">Rs. 7,070</div>
                        <a href="room-detail.php?room=junior-suite" class="btn-more-rooms">View Details <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Premium Suites -->
            <div class="col-md-6 col-lg-3">
                <div class="related-room-card img_hover">
                    <figure class="room-card-figure">
                        <a href="room-detail.php?room=suite">
                            <img src="assets/images/rooms/Premium-Suites--Room.jpg" alt="Premium Suites" class="img-fluid" loading="lazy">
                        </a>
                    </figure>
                    <div class="room-card-content">
                        <div class="catName">
                            <a href="room-detail.php?room=suite">Premium Suites</a>
                        </div>
                        <div class="price">Rs. 7,249</div>
                        <a href="room-detail.php?room=suite" class="btn-more-rooms">View Details <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/whatsapp-button.php'; ?>
<?php require_once 'includes/footer.php'; ?>
