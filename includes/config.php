<?php
/**
 * Doab Vilas - Site Configuration
 */

// Site Info
define('SITE_NAME', 'Doab Vilas');
define('SITE_TAGline', 'Premium Luxury Destination');
define('SITE_URL', 'https://www.doabvilas.com');
define('SITE_EMAIL', 'info@doabvilas.com');
define('SITE_PHONE', '+91 98765 43210');
define('SITE_WHATSAPP', '919876543210');
define('SITE_ADDRESS', '123 Luxury Avenue, City Center');

// Asset Paths
define('ASSETS_URL', 'assets/');
define('CSS_URL', ASSETS_URL . 'css/');
define('JS_URL', ASSETS_URL . 'js/');
define('IMAGES_URL', ASSETS_URL . 'images/');
define('FONTS_URL', ASSETS_URL . 'fonts/');

// Colors (for reference)
// --dv-green: #17352D;
// --dv-dark: #202522;
// --dv-gold: #C9A96A;
// --dv-ivory: #F5F0E7;
// --dv-beige: #D9CDBB;
// --dv-white: #FFFFFF;

// Helper Functions
function getCurrentPage() {
    $page = basename($_SERVER['PHP_SELF'], '.php');
    return $page === 'index' ? 'home' : $page;
}

function isActivePage($page) {
    return getCurrentPage() === $page ? 'active' : '';
}

function assetPath($path) {
    return ASSETS_URL . $path;
}

function imageUrl($folder, $filename) {
    return IMAGES_URL . $folder . '/' . $filename;
}
?>
