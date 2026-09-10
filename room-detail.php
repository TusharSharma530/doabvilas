<?php 
$pageTitle = 'Room Details';

// Get room type from URL
$roomType = isset($_GET['room']) ? $_GET['room'] : 'premium';

// Room data
$rooms = [
    'premium' => [
        'name' => 'Premium Rooms',
        'image' => 'assets/images/rooms/premium-rooms--Room.jpg',
        'images' => ['assets/images/rooms/premium-rooms--Room.jpg', 'assets/images/rooms/premium-rooms--Room (1).jpg', 'assets/images/rooms/premium-executive-rooms--Room.jpg'],
        'price' => '₹5,899',
        'size' => '350 sq ft',
        'guests' => '2 Guests',
        'bed' => 'King Bed'
    ],
    'premium-executive' => [
        'name' => 'Premium Executive Rooms',
        'image' => 'assets/images/rooms/premium-executive-rooms--Room.jpg',
        'images' => ['assets/images/rooms/premium-executive-rooms--Room.jpg', 'assets/images/rooms/premium-rooms--Room.jpg', 'assets/images/rooms/premium-rooms--Room (1).jpg'],
        'price' => '₹6,350',
        'size' => '400 sq ft',
        'guests' => '2 Guests',
        'bed' => 'King Bed'
    ],
    'premium-junior-suite' => [
        'name' => 'Premium Junior Suite Rooms',
        'image' => 'assets/images/rooms/Premium-Junior-Suites-rooms--Room.jpg',
        'images' => ['assets/images/rooms/Premium-Junior-Suites-rooms--Room.jpg', 'assets/images/rooms/Premium-Suites--Room.jpg', 'assets/images/rooms/premium-rooms--Room.jpg'],
        'price' => '₹7,070',
        'size' => '500 sq ft',
        'guests' => '3 Guests',
        'bed' => 'King Bed + Sofa'
    ],
    'premium-suite' => [
        'name' => 'Premium Suites',
        'image' => 'assets/images/rooms/Premium-Suites--Room.jpg',
        'images' => ['assets/images/rooms/Premium-Suites--Room.jpg', 'assets/images/rooms/Premium-Junior-Suites-rooms--Room.jpg', 'assets/images/rooms/premium-rooms--Room.jpg'],
        'price' => '₹7,249',
        'size' => '600 sq ft',
        'guests' => '4 Guests',
        'bed' => 'King Bed + Living Area'
    ]
];

$room = isset($rooms[$roomType]) ? $rooms[$roomType] : $rooms['premium'];

require_once 'includes/header.php'; 
require_once 'includes/navbar.php'; 
?>

<!-- Page Hero - Full Width Room Banner -->
<section class="room-detail-hero" style="background-image: url('<?php echo $room['image']; ?>');">
    <div class="room-detail-overlay"></div>
    <div class="container">
        <div class="room-detail-hero-content">
            <div class="room-detail-left">
                <h1 class="room-detail-title"><?php echo $room['name']; ?></h1>
            </div>
            <div class="room-detail-center">
                <a href="#" class="room-gallery-btn">
                    <i class="bi bi-grid-3x3-gap"></i>
                    <span>Room Gallery</span>
                </a>
            </div>
            <div class="room-detail-right">
                <div class="room-rates-box">
                    <h4 class="rates-title">RATES PER NIGHT</h4>
                    <div class="rates-deal">
                        <span class="deal-dot"></span>
                        <span>HotDeal</span>
                    </div>
                </div>
                <div class="room-occupancy">
                    <div class="occupancy-item">
                        <span class="occupancy-label">Single Occupancy</span>
                        <span class="occupancy-price"><?php echo $room['price']; ?></span>
                        <span class="occupancy-note">Excluding Taxes</span>
                    </div>
                    <div class="occupancy-item">
                        <span class="occupancy-label">Double Occupancy</span>
                        <span class="occupancy-price"><?php echo $room['price']; ?></span>
                        <span class="occupancy-note">Excluding Taxes</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Room Details -->
<section class="section-padding">
    <div class="container">
        <div class="row g-5">
            <!-- Room Gallery -->
            <div class="col-lg-7">
                <img src="<?php echo $room['images'][0]; ?>" alt="<?php echo $room['name']; ?>" class="img-fluid rounded mb-4" loading="lazy">
                <div class="row g-3">
                    <div class="col-4">
                        <img src="<?php echo $room['images'][1]; ?>" alt="Room View" class="img-fluid rounded" loading="lazy">
                    </div>
                    <div class="col-4">
                        <img src="<?php echo $room['images'][2]; ?>" alt="Bathroom" class="img-fluid rounded" loading="lazy">
                    </div>
                    <div class="col-4">
                        <img src="<?php echo $room['images'][0]; ?>" alt="Amenities" class="img-fluid rounded" loading="lazy">
                    </div>
                </div>
            </div>
            
            <!-- Room Info -->
            <div class="col-lg-5">
                <span class="section-subtitle">Room Category</span>
                <h2 class="section-title"><?php echo $room['name']; ?></h2>
                
                <div class="d-flex align-items-center mb-4">
                    <span class="room-price me-3" style="position: static; font-size: 1.3rem;"><?php echo $room['price']; ?></span>
                    <span class="text-muted">per night</span>
                </div>
                
                <p>Experience luxury and comfort in our elegantly designed <?php echo $room['name']; ?>. Spanning <?php echo $room['size']; ?>, these rooms feature modern amenities and stunning views.</p>
                
                <h5 class="mt-4 mb-3">Room Features</h5>
                <div class="row mb-4">
                    <div class="col-6">
                        <p><i class="bi bi-arrows-fullscreen text-gold me-2"></i> <?php echo $room['size']; ?></p>
                    </div>
                    <div class="col-6">
                        <p><i class="bi bi-person text-gold me-2"></i> <?php echo $room['guests']; ?></p>
                    </div>
                    <div class="col-6">
                        <p><i class="bi bi-bed text-gold me-2"></i> <?php echo $room['bed']; ?></p>
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
