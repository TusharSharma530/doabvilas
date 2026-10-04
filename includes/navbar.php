<!-- Top Bar + Header -->
<header class="site-header header-solid" id="siteHeader">
    <!-- Main Navigation -->
    <div class="header-main">
        <div class="header-main-container">
            <a class="header-logo" href="<?php echo pageUrl(); ?>">
            <img class="header-logo-img" src="<?= !empty(SITE_LOGO) ? $path . SITE_LOGO : '' ?>" alt="<?= SITE_NAME ?> Logo">
            </a>
            
            <nav class="header-nav custom-nav" id="headerNav">
                <!-- Mobile Sidebar Header (Logo + Close) -->
                <div class="mobile-sidebar-header">
                    <a class="mobile-sidebar-logo" href="<?php echo pageUrl(); ?>">
                        <img src="<?= !empty(SITE_LOGO) ? $path.SITE_LOGO : '' ?>" alt="<?= SITE_NAME ?> Logo">
                    </a>
                    <button class="mobile-sidebar-close" id="mobileSidebarClose" aria-label="Close menu">
                        <i class="bi bi-x-lg"></i>
                    </button>
                </div>

                <ul class="nav-list">

                    <?php

                    $sqlNav = mysqli_query($con, "SELECT c_name, c_url FROM `category` WHERE `c_type` = 1 AND `status` = 1 ORDER BY `order` ASC");
                    $activeSlug = getCurrentSlug();
                    if($sqlNav && mysqli_num_rows($sqlNav)){
                        while($rwNav = mysqli_fetch_assoc($sqlNav)){

                            $navSlug = trim($rwNav['c_url']);
                            if($navSlug === ''){ continue; }

                            $navName = trim($rwNav['c_name']);
                            if($navName === strtoupper($navName)){
                                $navName = ucwords(strtolower($navName));
                            }
                            $navName = htmlspecialchars($navName);
                            $navActive = (strcasecmp($navSlug, $activeSlug) === 0) ? 'active' : '';

                            $navHref = pageUrl($navSlug === 'home' ? '' : $navSlug);

                            echo '<li class="nav-item '.$navActive.'"><a href="'.$navHref.'" class="nav-link">'.$navName.'</a></li>';

                        }
                    }
                    ?>

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
<div class="page-content-wrap">