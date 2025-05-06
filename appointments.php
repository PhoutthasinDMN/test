<?php
require_once 'includes/db.php';
$pageTitle = "จองนัดหมาย";
require_once 'includes/header.php';

// ตรวจสอบว่ามีการส่งฟอร์มมาหรือไม่
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // รับค่าจากฟอร์ม
    $name = $db->escapeString($_POST['name']);
    $phone = $db->escapeString($_POST['phone']);
    $email = $db->escapeString($_POST['email']);
    $service = $db->escapeString($_POST['service']);
    $doctor = $db->escapeString($_POST['doctor']);
    $date = $db->escapeString($_POST['date']);
    $time = $db->escapeString($_POST['time']);
    $message = $db->escapeString($_POST['message']);
    
    // สร้างคำสั่ง SQL
    $sql = "INSERT INTO appointments (name, phone, email, service, doctor, date, time, message, status, created_at) 
            VALUES ('$name', '$phone', '$email', '$service', '$doctor', '$date', '$time', '$message', 'pending', NOW())";
    
    // ทำการ query
    if ($db->query($sql)) {
        $success = "นัดหมายของคุณถูกบันทึกเรียบร้อยแล้ว เราจะติดต่อกลับไปยืนยันภายใน 24 ชั่วโมง";
    } else {
        $error = "เกิดข้อผิดพลาดในการบันทึกข้อมูล: " . $db->getConnection()->error;
    }
}
?>

<!-- Appointment Form -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-3xl font-bold text-center text-blue-800 mb-2">นัดหมายแพทย์</h2>
            <p class="text-center text-gray-600 mb-12">กรุณากรอกข้อมูลด้านล่างเพื่อนัดหมายแพทย์ของเรา</p>
            
            <?php if (isset($success)): ?>
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                    <?php echo $success; ?>
                </div>
            <?php elseif (isset($error)): ?>
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>
            
            <form action="appointments.php" method="POST" class="bg-blue-50 p-8 rounded-lg shadow-md">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Name -->
                    <div>
                        <label for="name" class="block text-gray-700 font-medium mb-2">ชื่อ-นามสกุล <span class="text-red-500">*</span></label>
                        <input type="text" id="name" name="name" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    
                    <!-- Phone -->
                    <div>
                        <label for="phone" class="block text-gray-700 font-medium mb-2">เบอร์โทรศัพท์ <span class="text-red-500">*</span></label>
                        <input type="tel" id="phone" name="phone" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    
                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-gray-700 font-medium mb-2">อีเมล</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    
                    <!-- Service -->
                    <div>
                        <label for="service" class="block text-gray-700 font-medium mb-2">บริการที่ต้องการ <span class="text-red-500">*</span></label>
                        <select id="service" name="service" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">-- เลือกบริการ --</option>
                            <option value="ตรวจสุขภาพ">ตรวจสุขภาพ</option>
                            <option value="อายุรกรรม">อายุรกรรม</option>
                            <option value="กุมารเวชกรรม">กุมารเวชกรรม</option>
                            <option value="ศัลยกรรม">ศัลยกรรม</option>
                            <option value="อื่นๆ">อื่นๆ</option>
                        </select>
                    </div>
                    
                    <!-- Doctor -->
                    <div>
                        <label for="doctor" class="block text-gray-700 font-medium mb-2">แพทย์ที่ต้องการพบ (ถ้ามี)</label>
                        <select id="doctor" name="doctor" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">-- ไม่ระบุ --</option>
                            <option value="นพ. สุทธิพงษ์ ใจดี">นพ. สุทธิพงษ์ ใจดี</option>
                            <option value="พญ. สุพัตรา สุขใจ">พญ. สุพัตรา สุขใจ</option>
                            <option value="นพ. วีรพล แสนสุข">นพ. วีรพล แสนสุข</option>
                        </select>
                    </div>
                    
                    <!-- Date -->
                    <div>
                        <label for="date" class="block text-gray-700 font-medium mb-2">วันที่นัดหมาย <span class="text-red-500">*</span></label>
                        <input type="date" id="date" name="date" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    
                    <!-- Time -->
                    <div>
                        <label for="time" class="block text-gray-700 font-medium mb-2">เวลานัดหมาย <span class="text-red-500">*</span></label>
                        <select id="time" name="time" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">-- เลือกเวลา --</option>
                            <option value="09:00 - 10:00">09:00 - 10:00</option>
                            <option value="10:00 - 11:00">10:00 - 11:00</option>
                            <option value="11:00 - 12:00">11:00 - 12:00</option>
                            <option value="13:00 - 14:00">13:00 - 14:00</option>
                            <option value="14:00 - 15:00">14:00 - 15:00</option>
                            <option value="15:00 - 16:00">15:00 - 16:00</option>
                        </select>
                    </div>
                </div>
                
                <!-- Message -->
                <div class="mt-6">
                    <label for="message" class="block text-gray-700 font-medium mb-2">รายละเอียดเพิ่มเติม</label>
                    <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>
                
                <!-- Submit Button -->
                <div class="mt-8 text-center">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-semibold text-lg transition duration-300">ส่งคำนัดหมาย</button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Contact Info -->
<section class="py-16 bg-blue-50">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white p-8 rounded-lg shadow-md">
                <h3 class="text-2xl font-bold text-blue-800 mb-6">ข้อมูลติดต่อ</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <h4 class="text-lg font-semibold text-blue-700 mb-4">ที่อยู่คลินิก</h4>
                        <p class="text-gray-700 mb-2"><i class="fas fa-map-marker-alt text-blue-600 mr-2"></i> 123 ถนนสุขุมวิท กรุงเทพฯ</p>
                        <p class="text-gray-700"><i class="fas fa-clock text-blue-600 mr-2"></i> เปิดบริการทุกวัน 09:00 - 18:00 น.</p>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold text-blue-700 mb-4">ช่องทางติดต่อ</h4>
                        <p class="text-gray-700 mb-2"><i class="fas fa-phone-alt text-blue-600 mr-2"></i> <?php echo SITE_PHONE; ?></p>
                        <p class="text-gray-700"><i class="fas fa-envelope text-blue-600 mr-2"></i> <?php echo SITE_EMAIL; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once 'includes/footer.php';
?>