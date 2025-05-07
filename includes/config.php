<?php
// ตั้งค่าฐานข้อมูล
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'clinic_db');

// ตั้งค่าคลินิก
define('SITE_NAME_LO', 'ຄລີນິກວັນເມດ'); // ลาว
define('SITE_NAME_EN', 'Clinic OneMeds'); // อังกฤษ
define('SITE_EMAIL', 'Onemed@gmail.com');
define('SITE_PHONE', '20-78888789');

// เพิ่มการตั้งค่าทั่วไป
define('SITE_TITLE', 'OneMeds Clinic');
define('SITE_DESCRIPTION', 'High Quality Medical Services');
define('SITE_ADDRESS', 'ບ້ານ ດົງນາທອງ ເມືອງ ສີໂຄດຕະບອງ');
define('SITE_WORKING_HOURS', '08:00-20:00');

// ตั้งค่าภาษา
session_start();
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'lo'; // ภาษาเริ่มต้นเป็นลาว
}

// ฟังก์ชันเปลี่ยนภาษา
function changeLanguage($lang) {
    $_SESSION['lang'] = $lang;
}

// ฟังก์ชันดึงข้อความตามภาษา
function t($loText, $enText) {
    return $_SESSION['lang'] == 'lo' ? $loText : $enText;
}
?>