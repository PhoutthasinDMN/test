<?php
require_once 'includes/config.php';
$pageTitle = t("ທີມແພດ", "Our Team");
require_once 'includes/header.php';
?>

<!-- Page Header -->
<section class="py-12 bg-gradient-to-r from-blue-800 to-blue-600">
    <div class="container mx-auto px-6 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4"><?php echo t("ທີມແພດຜູ້ຊ່ຽວຊານຂອງພວກເຮົາ", "Our Expert Medical Team"); ?></h1>
        <div class="w-24 h-1 bg-white mx-auto mb-6"></div>
        <p class="text-xl text-blue-100 max-w-3xl mx-auto">
            <?php echo t("ພົບກັບທີມແພດແລະບຸກຄະລາກອນທາງການແພດທີ່ມີຄຸນວຸດທິສູງຂອງພວກເຮົາ ຜູ້ທີ່ອຸທິດຕົນເພື່ອສຸຂະພາບຂອງທ່ານ", "Meet our highly qualified doctors and medical staff who are dedicated to your health"); ?>
        </p>
    </div>
</section>

<!-- Search and Filter -->
<section class="py-8 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row items-center justify-between gap-4">
            <!-- Search -->
            <div class="w-full md:w-1/3">
                <div class="relative">
                    <input type="text" id="team-search" placeholder="<?php echo t("ຄົ້ນຫາແພດ...", "Search doctors..."); ?>" class="w-full px-4 py-3 pl-10 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                </div>
            </div>

            <!-- Filters -->
            <div class="w-full md:w-2/3 flex flex-wrap gap-3 justify-end">
                <button class="filter-btn active px-4 py-2 rounded-full bg-blue-600 text-white border-2 border-blue-600 hover:bg-blue-700 transition duration-300" data-filter="all">
                    <?php echo t("ທັງໝົດ", "All"); ?>
                </button>
                <button class="filter-btn px-4 py-2 rounded-full bg-white text-blue-600 border-2 border-blue-600 hover:bg-blue-50 transition duration-300" data-filter="internal-medicine">
                    <?php echo t("ອາຍຸລະກຳ", "Internal Medicine"); ?>
                </button>
                <button class="filter-btn px-4 py-2 rounded-full bg-white text-blue-600 border-2 border-blue-600 hover:bg-blue-50 transition duration-300" data-filter="pediatrics">
                    <?php echo t("ກຸມາລະເວດຊະກຳ", "Pediatrics"); ?>
                </button>
                <button class="filter-btn px-4 py-2 rounded-full bg-white text-blue-600 border-2 border-blue-600 hover:bg-blue-50 transition duration-300" data-filter="dermatology">
                    <?php echo t("ຜິວໜັງ", "Dermatology"); ?>
                </button>
                <button class="filter-btn px-4 py-2 rounded-full bg-white text-blue-600 border-2 border-blue-600 hover:bg-blue-50 transition duration-300" data-filter="surgery">
                    <?php echo t("ຜ່າຕັດ", "Surgery"); ?>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Team Members -->
<section class="py-16">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-blue-800 mb-12"><?php echo t("ແພດຜູ້ຊ່ຽວຊານຂອງພວກເຮົາ", "Our Medical Specialists"); ?></h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10" id="team-members-container">
            <!-- Doctor 1 -->
            <div class="team-member bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 transform hover:-translate-y-2" data-category="internal-medicine">
                <div class="relative">
                    <img src="assets/images/doctor1.jpg" alt="<?php echo t("ດຣ. ໂນ້ ໃຈດີ", "Dr. No Jaidee"); ?>" class="w-full h-80 object-cover">
                    <div class="absolute top-4 right-4">
                        <span class="bg-blue-600 text-white text-sm px-3 py-1 rounded-full">
                            <?php echo t("ອາຍຸລະກຳ", "Internal Medicine"); ?>
                        </span>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-blue-900 to-transparent text-white p-6">
                        <h3 class="text-xl font-bold"><?php echo t("ດຣ. ໂນ້ ໃຈດີ", "Dr. No Jaidee"); ?></h3>
                        <p><?php echo t("ຫົວໜ້າແຜນກອາຍຸລະກຳ", "Head of Internal Medicine"); ?></p>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400 mr-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span class="text-gray-600 text-sm">(87 <?php echo t("ຄຳເຫັນ", "reviews"); ?>)</span>
                    </div>

                    <p class="text-gray-700 mb-4">
                        <?php echo t("ຊ່ຽວຊານໃນການປິ່ນປົວໂລກເບົາຫວານ, ຄວາມດັນເລືອດສູງ, ແລະພະຍາດທາງເດີນຫາຍໃຈ. ມີປະສົບການ 15 ປີໃນການຮັກສາຄົນໄຂ້ຈາກຫຼາຍປະເທດ.", "Specializes in treating diabetes, hypertension, and respiratory diseases. Has 15 years of experience treating patients from many countries."); ?>
                    </p>

                    <div class="border-t pt-4">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-gray-600"><?php echo t("ຄຸນວຸດທິ", "Qualifications"); ?></span>
                            <span class="text-blue-600"><?php echo t("ປະລິນຍາເອກ MD", "MD, PhD"); ?></span>
                        </div>
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-gray-600"><?php echo t("ພາສາ", "Languages"); ?></span>
                            <span class="text-blue-600"><?php echo t("ລາວ, ໄທ, ອັງກິດ", "Lao, Thai, English"); ?></span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600"><?php echo t("ປະສົບການ", "Experience"); ?></span>
                            <span class="text-blue-600">15 <?php echo t("ປີ", "years"); ?></span>
                        </div>
                    </div>

                    <div class="mt-6 flex justify-between">
                        <a href="doctor-profile.php?id=1" class="text-blue-600 hover:text-blue-800 font-medium">
                            <?php echo t("ເບິ່ງໂປຣໄຟລ໌", "View Profile"); ?> <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                        <a href="appointments.php?doctor=1" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-medium transition duration-300">
                            <?php echo t("ນັດໝາຍ", "Book Appointment"); ?>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Doctor 2 -->
            <div class="team-member bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 transform hover:-translate-y-2" data-category="pediatrics">
                <div class="relative">
                    <img src="assets/images/doctor2.jpg" alt="<?php echo t("ພຍ. ໂນ້ ສຸດໃຈ", "Dr. No Soudjai"); ?>" class="w-full h-80 object-cover">
                    <div class="absolute top-4 right-4">
                        <span class="bg-green-600 text-white text-sm px-3 py-1 rounded-full">
                            <?php echo t("ກຸມາລະເວດຊະກຳ", "Pediatrics"); ?>
                        </span>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-blue-900 to-transparent text-white p-6">
                        <h3 class="text-xl font-bold"><?php echo t("ພຍ. ໂນ້ ສຸດໃຈ", "Dr. No Soudjai"); ?></h3>
                        <p><?php echo t("ແພດເດັກ", "Pediatrician"); ?></p>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400 mr-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="text-gray-600 text-sm">(64 <?php echo t("ຄຳເຫັນ", "reviews"); ?>)</span>
                    </div>

                    <p class="text-gray-700 mb-4">
                        <?php echo t("ຊ່ຽວຊານໃນການດູແລສຸຂະພາບເດັກຕັ້ງແຕ່ແອນ້ອຍຈົນເຖິງວັຍລຸ່ນ. ເນັ້ນການປິ່ນປົວແບບອົບອຸ່ນແລະເປັນມິດ. ມີປະສົບການ 10 ປີໃນການເຮັດວຽກກັບເດັກນ້ອຍ.", "Specializes in child healthcare from infancy to adolescence. Focuses on warm and friendly treatment. Has 10 years of experience working with children."); ?>
                    </p>

                    <div class="border-t pt-4">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-gray-600"><?php echo t("ຄຸນວຸດທິ", "Qualifications"); ?></span>
                            <span class="text-blue-600"><?php echo t("ປະລິນຍາຕີ MD", "MD"); ?></span>
                        </div>
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-gray-600"><?php echo t("ພາສາ", "Languages"); ?></span>
                            <span class="text-blue-600"><?php echo t("ລາວ, ໄທ, ອັງກິດ", "Lao, Thai, English"); ?></span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600"><?php echo t("ປະສົບການ", "Experience"); ?></span>
                            <span class="text-blue-600">10 <?php echo t("ປີ", "years"); ?></span>
                        </div>
                    </div>

                    <div class="mt-6 flex justify-between">
                        <a href="doctor-profile.php?id=2" class="text-blue-600 hover:text-blue-800 font-medium">
                            <?php echo t("ເບິ່ງໂປຣໄຟລ໌", "View Profile"); ?> <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                        <a href="appointments.php?doctor=2" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-medium transition duration-300">
                            <?php echo t("ນັດໝາຍ", "Book Appointment"); ?>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Doctor 3 -->
            <div class="team-member bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 transform hover:-translate-y-2" data-category="dermatology">
                <div class="relative">
                    <img src="assets/images/doctor3.jpg" alt="<?php echo t("ດຣ. ໂນ້ ແສນສຸກ", "Dr. No Saensuk"); ?>" class="w-full h-80 object-cover">
                    <div class="absolute top-4 right-4">
                        <span class="bg-purple-600 text-white text-sm px-3 py-1 rounded-full">
                            <?php echo t("ຜິວໜັງ", "Dermatology"); ?>
                        </span>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-blue-900 to-transparent text-white p-6">
                        <h3 class="text-xl font-bold"><?php echo t("ດຣ. ໂນ້ ແສນສຸກ", "Dr. No Saensuk"); ?></h3>
                        <p><?php echo t("ແພດຜິວໜັງ", "Dermatologist"); ?></p>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400 mr-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span class="text-gray-600 text-sm">(92 <?php echo t("ຄຳເຫັນ", "reviews"); ?>)</span>
                    </div>

                    <p class="text-gray-700 mb-4">
                        <?php echo t("ຊ່ຽວຊານໃນການປິ່ນປົວບັນຫາຜິວໜັງທຸກຊະນິດ, ລວມທັງສິວ, ລົມພິດ, ແລະການປິ່ນປົວຄວາມງາມດ້ວຍເລເຊີ. ຮຽນຈົບຈາກຕ່າງປະເທດແລະມີປະສົບການ 8 ປີ.", "Specializes in treating all types of skin conditions, including acne, allergies, and laser beauty treatments. Graduated from abroad with 8 years of experience."); ?>
                    </p>

                    <div class="border-t pt-4">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-gray-600"><?php echo t("ຄຸນວຸດທິ", "Qualifications"); ?></span>
                            <span class="text-blue-600"><?php echo t("ປະລິນຍາຕີ MD", "MD"); ?></span>
                        </div>
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-gray-600"><?php echo t("ພາສາ", "Languages"); ?></span>
                            <span class="text-blue-600"><?php echo t("ລາວ, ໄທ, ອັງກິດ, ຝຣັ່ງ", "Lao, Thai, English, French"); ?></span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600"><?php echo t("ປະສົບການ", "Experience"); ?></span>
                            <span class="text-blue-600">8 <?php echo t("ປີ", "years"); ?></span>
                        </div>
                    </div>

                    <div class="mt-6 flex justify-between">
                        <a href="doctor-profile.php?id=3" class="text-blue-600 hover:text-blue-800 font-medium">
                            <?php echo t("ເບິ່ງໂປຣໄຟລ໌", "View Profile"); ?> <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                        <a href="appointments.php?doctor=3" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-medium transition duration-300">
                            <?php echo t("ນັດໝາຍ", "Book Appointment"); ?>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Doctor 4 -->
            <div class="team-member bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 transform hover:-translate-y-2" data-category="surgery">
                <div class="relative">
                    <img src="assets/images/doctor4.jpg" alt="<?php echo t("ດຣ. ສົມຈິດ ຈິດຕະວົງ", "Dr. Somjit Jittavong"); ?>" class="w-full h-80 object-cover">
                    <div class="absolute top-4 right-4">
                        <span class="bg-red-600 text-white text-sm px-3 py-1 rounded-full">
                            <?php echo t("ຜ່າຕັດ", "Surgery"); ?>
                        </span>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-blue-900 to-transparent text-white p-6">
                        <h3 class="text-xl font-bold"><?php echo t("ດຣ. ສົມຈິດ ຈິດຕະວົງ", "Dr. Somjit Jittavong"); ?></h3>
                        <p><?php echo t("ແພດຜ່າຕັດ", "Surgeon"); ?></p>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400 mr-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span class="text-gray-600 text-sm">(78 <?php echo t("ຄຳເຫັນ", "reviews"); ?>)</span>
                    </div>

                    <p class="text-gray-700 mb-4">
                        <?php echo t("ຊ່ຽວຊານດ້ານການຜ່າຕັດທົ່ວໄປແລະການຜ່າຕັດທາງເດີນອາຫານ. ມີປະສົບການໃນການຜ່າຕັດແບບບໍ່ລຸກລານແລະການຜ່າຕັດແບບເປີດ. ຮຽນແລະຝຶກອົບຮົມໃນສະຫະລັດອາເມລິກາ.", "Specializes in general surgery and gastrointestinal surgery. Experienced in minimally invasive and open surgeries. Studied and trained in the United States."); ?>
                    </p>

                    <div class="border-t pt-4">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-gray-600"><?php echo t("ຄຸນວຸດທິ", "Qualifications"); ?></span>
                            <span class="text-blue-600"><?php echo t("ປະລິນຍາຕີ MD, FACS", "MD, FACS"); ?></span>
                        </div>
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-gray-600"><?php echo t("ພາສາ", "Languages"); ?></span>
                            <span class="text-blue-600"><?php echo t("ລາວ, ໄທ, ອັງກິດ", "Lao, Thai, English"); ?></span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600"><?php echo t("ປະສົບການ", "Experience"); ?></span>
                            <span class="text-blue-600">12 <?php echo t("ປີ", "years"); ?></span>
                        </div>
                    </div>

                    <div class="mt-6 flex justify-between">
                        <a href="doctor-profile.php?id=4" class="text-blue-600 hover:text-blue-800 font-medium">
                            <?php echo t("ເບິ່ງໂປຣໄຟລ໌", "View Profile"); ?> <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                        <a href="appointments.php?doctor=4" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-medium transition duration-300">
                            <?php echo t("ນັດໝາຍ", "Book Appointment"); ?>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Doctor 5 -->
            <div class="team-member bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 transform hover:-translate-y-2" data-category="internal-medicine">
                <div class="relative">
                    <img src="assets/images/doctor5.jpg" alt="<?php echo t("ພຍ. ສີສົມພອນ ສິດທິໄຊ", "Dr. Sisomspon Sittichai"); ?>" class="w-full h-80 object-cover">
                    <div class="absolute top-4 right-4">
                        <span class="bg-blue-600 text-white text-sm px-3 py-1 rounded-full">
                            <?php echo t("ອາຍຸລະກຳ", "Internal Medicine"); ?>
                        </span>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-blue-900 to-transparent text-white p-6">
                        <h3 class="text-xl font-bold"><?php echo t("ພຍ. ສີສົມພອນ ສິດທິໄຊ", "Dr. Sisomspon Sittichai"); ?></h3>
                        <p><?php echo t("ແພດອາຍຸລະກຳລະບົບຫົວໃຈ", "Cardiologist"); ?></p>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400 mr-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="text-gray-600 text-sm">(53 <?php echo t("ຄຳເຫັນ", "reviews"); ?>)</span>
                    </div>

                    <p class="text-gray-700 mb-4">
                        <?php echo t("ຊ່ຽວຊານດ້ານພະຍາດຫົວໃຈແລະຫຼອດເລືອດ. ໃຫ້ບໍລິການກວດແລະປິ່ນປົວໂລກຄວາມດັນເລືອດສູງ, ພະຍາດເສັ້ນເລືອດຫົວໃຈ, ແລະຄວາມຜິດປົກກະຕິຂອງຈັງຫວະຫົວໃຈ.", "Specializes in heart and vascular diseases. Provides diagnosis and treatment for hypertension, coronary artery disease, and heart rhythm abnormalities."); ?>
                    </p>

                    <div class="border-t pt-4">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-gray-600"><?php echo t("ຄຸນວຸດທິ", "Qualifications"); ?></span>
                            <span class="text-blue-600"><?php echo t("ປະລິນຍາຕີ MD", "MD"); ?></span>
                        </div>
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-gray-600"><?php echo t("ພາສາ", "Languages"); ?></span>
                            <span class="text-blue-600"><?php echo t("ລາວ, ໄທ, ອັງກິດ", "Lao, Thai, English"); ?></span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600"><?php echo t("ປະສົບການ", "Experience"); ?></span>
                            <span class="text-blue-600">9 <?php echo t("ປີ", "years"); ?></span>
                        </div>
                    </div>

                    <div class="mt-6 flex justify-between">
                        <a href="doctor-profile.php?id=5" class="text-blue-600 hover:text-blue-800 font-medium">
                            <?php echo t("ເບິ່ງໂປຣໄຟລ໌", "View Profile"); ?> <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                        <a href="appointments.php?doctor=5" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-medium transition duration-300">
                            <?php echo t("ນັດໝາຍ", "Book Appointment"); ?>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Doctor 6 -->
            <div class="team-member bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 transform hover:-translate-y-2" data-category="surgery">
                <div class="relative">
                    <img src="assets/images/doctor6.jpg" alt="<?php echo t("ດຣ. ວິໄລພອນ ສຸຂະເສີມ", "Dr. Vilaiphon Sukserm"); ?>" class="w-full h-80 object-cover">
                    <div class="absolute top-4 right-4">
                        <span class="bg-red-600 text-white text-sm px-3 py-1 rounded-full">
                            <?php echo t("ຜ່າຕັດ", "Surgery"); ?>
                        </span>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-blue-900 to-transparent text-white p-6">
                        <h3 class="text-xl font-bold"><?php echo t("ດຣ. ວິໄລພອນ ສຸຂະເສີມ", "Dr. Vilaiphon Sukserm"); ?></h3>
                        <p><?php echo t("ແພດຜ່າຕັດກະດູກ", "Orthopedic Surgeon"); ?></p>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400 mr-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span class="text-gray-600 text-sm">(81 <?php echo t("ຄຳເຫັນ", "reviews"); ?>)</span>
                    </div>

                    <p class="text-gray-700 mb-4">
                        <?php echo t("ຊ່ຽວຊານໃນການປິ່ນປົວອາການບາດເຈັບກະດູກແລະຂໍ້, ການຜ່າຕັດທົດແທນຂໍ້ເຂົ່າແລະຂໍ້ຕີນ, ແລະການຟື້ນຟູພາຍຫຼັງການຜ່າຕັດ. ຝຶກອົບຮົມຢູ່ປະເທດເຢຍລະມັນ.", "Specializes in treating bone and joint injuries, knee and ankle replacement surgeries, and post-operative rehabilitation. Trained in Germany."); ?>
                    </p>

                    <div class="border-t pt-4">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-gray-600"><?php echo t("ຄຸນວຸດທິ", "Qualifications"); ?></span>
                            <span class="text-blue-600"><?php echo t("ປະລິນຍາຕີ MD", "MD"); ?></span>
                        </div>
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-gray-600"><?php echo t("ພາສາ", "Languages"); ?></span>
                            <span class="text-blue-600"><?php echo t("ລາວ, ໄທ, ອັງກິດ, ເຢຍລະມັນ", "Lao, Thai, English, German"); ?></span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600"><?php echo t("ປະສົບການ", "Experience"); ?></span>
                            <span class="text-blue-600">11 <?php echo t("ປີ", "years"); ?></span>
                        </div>
                    </div>

                    <div class="mt-6 flex justify-between">
                        <a href="doctor-profile.php?id=6" class="text-blue-600 hover:text-blue-800 font-medium">
                            <?php echo t("ເບິ່ງໂປຣໄຟລ໌", "View Profile"); ?> <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                        <a href="appointments.php?doctor=6" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-medium transition duration-300">
                            <?php echo t("ນັດໝາຍ", "Book Appointment"); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- "No Results" Message (Hidden by default) -->
        <div id="no-results" class="hidden text-center py-12">
            <div class="text-5xl text-gray-300 mb-4"><i class="fas fa-user-md"></i></div>
            <h3 class="text-xl font-semibold text-gray-700 mb-2"><?php echo t("ບໍ່ພົບທ່ານໝໍທີ່ຕ້ອງການ", "No doctors found"); ?></h3>
            <p class="text-gray-600"><?php echo t("ກະລຸນາລອງຄົ້ນຫາຄືນໃໝ່ດ້ວຍຄຳສັບອື່ນ", "Please try a different search keyword"); ?></p>
        </div>
    </div>
</section>

<!-- Team Nurses/Staff -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-blue-800 mb-12"><?php echo t("ພະຍາບານແລະບຸກຄະລາກອນທີ່ມີຄຸນນະພາບຂອງພວກເຮົາ", "Our Qualified Nurses & Staff"); ?></h2>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <!-- Nurse/Staff 1 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300 text-center">
                <div class="relative">
                    <img src="assets/images/nurse1.jpg" alt="<?php echo t("ທ.ນ. ນາລີ ພົມມະວົງ", "Ms. Nalee Phommavong"); ?>" class="w-full h-60 object-cover">
                    <div class="absolute inset-0 bg-blue-900 bg-opacity-20 hover:bg-opacity-40 transition duration-300"></div>
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-blue-800 mb-1"><?php echo t("ທ.ນ. ນາລີ ພົມມະວົງ", "Ms. Nalee Phommavong"); ?></h3>
                    <p class="text-blue-600 text-sm mb-2"><?php echo t("ຫົວໜ້າພະຍາບານ", "Head Nurse"); ?></p>
                    <p class="text-gray-600 text-sm mb-3"><?php echo t("ປະສົບການ 12 ປີ", "12 years experience"); ?></p>
                    <div class="flex justify-center space-x-3">
                        <a href="#" class="text-blue-600 hover:text-blue-800 transition duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-blue-400 hover:text-blue-600 transition duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-pink-600 hover:text-pink-800 transition duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Nurse/Staff 2 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300 text-center">
                <div class="relative">
                    <img src="assets/images/nurse2.jpg" alt="<?php echo t("ທ. ສົມສະໄໝ ໄຊຍະວົງ", "Mr. Somsamai Xayavong"); ?>" class="w-full h-60 object-cover">
                    <div class="absolute inset-0 bg-blue-900 bg-opacity-20 hover:bg-opacity-40 transition duration-300"></div>
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-blue-800 mb-1"><?php echo t("ທ. ສົມສະໄໝ ໄຊຍະວົງ", "Mr. Somsamai Xayavong"); ?></h3>
                    <p class="text-blue-600 text-sm mb-2"><?php echo t("ພະຍາບານຫ້ອງສຸກເສີນ", "Emergency Room Nurse"); ?></p>
                    <p class="text-gray-600 text-sm mb-3"><?php echo t("ປະສົບການ 7 ປີ", "7 years experience"); ?></p>
                    <div class="flex justify-center space-x-3">
                        <a href="#" class="text-blue-600 hover:text-blue-800 transition duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-blue-400 hover:text-blue-600 transition duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-pink-600 hover:text-pink-800 transition duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Nurse/Staff 3 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300 text-center">
                <div class="relative">
                    <img src="assets/images/nurse3.jpg" alt="<?php echo t("ທ.ນ. ຈັນທະລີ ສີສະຫວັດ", "Ms. Chantalee Sisavath"); ?>" class="w-full h-60 object-cover">
                    <div class="absolute inset-0 bg-blue-900 bg-opacity-20 hover:bg-opacity-40 transition duration-300"></div>
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-blue-800 mb-1"><?php echo t("ທ.ນ. ຈັນທະລີ ສີສະຫວັດ", "Ms. Chantalee Sisavath"); ?></h3>
                    <p class="text-blue-600 text-sm mb-2"><?php echo t("ພະຍາບານແຜນກເດັກ", "Pediatric Nurse"); ?></p>
                    <p class="text-gray-600 text-sm mb-3"><?php echo t("ປະສົບການ 6 ປີ", "6 years experience"); ?></p>
                    <div class="flex justify-center space-x-3">
                        <a href="#" class="text-blue-600 hover:text-blue-800 transition duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-blue-400 hover:text-blue-600 transition duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-pink-600 hover:text-pink-800 transition duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Nurse/Staff 4 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300 text-center">
                <div class="relative">
                    <img src="assets/images/receptionist.jpg" alt="<?php echo t("ທ.ນ. ມະນີຈັນ ສິງຫາລາດ", "Ms. Maneechan Singhalad"); ?>" class="w-full h-60 object-cover">
                    <div class="absolute inset-0 bg-blue-900 bg-opacity-20 hover:bg-opacity-40 transition duration-300"></div>
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-blue-800 mb-1"><?php echo t("ທ.ນ. ມະນີຈັນ ສິງຫາລາດ", "Ms. Maneechan Singhalad"); ?></h3>
                    <p class="text-blue-600 text-sm mb-2"><?php echo t("ຜູ້ຈັດການຄລີນິກ", "Clinic Manager"); ?></p>
                    <p class="text-gray-600 text-sm mb-3"><?php echo t("ປະສົບການ 8 ປີ", "8 years experience"); ?></p>
                    <div class="flex justify-center space-x-3">
                        <a href="#" class="text-blue-600 hover:text-blue-800 transition duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-blue-400 hover:text-blue-600 transition duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-pink-600 hover:text-pink-800 transition duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Join Our Team Section -->
<section class="py-16 bg-blue-700 text-white">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-2/3 mb-8 md:mb-0 md:pr-12">
                <h2 class="text-3xl font-bold mb-6"><?php echo t("ຮ່ວມເປັນສ່ວນໜຶ່ງຂອງທີມຂອງພວກເຮົາ", "Join Our Growing Team"); ?></h2>
                <p class="text-xl text-blue-100 mb-6">
                    <?php echo t("ພວກເຮົາສະເໝີຊອກຫາບຸກຄະລາກອນທາງການແພດທີ່ມີຄວາມສາມາດເພື່ອເຂົ້າຮ່ວມກັບທີມຂອງພວກເຮົາ. ໃນຖານະເປັນໜຶ່ງໃນຄລີນິກທີ່ເຕີບໂຕໄວທີ່ສຸດໃນພາກພື້ນນີ້, ພວກເຮົາສະເໜີໂອກາດທີ່ຫຼາກຫຼາຍສຳລັບການເຕີບໂຕແລະພັດທະນາ.", "We are always looking for talented medical professionals to join our team. As one of the fastest-growing clinics in the region, we offer diverse opportunities for growth and development."); ?>
                </p>
                <ul class="mb-8">
                    <li class="flex items-center mb-3">
                        <i class="fas fa-check-circle text-blue-300 mr-3 text-xl"></i>
                        <span><?php echo t("ສະພາບແວດລ້ອມການເຮັດວຽກທີ່ທັນສະໄໝແລະມີຄວາມເປັນມືອາຊີບ", "Modern and professional work environment"); ?></span>
                    </li>
                    <li class="flex items-center mb-3">
                        <i class="fas fa-check-circle text-blue-300 mr-3 text-xl"></i>
                        <span><?php echo t("ໂອກາດໃນການພັດທະນາສາຍອາຊີບຢ່າງຕໍ່ເນື່ອງ", "Continuous career development opportunities"); ?></span>
                    </li>
                    <li class="flex items-center mb-3">
                        <i class="fas fa-check-circle text-blue-300 mr-3 text-xl"></i>
                        <span><?php echo t("ທີມງານທີ່ມີຄວາມຫຼາກຫຼາຍແລະເນັ້ນການຮ່ວມມື", "Diverse and collaborative team"); ?></span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check-circle text-blue-300 mr-3 text-xl"></i>
                        <span><?php echo t("ເງິນເດືອນແລະສະຫວັດດີການທີ່ແຂ່ງຂັນໄດ້", "Competitive salary and benefits"); ?></span>
                    </li>
                </ul>
                <a href="careers.php" class="inline-block bg-white text-blue-700 px-6 py-3 rounded-lg font-semibold hover:bg-blue-50 transition duration-300">
                    <?php echo t("ເບິ່ງຕຳແໜ່ງວ່າງ", "View Open Positions"); ?> <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
            <div class="md:w-1/3">
                <img src="assets/images/join-team.jpg" alt="<?php echo t("ຮ່ວມທີມ", "Join Team"); ?>" class="rounded-lg shadow-2xl">
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-blue-800 mb-12"><?php echo t("ຄຳຖາມທີ່ຖາມເລື້ອຍກ່ຽວກັບທີມຂອງພວກເຮົາ", "Frequently Asked Questions About Our Team"); ?></h2>

        <div class="max-w-3xl mx-auto">
            <!-- FAQ Item 1 -->
            <div class="mb-6 border-b border-gray-200 pb-6">
                <button class="faq-question w-full flex justify-between items-center text-left">
                    <h3 class="text-xl font-semibold text-blue-800"><?php echo t("ທ່ານໝໍຂອງທ່ານມີໃບຢັ້ງຢືນບໍ?", "Are your doctors certified?"); ?></h3>
                    <i class="fas fa-chevron-down text-blue-600 transition-transform duration-300"></i>
                </button>
                <div class="faq-answer mt-4 text-gray-700 hidden">
                    <p><?php echo t("ແພດທຸກຄົນຂອງພວກເຮົາມີໃບຢັ້ງຢືນຢ່າງເຕັມທີ່ແລະມີໃບອະນຸຍາດໃນຂົງເຂດຄວາມຊຳນານຂອງພວກເຂົາ. ພວກເຮົາຍັງຮັບປະກັນວ່າແພດທຸກຄົນມີການຝຶກອົບຮົມຢ່າງຕໍ່ເນື່ອງເພື່ອຮັກສາມາດຕະຖານສູງສຸດໃນການດູແລຄົນເຈັບ.", "All our doctors are fully certified and licensed in their areas of expertise. We also ensure that all doctors undergo continuous training to maintain the highest standards in patient care."); ?></p>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="mb-6 border-b border-gray-200 pb-6">
                <button class="faq-question w-full flex justify-between items-center text-left">
                    <h3 class="text-xl font-semibold text-blue-800"><?php echo t("ຂ້ອຍສາມາດຂໍໝໍເຈາະຈົງໄດ້ບໍ?", "Can I request a specific doctor?"); ?></h3>
                    <i class="fas fa-chevron-down text-blue-600 transition-transform duration-300"></i>
                </button>
                <div class="faq-answer mt-4 text-gray-700 hidden">
                    <p><?php echo t("ໄດ້, ທ່ານສາມາດນັດໝາຍກັບທ່ານໝໍໃດໜຶ່ງໃນທີມຂອງພວກເຮົາໂດຍສະເພາະ. ເຖິງຢ່າງໃດກໍຕາມ, ຕາຕະລາງເວລາມັກຈະເຕັມໄວ ສະນັ້ນພວກເຮົາແນະນຳໃຫ້ທ່ານຈອງລ່ວງໜ້າ. ຖ້າຫາກມີກໍລະນີສຸກເສີນ, ພວກເຮົາອາດຈະແນະນຳທ່ານໃຫ້ປຶກສາທ່ານໝໍທີ່ມີຄິວວ່າງ.", "Yes, you can schedule an appointment with a specific doctor on our team. However, schedules tend to fill up quickly, so we recommend booking in advance. If there is an emergency, we may recommend you consult with an available doctor."); ?></p>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="mb-6 border-b border-gray-200 pb-6">
                <button class="faq-question w-full flex justify-between items-center text-left">
                    <h3 class="text-xl font-semibold text-blue-800"><?php echo t("ທ່ານໝໍຂອງທ່ານເວົ້າພາສາຫຍັງແດ່?", "What languages do your doctors speak?"); ?></h3>
                    <i class="fas fa-chevron-down text-blue-600 transition-transform duration-300"></i>
                </button>
                <div class="faq-answer mt-4 text-gray-700 hidden">
                    <p><?php echo t("ແພດທຸກຄົນຂອງພວກເຮົາສາມາດເວົ້າພາສາລາວ, ໄທ, ແລະອັງກິດ. ນອກຈາກນີ້, ບາງຄົນມີຄວາມຊຳນານໃນພາສາຝຣັ່ງ, ເຢຍລະມັນ, ຫຼືຈີນ. ຖ້າທ່ານຕ້ອງການນັດໝາຍກັບແພດທີ່ເວົ້າພາສາສະເພາະ, ກະລຸນາແຈ້ງໃຫ້ພວກເຮົາຊາບໃນເວລາທີ່ທ່ານຈອງ.", "All our doctors speak Lao, Thai, and English. Additionally, some are proficient in French, German, or Chinese. If you need to schedule an appointment with a doctor who speaks a specific language, please let us know when you book."); ?></p>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="mb-6 border-b border-gray-200 pb-6">
                <button class="faq-question w-full flex justify-between items-center text-left">
                    <h3 class="text-xl font-semibold text-blue-800"><?php echo t("ພຽງແຕ່ທຽມໝໍເທົ່ານັ້ນທີ່ຢູ່ໃນທີມຂອງທ່ານບໍ?", "Are only doctors part of your team?"); ?></h3>
                    <i class="fas fa-chevron-down text-blue-600 transition-transform duration-300"></i>
                </button>
                <div class="faq-answer mt-4 text-gray-700 hidden">
                    <p><?php echo t("ບໍ່, ທີມຂອງພວກເຮົາປະກອບດ້ວຍຜູ້ຊ່ຽວຊານສຸຂະພາບຫຼາຍຢ່າງ ລວມທັງແພດ, ພະຍາບານທີ່ມີຄຸນວຸດທິສູງ, ຜູ້ຊ່ວຍການແພດ, ຜູ້ຊ່ຽວຊານດ້ານໂພຊະນາການ, ແລະນັກກາຍະພາບບຳບັດ. ພວກເຮົາເຊື່ອໃນການດູແລສຸຂະພາບແບບຮອບດ້ານທີ່ກວມເອົາທຸກດ້ານຂອງຄວາມເປັນຢູ່ທີ່ດີຂອງທ່ານ.", "No, our team includes various healthcare professionals including doctors, qualified nurses, medical assistants, nutritionists, and physiotherapists. We believe in comprehensive healthcare that covers all aspects of your well-being."); ?></p>
                </div>
            </div>

            <!-- FAQ Item 5 -->
            <div class="mb-6">
                <button class="faq-question w-full flex justify-between items-center text-left">
                    <h3 class="text-xl font-semibold text-blue-800"><?php echo t("ຂ້ອຍສາມາດອ່ານກ່ຽວກັບຄຳເຫັນຂອງຄົນໄຂ້ກ່ຽວກັບແພດຂອງທ່ານໄດ້ບໍ?", "Can I read patient reviews about your doctors?"); ?></h3>
                    <i class="fas fa-chevron-down text-blue-600 transition-transform duration-300"></i>
                </button>
                <div class="faq-answer mt-4 text-gray-700 hidden">
                    <p><?php echo t("ແນ່ນອນ! ພວກເຮົາມີຄຳເຫັນຂອງຄົນໄຂ້ທີ່ເຕັມໄປດ້ວຍຄວາມໂປ່ງໃສຢູ່ໃນໂປຣໄຟລ໌ຂອງແພດແຕ່ລະຄົນ. ພວກເຮົາເຊື່ອວ່າຄວາມຄິດເຫັນທີ່ຈິງໃຈເຫຼົ່ານີ້ສາມາດຊ່ວຍໃຫ້ທ່ານຕັດສິນໃຈກ່ຽວກັບການປິ່ນປົວຢ່າງຮອບຮູ້. ໝ້າ 'ໂປຣໄຟລ໌ທ່ານໝໍ' ຂອງພວກເຮົາຍັງປະກອບມີຂໍ້ມູນເພີ່ມເຕີມກ່ຽວກັບການສຶກສາ, ການຝຶກອົບຮົມ, ແລະຄວາມຊຳນານສະເພາະຂອງແພດແຕ່ລະຄົນ.", "Absolutely! We have transparent patient reviews on each doctor's profile. We believe these honest feedbacks can help you make informed decisions about your care. Our 'Doctor Profile' pages also include additional information about each doctor's education, training, and specific expertise."); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call-to-Action -->
<section class="py-16 bg-blue-600 text-white">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6"><?php echo t("ພ້ອມທີ່ຈະພົບກັບທີມແພດຜູ້ຊ່ຽວຊານຂອງພວກເຮົາແລ້ວບໍ?", "Ready to Meet Our Expert Medical Team?"); ?></h2>
        <p class="text-xl text-blue-100 mb-8 max-w-3xl mx-auto">
            <?php echo t("ນັດໝາຍກັບແພດຂອງພວກເຮົາມື້ນີ້ແລະເລີ່ມການເດີນທາງຂອງທ່ານໄປສູ່ສຸຂະພາບທີ່ດີກວ່າ. ທີມຂອງພວກເຮົາພ້ອມຊ່ວຍເຫຼືອທ່ານໃນທຸກຂັ້ນຕອນຂອງການເດີນທາງສູ່ສຸຂະພາບທີ່ດີຂອງທ່ານ.", "Schedule an appointment with our doctors today and begin your journey to better health. Our team is ready to help you every step of the way on your health journey."); ?>
        </p>
        <div class="flex flex-col md:flex-row justify-center space-y-4 md:space-y-0 md:space-x-6">
            <a href="appointments.php" class="bg-white text-blue-700 hover:bg-blue-50 px-8 py-4 rounded-lg font-bold text-lg transition duration-300">
                <?php echo t("ນັດໝາຍ", "Book an Appointment"); ?>
            </a>
            <a href="contact.php" class="border-2 border-white text-white hover:bg-blue-700 px-8 py-4 rounded-lg font-bold text-lg transition duration-300">
                <?php echo t("ຕິດຕໍ່ພວກເຮົາ", "Contact Us"); ?>
            </a>
        </div>
    </div>
</section>

<!-- JavaScript for Search & Filter Functionality -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Filter functionality
        const filterButtons = document.querySelectorAll('.filter-btn');
        const teamMembers = document.querySelectorAll('.team-member');
        const teamContainer = document.getElementById('team-members-container');
        const noResults = document.getElementById('no-results');

        // Search functionality
        const searchInput = document.getElementById('team-search');

        // Filter function
        function filterTeam() {
            const searchTerm = searchInput.value.toLowerCase();
            const activeFilter = document.querySelector('.filter-btn.active').getAttribute('data-filter');

            let visibleCount = 0;

            teamMembers.forEach(member => {
                const category = member.getAttribute('data-category');
                const doctorName = member.querySelector('h3').textContent.toLowerCase();
                const doctorSpecialty = member.querySelector('p').textContent.toLowerCase();
                const doctorDescription = member.querySelector('.text-gray-700').textContent.toLowerCase();

                const matchesFilter = activeFilter === 'all' || category === activeFilter;
                const matchesSearch = searchTerm === '' ||
                    doctorName.includes(searchTerm) ||
                    doctorSpecialty.includes(searchTerm) ||
                    doctorDescription.includes(searchTerm);

                if (matchesFilter && matchesSearch) {
                    member.style.display = 'block';
                    visibleCount++;
                } else {
                    member.style.display = 'none';
                }
            });

            // Show/hide no results message
            if (visibleCount === 0) {
                noResults.classList.remove('hidden');
            } else {
                noResults.classList.add('hidden');
            }
        }

        // Add click event to filter buttons
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));

                // Add active class to clicked button
                this.classList.add('active');

                // Update button styles
                filterButtons.forEach(btn => {
                    if (btn.classList.contains('active')) {
                        btn.classList.remove('bg-white', 'text-blue-600');
                        btn.classList.add('bg-blue-600', 'text-white');
                    } else {
                        btn.classList.remove('bg-blue-600', 'text-white');
                        btn.classList.add('bg-white', 'text-blue-600');
                    }
                });

                // Filter team members
                filterTeam();
            });
        });

        // Add input event to search box
        searchInput.addEventListener('input', filterTeam);

        // FAQ toggle functionality
        document.querySelectorAll('.faq-question').forEach(button => {
            button.addEventListener('click', () => {
                const answer = button.nextElementSibling;
                const icon = button.querySelector('i');

                answer.classList.toggle('hidden');
                icon.classList.toggle('transform');
                icon.classList.toggle('rotate-180');
            });
        });
    });
</script>

<?php
require_once 'includes/footer.php';
?>