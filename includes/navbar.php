<!-- Top Bar -->
<div class="top-bar">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="top-bar-left">
                    <a href="tel:<?php echo SITE_PHONE; ?>" class="top-bar-item">
                        <i class="bi bi-telephone-fill"></i>
                        <?php echo SITE_PHONE; ?>
                    </a>
                    <a href="mailto:<?php echo SITE_EMAIL; ?>" class="top-bar-item d-none d-md-inline">
                        <i class="bi bi-envelope-fill"></i>
                        <?php echo SITE_EMAIL; ?>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="top-bar-right">
                    <a href="#" class="top-bar-item"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="top-bar-item"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="top-bar-item"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="top-bar-item"><i class="bi bi-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Navigation -->
<nav class="navbar navbar-expand-lg <?php echo (getCurrentPage() === 'home') ? 'navbar-home' : 'navbar-inner'; ?>" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <span class="brand-text">DOAB VILAS</span>
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <!-- Stay -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php echo isActivePage('rooms'); ?> <?php echo isActivePage('suites'); ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Stay
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item <?php echo isActivePage('rooms'); ?>" href="rooms.php">Rooms</a></li>
                        <li><a class="dropdown-item <?php echo isActivePage('suites'); ?>" href="suites.php">Suites</a></li>
                    </ul>
                </li>
                
                <!-- Dine -->
                <li class="nav-item">
                    <a class="nav-link <?php echo isActivePage('dining'); ?>" href="dining.php">Dine</a>
                </li>
                
                <!-- Weddings & Events -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php echo isActivePage('weddings'); ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Weddings & Events
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item <?php echo isActivePage('diamond'); ?>" href="diamond.php">Diamond</a></li>
                        <li><a class="dropdown-item <?php echo isActivePage('jashan-party-lawn'); ?>" href="jashan-party-lawn.php">Jashan Party Lawn</a></li>
                        <li><a class="dropdown-item <?php echo isActivePage('aquarius-pool'); ?>" href="aquarius-pool.php">Aquarius Pool</a></li>
                        <li><a class="dropdown-item <?php echo isActivePage('sapphire'); ?>" href="sapphire.php">Sapphire</a></li>
                    </ul>
                </li>
                
                <!-- Experiences -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php echo isActivePage('experiences'); ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Experiences
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item <?php echo isActivePage('pool'); ?>" href="pool.php">Pool</a></li>
                        <li><a class="dropdown-item <?php echo isActivePage('garden'); ?>" href="garden.php">Garden</a></li>
                        <li><a class="dropdown-item <?php echo isActivePage('dining-experience'); ?>" href="dining.php#experience">Dining</a></li>
                        <li><a class="dropdown-item <?php echo isActivePage('services'); ?>" href="services.php">Services</a></li>
                    </ul>
                </li>
                
                <!-- Gallery -->
                <li class="nav-item">
                    <a class="nav-link <?php echo isActivePage('gallery'); ?>" href="gallery.php">Gallery</a>
                </li>
                
                <!-- Offers -->
                <li class="nav-item">
                    <a class="nav-link <?php echo isActivePage('offers'); ?>" href="offers.php">Offers</a>
                </li>
                
                <!-- About -->
                <li class="nav-item">
                    <a class="nav-link <?php echo isActivePage('about'); ?>" href="about.php">About</a>
                </li>
                
                <!-- Contact -->
                <li class="nav-item">
                    <a class="nav-link <?php echo isActivePage('contact'); ?>" href="contact.php">Contact</a>
                </li>
            </ul>
            
            <a href="booking.php" class="btn btn-gold">BOOK NOW</a>
        </div>
    </div>
</nav>
