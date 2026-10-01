<?php 
$pageTitle = 'Rooms & Suites, Luxury Hotels and Resorts, Accommodation in Meerut';
require_once 'includes/header.php'; 
require_once 'includes/navbar.php'; 
?>

// Page Hero Banner
    <div class="banner banner-rooms-suites">
        <?php
    $roomHeroQuery = mysqli_query(
        $con,
        "SELECT featured_img FROM category WHERE id = 86 LIMIT 1"
    );

    $roomHeroData = mysqli_fetch_assoc($roomHeroQuery);
    $roomHeroImage = $roomHeroData['featured_img'] ?? '';
    ?>

    <div class="bg overlay-top overlay-bottom">
        <img
            src="<?php echo $path . $roomHeroImage; ?>"
            alt="Rooms & Suites"
            title="Rooms & Suites"
            class="hero-bg-img"
        />
    </div>

    <div class="banner-container">
        <div class="container">
            <div class="content text-center">
                <div class="title">Exclusive</div>
                <h1>ROOMS & SUITES</h1>
                <div class="scrdown">
                    <a href="#roomsListingSection" aria-label="Scroll Down">
                        <i class="bi bi-chevron-down"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="rooms-suites-section section-padding" id="roomsListingSection">
    <div class="container">

        <div class="section-header text-center mb-5">
            <h2 class="section-title section-title-responsive">
                Luxury Delux Rooms
            </h2>
        </div>

        <div class="row g-4">

            <?php
            $roomsQuery = mysqli_query($con, "SELECT id, file, title, ordering, status, description FROM rooms WHERE status = 1 ORDER BY ordering ASC");
            if(mysqli_num_rows($roomsQuery)){

                while($room = mysqli_fetch_assoc($roomsQuery)){

                    $roomTitle = $room['title'] ?? '';
                    $roomImage = $room['file'] ?? '';
                    $roomDescription = $room['description'] ?? '';

                    $roomImagePath = $path . $roomImage;
            ?>

            <div class="col-lg-6">

                <div
                    class="wedding-grid-card"
                    onclick="openLightbox(
                        '<?php echo htmlspecialchars($roomImagePath, ENT_QUOTES); ?>',
                        '<?php echo htmlspecialchars($roomTitle, ENT_QUOTES); ?>'
                    )"
                >

                    <div class="wedding-grid-img">

                        <img
                            src="<?php echo htmlspecialchars($roomImagePath); ?>"
                            alt="<?php echo htmlspecialchars($roomTitle); ?>"
                            title="<?php echo htmlspecialchars($roomTitle); ?>"
                            class="img-fluid"
                            loading="lazy"
                        />

                    </div>

                    <div class="wedding-grid-content">

                        <p class="wedding-grid-text">
                            <?php echo $roomDescription; ?>
                        </p>

                    </div>

                </div>

            </div>

            <?php
                }

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
