<!-- Top Bar + Header - Bravura Resort Style -->
<header class="site-header <?php echo (getCurrentPage() === 'home') ? 'header-transparent' : 'header-solid'; ?>" id="siteHeader">
    <!-- Top Bar -->
    <div class="header-top-bar">
        <div class="header-top-container">
            <div class="header-top-right">
                <a href="tel:<?php echo SITE_PHONE; ?>" class="header-phone">
                    <i class="bi bi-telephone-fill"></i>
                    <?php echo SITE_PHONE; ?>
                </a>
                <a href="booking.php" class="btn-quick-enquiry">Quick Enquiry</a>
                <a href="#" class="header-login">
                    <i class="bi bi-person"></i> Login
                </a>
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
                    <li class="nav-item has-mega-menu">
                        <a href="rooms.php" class="nav-link">Stay</a>
                        <div class="mega-menu">
                            <div class="mega-menu-content">
                                <div class="mega-menu-col">
                                    <div class="mega-menu-title">Rooms & Suites</div>
                                    <ul class="mega-menu-list">
                                        <li><a href="rooms.php">Rooms</a></li>
                                        <li><a href="suites.php">Suites</a></li>
                                    </ul>
                                </div>
                                <div class="mega-menu-col">
                                    <div class="mega-menu-images">
                                        <a href="rooms.php" class="mega-menu-img-link">
                                            <img src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?w=300&q=80" alt="Rooms">
                                            <span>Rooms</span>
                                        </a>
                                        <a href="suites.php" class="mega-menu-img-link">
                                            <img src="https://images.unsplash.com/photo-1590490360182-c33d57733427?w=300&q=80" alt="Suites">
                                            <span>Suites</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="dining.php" class="nav-link">Dine</a>
                    </li>
                    <li class="nav-item has-mega-menu">
                        <a href="weddings.php" class="nav-link">Weddings & Events</a>
                        <div class="mega-menu">
                            <div class="mega-menu-content">
                                <div class="mega-menu-col">
                                    <div class="mega-menu-title">Venues</div>
                                    <ul class="mega-menu-list">
                                        <li><a href="diamond.php">Diamond Hall</a></li>
                                        <li><a href="jashan-party-lawn.php">Jashan Party Lawn</a></li>
                                        <li><a href="aquarius-pool.php">Aquarius Pool</a></li>
                                        <li><a href="sapphire.php">Sapphire</a></li>
                                    </ul>
                                </div>
                                <div class="mega-menu-col">
                                    <div class="mega-menu-images">
                                        <a href="diamond.php" class="mega-menu-img-link">
                                            <img src="https://images.unsplash.com/photo-1519167758481-83f550bb49b3?w=300&q=80" alt="Diamond Hall">
                                            <span>Diamond Hall</span>
                                        </a>
                                        <a href="jashan-party-lawn.php" class="mega-menu-img-link">
                                            <img src="https://images.unsplash.com/photo-1464366400600-7168b8af9bc3?w=300&q=80" alt="Jashan Lawn">
                                            <span>Jashan Lawn</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item has-mega-menu">
                        <a href="experiences.php" class="nav-link">Experiences</a>
                        <div class="mega-menu">
                            <div class="mega-menu-content">
                                <div class="mega-menu-col">
                                    <div class="mega-menu-title">Experiences</div>
                                    <ul class="mega-menu-list">
                                        <li><a href="pool.php">Pool</a></li>
                                        <li><a href="garden.php">Garden</a></li>
                                        <li><a href="services.php">Services</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="gallery.php" class="nav-link">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a href="offers.php" class="nav-link">Offers</a>
                    </li>
                    <li class="nav-item">
                        <a href="about.php" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.php" class="nav-link">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
