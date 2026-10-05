<?php require_once __DIR__ . '/../manager/database/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php

    // Most specific first: the router already resolved a sub-category or
    // child page into $metaTitle, then the category row from the admin
    // panel, and only then whatever the page file set by hand.
    $dbMeta = pageMeta();

    $pageMetaTitle = !empty($metaTitle)
        ? $metaTitle
        : ($dbMeta['title'] !== ''
            ? $dbMeta['title'] . ' | ' . SITE_NAME
            : (isset($pageTitle) && $pageTitle !== '' && strtolower($pageTitle) !== 'home'
                ? $pageTitle . ' | ' . SITE_NAME
                : SITE_NAME . ' | ' . SITE_TAGline));
    $pageMetaDesc = !empty($metaDesc)
        ? $metaDesc
        : ($dbMeta['desc'] !== ''
            ? $dbMeta['desc']
            : SITE_NAME . ' - ' . SITE_TAGline);
    ?>
    <meta name="description" content="<?php echo htmlspecialchars($pageMetaDesc); ?>">
    <?php if(!empty($metaKeywords)){ ?>
    <meta name="keywords" content="<?php echo htmlspecialchars($metaKeywords); ?>">
    <?php } ?>
    <title><?php echo htmlspecialchars($pageMetaTitle); ?></title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Lato:wght@300;400;700&family=Cinzel:wght@400;500&family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo CSS_URL; ?>style.css">
    <link rel="stylesheet" href="<?php echo CSS_URL; ?>responsiveness.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>
<body>
<?php require_once __DIR__ . '/navbar.php'; ?>

<!-- Image Lightbox (shared by every page) -->
<div id="galleryLightbox" class="gallery-lightbox" onclick="closeLightbox()">
    <span class="lightbox-close" onclick="closeLightbox()">&times;</span>
    <img id="lightboxImg" src="" alt="">
    <div id="lightboxCaption" class="lightbox-caption"></div>
</div>
