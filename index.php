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
                        <img src="https://static.wixstatic.com/media/3fe8cd_b9d2633ac9a64ea0a29c36e67a951f01~mv2.png/v1/fill/w_300,h_100,al_c,q_85,usm_0.66_1.00_0.01/3fe8cd_b9d2633ac9a64ea0a29c36e67a951f01~mv2.png" 
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
                        <a href="booking.php" class="btn btn-gold btn-lg px-5 py-3">
                            <i class="bi bi-calendar-check me-2"></i>Book Your Stay
                        </a>
                        <a href="gallery.php" class="btn btn-outline-white btn-lg px-5 py-3">
                            <i class="bi bi-play-circle me-2"></i>Virtual Tour
                        </a>
                    </div>
                    <div class="hero-stats mt-5" data-animate="fadeInUp" data-delay="1">
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
                </div>
            </div>
        </div>
    </div>
    <div class="hero-scroll">
        <a href="#features" class="scroll-indicator">
            <span>Scroll to Explore</span>
            <div class="scroll-line"></div>
        </a>
    </div>
</section>

<!-- Features Section with Parallax -->
<section id="features" class="features-section section-padding">
    <div class="container">
        <div class="section-header" data-animate="fadeInUp">
            <span class="section-subtitle">Why Choose Us</span>
            <h2 class="section-title">Experience Excellence at Doab Vilas</h2>
            <p class="section-text">
                Discover what makes us the preferred destination for discerning travelers seeking luxury and comfort.
            </p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6" data-animate="fadeInUp" data-delay="0.1">
                <div class="feature-card-image" style="background-image: url('https://images.unsplash.com/photo-1631049307264-da0ec9d70304?w=600&q=80');">
                    <div class="feature-card-overlay"></div>
                    <div class="feature-card-content">
                        <div class="feature-icon-small">
                            <i class="bi bi-house-door"></i>
                        </div>
                        <h4>Luxury Rooms</h4>
                        <p>Elegantly appointed rooms with modern amenities and stunning views</p>
                        <a href="rooms.php" class="feature-link">Explore Rooms <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-animate="fadeInUp" data-delay="0.2">
                <div class="feature-card-image" style="background-image: url('https://images.unsplash.com/photo-1519167758481-83f550bb49b3?w=600&q=80');">
                    <div class="feature-card-overlay"></div>
                    <div class="feature-card-content">
                        <div class="feature-icon-small">
                            <i class="bi bi-gem"></i>
                        </div>
                        <h4>Grand Weddings</h4>
                        <p>Magnificent venues for your dream celebration</p>
                        <a href="weddings.php" class="feature-link">View Venues <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-animate="fadeInUp" data-delay="0.3">
                <div class="feature-card-image" style="background-image: url('https://images.unsplash.com/photo-1414235077428-338989a2e8c0?w=600&q=80');">
                    <div class="feature-card-overlay"></div>
                    <div class="feature-card-content">
                        <div class="feature-icon-small">
                            <i class="bi bi-cup-hot"></i>
                        </div>
                        <h4>Fine Dining</h4>
                        <p>Exquisite culinary experiences crafted by expert chefs</p>
                        <a href="dining.php" class="feature-link">View Menu <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-animate="fadeInUp" data-delay="0.4">
                <div class="feature-card-image" style="background-image: url('https://images.unsplash.com/photo-1544161515-4ab6ce6db874?w=600&q=80');">
                    <div class="feature-card-overlay"></div>
                    <div class="feature-card-content">
                        <div class="feature-icon-small">
                            <i class="bi bi-heart-pulse"></i>
                        </div>
                        <h4>Wellness & Spa</h4>
                        <p>Rejuvenate your body and soul at our spa</p>
                        <a href="services.php" class="feature-link">Discover More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Preview with Parallax Image -->
<section class="about-preview-section section-padding">
    <div class="about-parallax-bg" style="background-image: url('https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?w=1920&q=80');"></div>
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-animate="fadeInLeft">
                <div class="about-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1582719508461-905c673771fd?w=800&q=80" alt="Doab Vilas Property" class="about-main-image">
                    <div class="about-image-accent"></div>
                    <div class="about-experience-badge">
                        <span class="experience-number">15+</span>
                        <span class="experience-text">Years of Excellence</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-animate="fadeInRight">
                <div class="about-content">
                    <span class="section-subtitle">Our Heritage</span>
                    <h2 class="section-title">A Legacy of Warm Hospitality</h2>
                    <p class="about-lead">
                        Nestled in the heart of the city, Doab Vilas stands as a beacon 
                        of luxury and refined taste. Our heritage of warm hospitality spans 
                        decades, creating unforgettable experiences for every guest.
                    </p>
                    <p>
                        From our meticulously designed rooms to our world-class dining and 
                        event spaces, every detail has been thoughtfully curated to offer 
                        you an experience beyond compare. We believe in blending traditional 
                        Indian warmth with modern sophistication.
                    </p>
                    <div class="about-features">
                        <div class="about-feature">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Premium Accommodations</span>
                        </div>
                        <div class="about-feature">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>World-Class Dining</span>
                        </div>
                        <div class="about-feature">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Grand Event Venues</span>
                        </div>
                        <div class="about-feature">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>24/7 Concierge Service</span>
                        </div>
                    </div>
                    <a href="about.php" class="btn btn-gold mt-4">
                        Discover Our Story <i class="bi bi-arrow-right ms-2"></i>
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

<!-- Testimonials Section -->
<section class="testimonials-section section-padding" style="background: linear-gradient(135deg, var(--dv-green) 0%, var(--dv-dark) 100%);">
    <div class="container">
        <div class="section-header" data-animate="fadeInUp">
            <span class="section-subtitle" style="color: var(--dv-gold);">Testimonials</span>
            <h2 class="section-title" style="color: var(--dv-white);">What Our Guests Say</h2>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4" data-animate="fadeInUp" data-delay="0.1">
                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <p class="testimonial-text">"An exceptional experience! The rooms were pristine, the staff was incredibly warm, and the dining was world-class. Doab Vilas truly understands luxury hospitality."</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <i class="bi bi-person-circle"></i>
                        </div>
                        <div class="author-info">
                            <h5>Rajesh Kumar</h5>
                            <span>Business Traveler</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" data-animate="fadeInUp" data-delay="0.2">
                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <p class="testimonial-text">"We hosted our wedding at Diamond Hall and it was absolutely magical! The event team took care of every detail. Our guests are still talking about it!"</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <i class="bi bi-person-circle"></i>
                        </div>
                        <div class="author-info">
                            <h5>Priya & Amit Sharma</h5>
                            <span>Wedding Celebration</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" data-animate="fadeInUp" data-delay="0.3">
                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <p class="testimonial-text">"The perfect weekend getaway! Beautiful property, amazing food, and the pool area was spectacular. Will definitely be coming back soon."</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <i class="bi bi-person-circle"></i>
                        </div>
                        <div class="author-info">
                            <h5>Anita Verma</h5>
                            <span>Leisure Traveler</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Offers Section -->
<section class="offers-section section-padding" style="background-color: var(--dv-ivory);">
    <div class="container">
        <div class="section-header" data-animate="fadeInUp">
            <span class="section-subtitle">Special</span>
            <h2 class="section-title">Exclusive Offers</h2>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-6" data-animate="fadeInLeft">
                <div class="offer-card offer-card-premium">
                    <div class="offer-image">
                        <img src="https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?w=600&q=80" alt="Honeymoon Package" loading="lazy">
                        <span class="offer-badge">Limited Time</span>
                    </div>
                    <div class="offer-content">
                        <h4>Honeymoon Package</h4>
                        <p>Romantic getaway with complimentary spa and candlelight dinner</p>
                        <span class="offer-price">Starting ₹24,999</span>
                        <a href="offers.php" class="btn btn-gold">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-animate="fadeInRight">
                <div class="offer-card offer-card-premium">
                    <div class="offer-image">
                        <img src="https://images.unsplash.com/photo-1571896349842-33c89424de2d?w=600&q=80" alt="Weekend Retreat" loading="lazy">
                        <span class="offer-badge">Weekend Special</span>
                    </div>
                    <div class="offer-content">
                        <h4>Weekend Retreat</h4>
                        <p>2 nights stay with breakfast and airport transfers included</p>
                        <span class="offer-price">Starting ₹18,999</span>
                        <a href="offers.php" class="btn btn-gold">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
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
</section>

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
