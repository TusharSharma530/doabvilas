<?php 
$pageTitle = 'Room Details';
require_once 'includes/header.php'; 
require_once 'includes/navbar.php'; 
?>

<!-- Page Hero -->
<section class="page-hero" style="background-image: url('assets/images/rooms/room-detail-hero.jpg');">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="page-hero-content">
            <span class="section-subtitle">Accommodation</span>
            <h1 class="page-title">Deluxe Room</h1>
            <p class="page-text">Spacious comfort with modern amenities</p>
        </div>
    </div>
</section>

<!-- Room Details -->
<section class="section-padding">
    <div class="container">
        <div class="row g-5">
            <!-- Room Gallery -->
            <div class="col-lg-7">
                <img src="assets/images/rooms/deluxe-main.jpg" alt="Deluxe Room" class="img-fluid rounded mb-4" loading="lazy">
                <div class="row g-3">
                    <div class="col-4">
                        <img src="assets/images/rooms/deluxe-thumb1.jpg" alt="Room View" class="img-fluid rounded" loading="lazy">
                    </div>
                    <div class="col-4">
                        <img src="assets/images/rooms/deluxe-thumb2.jpg" alt="Bathroom" class="img-fluid rounded" loading="lazy">
                    </div>
                    <div class="col-4">
                        <img src="assets/images/rooms/deluxe-thumb3.jpg" alt="Amenities" class="img-fluid rounded" loading="lazy">
                    </div>
                </div>
            </div>
            
            <!-- Room Info -->
            <div class="col-lg-5">
                <span class="section-subtitle">Room Category</span>
                <h2 class="section-title">Deluxe Room</h2>
                
                <div class="d-flex align-items-center mb-4">
                    <span class="room-price me-3" style="position: static; font-size: 1.3rem;">₹8,999</span>
                    <span class="text-muted">per night</span>
                </div>
                
                <p>Experience luxury and comfort in our elegantly designed Deluxe Rooms. Spanning 350 sq ft, these rooms feature modern amenities and stunning city views.</p>
                
                <h5 class="mt-4 mb-3">Room Features</h5>
                <div class="row mb-4">
                    <div class="col-6">
                        <p><i class="bi bi-arrows-fullscreen text-gold me-2"></i> 350 sq ft</p>
                    </div>
                    <div class="col-6">
                        <p><i class="bi bi-person text-gold me-2"></i> 2 Guests</p>
                    </div>
                    <div class="col-6">
                        <p><i class="bi bi-bed text-gold me-2"></i> King Bed</p>
                    </div>
                    <div class="col-6">
                        <p><i class="bi bi-wifi text-gold me-2"></i> Free Wi-Fi</p>
                    </div>
                </div>
                
                <h5 class="mb-3">Amenities</h5>
                <ul class="list-unstyled mb-4">
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-gold me-2"></i> Air Conditioning</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-gold me-2"></i> Flat Screen TV</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-gold me-2"></i> Mini Bar</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-gold me-2"></i> In-room Safe</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-gold me-2"></i> 24/7 Room Service</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-gold me-2"></i> Premium Toiletries</li>
                </ul>
                
                <a href="booking.php" class="btn btn-gold w-100">Book This Room</a>
                
                <div class="text-center mt-3">
                    <a href="tel:<?php echo SITE_PHONE; ?>" class="text-decoration-none">
                        <i class="bi bi-telephone text-gold me-2"></i>Call to Book
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Similar Rooms -->
<section class="section-padding" style="background-color: var(--dv-ivory);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Similar Rooms</h2>
        </div>
        <div class="row g-4">
            <!-- Similar room cards will be added here -->
        </div>
    </div>
</section>

<?php require_once 'includes/whatsapp-button.php'; ?>
<?php require_once 'includes/footer.php'; ?>
