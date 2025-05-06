<?php
require_once 'includes/config.php';
$pageTitle = t("ກ່ຽວກັບເຮົາ", "About");
require_once 'includes/header.php';
?>

<!-- About Hero -->
<section class="bg-blue-700 text-white py-20">
    <div class="container mx-auto px-6 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6"><?= t("ກ່ຽວກັບຄີນິກວັນເມດ", "About Onemeds Clinic") ?></h1>
        <p class="text-xl md:text-2xl">ให้บริการทางการแพทย์ด้วยมาตรฐานสูงสุด ด้วยความใส่ใจและเป็นกันเอง</p>
    </div>
</section>

<!-- About Content -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-8 md:mb-0 md:pr-8">
                <img src="assets/images/clinic-building.jpg" alt="อาคารคลินิกสุขภาพดี" class="rounded-lg shadow-lg w-full">
            </div>
            <div class="md:w-1/2">
                <h2 class="text-3xl font-bold text-blue-800 mb-6">ประวัติคลินิก</h2>
                <p class="text-gray-700 mb-4">คลินิกสุขภาพดีก่อตั้งขึ้นในปี 2550 ด้วยความมุ่งมั่นที่จะให้บริการทางการแพทย์ที่มีคุณภาพในบรรยากาศที่เป็นกันเอง เรามีทีมแพทย์และพยาบาลผู้เชี่ยวชาญพร้อมให้บริการด้วยความเอาใจใส่</p>
                <p class="text-gray-700 mb-6">ตลอดระยะเวลากว่า 15 ปีที่ผ่านมา เราได้พัฒนาคุณภาพบริการอย่างต่อเนื่อง โดยนำอุปกรณ์ทางการแพทย์ที่ทันสมัยมาใช้ในการตรวจรักษา พร้อมทั้งให้ความสำคัญกับการสร้างความสัมพันธ์ที่ดีกับผู้ป่วยทุกท่าน</p>
                <div class="bg-blue-50 p-4 rounded-lg mb-6">
                    <h3 class="text-xl font-semibold text-blue-800 mb-2">ปรัชญาการทำงาน</h3>
                    <p class="text-gray-700">"สุขภาพดีเริ่มที่ใจ เราใส่ใจทุกขั้นตอน"</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision -->
<section class="py-16 bg-blue-50">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-blue-800 mb-12">พันธกิจและวิสัยทัศน์</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Mission -->
            <div class="bg-white p-8 rounded-lg shadow-md">
                <div class="text-blue-600 text-4xl mb-4">
                    <i class="fas fa-bullseye"></i>
                </div>
                <h3 class="text-xl font-semibold text-blue-800 mb-4">พันธกิจ</h3>
                <ul class="space-y-3 text-gray-700">
                    <li class="flex items-start">
                        <i class="fas fa-check text-blue-500 mt-1 mr-2"></i>
                        <span>ให้บริการทางการแพทย์ที่มีคุณภาพตามมาตรฐานวิชาชีพ</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-blue-500 mt-1 mr-2"></i>
                        <span>พัฒนาศักยภาพบุคลากรและระบบบริการอย่างต่อเนื่อง</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-blue-500 mt-1 mr-2"></i>
                        <span>สร้างความพึงพอใจสูงสุดให้กับผู้รับบริการ</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-blue-500 mt-1 mr-2"></i>
                        <span>เป็นส่วนหนึ่งในการสร้างเสริมสุขภาพของชุมชน</span>
                    </li>
                </ul>
            </div>
            
            <!-- Vision -->
            <div class="bg-white p-8 rounded-lg shadow-md">
                <div class="text-blue-600 text-4xl mb-4">
                    <i class="fas fa-eye"></i>
                </div>
                <h3 class="text-xl font-semibold text-blue-800 mb-4">วิสัยทัศน์</h3>
                <p class="text-gray-700 mb-4">เป็นคลินิกชั้นนำที่ให้บริการทางการแพทย์ครบวงจร ด้วยมาตรฐานสูงสุดและความเอาใจใส่แบบองค์รวม</p>
                <h4 class="font-semibold text-blue-800 mb-2">ค่านิยมองค์กร</h4>
                <div class="flex flex-wrap gap-2">
                    <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">S - Service (บริการดี)</span>
                    <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">H - Honesty (ซื่อสัตย์)</span>
                    <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">E - Empathy (เข้าใจผู้ป่วย)</span>
                    <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">P - Professional (มืออาชีพ)</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-blue-800 mb-12">ทีมงานของเรา</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Doctor 1 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                <img src="assets/images/doctor1.jpg" alt="นพ. สุทธิพงษ์ ใจดี" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-blue-800 mb-2">นพ. สุทธิพงษ์ ใจดี</h3>
                    <p class="text-blue-600 mb-3">อายุรแพทย์</p>
                    <p class="text-gray-600">ปริญญาแพทยศาสตร์บัณฑิต มหาวิทยาลัยมหิดล, ประกาศนียบัตรบัณฑิตชั้นสูงอายุรศาสตร์</p>
                    <div class="mt-4 flex space-x-3">
                        <a href="#" class="text-blue-500 hover:text-blue-700"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-blue-500 hover:text-blue-700"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="text-blue-500 hover:text-blue-700"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Doctor 2 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                <img src="assets/images/doctor2.jpg" alt="พญ. สุพัตรา สุขใจ" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-blue-800 mb-2">พญ. สุพัตรา สุขใจ</h3>
                    <p class="text-blue-600 mb-3">กุมารแพทย์</p>
                    <p class="text-gray-600">ปริญญาแพทยศาสตร์บัณฑิต จุฬาลงกรณ์มหาวิทยาลัย, ประกาศนียบัตรบัณฑิตชั้นสูงกุมารเวชศาสตร์</p>
                    <div class="mt-4 flex space-x-3">
                        <a href="#" class="text-blue-500 hover:text-blue-700"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-blue-500 hover:text-blue-700"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Nurse -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                <img src="assets/images/doctor3.jpg" alt="พยาบาลวิชชุดา รักงาน" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-blue-800 mb-2">พยาบาลวิชชุดา รักงาน</h3>
                    <p class="text-blue-600 mb-3">หัวหน้าพยาบาล</p>
                    <p class="text-gray-600">ปริญญาพยาบาลศาสตร์บัณฑิต มหาวิทยาลัยเชียงใหม่, ประสบการณ์ทำงาน 10 ปี</p>
                    <div class="mt-4 flex space-x-3">
                        <a href="#" class="text-blue-500 hover:text-blue-700"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-blue-500 hover:text-blue-700"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Clinic Facilities -->
<section class="py-16 bg-blue-50">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-blue-800 mb-12">สิ่งอำนวยความสะดวก</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Facility 1 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md">
                <img src="assets/images/waiting-area.jpg" alt="ห้องรับรอง" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-blue-800 mb-2">ห้องรับรองผู้ป่วย</h3>
                    <p class="text-gray-600">ห้องรับรองที่สะดวกสบาย พร้อมเครื่องดื่มและอินเทอร์เน็ตฟรี</p>
                </div>
            </div>
            
            <!-- Facility 2 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md">
                <img src="assets/images/lab.jpg" alt="ห้องแล็บ" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-blue-800 mb-2">ห้องปฏิบัติการ</h3>
                    <p class="text-gray-600">ห้องแล็บมาตรฐานพร้อมอุปกรณ์ทันสมัยสำหรับการตรวจวินิจฉัย</p>
                </div>
            </div>
            
            <!-- Facility 3 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md">
                <img src="assets/images/parking.jpg" alt="ที่จอดรถ" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-blue-800 mb-2">ที่จอดรถกว้างขวาง</h3>
                    <p class="text-gray-600">ที่จอดรถฟรีสำหรับผู้มารับบริการ พร้อมพื้นที่สำหรับผู้พิการ</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once 'includes/footer.php';
?>