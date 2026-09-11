<?php 
$pageTitle = 'Bar and Restaurants in Meerut City, Uttar Pradesh, India';
require_once 'includes/header.php'; 
require_once 'includes/navbar.php'; 
?>

<!-- ==========================================
     HERO BANNER - EXACT BRAVURA RESORT STYLE
     ========================================== -->
<div class="banner banner-banquetSpace banner-Frigo-Gourmet">
    <div class="bg overlay-top overlay-bottom">
        <img src="assets/images/dining/bar-and-restaurants-banner.jpg" alt="Bar & Restaurants" title="Bar & Restaurants" class="hero-bg-img" />
    </div>
    <div class="banner-container">
        <div class="container-fluid px-3 px-lg-5">
            <div class="banner-title-wrap">
                <h1 class="venue-hero-title">BAR & RESTAURANTS</h1>
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
                        <p>Doab Vilas is a great place for dining in Meerut City. As with everything at Doab Vilas's Restaurants (Frigo's Gourmet - First & Only Live Kitchen and Alfresco - Terrace Restaurant) the cuisine is of the highest standard, reflected by the use of only the freshest products and all overseen by our Michelin-Starred Executive Chefs. The results are naturally outstanding with a highly imaginative menu and equally fine wine list. Of course, if you would like something you don't see, just ask and our chefs will happily oblige.</p>
                        
                        <p>Our fabulous The Long Island (Pub & Bar) is an ideal location to enjoy a leisurely drink. We can provide waiter service to your table on your request. We, at Doab Vilas's Bar offers the best quality beer or drinks, perfect ambiance and efficient bar services to our guests. So just come to us and toss a drink to enjoy the evening at our Doab Vilas's Bar.</p>
                        
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
                    <form action="contact.php" method="POST" onsubmit="event.preventDefault(); alert('Thank you! Your table / dining enquiry for Bar & Restaurants has been received. Our team will contact you shortly.'); this.reset();">
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
                            <input type="text" name="interested" class="form-control form-control-lux" value="Bar & Restaurants" readonly>
                        </div>
                        
                        <div class="form-group mb-4">
                            <label class="form-label-lux">Message *</label>
                            <textarea name="message" rows="4" class="form-control form-control-lux" placeholder="Number of guests, date, preferred time, special dietary requests..." required></textarea>
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
     MORE DINE & WINE SECTION
     ========================================== -->
<section class="sect-More-DineWines" id="relatedDineSection">
    <div class="container-fluid px-3 px-lg-5">
        <div class="heading text-center mb-5">
            <span class="section-subtitle">Culinary Experiences</span>
            <h2>More Dine & wine</h2>
        </div>
        
        <div class="row g-4 justify-content-center">
            <!-- 1. Frigo's Gourmet -->
            <div class="col-md-6 col-lg-4">
                <div class="more-dine-card">
                    <a href="frigos-gourmet-live-kitchen.php">
                        <figure class="more-dine-figure">
                            <img src="assets/images/dining/frigos-gourmet-live-kitchen--DineWine.jpg" alt="Frigo's Gourmet - Live Kitchen" title="Frigo's Gourmet - Live Kitchen" class="img-fluid" loading="lazy" />
                        </figure>
                        <div class="more-dine-content">
                            <h4>Frigo's Gourmet - Live Kitchen</h4>
                            <p>Doab Vilas launched "Frigo's Gourmet - First & Only Live Kitchen". Now enjoy your cuisine being cooked in front of you at "Frigo's Gourmet-Live Kitchen".</p>
                        </div>
                    </a>
                </div>
            </div>
            
            <!-- 2. The Long Island (Pub & Bar) -->
            <div class="col-md-6 col-lg-4">
                <div class="more-dine-card">
                    <a href="the-long-island.php">
                        <figure class="more-dine-figure">
                            <img src="assets/images/dining/the-long-Island-pub-bar--DineWine.jpg" alt="The Long Island (Pub & Bar)" title="The Long Island (Pub & Bar)" class="img-fluid" loading="lazy" />
                        </figure>
                        <div class="more-dine-content">
                            <h4>The Long Island (Pub & Bar)</h4>
                            <p>It is believed that the measure of a good Bar is in the quality of its beer, its crowd, or its atmosphere. We, at DOAB VILAS Bar that offers the best quality beer or drinks, perfect ambiance and efficient Bar services to our guests.</p>
                        </div>
                    </a>
                </div>
            </div>
            
            <!-- 3. Alfresco (Pool-side Bar) -->
            <div class="col-md-6 col-lg-4">
                <div class="more-dine-card">
                    <a href="alfresco-pool-side-bar.php">
                        <figure class="more-dine-figure">
                            <img src="assets/images/dining/alfresco-pool-side-bar--DineWine.jpg" alt="Alfresco (Pool-side Bar)" title="Alfresco (Pool-side Bar)" class="img-fluid" loading="lazy" />
                        </figure>
                        <div class="more-dine-content">
                            <h4>Alfresco (Pool-side Bar)</h4>
                            <p>This is a perfect place for your Mehandi, Bachelor Party, Cocktail Events. Enjoy Roof Top Bar with Pool on the Side with complete Privacy. Customized decors suiting the themes, all available under one Umbrella.</p>
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
