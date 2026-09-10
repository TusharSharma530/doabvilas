<?php 
$pageTitle = 'Book Now';
require_once 'includes/header.php'; 
require_once 'includes/navbar.php'; 
?>

<!-- Page Hero -->
<section class="page-hero" style="background-image: url('assets/images/booking-hero.jpg');">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="page-hero-content">
            <span class="section-subtitle">Reservations</span>
            <h1 class="page-title">Book Your Stay</h1>
            <p class="page-text">Reserve your perfect room or suite today</p>
        </div>
    </div>
</section>

<!-- Booking Form -->
<section class="section-padding">
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
                                <input type="date" class="form-control" id="checkin" name="checkin" required>
                            </div>
                            
                            <!-- Check-out -->
                            <div class="col-md-6">
                                <label for="checkout" class="form-label">Check-out Date *</label>
                                <input type="date" class="form-control" id="checkout" name="checkout" required>
                            </div>
                            
                            <!-- Room Type -->
                            <div class="col-md-6">
                                <label for="room-type" class="form-label">Room Type *</label>
                                <select class="form-select" id="room-type" name="room-type" required>
                                    <option value="">Select Room Type</option>
                                    <optgroup label="Rooms">
                                        <option value="deluxe">Deluxe Room - ₹8,999/night</option>
                                        <option value="premium-room">Premium Room - ₹11,999/night</option>
                                    </optgroup>
                                    <optgroup label="Suites">
                                        <option value="premium-suite">Premium Suite - ₹14,999/night</option>
                                        <option value="executive-suite">Executive Suite - ₹19,999/night</option>
                                        <option value="presidential-suite">Presidential Suite - ₹29,999/night</option>
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
