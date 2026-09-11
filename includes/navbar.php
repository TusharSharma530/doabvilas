<!-- Top Bar + Header - Bravura Resort Style -->
<header class="site-header <?php echo (in_array(getCurrentPage(), ['home', 'rooms', 'room-detail', 'suites', 'dining', 'bar-and-restaurants', 'frigos-gourmet-live-kitchen', 'the-long-island', 'alfresco-pool-side-bar', 'weddings', 'wedding-venues'])) ? 'header-transparent' : 'header-solid'; ?>" id="siteHeader">
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
            
            <nav class="header-nav custom-nav" id="headerNav">
                <ul class="nav-list">
                    
                    <!-- 1. ROOMS & SUITES (with Mega Menu) -->
                    <li class="nav-item has-mega-menu <?php echo (in_array(getCurrentPage(), ['rooms', 'suites', 'room-detail'])) ? 'active' : ''; ?>">
                        <a href="rooms.php" class="nav-link">Rooms & Suites</a>
                        <div class="mneu-list-full">
                            <div class="bg">
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-lg-4 col-xl-3">
                                            <div class="subnav_list">
                                                <div class="title">Rooms & Suites</div>
                                                <ul>
                                                    <li><a href="room-detail.php?room=premium">Premium Rooms</a></li>
                                                    <li><a href="room-detail.php?room=executive">Premium Executive Rooms</a></li>
                                                    <li><a href="room-detail.php?room=junior-suite">Premium Junior Suite Rooms</a></li>
                                                    <li><a href="room-detail.php?room=suite">Premium Suites</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-xl-9">
                                            <div class="row g-3">
                                                <div class="col-6 col-md-3">
                                                    <div class="menu-card-item img_hover">
                                                        <figure>
                                                            <a href="room-detail.php?room=premium">
                                                                <img src="assets/images/rooms/premium-rooms.jpg" alt="Premium Rooms" title="Premium Rooms" />
                                                            </a>
                                                        </figure>
                                                        <div class="content">
                                                            <div class="catName"><a href="room-detail.php?room=premium">Premium Rooms</a></div>
                                                            <div class="price">Rs. 5899</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="menu-card-item img_hover">
                                                        <figure>
                                                            <a href="room-detail.php?room=executive">
                                                                <img src="assets/images/rooms/premium-executive-rooms.jpg" alt="Premium Executive Rooms" title="Premium Executive Rooms" />
                                                            </a>
                                                        </figure>
                                                        <div class="content">
                                                            <div class="catName"><a href="room-detail.php?room=executive">Premium Executive Rooms</a></div>
                                                            <div class="price">Rs. 6350</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="menu-card-item img_hover">
                                                        <figure>
                                                            <a href="room-detail.php?room=junior-suite">
                                                                <img src="assets/images/rooms/Premium-Junior-Suites-rooms.jpg" alt="Premium Junior Suite Rooms" title="Premium Junior Suite Rooms" />
                                                            </a>
                                                        </figure>
                                                        <div class="content">
                                                            <div class="catName"><a href="room-detail.php?room=junior-suite">Premium Junior Suite Rooms</a></div>
                                                            <div class="price">Rs. 7070</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="menu-card-item img_hover">
                                                        <figure>
                                                            <a href="room-detail.php?room=suite">
                                                                <img src="assets/images/rooms/Premium-Suites.jpg" alt="Premium Suites" title="Premium Suites" />
                                                            </a>
                                                        </figure>
                                                        <div class="content">
                                                            <div class="catName"><a href="room-detail.php?room=suite">Premium Suites</a></div>
                                                            <div class="price">Rs. 7249</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    
                    <!-- 2. DINE & WINE (with Mega Menu) -->
                    <li class="nav-item has-mega-menu <?php echo (in_array(getCurrentPage(), ['dining', 'bar-and-restaurants'])) ? 'active' : ''; ?>">
                        <a href="dining.php" class="nav-link">Dine & Wine</a>
                        <div class="mneu-list-full">
                            <div class="bg">
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-lg-4 col-xl-3">
                                            <div class="subnav_list">
                                                <div class="title">Dine & Wine</div>
                                                <ul>
                                                    <li><a href="bar-and-restaurants.php">Bar & Restaurants</a></li>
                                                    <li><a href="dining.php?venue=frigos-gourmet">Frigo's Gourmet - Live Kitchen</a></li>
                                                    <li><a href="dining.php?venue=the-long-island">The Long Island (Pub & Bar)</a></li>
                                                    <li><a href="dining.php?venue=alfresco-bar">Alfresco (Pool-side Bar)</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-xl-9">
                                            <div class="row g-3">
                                                <div class="col-6 col-md-3">
                                                    <div class="menu-card-item img_hover">
                                                        <figure>
                                                            <a href="bar-and-restaurants.php">
                                                                <img src="assets/images/dining/bar-and-restaurants--DineWine.jpg" alt="Bar & Restaurants" title="Bar & Restaurants" />
                                                            </a>
                                                        </figure>
                                                        <div class="content">
                                                            <div class="catName"><a href="bar-and-restaurants.php">Bar & Restaurants</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="menu-card-item img_hover">
                                                        <figure>
                                                            <a href="dining.php?venue=frigos-gourmet">
                                                                <img src="assets/images/dining/frigos-gourmet-live-kitchen--DineWine.jpg" alt="Frigo's Gourmet - Live Kitchen" title="Frigo's Gourmet - Live Kitchen" />
                                                            </a>
                                                        </figure>
                                                        <div class="content">
                                                            <div class="catName"><a href="dining.php?venue=frigos-gourmet">Frigo's Gourmet - Live Kitchen</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="menu-card-item img_hover">
                                                        <figure>
                                                            <a href="dining.php?venue=the-long-island">
                                                                <img src="assets/images/dining/the-long-Island-pub-bar--DineWine.jpg" alt="The Long Island (Pub & Bar)" title="The Long Island (Pub & Bar)" />
                                                            </a>
                                                        </figure>
                                                        <div class="content">
                                                            <div class="catName"><a href="dining.php?venue=the-long-island">The Long Island (Pub & Bar)</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="menu-card-item img_hover">
                                                        <figure>
                                                            <a href="dining.php?venue=alfresco-bar">
                                                                <img src="assets/images/dining/alfresco-pool-side-bar--DineWine.jpg" alt="Alfresco (Pool-side Bar)" title="Alfresco (Pool-side Bar)" />
                                                            </a>
                                                        </figure>
                                                        <div class="content">
                                                            <div class="catName"><a href="dining.php?venue=alfresco-bar">Alfresco (Pool-side Bar)</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    
                    <!-- 3. WEDDINGS & CELEBRATIONS (Exact Bravura Resort Mega Menu Dialog Box) -->
                    <li class="nav-item has-mega-menu <?php echo (in_array(getCurrentPage(), ['weddings', 'diamond', 'jashan-party-lawn', 'aquarius-pool', 'sapphire'])) ? 'active' : ''; ?>">
                        <a href="weddings.php" class="nav-link">Weddings & Celebrations</a>
                        <div class="mneu-list-full">
                            <div class="bg">
                                <div class="container">
                                    <div class="row align-items-center">
                                        <!-- Column 1: Banquet Spaces -->
                                        <div class="col-lg-3">
                                            <div class="subnav_list">
                                                <div class="title">Banquet Spaces</div>
                                                <ul>
                                                    <li><a href="diamond.php">Grand Majestic Hall</a></li>
                                                    <li><a href="sapphire.php">Grand Imperial Hall</a></li>
                                                    <li><a href="diamond.php?hall=platinum">Grand Platinum Hall</a></li>
                                                    <li><a href="sapphire.php?hall=grandeur">Grandeur Hall</a></li>
                                                    <li><a href="diamond.php?hall=dior">Class-e-Dior Hall</a></li>
                                                    <li><a href="sapphire.php?hall=regent">Regent Hall</a></li>
                                                    <li><a href="aquarius-pool.php">Alfresco-de-Aqua</a></li>
                                                    <li><a href="garden.php">Paradise Garden</a></li>
                                                    <li><a href="jashan-party-lawn.php">Grand Empyrean Lawn</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        
                                        <!-- Column 2: Event Types -->
                                        <div class="col-lg-3">
                                            <div class="subnav_list">
                                                <div class="title">Event</div>
                                                <ul>
                                                    <li><a href="weddings.php">Wedding Venues / Lawn</a></li>
                                                    <li><a href="weddings.php?event=festival">Festival Events</a></li>
                                                    <li><a href="experiences.php">Corporate Events & Meetings</a></li>
                                                    <li><a href="weddings.php?event=celebrations">Celebrations</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        
                                        <!-- Column 3: Event Cards Grid -->
                                        <div class="col-lg-6">
                                            <div class="row g-3">
                                                <div class="col-6">
                                                    <div class="menu-card-item img_hover">
                                                        <figure>
                                                            <a href="weddings.php">
                                                                <img src="assets/images/weddings/weddings.jpg" alt="Wedding Venues / Lawn" title="Wedding Venues / Lawn" />
                                                            </a>
                                                        </figure>
                                                        <div class="content">
                                                            <div class="catName"><a href="weddings.php">Wedding Venues / Lawn</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="menu-card-item img_hover">
                                                        <figure>
                                                            <a href="weddings.php?event=festival">
                                                                <img src="assets/images/weddings/festival-events.jpg" alt="Festival Events" title="Festival Events" />
                                                            </a>
                                                        </figure>
                                                        <div class="content">
                                                            <div class="catName"><a href="weddings.php?event=festival">Festival Events</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="menu-card-item img_hover">
                                                        <figure>
                                                            <a href="experiences.php">
                                                                <img src="assets/images/weddings/corporate-events-and-meetings.jpg" alt="Corporate Events & Meetings" title="Corporate Events & Meetings" />
                                                            </a>
                                                        </figure>
                                                        <div class="content">
                                                            <div class="catName"><a href="experiences.php">Corporate Events & Meetings</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="menu-card-item img_hover">
                                                        <figure>
                                                            <a href="weddings.php?event=celebrations">
                                                                <img src="assets/images/weddings/celebrations.jpg" alt="Celebrations" title="Celebrations" />
                                                            </a>
                                                        </figure>
                                                        <div class="content">
                                                            <div class="catName"><a href="weddings.php?event=celebrations">Celebrations</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    
                    <!-- 4. UPCOMING EVENTS -->
                    <li class="nav-item <?php echo (in_array(getCurrentPage(), ['experiences', 'pool', 'garden', 'services'])) ? 'active' : ''; ?>">
                        <a href="experiences.php" class="nav-link">Upcoming Events</a>
                    </li>
                    
                    <!-- 5. SPECIAL OFFERS -->
                    <li class="nav-item <?php echo isActivePage('offers'); ?>">
                        <a href="offers.php" class="nav-link">Special Offers</a>
                    </li>
                    
                    <!-- 6. BRAGO MEMBERS -->
                    <li class="nav-item <?php echo isActivePage('about'); ?>">
                        <a href="about.php" class="nav-link">Brago Members</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
