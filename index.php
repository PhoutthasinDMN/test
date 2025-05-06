<?php
require_once 'includes/config.php'; // เรียกใช้ config.php ก่อน
$pageTitle = t("ໜ້າຫຼັກ", "Home");
require_once 'includes/header.php';
?>

<!-- Hero Section -->
<section class="relative w-full h-screen overflow-hidden">

    <!-- Slides -->
    <div class="hero-slide absolute inset-0 transition-opacity duration-1000">
        <img src="assets/images/hero1.jpg" alt="Slide 1" class="w-full h-full object-cover">
    </div>
    <div class="hero-slide absolute inset-0 transition-opacity duration-1000 hidden">
        <img src="assets/images/hero2.jpg" alt="Slide 2" class="w-full h-full object-cover">
    </div>
    <div class="hero-slide absolute inset-0 transition-opacity duration-1000 hidden">
        <img src="assets/images/hero3.jpg" alt="Slide 3" class="w-full h-full object-cover">
    </div>

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black bg-opacity-40 z-10"></div>

    <!-- Content -->
    <div class="relative z-20 flex flex-col items-center justify-center h-full text-white text-center px-4">
        <h1 class="lang text-2xl md:text-4xl font-bold mb-4"
            data-en="Welcome to Our Clinic"
            data-lo="ສະບາຍດີສູ່ຄີນິກວັນເມດ">
            <?php echo t('ສະບາຍດີສູ່ຄີນິກວັນເມດ', 'Welcome to Our Clinic'); ?>
        </h1>

        <p class="lang text-base md:text-lg mb-6"
            data-en="Your health is our top priority"
            data-lo="ສຸຂະພາບຂອງທ່ານແມ່ນສິ່ງສຳຄັນຂອງພວກເຮົາ">
            <?php echo t('ສຸຂະພາບຂອງທ່ານແມ່ນສິ່ງສຳຄັນຂອງພວກເຮົາ', 'Your health is our top priority'); ?>
        </p>

        <a href="#appointment"
            class="lang bg-blue-500 hover:bg-blue-600 text-white font-semibold px-6 py-2 rounded-lg transition"
            data-en="Make Appointment"
            data-lo="ນັດໝາຍ">
            <?php echo t('ນັດໝາຍ', 'Make Appointment'); ?>
        </a>
    </div>



    <!-- Navigation Dots -->
    <div class="absolute bottom-5 left-1/2 transform -translate-x-1/2 flex space-x-2 z-30">
        <span class="hero-dot w-3 h-3 rounded-full bg-white bg-opacity-80 cursor-pointer"></span>
        <span class="hero-dot w-3 h-3 rounded-full bg-white bg-opacity-30 cursor-pointer"></span>
        <span class="hero-dot w-3 h-3 rounded-full bg-white bg-opacity-30 cursor-pointer"></span>
    </div>
</section>


<!-- Our services -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-blue-800 mb-12"><?php echo t('ບໍລິການຂອງເຮົາ', 'Our Services'); ?></h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <!-- Service 1 -->
            <div class="service-card bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition duration-500 transform hover:-translate-y-2">
                <div class="relative overflow-hidden h-48">
                    <img src="assets/images/pad-equipment.jpg" alt="Pad Equipment" class="w-full h-full object-cover transition duration-500 hover:scale-110">
                    <div class="absolute inset-0 bg-blue-800 bg-opacity-60 flex items-center justify-center opacity-0 hover:opacity-100 transition duration-300">
                        <a href="services.php" class="text-white font-semibold px-4 py-2 border-2 border-white rounded-lg hover:bg-white hover:text-blue-800 transition"><?php echo t('ຮູ້ເພີ່ມເຕີມ', 'Learn More'); ?></a>
                    </div>
                </div>
                <div class="p-6">
                    <div class="text-blue-600 text-4xl mb-4">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-blue-800"><?php echo t('ອຸປະກອນແພດ', 'Pad Equipment'); ?></h3>
                    <p class="text-gray-600"><?php echo t('ອຸປະກອນແພດທີ່ມີຄຸນສົມບັດການບໍລິການ', 'Medical pad equipment for better service'); ?></p>
                </div>
            </div>
            
            <!-- Service 2: -->
            <div class="service-card bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition duration-500 transform hover:-translate-y-2">
                <div class="relative overflow-hidden h-48">
                    <img src="assets/images/Echo-machine.jpg" alt="X-ray Machine" class="w-full h-full object-cover transition duration-500 hover:scale-110">
                    <div class="absolute inset-0 bg-blue-800 bg-opacity-60 flex items-center justify-center opacity-0 hover:opacity-100 transition duration-300">
                        <a href="services.php" class="text-white font-semibold px-4 py-2 border-2 border-white rounded-lg hover:bg-white hover:text-blue-800 transition"><?php echo t('ຮູ້ເພີ່ມເຕີມ', 'Learn More'); ?></a>
                    </div>
                </div>
                <div class="p-6">
                    <div class="text-blue-600 text-4xl mb-4">
                        <i class="fas fa-x-ray"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-blue-800"><?php echo t('ອຸປະກອນ X-ray', 'X-ray Machine'); ?></h3>
                    <p class="text-gray-600"><?php echo t('ການຖ່າຍພາບ X-ray ເພື່ອການກວດສຸຂະພາບ', 'X-ray imaging for health diagnostics'); ?></p>
                </div>
            </div>

            <!-- Service 3: -->
            <div class="service-card bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition duration-500 transform hover:-translate-y-2">
                <div class="relative overflow-hidden h-48">
                    <img src="assets/images/home-care.jpg" alt="Home Care" class="w-full h-full object-cover transition duration-500 hover:scale-110">
                    <div class="absolute inset-0 bg-blue-800 bg-opacity-60 flex items-center justify-center opacity-0 hover:opacity-100 transition duration-300">
                        <a href="services.php" class="text-white font-semibold px-4 py-2 border-2 border-white rounded-lg hover:bg-white hover:text-blue-800 transition"><?php echo t('ຮູ້ເພີ່ມເຕີມ', 'Learn More'); ?></a>
                    </div>
                </div>
                <div class="p-6">
                    <div class="text-blue-600 text-4xl mb-4">
                        <i class="fas fa-house-user"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-blue-800"><?php echo t('ການດູແລຜູ້ປວດທີ່ບ້ານ', 'Home Care'); ?></h3>
                    <p class="text-gray-600"><?php echo t('ການດູແລຜູ້ປວດທີ່ບ້ານດ້ວຍຄວາມປອດໄພ', 'Home care services for patient care at home'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our End -->

<!-- About Clinic with YouTube Video -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <div class="bg-white rounded-3xl shadow-xl overflow-hidden">
            <div class="flex flex-col md:flex-row">
                <!-- YouTube Embed -->
                <div class="md:w-1/2 relative pb-[56.25%]"> <!-- 16:9 Aspect Ratio -->
                    <iframe class="absolute top-0 left-0 w-full h-full"
                        src="https://www.youtube.com/embed/your_video_id"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>

                <!-- เนื้อหา -->
                <div class="md:w-1/2 p-8 md:p-12">
                    <div class="flex items-center mb-6">
                        <div class="bg-blue-100 p-3 rounded-full mr-4">
                            <i class="fas fa-heartbeat text-blue-600 text-2xl"></i>
                        </div>
                        <h2 class="text-3xl font-bold text-blue-800">
                            <?php echo t('ກ່ຽວກັບຄລີນິກຂອງເຮົາ', 'About Our Clinic'); ?>
                        </h2>
                    </div>

                    <div class="space-y-5">
                        <p class="text-gray-700">
                            <?php echo t('ຄລີນິກສຸຂະພາບດີເປັນໜຶ່ງໃນຄລີນິກທີ່ມີຄຸນນະພາບສູງ ໃຫ້ບໍລິການມາແຕ່ປີ 2550', 'Healthy Clinic has been providing quality services since 2007'); ?>
                        </p>

                        <div class="grid grid-cols-2 gap-4 pt-4">
                            <div class="bg-blue-50 p-4 rounded-lg">
                                <i class="fas fa-user-md text-blue-600 text-2xl mb-2"></i>
                                <h4 class="font-semibold text-blue-800"><?php echo t('ແພດຜູ້ຊ່ຽວຊານ', 'Expert Doctors'); ?></h4>
                                <p class="text-sm text-gray-600"><?php echo t('ມີປະສົບການດົນນານ', 'Years of experience'); ?></p>
                            </div>

                            <div class="bg-blue-50 p-4 rounded-lg">
                                <i class="fas fa-clock text-blue-600 text-2xl mb-2"></i>
                                <h4 class="font-semibold text-blue-800"><?php echo t('ເປີດບໍລິການ', 'Opening Hours'); ?></h4>
                                <p class="text-sm text-gray-600"><?php echo t('ທຸກມື້ 08:00-20:00', 'Daily 8AM-8PM'); ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 flex flex-wrap gap-4">
                        <a href="about.php" class="flex-1 bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-semibold text-center transition duration-300">
                            <?php echo t('ອ່ານເພີ່ມເຕີມ', 'Read More'); ?>
                        </a>
                        <a href="contact.php" class="flex-1 border border-blue-600 text-blue-600 hover:bg-blue-50 px-6 py-3 rounded-lg font-semibold text-center transition duration-300">
                            <?php echo t('ຕິດຕໍ່ເຮົາ', 'Contact Us'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<!-- Doctors -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-blue-800 mb-12"><?php echo t('ທີມແພດຂອງເຮົາ', 'Our Doctors'); ?></h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Doctor 1 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                <img src="assets/images/doctor1.jpg" alt="<?php echo t('ດຣ. ໂນ້ ໃຈດີ', 'Dr. No Jaidee'); ?>" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-blue-800 mb-2"><?php echo t('ດຣ. ໂນ້ ໃຈດີ', 'Dr. No Jaidee'); ?></h3>
                    <p class="text-blue-600 mb-3"><?php echo t('ແພດພາຍໃນ', 'Internal Medicine'); ?></p>
                    <p class="text-gray-600"><?php echo t('ປະລິນຍາແພດສາດບັນດິດ ມະຫາວິທະຍາໄລມະຫິດໂລ, ໃບຢັ້ງຢືນບັນດິດຊັ້ນສູງວິຊາພາຍໃນ', 'Doctor of Medicine, Mahidol University, Diploma in Internal Medicine'); ?></p>
                </div>
            </div>

            <!-- Doctor 2 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                <img src="assets/images/doctor2.jpg" alt="<?php echo t('ດຣ. ໂນ້ ສຸດໃຈ', 'Dr. No Soudjai'); ?>" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-blue-800 mb-2"><?php echo t('ດຣ. ໂນ້ ສຸດໃຈ', 'Dr. No Soudjai'); ?></h3>
                    <p class="text-blue-600 mb-3"><?php echo t('ແພດເດັກ', 'Pediatrician'); ?></p>
                    <p class="text-gray-600"><?php echo t('ປະລິນຍາແພດສາດບັນດິດມະຫາວິທະຍາໄລ, ໃບຢັ້ງຢືນບັນດິດຊັ້ນສູງວິຊາເດັກ', 'Doctor of Medicine, University, Diploma in Pediatrics'); ?></p>
                </div>
            </div>

            <!-- Doctor 3 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                <img src="assets/images/doctor3.jpg" alt="<?php echo t('ດຣ. ໂນ້ ແສນສຸກ', 'Dr. No Saensuk'); ?>" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-blue-800 mb-2"><?php echo t('ດຣ. ໂນ້ ແສນສຸກ', 'Dr. No Saensuk'); ?></h3>
                    <p class="text-blue-600 mb-3"><?php echo t('ແພດຜ່າຕັດ', 'Surgeon'); ?></p>
                    <p class="text-gray-600"><?php echo t('ປະລິນຍາແພດສາດບັນດິດ ມະຫາວິທະຍາໄລ, ໃບຢັ້ງຢືນບັນດິດຊັ້ນສູງວິຊາຜ່າຕັດ', 'Doctor of Medicine, University, Diploma in Surgery'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="py-16 bg-blue-50">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-blue-800 mb-12"><?php echo t('ຄວາມປະທັບໃຈຈາກຜູ້ໃຊ້ບໍລິການ', 'Patient Testimonials'); ?></h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Testimonial 1 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="text-yellow-400 text-xl mr-2">
                    <svg class="w-5 h-5 inline fill-current" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg class="w-5 h-5 inline fill-current" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg class="w-5 h-5 inline fill-current" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg class="w-5 h-5 inline fill-current" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg class="w-5 h-5 inline fill-current" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                </div>
                <p class="text-gray-700 mb-4"><?php echo t('"ຄລີນິກສະອາດ ບັນຍາກາດດີ ພະນັກງານແລະແພດເປັນກັນເອງຫຼາຍ ກວດຮັກສາໄດ້ດີ ອະທິບາຍເຂົ້າໃຈງ່າຍ ລາຄາກໍເໝາະສົມ"', '"The clinic is clean with good atmosphere, staff and doctors are very friendly. Good treatment and easy to understand explanation. Reasonable price."'); ?></p>
                <div class="flex items-center">
                    <img src="assets/images/user1.jpg" alt="<?php echo t('ຜູ້ໃຊ້ບໍລິການ', 'Patient'); ?>" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h4 class="font-semibold text-blue-800"><?php echo t('ທ້າວ ທໍ່ ໃຈດີ', 'Mr. Thor Jaidee'); ?></h4>
                        <p class="text-sm text-gray-600"><?php echo t('ຜູ້ໃຊ້ບໍລິການ', 'Patient'); ?></p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="flex items-center mb-4">
                    <div class="text-yellow-400 text-xl mr-2">
                        <svg class="w-5 h-5 inline fill-current" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5 inline fill-current" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5 inline fill-current" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5 inline fill-current" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5 inline fill-current" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </div>
                </div>
                <p class="text-gray-700 mb-4"><?php echo t('"ພາລູກມາຫາແພດທີ່ຄລີນິກນີ້ມາຕັ້ງແຕ່ນ້ອຍຈົນໂຕ ດຣ.ສຸພັດຕຣາດູແລດີຫຼາຍ ໃຫ້ຄຳແນະນຳເລື່ອງການເບິ່ງແຍງລູກໄດ້ດີ"', '"I\'ve been bringing my child to this clinic since he was little. Dr. Supatta takes very good care and gives good advice on child care."'); ?></p>
                <div class="flex items-center">
                    <img src="assets/images/user2.jpg" alt="<?php echo t('ຜູ້ໃຊ້ບໍລິການ', 'Patient'); ?>" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h4 class="font-semibold text-blue-800"><?php echo t('ທ້າວ ໂທນີ້ ຮັກລູກ', 'Mr Tony Hukluk'); ?></h4>
                        <p class="text-sm text-gray-600"><?php echo t('ຜູ້ໃຊ້ບໍລິການ', 'Patient'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Appointment CTA -->
<section class="py-16 bg-blue-800 text-white">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold mb-6"><?php echo t('ພ້ອມຮັບການຮັກສາແລ້ວຫຼືຍັງ?', 'Ready for Treatment?'); ?></h2>
        <p class="text-xl mb-8"><?php echo t('ນັດຫມໍຂອງເຮົາໄດ້ງ່າຍໆໃນບໍ່ກົດດຽວ', 'Book an appointment with our doctors in just a few clicks'); ?></p>
        <a href="appointments.php" class="inline-block bg-white text-blue-700 hover:bg-blue-100 px-8 py-4 rounded-lg font-semibold text-lg transition duration-300"><?php echo t('ນັດຫມໍດຽວນີ້', 'Book Now'); ?></a>
    </div>
</section>

<?php
require_once 'includes/footer.php';
?>