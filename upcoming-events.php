<?php 
$pageTitle = 'Upcoming Events in Meerut';
require_once 'includes/header.php'; 
require_once 'includes/navbar.php'; 
?>

<!-- ==========================================
     HERO BANNER
     ========================================== -->
<div class="banner banner-rooms-suites">
    <div class="bg overlay-top overlay-bottom">
        <img src="assets/images/weddings/festival-events-l.jpg" alt="Upcoming Events" title="Upcoming Events" class="hero-bg-img" />
    </div>
    <div class="banner-container">
        <div class="container">
            <div class="content text-center">
                <div class="title">Exclusive</div>
                <h1>Events Packages</h1>
                <div class="scrdown">
                    <a href="#eventsSection" aria-label="Scroll Down">
                        <i class="bi bi-chevron-down"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ==========================================
     EVENTS SECTION
     ========================================== -->
<section class="sec-upcoming-events" id="eventsSection">
    <div class="container">
        <div class="row g-4">
            
            <!-- Event 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="event-card img_hover">
                    <div class="event_stat">
                        <span>Upcoming Event</span>
                    </div>
                    <figure>
                        <a href="#">
                            <img src="assets/images/weddings/wedding and events.jpg" alt="Grand Wedding Celebration" title="Grand Wedding Celebration" class="img-fluid" loading="lazy" />
                        </a>
                    </figure>
                    <div class="content">
                        <div class="catName">Grand Wedding Celebration 2026</div>
                    </div>
                </div>
            </div>

            <!-- Event 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="event-card img_hover">
                    <div class="event_stat">
                        <span>Upcoming Event</span>
                    </div>
                    <figure>
                        <a href="#">
                            <img src="assets/images/weddings/festival-events.jpg" alt="Festival Celebration" title="Festival Celebration" class="img-fluid" loading="lazy" />
                        </a>
                    </figure>
                    <div class="content">
                        <div class="catName">Grand Festival Celebration</div>
                    </div>
                </div>
            </div>

            <!-- Event 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="event-card img_hover">
                    <div class="event_stat">
                        <span>Past Event</span>
                    </div>
                    <figure>
                        <a href="#">
                            <img src="assets/images/weddings/corporate-events-and-meetings.jpg" alt="Corporate Event" title="Corporate Event" class="img-fluid" loading="lazy" />
                        </a>
                    </figure>
                    <div class="content">
                        <div class="catName">Corporate Conference 2025</div>
                    </div>
                </div>
            </div>

            <!-- Event 4 -->
            <div class="col-md-6 col-lg-4">
                <div class="event-card img_hover">
                    <div class="event_stat">
                        <span>Past Event</span>
                    </div>
                    <figure>
                        <a href="#">
                            <img src="assets/images/weddings/celebrations.jpg" alt="New Year Celebration" title="New Year Celebration" class="img-fluid" loading="lazy" />
                        </a>
                    </figure>
                    <div class="content">
                        <div class="catName">New Year Grand Celebration</div>
                    </div>
                </div>
            </div>

            <!-- Event 5 -->
            <div class="col-md-6 col-lg-4">
                <div class="event-card img_hover">
                    <div class="event_stat">
                        <span>Past Event</span>
                    </div>
                    <figure>
                        <a href="#">
                            <img src="assets/images/weddings/weddings.jpg" alt="Wedding Exhibition" title="Wedding Exhibition" class="img-fluid" loading="lazy" />
                        </a>
                    </figure>
                    <div class="content">
                        <div class="catName">Wedding Exhibition 2025</div>
                    </div>
                </div>
            </div>

            <!-- Event 6 -->
            <div class="col-md-6 col-lg-4">
                <div class="event-card img_hover">
                    <div class="event_stat">
                        <span>Past Event</span>
                    </div>
                    <figure>
                        <a href="#">
                            <img src="assets/images/weddings/weddings-l.jpg" alt="Live Music Night" title="Live Music Night" class="img-fluid" loading="lazy" />
                        </a>
                    </figure>
                    <div class="content">
                        <div class="catName">Live Music Night</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
.sec-upcoming-events { padding: 60px 0; }
.event-card { position: relative; overflow: hidden; background: #fff; }
.event_stat { position: absolute; top: 15px; left: 15px; z-index: 2; }
.event_stat span { background: var(--dv-gold); color: #fff; padding: 5px 15px; font-size: 12px; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; border-radius: 3px; }
.event-card figure { margin: 0; overflow: hidden; }
.event-card figure img { width: 100%; height: 280px; object-fit: cover; transition: transform 0.5s ease; }
.event-card:hover figure img { transform: scale(1.08); }
.event-card .content { padding: 20px; }
.event-card .catName { font-family: 'Luxia', serif; font-size: 18px; color: var(--dv-dark); font-weight: 500; }
@media (max-width: 767px) { .event-card figure img { height: 220px; } }
</style>

<?php require_once 'includes/whatsapp-button.php'; ?>
<?php require_once 'includes/footer.php'; ?>