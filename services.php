<?php
require_once 'includes/config.php';
$pageTitle = t("ບໍລິການ", "Services");
require_once 'includes/header.php';
?>

<!-- Services Hero -->
<section class="bg-blue-700 text-white py-20">
    <div class="container mx-auto px-6 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6"><?php echo t('ບໍລິການຂອງຄລີນິກ', 'Our Clinic Services'); ?></h1>
        <p class="text-xl md:text-2xl"><?php echo t('ພວກເຮົາມີບໍລິການທາງການແພດທີ່ຫຼາກຫຼາຍເພື່ອຕອບສະໜອງຄວາມຕ້ອງການຂອງທ່ານ', 'We have a variety of medical services to meet your needs'); ?></p>
    </div>
</section>

<!-- Services List -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Service 1 -->
            <div class="bg-blue-50 rounded-lg p-6 shadow-md hover:shadow-lg transition duration-300">
                <div class="text-blue-600 text-4xl mb-4">
                    <i class="fas fa-stethoscope"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3 text-blue-800"><?php echo t('ກວດສຸຂະພາບ', 'Health Checkup'); ?></h3>
                <p class="text-gray-600 mb-4"><?php echo t('ກວດສຸຂະພາບປະຈຳປີ, ກວດເລືອດ, ເອັກສເລ ແລະ ກວດຄັດກອງພະຍາດຕ່າງໆ ດ້ວຍອຸປະກອນທັນສະໄໝ', 'Annual checkup, blood tests, X-rays, and disease screening with modern equipment'); ?></p>
                <ul class="space-y-2 text-gray-700 mb-4">
                    <li class="flex items-start">
                        <i class="fas fa-check text-blue-500 mt-1 mr-2"></i>
                        <span><?php echo t('ກວດສຸຂະພາບທົ່ວໄປ', 'General health checkup'); ?></span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-blue-500 mt-1 mr-2"></i>
                        <span><?php echo t('ກວດເລືອດແລະນ້ຳຍ່ຽວ', 'Blood and urine tests'); ?></span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-blue-500 mt-1 mr-2"></i>
                        <span><?php echo t('ເອັກສເລປອດ', 'Lung X-ray'); ?></span>
                    </li>
                </ul>
                <a href="appointments.php" class="inline-block text-blue-600 hover:text-blue-800 font-medium"><?php echo t('ນັດກວດສຸຂະພາບ', 'Book health checkup'); ?> <i class="fas fa-arrow-right ml-1"></i></a>
            </div>
            
            <!-- Service 2 -->
            <div class="bg-blue-50 rounded-lg p-6 shadow-md hover:shadow-lg transition duration-300">
                <div class="text-blue-600 text-4xl mb-4">
                    <i class="fas fa-user-md"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3 text-blue-800"><?php echo t('ອາຍຸລະກຳ', 'Internal Medicine'); ?></h3>
                <p class="text-gray-600 mb-4"><?php echo t('ໃຫ້ຄຳປຶກສາແລະຮັກສາພະຍາດທົ່ວໄປເຊັ່ນ: ໄຂ້ຫວັດ, ຄວາມດັນເລືອດສູງ, ເບົາຫວານ, ແລະພະຍາດອື່ນໆ', 'Consultation and treatment of common diseases such as cold, high blood pressure, diabetes, and others'); ?></p>
                <ul class="space-y-2 text-gray-700 mb-4">
                    <li class="flex items-start">
                        <i class="fas fa-check text-blue-500 mt-1 mr-2"></i>
                        <span><?php echo t('ຮັກສາພະຍາດທົ່ວໄປ', 'General disease treatment'); ?></span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-blue-500 mt-1 mr-2"></i>
                        <span><?php echo t('ດູແລພະຍາດຊຳເຮື້ອ', 'Chronic disease care'); ?></span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-blue-500 mt-1 mr-2"></i>
                        <span><?php echo t('ໃຫ້ຄຳປຶກສາສຸຂະພາບ', 'Health consultation'); ?></span>
                    </li>
                </ul>
                <a href="appointments.php" class="inline-block text-blue-600 hover:text-blue-800 font-medium"><?php echo t('ນັດພົບແພດອາຍຸລະກຳ', 'Book internal medicine doctor'); ?> <i class="fas fa-arrow-right ml-1"></i></a>
            </div>
            
            <!-- เพิ่มบริการอื่นๆ ด้วยการแปลภาษาเช่นกัน -->
            <!-- ... -->
        </div>
    </div>
</section>

<!-- รายการบริการอื่นๆ ควรแก้ไขให้ใช้ฟังก์ชัน t() ให้ครบทุกที่ -->
<!-- ... -->

<!-- Pricing -->
<section class="py-16 bg-blue-50">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-blue-800 mb-12"><?php echo t('ລາຄາບໍລິການ', 'Service Pricing'); ?></h2>
        <!-- ... -->
    </div>
</section>

<!-- FAQ -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6 max-w-4xl">
        <h2 class="text-3xl font-bold text-center text-blue-800 mb-12"><?php echo t('ຄຳຖາມທີ່ພົບເລື້ອຍ', 'Frequently Asked Questions'); ?></h2>
        <!-- ... -->
    </div>
</section>

<?php
require_once 'includes/footer.php';
?>