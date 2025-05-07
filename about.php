<?php
require_once 'includes/config.php';
$pageTitle = t("ກ່ຽວກັບເຮົາ", "About");
require_once 'includes/header.php';
?>

<!-- Hero Section with Parallax Effect -->
<section class="relative h-96 overflow-hidden">
    <div class="absolute inset-0">
        <img src="assets/images/about-hero.jpg" alt="<?php echo t('ຄລີນິກວັນເມດ', 'OneMeds Clinic'); ?>" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-teal-900 bg-opacity-70"></div>
    </div>
    <div class="relative h-full flex items-center justify-center text-center z-10 px-4">
        <div class="max-w-3xl">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4"><?php echo t('ກວ່າ 10 ປີແຫ່ງປະສົບການການດູແລສຸຂະພາບ', 'Over 10 Years of Healthcare Excellence'); ?></h1>
            <div class="w-20 h-1 bg-white mx-auto mb-6"></div>
            <p class="text-xl text-white"><?php echo t('ຄວາມຊ່ຽວຊານດ້ານການແພດທີ່ທັນສະໄໝ ພ້ອມກັບການບໍລິການທີ່ອົບອຸ່ນແລະເປັນມິດ', 'Modern medical expertise with warm and friendly service'); ?></p>
        </div>
    </div>
</section>

<!-- Our Story Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-10 md:mb-0 md:pr-12">
                <div class="relative">
                    <img src="assets/images/clinic-building.jpg" alt="<?php echo t('ອາຄານຄລີນິກ', 'Clinic Building'); ?>" class="w-full h-auto rounded-lg shadow-xl">
                    <div class="absolute -bottom-6 -right-6 bg-teal-600 text-white p-6 rounded-lg shadow-lg hidden md:block">
                        <div class="text-3xl font-bold"><?php echo t('ສ້າງຕັ້ງ', 'Est.'); ?> 2013</div>
                    </div>
                </div>
            </div>
            <div class="md:w-1/2">
                <div class="inline-block bg-teal-50 px-3 py-1 rounded-full text-teal-700 font-medium text-sm mb-4">
                    <?php echo t('ເລື່ອງລາວຂອງພວກເຮົາ', 'Our Story'); ?>
                </div>
                <h2 class="text-3xl font-bold text-teal-800 mb-6">
                    <?php echo t('ປະຫວັດຄວາມເປັນມາ', 'Our History'); ?>
                </h2>
                
                <p class="text-gray-700 mb-6 leading-relaxed">
                    <?php echo t('ຄລີນິກວັນເມດກໍ່ຕັ້ງຂຶ້ນໃນປີ 2013 ໂດຍກຸ່ມແພດຜູ້ມີປະສົບການທີ່ຕ້ອງການສ້າງສະພາບແວດລ້ອມທີ່ດູແລຄົນເຈັບໃນລະດັບທີ່ສູງຂຶ້ນ. ໃນໄລຍະຫຼາຍກວ່າ 10 ປີ, ພວກເຮົາໄດ້ເຕີບໂຕຈາກຄລີນິກນ້ອຍໆມາເປັນໜຶ່ງໃນສູນສຸຂະພາບຊັ້ນນຳໃນພາກພື້ນນີ້.', 'OneMeds Clinic was founded in 2013 by a group of experienced doctors who wanted to create an environment that cares for patients at a higher level. Over more than 10 years, we have grown from a small clinic to one of the leading healthcare centers in the region.'); ?>
                </p>
                
                <p class="text-gray-700 mb-8 leading-relaxed">
                    <?php echo t('ແນວທາງການປິ່ນປົວຂອງພວກເຮົາລວມເອົາເຕັກນິກການແພດສະໄໝໃໝ່ກັບການດູແລຄົນເຈັບແບບອົບອຸ່ນ. ທຸກປີພວກເຮົາໃຫ້ບໍລິການກັບຄົນເຈັບຫຼາຍກວ່າ 5,000 ຄົນ, ແລະບັນລຸຄວາມພໍໃຈລູກຄ້າ 95% ໂດຍສະເລ່ຍ.', 'Our treatment approach combines modern medical techniques with warm patient care. Every year we serve more than 5,000 patients, achieving 95% average customer satisfaction.'); ?>
                </p>
                
                <div class="flex items-center mb-6">
                    <img src="assets/images/founder.jpg" alt="<?php echo t('ຜູ້ກໍ່ຕັ້ງຄລີນິກ', 'Clinic Founder'); ?>" class="w-16 h-16 rounded-full object-cover mr-4">
                    <div>
                        <div class="font-semibold text-teal-800"><?php echo t('ດຣ. ພູເຕັມ ດວງມະນີ', 'Dr. Phoutem Douangmany'); ?></div>
                        <div class="text-gray-600"><?php echo t('ຜູ້ກໍ່ຕັ້ງ & ຜູ້ອຳນວຍການ', 'Founder & Director'); ?></div>
                    </div>
                </div>
                
                <blockquote class="italic text-gray-700 border-l-4 border-teal-500 pl-4 py-2 mb-6">
                    <?php echo t('"ພາລະກິດຂອງພວກເຮົາແມ່ນງ່າຍດາຍ - ເພື່ອສະໜອງການດູແລສຸຂະພາບທີ່ມີຄຸນນະພາບສູງໃນບັນຍາກາດທີ່ອົບອຸ່ນແລະເຂົ້າເຖິງໄດ້."', '"Our mission is simple - to provide high-quality healthcare in a warm and accessible atmosphere."'); ?>
                </blockquote>
                
                <div class="flex space-x-4">
                    <a href="services.php" class="bg-teal-600 hover:bg-teal-700 text-white px-6 py-3 rounded-lg font-semibold transition duration-300">
                        <?php echo t('ບໍລິການຂອງພວກເຮົາ', 'Our Services'); ?>
                    </a>
                    <a href="contact.php" class="border border-teal-600 text-teal-600 hover:bg-teal-50 px-6 py-3 rounded-lg font-semibold transition duration-300">
                        <?php echo t('ຕິດຕໍ່ພວກເຮົາ', 'Contact Us'); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision with Cards -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <div class="inline-block bg-teal-50 px-3 py-1 rounded-full text-teal-700 font-medium text-sm mb-4">
                <?php echo t('ພາລະກິດ & ວິໄສທັດ', 'Mission & Vision'); ?>
            </div>
            <h2 class="text-3xl font-bold text-teal-800 mb-4">
                <?php echo t('ສິ່ງທີ່ຂັບເຄື່ອນພວກເຮົາ', 'What Drives Us'); ?>
            </h2>
            <p class="text-gray-700 max-w-2xl mx-auto">
                <?php echo t('ທຸກໆມື້, ພວກເຮົາຖືກຂັບເຄື່ອນດ້ວຍຄວາມປາຖະໜາທີ່ຈະປັບປຸງສຸຂະພາບແລະຄຸນນະພາບຊີວິດຂອງຄົນໄຂ້ຂອງພວກເຮົາ', 'Every day, we are driven by the desire to improve the health and quality of life of our patients'); ?>
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Mission -->
            <div class="bg-white rounded-xl overflow-hidden shadow-lg transition duration-300 hover:shadow-xl transform hover:-translate-y-2">
                <div class="h-2 bg-teal-600"></div>
                <div class="p-8">
                    <div class="w-16 h-16 bg-teal-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-bullseye text-teal-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-teal-800 mb-4"><?php echo t('ພາລະກິດ', 'Our Mission'); ?></h3>
                    <p class="text-gray-700 mb-6">
                        <?php echo t('ເພື່ອສະໜອງການບໍລິການທາງການແພດທີ່ມີຄຸນນະພາບສູງໃນສະພາບແວດລ້ອມທີ່ອົບອຸ່ນ, ເປັນມິດ, ແລະເຂົ້າເຖິງໄດ້ ເພື່ອປັບປຸງສຸຂະພາບໂດຍລວມຂອງຊຸມຊົນຂອງພວກເຮົາ.', 'To provide high-quality medical services in a warm, friendly, and accessible environment to improve the overall health of our community.'); ?>
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-teal-500 mt-1 mr-2"></i>
                            <span class="text-gray-700"><?php echo t('ສະໜອງການດູແລທີ່ມີຄຸນນະພາບສູງ', 'Provide high-quality care'); ?></span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-teal-500 mt-1 mr-2"></i>
                            <span class="text-gray-700"><?php echo t('ສ້າງສະພາບແວດລ້ອມທີ່ອົບອຸ່ນແລະເປັນມິດ', 'Create a warm and friendly environment'); ?></span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-teal-500 mt-1 mr-2"></i>
                            <span class="text-gray-700"><?php echo t('ຮັບປະກັນການເຂົ້າເຖິງສຳລັບຄົນທຸກຄົນ', 'Ensure accessibility for everyone'); ?></span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Vision -->
            <div class="bg-white rounded-xl overflow-hidden shadow-lg transition duration-300 hover:shadow-xl transform hover:-translate-y-2">
                <div class="h-2 bg-green-600"></div>
                <div class="p-8">
                    <div class="w-16 h-16 bg-green-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-eye text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-teal-800 mb-4"><?php echo t('ວິໄສທັດ', 'Our Vision'); ?></h3>
                    <p class="text-gray-700 mb-6">
                        <?php echo t('ເພື່ອເປັນຜູ້ນຳດ້ານການດູແລສຸຂະພາບໃນພາກພື້ນ, ເປັນທີ່ຮູ້ຈັກສຳລັບຄວາມເປັນເລີດທາງການແພດ, ນະວັດຕະກຳ, ແລະການເອົາໃຈໃສ່ຄົນເຈັບ.', 'To be a healthcare leader in the region, known for medical excellence, innovation, and patient-centered care.'); ?>
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span class="text-gray-700"><?php echo t('ບັນລຸຄວາມເປັນເລີດທາງການແພດ', 'Achieve medical excellence'); ?></span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span class="text-gray-700"><?php echo t('ນຳໃຊ້ນະວັດຕະກຳທາງການແພດ', 'Embrace medical innovation'); ?></span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span class="text-gray-700"><?php echo t('ເນັ້ນການດູແລທີ່ເນັ້ນຄົນເຈັບເປັນສູນກາງ', 'Focus on patient-centered care'); ?></span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Values -->
            <div class="bg-white rounded-xl overflow-hidden shadow-lg transition duration-300 hover:shadow-xl transform hover:-translate-y-2">
                <div class="h-2 bg-purple-600"></div>
                <div class="p-8">
                    <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-heart text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-teal-800 mb-4"><?php echo t('ຄ່ານິຍົມຂອງພວກເຮົາ', 'Our Values'); ?></h3>
                    <p class="text-gray-700 mb-6">
                        <?php echo t('ຄ່ານິຍົມຫຼັກຂອງພວກເຮົາແມ່ນເປັນພື້ນຖານຂອງທຸກສິ່ງທີ່ພວກເຮົາເຮັດແລະຊີ້ນຳການຕັດສິນໃຈຂອງພວກເຮົາທຸກໆມື້.', 'Our core values form the foundation of everything we do and guide our decisions every day.'); ?>
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm">C - <?php echo t('ຄວາມເອົາໃຈໃສ່', 'Compassion'); ?></span>
                        <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm">A - <?php echo t('ຄວາມຖືກຕ້ອງແມ່ນຍຳ', 'Accuracy'); ?></span>
                        <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm">R - <?php echo t('ຄວາມຮັບຜິດຊອບ', 'Responsibility'); ?></span>
                        <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm">E - <?php echo t('ຄວາມເປັນເລີດ', 'Excellence'); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <div class="inline-block bg-teal-50 px-3 py-1 rounded-full text-teal-700 font-medium text-sm mb-4">
                <?php echo t('ທີມງານຂອງພວກເຮົາ', 'Our Team'); ?>
            </div>
            <h2 class="text-3xl font-bold text-teal-800 mb-4">
                <?php echo t('ພົບແພດຜູ້ຊ່ຽວຊານຂອງພວກເຮົາ', 'Meet Our Expert Doctors'); ?>
            </h2>
            <p class="text-gray-700 max-w-2xl mx-auto">
                <?php echo t('ທີມງານແພດຂອງພວກເຮົາປະກອບດ້ວຍຜູ້ຊ່ຽວຊານທີ່ອຸທິດຕົນ ຊຶ່ງມີຄວາມຮູ້ແລະປະສົບການອັນກວ້າງຂວາງ', 'Our medical team consists of dedicated specialists with extensive knowledge and experience'); ?>
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Doctor 1 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-lg transition duration-300 hover:shadow-xl group">
                <div class="relative overflow-hidden">
                    <img src="assets/images/doctor1.jpg" alt="<?php echo t('ດຣ. ໂນ້ ໃຈດີ', 'Dr. No Jaidee'); ?>" class="w-full h-80 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-teal-900 to-transparent opacity-0 group-hover:opacity-70 transition duration-300"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 transform translate-y-full group-hover:translate-y-0 transition duration-300">
                        <div class="flex justify-center space-x-4">
                            <a href="#" class="bg-white text-teal-600 w-10 h-10 rounded-full flex items-center justify-center hover:bg-teal-50 transition duration-300">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="bg-white text-teal-400 w-10 h-10 rounded-full flex items-center justify-center hover:bg-teal-50 transition duration-300">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="bg-white text-teal-700 w-10 h-10 rounded-full flex items-center justify-center hover:bg-teal-50 transition duration-300">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-teal-800 mb-1"><?php echo t('ດຣ. ໂນ້ ໃຈດີ', 'Dr. No Jaidee'); ?></h3>
                    <p class="text-teal-600 mb-3"><?php echo t('ຫົວໜ້າແຜນກອາຍຸລະກຳ', 'Head of Internal Medicine'); ?></p>
                    <p class="text-gray-700">
                        <?php echo t('ປະສົບການດ້ານອາຍຸລະກຳມາແລ້ວ 15 ປີ, ຊ່ຽວຊານໃນການປິ່ນປົວໂລກເບົາຫວານແລະຄວາມດັນເລືອດສູງ', 'With 15 years of experience in internal medicine, specializing in diabetes and hypertension treatment'); ?>
                    </p>
                </div>
            </div>
            
            <!-- Doctor 2 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-lg transition duration-300 hover:shadow-xl group">
                <div class="relative overflow-hidden">
                    <img src="assets/images/doctor2.jpg" alt="<?php echo t('ພຍ. ໂນ້ ສຸດໃຈ', 'Dr. No Soudjai'); ?>" class="w-full h-80 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-teal-900 to-transparent opacity-0 group-hover:opacity-70 transition duration-300"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 transform translate-y-full group-hover:translate-y-0 transition duration-300">
                        <div class="flex justify-center space-x-4">
                            <a href="#" class="bg-white text-teal-600 w-10 h-10 rounded-full flex items-center justify-center hover:bg-teal-50 transition duration-300">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="bg-white text-teal-400 w-10 h-10 rounded-full flex items-center justify-center hover:bg-teal-50 transition duration-300">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="bg-white text-teal-700 w-10 h-10 rounded-full flex items-center justify-center hover:bg-teal-50 transition duration-300">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-teal-800 mb-1"><?php echo t('ພຍ. ໂນ້ ສຸດໃຈ', 'Dr. No Soudjai'); ?></h3>
                    <p class="text-teal-600 mb-3"><?php echo t('ແພດເດັກ', 'Pediatrician'); ?></p>
                    <p class="text-gray-700">
                        <?php echo t('ຊ່ຽວຊານດ້ານກຸມາລະເວດຊະກຳ, ດ້ວຍປະສົບການ 10 ປີໃນການປິ່ນປົວແລະດູແລເດັກນ້ອຍ', 'Pediatric specialist with 10 years of experience in treating and caring for children'); ?>
                    </p>
                </div>
            </div>
            
            <!-- Doctor 3 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-lg transition duration-300 hover:shadow-xl group">
                <div class="relative overflow-hidden">
                    <img src="assets/images/doctor3.jpg" alt="<?php echo t('ດຣ. ໂນ້ ແສນສຸກ', 'Dr. No Saensuk'); ?>" class="w-full h-80 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-teal-900 to-transparent opacity-0 group-hover:opacity-70 transition duration-300"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 transform translate-y-full group-hover:translate-y-0 transition duration-300">
                        <div class="flex justify-center space-x-4">
                            <a href="#" class="bg-white text-teal-600 w-10 h-10 rounded-full flex items-center justify-center hover:bg-teal-50 transition duration-300">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="bg-white text-teal-400 w-10 h-10 rounded-full flex items-center justify-center hover:bg-teal-50 transition duration-300">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="bg-white text-teal-700 w-10 h-10 rounded-full flex items-center justify-center hover:bg-teal-50 transition duration-300">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-teal-800 mb-1"><?php echo t('ດຣ. ໂນ້ ແສນສຸກ', 'Dr. No Saensuk'); ?></h3>
                    <p class="text-teal-600 mb-3"><?php echo t('ແພດຜິວໜັງ', 'Dermatologist'); ?></p>
                    <p class="text-gray-700">
                        <?php echo t('ຊ່ຽວຊານດ້ານໂລກຜິວໜັງ, ຜ່ານການຮຽນແລະຝຶກອົບຮົມຈາກມະຫາວິທະຍາໄລຊັ້ນນຳໃນຕ່າງປະເທດ', 'Skin specialist, educated and trained at leading international universities'); ?>
                    </p>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-12">
            <a href="team.php" class="inline-block bg-teal-600 hover:bg-teal-700 text-white px-6 py-3 rounded-lg font-semibold transition duration-300">
                <?php echo t('ເບິ່ງທີມງານທັງໝົດ', 'View All Team Members'); ?>
            </a>
        </div>
    </div>
</section>

<!-- Awards & Certifications -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <div class="inline-block bg-teal-50 px-3 py-1 rounded-full text-teal-700 font-medium text-sm mb-4">
                <?php echo t('ລາງວັນ & ການຢັ້ງຢືນ', 'Awards & Certifications'); ?>
            </div>
            <h2 class="text-3xl font-bold text-teal-800 mb-4">
                <?php echo t('ຄວາມສຳເລັດຂອງພວກເຮົາ', 'Our Achievements'); ?>
            </h2>
            <p class="text-gray-700 max-w-2xl mx-auto">
                <?php echo t('ພວກເຮົາພູມໃຈໃນການຮັບຮູ້ແລະການຢັ້ງຢືນທີ່ພວກເຮົາໄດ້ຮັບຕະຫຼອດປີ', 'We take pride in the recognitions and certifications we have received over the years'); ?>
            </p>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8">
            <!-- Award 1 -->
            <div class="bg-gray-50 p-6 rounded-lg shadow-md text-center hover:shadow-lg transition duration-300">
                <img src="assets/images/award1.png" alt="<?php echo t('ດີເລີດດ້ານການບໍລິການລູກຄ້າ', 'Excellence in Customer Service'); ?>" class="h-16 mx-auto mb-4">
                <h3 class="text-lg font-semibold text-teal-800 mb-2"><?php echo t('ດີເລີດດ້ານການບໍລິການລູກຄ້າ', 'Excellence in Customer Service'); ?></h3>
                <p class="text-gray-600 text-sm"><?php echo t('2021 - ສະມາຄົມໂຮງໝໍເອກະຊົນແຫ່ງຊາດ', '2021 - National Association of Private Hospitals'); ?></p>
            </div>
            
            <!-- Award 2 -->
            <div class="bg-gray-50 p-6 rounded-lg shadow-md text-center hover:shadow-lg transition duration-300">
                <img src="assets/images/award2.png" alt="<?php echo t('ການຢັ້ງຢືນຄຸນນະພາບສາກົນ', 'International Quality Certification'); ?>" class="h-16 mx-auto mb-4">
                <h3 class="text-lg font-semibold text-teal-800 mb-2"><?php echo t('ການຢັ້ງຢືນຄຸນນະພາບສາກົນ', 'International Quality Certification'); ?></h3>
                <p class="text-gray-600 text-sm"><?php echo t('2022 - JCI ອົງການຮັບຮອງຄຸນນະພາບສາກົນ', '2022 - JCI International Quality Organization'); ?></p>
            </div>
            
            <!-- Award 3 -->
            <div class="bg-gray-50 p-6 rounded-lg shadow-md text-center hover:shadow-lg transition duration-300">
                <img src="assets/images/award3.png" alt="<?php echo t('ນະວັດຕະກຳດ້ານການດູແລສຸຂະພາບ', 'Healthcare Innovation'); ?>" class="h-16 mx-auto mb-4">
                <h3 class="text-lg font-semibold text-teal-800 mb-2"><?php echo t('ນະວັດຕະກຳດ້ານການດູແລສຸຂະພາບ', 'Healthcare Innovation'); ?></h3>
                <p class="text-gray-600 text-sm"><?php echo t('2020 - ສະມາຄົມນະວັດຕະກຳແຫ່ງຊາດ', '2020 - National Innovation Association'); ?></p>
            </div>
            
            <!-- Award 4 -->
            <div class="bg-gray-50 p-6 rounded-lg shadow-md text-center hover:shadow-lg transition duration-300">
                <img src="assets/images/award4.png" alt="<?php echo t('ຄລີນິກທີ່ດີທີ່ສຸດແຫ່ງປີ', 'Best Clinic of the Year'); ?>" class="h-16 mx-auto mb-4">
                <h3 class="text-lg font-semibold text-teal-800 mb-2"><?php echo t('ຄລີນິກທີ່ດີທີ່ສຸດແຫ່ງປີ', 'Best Clinic of the Year'); ?></h3>
                <p class="text-gray-600 text-sm"><?php echo t('2023 - ວາລະສານການດູແລສຸຂະພາບປະຈຳປະເທດ', '2023 - Country Healthcare Magazine'); ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Partners with Slider -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <div class="inline-block bg-teal-50 px-3 py-1 rounded-full text-teal-700 font-medium text-sm mb-4">
                <?php echo t('ຄູ່ຮ່ວມງານ', 'Our Partners'); ?>
            </div>
            <h2 class="text-3xl font-bold text-teal-800 mb-4">
                <?php echo t('ພວກເຮົາຮ່ວມມືກັບ', 'We Collaborate With'); ?>
            </h2>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8 items-center">
            <img src="assets/images/partner1.png" alt="Partner 1" class="h-12 mx-auto grayscale hover:grayscale-0 transition duration-300">
            <img src="assets/images/partner2.png" alt="Partner 2" class="h-12 mx-auto grayscale hover:grayscale-0 transition duration-300">
            <img src="assets/images/partner3.png" alt="Partner 3" class="h-12 mx-auto grayscale hover:grayscale-0 transition duration-300">
            <img src="assets/images/partner4.png" alt="Partner 4" class="h-12 mx-auto grayscale hover:grayscale-0 transition duration-300">
            <img src="assets/images/partner5.png" alt="Partner 5" class="h-12 mx-auto grayscale hover:grayscale-0 transition duration-300">
            <img src="assets/images/partner6.png" alt="Partner 6" class="h-12 mx-auto grayscale hover:grayscale-0 transition duration-300">
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-teal-700">
    <div class="container mx-auto px-6">
        <div class="bg-white rounded-xl shadow-2xl overflow-hidden">
            <div class="flex flex-col md:flex-row">
                <div class="md:w-1/2 p-12 md:p-16">
                    <h2 class="text-3xl font-bold text-teal-800 mb-6">
                        <?php echo t('ຕ້ອງການນັດໝາຍກັບແພດຂອງພວກເຮົາບໍ?', 'Need to Schedule an Appointment?'); ?>
                    </h2>
                    <p class="text-gray-700 mb-8 text-lg">
                        <?php echo t('ພວກເຮົາພ້ອມໃຫ້ບໍລິການທ່ານ. ນັດໝາຍອອນລາຍຫຼືໂທຫາພວກເຮົາດຽວນີ້.', 'We are ready to serve you. Book an appointment online or call us now.'); ?>
                    </p>
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="appointments.php" class="bg-teal-600 hover:bg-teal-700 text-white px-6 py-3 rounded-lg font-semibold text-center transition duration-300">
                            <?php echo t('ນັດໝາຍອອນລາຍ', 'Book Online'); ?>
                        </a>
                        <a href="tel:<?php echo preg_replace('/[^0-9]/', '', SITE_PHONE); ?>" class="border border-teal-600 text-teal-600 hover:bg-teal-50 px-6 py-3 rounded-lg font-semibold text-center transition duration-300">
                            <i class="fas fa-phone-alt mr-2"></i> <?php echo t('ໂທຫາພວກເຮົາ', 'Call Us'); ?>
                        </a>
                    </div>
                </div>
                <div class="md:w-1/2 bg-teal-600 p-12 md:p-16 flex flex-col justify-center text-white">
                    <h3 class="text-2xl font-bold mb-6"><?php echo t('ຊົ່ວໂມງເຮັດວຽກ', 'Working Hours'); ?></h3>
                    <ul class="space-y-4">
                        <li class="flex justify-between items-center">
                            <span><?php echo t('ວັນຈັນ - ວັນສຸກ', 'Monday - Friday'); ?></span>
                            <span class="font-bold">08:00 - 20:00</span>
                        </li>
                        <li class="flex justify-between items-center">
                            <span><?php echo t('ວັນເສົາ', 'Saturday'); ?></span>
                            <span class="font-bold">09:00 - 18:00</span>
                        </li>
                        <li class="flex justify-between items-center">
                            <span><?php echo t('ວັນອາທິດ', 'Sunday'); ?></span>
                            <span class="font-bold">09:00 - 16:00</span>
                        </li>
                        <li class="flex justify-between items-center pt-4 border-t border-teal-500">
                            <span><?php echo t('ບໍລິການສຸກເສີນ', 'Emergency Service'); ?></span>
                            <span class="font-bold"><?php echo t('24/7', '24/7'); ?></span>
                        </li>
                    </ul>
                    <div class="mt-8 pt-6 border-t border-teal-500">
                        <h4 class="font-semibold mb-2"><?php echo t('ທີ່ຢູ່', 'Address'); ?></h4>
                        <p><?php echo SITE_ADDRESS; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once 'includes/footer.php';
?>