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
    // Hero Video Autoplay Assurance & Booking Bar Dates
    // ===================================
    const heroVideo = document.getElementById('video-bg');
    if (heroVideo) {
        // Ensure muted & inline for mobile autoplay
        heroVideo.muted = true;
        heroVideo.defaultMuted = true;
        heroVideo.playsInline = true;
        
        const playPromise = heroVideo.play();
        if (playPromise !== undefined) {
            playPromise.catch(() => {
                // Autoplay was prevented, add click listener to play on interaction
                document.addEventListener('click', function playOnFirstClick() {
                    heroVideo.play();
                    document.removeEventListener('click', playOnFirstClick);
                }, { once: true });
            });
        }
    }

    // ===================================
    // Hero Booking Bar - Dropdown & Date Picker (Bravura Style)
    // ===================================
    const roomDropdown = document.getElementById('roomDropdown');
    const roomSelectedText = document.getElementById('roomSelectedText');
    const roomDropdownOptions = document.getElementById('roomDropdownOptions');
    const hdnRoomType = document.getElementById('hdnRoomType');

    if (roomDropdown && roomSelectedText && roomDropdownOptions) {
        roomSelectedText.addEventListener('click', function(e) {
            e.stopPropagation();
            roomDropdownOptions.classList.toggle('active');
        });

        const options = roomDropdownOptions.querySelectorAll('li');
        options.forEach(option => {
            option.addEventListener('click', function(e) {
                e.stopPropagation();
                options.forEach(opt => opt.classList.remove('current'));
                this.classList.add('current');
                
                const val = this.getAttribute('data-value');
                const text = this.querySelector('label') ? this.querySelector('label').textContent : this.textContent;
                
                roomSelectedText.textContent = text;
                if (hdnRoomType) hdnRoomType.value = val;
                roomDropdownOptions.classList.remove('active');
            });
        });

        document.addEventListener('click', function() {
            roomDropdownOptions.classList.remove('active');
        });
    }

    // Date Pickers for Bravura Style Form
    const txtCheckIn = document.getElementById('txtCheckIn');
    const txtCheckOut = document.getElementById('txtCheckOut');

    if (txtCheckIn && txtCheckOut) {
        const today = new Date();
        const tomorrow = new Date();
        tomorrow.setDate(today.getDate() + 1);

        const formatDisplayDate = (d) => {
            const day = String(d.getDate()).padStart(2, '0');
            const month = String(d.getMonth() + 1).padStart(2, '0');
            const year = d.getFullYear();
            return `${day}/${month}/${year}`;
        };

        // Click to open date picker
        const openDatePicker = (inputElem, isCheckOut = false) => {
            // Remove existing picker if any
            const existingPicker = document.querySelector('.custom-datepicker');
            if (existingPicker) existingPicker.remove();

            // Find the icon
            const formGroup = inputElem.closest('.form-group');
            const icon = formGroup ? formGroup.querySelector('.icon') : null;

            // Create custom datepicker
            const picker = document.createElement('div');
            picker.className = 'custom-datepicker';

            const today = new Date();
            let currentMonth = today.getMonth();
            let currentYear = today.getFullYear();

            const minDate = new Date();
            if (isCheckOut) minDate.setDate(today.getDate() + 1);

            const months = ['January', 'February', 'March', 'April', 'May', 'June',
                'July', 'August', 'September', 'October', 'November', 'December'];

            const renderCalendar = () => {
                const firstDay = new Date(currentYear, currentMonth, 1).getDay();
                const daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();

                let html = `
                    <div class="dp-header">
                        <button type="button" class="dp-prev">&lt;</button>
                        <span class="dp-month-year">${months[currentMonth]} ${currentYear}</span>
                        <button type="button" class="dp-next">&gt;</button>
                    </div>
                    <div class="dp-weekdays">
                        <span>Su</span><span>Mo</span><span>Tu</span><span>We</span><span>Th</span><span>Fr</span><span>Sa</span>
                    </div>
                    <div class="dp-days">`;

                for (let i = 0; i < firstDay; i++) {
                    html += `<span class="dp-empty"></span>`;
                }
                for (let d = 1; d <= daysInMonth; d++) {
                    const dateObj = new Date(currentYear, currentMonth, d);
                    const isDisabled = dateObj < minDate;
                    const isToday = d === today.getDate() && currentMonth === today.getMonth() && currentYear === today.getFullYear();
                    html += `<span class="dp-day${isDisabled ? ' disabled' : ''}${isToday ? ' today' : ''}" data-day="${d}">${d}</span>`;
                }
                html += `</div>
                    <div class="dp-footer">
                        <button type="button" class="dp-today">Today</button>
                        <button type="button" class="dp-clear">Clear</button>
                    </div>`;

                picker.innerHTML = html;

                // Bind events
                picker.querySelector('.dp-prev').addEventListener('click', (e) => {
                    e.stopPropagation();
                    currentMonth--;
                    if (currentMonth < 0) { currentMonth = 11; currentYear--; }
                    renderCalendar();
                });

                picker.querySelector('.dp-next').addEventListener('click', (e) => {
                    e.stopPropagation();
                    currentMonth++;
                    if (currentMonth > 11) { currentMonth = 0; currentYear++; }
                    renderCalendar();
                });

                picker.querySelectorAll('.dp-day:not(.disabled)').forEach(day => {
                    day.addEventListener('click', (e) => {
                        e.stopPropagation();
                        const selected = new Date(currentYear, currentMonth, parseInt(day.dataset.day));
                        inputElem.value = formatDisplayDate(selected);
                        picker.remove();
                    });
                });

                const todayBtn = picker.querySelector('.dp-today');
                if (todayBtn) {
                    todayBtn.addEventListener('click', (e) => {
                        e.stopPropagation();
                        inputElem.value = formatDisplayDate(today);
                        picker.remove();
                    });
                }

                const clearBtn = picker.querySelector('.dp-clear');
                if (clearBtn) {
                    clearBtn.addEventListener('click', (e) => {
                        e.stopPropagation();
                        inputElem.value = isCheckOut ? 'Check Out' : 'Check In';
                        picker.remove();
                    });
                }
            };

            document.body.appendChild(picker);

            // Position below icon
            if (icon) {
                const iconRect = icon.getBoundingClientRect();
                picker.style.position = 'fixed';
                picker.style.top = (iconRect.bottom + 5) + 'px';
                picker.style.left = (iconRect.left - 80) + 'px';
            }

            renderCalendar();

            // Close on outside click
            setTimeout(() => {
                document.addEventListener('click', function closePicker(e) {
                    if (!picker.contains(e.target) && e.target !== inputElem) {
                        picker.remove();
                        document.removeEventListener('click', closePicker);
                    }
                });
            }, 100);
        };

        txtCheckIn.addEventListener('click', () => openDatePicker(txtCheckIn, false));
        txtCheckOut.addEventListener('click', () => openDatePicker(txtCheckOut, true));
    }

    // Hero Booking Bar Date Pickers (Fallback for Standard Form)
    const heroCheckIn = document.getElementById('heroCheckIn');
    const heroCheckOut = document.getElementById('heroCheckOut');
    
    if (heroCheckIn && heroCheckOut) {
        const today = new Date();
        const tomorrow = new Date();
        tomorrow.setDate(today.getDate() + 1);

        const formatDate = (date) => {
            const yyyy = date.getFullYear();
            const mm = String(date.getMonth() + 1).padStart(2, '0');
            const dd = String(date.getDate()).padStart(2, '0');
            return `${yyyy}-${mm}-${dd}`;
        };

        const todayStr = formatDate(today);
        const tomorrowStr = formatDate(tomorrow);

        heroCheckIn.min = todayStr;
        heroCheckIn.value = todayStr;
        heroCheckOut.min = tomorrowStr;
        heroCheckOut.value = tomorrowStr;

        heroCheckIn.addEventListener('change', function() {
            if (this.value) {
                const selectedIn = new Date(this.value);
                const nextDay = new Date(selectedIn);
                nextDay.setDate(selectedIn.getDate() + 1);
                const nextDayStr = formatDate(nextDay);
                
                heroCheckOut.min = nextDayStr;
                if (heroCheckOut.value <= this.value) {
                    heroCheckOut.value = nextDayStr;
                }
            }
        });
    }

    // ===================================
    // Counter Animation
    // ===================================
    function animateCounters() {
        const counters = document.querySelectorAll('.stat-number, .hero-stat-number');
        counters.forEach(counter => {
            const target = +counter.getAttribute('data-count');
            if (!target) return;
            
            let count = 0;
            const speed = target > 100 ? 20 : 60;
            const step = Math.ceil(target / 40);

            const timer = setInterval(() => {
                count += step;
                if (count >= target) {
                    counter.textContent = target;
                    clearInterval(timer);
                } else {
                    counter.textContent = count;
                }
            }, speed);
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
    
    let counterAnimated = false;
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animated');
                if (!counterAnimated && (entry.target.classList.contains('hero-stats-wrapper') || entry.target.querySelector('.stat-number'))) {
                    counterAnimated = true;
                    animateCounters();
                }
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
