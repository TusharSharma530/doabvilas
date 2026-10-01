<?php 
$pageTitle = 'Upcoming Events - Doab Vilas Luxury Resort, Meerut';
require_once 'includes/header.php'; 
require_once 'includes/navbar.php'; 
?>

<!-- Hero Banner -->
<!-- Hero Banner -->
<div class="banner banner-rooms-suites banner_wedding banner_dining">

    <?php
    $eventHeroQuery = mysqli_query(
        $con,
        "SELECT featured_img FROM category WHERE id = 73 LIMIT 1"
    );

    $eventHeroData = mysqli_fetch_assoc($eventHeroQuery);
    $eventHeroImage = $eventHeroData['featured_img'] ?? '';
    ?>

    <div class="bg overlay-top overlay-bottom">
        <img
            src="<?php echo $path . $eventHeroImage; ?>"
            alt="Upcoming Events"
            title="Upcoming Events"
            class="hero-bg-img"
        />
    </div>

    <div class="banner-container">
        <div class="container">
            <div class="content text-center">
                <div class="title">Discover</div>

                <h1>EVENTS PACKAGES</h1>

                <div class="scrdown">
                    <a href="#eventsSection" aria-label="Scroll Down">
                        <i class="bi bi-chevron-down"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>


<!-- Events Section -->
<!-- Events Section -->
<section class="sec-upcoming-events" id="eventsSection">
    <div class="container">

        <div class="section-header text-center mb-5">
            <span class="section-subtitle">Our Events</span>
            <h2 class="section-title">ALL EVENTS</h2>
        </div>

        <div class="row g-4">

            <?php
            $eventsQuery = mysqli_query(
                $con,
                "SELECT id, file, title 
                 FROM events 
                 WHERE status = 1 
                 ORDER BY ordering ASC, id ASC"
            );

            if ($eventsQuery && mysqli_num_rows($eventsQuery)) {

                while ($event = mysqli_fetch_assoc($eventsQuery)) {

                    $eventImage = $event['file'] ?? '';
                    $eventTitle = $event['title'] ?? '';

                    if (empty($eventImage)) {
                        continue;
                    }

                    $eventImageUrl = $path . $eventImage;
            ?>

                    <div class="col-md-6 col-lg-4">
                        <div class="event-card img_hover">

                            <figure
                                onclick="openLightbox(
                                    '<?php echo htmlspecialchars($eventImageUrl, ENT_QUOTES, 'UTF-8'); ?>',
                                    '<?php echo htmlspecialchars($eventTitle, ENT_QUOTES, 'UTF-8'); ?>'
                                )"
                                class="cursor-pointer"
                            >
                                <img
                                    src="<?php echo htmlspecialchars($eventImageUrl, ENT_QUOTES, 'UTF-8'); ?>"
                                    alt="<?php echo htmlspecialchars($eventTitle, ENT_QUOTES, 'UTF-8'); ?>"
                                    title="<?php echo htmlspecialchars($eventTitle, ENT_QUOTES, 'UTF-8'); ?>"
                                    class="img-fluid"
                                    loading="lazy"
                                />
                            </figure>

                            <div class="content">
                                <div class="catName">
                                    <?php echo htmlspecialchars($eventTitle, ENT_QUOTES, 'UTF-8'); ?>
                                </div>
                            </div>

                        </div>
                    </div>

            <?php
                }

            } else {
            ?>

                <div class="col-md-12 text-center">
                    <p>No events available.</p>
                </div>

            <?php
            }
            ?>

        </div>
    </div>
</section>


<!-- Lightbox Modal -->
<div id="galleryLightbox" class="gallery-lightbox" onclick="closeLightbox()">
    <span class="lightbox-close" onclick="closeLightbox()">&times;</span>
    <img id="lightboxImg" src="" alt="">
    <div id="lightboxCaption" class="lightbox-caption"></div>
</div>

<script>
function openLightbox(src, caption) {
    document.getElementById('lightboxImg').src = src;
    document.getElementById('lightboxCaption').textContent = caption;
    document.getElementById('galleryLightbox').classList.add('active');
    document.body.style.overflow = 'hidden';
}

function closeLightbox() {
    document.getElementById('galleryLightbox').classList.remove('active');
    document.body.style.overflow = '';
}

document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closeLightbox();
});
</script>

<?php require_once 'includes/whatsapp-button.php'; ?>
<?php require_once 'includes/footer.php'; ?>
