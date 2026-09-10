<?php 
$pageTitle = 'Home';
require_once 'includes/header.php'; 
require_once 'includes/navbar.php'; 
?>

<!-- Hero Section with Animation -->
<section class="hero-section hero-animated" style="background-image: url('https://images.unsplash.com/photo-1566073771259-6a8506099945?w=1920&q=80');">
    <div class="hero-overlay"></div>
    <div class="hero-particles" id="heroParticles"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto text-center">
                <div class="hero-content">
                    <div class="hero-logo-wrapper mb-4" data-animate="fadeInDown">
                        <img src="assets/images/logo/doab-villas-logo.avif" 
                             alt="Doab Vilas Logo" class="hero-logo">
                    </div>
                    <span class="hero-subtitle" data-animate="fadeInUp" data-delay="0.2">Welcome to</span>
                    <h1 class="hero-title" data-animate="fadeInUp" data-delay="0.4">
                        <span class="hero-title-line">DOAB</span>
                        <span class="hero-title-line hero-title-accent">VILAS</span>
                    </h1>
                    <p class="hero-text" data-animate="fadeInUp" data-delay="0.6">
                        A Premium Luxury Destination Where Indian Hospitality Meets Modern Sophistication
                    </p>
                    <div class="hero-buttons" data-animate="fadeInUp" data-delay="0.8">
                        <a href="booking.php" class="btn btn-gold px-4 py-2">
                            <i class="bi bi-calendar-check me-2"></i>Book Your Stay
                        </a>
                        <a href="gallery.php" class="btn btn-outline-white px-4 py-2">
                            <i class="bi bi-play-circle me-2"></i>Virtual Tour
                        </a>
                    </div>
                    <div class="hero-stats" data-animate="fadeInUp" data-delay="1">
                        <div class="hero-stat">
                            <span class="hero-stat-number" data-count="500">0</span>+
                            <span class="hero-stat-label">Happy Guests</span>
                        </div>
                        <div class="hero-stat-divider"></div>
                        <div class="hero-stat">
                            <span class="hero-stat-number" data-count="50">0</span>+
                            <span class="hero-stat-label">Luxury Rooms</span>
                        </div>
                        <div class="hero-stat-divider"></div>
                        <div class="hero-stat">
                            <span class="hero-stat-number" data-count="15">0</span>+
                            <span class="hero-stat-label">Years Legacy</span>
                        </div>
                    </div>
                    <div class="hero-scroll">
                        <a href="#features" class="scroll-indicator">
                            <span>Scroll to Explore</span>
                            <div class="scroll-line"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
                            <img src="assets/images/rooms/Premium-Junior-Suites-rooms--Room.jpg" alt="Premium Junior Suite Rooms">
                        </div>
                        <h4 class="room-carousel-title">Premium Junior Suite Rooms</h4>
                    </a>
                </div>
                <div class="room-carousel-item">
                    <a href="room-detail.php">
                        <div class="room-carousel-img">
                            <img src="assets/images/rooms/Premium-Suites--Room.jpg" alt="Premium Suites">
                        </div>
                        <h4 class="room-carousel-title">Premium Suites</h4>
                    </a>
                </div>
                <div class="room-carousel-item">
                    <a href="room-detail.php">
                        <div class="room-carousel-img">
                            <img src="assets/images/rooms/premium-rooms--Room.jpg" alt="Premium Rooms">
                        </div>
                        <h4 class="room-carousel-title">Premium Rooms</h4>
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
                            <img src="assets/images/weddings/festival-events.jpg" alt="Wedding Venues / Lawn">
                        </div>
                        <div class="wedding-carousel-content">
                            <h3 class="wedding-carousel-title">Wedding Venues / Lawn</h3>
                            <p class="wedding-carousel-text">We at Doab Vilas consider each and every event of yours as one of the most important events for us.</p>
                            <span class="wedding-carousel-link">EXPLORE MORE <i class="bi bi-arrow-right"></i></span>
                        </div>
                    </a>
                </div>
                <div class="wedding-carousel-item">
                    <a href="jashan-party-lawn.php">
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
                    <a href="diamond.php">
                        <div class="wedding-carousel-img">
                            <img src="assets/images/experiences/corporate-events-and-meetings.jpg" alt="Corporate Events">
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

<!-- Exclusive Offers Section -->
<section class="exclusive-offers-section section-padding" style="background-color: var(--dv-white);">
    <div class="container">
        <div class="section-header" data-animate="fadeInUp">
            <span class="section-subtitle">Discover</span>
            <h2 class="section-title">EXCLUSIVE OFFERS</h2>
        </div>
        
        <div class="row g-3" data-animate="fadeInUp" data-delay="0.2">
            <div class="col-lg-4">
                <div class="offer-card-exclusive">
                    <a href="offers.php">
                        <div class="offer-card-img">
                            <img src="assets/images/experiences/best-hotels-in-meeru-offer.jpg" alt="Best Hotels in Meerut">
                        </div>
                        <h4 class="offer-card-title">Best Hotels in Meerut</h4>
                    </a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="offer-card-exclusive">
                    <a href="offers.php">
                        <div class="offer-card-img">
                            <img src="assets/images/experiences/feast-on-flavors-this-holi-at-frigo-s-gourmet-offer.jpg" alt="Feast on Flavors this Holi">
                        </div>
                        <h4 class="offer-card-title">Feast on Flavors this Holi at Frigo's Gourmet.</h4>
                    </a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="offer-card-exclusive">
                    <a href="offers.php">
                        <div class="offer-card-img">
                            <img src="assets/images/experiences/images (2).jfif" alt="Special Offer">
                        </div>
                        <h4 class="offer-card-title">Doab Vilas Special Weekend Getaway</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Rooms Preview with Hover Effects -->
<section class="rooms-preview-section section-padding" style="background-color: var(--dv-ivory);">
    <div class="container">
        <div class="section-header" data-animate="fadeInUp">
            <span class="section-subtitle">Accommodations</span>
            <h2 class="section-title">Luxury Rooms & Suites</h2>
            <p class="section-text">
                Discover our collection of elegantly designed rooms and suites, each offering a unique blend of comfort and sophistication.
            </p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-animate="fadeInUp" data-delay="0.1">
                <div class="room-card room-card-premium">
                    <div class="room-image">
                        <img src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?w=600&q=80" alt="Deluxe Room" loading="lazy">
                        <div class="room-overlay">
                            <a href="rooms.php" class="btn btn-white">View Details</a>
                        </div>
                        <span class="room-price">From ₹8,999/night</span>
                        <span class="room-badge">Popular</span>
                    </div>
                    <div class="room-info">
                        <h4>Deluxe Room</h4>
                        <p>Spacious rooms with modern amenities and city views</p>
                        <div class="room-amenities">
                            <span><i class="bi bi-wifi"></i></span>
                            <span><i class="bi bi-tv"></i></span>
                            <span><i class="bi bi-snow"></i></span>
                            <span><i class="bi bi-cup-hot"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-animate="fadeInUp" data-delay="0.2">
                <div class="room-card room-card-premium">
                    <div class="room-image">
                        <img src="https://images.unsplash.com/photo-1590490360182-c33d57733427?w=600&q=80" alt="Premium Suite" loading="lazy">
                        <div class="room-overlay">
                            <a href="suites.php" class="btn btn-white">View Details</a>
                        </div>
                        <span class="room-price">From ₹14,999/night</span>
                        <span class="room-badge room-badge-luxury">Luxury</span>
                    </div>
                    <div class="room-info">
                        <h4>Premium Suite</h4>
                        <p>Expansive suites with separate living area and luxury bath</p>
                        <div class="room-amenities">
                            <span><i class="bi bi-wifi"></i></span>
                            <span><i class="bi bi-tv"></i></span>
                            <span><i class="bi bi-snow"></i></span>
                            <span><i class="bi bi-cup-hot"></i></span>
                            <span><i class="bi bi-water"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-animate="fadeInUp" data-delay="0.3">
                <div class="room-card room-card-premium">
                    <div class="room-image">
                        <img src="https://images.unsplash.com/photo-1578683010236-d716f9a3f461?w=600&q=80" alt="Presidential Suite" loading="lazy">
                        <div class="room-overlay">
                            <a href="suites.php" class="btn btn-white">View Details</a>
                        </div>
                        <span class="room-price">From ₹29,999/night</span>
                        <span class="room-badge room-badge-exclusive">Exclusive</span>
                    </div>
                    <div class="room-info">
                        <h4>Presidential Suite</h4>
                        <p>The pinnacle of luxury with panoramic views and private butler</p>
                        <div class="room-amenities">
                            <span><i class="bi bi-wifi"></i></span>
                            <span><i class="bi bi-tv"></i></span>
                            <span><i class="bi bi-snow"></i></span>
                            <span><i class="bi bi-cup-hot"></i></span>
                            <span><i class="bi bi-water"></i></span>
                            <span><i class="bi bi-person-check"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5" data-animate="fadeInUp">
            <a href="rooms.php" class="btn btn-gold btn-lg">
                View All Rooms <i class="bi bi-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- Weddings Preview with Elegant Cards -->
<section class="weddings-preview-section section-padding">
    <div class="container">
        <div class="section-header" data-animate="fadeInUp">
            <span class="section-subtitle">Celebrations</span>
            <h2 class="section-title">Weddings & Events</h2>
            <p class="section-text">
                Create timeless memories at our exquisite venues, perfect for weddings, receptions, and grand celebrations.
            </p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6" data-animate="fadeInUp" data-delay="0.1">
                <a href="diamond.php" class="venue-card venue-card-elegant">
                    <img src="https://images.unsplash.com/photo-1519167758481-83f550bb49b3?w=600&q=80" alt="Diamond Hall" loading="lazy">
                    <div class="venue-overlay">
                        <div class="venue-icon"><i class="bi bi-gem"></i></div>
                        <h4>Diamond Hall</h4>
                        <p>Grand ballroom for magnificent celebrations</p>
                        <span class="venue-capacity"><i class="bi bi-people"></i> Up to 1000 guests</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6" data-animate="fadeInUp" data-delay="0.2">
                <a href="jashan-party-lawn.php" class="venue-card venue-card-elegant">
                    <img src="https://images.unsplash.com/photo-1464366400600-7168b8af9bc3?w=600&q=80" alt="Jashan Party Lawn" loading="lazy">
                    <div class="venue-overlay">
                        <div class="venue-icon"><i class="bi bi-flower1"></i></div>
                        <h4>Jashan Party Lawn</h4>
                        <p>Expansive outdoor space for lavish events</p>
                        <span class="venue-capacity"><i class="bi bi-people"></i> Up to 1500 guests</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6" data-animate="fadeInUp" data-delay="0.3">
                <a href="aquarius-pool.php" class="venue-card venue-card-elegant">
                    <img src="https://images.unsplash.com/photo-1575429198097-0414ec08e8cd?w=600&q=80" alt="Aquarius Pool" loading="lazy">
                    <div class="venue-overlay">
                        <div class="venue-icon"><i class="bi bi-water"></i></div>
                        <h4>Aquarius Pool</h4>
                        <p>Stunning poolside venue for cocktail events</p>
                        <span class="venue-capacity"><i class="bi bi-people"></i> Up to 400 guests</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6" data-animate="fadeInUp" data-delay="0.4">
                <a href="sapphire.php" class="venue-card venue-card-elegant">
                    <img src="https://images.unsplash.com/photo-1478146059778-26028b07395a?w=600&q=80" alt="Sapphire" loading="lazy">
                    <div class="venue-overlay">
                        <div class="venue-icon"><i class="bi bi-star"></i></div>
                        <h4>Sapphire</h4>
                        <p>Intimate venue for exclusive gatherings</p>
                        <span class="venue-capacity"><i class="bi bi-people"></i> Up to 200 guests</span>
                    </div>
                </a>
            </div>
        </div>
        
        <div class="text-center mt-5" data-animate="fadeInUp">
            <a href="weddings.php" class="btn btn-gold btn-lg">
                Explore All Venues <i class="bi bi-arrow-right ms-2"></i>
            </a>
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
