<?php 
$pageTitle = 'About Us - Doab Vilas Luxury Resort, Meerut';
require_once 'includes/header.php'; 
?>

<!-- Page Hero Banner -->
<div class="banner banner-rooms-suites banner_wedding banner_dining">
    <?php
$categoryQuery = mysqli_query(
    $con,
    "SELECT featured_img FROM category WHERE id = 69 LIMIT 1"
);

$categoryData = mysqli_fetch_assoc($categoryQuery);

$featuredImg = $categoryData['featured_img'] ?? '';
?>

<div class="bg overlay-top overlay-bottom">
    <?php if (!empty($featuredImg)) { ?>
        <img
            src="<?php echo $path . $featuredImg; ?>"
            alt="Doab Vilas"
            title="Doab Vilas"
            class="hero-bg-img"
        />
    <?php } ?>
</div>

    <div class="banner-container">
        <div class="container">
            <div class="content text-center">
                <div class="title">Welcome to</div>
                <h1>ABOUT US</h1>
                <div class="scrdown">
                    <a href="#aboutSection" aria-label="Scroll Down">
                        <i class="bi bi-chevron-down"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- About Content Section -->
<?php

$aboutQuery = mysqli_query(
    $con,
    "SELECT featured_img, c_name, c_desc 
     FROM category 
     WHERE id = 76 
     LIMIT 1"
);

$aboutData = mysqli_fetch_assoc($aboutQuery);

$aboutImage = $aboutData['featured_img'] ?? '';
$aboutName = $aboutData['c_name'] ?? '';
$aboutDesc = $aboutData['c_desc'] ?? '';

?>

<!-- About Content Section -->
<section id="aboutSection " class="about-us-section bg-white">
    <div class="container">
        <div class="row align-items-center " data-animate="fadeInUp" data-delay="0.2">

            <div class="col-lg-6">
                <div class="about-us-image">
                    <img
                        src="<?php echo $path . $aboutImage; ?>"
                        alt="Doab Vilas"
                        class="img-fluid"
                    >
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-us-content">
                    <span class="section-subtitle">Welcome to</span>

                    <h2 class="section-title">
                        <?php echo htmlspecialchars($aboutName); ?>
                    </h2>

                    <p class="about-us-text">
                        <?php echo $aboutDesc; ?>
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>


<?php

$legacyQuery = mysqli_query(
    $con,
    "SELECT c_desc, featured_img
     FROM category
     WHERE id = 81
     LIMIT 1"
);

$legacyData = mysqli_fetch_assoc($legacyQuery);

$legacyDesc = $legacyData['c_desc'] ?? '';
$legacyImage = $legacyData['featured_img'] ?? '';

?>

<!-- Our Legacy Section -->
<section class=" section-padding bg-ivory">
    <div class="container">
        <div class="section-header" data-animate="fadeInUp">
            <span class="section-subtitle">Our Heritage</span>
            <h2 class="section-title section-title-responsive">A LEGACY OF HOSPITALITY</h2>
        </div>

        <div class="row align-items-center g-5" data-animate="fadeInUp" data-delay="0.2">

            <div class="col-lg-6">
                <div class="discover-content">

                    <p class="discover-text">
                        <?php echo $legacyDesc; ?>
                    </p>

                    <p class="discover-text">
                        From our meticulously designed rooms to our world-class dining and event spaces, every detail has been thoughtfully curated to offer you an experience beyond compare. We believe in blending traditional Indian warmth with modern sophistication.
                    </p>

                </div>
            </div>

            <div class="col-lg-6">
                <div class="discover-image">

                    <img
                        src="<?php echo $path . $legacyImage; ?>"
                        alt="Doab Vilas Night View"
                        class="img-fluid"
                    >

                </div>
            </div>

        </div>
    </div>
</section>


<!-- Values Section -->
<section class="section-padding bg-white">
    <div class="container">
        <div class="section-header" data-animate="fadeInUp">
            <span class="section-subtitle">What We Stand For</span>
            <h2 class="section-title">OUR VALUES</h2>
        </div>

        <div class="row g-4" data-animate="fadeInUp" data-delay="0.2">

            <?php
            $valuesQuery = mysqli_query(
                $con,
                "SELECT c_name, c_desc, featured_img
                 FROM category
                 WHERE c_type = 2
                 ORDER BY `order` ASC"
            );

            if(mysqli_num_rows($valuesQuery)){

                while($value = mysqli_fetch_assoc($valuesQuery)){

                    $valueName = $value['c_name'] ?? '';
                    $valueDesc = $value['c_desc'] ?? '';
                    $valueImage = $value['featured_img'] ?? '';

                    $valueSvg = '';
                    if($valueImage !== '' && stripos($valueImage, '.svg') !== false){
                        $iconReal = realpath(__DIR__ . '/' . ltrim($valueImage, '/'));
                        $rootReal = realpath(__DIR__);
                        // Keep the read inside the project even if the DB path is tampered with.
                        if($iconReal !== false && $rootReal !== false && strpos($iconReal, $rootReal) === 0 && is_file($iconReal)){
                            $valueSvg = (string)@file_get_contents($iconReal);
                            $valueSvg = preg_replace('/<svg\b/', '<svg role="img" aria-label="'.htmlspecialchars($valueName, ENT_QUOTES).'"', $valueSvg, 1);
                        }
                    }
            ?>

            <div class="col-lg-4 col-md-6">
                <div class="feature-card">

                    <div class="feature-icon">
                        <?php if($valueSvg !== ''){
                            echo $valueSvg;
                        } elseif($valueImage !== ''){ ?>
                        <img
                            src="<?php echo htmlspecialchars($path . $valueImage); ?>"
                            alt="<?php echo htmlspecialchars($valueName); ?>"
                        >
                        <?php } ?>
                    </div>

                    <h4>
                        <?php echo htmlspecialchars($valueName); ?>
                    </h4>

                    <p>
                        <?php echo $valueDesc; ?>
                    </p>

                </div>
            </div>

            <?php
                }
            }
            ?>

        </div>
    </div>
</section>


<?php require_once 'includes/footer.php'; ?>
