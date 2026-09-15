<!-- Top Bar + Header -->
<header class="site-header header-solid" id="siteHeader">
    <!-- Main Navigation -->
    <div class="header-main">
        <div class="header-main-container">
            <a class="header-logo" href="index.php">
                <img src="assets/images/logo/doab-villas-logo.avif" 
                     alt="Doab Vilas Logo" class="header-logo-img">
            </a>
            
            <nav class="header-nav custom-nav" id="headerNav">
                <!-- Mobile Sidebar Header (Logo + Close) -->
                <div class="mobile-sidebar-header">
                    <a class="mobile-sidebar-logo" href="index.php">
                        <img src="assets/images/logo/doab-villas-logo.avif" alt="Doab Vilas Logo">
                    </a>
                    <button class="mobile-sidebar-close" id="mobileSidebarClose" aria-label="Close menu">
                        <i class="bi bi-x-lg"></i>
                    </button>
                </div>

                <ul class="nav-list">
                    
                    <!-- 1. HOME -->
                    <li class="nav-item <?php echo (getCurrentPage() == 'home') ? 'active' : ''; ?>">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    
                    <!-- 2. ABOUT US -->
                    <li class="nav-item <?php echo (getCurrentPage() == 'about') ? 'active' : ''; ?>">
                        <a href="about.php" class="nav-link">About Us</a>
                    </li>
                    
                    <!-- 3. ROOMS & SUITES -->
                    <li class="nav-item <?php echo (in_array(getCurrentPage(), ['rooms', 'suites', 'room-detail'])) ? 'active' : ''; ?>">
                        <a href="rooms.php" class="nav-link">Rooms & Suites</a>
                    </li>
                    
                    <!-- 4. DINING -->
                    <li class="nav-item <?php echo (in_array(getCurrentPage(), ['dining', 'bar-and-restaurants', 'frigos-gourmet-live-kitchen', 'the-long-island', 'alfresco-pool-side-bar'])) ? 'active' : ''; ?>">
                        <a href="dining.php" class="nav-link">Dining</a>
                    </li>
                    
                    <!-- 5. HALLS -->
                    <li class="nav-item <?php echo (in_array(getCurrentPage(), ['weddings', 'wedding-venues', 'festival-events', 'corporate-events-and-meetings', 'celebrations', 'diamond', 'sapphire', 'jashan-party-lawn', 'aquarius-pool'])) ? 'active' : ''; ?>">
                        <a href="weddings.php" class="nav-link">Halls</a>
                    </li>
                    
                    <!-- 6. EVENTS -->
                    <li class="nav-item <?php echo (getCurrentPage() == 'upcoming-events') ? 'active' : ''; ?>">
                        <a href="upcoming-events.php" class="nav-link">Events</a>
                    </li>
                    
                    <!-- 7. GALLERY -->
                    <li class="nav-item <?php echo (getCurrentPage() == 'gallery') ? 'active' : ''; ?>">
                        <a href="gallery.php" class="nav-link">Gallery</a>
                    </li>
                    
                    <!-- 8. CONTACT US -->
                    <li class="nav-item <?php echo (getCurrentPage() == 'contact') ? 'active' : ''; ?>">
                        <a href="contact.php" class="nav-link">Contact Us</a>
                    </li>
                    
                    <!-- Quick Enquiry Button -->
                    <li class="nav-item">
                        <button type="button" class="btn-quick-enquiry-nav" data-bs-toggle="modal" data-bs-target="#quickEnquiryModal">
                            Quick Enquiry
                        </button>
                    </li>
                    
                </ul>
            </nav>

            <!-- Hamburger (inside header-main, right side) -->
            <button class="mobile-menu-toggle" id="mobileMenuToggle" aria-label="Toggle menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</header>