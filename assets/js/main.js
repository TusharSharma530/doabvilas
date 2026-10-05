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
            header.classList.toggle('scrolled', window.scrollY > 100);
        }, { passive: true });
    }
    
    // ===================================
    // Mobile Menu Toggle (Sidebar)
    // ===================================
    const mobileMenuToggle = document.getElementById('mobileMenuToggle');
    const headerNav = document.getElementById('headerNav');
    const mobileSidebarClose = document.getElementById('mobileSidebarClose');
    
    // Create overlay element
    const sidebarOverlay = document.createElement('div');
    sidebarOverlay.className = 'mobile-sidebar-overlay';
    document.body.appendChild(sidebarOverlay);

    function openSidebar() {
        mobileMenuToggle.classList.add('active');
        headerNav.classList.add('active');
        sidebarOverlay.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeSidebar() {
        mobileMenuToggle.classList.remove('active');
        headerNav.classList.remove('active');
        sidebarOverlay.classList.remove('active');
        document.body.style.overflow = '';
    }
    
    if (mobileMenuToggle && headerNav) {
        mobileMenuToggle.addEventListener('click', function() {
            if (headerNav.classList.contains('active')) {
                closeSidebar();
            } else {
                openSidebar();
            }
        });

        // Close button inside sidebar
        if (mobileSidebarClose) {
            mobileSidebarClose.addEventListener('click', function() {
                closeSidebar();
            });
        }

        // Close on overlay click
        sidebarOverlay.addEventListener('click', function() {
            closeSidebar();
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
                        closeSidebar();
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

    // ===================================
    // Date Field Labels
    // Native date inputs show the browser's dd-mm-yyyy hint and support no
    // placeholder, so a label element stands in until a date is chosen.
    // ===================================
    document.querySelectorAll('.line-date-group input[type="date"]').forEach(function(input) {
        const group = input.closest('.line-date-group');
        if (!group) return;

        const label = document.createElement('span');
        label.className = 'date-field-label';
        label.textContent = input.dataset.placeholder || '';
        group.appendChild(label);

        const sync = () => {
            group.classList.toggle('has-value', !!input.value);
        };

        input.addEventListener('change', sync);
        input.addEventListener('input', sync);
        sync();
    });

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
    document.body.appendChild(backToTop);
    
    window.addEventListener('scroll', function() {
        const show = window.pageYOffset > 500;
        backToTop.style.opacity = show ? '1' : '0';
        backToTop.style.visibility = show ? 'visible' : 'hidden';
    }, { passive: true });
    
    backToTop.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
    
    // ===================================
    // WhatsApp Button Pulse (CSS-driven, see style.css .whatsapp-float)
    // ===================================

    // ===================================
    // Image Lightbox
    // Markup lives in includes/lightbox.php; the pages call these via inline
    // onclick, so they are attached to window rather than kept local.
    // ===================================
    window.openLightbox = function(src, caption) {
        const box = document.getElementById('galleryLightbox');
        if (!box) return;
        const img = document.getElementById('lightboxImg');
        const cap = document.getElementById('lightboxCaption');
        if (img) img.src = src;
        if (cap) cap.textContent = caption;
        box.classList.add('active');
        document.body.style.overflow = 'hidden';
    };

    window.closeLightbox = function() {
        const box = document.getElementById('galleryLightbox');
        if (!box) return;
        box.classList.remove('active');
        document.body.style.overflow = '';
    };

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') window.closeLightbox();
    });
});

// Contact Us Page Form

document.addEventListener('DOMContentLoaded', function () {

    const form = document.getElementById('contactForm');
    const button = document.getElementById('contactSubmitBtn');
    const successBox = document.getElementById('contactSuccess');
    const sendAnother = document.getElementById('contactSendAnother');

    if (!form) return;

    form.addEventListener('submit', function (e) {

        e.preventDefault();

        const originalText = button.innerHTML;

        button.disabled = true;
        button.innerHTML = 'SENDING...';

        fetch('includes/contact-submit.php', {
            method: 'POST',
            body: new FormData(form)
        })
        .then(response => response.json())
        .then(data => {

            if (data.success) {

                // Replace the form with the thank you message
                form.style.display = 'none';

                if (successBox) {
                    successBox.classList.add('is-visible');
                    successBox.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }

            } else {
                alert(data.message);
            }

        })
        .catch(error => {

            console.error(error);
            alert('Something went wrong. Please try again.');

        })
        .finally(() => {

            button.disabled = false;
            button.innerHTML = originalText;

        });

    });

    // Bring the form back for a new message
    if (sendAnother) {
        sendAnother.addEventListener('click', function () {

            form.reset();
            form.style.display = '';

            if (successBox) {
                successBox.classList.remove('is-visible');
                form.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }

        });
    }

});

// Quick Enquiry Modal (footer)
document.addEventListener('DOMContentLoaded', function () {

    const form = document.getElementById('quickEnquiryForm');

    if (!form) return;

    const modalEl     = document.getElementById('quickEnquiryModal');
    const successBox  = document.getElementById('quickEnquirySuccess');
    const doneBtn     = document.getElementById('quickEnquiryDone');
    const button      = form.querySelector('button[type="submit"]');
    const originalText = button ? button.innerHTML : '';

    // ===================================
    // reCAPTCHA - the widget is created when the modal opens, because it
    // cannot be painted while its container is still display:none.
    // ===================================
    const captchaWrap    = document.getElementById('quickEnquiryCaptcha');
    const captchaSiteKey = captchaWrap ? captchaWrap.getAttribute('data-sitekey') : '';
    let captchaWidgetId  = null;

    const renderCaptcha = function (tries) {

        if (!captchaWrap || !captchaSiteKey || captchaWidgetId !== null) return;

        if (typeof grecaptcha === 'undefined') {
            if (tries > 0) setTimeout(function () { renderCaptcha(tries - 1); }, 300);
            return;
        }

        try {
            captchaWidgetId = grecaptcha.render(captchaWrap, { sitekey: captchaSiteKey });
        } catch (error) {
            console.error(error);
        }
    };

    const captchaPassed = function () {
        if (typeof grecaptcha === 'undefined' || captchaWidgetId === null) return true;
        return grecaptcha.getResponse(captchaWidgetId) !== '';
    };

    const resetCaptcha = function () {
        if (typeof grecaptcha === 'undefined' || captchaWidgetId === null) return;
        try { grecaptcha.reset(captchaWidgetId); } catch (error) {}
    };

    const showForm = function () {
        form.style.display = '';
        if (successBox) successBox.classList.remove('is-visible');
    };

    form.addEventListener('submit', function (e) {

        e.preventDefault();

        if (typeof form.checkValidity === 'function' && !form.checkValidity()) {
            form.reportValidity();
            return;
        }

        if (!captchaPassed()) {
            alert('Please complete the captcha.');
            return;
        }

        if (button) {
            button.disabled = true;
            button.innerHTML = 'SENDING...';
        }

        fetch('includes/contact-submit.php', {
            method: 'POST',
            body: new FormData(form)
        })
        .then(response => response.json())
        .then(data => {

            if (data.success) {

                // Replace the form with the thank you message
                form.style.display = 'none';

                if (successBox) successBox.classList.add('is-visible');

            } else {
                alert(data.message);
            }

        })
        .catch(error => {

            console.error(error);
            alert('Something went wrong. Please try again.');

        })
        .finally(() => {

            if (button) {
                button.disabled = false;
                button.innerHTML = originalText;
            }

        });

    });

    // Close the modal and restore the form for the next enquiry
    if (doneBtn) {
        doneBtn.addEventListener('click', function () {
            form.reset();
            showForm();
            resetCaptcha();

            if (modalEl && window.bootstrap) {
                const modalInstance = bootstrap.Modal.getInstance(modalEl);
                if (modalInstance) modalInstance.hide();
            }
        });
    }

    if (modalEl) {

        modalEl.addEventListener('shown.bs.modal', function () {
            renderCaptcha(10);
        });

        modalEl.addEventListener('hidden.bs.modal', function () {
            form.reset();
            showForm();
            resetCaptcha();
        });
    }

});

// Home Banner Booking Bar (BOOK NOW sends an email - no redirect)

document.addEventListener('DOMContentLoaded', function () {

    const form = document.getElementById('bravuraBookingForm');

    if (!form) return;

    const successBox   = document.getElementById('bookingSuccess');
    const againBtn     = document.getElementById('bookingSendAnother');
    const button       = form.querySelector('button[type="submit"]');
    const originalText = button ? button.innerHTML : '';

    const showForm = function () {
        form.style.display = '';
        if (successBox) successBox.classList.remove('is-visible');
    };

    form.addEventListener('submit', function (e) {

        e.preventDefault();

        if (typeof form.checkValidity === 'function' && !form.checkValidity()) {
            form.reportValidity();
            return;
        }

        if (button) {
            button.disabled = true;
            button.innerHTML = 'SENDING...';
        }

        fetch('includes/contact-submit.php', {
            method: 'POST',
            body: new FormData(form)
        })
        .then(response => response.json())
        .then(data => {

            if (data.success) {

                // Replace the booking bar with the thank you message
                form.style.display = 'none';

                if (successBox) {
                    successBox.classList.add('is-visible');
                    successBox.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }

            } else {
                alert(data.message);
            }

        })
        .catch(error => {

            console.error(error);
            alert('Something went wrong. Please try again.');

        })
        .finally(() => {

            if (button) {
                button.disabled = false;
                button.innerHTML = originalText;
            }

        });

    });

    // Bring the booking bar back for another enquiry
    if (againBtn) {
        againBtn.addEventListener('click', function () {

            form.reset();
            showForm();

            const roomText = document.getElementById('roomSelectedText');
            if (roomText) roomText.textContent = 'Select Room';

            form.querySelectorAll('.line-date-group input[type="date"]').forEach(function (input) {
                input.value = '';
                input.dispatchEvent(new Event('change'));
            });

        });
    }

});
