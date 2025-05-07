<?php
require_once 'includes/config.php';
$pageTitle = t("ບໍລິການ", "Services");
require_once 'includes/header.php';
?>

<!-- Hero Section with Animation -->
<section class="relative bg-gradient-to-r from-teal-700 to-teal-900 py-20 overflow-hidden">
    <!-- Animated Shapes Background -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -right-10 top-10 w-40 h-40 bg-teal-400 opacity-10 rounded-full"></div>
        <div class="absolute left-0 bottom-0 w-64 h-64 bg-teal-500 opacity-10 rounded-full transform -translate-x-1/3 translate-y-1/3"></div>
        <div class="absolute right-1/4 bottom-1/4 w-24 h-24 bg-white opacity-10 rounded-full"></div>
        <div class="absolute left-1/3 top-1/4 w-32 h-32 bg-teal-300 opacity-10 rounded-full"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-12 md:mb-0">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-6 leading-tight"><?php echo t('ບໍລິການທາງການແພດລະດັບພຣີມຽມ', 'Premium Medical Services'); ?></h1>
                <div class="w-20 h-1 bg-teal-400 mb-6"></div>
                <p class="text-xl text-teal-100 mb-8"><?php echo t('ການດູແລສຸຂະພາບແບບຄົບວົງຈອນດ້ວຍອຸປະກອນທີ່ທັນສະໄໝແລະທີມແພດຜູ້ຊຳນານງານ', 'Comprehensive healthcare with modern equipment and expert medical team'); ?></p>
                <div class="flex flex-wrap gap-4">
                    <a href="#services-list" class="bg-white text-teal-700 hover:bg-teal-100 px-6 py-3 rounded-lg font-semibold transition duration-300 flex items-center">
                        <?php echo t('ເບິ່ງບໍລິການທັງໝົດ', 'View All Services'); ?>
                        <i class="fas fa-arrow-down ml-2"></i>
                    </a>
                    <a href="appointments.php" class="border-2 border-white text-white hover:bg-teal-700 px-6 py-3 rounded-lg font-semibold transition duration-300">
                        <?php echo t('ນັດໝາຍບໍລິການ', 'Book Service'); ?>
                    </a>
                </div>
            </div>

            <div class="md:w-1/2 md:pl-12">
                <!-- Service Icons with Hover Effects -->
                <div class="grid grid-cols-2 gap-6">
                    <div class="bg-white bg-opacity-10 p-6 rounded-lg backdrop-blur-sm hover:bg-opacity-20 transition duration-300 transform hover:-translate-y-2">
                        <div class="text-teal-300 text-4xl mb-4"><i class="fas fa-stethoscope"></i></div>
                        <h3 class="text-xl font-semibold text-white mb-2"><?php echo t('ກວດສຸຂະພາບທົ່ວໄປ', 'General Checkup'); ?></h3>
                        <p class="text-teal-100"><?php echo t('ການກວດສຸຂະພາບປະຈຳປີແບບລະອຽດ', 'Comprehensive annual health examinations'); ?></p>
                    </div>

                    <div class="bg-white bg-opacity-10 p-6 rounded-lg backdrop-blur-sm hover:bg-opacity-20 transition duration-300 transform hover:-translate-y-2">
                        <div class="text-teal-300 text-4xl mb-4"><i class="fas fa-heartbeat"></i></div>
                        <h3 class="text-xl font-semibold text-white mb-2"><?php echo t('ອາຍຸລະກຳ', 'Internal Medicine'); ?></h3>
                        <p class="text-teal-100"><?php echo t('ການວິນິດໄສແລະຮັກສາພະຍາດທົ່ວໄປ', 'Diagnosis and treatment of general diseases'); ?></p>
                    </div>

                    <div class="bg-white bg-opacity-10 p-6 rounded-lg backdrop-blur-sm hover:bg-opacity-20 transition duration-300 transform hover:-translate-y-2">
                        <div class="text-teal-300 text-4xl mb-4"><i class="fas fa-baby"></i></div>
                        <h3 class="text-xl font-semibold text-white mb-2"><?php echo t('ກຸມາລະເວດ', 'Pediatrics'); ?></h3>
                        <p class="text-teal-100"><?php echo t('ການດູແລສຸຂະພາບເດັກແບບຄົບວົງຈອນ', 'Comprehensive child healthcare'); ?></p>
                    </div>

                    <div class="bg-white bg-opacity-10 p-6 rounded-lg backdrop-blur-sm hover:bg-opacity-20 transition duration-300 transform hover:-translate-y-2">
                        <div class="text-teal-300 text-4xl mb-4"><i class="fas fa-tooth"></i></div>
                        <h3 class="text-xl font-semibold text-white mb-2"><?php echo t('ທັນຕະກຳ', 'Dental Care'); ?></h3>
                        <p class="text-teal-100"><?php echo t('ບໍລິການດູແລສຸຂະພາບປາກແລະແຂ້ວ', 'Oral and dental health services'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services List with Modern Cards -->
<section id="services-list" class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <span class="inline-block px-3 py-1 bg-teal-100 text-teal-700 rounded-full text-sm font-semibold mb-3"><?php echo t('ບໍລິການຫຼັກ', 'Core Services'); ?></span>
            <h2 class="text-3xl md:text-4xl font-bold text-teal-800 mb-4"><?php echo t('ບໍລິການທາງການແພດທີ່ພວກເຮົາມອບໃຫ້', 'Medical Services We Provide'); ?></h2>
            <p class="text-gray-600 max-w-2xl mx-auto"><?php echo t('ພວກເຮົາມີບໍລິການທາງການແພດທີ່ຫຼາກຫຼາຍເພື່ອຕອບສະໜອງຄວາມຕ້ອງການດ້ານສຸຂະພາບຂອງທ່ານແລະຄອບຄົວ', 'We offer a variety of medical services to meet the health needs of you and your family'); ?></p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Service Card 1 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-lg group hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                <div class="relative overflow-hidden h-52">
                    <img src="assets/images/health-checkup.jpg" alt="<?php echo t('ກວດສຸຂະພາບປະຈຳປີ', 'Annual Health Checkup'); ?>" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-teal-900 to-transparent opacity-0 group-hover:opacity-80 transition-all duration-300"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                        <p class="text-teal-100"><?php echo t('ການກວດສຸຂະພາບປະຈຳປີຄອບຄຸມການກວດເລືອດ, ເອັກຊເລປອດ, ການກວດຫົວໃຈ ແລະອື່ນໆ ເພື່ອປະເມີນສຸຂະພາບໂດຍລວມແລະປ້ອງກັນພະຍາດທີ່ອາດເກີດຂຶ້ນ', 'Annual health checkup includes blood tests, chest X-ray, heart examination and more to evaluate overall health and prevent potential diseases.'); ?></p>
                        <a href="appointments.php?service=health_checkup" class="inline-block mt-4 bg-teal-500 hover:bg-teal-600 text-white px-4 py-2 rounded-lg text-sm"><?php echo t('ນັດກວດສຸຂະພາບ', 'Book Checkup'); ?></a>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-3">
                        <span class="bg-teal-100 text-teal-700 text-xs px-3 py-1 rounded-full mr-3"><?php echo t('ນິຍົມ', 'Popular'); ?></span>
                        <span class="text-gray-500 text-sm"><?php echo t('ເລີ່ມຕົ້ນ ₭150,000', 'Starting at ₭150,000'); ?></span>
                    </div>
                    <h3 class="text-xl font-bold text-teal-800 mb-3"><?php echo t('ກວດສຸຂະພາບປະຈຳປີ', 'Annual Health Checkup'); ?></h3>
                    <p class="text-gray-600 mb-4"><?php echo t('ການກວດສຸຂະພາບທົ່ວໄປເພື່ອປະເມີນສຸຂະພາບແລະກວດຫາຄວາມສ່ຽງດ້ານສຸຂະພາບ', 'General health examination to assess health status and detect health risks'); ?></p>
                    <div class="border-t border-gray-100 pt-4">
                        <div class="flex justify-between items-center">
                            <span class="text-teal-600 font-medium"><?php echo t('ໄລຍະເວລາ: 1-2 ຊົ່ວໂມງ', 'Duration: 1-2 hours'); ?></span>
                            <a href="service-details.php?id=1" class="text-teal-600 hover:text-teal-800">
                                <?php echo t('ລາຍລະອຽດເພີ່ມເຕີມ', 'More Details'); ?> <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service Card 2 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-lg group hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                <div class="relative overflow-hidden h-52">
                    <img src="assets/images/internal-medicine.jpg" alt="<?php echo t('ອາຍຸລະກຳ', 'Internal Medicine'); ?>" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-teal-900 to-transparent opacity-0 group-hover:opacity-80 transition-all duration-300"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                        <p class="text-teal-100"><?php echo t('ບໍລິການດ້ານອາຍຸລະກຳໂດຍແພດຜູ້ຊ່ຽວຊານໃນການກວດຮັກສາພະຍາດທົ່ວໄປ ຄວາມດັນເລືອດສູງ ເບົາຫວານ ແລະພະຍາດຊຳເຮື້ອອື່ນໆ', 'Internal medicine services by specialist doctors for diagnosing and treating general diseases, hypertension, diabetes, and other chronic conditions.'); ?></p>
                        <a href="appointments.php?service=internal_medicine" class="inline-block mt-4 bg-teal-500 hover:bg-teal-600 text-white px-4 py-2 rounded-lg text-sm"><?php echo t('ນັດພົບແພດ', 'Book Appointment'); ?></a>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-teal-800 mb-3"><?php echo t('ອາຍຸລະກຳ', 'Internal Medicine'); ?></h3>
                    <p class="text-gray-600 mb-4"><?php echo t('ການວິນິດໄສແລະຮັກສາພະຍາດທົ່ວໄປ ຄວາມດັນເລືອດສູງ ເບົາຫວານ ແລະພະຍາດຊຳເຮື້ອ', 'Diagnosis and treatment of general illnesses, hypertension, diabetes, and chronic diseases'); ?></p>
                    <div class="border-t border-gray-100 pt-4">
                        <div class="flex justify-between items-center">
                            <span class="text-teal-600 font-medium"><?php echo t('ໄລຍະເວລາ: 30-60 ນາທີ', 'Duration: 30-60 minutes'); ?></span>
                            <a href="service-details.php?id=2" class="text-teal-600 hover:text-teal-800">
                                <?php echo t('ລາຍລະອຽດເພີ່ມເຕີມ', 'More Details'); ?> <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service Card 3 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-lg group hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                <div class="relative overflow-hidden h-52">
                    <img src="assets/images/pediatrics.jpg" alt="<?php echo t('ກຸມາລະເວດ', 'Pediatrics'); ?>" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-teal-900 to-transparent opacity-0 group-hover:opacity-80 transition-all duration-300"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                        <p class="text-teal-100"><?php echo t('ການດູແລສຸຂະພາບເດັກຕັ້ງແຕ່ແຮກເກີດຈົນເຖິງໄວລຸ້ນ ຄອບຄຸມການກວດສຸຂະພາບ ສັກວັກຊີນ ພັດທະນາການ ແລະການຮັກສາພະຍາດເດັກ', 'Child healthcare from newborn to adolescent, including health checkups, vaccinations, development monitoring, and pediatric disease treatment.'); ?></p>
                        <a href="appointments.php?service=pediatrics" class="inline-block mt-4 bg-teal-500 hover:bg-teal-600 text-white px-4 py-2 rounded-lg text-sm"><?php echo t('ນັດພົບກຸມາລະແພດ', 'Book Pediatrician'); ?></a>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-teal-800 mb-3"><?php echo t('ກຸມາລະເວດ', 'Pediatrics'); ?></h3>
                    <p class="text-gray-600 mb-4"><?php echo t('ການດູແລສຸຂະພາບເດັກຕັ້ງແຕ່ແຮກເກີດຈົນເຖິງໄວລຸ້ນ ລວມທັງການສັກວັກຊີນແລະພັດທະນາການ', 'Child healthcare from newborn to adolescent, including vaccinations and development monitoring'); ?></p>
                    <div class="border-t border-gray-100 pt-4">
                        <div class="flex justify-between items-center">
                            <span class="text-teal-600 font-medium"><?php echo t('ໄລຍະເວລາ: 30-45 ນາທີ', 'Duration: 30-45 minutes'); ?></span>
                            <a href="service-details.php?id=3" class="text-teal-600 hover:text-teal-800">
                                <?php echo t('ລາຍລະອຽດເພີ່ມເຕີມ', 'More Details'); ?> <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- View More Button -->
        <div class="text-center mt-12">
            <a href="#all-services" class="inline-block bg-teal-600 hover:bg-teal-700 text-white px-8 py-4 rounded-lg font-semibold transition duration-300">
                <?php echo t('ເບິ່ງບໍລິການທັງໝົດ', 'View All Services'); ?>
                <i class="fas fa-chevron-down ml-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- Service Features -->
<section class="py-20 bg-teal-50 relative overflow-hidden">
    <!-- Decorative Elements -->
    <div class="absolute top-0 right-0 w-64 h-64 bg-teal-200 rounded-full opacity-20 transform translate-x-1/3 -translate-y-1/2"></div>
    <div class="absolute bottom-0 left-0 w-80 h-80 bg-teal-300 rounded-full opacity-20 transform -translate-x-1/2 translate-y-1/3"></div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="flex flex-col lg:flex-row items-center">
            <div class="lg:w-1/2 mb-12 lg:mb-0 lg:pr-16">
                <span class="inline-block px-3 py-1 bg-teal-100 text-teal-700 rounded-full text-sm font-semibold mb-3"><?php echo t('ເປັນຫຍັງຈຶ່ງເລືອກພວກເຮົາ', 'Why Choose Us'); ?></span>
                <h2 class="text-3xl md:text-4xl font-bold text-teal-800 mb-6 leading-tight"><?php echo t('ການບໍລິການທີ່ຕອບສະໜອງຄວາມຕ້ອງການຂອງທ່ານ', 'Service That Meets Your Needs'); ?></h2>
                <p class="text-gray-700 mb-8"><?php echo t('ພວກເຮົາມຸ່ງໝັ້ນທີ່ຈະມອບປະສົບການການດູແລສຸຂະພາບທີ່ດີທີ່ສຸດໂດຍທີມແພດແລະພະຍາບານທີ່ມີປະສົບການສູງ ພ້ອມດ້ວຍອຸປະກອນທາງການແພດທີ່ທັນສະໄໝ', 'We are committed to providing the best healthcare experience with our highly experienced medical team and modern medical equipment.'); ?></p>

                <div class="space-y-4 mb-8">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 bg-teal-100 rounded-lg p-3 mr-4">
                            <i class="fas fa-user-md text-teal-600 text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-teal-800 mb-2"><?php echo t('ແພດຜູ້ຊ່ຽວຊານ', 'Expert Doctors'); ?></h3>
                            <p class="text-gray-600"><?php echo t('ທີມແພດຂອງພວກເຮົາປະກອບດ້ວຍຜູ້ຊ່ຽວຊານໃນສາຂາຕ່າງໆ ພ້ອມປະສົບການຫຼາຍກວ່າ 10 ປີ', 'Our medical team consists of specialists in various fields with over 10 years of experience'); ?></p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex-shrink-0 bg-teal-100 rounded-lg p-3 mr-4">
                            <i class="fas fa-clock text-teal-600 text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-teal-800 mb-2"><?php echo t('ປະຫຍັດເວລາ', 'Time-Saving'); ?></h3>
                            <p class="text-gray-600"><?php echo t('ລະບົບການນັດໝາຍອອນລາຍແລະການຈັດການຄິວທີ່ມີປະສິດທິພາບຊ່ວຍໃຫ້ທ່ານປະຫຍັດເວລາ', 'Online appointment system and efficient queue management help you save time'); ?></p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex-shrink-0 bg-teal-100 rounded-lg p-3 mr-4">
                            <i class="fas fa-heart text-teal-600 text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-teal-800 mb-2"><?php echo t('ການດູແລເອົາໃຈໃສ່', 'Personalized Care'); ?></h3>
                            <p class="text-gray-600"><?php echo t('ພວກເຮົາໃຫ້ຄວາມສຳຄັນກັບການດູແລແບບອົງລວມແລະປັບແຜນການຮັກສາໃຫ້ເໝາະກັບຄວາມຕ້ອງການສະເພາະບຸກຄົນ', 'We focus on holistic care and customize treatment plans to meet individual needs'); ?></p>
                        </div>
                    </div>
                </div>

                <a href="about.php" class="inline-block text-teal-600 hover:text-teal-800 font-semibold transition duration-300">
                    <?php echo t('ຮຽນຮູ້ເພີ່ມເຕີມກ່ຽວກັບຄລີນິກຂອງພວກເຮົາ', 'Learn more about our clinic'); ?> <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>

            <div class="lg:w-1/2">
                <div class="relative">
                    <img src="assets/images/modern-clinic.jpg" alt="<?php echo t('ບໍລິການຄລີນິກທັນສະໄໝ', 'Modern Clinic Service'); ?>" class="rounded-lg shadow-2xl">
                    <!-- Stats Floating Card -->
                    <div class="absolute -bottom-6 -left-6 bg-white p-6 rounded-lg shadow-xl max-w-xs">
                        <div class="flex items-center mb-4">
                            <div class="text-teal-500 text-2xl mr-3"><i class="fas fa-chart-line"></i></div>
                            <div>
                                <h4 class="text-lg font-semibold text-teal-800"><?php echo t('ຄວາມພໍໃຈຂອງຄົນເຈັບ', 'Patient Satisfaction'); ?></h4>
                                <div class="text-gray-600"><?php echo t('ເພີ່ມຂຶ້ນ 25% ໃນປີທີ່ຜ່ານມາ', 'Increased by 25% in the past year'); ?></div>
                            </div>
                        </div>
                        <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                            <div class="h-full bg-teal-500 rounded-full" style="width: 95%"></div>
                        </div>
                        <div class="mt-2 text-right text-teal-800 font-bold">95%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Packages -->
<section id="all-services" class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <span class="inline-block px-3 py-1 bg-teal-100 text-teal-700 rounded-full text-sm font-semibold mb-3"><?php echo t('ແພັກເກັຈບໍລິການ', 'Service Packages'); ?></span>
            <h2 class="text-3xl md:text-4xl font-bold text-teal-800 mb-4"><?php echo t('ເລືອກແພັກເກັຈທີ່ເໝາະກັບທ່ານ', 'Choose the Package That Suits You'); ?></h2>
            <p class="text-gray-600 max-w-2xl mx-auto"><?php echo t('ພວກເຮົາມີແພັກເກັຈບໍລິການທີ່ຫຼາກຫຼາຍເພື່ອຕອບສະໜອງຄວາມຕ້ອງການດ້ານສຸຂະພາບທີ່ແຕກຕ່າງກັນ', 'We have a variety of service packages to address different health needs'); ?></p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Basic Package -->
            <div class="bg-white rounded-xl overflow-hidden border border-gray-200 hover:border-teal-400 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="bg-gray-50 py-6 px-8 border-b border-gray-200">
                    <h3 class="text-2xl font-bold text-teal-800 mb-2"><?php echo t('ແພັກເກັຈພື້ນຖານ', 'Basic Package'); ?></h3>
                    <div class="flex items-baseline">
                        <span class="text-3xl font-bold text-teal-600">₭150,000</span>
                        <span class="text-gray-500 ml-2"><?php echo t('ຕໍ່ຄັ້ງ', 'per visit'); ?></span>
                    </div>
                </div>
                <div class="p-8">>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-teal-500 mt-1 mr-3"></i>
                            <span class="text-gray-700"><?php echo t('ກວດຮ່າງກາຍທົ່ວໄປ', 'General physical examination'); ?></span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-teal-500 mt-1 mr-3"></i>
                            <span class="text-gray-700"><?php echo t('ກວດເລືອດພື້ນຖານ', 'Basic blood test'); ?></span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-teal-500 mt-1 mr-3"></i>
                            <span class="text-gray-700"><?php echo t('ກວດນ້ຳຍ່ຽວ', 'Urine test'); ?></span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-teal-500 mt-1 mr-3"></i>
                            <span class="text-gray-700"><?php echo t('ຄຳປຶກສາຈາກແພດ', 'Doctor consultation'); ?></span>
                        </li>
                        <li class="flex items-start text-teal-500 mt-1 mr-3">
                            <i class="fas fa-times-circle mt-1 mr-3"></i>
                            <span><?php echo t('ເອັກຊເລປອດ', 'Chest X-ray'); ?></span>
                        </li>
                        <li class="flex items-start text-teal-500 mt-1 mr-3">
                            <i class="fas fa-times-circle mt-1 mr-3"></i>
                            <span><?php echo t('ກວດຄື້ນໄຟຟ້າຫົວໃຈ', 'Electrocardiogram (ECG)'); ?></span>
                        </li>
                    </ul>
                    <a href="appointments.php?package=basic" class="block text-center bg-teal-600 hover:bg-teal-700 text-white px-6 py-3 rounded-lg font-semibold transition duration-300">
                        <?php echo t('ຈອງແພັກເກັຈນີ້', 'Book This Package'); ?>
                    </a>
                </div>
            </div>

            <!-- Standard Package -->
            <div class="bg-white rounded-xl overflow-hidden border-2 border-teal-500 shadow-2xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 relative z-10 scale-105">
                <!-- Popular Badge -->
                <div class="absolute top-0 right-0 bg-teal-500 text-white px-4 py-1 font-semibold">
                    <?php echo t('ນິຍົມ', 'Popular'); ?>
                </div>

                <div class="bg-teal-50 py-6 px-8 border-b border-teal-100">
                    <h3 class="text-2xl font-bold text-teal-800 mb-2"><?php echo t('ແພັກເກັຈມາດຕະຖານ', 'Standard Package'); ?></h3>
                    <div class="flex items-baseline">
                        <span class="text-3xl font-bold text-teal-600">₭250,000</span>
                        <span class="text-gray-500 ml-2"><?php echo t('ຕໍ່ຄັ້ງ', 'per visit'); ?></span>
                    </div>
                </div>
                <div class="p-8">
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-teal-500 mt-1 mr-3"></i>
                            <span class="text-gray-700"><?php echo t('ກວດຮ່າງກາຍທົ່ວໄປ', 'General physical examination'); ?></span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-teal-500 mt-1 mr-3"></i>
                            <span class="text-gray-700"><?php echo t('ກວດເລືອດແບບຄອບຄຸມ', 'Comprehensive blood test'); ?></span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-teal-500 mt-1 mr-3"></i>
                            <span class="text-gray-700"><?php echo t('ກວດນ້ຳຍ່ຽວແລະອຸຈຈາລະ', 'Urine and stool test'); ?></span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-teal-500 mt-1 mr-3"></i>
                            <span class="text-gray-700"><?php echo t('ເອັກຊເລປອດ', 'Chest X-ray'); ?></span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-teal-500 mt-1 mr-3"></i>
                            <span class="text-gray-700"><?php echo t('ກວດຄື້ນໄຟຟ້າຫົວໃຈ', 'Electrocardiogram (ECG)'); ?></span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-teal-500 mt-1 mr-3"></i>
                            <span class="text-gray-700"><?php echo t('ຄຳປຶກສາຈາກແພດຜູ້ຊ່ຽວຊານ', 'Specialist doctor consultation'); ?></span>
                        </li>
                    </ul>
                    <a href="appointments.php?package=standard" class="block text-center bg-teal-600 hover:bg-teal-700 text-white px-6 py-3 rounded-lg font-semibold transition duration-300">
                        <?php echo t('ຈອງແພັກເກັຈນີ້', 'Book This Package'); ?>
                    </a>
                </div>
            </div>

            <!-- Premium Package -->
            <div class="bg-white rounded-xl overflow-hidden border border-gray-200 hover:border-teal-400 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="bg-gray-50 py-6 px-8 border-b border-gray-200">
                    <h3 class="text-2xl font-bold text-teal-800 mb-2"><?php echo t('ແພັກເກັຈພຣີມຽມ', 'Premium Package'); ?></h3>
                    <div class="flex items-baseline">
                        <span class="text-3xl font-bold text-teal-600">₭450,000</span>
                        <span class="text-gray-500 ml-2"><?php echo t('ຕໍ່ຄັ້ງ', 'per visit'); ?></span>
                    </div>
                </div>
                <div class="p-8">
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-teal-500 mt-1 mr-3"></i>
                            <span class="text-gray-700"><?php echo t('ທຸກບໍລິການໃນແພັກເກັຈມາດຕະຖານ', 'All services in Standard Package'); ?></span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-teal-500 mt-1 mr-3"></i>
                            <span class="text-gray-700"><?php echo t('ກວດມະເຮັງຕັບອ່ອນ (CA 19-9)', 'Pancreatic cancer screening (CA 19-9)'); ?></span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-teal-500 mt-1 mr-3"></i>
                            <span class="text-gray-700"><?php echo t('ກວດມະເຮັງຕ່ອມລູກໝາກ (PSA)', 'Prostate cancer screening (PSA)'); ?></span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-teal-500 mt-1 mr-3"></i>
                            <span class="text-gray-700"><?php echo t('ກວດພາບລັງສີຊ່ອງທ້ອງ', 'Abdominal ultrasound'); ?></span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-teal-500 mt-1 mr-3"></i>
                            <span class="text-gray-700"><?php echo t('ກວດຄວາມໜາແໜ້ນຂອງກະດູກ', 'Bone density test'); ?></span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-teal-500 mt-1 mr-3"></i>
                            <span class="text-gray-700"><?php echo t('ບໍລິການລົດຮັບສົ່ງ (ໃນລັດສະໝີ 20 ກມ.)', 'Transportation service (within 20 km)'); ?></span>
                        </li>
                    </ul>
                    <a href="appointments.php?package=premium" class="block text-center bg-teal-600 hover:bg-teal-700 text-white px-6 py-3 rounded-lg font-semibold transition duration-300">
                        <?php echo t('ຈອງແພັກເກັຈນີ້', 'Book This Package'); ?>
                    </a>
                </div>
            </div>
        </div>

        <!-- Note Section -->
        <div class="mt-12 text-center">
            <p class="text-gray-600 max-w-2xl mx-auto">
                <?php echo t('* ລາຄາອາດມີການປ່ຽນແປງຕາມການວິນິດໄສຂອງແພດແລະຄວາມຕ້ອງການສະເພາະບຸກຄົນ', '* Prices may vary based on doctor\'s diagnosis and individual needs'); ?>
            </p>
            <a href="contact.php" class="inline-block mt-4 text-teal-600 hover:text-teal-800 font-medium">
                <?php echo t('ສອບຖາມຂໍ້ມູນເພີ່ມເຕີມ', 'Inquire for more information'); ?> <i class="fas fa-arrow-right ml-1"></i>
            </a>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-20 bg-teal-50 relative">
    <!-- Decorative Elements -->
    <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\'100\' height=\'100\' viewBox=\'0 0 100 100\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z\' fill=\'%230d9488\' fill-opacity=\'0.03\' fill-rule=\'evenodd\'/%3E%3C/svg%3E');">
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-16">
            <span class="inline-block px-3 py-1 bg-teal-100 text-teal-700 rounded-full text-sm font-semibold mb-3"><?php echo t('ສຽງຈາກຜູ້ໃຊ້ບໍລິການ', 'Client Testimonials'); ?></span>
            <h2 class="text-3xl md:text-4xl font-bold text-teal-800 mb-4"><?php echo t('ຜູ້ໃຊ້ບໍລິການເວົ້າກ່ຽວກັບພວກເຮົາແນວໃດ', 'What Our Clients Say'); ?></h2>
            <p class="text-gray-600 max-w-2xl mx-auto"><?php echo t('ຄວາມຄິດເຫັນຈິງຈາກຜູ້ທີ່ໄດ້ຮັບບໍລິການຈາກຄລີນິກຂອງພວກເຮົາ', 'Real feedback from those who have experienced our clinic services'); ?></p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="flex justify-between items-start mb-4">
                    <div class="text-yellow-400 text-xl">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="text-4xl text-teal-200 opacity-50">
                        <i class="fas fa-quote-right"></i>
                    </div>
                </div>
                <p class="text-gray-700 mb-6">
                    <?php echo t('"ປະທັບໃຈກັບການບໍລິການຫຼາຍ ໝໍໃຫ້ຄຳແນະນຳລະອຽດແລະເຂົ້າໃຈງ່າຍ ພະຍາບານກໍ່ໃຈດີແລະເປັນກັນເອງ ທີ່ສຳຄັນສິ່ງອຳນວຍຄວາມສະດວກຄົບຄັນ ເຮັດໃຫ້ຮູ້ສຶກສະບາຍໃຈທີ່ຈະມາໃຊ້ບໍລິການອີກ"', '"Very impressed with the service. The doctor gave detailed and easy-to-understand advice. The nurses were kind and friendly. Most importantly, the facilities were complete, making me feel comfortable to use the service again."'); ?>
                </p>
                <div class="flex items-center">
                    <img src="assets/images/testimonial1.jpg" alt="<?php echo t('ທ່ານ ສົມສີ ຈິດໃຈດີ', 'Mr. Somsy Jitjaidee'); ?>" class="w-12 h-12 rounded-full object-cover mr-4">
                    <div>
                        <h4 class="font-semibold text-teal-800"><?php echo t('ທ່ານ ສົມສີ ຈິດໃຈດີ', 'Mr. Somsy Jitjaidee'); ?></h4>
                        <p class="text-sm text-gray-600"><?php echo t('ໃຊ້ບໍລິການກວດສຸຂະພາບປະຈຳປີ', 'Annual Health Checkup'); ?></p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="flex justify-between items-start mb-4">
                    <div class="text-yellow-400 text-xl">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="text-4xl text-teal-200 opacity-50">
                        <i class="fas fa-quote-right"></i>
                    </div>
                </div>
                <p class="text-gray-700 mb-6">
                    <?php echo t('"ພາລູກມາຫາໝໍທີ່ຄລີນິກນີ້ມາຕັ້ງແຕ່ນ້ອຍຈົນໂຕ ຄຸນໝໍໃຈດີຫຼາຍ ໃຫ້ຄຳແນະນຳດີໆກ່ຽວກັບການດູແລລູກມາຕະຫຼອດ ເຮັດໃຫ້ລູກບໍ່ຢ້ານໝໍ ແລະຍັງມັກມາຄລີນິກອີກດ້ວຍ"', '"I\'ve been taking my child to this clinic since he was young. The doctor is very kind and has always given good advice about child care. This makes my child not afraid of doctors and he even likes coming to the clinic."'); ?>
                </p>
                <div class="flex items-center">
                    <img src="assets/images/testimonial2.jpg" alt="<?php echo t('ທ່ານ ມານະ ຮັກລູກ', 'Mr. Mana Raklook'); ?>" class="w-12 h-12 rounded-full object-cover mr-4">
                    <div>
                        <h4 class="font-semibold text-teal-800"><?php echo t('ທ່ານ ມານະ ຮັກລູກ', 'Mr. Mana Raklook'); ?></h4>
                        <p class="text-sm text-gray-600"><?php echo t('ໃຊ້ບໍລິການແຜນກກຸມາລະເວດ', 'Pediatrics Service'); ?></p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="flex justify-between items-start mb-4">
                    <div class="text-yellow-400 text-xl">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="text-4xl text-teal-200 opacity-50">
                        <i class="fas fa-quote-right"></i>
                    </div>
                </div>
                <p class="text-gray-700 mb-6">
                    <?php echo t('"ລະບົບການນັດໝາຍອອນລາຍສະດວກຫຼາຍ ບໍ່ຕ້ອງລໍຖ້າຄິວດົນ ເຈົ້າໜ້າທີ່ໃຫ້ການຕ້ອນຮັບຢ່າງດີ ແພດມີຄວາມຊຳນານງານແລະເອົາໃຈໃສ່ຄົນເຈັບ ແນະນຳບໍລິການນີ້ໃຫ້ກັບທຸກຄົນໃນຄອບຄົວ"', '"The online appointment system is very convenient. No need to wait in line for long. The staff provided excellent welcome. The doctors are professional and caring for patients. I recommend this service to everyone in the family."'); ?>
                </p>
                <div class="flex items-center">
                    <img src="assets/images/testimonial3.jpg" alt="<?php echo t('ທ່ານ ວິໄຊ ສຸຂະພາບດີ', 'Mr. Vichai Sukkapadee'); ?>" class="w-12 h-12 rounded-full object-cover mr-4">
                    <div>
                        <h4 class="font-semibold text-teal-800"><?php echo t('ທ່ານ ວິໄຊ ສຸຂະພາບດີ', 'Mr. Vichai Sukkapadee'); ?></h4>
                        <p class="text-sm text-gray-600"><?php echo t('ໃຊ້ບໍລິການແຜນກອາຍຸລະກຳ', 'Internal Medicine Service'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- JavaScript for FAQ Toggle -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // FAQ toggle functionality
        const faqQuestions = document.querySelectorAll('.faq-question');

        faqQuestions.forEach(question => {
            question.addEventListener('click', () => {
                const answer = question.nextElementSibling;
                const icon = question.querySelector('i');

                // Toggle the answer visibility
                answer.classList.toggle('hidden');

                // Rotate the icon
                icon.classList.toggle('rotate-180');

                // Close other answers
                faqQuestions.forEach(q => {
                    if (q !== question) {
                        const a = q.nextElementSibling;
                        const i = q.querySelector('i');

                        a.classList.add('hidden');
                        i.classList.remove('rotate-180');
                    }
                });
            });
        });
    });
</script>

<?php
require_once 'includes/footer.php';
?>