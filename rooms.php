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
<section class="luxury-rooms-section" id="roomsListingSection" style="padding: 60px 0;">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2 class="section-title" style="font-family: 'Luxia', serif; font-size: 36px; color: var(--dv-dark);">Luxury Delux Rooms</h2>
        </div>
        
        <div class="row g-4">
            <!-- 1. Room 1 -->
            <div class="col-md-6">
                <div class="room-card-item img_hover">
                    <figure style="margin: 0; overflow: hidden; border-radius: 8px;">
                        <a href="room-detail.php?room=premium">
                            <img src="assets/images/rooms/room1.png" alt="Premium Rooms" title="Premium Rooms" class="img-fluid" loading="lazy" style="width: 100%; height: 500px; object-fit: cover; transition: transform 0.5s ease;" />
                        </a>
                    </figure>
                    <div class="content" style="padding: 20px; text-align: center;">
                        <h4 style="font-family: 'Luxia', serif; font-size: 22px; color: var(--dv-dark); margin-bottom: 10px;">Premium Rooms</h4>
                        <a href="room-detail.php?room=premium" class="btn-explore" style="display: inline-flex; align-items: center; gap: 8px; padding: 10px 25px; background: var(--dv-gold); color: #fff; text-decoration: none; border-radius: 30px; font-size: 13px; font-weight: 500; text-transform: uppercase; letter-spacing: 1px; transition: all 0.3s ease;">
                            <span>Explore</span>
                            <svg width="22" height="12" viewBox="0 0 22 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 6H20M20 6L15 1M20 6L15 11" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- 2. Room 2 -->
            <div class="col-md-6">
                <div class="room-card-item img_hover">
                    <figure style="margin: 0; overflow: hidden; border-radius: 8px;">
                        <a href="room-detail.php?room=executive">
                            <img src="assets/images/rooms/room2.png" alt="Premium Executive Rooms" title="Premium Executive Rooms" class="img-fluid" loading="lazy" style="width: 100%; height: 350px; object-fit: cover; transition: transform 0.5s ease;" />
                        </a>
                    </figure>
                    <div class="content" style="padding: 20px; text-align: center;">
                        <h4 style="font-family: 'Luxia', serif; font-size: 22px; color: var(--dv-dark); margin-bottom: 10px;">Premium Executive Rooms</h4>
                        <a href="room-detail.php?room=executive" class="btn-explore" style="display: inline-flex; align-items: center; gap: 8px; padding: 10px 25px; background: var(--dv-gold); color: #fff; text-decoration: none; border-radius: 30px; font-size: 13px; font-weight: 500; text-transform: uppercase; letter-spacing: 1px; transition: all 0.3s ease;">
                            <span>Explore</span>
                            <svg width="22" height="12" viewBox="0 0 22 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 6H20M20 6L15 1M20 6L15 11" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/whatsapp-button.php'; ?>
<?php require_once 'includes/footer.php'; ?>
