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
        <img src="assets/images/rooms/rooms-banner.jpg" alt="Rooms & Suites" title="Rooms & Suites" class="hero-bg-img" />
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
                <div class="banner_360">
                    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#tour360Modal">
                        <i class="bi bi-badge-3d-fill"></i>
                        <p>360 <span>Tour</span></p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ==========================================
     ROOMS & SUITES LISTING SECTION
     ========================================== -->
<section class="BGR-RooSuit-Section-a" id="roomsListingSection">
    <div class="container">
        <div class="room-inn-SuiListing">
            <div class="row g-4 g-lg-5">
                
                <!-- 1. Premium Rooms -->
                <div class="col-md-6">
                    <div class="item img_hover">
                        <figure>
                            <a href="room-detail.php?room=premium">
                                <img src="assets/images/rooms/premium-rooms.jpg" alt="Premium Rooms" title="Premium Rooms" class="img-fluid" loading="lazy" />
                            </a>
                        </figure>
                        <div class="content">
                            <div class="catName">Premium Rooms</div>
                            <div class="link">
                                <div class="bg">
                                    <a href="room-detail.php?room=premium">
                                        <span>Explore</span>
                                        <svg width="22" height="12" viewBox="0 0 22 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 6H20M20 6L15 1M20 6L15 11" stroke="#C9A96A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- 2. Premium Executive Rooms -->
                <div class="col-md-6">
                    <div class="item img_hover">
                        <figure>
                            <a href="room-detail.php?room=executive">
                                <img src="assets/images/rooms/premium-executive-rooms.jpg" alt="Premium Executive Rooms" title="Premium Executive Rooms" class="img-fluid" loading="lazy" />
                            </a>
                        </figure>
                        <div class="content">
                            <div class="catName">Premium Executive Rooms</div>
                            <div class="link">
                                <div class="bg">
                                    <a href="room-detail.php?room=executive">
                                        <span>Explore</span>
                                        <svg width="22" height="12" viewBox="0 0 22 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 6H20M20 6L15 1M20 6L15 11" stroke="#C9A96A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- 3. Premium Junior Suite Rooms -->
                <div class="col-md-6">
                    <div class="item img_hover">
                        <figure>
                            <a href="room-detail.php?room=junior-suite">
                                <img src="assets/images/rooms/Premium-Junior-Suites-rooms.jpg" alt="Premium Junior Suite Rooms" title="Premium Junior Suite Rooms" class="img-fluid" loading="lazy" />
                            </a>
                        </figure>
                        <div class="content">
                            <div class="catName">Premium Junior Suite Rooms</div>
                            <div class="link">
                                <div class="bg">
                                    <a href="room-detail.php?room=junior-suite">
                                        <span>Explore</span>
                                        <svg width="22" height="12" viewBox="0 0 22 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 6H20M20 6L15 1M20 6L15 11" stroke="#C9A96A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- 4. Premium Suites -->
                <div class="col-md-6">
                    <div class="item img_hover">
                        <figure>
                            <a href="room-detail.php?room=suite">
                                <img src="assets/images/rooms/Premium-Suites.jpg" alt="Premium Suites" title="Premium Suites" class="img-fluid" loading="lazy" />
                            </a>
                        </figure>
                        <div class="content">
                            <div class="catName">Premium Suites</div>
                            <div class="link">
                                <div class="bg">
                                    <a href="room-detail.php?room=suite">
                                        <span>Explore</span>
                                        <svg width="22" height="12" viewBox="0 0 22 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 6H20M20 6L15 1M20 6L15 11" stroke="#C9A96A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     360 VIRTUAL TOUR MODAL
     ========================================== -->
<div class="modal fade luxury-modal" id="tour360Modal" tabindex="-1" aria-labelledby="tour360ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content luxury-modal-content">
            <div class="modal-header border-0 pb-0">
                <div class="modal-title-wrap">
                    <span class="modal-subtitle">Interactive Experience</span>
                    <h4 class="modal-title" id="tour360ModalLabel">Rooms & Suites - 360° Virtual Tour</h4>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-3">
                <div class="ratio ratio-16x9 rounded overflow-hidden shadow">
                    <iframe src="https://www.bravuraresort.com/360/index.html?startscene=7" title="Rooms 360 Tour" allowfullscreen loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'includes/whatsapp-button.php'; ?>
<?php require_once 'includes/footer.php'; ?>
