<!-- Top Bar + Header -->
<header class="site-header header-solid" id="siteHeader">
    <!-- Top Bar -->
    <div class="header-top-bar">
        <div class="header-top-container">
            <div class="header-top-right">
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
            
            <nav class="header-nav custom-nav" id="headerNav">
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
                        <!--
                        <div class="mneu-list-full">
                            <div class="bg">
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-lg-4 col-xl-3">
                                            <div class="subnav_list">
                                                <div class="title">Events</div>
                                                <ul>
                                                    <li><a href="weddings.php">Weddings & Celebrations</a></li>
                                                    <li><a href="corporate-events-and-meetings.php">Corporate Events</a></li>
                                                    <li><a href="corporate-events-and-meetings.php">Conferences & Meetings</a></li>
                                                    <li><a href="celebrations.php">Birthday Celebrations</a></li>
                                                    <li><a href="celebrations.php">Engagement Ceremonies</a></li>
                                                    <li><a href="celebrations.php">Anniversary Celebrations</a></li>
                                                    <li><a href="corporate-events-and-meetings.php">Seminars & Workshops</a></li>
                                                    <li><a href="weddings.php">Award Ceremonies</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-xl-3">
                                            <div class="subnav_list">
                                                <div class="title">Social Events</div>
                                                <ul>
                                                    <li><a href="weddings.php">Social Gatherings</a></li>
                                                    <li><a href="weddings.php">Gala Dinners</a></li>
                                                    <li><a href="weddings.php">Cocktail Evenings</a></li>
                                                    <li><a href="weddings.php">Private Parties</a></li>
                                                    <li><a href="corporate-events-and-meetings.php">Business Meetings</a></li>
                                                    <li><a href="corporate-events-and-meetings.php">Product Launches</a></li>
                                                    <li><a href="festival-events.php">Festive Celebrations</a></li>
                                                    <li><a href="festival-events.php">Cultural Events</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-xl-3">
                                            <div class="subnav_list">
                                                <div class="title">More Events</div>
                                                <ul>
                                                    <li><a href="celebrations.php">Family Functions</a></li>
                                                    <li><a href="weddings.php">Pre-Wedding Events</a></li>
                                                    <li><a href="weddings.php">Banquets & Receptions</a></li>
                                                    <li><a href="weddings.php">Luxury Events</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        -->
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
        </div>
    </div>
</header>