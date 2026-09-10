/**
 * Doab Vilas - Main JavaScript
 */

document.addEventListener('DOMContentLoaded', function() {
    
    // ===================================
    // Header Scroll Effect
    // ===================================
    const header = document.getElementById('siteHeader');
    
    if (header) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    }
    
    // ===================================
    // Mobile Menu Toggle
    // ===================================
    const mobileMenuToggle = document.getElementById('mobileMenuToggle');
    const headerNav = document.getElementById('headerNav');
    
    if (mobileMenuToggle && headerNav) {
        mobileMenuToggle.addEventListener('click', function() {
            this.classList.toggle('active');
            headerNav.classList.toggle('active');
            document.body.style.overflow = headerNav.classList.contains('active') ? 'hidden' : '';
        });

        // Close mobile menu when clicking on a link
        const navLinks = headerNav.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                if (window.innerWidth <= 991) {
                    const parentItem = this.closest('.nav-item');
                    if (parentItem && parentItem.classList.contains('has-mega-menu')) {
                        e.preventDefault();
                        parentItem.classList.toggle('active');
                    } else {
                        mobileMenuToggle.classList.remove('active');
                        headerNav.classList.remove('active');
                        document.body.style.overflow = '';
                    }
                }
            });
        });
    }
    
    // ===================================
    // Smooth Scroll for Anchor Links
    // ===================================
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href !== '#') {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    const headerHeight = header ? header.offsetHeight : 0;
                    const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - headerHeight;
                    
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });
    
    // ===================================
    // Hero Background Parallax
    // ===================================
    const heroSection = document.querySelector('.hero-section');
    if (heroSection) {
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const rate = scrolled * 0.3;
            heroSection.style.backgroundPositionY = rate + 'px';
        });
    }
    
    // ===================================
    // Intersection Observer for Animations
    // ===================================
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animated');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    const animateElements = document.querySelectorAll('[data-animate]');
    animateElements.forEach(el => {
        observer.observe(el);
    });
    
    // ===================================
    // Form Validation
    // ===================================
    const forms = document.querySelectorAll('form[data-validate]');
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            let isValid = true;
            const requiredFields = form.querySelectorAll('[required]');
            
            requiredFields.forEach(field => {
                // Remove previous error state
                field.classList.remove('is-invalid');
                
                if (!field.value.trim()) {
                    isValid = false;
                    field.classList.add('is-invalid');
                }
                
                // Email validation
                if (field.type === 'email' && field.value) {
                    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!emailRegex.test(field.value)) {
                        isValid = false;
                        field.classList.add('is-invalid');
                    }
                }
                
                // Phone validation
                if (field.type === 'tel' && field.value) {
                    const phoneRegex = /^[\d\s\-\+\(\)]{10,}$/;
                    if (!phoneRegex.test(field.value)) {
                        isValid = false;
                        field.classList.add('is-invalid');
                    }
                }
            });
            
            if (!isValid) {
                e.preventDefault();
            }
        });
    });
    
    // ===================================
    // Back to Top Button
    // ===================================
    const backToTop = document.createElement('button');
    backToTop.innerHTML = '<i class="bi bi-arrow-up"></i>';
    backToTop.className = 'back-to-top';
    backToTop.style.cssText = `
        position: fixed;
        bottom: 170px;
        right: 30px;
        width: 45px;
        height: 45px;
        background-color: var(--dv-dark);
        color: white;
        border: none;
        border-radius: 50%;
        cursor: pointer;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
        z-index: 998;
        font-size: 1.2rem;
        display: flex;
        align-items: center;
        justify-content: center;
    `;
    document.body.appendChild(backToTop);
    
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 500) {
            backToTop.style.opacity = '1';
            backToTop.style.visibility = 'visible';
        } else {
            backToTop.style.opacity = '0';
            backToTop.style.visibility = 'hidden';
        }
    });
    
    backToTop.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
    
    // ===================================
    // Lazy Load Images
    // ===================================
    if ('loading' in HTMLImageElement.prototype) {
        const lazyImages = document.querySelectorAll('img[loading="lazy"]');
        lazyImages.forEach(img => {
            img.src = img.src;
        });
    }
    
    // ===================================
    // WhatsApp Button Pulse
    // ===================================
    const whatsappBtn = document.querySelector('.whatsapp-float');
    if (whatsappBtn) {
        setInterval(() => {
            whatsappBtn.style.transform = 'scale(1.1)';
            setTimeout(() => {
                whatsappBtn.style.transform = 'scale(1)';
            }, 500);
        }, 5000);
    }
    
    // ===================================
    // Rooms Carousel (Owl-like)
    // ===================================
    const roomsCarousel = document.getElementById('roomsCarousel');
    const roomsPrev = document.getElementById('roomsPrev');
    const roomsNext = document.getElementById('roomsNext');
    
    if (roomsCarousel && roomsPrev && roomsNext) {
        const scrollAmount = roomsCarousel.querySelector('.room-carousel-item').offsetWidth + 25;
        
        roomsPrev.addEventListener('click', () => {
            roomsCarousel.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
        });
        
        roomsNext.addEventListener('click', () => {
            roomsCarousel.scrollBy({ left: scrollAmount, behavior: 'smooth' });
        });
        
        // Autoplay like Owl Carousel
        let autoplayInterval = setInterval(() => {
            if (roomsCarousel.scrollLeft + roomsCarousel.clientWidth >= roomsCarousel.scrollWidth) {
                roomsCarousel.scrollTo({ left: 0, behavior: 'smooth' });
            } else {
                roomsCarousel.scrollBy({ left: scrollAmount, behavior: 'smooth' });
            }
        }, 4000);
        
        // Pause on hover
        roomsCarousel.addEventListener('mouseenter', () => {
            clearInterval(autoplayInterval);
        });
        
        roomsCarousel.addEventListener('mouseleave', () => {
            autoplayInterval = setInterval(() => {
                if (roomsCarousel.scrollLeft + roomsCarousel.clientWidth >= roomsCarousel.scrollWidth) {
                    roomsCarousel.scrollTo({ left: 0, behavior: 'smooth' });
                } else {
                    roomsCarousel.scrollBy({ left: scrollAmount, behavior: 'smooth' });
                }
            }, 4000);
        });
    }
    
    // ===================================
    // Weddings Carousel
    // ===================================
    const weddingsCarousel = document.getElementById('weddingsCarousel');
    const weddingsPrev = document.getElementById('weddingsPrev');
    const weddingsNext = document.getElementById('weddingsNext');
    
    if (weddingsCarousel && weddingsPrev && weddingsNext) {
        const scrollAmountW = weddingsCarousel.querySelector('.wedding-carousel-item').offsetWidth + 25;
        
        weddingsPrev.addEventListener('click', () => {
            weddingsCarousel.scrollBy({ left: -scrollAmountW, behavior: 'smooth' });
        });
        
        weddingsNext.addEventListener('click', () => {
            weddingsCarousel.scrollBy({ left: scrollAmountW, behavior: 'smooth' });
        });
        
        // Autoplay
        let autoplayW = setInterval(() => {
            if (weddingsCarousel.scrollLeft + weddingsCarousel.clientWidth >= weddingsCarousel.scrollWidth) {
                weddingsCarousel.scrollTo({ left: 0, behavior: 'smooth' });
            } else {
                weddingsCarousel.scrollBy({ left: scrollAmountW, behavior: 'smooth' });
            }
        }, 5000);
        
        weddingsCarousel.addEventListener('mouseenter', () => {
            clearInterval(autoplayW);
        });
        
        weddingsCarousel.addEventListener('mouseleave', () => {
            autoplayW = setInterval(() => {
                if (weddingsCarousel.scrollLeft + weddingsCarousel.clientWidth >= weddingsCarousel.scrollWidth) {
                    weddingsCarousel.scrollTo({ left: 0, behavior: 'smooth' });
                } else {
                    weddingsCarousel.scrollBy({ left: scrollAmountW, behavior: 'smooth' });
                }
            }, 5000);
        });
    }
    
    // ===================================
    // Guest Comments Carousel
    // ===================================
    const guests = [
        { name: 'Khayali', designation: 'Comedian', quote: 'Good, Ek Andaz, Ek Awaaz, Ek Aghaz. Bravura Gold Resort.', image: 'assets/images/experiences/Khayali-Guest.jpg' },
        { name: 'Rajeev Shukla', designation: 'Senior Journalist', quote: 'Amazing hospitality and world-class facilities. A truly remarkable destination for luxury seekers.', image: 'assets/images/experiences/Rajeev Shukla-Guest.jpg' },
        { name: 'Mahima Chaudhary', designation: 'Actress', quote: 'Beautiful property with exceptional service. Every moment spent here was absolutely wonderful.', image: 'assets/images/experiences/Mahima Chaudhary-Guest.jpg' },
        { name: 'Mika Singh', designation: 'Singer & Performer', quote: 'Outstanding venue with premium amenities. The perfect place for celebrations and events.', image: 'assets/images/experiences/Mika Singh-Guest.jpg' }
    ];
    
    let currentGuest = 0;
    const guestItems = document.querySelectorAll('.guest-image-item');
    const guestQuoteText = document.getElementById('guestQuoteText');
    const guestName = document.getElementById('guestName');
    const guestDesignation = document.getElementById('guestDesignation');
    const guestPrev = document.getElementById('guestPrev');
    const guestNext = document.getElementById('guestNext');
    
    function updateGuest(index) {
        // Update quote with fade
        guestQuoteText.style.opacity = '0';
        guestName.style.opacity = '0';
        guestDesignation.style.opacity = '0';
        
        setTimeout(() => {
            guestQuoteText.textContent = guests[index].quote;
            guestName.textContent = guests[index].name;
            guestDesignation.textContent = guests[index].designation;
            guestQuoteText.style.opacity = '1';
            guestName.style.opacity = '1';
            guestDesignation.style.opacity = '1';
        }, 300);
        
        // Update active image
        guestItems.forEach((item, i) => {
            item.classList.remove('active');
            if (i === index) item.classList.add('active');
        });
        
        // Reorder images - active guest comes first
        const track = document.getElementById('guestImagesTrack');
        const items = Array.from(guestItems);
        const reordered = items.slice(index).concat(items.slice(0, index));
        reordered.forEach(item => track.appendChild(item));
        
        // Reset position
        track.style.transform = 'translateX(0)';
    }
    
    if (guestPrev && guestNext) {
        guestPrev.addEventListener('click', () => {
            currentGuest = (currentGuest - 1 + guests.length) % guests.length;
            updateGuest(currentGuest);
        });
        
        guestNext.addEventListener('click', () => {
            currentGuest = (currentGuest + 1) % guests.length;
            updateGuest(currentGuest);
        });
    }
    
    // Autoplay guest comments
    setInterval(() => {
        currentGuest = (currentGuest + 1) % guests.length;
        updateGuest(currentGuest);
    }, 5000);
    
});
