<!-- Top Bar + Header - Bravura Resort Style -->
<header class="site-header <?php echo (getCurrentPage() === 'home') ? 'header-transparent' : 'header-solid'; ?>" id="siteHeader">
    <!-- Top Bar -->
    <div class="header-top-bar">
        <div class="header-top-container">
            <div class="header-top-right">
                <a href="tel:+917455802240" class="header-phone">
                    <span>+91-7455802240</span>
                </a>
                <button type="button" class="btn-quick-enquiry" data-bs-toggle="modal" data-bs-target="#quickEnquiryModal">
                    Quick Enquiry
                </button>
                <button type="button" class="header-login" data-bs-toggle="modal" data-bs-target="#loginModal">
                    <span>Login</span>
                </button>
                <button class="mobile-menu-toggle" id="mobileMenuToggle" aria-label="Toggle menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </div>
    
    <!-- Main Navigation -->
    <div class="header-main">
        <div class="header-main-container">
            <a class="header-logo" href="index.php">
                <img src="assets/images/logo/doab-villas-logo.avif" 
                     alt="Doab Vilas Logo" class="header-logo-img">
            </a>
            
            <nav class="header-nav" id="headerNav">
                <ul class="nav-list">
                    <li class="nav-item has-mega-menu <?php echo (in_array(getCurrentPage(), ['rooms', 'suites', 'room-detail'])) ? 'active' : ''; ?>">
                        <a href="rooms.php" class="nav-link">Rooms & Suites</a>
                        <div class="mega-menu">
                            <div class="mega-menu-content">
                                <div class="mega-menu-col col-links">
                                    <div class="mega-menu-title">Rooms & Suites</div>
                                    <ul class="mega-menu-list">
                                        <li><a href="room-detail.php?room=premium">Premium Rooms</a></li>
                                        <li><a href="room-detail.php?room=executive">Premium Executive Rooms</a></li>
                                        <li><a href="room-detail.php?room=junior-suite">Premium Junior Suite Rooms</a></li>
                                        <li><a href="room-detail.php?room=suite">Premium Suites</a></li>
                                        <li class="view-all-link"><a href="rooms.php"><i class="bi bi-arrow-right-circle"></i> View All Accommodations</a></li>
                                    </ul>
                                </div>
                                <div class="mega-menu-col col-cards">
                                    <div class="mega-menu-images-grid">
                                        <a href="room-detail.php?room=premium" class="mega-menu-card">
                                            <div class="card-img-wrap">
                                                <img src="assets/images/rooms/premium-rooms--Room.jpg" alt="Premium Rooms">
                                                <span class="card-price">₹5,899/night</span>
                                            </div>
                                            <span class="card-title">Premium Rooms</span>
                                        </a>
                                        <a href="room-detail.php?room=executive" class="mega-menu-card">
                                            <div class="card-img-wrap">
                                                <img src="assets/images/rooms/premium-executive-rooms--Room.jpg" alt="Premium Executive Rooms">
                                                <span class="card-price">₹6,350/night</span>
                                            </div>
                                            <span class="card-title">Premium Executive</span>
                                        </a>
                                        <a href="room-detail.php?room=junior-suite" class="mega-menu-card">
                                            <div class="card-img-wrap">
                                                <img src="assets/images/rooms/Premium-Junior-Suites-rooms--Room.jpg" alt="Junior Suites">
                                                <span class="card-price">₹7,070/night</span>
                                            </div>
                                            <span class="card-title">Junior Suites</span>
                                        </a>
                                        <a href="room-detail.php?room=suite" class="mega-menu-card">
                                            <div class="card-img-wrap">
                                                <img src="assets/images/rooms/Premium-Suites--Room.jpg" alt="Premium Suites">
                                                <span class="card-price">₹7,249/night</span>
                                            </div>
                                            <span class="card-title">Premium Suites</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item <?php echo isActivePage('dining'); ?>">
                        <a href="dining.php" class="nav-link">Dine & Wine</a>
                    </li>
                    <li class="nav-item has-mega-menu <?php echo (in_array(getCurrentPage(), ['weddings', 'diamond', 'jashan-party-lawn', 'aquarius-pool', 'sapphire'])) ? 'active' : ''; ?>">
                        <a href="weddings.php" class="nav-link">Weddings & Celebrations</a>
                        <div class="mega-menu">
                            <div class="mega-menu-content">
                                <div class="mega-menu-col col-links">
                                    <div class="mega-menu-title">Banquet & Lawn Spaces</div>
                                    <ul class="mega-menu-list">
                                        <li><a href="diamond.php">Diamond Grand Hall</a></li>
                                        <li><a href="jashan-party-lawn.php">Jashan Royal Party Lawn</a></li>
                                        <li><a href="aquarius-pool.php">Aquarius Poolside Venue</a></li>
                                        <li><a href="sapphire.php">Sapphire Imperial Hall</a></li>
                                        <li class="view-all-link"><a href="weddings.php"><i class="bi bi-arrow-right-circle"></i> Wedding Packages</a></li>
                                    </ul>
                                </div>
                                <div class="mega-menu-col col-cards">
                                    <div class="mega-menu-images-grid-2">
                                        <a href="weddings.php" class="mega-menu-card">
                                            <div class="card-img-wrap">
                                                <img src="assets/images/weddings/festival-events.jpg" alt="Wedding Venues">
                                                <span class="card-badge">Weddings & Lawn</span>
                                            </div>
                                            <span class="card-title">Wedding Venues & Lawn</span>
                                        </a>
                                        <a href="diamond.php" class="mega-menu-card">
                                            <div class="card-img-wrap">
                                                <img src="assets/images/experiences/corporate-events-and-meetings.jpg" alt="Corporate Events">
                                                <span class="card-badge">Corporate & Events</span>
                                            </div>
                                            <span class="card-title">Corporate & Meetings</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item <?php echo (in_array(getCurrentPage(), ['experiences', 'pool', 'garden', 'services'])) ? 'active' : ''; ?>">
                        <a href="experiences.php" class="nav-link">Upcoming Events</a>
                    </li>
                    <li class="nav-item <?php echo isActivePage('offers'); ?>">
                        <a href="offers.php" class="nav-link">Special Offers</a>
                    </li>
                    <li class="nav-item <?php echo isActivePage('about'); ?>">
                        <a href="about.php" class="nav-link">Brago Members</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
