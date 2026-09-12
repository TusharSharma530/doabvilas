<?php 
$pageTitle = 'Book Now';
require_once 'includes/header.php'; 
require_once 'includes/navbar.php';

$room = isset($_GET['room']) ? $_GET['room'] : '';
$check_in = isset($_GET['check_in']) ? $_GET['check_in'] : '';
$check_out = isset($_GET['check_out']) ? $_GET['check_out'] : '';

function convertDate($date) {
    if (empty($date)) return '';
    $parts = explode('/', $date);
    if (count($parts) === 3) {
        return $parts[2] . '-' . $parts[1] . '-' . $parts[0];
    }
    return $date;
}

$check_in = convertDate($check_in);
$check_out = convertDate($check_out);

$roomMap = [
    'luxury-delux-rooms' => 'deluxe',
    'premium-rooms' => 'premium-room',
    'premium-suite' => 'premium-suite',
    'executive-suite' => 'executive-suite',
    'presidential-suite' => 'presidential-suite'
];
$selectedRoom = isset($roomMap[$room]) ? $roomMap[$room] : '';
?>

<!-- Hero Banner -->
<div class="banner banner-rooms-suites banner_wedding banner_dining">
    <div class="bg overlay-top overlay-bottom">
        <img src="assets/images/rooms/room1.png" alt="Book Your Stay" title="Book Your Stay" class="hero-bg-img" />
    </div>
    <div class="banner-container">
        <div class="container">
            <div class="content text-center">
                <div class="title">Reservations</div>
                <h1>BOOK YOUR STAY</h1>
                <div class="scrdown">
                    <a href="#bookingSection" aria-label="Scroll Down">
                        <i class="bi bi-chevron-down"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Booking Form -->
<section class="section-padding" id="bookingSection">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="booking-form-wrapper p-4 p-md-5 rounded" style="background: var(--dv-white); box-shadow: var(--shadow-lg);">
                    <h2 class="section-title text-center mb-4">Make a Reservation</h2>
                    
                    <form data-validate>
                        <div class="row g-3">
                            <!-- Check-in -->
                            <div class="col-md-6">
                                <label for="checkin" class="form-label">Check-in Date *</label>
                                <input type="date" class="form-control" id="checkin" name="checkin" value="<?php echo htmlspecialchars($check_in); ?>" required>
                            </div>
                            
                            <!-- Check-out -->
                            <div class="col-md-6">
                                <label for="checkout" class="form-label">Check-out Date *</label>
                                <input type="date" class="form-control" id="checkout" name="checkout" value="<?php echo htmlspecialchars($check_out); ?>" required>
                            </div>
                            
                            <!-- Room Type -->
                            <div class="col-md-6">
                                <label for="room-type" class="form-label">Room Type *</label>
                                <select class="form-select" id="room-type" name="room-type" required>
                                    <option value="">Select Room Type</option>
                                    <optgroup label="Rooms">
                                        <option value="deluxe" <?php echo ($selectedRoom === 'deluxe') ? 'selected' : ''; ?>>Deluxe Room - ₹8,999/night</option>
                                        <option value="premium-room" <?php echo ($selectedRoom === 'premium-room') ? 'selected' : ''; ?>>Premium Room - ₹11,999/night</option>
                                    </optgroup>
                                    <optgroup label="Suites">
                                        <option value="premium-suite" <?php echo ($selectedRoom === 'premium-suite') ? 'selected' : ''; ?>>Premium Suite - ₹14,999/night</option>
                                        <option value="executive-suite" <?php echo ($selectedRoom === 'executive-suite') ? 'selected' : ''; ?>>Executive Suite - ₹19,999/night</option>
                                        <option value="presidential-suite" <?php echo ($selectedRoom === 'presidential-suite') ? 'selected' : ''; ?>>Presidential Suite - ₹29,999/night</option>
                                    </optgroup>
                                </select>
                            </div>
                            
                            <!-- Guests -->
                            <div class="col-md-6">
                                <label for="guests" class="form-label">Number of Guests *</label>
                                <select class="form-select" id="guests" name="guests" required>
                                    <option value="1">1 Guest</option>
                                    <option value="2" selected>2 Guests</option>
                                    <option value="3">3 Guests</option>
                                    <option value="4">4 Guests</option>
                                </select>
                            </div>
                            
                            <!-- Full Name -->
                            <div class="col-md-6">
                                <label for="fullname" class="form-label">Full Name *</label>
                                <input type="text" class="form-control" id="fullname" name="fullname" required>
                            </div>
                            
                            <!-- Email -->
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email Address *</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            
                            <!-- Phone -->
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone Number *</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required>
                            </div>
                            
                            <!-- Special Requests -->
                            <div class="col-md-6">
                                <label for="requests" class="form-label">Special Requests</label>
                                <input type="text" class="form-control" id="requests" name="requests" placeholder="e.g., Early check-in, Extra pillows">
                            </div>
                            
                            <!-- Submit -->
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-gold w-100 py-3">Check Availability</button>
                            </div>
                        </div>
                    </form>
                    
                    <div class="text-center mt-4">
                        <p class="text-muted mb-2">Need assistance? Contact us directly:</p>
                        <a href="tel:<?php echo SITE_PHONE; ?>" class="btn btn-outline-gold">
                            <i class="bi bi-telephone me-2"></i><?php echo SITE_PHONE; ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/whatsapp-button.php'; ?>
<?php require_once 'includes/footer.php'; ?>
