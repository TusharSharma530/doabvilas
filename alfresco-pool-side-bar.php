<?php 
$pageTitle = 'Alfresco Pool-side Bar in Meerut';
require_once 'includes/header.php'; 
require_once 'includes/navbar.php'; 
?>

<!-- ==========================================
     HERO BANNER
     ========================================== -->
<div class="banner banner-rooms-suites">
    <div class="bg overlay-top overlay-bottom">
        <img src="assets/images/dining/alfresco-pool-side-bar--DineWine.jpg" alt="Alfresco Pool-side Bar" title="Alfresco Pool-side Bar" class="hero-bg-img" />
    </div>
    <div class="banner-container">
        <div class="container">
            <div class="content text-center">
                <div class="title">Dine & Wine</div>
                <h1>ALFRESCO</h1>
                <div class="scrdown">
                    <a href="#contentSection" aria-label="Scroll Down">
                        <i class="bi bi-chevron-down"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ==========================================
     CONTENT SECTION
     ========================================== -->
<section class="sec-wed-Celebration" id="contentSection">
    <div class="container">
        
        <!-- Main Content -->
        <div class="row align-items-center g-4 g-lg-5 mb-5">
            <div class="col-lg-6">
                <div class="venue-img-box">
                    <img src="assets/images/dining/alfresco-pool-side-bar--DineWine.jpg" alt="Alfresco Pool-side Bar" title="Alfresco Pool-side Bar" class="img-fluid" loading="lazy" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="venue-info-content">
                    <h4>Alfresco (Pool-side Bar)</h4>
                    <p>This is a perfect place for your Mehandi, Bachelor Party, Cocktail Events. Enjoy Roof Top Bar with Pool on the Side with complete Privacy. Customized decors suiting the themes, all available under one Umbrella.</p>
                <p>Experience the magic of open-air dining with a stunning pool view. Our Alfresco bar offers a unique ambiance perfect for special celebrations and intimate gatherings.</p>
                </div>
            </div>
        </div>

        <!-- Other Dining Options -->
        <div class="section-header text-center mb-5">
            <h2 class="section-title">Our Other Dining Options</h2>
        </div>

        <div class="row g-4">
            
            <div class="col-md-6 col-lg-3">
                <div class="dine-card img_hover">
                    <figure>
                        <a href="bar-and-restaurants.php">
                            <img src="assets/images/dining/bar-and-restaurants--DineWine.jpg" alt="Bar & Restaurants" class="img-fluid" loading="lazy" />
                        </a>
                    </figure>
                    <div class="dine-card-content">
                        <h5>Bar & Restaurants</h5>
                        <a href="bar-and-restaurants.php" class="btn-explore">
                            <span>Explore</span>
                            <svg width="22" height="12" viewBox="0 0 22 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 6H20M20 6L15 1M20 6L15 11" stroke="#C9A96A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="dine-card img_hover">
                    <figure>
                        <a href="frigos-gourmet-live-kitchen.php">
                            <img src="assets/images/dining/frigos-gourmet-live-kitchen--DineWine.jpg" alt="Frigo's Gourmet" class="img-fluid" loading="lazy" />
                        </a>
                    </figure>
                    <div class="dine-card-content">
                        <h5>Frigo's Gourmet</h5>
                        <p>Live Kitchen</p>
                        <a href="frigos-gourmet-live-kitchen.php" class="btn-explore">
                            <span>Explore</span>
                            <svg width="22" height="12" viewBox="0 0 22 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 6H20M20 6L15 1M20 6L15 11" stroke="#C9A96A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="dine-card img_hover">
                    <figure>
                        <a href="the-long-island.php">
                            <img src="assets/images/dining/the-long-Island-pub-bar--DineWine.jpg" alt="The Long Island" class="img-fluid" loading="lazy" />
                        </a>
                    </figure>
                    <div class="dine-card-content">
                        <h5>The Long Island</h5>
                        <p>Pub & Bar</p>
                        <a href="the-long-island.php" class="btn-explore">
                            <span>Explore</span>
                            <svg width="22" height="12" viewBox="0 0 22 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 6H20M20 6L15 1M20 6L15 11" stroke="#C9A96A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="dine-card img_hover">
                    <figure>
                        <a href="dining.php">
                            <img src="assets/images/dining/dine-wine.jpg" alt="All Dining" class="img-fluid" loading="lazy" />
                        </a>
                    </figure>
                    <div class="dine-card-content">
                        <h5>All Dining</h5>
                        <p>View All Options</p>
                        <a href="dining.php" class="btn-explore">
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
</section>

<style>
.venue-img-box { overflow: hidden; }
.venue-img-box img { width: 100%; height: 400px; object-fit: cover; transition: transform 0.6s ease; }
.venue-img-box:hover img { transform: scale(1.05); }
.venue-info-content { padding: 20px; }
.venue-info-content h4 { font-family: 'Luxia', serif; font-size: 32px; color: var(--dv-dark); margin-bottom: 20px; }
.venue-info-content p { font-size: 15px; line-height: 1.9; color: #666; margin-bottom: 15px; }
.dine-card { background: #fff; overflow: hidden; }
.dine-card figure { margin: 0; overflow: hidden; }
.dine-card figure img { width: 100%; height: 220px; object-fit: cover; transition: transform 0.5s ease; }
.dine-card:hover figure img { transform: scale(1.08); }
.dine-card-content { padding: 20px; text-align: center; }
.dine-card-content h5 { font-family: 'Luxia', serif; font-size: 18px; color: var(--dv-dark); margin-bottom: 5px; }
.dine-card-content p { font-size: 13px; color: #888; margin-bottom: 15px; }
.btn-explore { display: inline-flex; align-items: center; gap: 8px; padding: 10px 25px; background: var(--dv-gold); color: #fff; text-decoration: none; border-radius: 30px; font-size: 13px; font-weight: 500; text-transform: uppercase; letter-spacing: 1px; transition: all 0.3s ease; }
.btn-explore:hover { background: var(--dv-dark); color: #fff; }
@media (max-width: 991px) { .venue-img-box img { height: 300px; } }
@media (max-width: 575px) { .venue-img-box img { height: 250px; } .venue-info-content h4 { font-size: 26px; } }
</style>

<?php require_once 'includes/whatsapp-button.php'; ?>
<?php require_once 'includes/footer.php'; ?>