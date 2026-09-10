<?php 
$pageTitle = 'Home';
require_once 'includes/header.php'; 
require_once 'includes/navbar.php'; 
?>

<!-- Hero Section -->
<section class="hero-section" style="background-image: url('assets/images/hero/hero-main.jpg');">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="hero-content">
                    <span class="hero-subtitle">Welcome to</span>
                    <h1 class="hero-title">DOAB VILAS</h1>
                    <p class="hero-text">
                        Experience unparalleled luxury and timeless elegance at our 
                        premium destination. Where Indian hospitality meets modern sophistication.
                    </p>
                    <div class="hero-buttons">
                        <a href="booking.php" class="btn btn-gold">Book Your Stay</a>
                        <a href="gallery.php" class="btn btn-outline-white">Explore Property</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-scroll">
        <a href="#features" class="scroll-indicator">
            <span>Scroll</span>
            <div class="scroll-line"></div>
        </a>
    </div>
</section>

<!-- Features Section -->
<section id="features" class="features-section section-padding">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Why Choose Us</span>
            <h2 class="section-title">Experience Excellence</h2>
            <p class="section-text">
                Discover what makes Doab Vilas a preferred destination for discerning travelers.
            </p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-house-door"></i>
                    </div>
                    <h4>Luxury Rooms</h4>
                    <p>Elegantly appointed rooms with modern amenities and stunning views</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-gem"></i>
                    </div>
                    <h4>Grand Weddings</h4>
                    <p>Magnificent venues for your dream celebration</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-cup-hot"></i>
                    </div>
                    <h4>Fine Dining</h4>
                    <p>Exquisite culinary experiences crafted by expert chefs</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-heart-pulse"></i>
                    </div>
                    <h4>Wellness</h4>
                    <p>Rejuvenate your body and soul at our spa</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Preview Section -->
<section class="section-padding">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="about-image-wrapper">
                    <img src="assets/images/hero/about-preview.jpg" alt="Doab Vilas Property" loading="lazy">
                    <div class="about-image-accent"></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <span class="section-subtitle">About Us</span>
                    <h2 class="section-title">A Legacy of Hospitality</h2>
                    <p>
                        Nestled in the heart of the city, Doab Vilas stands as a beacon 
                        of luxury and refined taste. Our heritage of warm hospitality spans 
                        decades, creating unforgettable experiences for every guest.
                    </p>
                    <p>
                        From our meticulously designed rooms to our world-class dining and 
                        event spaces, every detail has been thoughtfully curated to offer 
                        you an experience beyond compare.
                    </p>
                    <a href="about.php" class="btn btn-outline-gold mt-3">Discover Our Story</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Rooms Preview Section -->
<section class="section-padding" style="background-color: var(--dv-ivory);">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Accommodations</span>
            <h2 class="section-title">Luxury Rooms & Suites</h2>
            <p class="section-text">
                Discover our collection of elegantly designed rooms and suites.
            </p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="room-card">
                    <div class="room-image">
                        <img src="assets/images/rooms/deluxe-room.jpg" alt="Deluxe Room" loading="lazy">
                        <span class="room-price">From ₹8,999/night</span>
                    </div>
                    <div class="room-info">
                        <h4>Deluxe Room</h4>
                        <p>Spacious rooms with modern amenities and city views</p>
                        <a href="rooms.php" class="btn btn-outline-gold">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="room-card">
                    <div class="room-image">
                        <img src="assets/images/suites/premium-suite.jpg" alt="Premium Suite" loading="lazy">
                        <span class="room-price">From ₹14,999/night</span>
                    </div>
                    <div class="room-info">
                        <h4>Premium Suite</h4>
                        <p>Expansive suites with separate living area and luxury bath</p>
                        <a href="suites.php" class="btn btn-outline-gold">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="room-card">
                    <div class="room-image">
                        <img src="assets/images/suites/presidential-suite.jpg" alt="Presidential Suite" loading="lazy">
                        <span class="room-price">From ₹29,999/night</span>
                    </div>
                    <div class="room-info">
                        <h4>Presidential Suite</h4>
                        <p>The pinnacle of luxury with panoramic views and private butler</p>
                        <a href="suites.php" class="btn btn-outline-gold">View Details</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <a href="rooms.php" class="btn btn-gold">View All Rooms</a>
        </div>
    </div>
</section>

<!-- Weddings Preview Section -->
<section class="section-padding">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Celebrations</span>
            <h2 class="section-title">Weddings & Events</h2>
            <p class="section-text">
                Create timeless memories at our exquisite venues.
            </p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <a href="diamond.php" class="venue-card">
                    <img src="assets/images/weddings/diamond-hall.jpg" alt="Diamond Hall" loading="lazy">
                    <div class="venue-overlay">
                        <h4>Diamond Hall</h4>
                        <p>Grand ballroom for magnificent celebrations</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="jashan-party-lawn.php" class="venue-card">
                    <img src="assets/images/weddings/jashan-lawn.jpg" alt="Jashan Party Lawn" loading="lazy">
                    <div class="venue-overlay">
                        <h4>Jashan Party Lawn</h4>
                        <p>Expansive outdoor space for lavish events</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="aquarius-pool.php" class="venue-card">
                    <img src="assets/images/weddings/aquarius-pool.jpg" alt="Aquarius Pool" loading="lazy">
                    <div class="venue-overlay">
                        <h4>Aquarius Pool</h4>
                        <p>Stunning poolside venue for cocktail events</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="sapphire.php" class="venue-card">
                    <img src="assets/images/weddings/sapphire.jpg" alt="Sapphire" loading="lazy">
                    <div class="venue-overlay">
                        <h4>Sapphire</h4>
                        <p>Intimate venue for exclusive gatherings</p>
                    </div>
                </a>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <a href="weddings.php" class="btn btn-gold">Explore Venues</a>
        </div>
    </div>
</section>

<!-- Offers Section -->
<section class="section-padding" style="background-color: var(--dv-ivory);">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Special</span>
            <h2 class="section-title">Exclusive Offers</h2>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="offer-card">
                    <span class="offer-badge">Limited Time</span>
                    <h4>Honeymoon Package</h4>
                    <p>Romantic getaway with complimentary spa and candlelight dinner</p>
                    <span class="offer-price">Starting ₹24,999</span>
                    <a href="offers.php" class="btn btn-outline-gold">View Offer</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="offer-card">
                    <span class="offer-badge">Weekend Special</span>
                    <h4>Weekend Retreat</h4>
                    <p>2 nights stay with breakfast and airport transfers included</p>
                    <span class="offer-price">Starting ₹18,999</span>
                    <a href="offers.php" class="btn btn-outline-gold">View Offer</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <h2>Ready to Experience Luxury?</h2>
        <p>Book your stay or enquire about our venues for your next celebration</p>
        <div class="d-flex gap-3 justify-content-center flex-wrap">
            <a href="booking.php" class="btn btn-gold">Book Now</a>
            <a href="contact.php" class="btn btn-outline-white">Contact Us</a>
        </div>
    </div>
</section>

<?php require_once 'includes/whatsapp-button.php'; ?>
<?php require_once 'includes/footer.php'; ?>
