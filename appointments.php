<?php
require_once 'includes/db.php';
$pageTitle = t("ຈອງນັດໝາຍ", "Book Appointment");
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
    
    // สร้างคำสั่ง SQL ใช้ prepared statement
    $sql = "INSERT INTO appointments (name, phone, email, service, doctor, date, time, message, status, created_at) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, 'pending', NOW())";
    
    // ทำการ query โดยใช้ params
    if ($db->query($sql, [$name, $phone, $email, $service, $doctor, $date, $time, $message])) {
        $success = t("ນັດໝາຍຂອງທ່ານຖືກບັນທຶກຮຽບຮ້ອຍແລ້ວ ພວກເຮົາຈະຕິດຕໍ່ກັບໄປຢືນຢັນພາຍໃນ 24 ຊົ່ວໂມງ", "Your appointment has been successfully recorded. We will contact you to confirm within 24 hours.");
        
        // ส่งอีเมลยืนยัน
        if (!empty($email)) {
            $to = $email;
            $subject = t("ຢືນຢັນການນັດໝາຍ - ຄລີນິກວັນເມດ", "Appointment Confirmation - OneMeds Clinic");
            $message_body = t(
                "ຮຽນ ທ່ານ {$name}\n\nຂອບໃຈສຳລັບການນັດໝາຍ\nວັນທີ: {$date}\nເວລາ: {$time}\n\nຫາກມີຂໍ້ສົງໄສກະລຸນາຕິດຕໍ່: " . SITE_PHONE,
                "Dear {$name}\n\nThank you for your appointment\nDate: {$date}\nTime: {$time}\n\nIf you have any questions, please contact: " . SITE_PHONE
            );
            $headers = "From: " . SITE_EMAIL;
            
            mail($to, $subject, $message_body, $headers);
        }
    } else {
        $error = t("ເກີດຂໍ້ຜິດພາດໃນການບັນທຶກຂໍ້ມູນ: ", "An error occurred while saving data: ") . $db->getConnection()->error;
    }
}
?>

<!-- Appointment Form -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-3xl font-bold text-center text-teal-800 mb-2"><?php echo t("ນັດໝາຍແພດ", "Book Doctor Appointment"); ?></h2>
            <p class="text-center text-gray-600 mb-12"><?php echo t("ກະລຸນາປ້ອນຂໍ້ມູນດ້ານລຸ່ມເພື່ອນັດໝາຍແພດຂອງເຮົາ", "Please fill in the information below to book an appointment with our doctors"); ?></p>
            
            <?php if (isset($success)): ?>
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                    <?php echo $success; ?>
                </div>
            <?php elseif (isset($error)): ?>
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>
            
            <form action="appointments.php" method="POST" class="bg-teal-50 p-8 rounded-lg shadow-md" id="appointment-form">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Name -->
                    <div>
                        <label for="name" class="block text-gray-700 font-medium mb-2"><?php echo t("ຊື່-ນາມສະກຸນ", "Full Name"); ?> <span class="text-red-500">*</span></label>
                        <input type="text" id="name" name="name" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    
                    <!-- Phone -->
                    <div>
                        <label for="phone" class="block text-gray-700 font-medium mb-2"><?php echo t("ເບີໂທລະສັບ", "Phone Number"); ?> <span class="text-red-500">*</span></label>
                        <input type="tel" id="phone" name="phone" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    
                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-gray-700 font-medium mb-2"><?php echo t("ອີເມວ", "Email"); ?></label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    
                    <!-- Service -->
                    <div>
                        <label for="service" class="block text-gray-700 font-medium mb-2"><?php echo t("ບໍລິການທີ່ຕ້ອງການ", "Service Required"); ?> <span class="text-red-500">*</span></label>
                        <select id="service" name="service" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value=""><?php echo t("-- ເລືອກບໍລິການ --", "-- Select Service --"); ?></option>
                            <option value="ตรวจสุขภาพ"><?php echo t("ກວດສຸຂະພາບ", "Health Checkup"); ?></option>
                            <option value="อายุรกรรม"><?php echo t("ອາຍຸລະກຳ", "Internal Medicine"); ?></option>
                            <option value="กุมารเวชกรรม"><?php echo t("ກຸມາລະເວດຊະກຳ", "Pediatrics"); ?></option>
                            <option value="ศัลยกรรม"><?php echo t("ຜ່າຕັດ", "Surgery"); ?></option>
                            <option value="อื่นๆ"><?php echo t("ອື່ນໆ", "Others"); ?></option>
                        </select>
                    </div>
                    
                    <!-- Doctor -->
                    <div>
                        <label for="doctor" class="block text-gray-700 font-medium mb-2"><?php echo t("ແພດທີ່ຕ້ອງການພົບ (ຖ້າມີ)", "Doctor to see (if any)"); ?></label>
                        <select id="doctor" name="doctor" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value=""><?php echo t("-- ບໍ່ລະບຸ --", "-- Not specified --"); ?></option>
                            <option value="นพ. สุทธิพงษ์ ใจดี"><?php echo t("ດຣ. ໂນ້ ໃຈດີ", "Dr. No Jaidee"); ?></option>
                            <option value="พญ. สุพัตรา สุขใจ"><?php echo t("ພຍ. ໂນ້ ສຸດໃຈ", "Dr. No Soudjai"); ?></option>
                            <option value="นพ. วีรพล แสนสุข"><?php echo t("ດຣ. ໂນ້ ແສນສຸກ", "Dr. No Saensuk"); ?></option>
                        </select>
                    </div>
                    
                    <!-- Date -->
                    <div>
                        <label for="date" class="block text-gray-700 font-medium mb-2"><?php echo t("ວັນທີນັດໝາຍ", "Appointment Date"); ?> <span class="text-red-500">*</span></label>
                        <input type="date" id="date" name="date" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    
                    <!-- Time -->
                    <div>
                        <label for="time" class="block text-gray-700 font-medium mb-2"><?php echo t("ເວລານັດໝາຍ", "Appointment Time"); ?> <span class="text-red-500">*</span></label>
                        <select id="time" name="time" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value=""><?php echo t("-- ເລືອກເວລາ --", "-- Select Time --"); ?></option>
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
                    <label for="message" class="block text-gray-700 font-medium mb-2"><?php echo t("ລາຍລະອຽດເພີ່ມເຕີມ", "Additional Details"); ?></label>
                    <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>
                
                <!-- Submit Button -->
                <div class="mt-8 text-center">
                    <button type="submit" class="bg-teal-600 hover:bg-teal-700 text-white px-8 py-3 rounded-lg font-semibold text-lg transition duration-300"><?php echo t("ສົ່ງຄຳນັດໝາຍ", "Send Appointment"); ?></button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Contact Info -->
<section class="py-16 bg-teal-50">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white p-8 rounded-lg shadow-md">
                <h3 class="text-2xl font-bold text-teal-800 mb-6"><?php echo t("ຂໍ້ມູນຕິດຕໍ່", "Contact Information"); ?></h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <h4 class="text-lg font-semibold text-teal-700 mb-4"><?php echo t("ທີ່ຢູ່ຄລີນິກ", "Clinic Address"); ?></h4>
                        <p class="text-gray-700 mb-2"><i class="fas fa-map-marker-alt text-teal-600 mr-2"></i> <?php echo SITE_ADDRESS; ?></p>
                        <p class="text-gray-700"><i class="fas fa-clock text-teal-600 mr-2"></i> <?php echo t("ເປີດບໍລິການທຸກວັນ", "Open daily"); ?> <?php echo SITE_WORKING_HOURS; ?></p>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold text-teal-700 mb-4"><?php echo t("ຊ່ອງທາງຕິດຕໍ່", "Contact Channels"); ?></h4>
                        <p class="text-gray-700 mb-2"><i class="fas fa-phone-alt text-teal-600 mr-2"></i> <?php echo SITE_PHONE; ?></p>
                        <p class="text-gray-700"><i class="fas fa-envelope text-teal-600 mr-2"></i> <?php echo SITE_EMAIL; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// เพิ่ม client-side validation
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('appointment-form');
    if (form) {
        form.addEventListener('submit', function(e) {
            const requiredFields = form.querySelectorAll('[required]');
            let isValid = true;

            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    field.classList.add('border-red-500');
                    isValid = false;
                } else {
                    field.classList.remove('border-red-500');
                }
            });

            // ตรวจสอบวันที่ไม่ให้เป็นวันที่ผ่านมาแล้ว
            const dateField = document.getElementById('date');
            if (dateField && dateField.value) {
                const selectedDate = new Date(dateField.value);
                const today = new Date();
                today.setHours(0, 0, 0, 0);
                
                if (selectedDate < today) {
                    dateField.classList.add('border-red-500');
                    alert('<?php echo t("ກະລຸນາເລືອກວັນທີ່ຍັງບໍ່ມາຮອດ", "Please select a future date"); ?>');
                    isValid = false;
                }
            }

            if (!isValid) {
                e.preventDefault();
                alert('<?php echo t("ກະລຸນາປ້ອນຂໍ້ມູນໃນຊ່ອງທີ່ຕ້ອງການໃຫ້ຄົບຖ້ວນ", "Please fill in all required fields"); ?>');
            }
        });
    }
});
</script>

<?php
require_once 'includes/footer.php';
?>