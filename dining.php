
<?php

$pageTitle = 'Dine & Wine, Bar and Restaurants in Meerut, Uttar Pradesh, India';

require_once 'includes/header.php';
require_once 'includes/navbar.php';

?>

<div class="banner banner-rooms-suites banner_wedding banner_dining">

    <?php
    $dineHeroQuery = mysqli_query(
        $con,
        "SELECT featured_img FROM category WHERE id = 69 LIMIT 1"
    );

    $dineHeroData = mysqli_fetch_assoc($dineHeroQuery);
    $dineHeroImage = $dineHeroData['featured_img'] ?? '';
    ?>

    <div class="bg overlay-top overlay-bottom">
        <img
            src="<?php echo $path . $dineHeroImage; ?>"
            alt="Dine & Wine"
            title="Dine & Wine"
            class="hero-bg-img"
        />
    </div>

    <div class="banner-container">
        <div class="container">
            <div class="content text-center">

                <div class="title">
                    Experience . Unique . Personal
                </div>

                <h1>Dine & Wine</h1>

                <div class="scrdown">
                    <a href="#dineWineSection" aria-label="Scroll Down">
                        <i class="bi bi-chevron-down"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>

</div>

<?php
$highwayQuery = mysqli_query(
    $con,
    "SELECT featured_img, c_name, c_desc FROM category WHERE id = 71 LIMIT 1"
);

$highwayData = mysqli_fetch_assoc($highwayQuery);

$highwayImage = $highwayData['featured_img'] ?? '';
$highwayName  = $highwayData['c_name'] ?? '';
$highwayDesc  = $highwayData['c_desc'] ?? '';
?>

<!-- Highway Restaurant Section -->
<section class="highway-restaurant-section hwy-section">

    <div class="container-fluid p-0">

        <div class="row justify-content-center no-margin">

            <div class="col-12 p-0">

                <div class="border-radius-hidden">

                    <img
                        src="<?php echo $path . $highwayImage; ?>"
                        alt="<?php echo htmlspecialchars($highwayName); ?>"
                        class="full-cover-img"
                        loading="lazy"
                    >

                </div>

                <div class="text-center-pt">

                    <h2 class="heading-playfair">
                        <?php echo htmlspecialchars($highwayName); ?>
                    </h2>

                    <p class="text-lato">
                        <?php echo $highwayDesc; ?>
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<?php require_once 'includes/whatsapp-button.php'; ?>

<?php require_once 'includes/footer.php'; ?>
```