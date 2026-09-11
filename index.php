<?php 
$pageTitle = 'Home';
require_once 'includes/header.php'; 
require_once 'includes/navbar.php'; 
?>

<?php 
$pageTitle = 'Home';
require_once 'includes/header.php'; 
require_once 'includes/navbar.php'; 
?>

<!-- Hero Video Banner Section (Exact Bravura Resort Style) -->
<div class="banner Home_banner">
    <!-- Background Video with Gradient Overlays -->
    <div class="bg overlay-top overlay-bottom">
        <video class="video1" autoplay muted loop playsinline id="video-bg" preload="auto" poster="assets/images/rooms/premium-rooms--Room.jpg">
            <source src="assets/videos/hero-video.mp4" type="video/mp4">
            <source src="https://bravuraresort.com/assets/videos/Reception-Video.mp4" type="video/mp4">
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

                <!-- Sleek Minimal Line-Based Booking Form (Exact Match to Image) -->
                <div class="banner-form Chcek_Now" data-animate="fadeInUp">
                    <form action="booking.php" method="GET" class="form" id="bravuraBookingForm">
                        <div class="flex form-line-row">
                            <!-- Select Room (Column 1) -->
                            <div class="col col1">
                                <div class="form-group">
                                    <div class="dropdown room-dropdown" id="roomDropdown">
                                        <input type="hidden" name="room" id="hdnRoomType" value="premium-rooms">
                                        <div class="selected" id="roomSelectedText">Select Room</div>
                                        <div class="icondoro">
                                            <i class="bi bi-chevron-down"></i>
                                        </div>
                                        <ul class="dropdown-options" id="roomDropdownOptions">
                                            <li data-value="premium-rooms" class="current">
                                                <label>Premium Rooms</label>
                                            </li>
                                            <li data-value="premium-executive-rooms">
                                                <label>Premium Executive Rooms</label>
                                            </li>
                                            <li data-value="Premium-Junior-Suites-rooms">
                                                <label>Premium Junior Suite Rooms</label>
                                            </li>
                                            <li data-value="Premium-Suites">
                                                <label>Premium Suites</label>
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

                <!-- 360 Tour Circular Badge (Exact Match to Image) -->
                <div class="banner_360" data-animate="fadeInRight">
                    <a href="gallery.php" title="360° Virtual Tour">
                        <span class="dot"></span>
                        <p>
                            360°
                            <span>Tour</span>
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Rooms & Suites Section -->
<section id="features" class="rooms-suites-section section-padding">
    <div class="container">
        <div class="section-header" data-animate="fadeInUp">
            <span class="section-subtitle">Exclusive</span>
            <h2 class="section-title">ROOMS & SUITES</h2>
        </div>
        
        <div class="rooms-carousel-wrapper" data-animate="fadeInUp" data-delay="0.2">
            <button class="rooms-carousel-prev" id="roomsPrev">
                <i class="bi bi-chevron-left"></i>
            </button>
            <div class="rooms-carousel" id="roomsCarousel">
                <div class="room-carousel-item">
                    <a href="room-detail.php">
                        <div class="room-carousel-img">
                            <img src="assets/images/rooms/room1.png" alt="Premium Junior Suite Rooms">
                        </div>
                        <h4 class="room-carousel-title">Premium Junior Suite Rooms</h4>
                    </a>
                </div>
                <div class="room-carousel-item">
                    <a href="room-detail.php">
                        <div class="room-carousel-img">
                            <img src="assets/images/rooms/room2.png" alt="Premium Suites">
                        </div>
                        <h4 class="room-carousel-title">Premium Suites</h4>
                    </a>
                </div>
                
            </div>
            <button class="rooms-carousel-next" id="roomsNext">
                <i class="bi bi-chevron-right"></i>
            </button>
        </div>
    </div>
</section>

<!-- Weddings & Events Section -->
<section class="weddings-events-section section-padding" style="background-color: var(--dv-white);">
    <div class="container">
        <div class="section-header" data-animate="fadeInUp">
            <span class="section-subtitle">Wedding & Events</span>
            <h2 class="section-title">START PLANNING</h2>
        </div>
        
        <div class="weddings-carousel-wrapper" data-animate="fadeInUp" data-delay="0.2">
            <div class="weddings-carousel" id="weddingsCarousel">
                <div class="wedding-carousel-item">
                    <a href="weddings.php">
                        <div class="wedding-carousel-img">
                            <img src="assets/images/weddings/weddings.jpg" alt="Wedding Venues / Lawn">
                        </div>
                        <div class="wedding-carousel-content">
                            <h3 class="wedding-carousel-title">Wedding Venues / Lawn</h3>
                            <p class="wedding-carousel-text">We at Doab Vilas consider each and every event of yours as one of the most important events for us.</p>
                            <span class="wedding-carousel-link">EXPLORE MORE <i class="bi bi-arrow-right"></i></span>
                        </div>
                    </a>
                </div>
                <div class="wedding-carousel-item">
                    <a href="festival-events.php">
                        <div class="wedding-carousel-img">
                            <img src="assets/images/weddings/festival-events.jpg" alt="Festival Events">
                        </div>
                        <div class="wedding-carousel-content">
                            <h3 class="wedding-carousel-title">Festival Events</h3>
                            <p class="wedding-carousel-text">Celebrate your special festivals with us in a grand way with our premium event spaces and services.</p>
                            <span class="wedding-carousel-link">EXPLORE MORE <i class="bi bi-arrow-right"></i></span>
                        </div>
                    </a>
                </div>
                <div class="wedding-carousel-item">
                    <a href="corporate-events-and-meetings.php">
                        <div class="wedding-carousel-img">
                            <img src="assets/images/weddings/corporate-events-and-meetings.jpg" alt="Corporate Events">
                        </div>
                        <div class="wedding-carousel-content">
                            <h3 class="wedding-carousel-title">Corporate Events</h3>
                            <p class="wedding-carousel-text">Professional spaces for your business meetings, conferences and corporate gatherings.</p>
                            <span class="wedding-carousel-link">EXPLORE MORE <i class="bi bi-arrow-right"></i></span>
                        </div>
                    </a>
                </div>
            </div>
            <button class="weddings-carousel-prev" id="weddingsPrev">
                <i class="bi bi-chevron-left"></i>
            </button>
            <button class="weddings-carousel-next" id="weddingsNext">
                <i class="bi bi-chevron-right"></i>
            </button>
        </div>
    </div>
</section>

<!-- Discover Section with YouTube Video -->
<section class="discover-section section-padding" style="background-color: var(--dv-white);">
    <div class="container">
        <div class="section-header" data-animate="fadeInUp">
            <span class="section-subtitle">Discover</span>
            <h2 class="section-title">LUXURY HOTELS IN MEERUT</h2>
        </div>
        
        <div class="row align-items-center g-5" data-animate="fadeInUp" data-delay="0.2">
            <div class="col-lg-6">
                <div class="discover-content">
                    <h3 class="discover-heading">FACILITIES AT DOAB VILAS</h3>
                    <p class="discover-text">
                        <strong>DOAB VILAS</strong> is an exclusive luxury hotel at Meerut, offering a vast range of facilities at one place. Experience the warmth of nature at Doab Vilas. You will be surrounded by the beauty &amp; grace of this resort, which is intelligently designed to revive you. At <strong>Doab Vilas</strong>, we offer you our world class hospitality services....
                    </p>
                    <a href="about.php" class="discover-link">
                        EXPLORE MORE <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="discover-video">
                    <iframe 
                        src="https://www.youtube.com/embed/umNVgILZh-0" 
                        title="Doab Vilas Resort Video"
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Diamond Hall Section -->
<section class="discover-section section-padding" style="background-color: var(--dv-ivory);">
    <div class="container">
        <div class="row align-items-center g-5" data-animate="fadeInUp" data-delay="0.2">
            <div class="col-lg-6">
                <div class="discover-content">
                    <h3 class="discover-heading">DIAMOND HALL</h3>
                    <p class="discover-text">
                        <strong>DIAMOND HALL</strong> at Doab Vilas is a grand ballroom designed for magnificent celebrations. With stunning interiors, state-of-the-art lighting, and spacious seating, it is the perfect venue for weddings, receptions, and grand events. Our dedicated team ensures every detail is taken care of to make your special day truly unforgettable.
                    </p>
                    <a href="diamond.php" class="discover-link">
                        EXPLORE MORE <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="discover-image">
                    <img src="assets/images/rooms/diamand hall.jpeg" alt="Diamond Hall" class="img-fluid" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Rooms Lobby Section -->
<section class="discover-section section-padding" style="background-color: var(--dv-white);">
    <div class="container">
        <div class="row align-items-center g-5" data-animate="fadeInUp" data-delay="0.2">
            <div class="col-lg-6">
                <div class="discover-image">
                    <img src="assets/images/rooms/rooms lobby.jpeg" alt="Rooms Lobby" class="img-fluid" loading="lazy">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="discover-content">
                    <h3 class="discover-heading">ROOMS LOBBY</h3>
                    <p class="discover-text">
                        <strong>ROOMS LOBBY</strong> at Doab Vilas is elegantly designed to welcome you with warmth and luxury. As you step in, you are greeted by stunning interiors, plush seating, and a sophisticated ambiance that sets the tone for your stay. Our lobby offers a perfect blend of comfort and style, making it an ideal space to relax and unwind.
                    </p>
                    <a href="rooms.php" class="discover-link">
                        EXPLORE MORE <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sapphire Hall Section -->
<section class="discover-section section-padding" style="background-color: var(--dv-ivory);">
    <div class="container">
        <div class="row align-items-center g-5" data-animate="fadeInUp" data-delay="0.2">
            <div class="col-lg-6">
                <div class="discover-content">
                    <h3 class="discover-heading">SAPPHIRE HALL</h3>
                    <p class="discover-text">
                        <strong>SAPPHIRE HALL</strong> at Doab Vilas is an intimate venue designed for exclusive gatherings. With elegant decor, modern amenities, and a cozy atmosphere, it is perfect for corporate meetings, private parties, and special celebrations. Our team ensures a seamless experience tailored to your needs.
                    </p>
                    <a href="sapphire.php" class="discover-link">
                        EXPLORE MORE <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="discover-image">
                    <img src="assets/images/rooms/Saphhire hall.jpeg" alt="Sapphire Hall" class="img-fluid" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Aquarius Pool Section -->
<section class="discover-section section-padding" style="background-color: var(--dv-white);">
    <div class="container">
        <div class="row align-items-center g-5" data-animate="fadeInUp" data-delay="0.2">
            <div class="col-lg-6">
                <div class="discover-image">
                    <img src="assets/images/rooms/Auirious pool.JPG" alt="Aquarius Pool" class="img-fluid" loading="lazy">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="discover-content">
                    <h3 class="discover-heading">AQUARIUS POOL</h3>
                    <p class="discover-text">
                        <strong>AQUARIUS POOL</strong> at Doab Vilas is a stunning poolside venue perfect for cocktail events, pool parties, and intimate celebrations. Surrounded by lush greenery and elegant ambiance, it offers a refreshing escape for your special occasions. Enjoy world-class hospitality by the poolside with your loved ones.
                    </p>
                    <a href="aquarius-pool.php" class="discover-link">
                        EXPLORE MORE <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Guest Comments Section -->
<section class="guest-comments-section section-padding" style="background-color: var(--dv-white);">
    <div class="container">
        <div class="section-header" data-animate="fadeInUp">
            <span class="section-subtitle">Happy Moments</span>
            <h2 class="section-title">GUEST COMMENTS</h2>
        </div>
        
        <div class="guest-comments-wrapper" data-animate="fadeInUp" data-delay="0.2">
            <div class="guest-comment-active" id="guestCommentActive">
                <div class="guest-quote">
                    <span class="quote-mark">"</span>
                    <p class="guest-quote-text" id="guestQuoteText">Good, Ek Andaz, Ek Awaaz, Ek Aghaz. Bravura Gold Resort.</p>
                </div>
                <h4 class="guest-name" id="guestName">Khayali</h4>
                <span class="guest-designation" id="guestDesignation">Comedian</span>
                <a href="gallery.php" class="guest-view-link">
                    VIEW COMMENT CARD <i class="bi bi-arrow-right"></i>
                </a>
            </div>
            
            <div class="guest-images-carousel">
                <div class="guest-images-track" id="guestImagesTrack">
                    <div class="guest-image-item active" data-index="0">
                        <img src="assets/images/experiences/Khayali-Guest.jpg" alt="Khayali">
                        <span class="guest-image-name">Khayali</span>
                    </div>
                    <div class="guest-image-item" data-index="1">
                        <img src="assets/images/experiences/Rajeev Shukla-Guest.jpg" alt="Rajeev Shukla">
                        <span class="guest-image-name">Rajeev Shukla</span>
                    </div>
                    <div class="guest-image-item" data-index="2">
                        <img src="assets/images/experiences/Mahima Chaudhary-Guest.jpg" alt="Mahima Chaudhary">
                        <span class="guest-image-name">Mahima Chaudhary</span>
                    </div>
                    <div class="guest-image-item" data-index="3">
                        <img src="assets/images/experiences/Mika Singh-Guest.jpg" alt="Mika Singh">
                        <span class="guest-image-name">Mika Singh</span>
                    </div>
                </div>
                <div class="guest-images-nav">
                    <button class="guest-nav-prev" id="guestPrev"><i class="bi bi-chevron-left"></i></button>
                    <button class="guest-nav-next" id="guestNext"><i class="bi bi-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Membership Plans Section -->
<section class="membership-section" style="background-color: #e9e9e9; padding: 40px 0;">
    <div class="container">
        <div class="membership-wrapper" data-animate="fadeInUp">
            <div class="membership-content">
                <h3 class="membership-title">Membership Plans</h3>
                <p class="membership-text">Join the Doab Vilas family today</p>
            </div>
            <div class="membership-buttons">
                <a href="booking.php" class="btn btn-gold membership-btn">JOIN NOW</a>
                <a href="#" class="btn btn-outline-gold membership-btn">LOGIN</a>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section
<section class="cta-section cta-animated">
    <div class="cta-bg-pattern"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8" data-animate="fadeInLeft">
                <h2 class="cta-title">Ready to Experience Luxury?</h2>
                <p class="cta-text">Book your stay or enquire about our venues for your next celebration. Our team is ready to make your experience unforgettable.</p>
            </div>
            <div class="col-lg-4 text-lg-end" data-animate="fadeInRight">
                <div class="cta-buttons">
                    <a href="booking.php" class="btn btn-gold btn-lg me-3">
                        <i class="bi bi-calendar-check me-2"></i>Book Now
                    </a>
                    <a href="contact.php" class="btn btn-outline-white btn-lg">
                        <i class="bi bi-telephone me-2"></i>Contact Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</section> -->

<?php require_once 'includes/whatsapp-button.php'; ?>
<?php require_once 'includes/footer.php'; ?>

<!-- Hero Animation Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animate hero elements on load
    const heroElements = document.querySelectorAll('[data-animate]');
    
    heroElements.forEach(el => {
        const delay = el.getAttribute('data-delay') || 0;
        setTimeout(() => {
            el.classList.add('animated');
        }, delay * 1000);
    });
    
    // Counter animation
    const counters = document.querySelectorAll('.hero-stat-number');
    counters.forEach(counter => {
        const target = parseInt(counter.getAttribute('data-count'));
        const duration = 2000;
        const step = target / (duration / 16);
        let current = 0;
        
        const updateCounter = () => {
            current += step;
            if (current < target) {
                counter.textContent = Math.floor(current);
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = target;
            }
        };
        
        // Start counter when visible
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    updateCounter();
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });
        
        observer.observe(counter);
    });
    
    // Parallax effect for hero
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        const hero = document.querySelector('.hero-section');
        if (hero) {
            hero.style.backgroundPositionY = scrolled * 0.5 + 'px';
        }
    });
});
</script>
