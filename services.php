<?php
require_once 'includes/config.php';
$pageTitle = t("ບໍລິການ", "Services");
require_once 'includes/header.php';
?>

<!-- Services Hero -->
<section class="bg-blue-700 text-white py-20">
    <div class="container mx-auto px-6 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6">บริการของคลินิกสุขภาพดี</h1>
        <p class="text-xl md:text-2xl">เรามีบริการทางการแพทย์ที่หลากหลายเพื่อตอบสนองความต้องการของคุณ</p>
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
                <h3 class="text-xl font-semibold mb-3 text-blue-800">ตรวจสุขภาพ</h3>
                <p class="text-gray-600 mb-4">ตรวจสุขภาพประจำปี ตรวจเลือด เอกซเรย์ และตรวจคัดกรองโรคต่างๆ ด้วยอุปกรณ์ทันสมัย</p>
                <ul class="space-y-2 text-gray-700 mb-4">
                    <li class="flex items-start">
                        <i class="fas fa-check text-blue-500 mt-1 mr-2"></i>
                        <span>ตรวจสุขภาพทั่วไป</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-blue-500 mt-1 mr-2"></i>
                        <span>ตรวจเลือดและปัสสาวะ</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-blue-500 mt-1 mr-2"></i>
                        <span>เอกซเรย์ปอด</span>
                    </li>
                </ul>
                <a href="appointments.php" class="inline-block text-blue-600 hover:text-blue-800 font-medium">นัดตรวจสุขภาพ <i class="fas fa-arrow-right ml-1"></i></a>
            </div>
            
            <!-- Service 2 -->
            <div class="bg-blue-50 rounded-lg p-6 shadow-md hover:shadow-lg transition duration-300">
                <div class="text-blue-600 text-4xl mb-4">
                    <i class="fas fa-user-md"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3 text-blue-800">อายุรกรรม</h3>
                <p class="text-gray-600 mb-4">ให้คำปรึกษาและรักษาโรคทั่วไป เช่น ไข้หวัด ความดันโลหิตสูง เบาหวาน และโรคอื่นๆ</p>
                <ul class="space-y-2 text-gray-700 mb-4">
                    <li class="flex items-start">
                        <i class="fas fa-check text-blue-500 mt-1 mr-2"></i>
                        <span>รักษาโรคทั่วไป</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-blue-500 mt-1 mr-2"></i>
                        <span>ดูแลโรคเรื้อรัง</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-blue-500 mt-1 mr-2"></i>
                        <span>ให้คำปรึกษาสุขภาพ</span>
                    </li>
                </ul>
                <a href="appointments.php" class="inline-block text-blue-600 hover:text-blue-800 font-medium">นัดพบอายุรแพทย์ <i class="fas fa-arrow-right ml-1"></i></a>
            </div>
            
            <!-- Service 3 -->
            <div class="bg-blue-50 rounded-lg p-6 shadow-md hover:shadow-lg transition duration-300">
                <div class="text-blue-600 text-4xl mb-4">
                    <i class="fas fa-baby"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3 text-blue-800">กุมารเวชกรรม</h3>
                <p class="text-gray-600 mb-4">ดูแลสุขภาพเด็กตั้งแต่แรกเกิดจนถึงวัยรุ่น วัคซีน การเจริญเติบโต และพัฒนาการ</p>
                <ul class="space-y-2 text-gray-700 mb-4">
                    <li class="flex items-start">
                        <i class="fas fa-check text-blue-500 mt-1 mr-2"></i>
                        <span>ตรวจสุขภาพเด็ก</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-blue-500 mt-1 mr-2"></i>
                        <span>ให้วัคซีนครบถ้วน</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-blue-500 mt-1 mr-2"></i>
                        <span>ประเมินพัฒนาการ</span>
                    </li>
                </ul>
                <a href="appointments.php" class="inline-block text-blue-600 hover:text-blue-800 font-medium">นัดพบกุมารแพทย์ <i class="fas fa-arrow-right ml-1"></i></a>
            </div>
            
            <!-- Service 4 -->
            <div class="bg-blue-50 rounded-lg p-6 shadow-md hover:shadow-lg transition duration-300">
                <div class="text-blue-600 text-4xl mb-4">
                    <i class="fas fa-procedures"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3 text-blue-800">ศัลยกรรม</h3>
                <p class="text-gray-600 mb-4">ผ่าตัดเล็กและรักษาบาดแผลโดยศัลยแพทย์ผู้เชี่ยวชาญ</p>
                <ul class="space-y-2 text-gray-700 mb-4">
                    <li class="flex items-start">
                        <i class="fas fa-check text-blue-500 mt-1 mr-2"></i>
                        <span>ผ่าตัดเล็ก</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-blue-500 mt-1 mr-2"></i>
                        <span>ตัดไฝ ตัดติ่งเนื้อ</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-blue-500 mt-1 mr-2"></i>
                        <span>รักษาบาดแผล</span>
                    </li>
                </ul>
                <a href="appointments.php" class="inline-block text-blue-600 hover:text-blue-800 font-medium">นัดพบศัลยแพทย์ <i class="fas fa-arrow-right ml-1"></i></a>
            </div>
            
            <!-- Service 5 -->
            <div class="bg-blue-50 rounded-lg p-6 shadow-md hover:shadow-lg transition duration-300">
                <div class="text-blue-600 text-4xl mb-4">
                    <i class="fas fa-heartbeat"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3 text-blue-800">ตรวจหัวใจ</h3>
                <p class="text-gray-600 mb-4">ตรวจคลื่นไฟฟ้าหัวใจ (EKG) และประเมินความเสี่ยงโรคหัวใจ</p>
                <ul class="space-y-2 text-gray-700 mb-4">
                    <li class="flex items-start">
                        <i class="fas fa-check text-blue-500 mt-1 mr-2"></i>
                        <span>ตรวจคลื่นไฟฟ้าหัวใจ</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-blue-500 mt-1 mr-2"></i>
                        <span>วัดความดันโลหิต 24 ชม.</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-blue-500 mt-1 mr-2"></i>
                        <span>ประเมินความเสี่ยง</span>
                    </li>
                </ul>
                <a href="appointments.php" class="inline-block text-blue-600 hover:text-blue-800 font-medium">นัดตรวจหัวใจ <i class="fas fa-arrow-right ml-1"></i></a>
            </div>
            
            <!-- Service 6 -->
            <div class="bg-blue-50 rounded-lg p-6 shadow-md hover:shadow-lg transition duration-300">
                <div class="text-blue-600 text-4xl mb-4">
                    <i class="fas fa-pills"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3 text-blue-800">เภสัชกรรม</h3>
                <p class="text-gray-600 mb-4">ให้คำแนะนำเกี่ยวกับยาและจัดเตรียมยาตามใบสั่งแพทย์</p>
                <ul class="space-y-2 text-gray-700 mb-4">
                    <li class="flex items-start">
                        <i class="fas fa-check text-blue-500 mt-1 mr-2"></i>
                        <span>จ่ายยาตามใบสั่งแพทย์</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-blue-500 mt-1 mr-2"></i>
                        <span>ให้คำแนะนำการใช้ยา</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-blue-500 mt-1 mr-2"></i>
                        <span>ตรวจสอบปฏิกิริยาระหว่างยา</span>
                    </li>
                </ul>
                <a href="contact.php" class="inline-block text-blue-600 hover:text-blue-800 font-medium">สอบถามข้อมูลยา <i class="fas fa-arrow-right ml-1"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- Pricing -->
<section class="py-16 bg-blue-50">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-blue-800 mb-12">ราคาบริการ</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded-lg overflow-hidden">
                <thead class="bg-blue-800 text-white">
                    <tr>
                        <th class="py-3 px-4 text-left">บริการ</th>
                        <th class="py-3 px-4 text-left">รายละเอียด</th>
                        <th class="py-3 px-4 text-right">ราคา (บาท)</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr>
                        <td class="py-3 px-4 font-medium">ตรวจสุขภาพทั่วไป</td>
                        <td class="py-3 px-4">ตรวจร่างกายพื้นฐาน วัดความดัน ชั่งน้ำหนัก วัดส่วนสูง</td>
                        <td class="py-3 px-4 text-right">300</td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4 font-medium">ตรวจเลือดพื้นฐาน</td>
                        <td class="py-3 px-4">CBC, Glucose, Cholesterol, Uric Acid</td>
                        <td class="py-3 px-4 text-right">800</td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4 font-medium">ตรวจคลื่นไฟฟ้าหัวใจ</td>
                        <td class="py-3 px-4">Electrocardiogram (EKG)</td>
                        <td class="py-3 px-4 text-right">500</td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4 font-medium">พบอายุรแพทย์</td>
                        <td class="py-3 px-4">ปรึกษาและตรวจรักษาโรคทั่วไป</td>
                        <td class="py-3 px-4 text-right">500</td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4 font-medium">พบกุมารแพทย์</td>
                        <td class="py-3 px-4">ตรวจสุขภาพเด็กและให้วัคซีน</td>
                        <td class="py-3 px-4 text-right">600</td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4 font-medium">ผ่าตัดเล็ก</td>
                        <td class="py-3 px-4">ตัดไฝ ตัดติ่งเนื้อ</td>
                        <td class="py-3 px-4 text-right">1,000 - 3,000</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="mt-6 text-center text-gray-600">
            * ราคาอาจมีการเปลี่ยนแปลง โปรดสอบถามเจ้าหน้าที่สำหรับราคาที่แน่นอน
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6 max-w-4xl">
        <h2 class="text-3xl font-bold text-center text-blue-800 mb-12">คำถามที่พบบ่อย</h2>
        <div class="space-y-4">
            <!-- FAQ 1 -->
            <div class="border border-gray-200 rounded-lg overflow-hidden">
                <button class="faq-question w-full flex justify-between items-center p-4 bg-blue-50 hover:bg-blue-100 transition duration-300">
                    <span class="font-medium text-blue-800">คลินิกเปิดให้บริการวันและเวลาใดบ้าง?</span>
                    <i class="fas fa-chevron-down text-blue-600 transition-transform duration-300"></i>
                </button>
                <div class="faq-answer p-4 bg-white hidden">
                    <p class="text-gray-700">คลินิกของเราเปิดให้บริการทุกวัน (ไม่มีวันหยุด) เวลา 08:30 - 18:00 น. สำหรับบริการฉุกเฉินหลังเวลาปกติ โปรดติดต่อเบอร์ <?php echo SITE_PHONE; ?> เพื่อสอบถามข้อมูลเพิ่มเติม</p>
                </div>
            </div>
            
            <!-- FAQ 2 -->
            <div class="border border-gray-200 rounded-lg overflow-hidden">
                <button class="faq-question w-full flex justify-between items-center p-4 bg-blue-50 hover:bg-blue-100 transition duration-300">
                    <span class="font-medium text-blue-800">ต้องเตรียมตัวอย่างไรก่อนตรวจสุขภาพ?</span>
                    <i class="fas fa-chevron-down text-blue-600 transition-transform duration-300"></i>
                </button>
                <div class="faq-answer p-4 bg-white hidden">
                    <p class="text-gray-700">หากท่านมีนัดตรวจเลือด ควรงดอาหารและน้ำ (ยกเว้นน้ำเปล่า) อย่างน้อย 8-10 ชั่วโมงก่อนการตรวจ ควรสวมเสื้อผ้าที่สะดวกต่อการตรวจร่างกาย และนำยาที่ทานประจำมาด้วย (ถ้ามี)</p>
                </div>
            </div>
            
            <!-- FAQ 3 -->
            <div class="border border-gray-200 rounded-lg overflow-hidden">
                <button class="faq-question w-full flex justify-between items-center p-4 bg-blue-50 hover:bg-blue-100 transition duration-300">
                    <span class="font-medium text-blue-800">สามารถใช้สิทธิประกันสุขภาพได้หรือไม่?</span>
                    <i class="fas fa-chevron-down text-blue-600 transition-transform duration-300"></i>
                </button>
                <div class="faq-answer p-4 bg-white hidden">
                    <p class="text-gray-700">คลินิกของเรารับบัตรประกันสุขภาพจากหลายบริษัท โปรดตรวจสอบกับบริษัทประกันของท่านหรือติดต่อเจ้าหน้าที่ของเราเพื่อสอบถามรายละเอียดเพิ่มเติม</p>
                </div>
            </div>
            
            <!-- FAQ 4 -->
            <div class="border border-gray-200 rounded-lg overflow-hidden">
                <button class="faq-question w-full flex justify-between items-center p-4 bg-blue-50 hover:bg-blue-100 transition duration-300">
                    <span class="font-medium text-blue-800">ต้องนัดล่วงหน้าก่อนมาพบแพทย์หรือไม่?</span>
                    <i class="fas fa-chevron-down text-blue-600 transition-transform duration-300"></i>
                </button>
                <div class="faq-answer p-4 bg-white hidden">
                    <p class="text-gray-700">การนัดล่วงหน้าจะช่วยลดเวลารอคอยและทำให้ท่านได้รับบริการที่สะดวกยิ่งขึ้น อย่างไรก็ตาม เรายินดีรับผู้ป่วย Walk-in ทุกท่าน โดยจะให้บริการตามลำดับการมา</p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// FAQ Toggle
document.querySelectorAll('.faq-question').forEach(button => {
    button.addEventListener('click', () => {
        const answer = button.nextElementSibling;
        const icon = button.querySelector('i');
        
        answer.classList.toggle('hidden');
        icon.classList.toggle('transform');
        icon.classList.toggle('rotate-180');
    });
});
</script>

<?php
require_once 'includes/footer.php';
?>