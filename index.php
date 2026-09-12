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
            <source src="assets/videos/Doab villas.mp4" type="video/mp4">
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
<section class="about-us-section section-padding" style="background-color: var(--dv-white);">
    <div class="container">
        <div class="row align-items-center g-5" data-animate="fadeInUp" data-delay="0.2">
            <div class="col-lg-6">
                <div class="about-us-image">
                    <img src="assets/images/rooms/doab villas.png" alt="Doab Vilas" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-us-content">
                    <span class="section-subtitle">Welcome to</span>
                    <h2 class="section-title">ABOUT US</h2>
                    <p class="about-us-text">
                        <strong>Doab Vilas</strong> is an exclusive luxury resort at Meerut, offering a vast range of facilities at one place. Experience the warmth of nature at Doab Vilas. You will be surrounded by the beauty and grace of this resort, which is intelligently designed to revive you. At Doab Vilas, we offer you world-class hospitality services that make your stay truly memorable.
                    </p>
                    <p class="about-us-text">
                        From luxurious rooms to grand banquet halls, lush green lawns to stunning pools — we have everything you need for a perfect celebration or a relaxing getaway.
                    </p>
                    <a href="about.php" class="about-us-btn">
                        READ MORE <i class="bi bi-arrow-right"></i>
                    </a>
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
            <h2 class="section-title" style="font-size: clamp(1.8rem, 4vw, 2.5rem);">ROOMS & SUITES</h2>
        </div>
        
        <div class="row g-4" data-animate="fadeInUp" data-delay="0.2">
            <!-- Luxury Delux Rooms 1 -->
            <div class="col-lg-6">
                <a href="room-detail.php" class="wedding-grid-card">
                    <div class="wedding-grid-img">
                        <img src="assets/images/rooms/room1.png" alt="Luxury Delux Rooms" class="img-fluid">
                    </div>
                    <div class="wedding-grid-content">
                        <h3 class="wedding-grid-title">Luxury Delux Rooms</h3>
                        <p class="wedding-grid-text">Experience luxury and comfort in our elegantly designed Deluxe Rooms with modern amenities, plush interiors, and stunning views for a truly royal stay.</p>
                    </div>
                </a>
            </div>
            <!-- Luxury Delux Rooms 2 -->
            <div class="col-lg-6">
                <a href="room-detail.php" class="wedding-grid-card">
                    <div class="wedding-grid-img">
                        <img src="assets/images/rooms/room2.png" alt="Luxury Delux Rooms" class="img-fluid">
                    </div>
                    <div class="wedding-grid-content">
                        <h3 class="wedding-grid-title">Luxury Delux Rooms</h3>
                        <p class="wedding-grid-text">Experience luxury and comfort in our elegantly designed Deluxe Rooms with modern amenities, plush interiors, and stunning views for a truly royal stay.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Weddings & Events Section -->
<section class="weddings-events-section section-padding" style="background-color: var(--dv-white);">
    <div class="container">
        <div class="section-header" data-animate="fadeInUp">
            <span class="section-subtitle">Wedding & Events</span>
            <h2 class="section-title" style="font-size: clamp(1.8rem, 4vw, 2.5rem);">START PLANNING</h2>
        </div>
        
        <div class="row g-4" data-animate="fadeInUp" data-delay="0.2">
            <!-- Corporate Events -->
            <div class="col-lg-6">
                <a href="corporate-events-and-meetings.php" class="wedding-grid-card">
                    <div class="wedding-grid-img">
                        <img src="assets/images/weddings/corporate events.webp" alt="Corporate Events" class="img-fluid">
                    </div>
                    <div class="wedding-grid-content">
                        <h3 class="wedding-grid-title">Corporate Events</h3>
                        <p class="wedding-grid-text">Professional spaces for your business meetings, conferences and corporate gatherings.</p>
                    </div>
                </a>
            </div>
            <!-- Festival Events -->
            <div class="col-lg-6">
                <a href="festival-events.php" class="wedding-grid-card">
                    <div class="wedding-grid-img">
                        <img src="assets/images/weddings/festival-events.jpg" alt="Festival Events" class="img-fluid">
                    </div>
                    <div class="wedding-grid-content">
                        <h3 class="wedding-grid-title">Festival Events</h3>
                        <p class="wedding-grid-text">Celebrate your special festivals with us in a grand way with our premium event spaces and services.</p>
                    </div>
                </a>
            </div>
            <!-- Wedding Venues / Lawn -->
            <div class="col-lg-6">
                <a href="weddings.php" class="wedding-grid-card">
                    <div class="wedding-grid-img">
                        <img src="assets/images/weddings/weddings.jpg" alt="Wedding Venues / Lawn" class="img-fluid">
                    </div>
                    <div class="wedding-grid-content">
                        <h3 class="wedding-grid-title">Wedding Venues / Lawn</h3>
                        <p class="wedding-grid-text">We at Doab Vilas consider each and every event of yours as one of the most important events for us.</p>
                    </div>
                </a>
            </div>
            <!-- Birthday Celebration -->
            <div class="col-lg-6">
                <a href="celebrations.php" class="wedding-grid-card">
                    <div class="wedding-grid-img">
                        <img src="assets/images/weddings/birthday celebration.webp" alt="Birthday Celebration" class="img-fluid">
                    </div>
                    <div class="wedding-grid-content">
                        <h3 class="wedding-grid-title">Birthday Celebration</h3>
                        <p class="wedding-grid-text">Make your birthday unforgettable with our stunning venues, delicious catering, and personalized event planning services.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Discover Section with YouTube Video -->
<section class="discover-section section-padding" style="background-color: var(--dv-white);">
    <div class="container">
        <div class="section-header" data-animate="fadeInUp">
            <span class="section-subtitle">Discover</span>
            <h2 class="section-title" style="font-size: clamp(1.8rem, 4vw, 2.5rem);">LUXURY HOTELS IN MEERUT</h2>
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
<section class="discover-section section-padding" style="background-color: var(--dv-white);">
    <div class="container">
        <div class="row align-items-center g-5" data-animate="fadeInUp" data-delay="0.2">
            <div class="col-lg-6">
                <div class="discover-content">
                    <h3 class="discover-heading">DIAMOND HALL</h3>
                    <p class="discover-text">
                        <strong>DIAMOND HALL</strong> at Doab Vilas is a grand ballroom designed for magnificent celebrations. With stunning interiors, state-of-the-art lighting, and spacious seating, it is the perfect venue for weddings, receptions, and grand events. Our dedicated team ensures every detail is taken care of to make your special day truly unforgettable.
                    </p>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="discover-image">
                    <img src="assets/images/rooms/diamond-hall.png" alt="Diamond Hall" class="img-fluid" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Aquarius Pool Section -->
<section class="discover-section section-padding" style="background-color: var(--dv-ivory);">
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

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sapphire Hall Section -->
<section class="discover-section section-padding" style="background-color: var(--dv-white);">
    <div class="container">
        <div class="row align-items-center g-5" data-animate="fadeInUp" data-delay="0.2">
            <div class="col-lg-6">
                <div class="discover-content">
                    <h3 class="discover-heading">SAPPHIRE HALL</h3>
                    <p class="discover-text">
                        <strong>SAPPHIRE HALL</strong> at Doab Vilas is an intimate venue designed for exclusive gatherings. With elegant decor, modern amenities, and a cozy atmosphere, it is perfect for corporate meetings, private parties, and special celebrations. Our team ensures a seamless experience tailored to your needs.
                    </p>

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

<!-- Crystal Ball Room Section -->
<section class="discover-section section-padding" style="background-color: var(--dv-ivory);">
    <div class="container">
        <div class="row align-items-center g-5" data-animate="fadeInUp" data-delay="0.2">
            <div class="col-lg-6">
                <div class="discover-content">
                    <h3 class="discover-heading">CRYSTAL BALL ROOM</h3>
                    <p class="discover-text">
                        <strong>CRYSTAL BALL ROOM</strong> at Doab Vilas is a magnificent venue designed for grand celebrations. With dazzling crystal chandeliers, elegant interiors, and a spacious layout, it is the perfect setting for lavish weddings, receptions, and corporate galas. Experience unmatched luxury and world-class hospitality in this stunning ballroom.
                    </p>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="discover-image">
                    <img src="assets/images/rooms/room1.png" alt="Crystal Ball Room" class="img-fluid" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Jashan Lawn Section -->
<section class="discover-section section-padding" style="background-color: var(--dv-white);">
    <div class="container">
        <div class="row align-items-center g-5" data-animate="fadeInUp" data-delay="0.2">
            <div class="col-lg-6">
                <div class="discover-image">
                    <img src="assets/images/rooms/rooms lobby.jpeg" alt="Jashan Lawn" class="img-fluid" loading="lazy">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="discover-content">
                    <h3 class="discover-heading">JASHAN LAWN</h3>
                    <p class="discover-text">
                        <strong>JASHAN LAWN</strong> at Doab Vilas is elegantly designed to welcome you with warmth and luxury. As you step in, you are greeted by stunning interiors, plush seating, and a sophisticated ambiance that sets the tone for your stay. Our lobby offers a perfect blend of comfort and style, making it an ideal space to relax and unwind.
                    </p>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Bars and Restaurant Section -->
<section class="discover-section section-padding" style="background-color: var(--dv-ivory);">
    <div class="container">
        <div class="section-header" data-animate="fadeInUp">
            <span class="section-subtitle">Dine & Wine</span>
            <h2 class="section-title" style="font-size: clamp(1.8rem, 4vw, 2.5rem);">BARS AND RESTAURANT</h2>
        </div>
        <div class="row align-items-center g-5" data-animate="fadeInUp" data-delay="0.2">
            <div class="col-lg-6">
                <div class="discover-content">
                    <h3 class="discover-heading">BAR & RESTAURANTS</h3>
                    <p class="discover-text">
                        <strong>DOAB VILAS</strong> is a great place for dining in Meerut City. As with everything at Doab Vilas's Restaurants (Frigo's Gourmet - First & Only Live Kitchen and Alfresco - Terrace Restaurant) the cuisine is of the highest standard, reflected by the use of only the freshest products and all overseen by our Michelin-Starred Executive Chefs.
                    </p>
                    <a href="dining.php" class="discover-link">
                        EXPLORE MORE <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="discover-image">
                    <img src="assets/images/dining/bar-and-restaurants--DineWine.jpg" alt="Bar & Restaurants" class="img-fluid" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Staff Section -->
<section class="staff-section" style="background-color: var(--dv-ivory);">
    <div class="container-fluid px-0">
        <div class="section-header text-center pt-5 pb-4" data-animate="fadeInUp">
            <span class="section-subtitle">Dedicated Team</span>
            <h2 class="section-title">OUR STAFF</h2>
            <p class="section-desc mx-auto" style="max-width: 700px; color: #666; font-size: 1rem; line-height: 1.8;">At Doab Vilas, our dedicated team works tirelessly to ensure every guest experiences unparalleled hospitality. From warm welcomes to flawless service, our staff is committed to making your stay truly memorable.</p>
        </div>
        <div class="staff-image-wrapper" data-animate="fadeInUp" data-delay="0.2">
            <img src="assets/images/rooms/our staff.JPG" alt="Our Staff" class="img-fluid w-100">
        </div>
    </div>
</section>

<!-- Night View Banner Section -->
<section class="night-banner-section" style="padding-top: 80px;">
    <div class="container">
        <div class="section-header" data-animate="fadeInUp">
            <span class="section-subtitle">Resort Life</span>
            <h2 class="section-title">DOAB VILAS AT NIGHT</h2>
            <p class="section-desc">Witness the enchanting beauty of Doab Vilas as it transforms under the night sky. The magical lighting and serene ambiance make it a truly unforgettable experience.</p>
        </div>
    </div>
    <div class="night-banner-image" data-animate="fadeInUp" data-delay="0.2">
        <img src="assets/images/rooms/doab villas 1.png" alt="Doab Vilas Night View" class="img-fluid">
    </div>
</section>

<!-- Testimonial Section -->
<section class="testimonial-section section-padding" style="background-color: var(--dv-white);">
    <div class="container">
        <div class="section-header" data-animate="fadeInUp">
            <span class="section-subtitle">Testimonials</span>
            <h2 class="section-title">WHAT OUR GUESTS SAY</h2>
        </div>
        <div class="row g-4" data-animate="fadeInUp" data-delay="0.2">
            <!-- Testimonial 1 -->
            <div class="col-lg-4">
                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <p class="testimonial-text">"Doab Vilas is truly a paradise in Meerut! The Diamond Hall where we hosted our reception was stunning. The food, the service, and the attention to detail was remarkable. Will definitely come back again!"</p>
                    <div class="testimonial-author">
                        <img src="assets/images/experiences/Khayali-Guest.jpg" alt="Khayali">
                        <div class="testimonial-author-info">
                            <h4>Khayali</h4>
                            <span>Comedian</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial 2 -->
            <div class="col-lg-4">
                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <p class="testimonial-text">"We celebrated our anniversary at Jashan Lawn and it was magical! The decor, the arrangements, and the staff coordination were flawless. Doab Vilas made our special day truly unforgettable."</p>
                    <div class="testimonial-author">
                        <img src="assets/images/experiences/Rajeev Shukla-Guest.jpg" alt="Rajeev Shukla">
                        <div class="testimonial-author-info">
                            <h4>Rajeev Shukla</h4>
                            <span>Businessman</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial 3 -->
            <div class="col-lg-4">
                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <p class="testimonial-text">"The rooms at Doab Vilas are luxurious and comfortable. We loved the Aquarius Pool area and the dining at Frigo's Gourmet was exceptional. A perfect weekend getaway from Delhi!"</p>
                    <div class="testimonial-author">
                        <img src="assets/images/experiences/Mahima Chaudhary-Guest.jpg" alt="Mahima Chaudhary">
                        <div class="testimonial-author-info">
                            <h4>Mahima Chaudhary</h4>
                            <span>Actress</span>
                        </div>
                    </div>
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
