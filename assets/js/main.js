// main.js - Optimized Version
document.addEventListener('DOMContentLoaded', function () {
    // Mobile Menu Toggle
    initMobileMenu();
    
    // Date Picker - Set min date to today
    initDatePicker();
    
    // Set up validation for all forms
    setupFormValidation('form'); // General form
    setupFormValidation('#contact-form'); // Contact form
    
    // Initialize all components
    initHeroSlider();
    initAnimatedCounters();
    initServiceCards();
    initLanguageSwitch();
    initSocialPopups();
    initFaqToggle();

    // Initialize Google Maps if API is loaded
    if (typeof google !== 'undefined') {
        initMap();
    } else {
        window.initMap = initMap;
    }
});

// Mobile Menu Toggle
function initMobileMenu() {
    const mobileMenuButton = document.querySelector('.mobile-menu-button');
    const mobileMenu = document.querySelector('.mobile-menu');
    
    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', function () {
            mobileMenu.classList.toggle('hidden');
        });
    }
}

// Date Picker
function initDatePicker() {
    const dateInput = document.getElementById('date');
    if (dateInput) {
        dateInput.min = new Date().toISOString().split('T')[0];
    }
}

// Form Validation
function setupFormValidation(formSelector) {
    const form = document.querySelector(formSelector);
    if (form) {
        form.addEventListener('submit', function (e) {
            if (!validateForm(form)) {
                e.preventDefault();
                alert(t('ກະລຸນາປ້ອນຂໍ້ມູນໃນຊ່ອງທີ່ຕ້ອງການໃຫ້ຄົບຖ້ວນ', 'Please fill in all required fields'));
            }
        });
    }
}

// Form Validation Helper
function validateForm(form) {
    const requiredFields = form.querySelectorAll('[required]');
    let isValid = true;

    requiredFields.forEach(field => {
        if (!field.value.trim()) {
            field.classList.add('border-red-500');
            isValid = false;
        } else {
            field.classList.remove('border-red-500');
        }
    });

    return isValid;
}

// Google Map Initialization
function initMap() {
    if (document.getElementById('map')) {
        const clinicLocation = { lat: 13.746391, lng: 100.564822 };
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 15,
            center: clinicLocation,
        });
        new google.maps.Marker({
            position: clinicLocation,
            map,
            title: t("ຄລີນິກສຸຂະພາບດີ", "Healthy Clinic"),
        });
    }
}

// Hero Slider with Auto-Play and Navigation
function initHeroSlider() {
    const slides = document.querySelectorAll('.hero-slide');
    const dots = document.querySelectorAll('.hero-dot');
    const nextBtn = document.querySelector('.hero-next');
    const prevBtn = document.querySelector('.hero-prev');
    
    if (slides.length === 0) return;
    
    let currentIndex = 0;
    let slideInterval;

    function showSlide(index) {
        // Handle out of bounds
        if (index >= slides.length) currentIndex = 0;
        else if (index < 0) currentIndex = slides.length - 1;
        else currentIndex = index;

        // Update slides
        slides.forEach((slide, i) => {
            slide.classList.toggle('active', i === currentIndex);
            slide.classList.toggle('hidden', i !== currentIndex);
        });

        // Update dots
        if (dots.length > 0) {
            dots.forEach((dot, i) => {
                dot.classList.toggle('bg-opacity-80', i === currentIndex);
                dot.classList.toggle('bg-opacity-30', i !== currentIndex);
            });
        }
    }

    function startSlider() {
        slideInterval = setInterval(() => {
            showSlide(currentIndex + 1);
        }, 5000);
    }

    function stopSlider() {
        clearInterval(slideInterval);
    }

    // Initialize
    showSlide(0);
    startSlider();

    // Navigation controls
    if (nextBtn) nextBtn.addEventListener('click', () => {
        stopSlider();
        showSlide(currentIndex + 1);
        startSlider();
    });

    if (prevBtn) prevBtn.addEventListener('click', () => {
        stopSlider();
        showSlide(currentIndex - 1);
        startSlider();
    });

    // Dot navigation
    dots.forEach((dot, i) => {
        dot.addEventListener('click', () => {
            stopSlider();
            showSlide(i);
            startSlider();
        });
    });

    // Pause on hover
    const sliderContainer = document.querySelector('.hero-slider-container');
    if (sliderContainer) {
        sliderContainer.addEventListener('mouseenter', stopSlider);
        sliderContainer.addEventListener('mouseleave', startSlider);
    }
}

// Animated Counter
function initAnimatedCounters() {
    const counters = document.querySelectorAll('.counter');
    if (counters.length === 0) return;
    
    const speed = 200;
    let countersAnimated = false;

    function animateCounters() {
        if (countersAnimated) return;
        
        counters.forEach(counter => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText;
            const increment = target / speed;

            if (count < target) {
                counter.innerText = Math.ceil(count + increment);
                setTimeout(animateCounters, 1);
            } else {
                counter.innerText = target;
                countersAnimated = true;
            }
        });
    }

    function checkScroll() {
        const firstCounter = counters[0];
        if (firstCounter) {
            const counterPos = firstCounter.getBoundingClientRect().top;
            const screenPos = window.innerHeight / 1.3;

            if (counterPos < screenPos && firstCounter.innerText === '0') {
                animateCounters();
                window.removeEventListener('scroll', checkScroll);
            }
        }
    }

    window.addEventListener('scroll', checkScroll);
    // Trigger once on load in case already in view
    checkScroll();
}

// Service Card Hover Effects
function initServiceCards() {
    document.querySelectorAll('.service-card').forEach(card => {
        const icon = card.querySelector('.service-icon');
        if (icon) {
            card.addEventListener('mouseenter', function () {
                icon.style.transform = 'rotateY(180deg)';
            });

            card.addEventListener('mouseleave', function () {
                icon.style.transform = 'rotateY(0)';
            });
        }
    });
}

// Language Switch
function initLanguageSwitch() {
    document.querySelectorAll('.lang-switch').forEach(btn => {
        btn.addEventListener('click', function () {
            const lang = this.getAttribute('data-lang');
            document.querySelectorAll('[data-lang]').forEach(el => {
                el.textContent = el.getAttribute(`data-${lang}`);
            });
        });
    });
}

// Social Popup Initialization
function initSocialPopups() {
    document.querySelectorAll('.social-popup').forEach(button => {
        // เพิ่ม effect เมื่อโฮเวอร์
        button.addEventListener('mouseenter', function() {
            this.style.animation = 'none';
            setTimeout(() => {
                this.style.animation = 'float 3s ease-in-out infinite';
            }, 10);
        });
        
        // สำหรับ mobile ให้แสดง tooltip เมื่อคลิก
        button.addEventListener('click', function(e) {
            if (window.innerWidth < 768) {
                const tooltip = this.querySelector('.tooltip');
                if (tooltip) {
                    e.preventDefault();
                    tooltip.classList.toggle('hidden');
                    setTimeout(() => {
                        tooltip.classList.toggle('hidden');
                    }, 2000);
                    
                    // เปิดลิงก์หลังจากแสดง tooltip
                    if (this.href) {
                        setTimeout(() => {
                            window.open(this.href, '_blank');
                        }, 500);
                    }
                }
            }
        });
    });
}

// FAQ Toggle
function initFaqToggle() {
    document.querySelectorAll('.faq-question').forEach(button => {
        button.addEventListener('click', () => {
            const answer = button.nextElementSibling;
            const icon = button.querySelector('i');
            
            answer.classList.toggle('hidden');
            icon.classList.toggle('transform');
            icon.classList.toggle('rotate-180');
        });
    });
}

// Translation helper for JavaScript
function t(loText, enText) {
    // Try to get language from session storage or default to 'lo'
    const lang = sessionStorage.getItem('lang') || 'lo';
    return lang === 'lo' ? loText : enText;
}
