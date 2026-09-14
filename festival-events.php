<?php 
$pageTitle = 'Place for Entertainment, Festival & Sports Events in Meerut India';
require_once 'includes/header.php'; 
require_once 'includes/navbar.php'; 
?>

<!-- ==========================================
     HERO BANNER - EXACT BRAVURA RESORT STYLE
     ========================================== -->
<div class="banner banner-banquetSpace">
    <div class="bg overlay-top overlay-bottom">
        <img src="assets/images/weddings/festival-events-banner.jpg" alt="Festival Events" title="Festival Events" class="hero-bg-img" />
    </div>
    <div class="banner-container">
        <div class="container-fluid px-3 px-lg-5">
            <div class="banner-title-wrap">
                <h1 class="venue-hero-title">Festival Events</h1>
                <p class="venue-hero-subtitle">In addition to world-class accommodations facilities, a wealth of recreation and exceptional dining, Doab Vilas hosts an array of Entertainment and Festival Events to cater the needs of guest.</p>
            </div>
        </div>
    </div>
</div>

<!-- ==========================================
     CONTENT & ENQUIRY SECTION
     ========================================== -->
<section class="specilaOffDetailsSe banquetSpaceDetail">
    <div class="container-fluid px-3 px-lg-5">
        <div class="row g-4 g-xl-5">
            <!-- Left Column: Details Content -->
            <div class="col-lg-7 col-xl-8">
                <div class="OffDetailsSe">
                    <div class="content">
                        <h2>Entertainment & Festival Events</h2>
                        <p>In addition to world-class accommodations facilities, a wealth of recreation and exceptional dining, Doab Vilas hosts an array of Entertainment and Festival Events to cater the needs of guest. Let us entertain you at Doab Vilas throughout the Year with world class facilities and services. We organize events like -</p>
                        
                        <ul class="facilities-bullet-list my-4">
                            <li>Christmas / New Year Party</li>
                            <li>Festival Events like (Diwali, Holi)</li>
                            <li>DJ Nights</li>
                            <li>Gazal Nights</li>
                            <li>Orchestra Party</li>
                            <li>Musical Show</li>
                        </ul>
                        
                        <p>Experience grand celebrations with themed lighting, live musical concerts, celebrity appearances, and Michelin-inspired festival culinary feasts crafted exclusively by our master chefs.</p>
                        
                        <div class="btn_enquery mt-4 pt-2">
                            <a href="#enquiryFormCard" class="inquery">Enquire Now</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right Column: Sticky Enquiry Form -->
            <div class="col-lg-5 col-xl-4">
                <div class="form-EnqueryInnPAge" id="enquiryFormCard">
                    <div class="form-header">
                        <h2>ENQUIRE NOW</h2>
                    </div>
                    <form action="contact.php" method="POST" onsubmit="event.preventDefault(); alert('Thank you! Your event enquiry for Festival Events has been received. Our team will contact you shortly.'); this.reset();">
                        <div class="form-group mb-3">
                            <label class="form-label-lux">Name *</label>
                            <input type="text" name="name" class="form-control form-control-lux" placeholder="Enter your full name" required>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label class="form-label-lux">Email *</label>
                            <input type="email" name="email" class="form-control form-control-lux" placeholder="name@domain.com" required>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label class="form-label-lux">Contact No. *</label>
                            <input type="tel" name="phone" maxlength="15" class="form-control form-control-lux" placeholder="+91 XXXXX XXXXX" required>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label class="form-label-lux">Interested in</label>
                            <input type="text" name="interested" class="form-control form-control-lux" value="Festival Events" readonly>
                        </div>
                        
                        <div class="form-group mb-4">
                            <label class="form-label-lux">Message *</label>
                            <textarea name="message" rows="4" class="form-control form-control-lux" placeholder="Event type, expected date, number of passes / guests, special arrangements..." required></textarea>
                        </div>
                        
                        <div class="form-btn">
                            <button type="submit" class="btn-form w-100">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     PLACES AND SPACES (BANQUET HALLS & LAWNS)
     ========================================== -->
<section class="BGR-H-Section-a moreroomS banquetSpaceSec" id="placesSpacesSection">
    <div class="container-fluid px-3 px-lg-5">
        <div class="heading text-center mb-5">
            <span class="section-subtitle">Opulent Venues</span>
            <h2>Places and Spaces</h2>
        </div>
        
        <div class="row g-4 justify-content-center">
            <!-- 1. Grand Majestic Hall -->
            <div class="col-md-6 col-lg-4">
                <div class="banquet-space-card img_hover">
                    <figure class="banquet-figure">
                        <a href="diamond.php">
                            <img src="assets/images/banquets/grand-majestic-hall.jpg" alt="Grand Majestic Hall" title="Grand Majestic Hall" class="img-fluid" loading="lazy" />
                        </a>
                    </figure>
                    <div class="banquet-card-content">
                        <div class="catName"><a href="diamond.php">Grand Majestic Hall</a></div>
                        <div class="hall-spec">Hall Size : 10,000 Square Feet</div>
                        <div class="hall-spec">Capacity : 350 - 550 PAX</div>
                        <a href="diamond.php" class="btn-banquet-link">Explore Venue <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- 2. Grand Imperial Hall -->
            <div class="col-md-6 col-lg-4">
                <div class="banquet-space-card img_hover">
                    <figure class="banquet-figure">
                        <a href="sapphire.php">
                            <img src="assets/images/banquets/grand-imperial-hall.jpg" alt="Grand Imperial Hall" title="Grand Imperial Hall" class="img-fluid" loading="lazy" />
                        </a>
                    </figure>
                    <div class="banquet-card-content">
                        <div class="catName"><a href="sapphire.php">Grand Imperial Hall</a></div>
                        <div class="hall-spec">Hall Size : 6,200 Square Feet</div>
                        <div class="hall-spec">Capacity : 150 To 250 PAX</div>
                        <a href="sapphire.php" class="btn-banquet-link">Explore Venue <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- 3. Grand Platinum Hall -->
            <div class="col-md-6 col-lg-4">
                <div class="banquet-space-card img_hover">
                    <figure class="banquet-figure">
                        <a href="diamond.php?hall=platinum">
                            <img src="assets/images/banquets/grand-platinum-hall.jpg" alt="Grand Platinum Hall" title="Grand Platinum Hall" class="img-fluid" loading="lazy" />
                        </a>
                    </figure>
                    <div class="banquet-card-content">
                        <div class="catName"><a href="diamond.php?hall=platinum">Grand Platinum Hall</a></div>
                        <div class="hall-spec">Hall Size : 4,000 Square Feet</div>
                        <div class="hall-spec">Capacity : 80 To 150 PAX</div>
                        <a href="diamond.php?hall=platinum" class="btn-banquet-link">Explore Venue <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- 4. Grandeur Hall -->
            <div class="col-md-6 col-lg-4">
                <div class="banquet-space-card img_hover">
                    <figure class="banquet-figure">
                        <a href="sapphire.php?hall=grandeur">
                            <img src="assets/images/banquets/grandeur-hall.jpg" alt="Grandeur Hall" title="Grandeur Hall" class="img-fluid" loading="lazy" />
                        </a>
                    </figure>
                    <div class="banquet-card-content">
                        <div class="catName"><a href="sapphire.php?hall=grandeur">Grandeur Hall</a></div>
                        <div class="hall-spec">Hall Size : 10,000 Square Feet</div>
                        <div class="hall-spec">Capacity : 350 To 550 PAX</div>
                        <a href="sapphire.php?hall=grandeur" class="btn-banquet-link">Explore Venue <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- 5. Class-e-Dior Hall -->
            <div class="col-md-6 col-lg-4">
                <div class="banquet-space-card img_hover">
                    <figure class="banquet-figure">
                        <a href="diamond.php?hall=dior">
                            <img src="assets/images/banquets/class-e-dior-hall.jpg" alt="Class-e-Dior Hall" title="Class-e-Dior Hall" class="img-fluid" loading="lazy" />
                        </a>
                    </figure>
                    <div class="banquet-card-content">
                        <div class="catName"><a href="diamond.php?hall=dior">Class-e-Dior Hall</a></div>
                        <div class="hall-spec">Hall Size : 6,650 Square Feet</div>
                        <div class="hall-spec">Capacity : 150 to 250 PAX</div>
                        <a href="diamond.php?hall=dior" class="btn-banquet-link">Explore Venue <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- 6. Regent Hall -->
            <div class="col-md-6 col-lg-4">
                <div class="banquet-space-card img_hover">
                    <figure class="banquet-figure">
                        <a href="sapphire.php?hall=regent">
                            <img src="assets/images/banquets/regent-hall.jpg" alt="Regent Hall" title="Regent Hall" class="img-fluid" loading="lazy" />
                        </a>
                    </figure>
                    <div class="banquet-card-content">
                        <div class="catName"><a href="sapphire.php?hall=regent">Regent Hall</a></div>
                        <div class="hall-spec">Hall Size : 1,200 Square Feet</div>
                        <div class="hall-spec">Capacity : 30 to 60 PAX</div>
                        <a href="sapphire.php?hall=regent" class="btn-banquet-link">Explore Venue <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- 7. Alfresco-de-Aqua -->
            <div class="col-md-6 col-lg-4">
                <div class="banquet-space-card img_hover">
                    <figure class="banquet-figure">
                        <a href="aquarius-pool.php">
                            <img src="assets/images/banquets/alfresco-de-aqua.jpg" alt="Alfresco-de-Aqua" title="Alfresco-de-Aqua" class="img-fluid" loading="lazy" />
                        </a>
                    </figure>
                    <div class="banquet-card-content">
                        <div class="catName"><a href="aquarius-pool.php">Alfresco-de-Aqua</a></div>
                        <div class="hall-spec">Type : Pool-side Terrace Venue</div>
                        <div class="hall-spec">Events : Mehandi, Cocktail & Bachelor Party</div>
                        <a href="aquarius-pool.php" class="btn-banquet-link">Explore Venue <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- 8. Paradise Garden -->
            <div class="col-md-6 col-lg-4">
                <div class="banquet-space-card img_hover">
                    <figure class="banquet-figure">
                        <a href="garden.php">
                            <img src="assets/images/banquets/paradise-garden.jpg" alt="Paradise Garden" title="Paradise Garden" class="img-fluid" loading="lazy" />
                        </a>
                    </figure>
                    <div class="banquet-card-content">
                        <div class="catName"><a href="garden.php">Paradise Garden</a></div>
                        <div class="hall-spec">Garden Size : 20,000 Square Feet</div>
                        <div class="hall-spec">Capacity : 500 To 700 PAX</div>
                        <a href="garden.php" class="btn-banquet-link">Explore Venue <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- 9. Grand Empyrean Lawn -->
            <div class="col-md-6 col-lg-4">
                <div class="banquet-space-card img_hover">
                    <figure class="banquet-figure">
                        <a href="jashan-party-lawn.php">
                            <img src="assets/images/banquets/grand-empyrean-lawn.jpg" alt="Grand Empyrean Lawn" title="Grand Empyrean Lawn" class="img-fluid" loading="lazy" />
                        </a>
                    </figure>
                    <div class="banquet-card-content">
                        <div class="catName"><a href="jashan-party-lawn.php">Grand Empyrean Lawn</a></div>
                        <div class="hall-spec">Lawn Size : 1,50,000 Sq. Ft.</div>
                        <div class="hall-spec">Capacity : 650 To 5,000 PAX</div>
                        <a href="jashan-party-lawn.php" class="btn-banquet-link">Explore Venue <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     MORE CELEBRATIONS & OCCASIONS SECTION
     ========================================== -->
<section class="sect-More-DineWines" id="relatedEventsSection">
    <div class="container-fluid px-3 px-lg-5">
        <div class="heading text-center mb-5">
            <span class="section-subtitle">Celebrations & Gatherings</span>
            <h2>More Weddings & Celebrations</h2>
        </div>
        
        <div class="row g-4 justify-content-center">
            <!-- 1. Wedding Venues / Lawn -->
            <div class="col-md-6 col-lg-4">
                <div class="more-dine-card">
                    <a href="wedding-venues.php">
                        <figure class="more-dine-figure">
                            <img src="assets/images/weddings/weddings.jpg" alt="Wedding Venues / Lawn" title="Wedding Venues / Lawn" class="img-fluid" loading="lazy" />
                        </figure>
                        <div class="more-dine-content">
                            <h4>Wedding Venues / Lawn</h4>
                            <p>We at Doab Vilas consider each and every event of yours as one of the most important events for us.</p>
                        </div>
                    </a>
                </div>
            </div>
            
            <!-- 2. Corporate Events & Meetings -->
            <div class="col-md-6 col-lg-4">
                <div class="more-dine-card">
                    <a href="upcoming-events.php">
                        <figure class="more-dine-figure">
                            <img src="assets/images/weddings/corporate-events-and-meetings.jpg" alt="Corporate Events & Meetings" title="Corporate Events & Meetings" class="img-fluid" loading="lazy" />
                        </figure>
                        <div class="more-dine-content">
                            <h4>Corporate Events & Meetings</h4>
                            <p>Whether you are planning a board meeting for 20 or an annual conference for 1,000 persons, you will achieve success at DOAB VILAS.</p>
                        </div>
                    </a>
                </div>
            </div>
            
            <!-- 3. Celebrations -->
            <div class="col-md-6 col-lg-4">
                <div class="more-dine-card">
                    <a href="weddings.php?event=celebrations">
                        <figure class="more-dine-figure">
                            <img src="assets/images/weddings/celebrations.jpg" alt="Celebrations" title="Celebrations" class="img-fluid" loading="lazy" />
                        </figure>
                        <div class="more-dine-content">
                            <h4>Celebrations</h4>
                            <p>We at Doab Vilas specialize in the art of organizing Birthday Parties, Wedding Anniversary, Wedding Reception, and other milestone celebrations.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Smooth scroll script for Enquiry button -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const enquiryBtn = document.querySelector('.btn_enquery a');
    if (enquiryBtn) {
        enquiryBtn.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.getElementById('enquiryFormCard');
            if (target) {
                const offset = 90;
                const bodyRect = document.body.getBoundingClientRect().top;
                const elementRect = target.getBoundingClientRect().top;
                const elementPosition = elementRect - bodyRect;
                const offsetPosition = elementPosition - offset;
                
                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
                
                target.classList.add('booking-card-highlight');
                setTimeout(() => target.classList.remove('booking-card-highlight'), 1500);
            }
        });
    }
});
</script>

<?php require_once 'includes/whatsapp-button.php'; ?>
<?php require_once 'includes/footer.php'; ?>
