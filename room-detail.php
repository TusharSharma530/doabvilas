<?php 
// Normalization of room parameter
$rawRoom = isset($_GET['room']) ? strtolower(trim($_GET['room'])) : 'premium';

$aliasMap = [
    'premium' => 'premium',
    'premium-room' => 'premium',
    'premium-rooms' => 'premium',
    'executive' => 'premium-executive',
    'premium-executive' => 'premium-executive',
    'premium-executive-rooms' => 'premium-executive',
    'junior-suite' => 'premium-junior-suite',
    'premium-junior-suite' => 'premium-junior-suite',
    'premium-junior-suites-rooms' => 'premium-junior-suite',
    'suite' => 'premium-suite',
    'premium-suite' => 'premium-suite',
    'premium-suites' => 'premium-suite'
];

$currentRoomKey = isset($aliasMap[$rawRoom]) ? $aliasMap[$rawRoom] : 'premium';

// Full Room Data Dictionary (High Resolution Images)
$rooms = [
    'premium' => [
        'id' => 'premium',
        'key' => 'premium',
        'name' => 'Premium Rooms',
        'tagline' => 'Luxurious Accommodations',
        'image' => 'assets/images/rooms/premium-rooms.jpg',
        'gallery' => [
            'assets/images/rooms/premium-rooms.jpg',
            'assets/images/rooms/Premium-Rooms-1_4541.JPG',
            'assets/images/rooms/Premium-Rooms-4_4561.JPG',
            'assets/images/rooms/premium-executive-rooms.jpg'
        ],
        'price' => '5,899',
        'price_num' => 5899,
        'single_price' => '5,000',
        'single_price_num' => 5000,
        'double_price' => '5,899',
        'double_price_num' => 5000,
        'tax' => '250',
        'tax_num' => 250,
        'size' => '350 sq ft',
        'guests' => '2 Guests',
        'bed' => 'Double Bed',
        'description' => 'Our premium rooms are perfect for leisure stay. Luxury rooms with Double Bed, Arm Chairs. Extra Bed and Breakfast will be additional and will be charged by hotel at the time of Checkin.',
        'facilities' => [
            'bedroom' => [
                'Bedroom with Double Bed',
                'Alarm Clock',
                'Slim LED TV',
                'Phone with speaker',
                'Hand Paintings',
                'Work Desk with Chair & Lamp',
                'Coffee/tea makers',
                'Free in room Wi-Fi',
                'Refreshments',
                'Mini-Bar',
                'Mini-refrigerator',
                'Glassware, Cups & Plates'
            ],
            'personal_care' => [
                'Shower Cabin',
                'Hairdryer',
                'Bathrobe',
                'Mirror Magnifier',
                'Weighing Scale',
                'Phone'
            ],
            'entertainment' => [
                'Cable / Satellite TV',
                'Flat LCD in Bedroom & Living Room',
                'CD/DVD player (on request)'
            ],
            'miscellaneous' => [
                'In-Room safe',
                'Iron / Ironing Board',
                'Air Conditioner Controller',
                'Fire / Smoke Alarm (Nonsmoking Rooms)'
            ]
        ],
        'tour_360' => 'https://www.bravuraresort.com/360/index.html?startscene=7'
    ],
    'premium-executive' => [
        'id' => 'premium-executive',
        'key' => 'premium-executive',
        'name' => 'Premium Executive Rooms',
        'tagline' => 'Executive Comfort & Elegance',
        'image' => 'assets/images/rooms/premium-executive-rooms.jpg',
        'gallery' => [
            'assets/images/rooms/premium-executive-rooms.jpg',
            'assets/images/rooms/premium-rooms.jpg',
            'assets/images/rooms/Premium-Rooms-1_4541.JPG',
            'assets/images/rooms/Premium-Suites.jpg'
        ],
        'price' => '6,350',
        'price_num' => 6350,
        'single_price' => '5,800',
        'single_price_num' => 5800,
        'double_price' => '6,350',
        'double_price_num' => 6350,
        'tax' => '300',
        'tax_num' => 300,
        'size' => '420 sq ft',
        'guests' => '2 Guests',
        'bed' => 'King Bed',
        'description' => 'Our Premium Executive rooms offer a refined blend of modern luxury and spacious comfort. Designed specifically for executives and couples seeking superior hospitality and peaceful relaxation.',
        'facilities' => [
            'bedroom' => [
                'Bedroom with Plush King Bed',
                'Executive Work Desk with Lamp',
                'Smart 43" LED TV',
                'Direct-Dial Telephone with Speaker',
                'Contemporary Artwork & Decor',
                'Tea & Coffee Brewing Station',
                'High-Speed In-Room Wi-Fi',
                'Complimentary Refreshment Basket',
                'Stocked Mini-Bar',
                'Compact Refrigerator',
                'Imported Glassware & Crockery'
            ],
            'personal_care' => [
                'Glass Shower Cubicle',
                'High-Power Hairdryer',
                'Premium Bathrobe & Slippers',
                'Lighted Magnifying Mirror',
                'Digital Weighing Scale',
                'Bathroom Telephone Extension'
            ],
            'entertainment' => [
                'Satellite & Cable HD TV',
                'Wall-Mounted LED in Bedroom',
                'Bluetooth Audio Connectivity'
            ],
            'miscellaneous' => [
                'Digital Safe Deposit Box',
                'Steam Iron & Ironing Board',
                'Individual Climate Control',
                'Smoke & Fire Detection (Non-Smoking)'
            ]
        ],
        'tour_360' => 'https://www.bravuraresort.com/360/index.html?startscene=7'
    ],
    'premium-junior-suite' => [
        'id' => 'premium-junior-suite',
        'key' => 'premium-junior-suite',
        'name' => 'Premium Junior Suite Rooms',
        'tagline' => 'Spacious Indulgence',
        'image' => 'assets/images/rooms/Premium-Junior-Suites-rooms.jpg',
        'gallery' => [
            'assets/images/rooms/Premium-Junior-Suites-rooms.jpg',
            'assets/images/rooms/Premium-Suites.jpg',
            'assets/images/rooms/premium-rooms.jpg',
            'assets/images/rooms/premium-executive-rooms.jpg'
        ],
        'price' => '7,070',
        'price_num' => 7070,
        'single_price' => '6,500',
        'single_price_num' => 6500,
        'double_price' => '7,070',
        'double_price_num' => 7070,
        'tax' => '350',
        'tax_num' => 350,
        'size' => '520 sq ft',
        'guests' => '3 Guests',
        'bed' => 'King Bed + Sofa Bed',
        'description' => 'Our Junior Suite rooms combine expansive living spaces with lavish interiors. Featuring a master bedroom and dedicated lounge area, ideal for families and guests seeking extra grandeur.',
        'facilities' => [
            'bedroom' => [
                'Master King Bed + Cozy Sofa Cum Bed',
                'Alarm Clock with Dock',
                'Smart 50" LED TV',
                'Multi-Line Speakerphone',
                'Artisan Hand Paintings',
                'Spacious Workstation with Lamp',
                'Espresso & Tea Maker',
                'Complimentary High-Speed Wi-Fi',
                'Gourmet Refreshments Tray',
                'Private Mini-Bar',
                'Refrigerator & Chiller',
                'Premium Glassware & Tea Set'
            ],
            'personal_care' => [
                'Deluxe Shower Cabin',
                'Professional Ionic Hairdryer',
                'Luxury Bathrobes & Towels',
                'Illuminated Magnifier Mirror',
                'Electronic Weighing Scale',
                'Designer Bathroom Amenities'
            ],
            'entertainment' => [
                'Full Satellite HD Channels',
                'Smart LED in Bedroom & Lounge',
                'Surround Sound & Media Hub'
            ],
            'miscellaneous' => [
                'Large Laptop-Sized In-Room Safe',
                'Full Ironing Set & Garment Care',
                'Dual-Zone Air Conditioning',
                'Advanced Fire Alarm & Sprinkler System'
            ]
        ],
        'tour_360' => 'https://www.bravuraresort.com/360/index.html?startscene=7'
    ],
    'premium-suite' => [
        'id' => 'premium-suite',
        'key' => 'premium-suite',
        'name' => 'Premium Suites',
        'tagline' => 'The Pinnacle of Luxury',
        'image' => 'assets/images/rooms/Premium-Suites.jpg',
        'gallery' => [
            'assets/images/rooms/Premium-Suites.jpg',
            'assets/images/rooms/Premium-Junior-Suites-rooms.jpg',
            'assets/images/rooms/premium-executive-rooms.jpg',
            'assets/images/rooms/premium-rooms.jpg'
        ],
        'price' => '7,249',
        'price_num' => 7249,
        'single_price' => '6,800',
        'single_price_num' => 6800,
        'double_price' => '7,249',
        'double_price_num' => 7249,
        'tax' => '400',
        'tax_num' => 400,
        'size' => '650 sq ft',
        'guests' => '4 Guests',
        'bed' => 'Royal King Bed + Separate Living Lounge',
        'description' => 'The ultimate expression of hospitality at Doab Vilas. Our palatial Premium Suites feature separate master bedroom and royal living room, panoramic resort views, and bespoke personalized service.',
        'facilities' => [
            'bedroom' => [
                'Royal King Bed with Feather Pillowtop',
                'Separate Living Room & Dining Lounge',
                'Twin 55" Smart 4K LED TVs',
                'Speakerphone with Voicemail',
                'Heritage Paintings & Brass Accents',
                'Executive Study Desk & Chair',
                'Nespresso Machine & Tea Station',
                'Dedicated High-Speed Wi-Fi',
                'Welcome Fruit & Wine Basket',
                'Fully Stocked Premium Bar',
                'Mini Refrigerator with Freezers',
                'Crystal Glassware & Fine China'
            ],
            'personal_care' => [
                'Deep Soaking Bathtub & Shower Enclosure',
                'Salon-Grade Hairdryer',
                'Silk-Trimmed Bathrobes & Slippers',
                'LED Vanity Magnifying Mirror',
                'Precision Weighing Scale',
                'Luxury Herbal Toiletries Set'
            ],
            'entertainment' => [
                'Smart 4K TVs in Bedroom & Living Hall',
                'Streaming Apps & Satellite HD',
                'Hi-Fi Bluetooth Sound System'
            ],
            'miscellaneous' => [
                'Master Electronic Safe',
                'Full Size Iron & Ironing Board',
                'Automated Climate Control',
                'Multi-Point Fire & Smoke Safety'
            ]
        ],
        'tour_360' => 'https://www.bravuraresort.com/360/index.html?startscene=7'
    ]
];

$room = $rooms[$currentRoomKey];
$pageTitle = $room['name'];

require_once 'includes/header.php'; 
require_once 'includes/navbar.php'; 
?>


<!-- ==========================================
     HERO BANNER - EXACT BRAVURA RESORT STYLE
     ========================================== -->
<div class="banner banner-suitesDetail bannerRoomDetails">
    <div class="bg overlay-top overlay-bottom">
        <img src="<?php echo $room['image']; ?>" alt="<?php echo htmlspecialchars($room['name']); ?>" title="<?php echo htmlspecialchars($room['name']); ?>" class="hero-bg-img" />
    </div>
    
    <div class="banner-container">
        <div class="container-fluid px-3 px-lg-5">
            <div class="hero-bar-row">
                <!-- 1. Room Title (Luxia Font) -->
                <div class="hero-bar-title-col">
                    <h1 class="hero-room-heading"><?php echo $room['name']; ?></h1>
                </div>
                
                <!-- Right Group: Gallery, Rates, Occupancies -->
                <div class="hero-bar-right-group">
                    <!-- 2. Room Gallery -->
                    <div class="hero-bar-gallery-col">
                        <a href="javascript:void(0);" class="hero-gallery-btn" data-bs-toggle="modal" data-bs-target="#roomGalleryModal">
                            <div class="gallery-bed-icon">
                                <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="23" cy="23" r="22" stroke="rgba(255,255,255,0.85)" stroke-width="1.5"/>
                                    <path d="M13 28V18C13 16.8954 13.8954 16 15 16H31C32.1046 16 33 16.8954 33 18V28" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                                    <rect x="16" y="19" width="6" height="4" rx="1" stroke="white" stroke-width="1.2"/>
                                    <rect x="24" y="19" width="6" height="4" rx="1" stroke="white" stroke-width="1.2"/>
                                    <path d="M12 25.5H34" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                                    <path d="M14 25.5V30M32 25.5V30" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                                </svg>
                            </div>
                            <span class="gallery-btn-text">Room Gallery</span>
                        </a>
                    </div>
                    
                    <!-- 3. Vertical Divider Line -->
                    <div class="hero-bar-divider"></div>
                    
                    <!-- 4. Rates Per Night -->
                    <div class="hero-bar-rates-col">
                        <span class="rates-heading">RATES PER NIGHT</span>
                        <div class="rates-deal-option">
                            <span class="deal-custom-radio"><span class="radio-inner-dot"></span></span>
                            <span class="deal-text">HotDeal</span>
                        </div>
                    </div>
                    
                    <!-- 5. Tall Sleek Gold Chevron -->
                    <div class="hero-bar-arrow-col">
                        <svg width="14" height="44" viewBox="0 0 14 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.5 2L11.5 22L1.5 42" stroke="#C9A96A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    
                    <!-- 6. Single Occupancy -->
                    <div class="hero-bar-occupancy-col">
                        <span class="occ-label">Single Occupancy</span>
                        <div class="occ-price-val"><span class="rupee-sym">₹</span> <?php echo $room['single_price_num']; ?></div>
                        <span class="occ-tax-note">Excluding Taxes</span>
                    </div>
                    
                    <!-- 7. Double Occupancy -->
                    <div class="hero-bar-occupancy-col">
                        <span class="occ-label">Double Occupancy</span>
                        <div class="occ-price-val"><span class="rupee-sym">₹</span> <?php echo $room['double_price_num']; ?></div>
                        <span class="occ-tax-note">Excluding Taxes</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="SuiteDetails-Section">
    <div class="container-fluid px-lg-5">
        <div class="row g-4 g-xl-5">
            <!-- Left Column: Details & Facilities -->
            <div class="col-lg-8">
                <div class="SuiteDetailsInn">
                    <div class="content">
                        <div class="room-intro-text">
                            <p><?php echo $room['description']; ?></p>
                        </div>
                        
                        <h4 class="facilities-heading">Facilities and Services</h4>
                        
                        <!-- Facilities Tab Bar -->
                        <div class="FciServTab">
                            <ul class="nav nav-tabs facilities-tab-nav" id="facilitiesTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active tabli" id="tab-btn-bedroom" data-bs-toggle="tab" data-bs-target="#panel-bedroom" type="button" role="tab" aria-selected="true">Bedroom</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link tabli" id="tab-btn-personal" data-bs-toggle="tab" data-bs-target="#panel-personal" type="button" role="tab" aria-selected="false">Personal Care</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link tabli" id="tab-btn-entertainment" data-bs-toggle="tab" data-bs-target="#panel-entertainment" type="button" role="tab" aria-selected="false">Entertainment</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link tabli" id="tab-btn-misc" data-bs-toggle="tab" data-bs-target="#panel-misc" type="button" role="tab" aria-selected="false">Miscellaneous</button>
                                </li>
                            </ul>
                            
                            <div class="banner_360">
                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#tour360Modal">
                                    <i class="bi bi-badge-3d-fill"></i>
                                    <p>360 <span>Tour</span></p>
                                </a>
                            </div>
                        </div>
                        
                        <!-- Tab Contents -->
                        <div class="FciServTabContent">
                            <div class="tab-content tabcontent" id="facilitiesTabContent">
                                <!-- Bedroom Tab -->
                                <div class="tab-pane fade show active tab-list" id="panel-bedroom" role="tabpanel">
                                    <ul class="facilities-bullet-list">
                                        <?php foreach ($room['facilities']['bedroom'] as $fItem): ?>
                                        <li><?php echo $fItem; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                
                                <!-- Personal Care Tab -->
                                <div class="tab-pane fade tab-list" id="panel-personal" role="tabpanel">
                                    <ul class="facilities-bullet-list">
                                        <?php foreach ($room['facilities']['personal_care'] as $fItem): ?>
                                        <li><?php echo $fItem; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                
                                <!-- Entertainment Tab -->
                                <div class="tab-pane fade tab-list" id="panel-entertainment" role="tabpanel">
                                    <ul class="facilities-bullet-list">
                                        <?php foreach ($room['facilities']['entertainment'] as $fItem): ?>
                                        <li><?php echo $fItem; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                
                                <!-- Miscellaneous Tab -->
                                <div class="tab-pane fade tab-list" id="panel-misc" role="tabpanel">
                                    <ul class="facilities-bullet-list">
                                        <?php foreach ($room['facilities']['miscellaneous'] as $fItem): ?>
                                        <li><?php echo $fItem; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Bottom Book Now Button -->
                    <div class="book_btn mt-4 pt-2">
                        <a href="#bookingFormCard" class="btn btn-gold px-4 py-2 text-uppercase fw-bold">Book Now</a>
                    </div>
                </div>
            </div>
            
            <!-- Right Column: Book Now Card Form -->
            <div class="col-lg-4">
                <div class="asideRight">
                    <div class="DetailBook-Form modelBookRooms" id="bookingFormCard">
                        <div class="BookAform">
                            <h5>Book Now</h5>
                            <div class="form">
                                <form id="detailBookingForm" onsubmit="event.preventDefault();">
                                    <input type="hidden" id="roomSinglePriceVal" value="<?php echo $room['single_price_num']; ?>">
                                    <input type="hidden" id="roomDoublePriceVal" value="<?php echo $room['double_price_num']; ?>">
                                    <input type="hidden" id="roomTaxPriceVal" value="<?php echo $room['tax_num']; ?>">
                                    <input type="hidden" id="selectedRoomTitle" value="<?php echo htmlspecialchars($room['name']); ?>">
                                    
                                    <!-- Dates Row -->
                                    <div class="row g-2 mb-3">
                                        <div class="col-6">
                                            <div class="form-group date-form-group">
                                                <label for="detailCheckInInput" class="form-label-top">Check In</label>
                                                <div class="input-icon-wrap">
                                                    <input type="date" id="detailCheckInInput" class="form-control form-control-bravura checin" required>
                                                    <i class="bi bi-calendar-event icon-doro"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group date-form-group">
                                                <label for="detailCheckOutInput" class="form-label-top">Check Out</label>
                                                <div class="input-icon-wrap">
                                                    <input type="date" id="detailCheckOutInput" class="form-control form-control-bravura checout" required>
                                                    <i class="bi bi-calendar-event icon-doro"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Number of Rooms Dropdown -->
                                    <div class="form-group mb-3">
                                        <label for="ddNumberOfRooms" class="form-label-top">Number of Rooms</label>
                                        <div class="input-icon-wrap">
                                            <select id="ddNumberOfRooms" class="form-select form-control-bravura">
                                                <option value="1" selected>1 Room</option>
                                                <option value="2">2 Rooms</option>
                                                <option value="3">3 Rooms</option>
                                                <option value="4">4 Rooms</option>
                                            </select>
                                            <i class="bi bi-chevron-down icon-doro"></i>
                                        </div>
                                    </div>
                                    
                                    <!-- Dynamic Per-Room Guest Rows -->
                                    <div class="room-guests-dynamic-list" id="roomGuestsDynamicList">
                                        <div class="room-guest-card" data-room-idx="1">
                                            <div class="room-card-head">
                                                <span>Rooms #1</span>
                                            </div>
                                            <div class="row g-2">
                                                <div class="col-6">
                                                    <label class="form-label-sub">Adults</label>
                                                    <div class="input-icon-wrap">
                                                        <select class="form-select form-control-bravura select-adult-count" data-room="1">
                                                            <option value="1">1 Adult</option>
                                                            <option value="2" selected>2 Adults</option>
                                                            <option value="3">3 Adults</option>
                                                        </select>
                                                        <i class="bi bi-chevron-down icon-doro"></i>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label class="form-label-sub">Child</label>
                                                    <div class="input-icon-wrap">
                                                        <select class="form-select form-control-bravura select-child-count" data-room="1">
                                                            <option value="0" selected>0 Child</option>
                                                            <option value="1">1 Child</option>
                                                            <option value="2">2 Children</option>
                                                        </select>
                                                        <i class="bi bi-chevron-down icon-doro"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!-- Child Age Rows -->
                                            <div class="child-age-wrapper d-none mt-2" data-room="1">
                                                <label class="form-label-sub">Child Age</label>
                                                <div class="row g-2 child-age-cols"></div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Terms & Policies Checkbox -->
                                    <div class="tercondi terms_conditions mt-3 mb-3">
                                        <div class="form-check custom-bravura-check">
                                            <input type="checkbox" class="form-check-input" id="chk_book_now" checked required>
                                            <label class="form-check-label" for="chk_book_now">
                                                Terms Conditions & Child Policies <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#termsPolicyModal" class="policy-link">click here</a>
                                            </label>
                                        </div>
                                    </div>
                                    
                                    <!-- Action Buttons -->
                                    <div class="form-btn mb-2">
                                        <button type="button" class="btnform check_availability w-100" id="btnCheckAvailability">
                                            Check Availability
                                        </button>
                                    </div>
                                    <div class="form-btn">
                                        <button type="button" class="btnform check_reset w-100 d-none" id="btnResetBookingForm">
                                            Reset
                                        </button>
                                    </div>
                                    
                                    <!-- Calculation Breakdown Box (Shown on Availability Check) -->
                                    <div class="pricing-result-container mt-3 d-none" id="pricingResultContainer">
                                        <div class="price-summary-card">
                                            <div class="summary-header">
                                                <span class="status-tag"><i class="bi bi-check-circle-fill me-1"></i> Rooms Available</span>
                                                <span class="nights-tag" id="summaryNightsText">1 Night</span>
                                            </div>
                                            
                                            <div class="summary-body">
                                                <div class="price-line">
                                                    <span>Room Rate (Base):</span>
                                                    <span class="fw-bold" id="lblBaseRoomRate">₹5,899</span>
                                                </div>
                                                
                                                <!-- Extra Addon: Breakfast -->
                                                <div class="addon-choice-card my-2">
                                                    <div class="form-check d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <input class="form-check-input me-2" type="checkbox" id="chkBreakfastAddon">
                                                            <label class="form-check-label fw-semibold" for="chkBreakfastAddon">
                                                                Daily Breakfast Add-on
                                                            </label>
                                                        </div>
                                                        <span class="addon-badge">₹750/Day</span>
                                                    </div>
                                                </div>
                                                
                                                <div class="price-line text-muted small">
                                                    <span>Taxes & Service Fees:</span>
                                                    <span id="lblTaxesAmount">₹250</span>
                                                </div>
                                                
                                                <div class="price-line text-success small d-none" id="couponDiscountRow">
                                                    <span>Coupon Discount:</span>
                                                    <span id="lblCouponDiscount">-₹500</span>
                                                </div>
                                                
                                                <!-- Coupon Code Input -->
                                                <div class="coupon-box mt-2 mb-2">
                                                    <div class="input-group input-group-sm">
                                                        <input type="text" class="form-control" id="inputPromoCode" placeholder="Enter Membership Code">
                                                        <button class="btn btn-gold-sm" type="button" id="btnApplyPromo">Apply</button>
                                                    </div>
                                                    <div class="promo-feedback small mt-1 d-none" id="promoFeedback"></div>
                                                </div>
                                                
                                                <hr class="summary-divider my-2">
                                                
                                                <div class="price-line total-line">
                                                    <span class="fw-bold">Payable Amount:</span>
                                                    <span class="total-price" id="lblTotalPayable">₹6,149</span>
                                                </div>
                                                
                                                <button type="button" class="btn btn-gold w-100 mt-3 py-2 text-uppercase fw-bold proceed-to-pay-btn" data-bs-toggle="modal" data-bs-target="#bookingSummaryModal">
                                                    Proceed to Pay
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     MORE ROOMS & SUITES SECTION
     ========================================== -->
<section class="BGR-H-Section-a moreroomS" id="relatedRoomsSection">
    <div class="container-fluid px-lg-5">
        <div class="heading text-center">
            <span class="section-subtitle">Luxury Stay</span>
            <h2>More ROOMS & SUITES</h2>
        </div>
        
        <div class="row g-4 mt-2 justify-content-center">
            <?php 
            foreach ($rooms as $rKey => $rData): 
                if ($rKey === $currentRoomKey) continue;
            ?>
            <div class="col-md-6 col-lg-4">
                <div class="related-room-card img_hover">
                    <figure class="room-card-figure">
                        <a href="room-detail.php?room=<?php echo $rKey; ?>">
                            <img src="<?php echo $rData['image']; ?>" alt="<?php echo htmlspecialchars($rData['name']); ?>" title="<?php echo htmlspecialchars($rData['name']); ?>" class="img-fluid" loading="lazy">
                        </a>
                    </figure>
                    <div class="room-card-content">
                        <div class="catName">
                            <a href="room-detail.php?room=<?php echo $rKey; ?>"><?php echo $rData['name']; ?></a>
                        </div>
                        <div class="price">Rs. <?php echo $rData['price']; ?></div>
                        <a href="room-detail.php?room=<?php echo $rKey; ?>" class="btn-more-rooms">View Details <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ==========================================
     MODAL 1: ROOM GALLERY LIGHTBOX
     ========================================== -->
<div class="modal fade gallery-lightbox-modal" id="roomGalleryModal" tabindex="-1" aria-labelledby="roomGalleryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content bg-dark text-white border-0">
            <div class="modal-header border-0 pb-0">
                <h5 class="modal-title text-gold" id="roomGalleryModalLabel"><?php echo $room['name']; ?> - Gallery</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-2 p-md-4">
                <!-- Main Image Stage -->
                <div class="lightbox-stage position-relative text-center">
                    <img id="lightboxMainImg" src="<?php echo $room['gallery'][0]; ?>" alt="<?php echo htmlspecialchars($room['name']); ?>" class="img-fluid rounded shadow-lg">
                    
                    <!-- Prev & Next Arrows -->
                    <button class="lightbox-arrow lightbox-prev" id="galleryPrevBtn" aria-label="Previous image">
                        <i class="bi bi-chevron-left"></i>
                    </button>
                    <button class="lightbox-arrow lightbox-next" id="galleryNextBtn" aria-label="Next image">
                        <i class="bi bi-chevron-right"></i>
                    </button>
                    
                    <div class="lightbox-counter mt-2 text-muted small">
                        Image <span id="galleryCurrentIdx">1</span> of <span id="galleryTotalCount"><?php echo count($room['gallery']); ?></span>
                    </div>
                </div>
                
                <!-- Thumbnails Bar -->
                <div class="lightbox-thumbs-track mt-3 d-flex justify-content-center gap-2 overflow-auto py-2">
                    <?php foreach ($room['gallery'] as $idx => $gImg): ?>
                    <img src="<?php echo $gImg; ?>" class="lightbox-thumb <?php echo $idx === 0 ? 'active' : ''; ?>" data-index="<?php echo $idx; ?>" alt="Thumbnail <?php echo $idx + 1; ?>">
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ==========================================
     MODAL 2: TERMS & CONDITIONS / POLICIES
     ========================================== -->
<div class="modal fade luxury-modal" id="termsPolicyModal" tabindex="-1" aria-labelledby="termsPolicyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content luxury-modal-content">
            <div class="modal-header border-0 pb-0">
                <div class="modal-title-wrap">
                    <span class="modal-subtitle">Doab Vilas Hotel Policies</span>
                    <h4 class="modal-title" id="termsPolicyModalLabel">Terms & Conditions & Child Policies</h4>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-3">
                <div class="policy-modal-scroll">
                    <h5 class="text-gold mb-3">Terms & Conditions at the Time of Stay:</h5>
                    <ul class="policy-bullet-list">
                        <li><strong>We do not accept local IDs.</strong> All guests over the age of 18 must present valid government-approved Photo ID (Passport, Aadhaar Card, Driving License, Voter ID). PAN Card is not accepted as address proof.</li>
                        <li>The above rates are excluding taxes and will be charged extra as applicable per government GST regulations.</li>
                        <li>Confirmation of reservation is purely against advance deposit or payment guarantee.</li>
                        <li><strong>Check-In Time:</strong> 12:00 PM onwards &nbsp;|&nbsp; <strong>Check-Out Time:</strong> 10:00 AM.</li>
                        <li>All rates & taxes are subject to change without prior notice.</li>
                        <li>The Rupee rate is applicable to Indian Residents only.</li>
                        <li>Extra bed charges will be applicable for additional adult guests.</li>
                        <li>Booking Order Receipt (Print / Mail / Digital PDF) is mandatory during check-in.</li>
                        <li>The hotel reserves the right to charge for any damage or missing inventory in your room during your stay.</li>
                        <li><strong>Cancellation Policy:</strong> Cancellation prior to 48 hours of Check-In date will be processed as per hotel standard guidelines. Cancellations made within 48 hours will incur first-night charge.</li>
                    </ul>
                    
                    <h5 class="text-gold mt-4 mb-3">Child Policies:</h5>
                    <ul class="policy-bullet-list">
                        <li>Only <strong>one kid below 5 years</strong> can share the room of parents without any extra cost (complimentary stay).</li>
                        <li>Extra bed / mattress charges will be applicable for kids aged <strong>5 years and above</strong>.</li>
                    </ul>
                </div>
            </div>
            <div class="modal-footer border-0 pt-0">
                <button type="button" class="btn btn-gold w-100 py-2" data-bs-dismiss="modal">I Understand & Agree</button>
            </div>
        </div>
    </div>
</div>

<!-- ==========================================
     MODAL 3: 360 VIRTUAL TOUR MODAL
     ========================================== -->
<div class="modal fade luxury-modal" id="tour360Modal" tabindex="-1" aria-labelledby="tour360ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content luxury-modal-content">
            <div class="modal-header border-0 pb-0">
                <div class="modal-title-wrap">
                    <span class="modal-subtitle">Interactive Experience</span>
                    <h4 class="modal-title" id="tour360ModalLabel"><?php echo $room['name']; ?> - 360° Virtual Tour</h4>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-3">
                <div class="ratio ratio-16x9 rounded overflow-hidden shadow">
                    <iframe src="<?php echo $room['tour_360']; ?>" title="<?php echo htmlspecialchars($room['name']); ?> 360 Tour" allowfullscreen loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ==========================================
     MODAL 4: BOOKING CART / SUMMARY MODAL
     ========================================== -->
<div class="modal fade luxury-modal" id="bookingSummaryModal" tabindex="-1" aria-labelledby="bookingSummaryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content luxury-modal-content">
            <div class="modal-header border-0 pb-0">
                <div class="modal-title-wrap">
                    <span class="modal-subtitle">Reservation Summary</span>
                    <h4 class="modal-title" id="bookingSummaryModalLabel">BOOKING CART STATUS</h4>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-3">
                <div class="reservation-summary-grid mb-4">
                    <div class="summary-mini-card">
                        <span class="mini-label">Check In</span>
                        <strong class="mini-val" id="cartModalCheckIn">-</strong>
                    </div>
                    <div class="summary-mini-card">
                        <span class="mini-label">Check Out</span>
                        <strong class="mini-val" id="cartModalCheckOut">-</strong>
                    </div>
                    <div class="summary-mini-card">
                        <span class="mini-label">No. of Rooms</span>
                        <strong class="mini-val" id="cartModalRooms">1 Room</strong>
                    </div>
                    <div class="summary-mini-card">
                        <span class="mini-label">Total Guests</span>
                        <strong class="mini-val" id="cartModalGuests">2 Adults</strong>
                    </div>
                </div>
                
                <div class="cart-room-highlight p-3 rounded mb-3" style="background: rgba(201,169,106,0.1); border-left: 4px solid var(--dv-gold);">
                    <h5 class="text-gold mb-1"><?php echo $room['name']; ?></h5>
                    <p class="small text-muted mb-0"><?php echo $room['bed']; ?> &bull; <?php echo $room['size']; ?> &bull; Free In-Room Wi-Fi &bull; Air Conditioned</p>
                </div>
                
                <!-- Guest Contact Details Form -->
                <form id="finalGuestDetailsForm" action="contact.php" method="POST" onsubmit="event.preventDefault(); alert('Thank you! Your reservation enquiry for <?php echo addslashes($room['name']); ?> has been received. Our front desk team will contact you shortly to confirm your booking.'); bootstrap.Modal.getInstance(document.getElementById('bookingSummaryModal')).hide();">
                    <h6 class="text-white mb-3">Guest Contact Information</h6>
                    <div class="row g-2 mb-3">
                        <div class="col-md-6">
                            <label class="form-label text-gold small">Full Name *</label>
                            <input type="text" class="form-control" placeholder="Enter guest full name" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label text-gold small">Contact Phone Number *</label>
                            <input type="tel" class="form-control" placeholder="+91 XXXXX XXXXX" required>
                        </div>
                    </div>
                    <div class="row g-2 mb-3">
                        <div class="col-md-6">
                            <label class="form-label text-gold small">Email Address *</label>
                            <input type="email" class="form-control" placeholder="name@domain.com" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label text-gold small">Special Requests (Optional)</label>
                            <input type="text" class="form-control" placeholder="Early check-in, high floor, etc.">
                        </div>
                    </div>
                    
                    <div class="cart-bill-breakdown p-3 rounded mb-3 bg-dark">
                        <div class="d-flex justify-content-between mb-1 small text-muted">
                            <span>Room Charges (<span id="cartModalNightsCount">1</span> Night):</span>
                            <span id="cartModalRoomPrice">₹5,899</span>
                        </div>
                        <div class="d-flex justify-content-between mb-1 small text-muted" id="cartModalAddonRow">
                            <span>Add-ons (Breakfast):</span>
                            <span id="cartModalAddonPrice">₹0</span>
                        </div>
                        <div class="d-flex justify-content-between mb-1 small text-muted">
                            <span>Applicable Taxes:</span>
                            <span id="cartModalTaxPrice">₹250</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2 small text-success d-none" id="cartModalDiscountRow">
                            <span>Coupon Discount:</span>
                            <span id="cartModalDiscountVal">-₹500</span>
                        </div>
                        <hr class="border-secondary my-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-white fs-6">Payable Total:</span>
                            <span class="fw-bold text-gold fs-5" id="cartModalTotalPayable">₹6,149</span>
                        </div>
                    </div>
                    
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="chkAgreeModal" checked required>
                        <label class="form-check-label small text-muted" for="chkAgreeModal">
                            I Agree to the <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#termsPolicyModal" class="text-gold">Terms & Conditions</a> of stay at Doab Vilas.
                        </label>
                    </div>
                    
                    <button type="submit" class="btn btn-gold w-100 py-3 fw-bold text-uppercase">
                        <i class="bi bi-shield-check me-2"></i>Confirm & Complete Reservation
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- ==========================================
     PAGE-SPECIFIC JAVASCRIPT
     ========================================== -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // -------------------------------------------------------------
    // 1. DATE PICKER SETUP
    // -------------------------------------------------------------
    const checkInInput = document.getElementById('detailCheckInInput');
    const checkOutInput = document.getElementById('detailCheckOutInput');
    
    if (checkInInput && checkOutInput) {
        const today = new Date();
        const tomorrow = new Date();
        tomorrow.setDate(today.getDate() + 1);
        
        const toYMD = (d) => {
            const y = d.getFullYear();
            const m = String(d.getMonth() + 1).padStart(2, '0');
            const day = String(d.getDate()).padStart(2, '0');
            return `${y}-${m}-${day}`;
        };
        
        const todayStr = toYMD(today);
        const tomorrowStr = toYMD(tomorrow);
        
        checkInInput.min = todayStr;
        checkInInput.value = todayStr;
        checkOutInput.min = tomorrowStr;
        checkOutInput.value = tomorrowStr;
        
        checkInInput.addEventListener('change', function() {
            if (this.value) {
                const pickedIn = new Date(this.value);
                const nextDay = new Date(pickedIn);
                nextDay.setDate(pickedIn.getDate() + 1);
                const nextDayStr = toYMD(nextDay);
                
                checkOutInput.min = nextDayStr;
                if (checkOutInput.value <= this.value) {
                    checkOutInput.value = nextDayStr;
                }
            }
            recalculateBooking();
        });
        
        checkOutInput.addEventListener('change', function() {
            recalculateBooking();
        });
    }

    // -------------------------------------------------------------
    // 2. NUMBER OF ROOMS DYNAMIC GENERATION
    // -------------------------------------------------------------
    const ddRooms = document.getElementById('ddNumberOfRooms');
    const roomsContainer = document.getElementById('roomGuestsDynamicList');
    
    if (ddRooms && roomsContainer) {
        ddRooms.addEventListener('change', function() {
            const count = parseInt(this.value, 10) || 1;
            renderRoomGuestCards(count);
            recalculateBooking();
        });
    }
    
    function renderRoomGuestCards(roomCount) {
        roomsContainer.innerHTML = '';
        for (let i = 1; i <= roomCount; i++) {
            const card = document.createElement('div');
            card.className = 'room-guest-card mt-2';
            card.setAttribute('data-room-idx', i);
            card.innerHTML = `
                <div class="room-card-head">
                    <span>Rooms #${i}</span>
                </div>
                <div class="row g-2">
                    <div class="col-6">
                        <label class="form-label-sub">Adults</label>
                        <div class="input-icon-wrap">
                            <select class="form-select form-control-bravura select-adult-count" data-room="${i}">
                                <option value="1">1 Adult</option>
                                <option value="2" selected>2 Adults</option>
                                <option value="3">3 Adults</option>
                            </select>
                            <i class="bi bi-chevron-down icon-doro"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <label class="form-label-sub">Child</label>
                        <div class="input-icon-wrap">
                            <select class="form-select form-control-bravura select-child-count" data-room="${i}">
                                <option value="0" selected>0 Child</option>
                                <option value="1">1 Child</option>
                                <option value="2">2 Children</option>
                            </select>
                            <i class="bi bi-chevron-down icon-doro"></i>
                        </div>
                    </div>
                </div>
                <div class="child-age-wrapper d-none mt-2" data-room="${i}">
                    <label class="form-label-sub">Child Age</label>
                    <div class="row g-2 child-age-cols"></div>
                </div>
            `;
            roomsContainer.appendChild(card);
            
            // Attach child listener
            const childSelect = card.querySelector('.select-child-count');
            childSelect.addEventListener('change', function() {
                handleChildChange(this, card);
                recalculateBooking();
            });
            
            const adultSelect = card.querySelector('.select-adult-count');
            adultSelect.addEventListener('change', function() {
                recalculateBooking();
            });
        }
    }
    
    // Initial attach for room #1
    const initChildSelect = document.querySelector('.select-child-count[data-room="1"]');
    if (initChildSelect) {
        initChildSelect.addEventListener('change', function() {
            const card = this.closest('.room-guest-card');
            handleChildChange(this, card);
            recalculateBooking();
        });
    }
    
    const initAdultSelect = document.querySelector('.select-adult-count[data-room="1"]');
    if (initAdultSelect) {
        initAdultSelect.addEventListener('change', function() {
            recalculateBooking();
        });
    }
    
    function handleChildChange(selectElem, card) {
        const numChild = parseInt(selectElem.value, 10);
        const ageWrap = card.querySelector('.child-age-wrapper');
        const ageCols = card.querySelector('.child-age-cols');
        
        if (numChild > 0) {
            ageWrap.classList.remove('d-none');
            ageCols.innerHTML = '';
            for (let c = 1; c <= numChild; c++) {
                const col = document.createElement('div');
                col.className = 'col-6';
                col.innerHTML = `
                    <div class="input-icon-wrap">
                        <select class="form-select form-control-bravura select-child-age">
                            <option value="1">1 Year</option>
                            <option value="2">2 Years</option>
                            <option value="3">3 Years</option>
                            <option value="4">4 Years</option>
                            <option value="5" selected>5 Years</option>
                            <option value="6">6 Years</option>
                            <option value="7">7 Years</option>
                            <option value="8">8 Years</option>
                            <option value="9">9 Years</option>
                            <option value="10">10 Years</option>
                            <option value="11">11 Years</option>
                            <option value="12">12 Years</option>
                        </select>
                        <i class="bi bi-chevron-down icon-doro"></i>
                    </div>
                `;
                ageCols.appendChild(col);
            }
        } else {
            ageWrap.classList.add('d-none');
            ageCols.innerHTML = '';
        }
    }

    // -------------------------------------------------------------
    // 3. PRICING & AVAILABILITY CALCULATION
    // -------------------------------------------------------------
    const btnCheckAvail = document.getElementById('btnCheckAvailability');
    const btnReset = document.getElementById('btnResetBookingForm');
    const pricingContainer = document.getElementById('pricingResultContainer');
    const chkBreakfast = document.getElementById('chkBreakfastAddon');
    const btnApplyPromo = document.getElementById('btnApplyPromo');
    const inputPromo = document.getElementById('inputPromoCode');
    const promoFeedback = document.getElementById('promoFeedback');
    
    let appliedDiscount = 0;
    
    function calculateNights() {
        if (!checkInInput || !checkOutInput || !checkInInput.value || !checkOutInput.value) return 1;
        const d1 = new Date(checkInInput.value);
        const d2 = new Date(checkOutInput.value);
        const diffTime = d2.getTime() - d1.getTime();
        const nights = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
        return nights > 0 ? nights : 1;
    }
    
    function getTotalAdults() {
        const selects = document.querySelectorAll('.select-adult-count');
        let sum = 0;
        selects.forEach(s => sum += (parseInt(s.value, 10) || 1));
        return sum || 1;
    }
    
    function getTotalChildren() {
        const selects = document.querySelectorAll('.select-child-count');
        let sum = 0;
        selects.forEach(s => sum += (parseInt(s.value, 10) || 0));
        return sum;
    }
    
    function recalculateBooking() {
        const nights = calculateNights();
        const numRooms = parseInt(document.getElementById('ddNumberOfRooms').value, 10) || 1;
        const totalAdults = getTotalAdults();
        const totalChildren = getTotalChildren();
        
        const singlePrice = parseFloat(document.getElementById('roomSinglePriceVal').value) || 5000;
        const doublePrice = parseFloat(document.getElementById('roomDoublePriceVal').value) || 5899;
        const taxRate = parseFloat(document.getElementById('roomTaxPriceVal').value) || 250;
        
        // Base room price logic
        const perRoomPrice = (totalAdults > numRooms) ? doublePrice : singlePrice;
        const totalBaseRoom = perRoomPrice * numRooms * nights;
        
        // Breakfast Addon logic
        let addonPrice = 0;
        if (chkBreakfast && chkBreakfast.checked) {
            addonPrice = 750 * totalAdults * nights;
        }
        
        const totalTaxes = taxRate * numRooms * nights;
        const rawPayable = totalBaseRoom + addonPrice + totalTaxes;
        const payable = Math.max(0, rawPayable - appliedDiscount);
        
        // Update DOM in pricing card
        const fmt = (num) => '₹' + Math.round(num).toLocaleString('en-IN');
        
        const summaryNights = document.getElementById('summaryNightsText');
        if (summaryNights) summaryNights.textContent = `${nights} ${nights === 1 ? 'Night' : 'Nights'}`;
        
        const lblBase = document.getElementById('lblBaseRoomRate');
        if (lblBase) lblBase.textContent = fmt(totalBaseRoom);
        
        const lblTax = document.getElementById('lblTaxesAmount');
        if (lblTax) lblTax.textContent = fmt(totalTaxes);
        
        const lblPayable = document.getElementById('lblTotalPayable');
        if (lblPayable) lblPayable.textContent = fmt(payable);
        
        // Also update Cart Modal Elements
        const cartIn = document.getElementById('cartModalCheckIn');
        const cartOut = document.getElementById('cartModalCheckOut');
        const cartRooms = document.getElementById('cartModalRooms');
        const cartGuests = document.getElementById('cartModalGuests');
        
        if (cartIn && checkInInput) cartIn.textContent = checkInInput.value;
        if (cartOut && checkOutInput) cartOut.textContent = checkOutInput.value;
        if (cartRooms) cartRooms.textContent = `${numRooms} ${numRooms === 1 ? 'Room' : 'Rooms'}`;
        if (cartGuests) cartGuests.textContent = `${totalAdults} Adults` + (totalChildren > 0 ? `, ${totalChildren} Child` : '');
        
        const cartNights = document.getElementById('cartModalNightsCount');
        if (cartNights) cartNights.textContent = nights;
        
        const cartRoomP = document.getElementById('cartModalRoomPrice');
        if (cartRoomP) cartRoomP.textContent = fmt(totalBaseRoom);
        
        const cartAddonP = document.getElementById('cartModalAddonPrice');
        if (cartAddonP) cartAddonP.textContent = fmt(addonPrice);
        
        const cartTaxP = document.getElementById('cartModalTaxPrice');
        if (cartTaxP) cartTaxP.textContent = fmt(totalTaxes);
        
        const cartTotalP = document.getElementById('cartModalTotalPayable');
        if (cartTotalP) cartTotalP.textContent = fmt(payable);
    }
    
    if (btnCheckAvail) {
        btnCheckAvail.addEventListener('click', function() {
            recalculateBooking();
            pricingContainer.classList.remove('d-none');
            if (btnReset) btnReset.classList.remove('d-none');
            
            // Smooth scroll into view
            pricingContainer.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        });
    }
    
    if (btnReset) {
        btnReset.addEventListener('click', function() {
            pricingContainer.classList.add('d-none');
            btnReset.classList.add('d-none');
            appliedDiscount = 0;
            if (inputPromo) inputPromo.value = '';
            if (promoFeedback) promoFeedback.classList.add('d-none');
            const couponRow = document.getElementById('couponDiscountRow');
            if (couponRow) couponRow.classList.add('d-none');
            if (chkBreakfast) chkBreakfast.checked = false;
        });
    }
    
    if (chkBreakfast) {
        chkBreakfast.addEventListener('change', function() {
            recalculateBooking();
        });
    }
    
    if (btnApplyPromo && inputPromo) {
        btnApplyPromo.addEventListener('click', function() {
            const code = inputPromo.value.trim().toUpperCase();
            const couponRow = document.getElementById('couponDiscountRow');
            const lblCoupon = document.getElementById('lblCouponDiscount');
            const cartDiscountRow = document.getElementById('cartModalDiscountRow');
            const cartDiscountVal = document.getElementById('cartModalDiscountVal');
            
            if (code === 'HOTEL10' || code === 'SPECIAL10' || code === 'DOABVILAS' || code === 'BRAVURA') {
                appliedDiscount = 500;
                promoFeedback.className = 'promo-feedback small mt-1 text-success';
                promoFeedback.textContent = 'Promo coupon applied! ₹500 discount saved.';
                promoFeedback.classList.remove('d-none');
                
                if (couponRow && lblCoupon) {
                    couponRow.classList.remove('d-none');
                    lblCoupon.textContent = '-₹500';
                }
                if (cartDiscountRow && cartDiscountVal) {
                    cartDiscountRow.classList.remove('d-none');
                    cartDiscountVal.textContent = '-₹500';
                }
            } else if (code.length === 0) {
                promoFeedback.className = 'promo-feedback small mt-1 text-danger';
                promoFeedback.textContent = 'Please enter a valid coupon code.';
                promoFeedback.classList.remove('d-none');
            } else {
                appliedDiscount = 0;
                promoFeedback.className = 'promo-feedback small mt-1 text-danger';
                promoFeedback.textContent = 'Invalid promo code. Try DOABVILAS or SPECIAL10.';
                promoFeedback.classList.remove('d-none');
                if (couponRow) couponRow.classList.add('d-none');
                if (cartDiscountRow) cartDiscountRow.classList.add('d-none');
            }
            recalculateBooking();
        });
    }

    // -------------------------------------------------------------
    // 4. ROOM GALLERY LIGHTBOX MODAL LOGIC
    // -------------------------------------------------------------
    const galleryImages = <?php echo json_encode($room['gallery']); ?>;
    let activeGalleryIdx = 0;
    
    const mainLightboxImg = document.getElementById('lightboxMainImg');
    const galleryCurrentIdxEl = document.getElementById('galleryCurrentIdx');
    const prevBtn = document.getElementById('galleryPrevBtn');
    const nextBtn = document.getElementById('galleryNextBtn');
    const thumbs = document.querySelectorAll('.lightbox-thumb');
    
    function setGallerySlide(idx) {
        if (idx < 0) idx = galleryImages.length - 1;
        if (idx >= galleryImages.length) idx = 0;
        activeGalleryIdx = idx;
        
        if (mainLightboxImg) {
            mainLightboxImg.style.opacity = '0.3';
            setTimeout(() => {
                mainLightboxImg.src = galleryImages[activeGalleryIdx];
                mainLightboxImg.style.opacity = '1';
            }, 150);
        }
        
        if (galleryCurrentIdxEl) {
            galleryCurrentIdxEl.textContent = activeGalleryIdx + 1;
        }
        
        thumbs.forEach((t, i) => {
            if (i === activeGalleryIdx) {
                t.classList.add('active');
            } else {
                t.classList.remove('active');
            }
        });
    }
    
    if (prevBtn) {
        prevBtn.addEventListener('click', () => setGallerySlide(activeGalleryIdx - 1));
    }
    if (nextBtn) {
        nextBtn.addEventListener('click', () => setGallerySlide(activeGalleryIdx + 1));
    }
    
    thumbs.forEach(thumb => {
        thumb.addEventListener('click', function() {
            const idx = parseInt(this.getAttribute('data-index'), 10) || 0;
            setGallerySlide(idx);
        });
    });
    
    // Keyboard navigation when modal is open
    document.addEventListener('keydown', function(e) {
        const modal = document.getElementById('roomGalleryModal');
        if (modal && modal.classList.contains('show')) {
            if (e.key === 'ArrowLeft') setGallerySlide(activeGalleryIdx - 1);
            if (e.key === 'ArrowRight') setGallerySlide(activeGalleryIdx + 1);
        }
    });

    // -------------------------------------------------------------
    // 5. SMOOTH SCROLL TO BOOKING FORM CARD
    // -------------------------------------------------------------
    document.querySelectorAll('a[href="#bookingFormCard"]').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.getElementById('bookingFormCard');
            if (target) {
                const offset = 90;
                const bodyRect = document.body.getBoundingClientRect().top;
                const elementRect = target.getBoundingClientRect().top;
                const elementPosition = elementRect - bodyRect;
                const offsetPosition = elementPosition - offset;
                
                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
                
                // Highlight pulse on card
                target.classList.add('booking-card-highlight');
                setTimeout(() => {
                    target.classList.remove('booking-card-highlight');
                }, 1500);
            }
        });
    });
});
</script>

<?php require_once 'includes/whatsapp-button.php'; ?>
<?php require_once 'includes/footer.php'; ?>
