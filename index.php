<?php 
$pageTitle = 'Home';
require_once 'includes/header.php'; 
require_once 'includes/navbar.php'; 
?>

<!-- Hero Video Banner Section -->
<div class="banner Home_banner">
    <!-- Background Video with Gradient Overlays -->
    <div class="bg overlay-top overlay-bottom">
        <?php
        $homevideo = "";
        $sqlhomebanner = mysqli_query($con, "SELECT w.wb_img FROM `web_banner` w JOIN `category` c ON c.id = w.category_id WHERE c.c_name = 'HOME' AND c.c_type = 1 AND w.status = 1 ORDER BY w.wb_order ASC, w.id ASC LIMIT 1");
        if(!mysqli_num_rows($sqlhomebanner)){
            $sqlhomebanner = mysqli_query($con, "SELECT wb_img FROM `web_banner` WHERE status = 1 ORDER BY wb_order ASC, id ASC LIMIT 1");
        }
        if(mysqli_num_rows($sqlhomebanner)){
            $rwhomebanner = mysqli_fetch_assoc($sqlhomebanner);
            if(!empty($rwhomebanner['wb_img'])){
                $homevideo = $rwhomebanner['wb_img'];
            }
        }
        ?>
        <video class="video1" autoplay muted loop playsinline id="video-bg" preload="auto" poster="assets/images/rooms/premium-rooms--Room.jpg">
            <source src="<?=$homevideo;?>" type="video/mp4">
        </video>
    </div>

    <!-- Banner Container -->
    <div class="banner-container">
        <div class="container">
            <div class="content">
                <!-- Main Bravura Heading -->
                <h1 data-animate="fadeInUp">
                    Looking for Room Booking?
                    <span>BOOK YOUR ROOM<br>ONLINE HERE!</span>
                </h1>

                <!-- Mobile Only Book Button -->
                <div class="only_mob">
                    <div class="banner_btn">
                        <a href="booking.php">Book Now</a>
                    </div>
                </div>

                <!-- Sleek Minimal Line-Based Booking Form  -->
                <div class="banner-form Chcek_Now" data-animate="fadeInUp">
                    <form action="booking.php" method="GET" class="form" id="bravuraBookingForm">
                        <div class="flex form-line-row">
                            <!-- Select Room  -->
                            <div class="col col1">
                                <div class="form-group">
                                    <div class="dropdown room-dropdown" id="roomDropdown">
                                        <input type="hidden" name="room" id="hdnRoomType" value="luxury-delux-rooms">
                                        <div class="selected" id="roomSelectedText">Select Room</div>
                                        <div class="icondoro">
                                            <i class="bi bi-chevron-down"></i>
                                        </div>
                                        <ul class="dropdown-options" id="roomDropdownOptions">
                                            <li data-value="luxury-delux-rooms" class="current">
                                                <label>Luxury Delux Rooms</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Check In (Column 2) -->
                            <div class="col col2">
                                <div class="form-group line-date-group">
                                    <input type="text" name="check_in" id="txtCheckIn" class="form-control checin" value="Check In" readonly>
                                    <div class="icon icondoro">
                                        <i class="bi bi-calendar4-event"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Check Out (Column 3) -->
                            <div class="col col3">
                                <div class="form-group line-date-group">
                                    <input type="text" name="check_out" id="txtCheckOut" class="form-control checout" value="Check Out" readonly>
                                    <div class="icon icondoro">
                                        <i class="bi bi-calendar-check"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Book Now (Column 4 - Gold Text Link) -->
                            <div class="col col4">
                                <div class="btn-form">
                                    <button type="submit" class="btn-book-now-gold">
                                        BOOK NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- About Us Section -->
    <section class="about-us-section bg-white">
        <div class="container">
            <div class="row align-items-center " data-animate="fadeInUp" data-delay="0.2">
                <div class="col-lg-6">
                    <div class="about-us-image">
                        <img src="assets/images/rooms/doab villas.png" alt="Doab Vilas" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-us-content">
                        <span class="section-subtitle">Welcome to</span>
                        <h2 class="section-title">ABOUT US</h2>
                        <?php
                        $abouttext = '';
                        $sqlabout = mysqli_query($con, "SELECT sdesc FROM category WHERE id = 76");
                        if(mysqli_num_rows($sqlabout)){
                            $rwabout = mysqli_fetch_assoc($sqlabout);
                            $abouttext = trim($rwabout['sdesc']);
                        }
                        if($abouttext !== ''){
                            foreach(preg_split('/\r?\n\s*\r?\n/', $abouttext) as $aboutpara){
                                if(trim($aboutpara) !== ''){
                        ?>
                        <p class="about-us-text"><?= nl2br(trim($aboutpara)) ?></p>
                        <?php
                                }
                            }
                        }else ?>
                        <a href="about.php" class="about-us-btn">
                            READ MORE <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Rooms & Suites Section -->
    <section id="features" class="rooms-suites-section">
        <div class="container">
            <div class="section-header" data-animate="fadeInUp">
                <span class="section-subtitle">Exclusive</span>
                <h2 class="section-title section-title-responsive">ROOMS & SUITES</h2>
            </div>

            <div class="row g-4" data-animate="fadeInUp" data-delay="0.2">

                <?php
                $sqlrooms = mysqli_query($con,"SELECT * FROM `rooms` WHERE `status` = 1 ORDER BY `ordering` ASC, `id` DESC"
                );

                if(mysqli_num_rows($sqlrooms)){
                    while($room = mysqli_fetch_assoc($sqlrooms)){
                ?>

                <div class="col-lg-6">
                    <a href="" class="wedding-grid-card">

                        <div class="wedding-grid-img">
                            <img
                                src="<?=$path.$room['file'];?>"
                                alt="<?=htmlspecialchars($room['title']);?>"
                                class="img-fluid"
                            >
                        </div>

                        <div class="wedding-grid-content">

                            <h3 class="wedding-grid-title">
                                <?=htmlspecialchars($room['title']);?>
                            </h3>

                            <p class="wedding-grid-text">
                                <?=htmlspecialchars($room['description']);?>
                            </p>

                        </div>

                    </a>
                </div>

                <?php
                    }
                }
                ?>

            </div>
        </div>
    </section>


<!-- Weddings & Events Section -->
    <section class="weddings-events-section bg-white">
        <div class="container">
            <div class="section-header" data-animate="fadeInUp">
                <span class="section-subtitle">Events</span>
                <h2 class="section-title section-title-responsive">START PLANNING</h2>
            </div>
            
            <div class="row g-4" data-animate="fadeInUp" data-delay="0.2">

                <?php
                $sqlevents = mysqli_query( $con, "SELECT * FROM `events` WHERE `status` = 1 ORDER BY `ordering` ASC, `id` DESC"
                );

                if(mysqli_num_rows($sqlevents)){
                    while($event = mysqli_fetch_assoc($sqlevents)){
                ?>

                <div class="col-lg-6">
                    <a href="" class="wedding-grid-card">

                        <div class="wedding-grid-img">
                            <img 
                                src="<?=$path.$event['file'];?>" 
                                alt="<?=htmlspecialchars($event['title']);?>" 
                                class="img-fluid"
                                loading="lazy"
                            >
                        </div>

                        <div class="wedding-grid-content">

                            <h3 class="wedding-grid-title">
                                <?=htmlspecialchars($event['title']);?>
                            </h3>

                            <p class="wedding-grid-text">
                                <?=htmlspecialchars($event['description']);?>
                            </p>

                        </div>

                    </a>
                </div>

                <?php
                    }
                }
                ?>

            </div>
        </div>
    </section>


<!-- Discover Section with YouTube Video -->
<section class="discover-section bg-white">
    <div class="container">
        <div class="section-header" data-animate="fadeInUp">
            <span class="section-subtitle">Discover</span>
            <h2 class="section-title section-title-responsive">LUXURY RESORTS & CLUBS</h2>
        </div>
        
        <div class="row align-items-center g-5" data-animate="fadeInUp" data-delay="0.2">
            
            <div class="col-lg-6">
                <div class="discover-video">
                    <?php
                    $discoveriframe = '';

                    $sqliframe = mysqli_query($con, "SELECT iframe FROM category WHERE id = 76");

                    if(mysqli_num_rows($sqliframe)){
                        $rwiframe = mysqli_fetch_assoc($sqliframe);
                        $discoveriframe = trim($rwiframe['iframe']);
                    }
                    ?>

                    <iframe 
                        src="<?=htmlspecialchars($discoveriframe);?>" 
                        title="Doab Vilas Resort Video"
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                </div>
            </div>


            <div class="col-lg-6">
                <div class="discover-content">
                    <h3 class="discover-heading">FACILITIES AT DOAB VILAS</h3>
                    <p class="discover-text">
    
                        <?php
                        $discovertext = '';
                        $sqldiscover = mysqli_query($con, "SELECT sdesc FROM category WHERE id = 76");

                        if(mysqli_num_rows($sqldiscover)){
                            $rwdiscover = mysqli_fetch_assoc($sqldiscover);
                            $discovertext = trim($rwdiscover['sdesc']);
                        }

                        if($discovertext !== ''){
                            echo nl2br($discovertext);
                        }
                        ?>
                    </p>

                    <a href="about.php" class="discover-link">
                        EXPLORE MORE <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

    <!-- Diamond Hall Section -->
        <?php
        $sqlhall = mysqli_query(
            $con,
            "SELECT * FROM `halls` WHERE `status` = 1 ORDER BY `ordering` ASC, `id` DESC LIMIT 1"
        );

        if(mysqli_num_rows($sqlhall)){
            $rwhall = mysqli_fetch_assoc($sqlhall);

            $hallTitle = htmlspecialchars($rwhall['title'], ENT_QUOTES, 'UTF-8');
            $hallSubtitle = htmlspecialchars($rwhall['subtitle'], ENT_QUOTES, 'UTF-8');
            $hallDescription = nl2br(htmlspecialchars($rwhall['description'], ENT_QUOTES, 'UTF-8'));
            $hallImage = htmlspecialchars($rwhall['file'], ENT_QUOTES, 'UTF-8');
        ?>

        <section class="discover-section bg-white">
            <div class="container">
                <div class="row align-items-center" data-animate="fadeInUp" data-delay="0.2">

                    <div class="col-lg-6">
                        <div class="discover-content">

                            <span class="section-subtitle">
                                <?= $hallSubtitle; ?>
                            </span>

                            <h3 class="discover-heading">
                                <?= $hallTitle; ?>
                            </h3>

                            <p class="discover-text">
                                <strong><?= $hallTitle; ?></strong>
                                <?= $hallDescription; ?>
                            </p>

                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="discover-image">
                            <img 
                                src="<?= $path . $hallImage; ?>" 
                                alt="<?= $hallTitle; ?>" 
                                class="img-fluid" 
                                loading="lazy"
                            >
                        </div>
                    </div>

                </div>
            </div>
        </section>

    <?php } ?>


            <?php
            $sqlhalls = mysqli_query(
                $con,
                "SELECT * FROM `halls`
                WHERE `status` = 1
                ORDER BY `ordering` ASC, `id` DESC"
            );

            $hallIndex = 0;

            if(mysqli_num_rows($sqlhalls)){
                while($rwhall = mysqli_fetch_assoc($sqlhalls)){

                    $hallTitle = htmlspecialchars(
                        $rwhall['title'],
                        ENT_QUOTES,
                        'UTF-8'
                    );

                    $hallSubtitle = htmlspecialchars(
                        $rwhall['subtitle'],
                        ENT_QUOTES,
                        'UTF-8'
                    );

                    $hallDescription = nl2br(
                        htmlspecialchars(
                            $rwhall['description'],
                            ENT_QUOTES,
                            'UTF-8'
                        )
                    );

                    $hallImage = htmlspecialchars(
                        $rwhall['file'],
                        ENT_QUOTES,
                        'UTF-8'
                    );

                    /*
                    * Alternate layout:
                    * 0 = image left, content right
                    * 1 = content left, image right
                    */
                    $imageLeft = ($hallIndex % 2 == 0);

                    /*
                    * Alternate background:
                    * Even = ivory
                    * Odd = white
                    */
                    $background = ($hallIndex % 2 == 0)
                        ? 'bg-ivory'
                        : 'bg-white';
            ?>

            <section class="discover-section <?= $background; ?>">
                <div class="container">
                    <div class="row align-items-center"
                        data-animate="fadeInUp"
                        data-delay="0.2">

                        <?php if($imageLeft){ ?>

                            <!-- Image Left -->
                            <div class="col-lg-6">
                                <div class="discover-image">
                                    <img
                                        src="<?= $path . $hallImage; ?>"
                                        alt="<?= $hallTitle; ?>"
                                        class="img-fluid"
                                        loading="lazy"
                                    >
                                </div>
                            </div>

                            <!-- Content Right -->
                            <div class="col-lg-6">
                                <div class="discover-content">

                                    <span class="section-subtitle">
                                        <?= $hallSubtitle; ?>
                                    </span>

                                    <h3 class="discover-heading">
                                        <?= $hallTitle; ?>
                                    </h3>

                                    <p class="discover-text">
                                        <strong><?= $hallTitle; ?></strong>
                                        <?= $hallDescription; ?>
                                    </p>

                                </div>
                            </div>

                        <?php }else{ ?>

                            <!-- Content Left -->
                            <div class="col-lg-6">
                                <div class="discover-content">

                                    <span class="section-subtitle">
                                        <?= $hallSubtitle; ?>
                                    </span>

                                    <h3 class="discover-heading">
                                        <?= $hallTitle; ?>
                                    </h3>

                                    <p class="discover-text">
                                        <strong><?= $hallTitle; ?></strong>
                                        <?= $hallDescription; ?>
                                    </p>

                                </div>
                            </div>

                            <!-- Image Right -->
                            <div class="col-lg-6">
                                <div class="discover-image">
                                    <img
                                        src="<?= $path . $hallImage; ?>"
                                        alt="<?= $hallTitle; ?>"
                                        class="img-fluid"
                                        loading="lazy"
                                    >
                                </div>
                            </div>

                        <?php } ?>

                    </div>
                </div>
            </section>

            <?php
                    $hallIndex++;
                }
            }
            ?>


<!-- Bars and Restaurant Section -->
<?php
$sqlDining = mysqli_query(
    $con,
    "SELECT c_name, c_desc, featured_img FROM `category` WHERE `id` = 78 LIMIT 1"
);

if(mysqli_num_rows($sqlDining)){
    $rwDining = mysqli_fetch_assoc($sqlDining);

    $diningTitle = htmlspecialchars(
        $rwDining['c_name'],
        ENT_QUOTES,
        'UTF-8'
    );

    $diningDescription = nl2br(
        htmlspecialchars(
            $rwDining['c_desc'],
            ENT_QUOTES,
            'UTF-8'
        )
    );

    $diningImage = htmlspecialchars(
        $rwDining['featured_img'],
        ENT_QUOTES,
        'UTF-8'
    );
?>

<!-- Bars and Restaurant Section -->
<section class="discover-section bg-ivory">
    <div class="container">

        <div class="section-header" data-animate="fadeInUp">
            <span class="section-subtitle">Dining</span>

            <h2 class="section-title section-title-responsive">
                <?= $diningTitle; ?>
            </h2>
        </div>

        <div class="row align-items-center g-5"
             data-animate="fadeInUp"
             data-delay="0.2">

            <div class="col-lg-6">
                <div class="discover-content">

                    <p class="discover-text">
                        <?= $diningDescription; ?>
                    </p>

                    <a href="dining.php" class="discover-link">
                        EXPLORE MORE
                        <i class="bi bi-arrow-right"></i>
                    </a>

                </div>
            </div>

            <div class="col-lg-6">
                <div class="discover-image">
                    <img
                        src="<?= $path . $diningImage; ?>"
                        alt="<?= $diningTitle; ?>"
                        class="img-fluid"
                        loading="lazy"
                    >
                </div>
            </div>

        </div>
    </div>
</section>

<?php } ?>


<!-- Our Staff Section -->
<?php
$sqlStaff = mysqli_query(
    $con,
    "SELECT c_name, c_desc, featured_img
     FROM `category`
     WHERE `id` = 79
     LIMIT 1"
);

if(mysqli_num_rows($sqlStaff)){
    $rwStaff = mysqli_fetch_assoc($sqlStaff);

    $staffTitle = htmlspecialchars(
        $rwStaff['c_name'],
        ENT_QUOTES,
        'UTF-8'
    );

    $staffDescription = nl2br(
        htmlspecialchars(
            $rwStaff['c_desc'],
            ENT_QUOTES,
            'UTF-8'
        )
    );

    $staffImage = htmlspecialchars(
        $rwStaff['featured_img'],
        ENT_QUOTES,
        'UTF-8'
    );
?>

<!-- Our Staff Section -->
<section class="staff-section bg-ivory">
    <div class="container-fluid px-0">

        <div class="section-header text-center pt-5 pb-4"
             data-animate="fadeInUp">

            <span class="section-subtitle">
                Dedicated Team
            </span>

            <h2 class="section-title">
                <?= $staffTitle; ?>
            </h2>

            <p class="section-desc mx-auto section-desc-center">
                <?= $staffDescription; ?>
            </p>

        </div>

        <div class="staff-image-wrapper"
             data-animate="fadeInUp"
             data-delay="0.2">

            <img
                src="<?= $path . $staffImage; ?>"
                alt="<?= $staffTitle; ?>"
                class="img-fluid w-100"
                loading="lazy"
            >

        </div>

    </div>
</section>

<?php } ?>


<!-- Night View Banner Section -->
<?php
$sqlNight = mysqli_query(
    $con,
    "SELECT c_name, c_desc, featured_img
     FROM `category`
     WHERE `id` = 80
     LIMIT 1"
);

if(mysqli_num_rows($sqlNight)){
    $rwNight = mysqli_fetch_assoc($sqlNight);

    $nightTitle = htmlspecialchars(
        $rwNight['c_name'],
        ENT_QUOTES,
        'UTF-8'
    );

    $nightDescription = nl2br(
        htmlspecialchars(
            $rwNight['c_desc'],
            ENT_QUOTES,
            'UTF-8'
        )
    );

    $nightImage = htmlspecialchars(
        $rwNight['featured_img'],
        ENT_QUOTES,
        'UTF-8'
    );
?>

<!-- Night View Banner Section -->
<section class="night-banner-section pt-100">
    <div class="container">

        <div class="section-header" data-animate="fadeInUp">

            <span class="section-subtitle">
                Resort Life
            </span>

            <h2 class="section-title">
                <?= $nightTitle; ?>
            </h2>

            <p class="section-desc">
                <?= $nightDescription; ?>
            </p>

        </div>

    </div>

    <div class="night-banner-image"
         data-animate="fadeInUp"
         data-delay="0.2">

        <img
            src="<?= $path . $nightImage; ?>"
            alt="<?= $nightTitle; ?>"
            class="img-fluid"
            loading="lazy"
        >

    </div>
</section>

<?php } ?>


<!-- Testimonial Section -->
<?php
$testimonialQuery = mysqli_query(
    $con,
    "SELECT * FROM testimonials ORDER BY `order` ASC, id DESC"
);
?>

<section class="testimonial-section bg-white">
    <div class="container">

        <div class="section-header" data-animate="fadeInUp">
            <span class="section-subtitle">Testimonials</span>
            <h2 class="section-title">WHAT OUR GUESTS SAY</h2>
        </div>

        <div class="row g-4" data-animate="fadeInUp" data-delay="0.2">

            <?php if ($testimonialQuery && mysqli_num_rows($testimonialQuery) > 0) { ?>

                <?php while ($testimonial = mysqli_fetch_assoc($testimonialQuery)) { ?>

                    <div class="col-lg-4">

                        <div class="testimonial-card">

                            <!-- Rating -->
                            <div class="testimonial-rating">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>

                            <!-- Description -->
                            <p class="testimonial-text">
                                "<?php echo strip_tags($testimonial['desc']); ?>"
                            </p>

                            <!-- Author -->
                            <div class="testimonial-author">

                                <?php if (!empty($testimonial['file'])) { ?>

                                    <img
                                        src="<?php echo $path . $testimonial['file']; ?>"
                                        alt="<?php echo htmlspecialchars($testimonial['title']); ?>"
                                    >

                                <?php } ?>

                                <div class="testimonial-author-info">

                                    <!-- Title -->
                                    <h4>
                                        <?php echo htmlspecialchars($testimonial['title']); ?>
                                    </h4>

                                    <!-- Subtitle -->
                                    <span>
                                        <?php echo htmlspecialchars($testimonial['subtitle']); ?>
                                    </span>

                                </div>

                            </div>

                        </div>

                    </div>

                <?php } ?>

            <?php } ?>

        </div>

    </div>
</section>


<!-- Membership Plans Section -->
<section class="membership-section bg-light-gray">
    <div class="container">
        <div class="membership-wrapper" data-animate="fadeInUp">
            <div class="membership-content">
                <p class="membership-text">Equiry Now about the Doab Vilas </p>
                <p class="membership-note note-text">Note: 24/7 Service Available</p>
            </div>
            <div class="membership-buttons">
                <a href="booking.php" class="btn btn-gold membership-btn">EQUIRY NOW</a>
            </div>
        </div>
    </div>
</section>


<?php require_once 'includes/whatsapp-button.php'; ?>
<?php require_once 'includes/footer.php'; ?>
