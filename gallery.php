<?php 
$pageTitle = 'Gallery - Doab Vilas Luxury Resort, Meerut';
require_once 'includes/header.php'; 
require_once 'includes/navbar.php'; 
?>

<!-- Hero Banner -->
<div class="banner banner-rooms-suites banner_wedding banner_dining">
    <div class="bg overlay-top overlay-bottom">
        <img src="assets/images/rooms/doab villas 1.png" alt="Gallery" title="Gallery" class="hero-bg-img" />
    </div>
    <div class="banner-container">
        <div class="container">
            <div class="content text-center">
                <div class="title">Visual Journey</div>
                <h1>GALLERY</h1>
                <div class="scrdown">
                    <a href="#gallerySection" aria-label="Scroll Down">
                        <i class="bi bi-chevron-down"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Gallery Section -->
<section class="gallery-section section-padding" id="gallerySection">
    <div class="container">
        <div class="section-header text-center mb-5">
            <span class="section-subtitle">Explore</span>
            <h2 class="section-title">PHOTO GALLERY</h2>
        </div>
        
        <!-- Gallery Filter -->
        <div class="gallery-filter text-center mb-5">
            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="rooms">Rooms</button>
            <button class="filter-btn" data-filter="venues">Venues</button>
            <button class="filter-btn" data-filter="pool">Pool</button>
            <button class="filter-btn" data-filter="lobby">Lobby</button>
            <button class="filter-btn" data-filter="staff">Staff</button>
        </div>
        
        <!-- Gallery Grid -->
      <div class="row g-3 gallery-grid">
                <?php
                $sqlfrontgallery = mysqli_query($con, "SELECT * FROM `gallery_imgs` WHERE `status` = 1 ORDER BY `ordering` ASC, `id` ASC");
                if(mysqli_num_rows($sqlfrontgallery)){
                    while($rwfront = mysqli_fetch_assoc($sqlfrontgallery)){
                        $frontimg = $path.$rwfront['file'];
                        $frontcat = $rwfront['category'];
                        $fronttitle = ($rwfront['title'] != '') ? $rwfront['title'] : (($frontcat != '') ? ucfirst($frontcat) : 'Gallery Image');
                ?>
                            <div class="col-md-4 col-lg-3 gallery-item" data-category="<?=$frontcat;?>">
                                <div class="gallery-card" onclick="openLightbox('<?=$frontimg;?>', '<?=htmlspecialchars($fronttitle, ENT_QUOTES);?>')">
                                    <img src="<?=$frontimg;?>" alt="<?=htmlspecialchars($fronttitle, ENT_QUOTES);?>" class="img-fluid" loading="lazy">
                                    <div class="gallery-overlay">
                                        <span><?=htmlspecialchars($fronttitle, ENT_QUOTES);?></span>
                                    </div>
                                </div>
                            </div>
                <?php } } ?>
            </div>
        </div>
</section>

<!-- Lightbox Modal -->
<div id="galleryLightbox" class="gallery-lightbox" onclick="closeLightbox()">
    <span class="lightbox-close" onclick="closeLightbox()">&times;</span>
    <img id="lightboxImg" src="" alt="">
    <div id="lightboxCaption" class="lightbox-caption"></div>
</div>

<script>
function openLightbox(src, caption) {
    document.getElementById('lightboxImg').src = src;
    document.getElementById('lightboxCaption').textContent = caption;
    document.getElementById('galleryLightbox').classList.add('active');
    document.body.style.overflow = 'hidden';
}

function closeLightbox() {
    document.getElementById('galleryLightbox').classList.remove('active');
    document.body.style.overflow = '';
}

document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closeLightbox();
});

document.addEventListener('DOMContentLoaded', function() {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');
    
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            // Remove active class from all buttons
            filterBtns.forEach(b => b.classList.remove('active'));
            // Add active class to clicked button
            this.classList.add('active');
            
            const filter = this.getAttribute('data-filter');
            
            galleryItems.forEach(item => {
                if (filter === 'all' || item.getAttribute('data-category') === filter) {
                    item.classList.remove('hidden');
                } else {
                    item.classList.add('hidden');
                }
            });
        });
    });
});
</script>

<?php require_once 'includes/whatsapp-button.php'; ?>
<?php require_once 'includes/footer.php'; ?>
