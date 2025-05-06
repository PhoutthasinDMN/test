// main.js - Optimized Version
document.addEventListener('DOMContentLoaded', function () {
    // Mobile Menu Toggle
    const mobileMenuButton = document.querySelector('.mobile-menu-button');
    const mobileMenu = document.querySelector('.mobile-menu');
    
    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', function () {
            mobileMenu.classList.toggle('hidden');
        });
    }

    // Date Picker - Set min date to today
    const dateInput = document.getElementById('date');
    if (dateInput) {
        dateInput.min = new Date().toISOString().split('T')[0];
    }

    // Form Validation (Generic Function)
    function setupFormValidation(formSelector) {
        const form = document.querySelector(formSelector);
        if (form) {
            form.addEventListener('submit', function (e) {
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

                if (!isValid) {
                    e.preventDefault();
                    alert(t('ກະລຸນາປ້ອນຂໍ້ມູນໃນຊ່ອງທີ່ຕ້ອງການໃຫ້ຄົບຖ້ວນ', 'Please fill in all required fields'));
                }
            });
        }
    }

    // Set up validation for all forms
    setupFormValidation('form'); // General form
    setupFormValidation('#contact-form'); // Contact form

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
            dots.forEach((dot, i) => {
                dot.classList.toggle('bg-opacity-80', i === currentIndex);
                dot.classList.toggle('bg-opacity-30', i !== currentIndex);
            });
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
        if (slides.length > 0) {
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
    }

    // Animated Counter
    function initAnimatedCounters() {
        const counters = document.querySelectorAll('.counter');
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

        if (counters.length > 0) {
            window.addEventListener('scroll', checkScroll);
            // Trigger once on load in case already in view
            checkScroll();
        }
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

    // Initialize all components
    initHeroSlider();
    initAnimatedCounters();
    initServiceCards();
    initLanguageSwitch();

    // Initialize Google Maps if API is loaded
    if (typeof google !== 'undefined') {
        initMap();
    } else {
        window.initMap = initMap;
    }
});

// ในส่วน DOMContentLoaded
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
        e.preventDefault();
        const tooltip = this.querySelector('.tooltip-text');
        tooltip.classList.toggle('md:hidden');
        setTimeout(() => {
          tooltip.classList.toggle('md:hidden');
        }, 2000);
        window.open(this.href, '_blank');
      }
    });
  });

  // ในไฟล์ main.js
const counters = document.querySelectorAll('.counter');
counters.forEach(counter => {
    const target = +counter.getAttribute('data-target');
    const count = +counter.innerText;
    const increment = target / 100;
    
    if (count < target) {
        counter.innerText = Math.ceil(count + increment);
        setTimeout(updateCount, 10);
    } else {
        counter.innerText = target;
    }
});

// Play/pause on click
document.querySelectorAll('.video-container').forEach(container => {
    const video = container.querySelector('video');
    container.addEventListener('click', function() {
      if (video.paused) {
        video.play();
      } else {
        video.pause();
      }
    });
  });

  document.addEventListener('DOMContentLoaded', function() {
    // สำหรับ Mobile ให้แสดง Tooltip เมื่อคลิก
    document.querySelectorAll('.social-popup').forEach(button => {
        button.addEventListener('click', function(e) {
            if (window.innerWidth < 768) {
                e.preventDefault(); // ป้องกันการเปิดลิงก์ทันที
                const tooltip = this.querySelector('.tooltip');
                tooltip.classList.toggle('hidden'); // แสดง Tooltip
                setTimeout(() => {
                    tooltip.classList.toggle('hidden'); // ซ่อน Tooltip หลังจาก 2 วินาที
                }, 2000);
                window.open(this.href, '_blank'); // เปิดลิงก์ในแท็บใหม่
            }
        });
    });
});
