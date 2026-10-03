<?php 
$pageTitle = 'Halls - Doab Vilas Luxury Resort, Meerut';
require_once 'includes/header.php'; 
?>

<!-- Hero Banner -->
<?php
$query = "SELECT featured_img FROM category WHERE id = 72 LIMIT 1";
$result = mysqli_query($con, $query);

$featured_img = '';
if ($result && mysqli_num_rows($result)) {
    $category = mysqli_fetch_assoc($result);
    if (!empty($category['featured_img'])) {
        $featured_img = $category['featured_img'];
    }
}
?>

<div class="banner banner-rooms-suites banner_wedding banner_dining"> 
    <div class="bg overlay-top overlay-bottom"> 
        <img src="<?= htmlspecialchars($featured_img) ?>" 
             alt="Halls & Venues" 
             title="Halls & Venues" 
             class="hero-bg-img" /> 
    </div> 

    <div class="banner-container"> 
        <div class="container"> 
            <div class="content text-center"> 
                <div class="title">Our Venues</div> 
                <h1>HALLS & SPACES</h1> 

                <div class="scrdown"> 
                    <a href="#venuesSection" aria-label="Scroll Down"> 
                        <i class="bi bi-chevron-down"></i> 
                    </a> 
                </div> 
            </div> 
        </div> 
    </div> 
</div>

<!-- 1. Diamond Hall Section (50-100) -->
<?php
// Fetch halls
$hallsQuery = "SELECT file, title, subtitle, description FROM halls ORDER BY id ASC";
$hallsResult = mysqli_query($con, $hallsQuery);

if (!$hallsResult) {
    die("Halls query failed: " . mysqli_error($con));
}

$hallIndex = 0;
?>

<?php while ($hall = mysqli_fetch_assoc($hallsResult)): ?>

    <?php
    // Alternate section background
    $bgClass = ($hallIndex % 2 === 0) ? 'bg-white' : 'bg-ivory';

    // Alternate image position
    // Even: content left, image right
    // Odd: image left, content right
    $imageFirst = ($hallIndex % 2 !== 0);

    // Image path
    $hallImage = $hall['file'] ?? '';

    // If database stores only filename, use this:
    if (!empty($hallImage) && !str_contains($hallImage, '/')) {
        $hallImage = 'assets/images/rooms/' . $hallImage;
    }

    // Fallback image
    if (empty($hallImage)) {
        $hallImage = 'assets/images/default-banner.jpg';
    }
    ?>

    <section
        <?= $hallIndex === 0 ? 'id="venuesSection"' : '' ?>
        class="discover-section section-padding <?= $bgClass ?>"
    >
        <div class="container">
            <div
                class="row align-items-center"
                data-animate="fadeInUp"
                data-delay="0.2"
            >

                <?php if ($imageFirst): ?>

                    <!-- Image Left -->
                    <div class="col-lg-6">
                        <div class="discover-image">
                            <img
                                src="<?= htmlspecialchars($hallImage, ENT_QUOTES, 'UTF-8') ?>"
                                alt="<?= htmlspecialchars($hall['title'] ?? 'Venue', ENT_QUOTES, 'UTF-8') ?>"
                                class="img-fluid"
                                loading="lazy"
                            >
                        </div>
                    </div>

                    <!-- Content Right -->
                    <div class="col-lg-6">
                        <div class="discover-content">

                            <?php if (!empty($hall['subtitle'])): ?>
                                <span class="section-subtitle">
                                    <?= htmlspecialchars($hall['subtitle'], ENT_QUOTES, 'UTF-8') ?>
                                </span>
                            <?php endif; ?>

                            <h3 class="discover-heading">
                                <?= htmlspecialchars($hall['title'] ?? '', ENT_QUOTES, 'UTF-8') ?>
                            </h3>

                            <?php if (!empty($hall['description'])): ?>
                                <p class="discover-text">
                                    <?= nl2br(htmlspecialchars($hall['description'], ENT_QUOTES, 'UTF-8')) ?>
                                </p>
                            <?php endif; ?>

                        </div>
                    </div>

                <?php else: ?>

                    <!-- Content Left -->
                    <div class="col-lg-6">
                        <div class="discover-content">

                            <?php if (!empty($hall['subtitle'])): ?>
                                <span class="section-subtitle">
                                    <?= htmlspecialchars($hall['subtitle'], ENT_QUOTES, 'UTF-8') ?>
                                </span>
                            <?php endif; ?>

                            <h3 class="discover-heading">
                                <?= htmlspecialchars($hall['title'] ?? '', ENT_QUOTES, 'UTF-8') ?>
                            </h3>

                            <?php if (!empty($hall['description'])): ?>
                                <p class="discover-text">
                                    <?= nl2br(htmlspecialchars($hall['description'], ENT_QUOTES, 'UTF-8')) ?>
                                </p>
                            <?php endif; ?>

                        </div>
                    </div>

                    <!-- Image Right -->
                    <div class="col-lg-6">
                        <div class="discover-image">
                            <img
                                src="<?= htmlspecialchars($hallImage, ENT_QUOTES, 'UTF-8') ?>"
                                alt="<?= htmlspecialchars($hall['title'] ?? 'Venue', ENT_QUOTES, 'UTF-8') ?>"
                                class="img-fluid"
                                loading="lazy"
                            >
                        </div>
                    </div>

                <?php endif; ?>

            </div>
        </div>
    </section>

    <?php $hallIndex++; ?>

<?php endwhile; ?>

<?php require_once 'includes/whatsapp-button.php'; ?>
<?php require_once 'includes/footer.php'; ?>
