<?php
require_once 'includes/config.php';
$pageTitle = t("ທີມບໍລິຫານ", "Management Team");
require_once 'includes/header.php';
?>

<!-- Hero Section -->
<section class="relative bg-teal-900 text-bold py-20">
    <div class="absolute inset-0 opacity-20 z-0">
        <img src="assets/images/management-hero.jpg" alt="Management Team" class="w-full h-full object-cover">
    </div>
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6"><?php echo t("ພົບກັບທີມບໍລິຫານຂອງພວກເຮົາ", "Meet Our Management Team"); ?></h1>
            <div class="w-20 h-1 bg-teal-400 mx-auto mb-6"></div>
            <p class="text-xl text-teal-100">
                <?php echo t("ນຳສະເໜີຜູ້ນຳທີ່ມີປະສົບການຂອງພວກເຮົາ ຜູ້ທີ່ກຳນົດວິໄສທັດແລະຂັບເຄື່ອນຄວາມສຳເລັດຂອງຄລີນິກວັນເມດ", "Introducing our experienced leaders who set the vision and drive the success of OneMeds Clinic"); ?>
            </p>
        </div>
    </div>
</section>

<!-- Mission Statement -->
<section class="py-12 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-teal-800 mb-6"><?php echo t("ວິໄສທັດຂອງຜູ້ນຳ", "Leadership Vision"); ?></h2>
            <blockquote class="text-xl text-gray-700 italic mb-8">
                <?php echo t('"ພວກເຮົາເຊື່ອວ່າການດູແລສຸຂະພາບທີ່ດີທີ່ສຸດເກີດຂຶ້ນເມື່ອຄວາມຊ່ຽວຊານທາງການແພດຊັ້ນສູງມາພ້ອມກັບຄວາມໃນໃຈຜູ້ຄົນເປັນອັນດັບທຳອິດ. ຄວາມເປັນຜູ້ນຳຂອງພວກເຮົາຈະຊຸກຍູ້ວັດທະນະທຳຂອງການເອົາໃຈໃສ່, ນະວັດຕະກຳ, ແລະຄວາມເພິ່ງພໍໃຈຂອງຄົນເຈັບຢູ່ສະເໝີ."', '"We believe the best healthcare happens when top medical expertise is paired with a deeply people-first approach. Our leadership fosters a culture of caring, innovation, and unwavering patient satisfaction."'); ?>
            </blockquote>
            <p class="text-teal-800 font-semibold">
                <?php echo t("- ດຣ. ພູເຕັມ ດວງມະນີ, ຜູ້ອຳນວຍການຄລີນິກ", "- Dr. Phoutem Douangmany, Clinic Director"); ?>
            </p>
        </div>
    </div>
</section>

<!-- Executive Team -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-teal-800 mb-4"><?php echo t("ທີມບໍລິຫານລະດັບສູງ", "Executive Team"); ?></h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                <?php echo t("ທີມບໍລິຫານຂອງພວກເຮົາໄດ້ນຳພາຄລີນິກວັນເມດດ້ວຍວິໄສທັດທີ່ຊັດເຈນແລະຄວາມມຸ່ງໝັ້ນທີ່ຈະສະໜອງການດູແລສຸຂະພາບທີ່ດີທີ່ສຸດ", "Our executive team leads OneMeds Clinic with a clear vision and commitment to providing the best healthcare"); ?>
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 max-w-5xl mx-auto">
            <!-- Executive 1 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-2">
                <div class="relative">
                    <img src="assets/images/executive1.jpg" alt="<?php echo t("ດຣ. ພູເຕັມ ດວງມະນີ", "Dr. Phoutem Douangmany"); ?>" class="w-full h-72 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-teal-900 to-transparent opacity-70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold"><?php echo t("ດຣ. ພູເຕັມ ດວງມະນີ", "Dr. Phoutem Douangmany"); ?></h3>
                        <p><?php echo t("ຜູ້ອຳນວຍການຄລີນິກ", "Clinic Director"); ?></p>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-gray-700 mb-4">
                        <?php echo t("ອະດີດອາຈານແພດຜູ້ທີ່ມີປະສົບການການດູແລສຸຂະພາບກວ່າ 20 ປີ. ທ່ານໄດ້ກໍ່ຕັ້ງຄລີນິກວັນເມດເພື່ອສ້າງຕົວແບບການດູແລທີ່ເນັ້ນຄົນເຈັບເປັນຫຼັກ.", "Former medical professor with over 20 years in healthcare. He founded OneMeds Clinic to create a patient-centered care model."); ?>
                    </p>
                    <div class="border-t pt-4">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-gray-600"><?php echo t("ການສຶກສາ", "Education"); ?></span>
                            <span class="text-teal-600"><?php echo t("MD, Ph.D. ມະຫາວິທະຍາໄລຊິງກະໂປ", "MD, Ph.D. Singapore University"); ?></span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600"><?php echo t("ຄວາມເຊີ່ຍວຊານ", "Expertise"); ?></span>
                            <span class="text-teal-600"><?php echo t("ການບໍລິຫານທາງການແພດ", "Medical Administration"); ?></span>
                        </div>
                    </div>
                    <div class="mt-6 flex justify-center space-x-4">
                        <a href="#" class="text-teal-600 hover:text-teal-800 transition duration-300">
                            <i class="fab fa-linkedin text-xl"></i>
                        </a>
                        <a href="#" class="text-teal-400 hover:text-teal-600 transition duration-300">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <a href="#" class="text-teal-900 hover:text-teal-700 transition duration-300">
                            <i class="fas fa-envelope text-xl"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Executive 2 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-2">
                <div class="relative">
                    <img src="assets/images/executive2.jpg" alt="<?php echo t("ທ.ນ. ວິລິດາ ພົມວິໄຊ", "Ms. Vilida Phomvisay"); ?>" class="w-full h-72 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-teal-900 to-transparent opacity-70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold"><?php echo t("ທ.ນ. ວິລິດາ ພົມວິໄຊ", "Ms. Vilida Phomvisay"); ?></h3>
                        <p><?php echo t("ຫົວໜ້າຝ່າຍປະຕິບັດການ", "Chief Operations Officer"); ?></p>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-gray-700 mb-4">
                        <?php echo t("ມີປະສົບການ 15 ປີໃນການບໍລິຫານການດູແລສຸຂະພາບ, ທ່ານວິລິດາກຳກັບລະບົບປະຕິບັດງານທັງໝົດຂອງຄລີນິກເພື່ອຮັບປະກັນປະສິດທິພາບສູງສຸດແລະຄຸນນະພາບການບໍລິການ.", "With 15 years in healthcare management, Vilida oversees all clinic operations to ensure maximum efficiency and service quality."); ?>
                    </p>
                    <div class="border-t pt-4">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-gray-600"><?php echo t("ການສຶກສາ", "Education"); ?></span>
                            <span class="text-teal-600"><?php echo t("MBA ມະຫາວິທະຍາໄລຈຸລາລົງກອນ", "MBA Chulalongkorn University"); ?></span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600"><?php echo t("ຄວາມເຊີ່ຍວຊານ", "Expertise"); ?></span>
                            <span class="text-teal-600"><?php echo t("ການປັບປຸງຄຸນນະພາບ, ການຈັດການທຸລະກິດ", "Quality Improvement, Business Management"); ?></span>
                        </div>
                    </div>
                    <div class="mt-6 flex justify-center space-x-4">
                        <a href="#" class="text-teal-600 hover:text-teal-800 transition duration-300">
                            <i class="fab fa-linkedin text-xl"></i>
                        </a>
                        <a href="#" class="text-teal-400 hover:text-teal-600 transition duration-300">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <a href="#" class="text-teal-900 hover:text-teal-700 transition duration-300">
                            <i class="fas fa-envelope text-xl"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Executive 3 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-2">
                <div class="relative">
                    <img src="assets/images/executive3.jpg" alt="<?php echo t("ທ. ສົມພົງ ສຸລິຍະວົງ", "Mr. Somphong Suliyavong"); ?>" class="w-full h-72 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-teal-900 to-transparent opacity-70"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <h3 class="text-xl font-bold"><?php echo t("ທ. ສົມພົງ ສຸລິຍະວົງ", "Mr. Somphong Suliyavong"); ?></h3>
                        <p><?php echo t("ຫົວໜ້າຝ່າຍການເງິນ", "Chief Financial Officer"); ?></p>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-gray-700 mb-4">
                        <?php echo t("ຜູ້ຊ່ຽວຊານດ້ານການເງິນທີ່ມີປະສົບການ 10 ປີໃນຂະແໜງການດູແລສຸຂະພາບ. ທ່ານ ສົມພົງ ຮັບຜິດຊອບການວາງແຜນແລະການຄຸ້ມຄອງການເງິນເພື່ອຄວາມຍືນຍົງໄລຍະຍາວຂອງຄລີນິກ.", "Finance expert with 10 years in the healthcare sector. Somphong is responsible for financial planning and management for the long-term sustainability of the clinic."); ?>
                    </p>
                    <div class="border-t pt-4">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-gray-600"><?php echo t("ການສຶກສາ", "Education"); ?></span>
                            <span class="text-teal-600"><?php echo t("CPA, ປະລິນຍາໂທ ການບັນຊີ", "CPA, Master's in Accounting"); ?></span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600"><?php echo t("ຄວາມເຊີ່ຍວຊານ", "Expertise"); ?></span>
                            <span class="text-teal-600"><?php echo t("ການເງິນດ້ານສຸຂະພາບ, ການວາງແຜນງົບປະມານ", "Healthcare Finance, Budget Planning"); ?></span>
                        </div>
                    </div>
                    <div class="mt-6 flex justify-center space-x-4">
                        <a href="#" class="text-teal-600 hover:text-teal-800 transition duration-300">
                            <i class="fab fa-linkedin text-xl"></i>
                        </a>
                        <a href="#" class="text-teal-400 hover:text-teal-600 transition duration-300">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <a href="#" class="text-teal-900 hover:text-teal-700 transition duration-300">
                            <i class="fas fa-envelope text-xl"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Department Leaders -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-teal-800 mb-4"><?php echo t("ຜູ້ນຳຝ່າຍຕ່າງໆ", "Department Leaders"); ?></h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                <?php echo t("ຜູ້ນຳແຜນກຕ່າງໆຂອງພວກເຮົາຮັບປະກັນການດຳເນີນງານທີ່ລາບລື່ນໃນທຸກດ້ານຂອງຄລີນິກ", "Our department heads ensure smooth operations across all areas of the clinic"); ?>
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Department Leader 1 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                <div class="relative">
                    <img src="assets/images/dept-leader1.jpg" alt="<?php echo t("ພຍ. ສຸກສະໄໝ ວິໄຊຄຳ", "Nurse Suksmai Visaykham"); ?>" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-teal-900 bg-opacity-30 hover:bg-opacity-20 transition duration-300 flex items-center justify-center opacity-0 hover:opacity-100">
                        <div class="text-white text-center p-4">
                            <p class="font-medium"><?php echo t("ແພດທີ່ເປັນມິດກັບຄົນເຈັບ ແລະ ອຸທິດຕົນ", "Patient-friendly doctor and dedicated"); ?></p>
                        </div>
                    </div>
                </div>
                <div class="p-4 text-center">
                    <h3 class="text-lg font-semibold text-teal-800 mb-1"><?php echo t("ພຍ. ສຸກສະໄໝ ວິໄຊຄຳ", "Nurse Suksmai Visaykham"); ?></h3>
                    <p class="text-teal-600 text-sm mb-2"><?php echo t("ຫົວໜ້າພະຍາບານ", "Head of Nursing"); ?></p>
                    <div class="flex justify-center space-x-3 mt-3">
                        <a href="#" class="text-teal-600 hover:text-teal-800 transition duration-300">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="#" class="text-teal-900 hover:text-teal-700 transition duration-300">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Department Leader 2 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                <div class="relative">
                    <img src="assets/images/dept-leader2.jpg" alt="<?php echo t("ທ.ນ. ສົມຈິດ ດາວະພອນ", "Ms. Somjit Davaphon"); ?>" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-teal-900 bg-opacity-30 hover:bg-opacity-20 transition duration-300 flex items-center justify-center opacity-0 hover:opacity-100">
                        <div class="text-white text-center p-4">
                            <p class="font-medium"><?php echo t("ຊ່ຽວຊານດ້ານການຕະຫຼາດສຸຂະພາບ", "Expert in healthcare marketing"); ?></p>
                        </div>
                    </div>
                </div>
                <div class="p-4 text-center">
                    <h3 class="text-lg font-semibold text-teal-800 mb-1"><?php echo t("ທ.ນ. ສົມຈິດ ດາວະພອນ", "Ms. Somjit Davaphon"); ?></h3>
                    <p class="text-teal-600 text-sm mb-2"><?php echo t("ຜູ້ອຳນວຍການຝ່າຍການຕະຫຼາດ", "Marketing Director"); ?></p>
                    <div class="flex justify-center space-x-3 mt-3">
                        <a href="#" class="text-teal-600 hover:text-teal-800 transition duration-300">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="#" class="text-teal-900 hover:text-teal-700 transition duration-300">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Department Leader 3 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                <div class="relative">
                    <img src="assets/images/dept-leader3.jpg" alt="<?php echo t("ທ. ວິຊິດ ປັນຍາລາດ", "Mr. Vichit Panyalad"); ?>" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-teal-900 bg-opacity-30 hover:bg-opacity-20 transition duration-300 flex items-center justify-center opacity-0 hover:opacity-100">
                        <div class="text-white text-center p-4">
                            <p class="font-medium"><?php echo t("ຜູ້ຊ່ຽວຊານດ້ານຊັບພະຍາກອນມະນຸດ", "Human resources specialist"); ?></p>
                        </div>
                    </div>
                </div>
                <div class="p-4 text-center">
                    <h3 class="text-lg font-semibold text-teal-800 mb-1"><?php echo t("ທ. ວິຊິດ ປັນຍາລາດ", "Mr. Vichit Panyalad"); ?></h3>
                    <p class="text-teal-600 text-sm mb-2"><?php echo t("ຜູ້ຈັດການຝ່າຍຊັບພະຍາກອນມະນຸດ", "HR Manager"); ?></p>
                    <div class="flex justify-center space-x-3 mt-3">
                        <a href="#" class="text-teal-600 hover:text-teal-800 transition duration-300">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="#" class="text-teal-900 hover:text-teal-700 transition duration-300">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Department Leader 4 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                <div class="relative">
                    <img src="assets/images/dept-leader4.jpg" alt="<?php echo t("ທ. ນນທວັດ ຈັນປະເສີດ", "Mr. Nonthawat Janprasert"); ?>" class="w-full h-56 object-cover">
                    <div class="absolute inset-0 bg-teal-900 bg-opacity-30 hover:bg-opacity-20 transition duration-300 flex items-center justify-center opacity-0 hover:opacity-100">
                        <div class="text-white text-center p-4">
                            <p class="font-medium"><?php echo t("ຜູ້ນຳດ້ານເຕັກໂນໂລຊີການແພດ", "Leader in medical technology"); ?></p>
                        </div>
                    </div>
                </div>
                <div class="p-4 text-center">
                    <h3 class="text-lg font-semibold text-teal-800 mb-1"><?php echo t("ທ. ນນທວັດ ຈັນປະເສີດ", "Mr. Nonthawat Janprasert"); ?></h3>
                    <p class="text-teal-600 text-sm mb-2"><?php echo t("ຜູ້ອຳນວຍການຝ່າຍເຕັກໂນໂລຊີ", "IT Director"); ?></p>
                    <div class="flex justify-center space-x-3 mt-3">
                        <a href="#" class="text-teal-600 hover:text-teal-800 transition duration-300">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="#" class="text-teal-900 hover:text-teal-700 transition duration-300">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Management Approach -->
<section class="py-16 bg-teal-50">
    <div class="container mx-auto px-6">
        <div class="max-w-5xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-teal-800 mb-6"><?php echo t("ວິທີການບໍລິຫານຂອງພວກເຮົາ", "Our Management Approach"); ?></h2>
                    <p class="text-gray-700 mb-6">
                        <?php echo t("ທີມບໍລິຫານຂອງຄລີນິກວັນເມດເນັ້ນໜັກໃສ່ການສ້າງສະພາບແວດລ້ອມທີ່ຜູ້ປ່ວຍສາມາດໄດ້ຮັບການປິ່ນປົວທີ່ດີທີ່ສຸດ ແລະ ພະນັກງານສາມາດເຮັດວຽກໃນສະພາບແວດລ້ອມທີ່ສະໜັບສະໜູນ.", "OneMeds Clinic's management team focuses on creating an environment where patients can receive the best treatment and staff can work in a supportive environment."); ?>
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <div class="flex-shrink-0 h-6 w-6 rounded-full bg-teal-600 flex items-center justify-center mt-1">
                                <svg class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <p class="ml-3 text-gray-700">
                                <?php echo t("ການຕັດສິນໃຈໂດຍອີງໃສ່ຂໍ້ມູນແລະຫຼັກຖານ", "Data-driven and evidence-based decision making"); ?>
                            </p>
                        </li>
                        <li class="flex items-start">
                            <div class="flex-shrink-0 h-6 w-6 rounded-full bg-teal-600 flex items-center justify-center mt-1">
                                <svg class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <p class="ml-3 text-gray-700">
                                <?php echo t("ການປັບປຸງຄຸນນະພາບຢ່າງຕໍ່ເນື່ອງແລະການປະເມີນຜົນປົກກະຕິ", "Continuous quality improvement and regular evaluations"); ?>
                            </p>
                        </li>
                        <li class="flex items-start">
                            <div class="flex-shrink-0 h-6 w-6 rounded-full bg-teal-600 flex items-center justify-center mt-1">
                                <svg class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <p class="ml-3 text-gray-700">
                                <?php echo t("ການສື່ສານທີ່ເປີດເຜີຍແລະໂປ່ງໃສກັບພະນັກງານແລະຄົນເຈັບ", "Open and transparent communication with staff and patients"); ?>
                            </p>
                        </li>
                        <li class="flex items-start">
                            <div class="flex-shrink-0 h-6 w-6 rounded-full bg-teal-600 flex items-center justify-center mt-1">
                                <svg class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <p class="ml-3 text-gray-700">
                                <?php echo t("ສົ່ງເສີມນະວັດຕະກຳແລະການປັບປຸງຢ່າງຕໍ່ເນື່ອງ", "Encouraging innovation and continuous improvement"); ?>
                            </p>
                        </li>
                    </ul>
                </div>
                <div>
                    <img src="assets/images/management-approach.jpg" alt="<?php echo t("ທີມບໍລິຫານຂອງພວກເຮົາໃນຊ່ວງການປະຊຸມ", "Our Management Team During a Meeting"); ?>" class="rounded-lg shadow-xl w-full h-auto">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Achievements and Recognition -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-teal-800 mb-4"><?php echo t("ຜົນສຳເລັດແລະການຍອມຮັບ", "Achievements and Recognition"); ?></h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                <?php echo t("ພາຍໃຕ້ການນຳພາຂອງທີມບໍລິຫານຂອງພວກເຮົາ, ຄລີນິກວັນເມດໄດ້ຮັບການຍອມຮັບມາຢ່າງຫຼວງຫຼາຍໃນຂະແໜງການດູແລສຸຂະພາບ", "Under our management team's leadership, OneMeds Clinic has received significant recognition in the healthcare sector"); ?>
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            <!-- Achievement 1 -->
            <div class="bg-teal-50 rounded-lg p-6 text-center hover:shadow-lg transition duration-300">
                <div class="text-teal-600 text-4xl mb-4">
                    <i class="fas fa-award"></i>
                </div>
                <h3 class="text-xl font-semibold text-teal-800 mb-3"><?php echo t("ຄລີນິກທີ່ດີເລີດແຫ່ງປີ 2023", "Excellence in Clinical Care 2023"); ?></h3>
                <p class="text-gray-700">
                    <?php echo t("ໄດ້ຮັບລາງວັນຈາກສະມາຄົມການດູແລສຸຂະພາບແຫ່ງຊາດສຳລັບການໃຫ້ບໍລິການທີ່ເປັນເລີດ.", "Awarded by the National Healthcare Association for excellence in service provision."); ?>
                </p>
            </div>

            <!-- Achievement 2 -->
            <div class="bg-teal-50 rounded-lg p-6 text-center hover:shadow-lg transition duration-300">
                <div class="text-teal-600 text-4xl mb-4">
                    <i class="fas fa-certificate"></i>
                </div>
                <h3 class="text-xl font-semibold text-teal-800 mb-3"><?php echo t("ການຮັບຮອງມາດຕະຖານ JCI", "JCI Accreditation"); ?></h3>
                <p class="text-gray-700">
                    <?php echo t("ໄດ້ຮັບການຮັບຮອງຈາກຄະນະກຳມະການສາກົນຮ່ວມ (JCI) ສຳລັບຄວາມເປັນເລີດດ້ານການດູແລສຸຂະພາບ.", "Received accreditation from the Joint Commission International (JCI) for healthcare excellence."); ?>
                </p>
            </div>

            <!-- Achievement 3 -->
            <div class="bg-teal-50 rounded-lg p-6 text-center hover:shadow-lg transition duration-300">
                <div class="text-teal-600 text-4xl mb-4">
                    <i class="fas fa-thumbs-up"></i>
                </div>
                <h3 class="text-xl font-semibold text-teal-800 mb-3"><?php echo t("ຄວາມພໍໃຈຂອງຄົນເຈັບ 95%", "95% Patient Satisfaction"); ?></h3>
                <p class="text-gray-700">
                    <?php echo t("ໄດ້ຮັບອັດຕາຄວາມພໍໃຈຂອງຄົນເຈັບ 95% ໃນການສຳຫຼວດປະຈຳປີ 2024, ຊຶ່ງສູງກວ່າຄ່າສະເລ່ຍຂອງປະເທດ.", "Achieved a 95% patient satisfaction rate in the 2024 annual survey, exceeding the national average."); ?>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Join Our Team CTA -->
<section class="py-16 bg-teal-800 text-white">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-6"><?php echo t("ຮ່ວມງານກັບທີມຂອງພວກເຮົາ", "Join Our Team"); ?></h2>
            <p class="text-xl text-teal-100 mb-8">
                <?php echo t("ພວກເຮົາກຳລັງຊອກຫາຜູ້ມີຄວາມສາມາດແລະມີໃຈອຸທິດຕົນເພື່ອເຮັດວຽກຮ່ວມກັນໃນການສະໜອງການດູແລສຸຂະພາບທີ່ມີຄຸນນະພາບສູງ. ຄົ້ນຫາກ່ຽວກັບໂອກາດໃນການເຮັດວຽກກັບທີມບໍລິຫານທີ່ມີປະສົບການຂອງພວກເຮົາ.", "We're looking for talented and dedicated individuals to work together in providing high-quality healthcare. Discover opportunities to work with our experienced management team."); ?>
            </p>
            <a href="careers.php" class="inline-block bg-white text-teal-800 px-8 py-4 rounded-lg font-bold text-lg hover:bg-teal-100 transition duration-300">
                <?php echo t("ເບິ່ງຕຳແໜ່ງວ່າງທັງໝົດ", "View All Open Positions"); ?>
            </a>
        </div>
    </div>
</section>

<!-- Contact Management Team -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="md:flex">
                    <div class="md:w-1/2 p-8 md:p-12">
                        <h2 class="text-2xl font-bold text-teal-800 mb-6"><?php echo t("ຕິດຕໍ່ທີມບໍລິຫານ", "Contact Management"); ?></h2>
                        <p class="text-gray-700 mb-6">
                            <?php echo t("ທ່ານມີຄຳຖາມຫຼືຄຳເຫັນສຳລັບທີມບໍລິຫານຂອງພວກເຮົາບໍ? ສົ່ງຂໍ້ຄວາມຫາພວກເຮົາແລະເຮົາຈະຕິດຕໍ່ຫາທ່ານໄວທີ່ສຸດເທົ່າທີ່ຈະເປັນໄປໄດ້.", "Do you have questions or feedback for our management team? Send us a message and we'll get back to you as soon as possible."); ?>
                        </p>
                        <form action="#" method="POST" class="space-y-4">
                            <div>
                                <label for="name" class="block text-gray-700 font-medium mb-2"><?php echo t("ຊື່", "Name"); ?></label>
                                <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div>
                                <label for="email" class="block text-gray-700 font-medium mb-2"><?php echo t("ອີເມວ", "Email"); ?></label>
                                <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div>
                                <label for="message" class="block text-gray-700 font-medium mb-2"><?php echo t("ຂໍ້ຄວາມ", "Message"); ?></label>
                                <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                            </div>
                            <button type="submit" class="bg-teal-600 hover:bg-teal-700 text-white px-6 py-3 rounded-lg font-semibold transition duration-300">
                                <?php echo t("ສົ່ງຂໍ້ຄວາມ", "Send Message"); ?>
                            </button>
                        </form>
                    </div>
                    <div class="md:w-1/2 bg-teal-600 p-8 md:p-12 text-white">
                        <h3 class="text-xl font-bold mb-6"><?php echo t("ຂໍ້ມູນຕິດຕໍ່", "Contact Information"); ?></h3>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 h-6 w-6 rounded-full bg-teal-500 flex items-center justify-center mt-1">
                                    <i class="fas fa-envelope text-xs"></i>
                                </div>
                                <div class="ml-3">
                                    <p class="font-medium"><?php echo t("ອີເມວ", "Email"); ?></p>
                                    <p class="text-teal-100">management@onemeds.com</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 h-6 w-6 rounded-full bg-teal-500 flex items-center justify-center mt-1">
                                    <i class="fas fa-phone-alt text-xs"></i>
                                </div>
                                <div class="ml-3">
                                    <p class="font-medium"><?php echo t("ໂທລະສັບ", "Phone"); ?></p>
                                    <p class="text-teal-100"><?php echo SITE_PHONE; ?></p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 h-6 w-6 rounded-full bg-teal-500 flex items-center justify-center mt-1">
                                    <i class="fas fa-map-marker-alt text-xs"></i>
                                </div>
                                <div class="ml-3">
                                    <p class="font-medium"><?php echo t("ທີ່ຢູ່", "Address"); ?></p>
                                    <p class="text-teal-100"><?php echo SITE_ADDRESS; ?></p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 h-6 w-6 rounded-full bg-teal-500 flex items-center justify-center mt-1">
                                    <i class="fas fa-clock text-xs"></i>
                                </div>
                                <div class="ml-3">
                                    <p class="font-medium"><?php echo t("ເວລາເຮັດວຽກ", "Working Hours"); ?></p>
                                    <p class="text-teal-100"><?php echo t("ຈັນ-ສຸກ: 8:00 - 17:00", "Mon-Fri: 8:00 - 17:00"); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-8 pt-6 border-t border-teal-500">
                            <p class="font-medium mb-4"><?php echo t("ຕິດຕາມພວກເຮົາ", "Follow Us"); ?></p>
                            <div class="flex space-x-4">
                                <a href="#" class="text-white hover:text-teal-200 transition duration-300">
                                    <i class="fab fa-facebook-f text-lg"></i>
                                </a>
                                <a href="#" class="text-white hover:text-teal-200 transition duration-300">
                                    <i class="fab fa-twitter text-lg"></i>
                                </a>
                                <a href="#" class="text-white hover:text-teal-200 transition duration-300">
                                    <i class="fab fa-linkedin-in text-lg"></i>
                                </a>
                                <a href="#" class="text-white hover:text-teal-200 transition duration-300">
                                    <i class="fab fa-instagram text-lg"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once 'includes/footer.php';
?>