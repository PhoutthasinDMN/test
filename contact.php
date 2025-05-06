<?php
require_once 'includes/config.php';
$pageTitle = t("ຕິດຕໍ່", "Contact");
require_once 'includes/header.php';

// ตรวจสอบว่ามีการส่งฟอร์มมาหรือไม่
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // รับค่าจากฟอร์ม
    $name = $db->escapeString($_POST['name']);
    $email = $db->escapeString($_POST['email']);
    $phone = $db->escapeString($_POST['phone']);
    $subject = $db->escapeString($_POST['subject']);
    $message = $db->escapeString($_POST['message']);
    
    // สร้างคำสั่ง SQL
    $sql = "INSERT INTO contacts (name, email, phone, subject, message, created_at) 
            VALUES ('$name', '$email', '$phone', '$subject', '$message', NOW())";
    
    // ทำการ query
    if ($db->query($sql)) {
        $success = "ข้อความของคุณถูกส่งเรียบร้อยแล้ว เราจะติดต่อกลับไปภายใน 24 ชั่วโมง";
    } else {
        $error = "เกิดข้อผิดพลาดในการส่งข้อความ: " . $db->getConnection()->error;
    }
}
?>

<!-- Contact Hero -->
<section class="bg-blue-700 text-white py-20">
    <div class="container mx-auto px-6 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6">ติดต่อคลินิกสุขภาพดี</h1>
        <p class="text-xl md:text-2xl">เรายินดีตอบคำถามและรับฟังข้อเสนอแนะจากคุณ</p>
    </div>
</section>

<!-- Contact Content -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <div class="flex flex-col lg:flex-row gap-12">
            <!-- Contact Form -->
            <div class="lg:w-1/2">
                <h2 class="text-3xl font-bold text-blue-800 mb-6">ส่งข้อความถึงเรา</h2>
                
                <?php if (isset($success)): ?>
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                        <?php echo $success; ?>
                    </div>
                <?php elseif (isset($error)): ?>
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                        <?php echo $error; ?>
                    </div>
                <?php endif; ?>
                
                <form action="contact.php" method="POST" class="bg-blue-50 p-8 rounded-lg shadow-md">
                    <div class="mb-6">
                        <label for="name" class="block text-gray-700 font-medium mb-2">ชื่อ-นามสกุล <span class="text-red-500">*</span></label>
                        <input type="text" id="name" name="name" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="email" class="block text-gray-700 font-medium mb-2">อีเมล <span class="text-red-500">*</span></label>
                            <input type="email" id="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        
                        <div>
                            <label for="phone" class="block text-gray-700 font-medium mb-2">เบอร์โทรศัพท์</label>
                            <input type="tel" id="phone" name="phone" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>
                    
                    <div class="mb-6">
                        <label for="subject" class="block text-gray-700 font-medium mb-2">หัวข้อ <span class="text-red-500">*</span></label>
                        <select id="subject" name="subject" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">-- เลือกหัวข้อ --</option>
                            <option value="สอบถามข้อมูลบริการ">สอบถามข้อมูลบริการ</option>
                            <option value="นัดหมายแพทย์">นัดหมายแพทย์</option>
                            <option value="ข้อเสนอแนะ">ข้อเสนอแนะ</option>
                            <option value="อื่นๆ">อื่นๆ</option>
                        </select>
                    </div>
                    
                    <div class="mb-6">
                        <label for="message" class="block text-gray-700 font-medium mb-2">ข้อความ <span class="text-red-500">*</span></label>
                        <textarea id="message" name="message" rows="5" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                    </div>
                    
                    <div class="text-center">
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-semibold text-lg transition duration-300">ส่งข้อความ</button>
                    </div>
                </form>
            </div>
            
            <!-- Contact Info -->
            <div class="lg:w-1/2">
                <h2 class="text-3xl font-bold text-blue-800 mb-6">ข้อมูลติดต่อ</h2>
                
                <div class="bg-blue-50 p-8 rounded-lg shadow-md mb-8">
                    <div class="flex items-start mb-6">
                        <div class="text-blue-600 text-2xl mr-4 mt-1">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-blue-800 mb-2">ที่อยู่คลินิก</h3>
                            <p class="text-gray-700">123 ถนนสุขุมวิท แขวงคลองเตย เขตคลองเตย กรุงเทพมหานคร 10110</p>
                            <a href="https://maps.google.com" target="_blank" class="inline-block mt-2 text-blue-600 hover:text-blue-800 font-medium">ดูแผนที่ <i class="fas fa-external-link-alt ml-1"></i></a>
                        </div>
                    </div>
                    
                    <div class="flex items-start mb-6">
                        <div class="text-blue-600 text-2xl mr-4 mt-1">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-blue-800 mb-2">โทรศัพท์</h3>
                            <p class="text-gray-700 mb-1"><?php echo SITE_PHONE; ?></p>
                            <p class="text-gray-700">สายด่วน: 081-234-5678</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start mb-6">
                        <div class="text-blue-600 text-2xl mr-4 mt-1">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-blue-800 mb-2">อีเมล</h3>
                            <p class="text-gray-700 mb-1"><?php echo SITE_EMAIL; ?></p>
                            <p class="text-gray-700">สำหรับนัดหมาย: appointment@clinic.com</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="text-blue-600 text-2xl mr-4 mt-1">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-blue-800 mb-2">เวลาทำการ</h3>
                            <p class="text-gray-700 mb-1">ทุกวัน 08:30 - 18:00 น.</p>
                            <p class="text-gray-700">ไม่มีวันหยุด</p>
                        </div>
                    </div>
                </div>
                
                <!-- Social Media -->
                <div class="bg-blue-50 p-8 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-blue-800 mb-4">ติดตามเราบนโซเชียลมีเดีย</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="bg-blue-600 text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-blue-700 transition duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="bg-blue-400 text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-blue-500 transition duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="bg-pink-600 text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-pink-700 transition duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="bg-blue-700 text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-blue-800 transition duration-300">
                            <i class="fab fa-line"></i>
                        </a>
                        <a href="#" class="bg-green-600 text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-green-700 transition duration-300">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                    
                    <h3 class="text-xl font-semibold text-blue-800 mt-8 mb-4">ช่องทางอื่นๆ</h3>
                    <div class="space-y-3">
                        <a href="#" class="flex items-center text-gray-700 hover:text-blue-600">
                            <i class="fab fa-line mr-2 text-lg"></i>
                            <span>Line Official: @clinichealth</span>
                        </a>
                        <a href="#" class="flex items-center text-gray-700 hover:text-blue-600">
                            <i class="fas fa-qrcode mr-2 text-lg"></i>
                            <span>สแกน QR Code เพื่อเพิ่มเพื่อน</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map -->
<section class="bg-gray-100 py-8">
    <div class="container mx-auto px-6">
        <div class="rounded-lg overflow-hidden shadow-lg">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.566487753845!2d100.5648223153705!3d13.7463906013642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29edcfb15ae2b%3A0x3a0e7d0b4f1c8a0b!2s123%20Sukhumvit%20Rd%2C%20Khlong%20Toei%2C%20Bangkok%2010110!5e0!3m2!1sen!2sth!4v1620000000000!5m2!1sen!2sth" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>

<!-- Emergency Contact -->
<section class="py-16 bg-red-50">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-red-800 mb-4">กรณีฉุกเฉิน</h2>
        <p class="text-xl text-gray-700 mb-6">หากท่านมีอาการเจ็บป่วยฉุกเฉิน โปรดติดต่อ</p>
        <div class="flex flex-col md:flex-row justify-center gap-6">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="text-red-600 text-4xl mb-4">
                    <i class="fas fa-ambulance"></i>
                </div>
                <h3 class="text-xl font-semibold text-red-800 mb-2">รถพยาบาล</h3>
                <p class="text-gray-700 mb-3">โทร 081-234-5678</p>
                <p class="text-sm text-gray-500">บริการตลอด 24 ชั่วโมง</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="text-red-600 text-4xl mb-4">
                    <i class="fas fa-user-md"></i>
                </div>
                <h3 class="text-xl font-semibold text-red-800 mb-2">แพทย์ประจำ</h3>
                <p class="text-gray-700 mb-3">โทร 091-234-5678</p>
                <p class="text-sm text-gray-500">บริการ 18:00 - 08:30 น.</p>
            </div>
        </div>
    </div>
</section>

<?php
require_once 'includes/footer.php';
?>