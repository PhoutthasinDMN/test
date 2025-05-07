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
    
    // สร้างคำสั่ง SQL และใช้ prepared statement
    $sql = "INSERT INTO contacts (name, email, phone, subject, message, created_at) 
            VALUES (?, ?, ?, ?, ?, NOW())";
    
    // ทำการ query โดยใช้ params
    if ($db->query($sql, [$name, $email, $phone, $subject, $message])) {
        $success = t("ຂໍ້ຄວາມຂອງທ່ານຖືກສົ່ງຮຽບຮ້ອຍແລ້ວ ພວກເຮົາຈະຕິດຕໍ່ກັບໄປພາຍໃນ 24 ຊົ່ວໂມງ", "Your message has been sent successfully. We will contact you within 24 hours.");
    } else {
        $error = t("ເກີດຂໍ້ຜິດພາດໃນການສົ່ງຂໍ້ຄວາມ: ", "An error occurred while sending the message: ") . $db->getConnection()->error;
    }
}
?>

<!-- ส่วนที่เหลือของไฟล์ contact.php ยังคงเดิม แต่ควรเปลี่ยนข้อความไทยให้ใช้ฟังก์ชัน t() ทั้งหมด -->
<!-- ... -->