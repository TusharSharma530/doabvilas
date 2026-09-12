<?php
/**
 * Doab Vilas - Site Configuration
 */

// Site Info
define('SITE_NAME', 'Doab Vilas');
define('SITE_TAGline', 'Premium Luxury Destination');
define('SITE_URL', 'https://www.doabvilas.com');
define('SITE_EMAIL', 'reservations@doabvilas.com');
define('SITE_PHONE', '+91 98765 43210');
define('SITE_WHATSAPP', '919876543210');
define('SITE_ADDRESS', 'Meerut Bypass Rd, Sector - 3, Ansal\'s Sushant City, Meerut, Uttar Pradesh 250103, India');

// Social Media Links
define('SOCIAL_FACEBOOK', 'https://www.facebook.com/doabvilas');
define('SOCIAL_INSTAGRAM', 'https://www.instagram.com/doabvilas');
define('SOCIAL_YOUTUBE', 'https://www.youtube.com/@doabvilas');
define('SOCIAL_TWITTER', 'https://twitter.com/doabvilas');
define('SOCIAL_LINKEDIN', 'https://linkedin.com/company/doab-vilas');
define('SOCIAL_PINTEREST', 'https://in.pinterest.com/doabvilas/');

// Additional Details
define('SITE_ADDRESS_LINE1', 'Doab Vilas');
define('SITE_ADDRESS_LINE2', 'Meerut Bypass Rd, Sector - 3');
define('SITE_CITY', 'Meerut');
define('SITE_STATE', 'Uttar Pradesh');
define('SITE_PINCODE', '250103');
define('SITE_COUNTRY', 'India');
define('SITE_GOOGLE_MAP', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3606.1234567890!2d82.1234567!3d25.1234567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sPratapgarh!5e0!3m2!1sen!2sin!4v1234567890');

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
