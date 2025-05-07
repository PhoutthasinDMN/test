<?php
require_once 'includes/config.php'; // เปลี่ยนจาก header.php เป็น config.php

// ตรวจสอบการเปลี่ยนภาษา
if (isset($_GET['lang'])) {
    changeLanguage($_GET['lang']);
    header('Location: ' . strtok($_SERVER['REQUEST_URI'], '?'));
    exit();
}
?>
<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang'] == 'lo' ? 'lo' : 'en'; ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION['lang'] == 'lo' ? SITE_NAME_LO : SITE_NAME_EN; ?> - <?php echo $pageTitle ?? ''; ?></title>
    <!-- เพิ่ม meta tags สำหรับ SEO -->
    <meta name="description" content="<?php echo t('ຄລີນິກວັນເມດ - ບໍລິການທາງການແພດທີ່ມີຄຸນນະພາບສູງ', 'OneMeds Clinic - High Quality Medical Services'); ?>">
    <meta name="keywords" content="<?php echo t('ຄລີນິກ, ສຸຂະພາບ, ໝໍ, ຢາ, ວັນເມດ', 'clinic, health, doctor, medicine, OneMeds'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- ลิงก์ฟอนต์ Noto Sans Lao จาก Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Lao&display=swap" rel="stylesheet">
    <!-- Font Awesome 6.5.0 (ครอบคลุมครบทุกหมวด) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body class="font-sans bg-gray-50">
    <!-- Navigation - เปลี่ยนสีจาก blue เป็น teal -->
    <nav class="bg-teal-500 text-white shadow-lg">
        <div class="flex items-center justify-between px-4 md:px-8 max-w-screen-xl mx-auto">
            <div class="py-2">
                <a href="index.php" class="flex flex-col items-center">
                    <img src="assets/images/logo.png" alt="<?php echo $_SESSION['lang'] == 'lo' ? SITE_NAME_LO : SITE_NAME_EN; ?>"
                        class="h-16 sm:h-20 md:h-24 lg:h-28 w-auto">
                    <h1 class="text-xl font-bold mt-2"><?php echo $_SESSION['lang'] == 'lo' ? SITE_NAME_LO : SITE_NAME_EN; ?></h1>
                </a>
            </div>
            <div class="hidden md:flex items-center space-x-6">
                <a href="index.php" class="hover:text-teal-100 text-sm font-medium"><?php echo t('ໜ້າຫຼັກ', 'Home'); ?></a>

                <!-- Dropdown Menu - About -->
                <div class="relative dropdown-container">
                    <button class="hover:text-teal-100 flex items-center focus:outline-none bg-transparent border-none text-white dropdown-toggle text-sm font-medium">
                        <?php echo t('ກ່ຽວກັບເຮົາ', 'About'); ?>
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50 hidden dropdown-menu">
                        <a href="about.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-teal-50">
                            <?php echo t('ກ່ຽວກັບຄລີນິກ', 'About Clinic'); ?>
                        </a>
                        <a href="team.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-teal-50">
                            <?php echo t('ທີມແພດ', 'Medical Team'); ?>
                        </a>
                        <a href="management.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-teal-50">
                            <?php echo t('ທີມບໍລິຫານ', 'Management Team'); ?>
                        </a>
                    </div>
                </div>

                <a href="services.php" class="hover:text-teal-100 text-sm font-medium"><?php echo t('ບໍລິການ', 'Services'); ?></a>
                <a href="contact.php" class="hover:text-teal-100 text-sm font-medium"><?php echo t('ຕິດຕໍ່', 'Contact'); ?></a>

                <!-- ปุ่ม Appointment สำหรับเดสก์ท็อป -->
                <a href="appointments.php" class="bg-teal-700 hover:bg-teal-800 px-4 py-2 rounded-lg transition duration-300 text-sm font-medium">
                    <?php echo t('ນັດໝາຍ', 'Appointment'); ?>
                </a>

                <!-- Language Switcher -->
                <div class="flex items-center space-x-2 ml-4">
                    <a href="?lang=lo" class="text-sm <?php echo $_SESSION['lang'] == 'lo' ? 'font-bold underline' : 'opacity-70'; ?>">ລາວ</a>
                    <span class="text-gray-300">|</span>
                    <a href="?lang=en" class="text-sm <?php echo $_SESSION['lang'] == 'en' ? 'font-bold underline' : 'opacity-70'; ?>">EN</a>
                </div>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button class="outline-none mobile-menu-button">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="hidden mobile-menu">
            <ul class="pt-2 pb-3 space-y-1">
                <li><a href="index.php" class="block px-2 py-1 text-sm hover:bg-teal-600 rounded"><?php echo t('ໜ້າຫຼັກ', 'Home'); ?></a></li>

                <!-- About submenu for mobile -->
                <li class="about-dropdown">
                    <button class="flex w-full justify-between items-center px-2 py-1 text-sm hover:bg-teal-600 rounded">
                        <?php echo t('ກ່ຽວກັບເຮົາ', 'About'); ?>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <ul class="pl-4 mt-1 space-y-1 hidden about-submenu">
                        <li><a href="about.php" class="block px-2 py-1 text-sm hover:bg-teal-600 rounded"><?php echo t('ກ່ຽວກັບຄລີນິກ', 'About Clinic'); ?></a></li>
                        <li><a href="team.php" class="block px-2 py-1 text-sm hover:bg-teal-600 rounded"><?php echo t('ທີມແພດ', 'Medical Team'); ?></a></li>
                        <li><a href="management.php" class="block px-2 py-1 text-sm hover:bg-teal-600 rounded"><?php echo t('ທີມບໍລິຫານ', 'Management Team'); ?></a></li>
                    </ul>
                </li>

                <li><a href="services.php" class="block px-2 py-1 text-sm hover:bg-teal-600 rounded"><?php echo t('ບໍລິການ', 'Services'); ?></a></li>
                <li><a href="contact.php" class="block px-2 py-1 text-sm hover:bg-teal-600 rounded"><?php echo t('ຕິດຕໍ່', 'Contact'); ?></a></li>
                <li><a href="appointments.php" class="block bg-teal-700 hover:bg-teal-800 px-2 py-1 text-sm rounded"><?php echo t('ນັດໝາຍ', 'Appointment'); ?></a></li>
                <li class="pt-2 border-t border-teal-600">
                    <div class="flex justify-center space-x-4 py-2">
                        <a href="?lang=lo" class="text-sm <?php echo $_SESSION['lang'] == 'lo' ? 'font-bold underline' : 'opacity-70'; ?>">ລາວ</a>
                        <a href="?lang=en" class="text-sm <?php echo $_SESSION['lang'] == 'en' ? 'font-bold underline' : 'opacity-70'; ?>">EN</a>
                    </div>
                </li>
            </ul>
        </div>
        </div>
    </nav>

    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.querySelector('.mobile-menu-button');
        const mobileMenu = document.querySelector('.mobile-menu');

        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }

        // About dropdown toggle for mobile
        const aboutDropdownButton = document.querySelector('.about-dropdown button');
        const aboutSubmenu = document.querySelector('.about-submenu');

        if (aboutDropdownButton && aboutSubmenu) {
            aboutDropdownButton.addEventListener('click', () => {
                aboutSubmenu.classList.toggle('hidden');
                aboutDropdownButton.querySelector('svg').classList.toggle('rotate-180');
            });
        }

        // Desktop dropdown ที่แก้ไขใหม่
        document.querySelectorAll('.dropdown-container').forEach(container => {
            const toggle = container.querySelector('.dropdown-toggle');
            const menu = container.querySelector('.dropdown-menu');
            let timeoutId;

            // แสดง dropdown เมื่อคลิกที่ปุ่ม
            toggle.addEventListener('click', (e) => {
                e.preventDefault();
                menu.classList.toggle('hidden');
            });

            // แสดง dropdown เมื่อเลื่อนเมาส์มาที่ container
            container.addEventListener('mouseenter', () => {
                clearTimeout(timeoutId); // ยกเลิก timeout ที่อาจจะซ่อน dropdown
                menu.classList.remove('hidden');
            });

            // ซ่อน dropdown เมื่อเลื่อนเมาส์ออกจาก container หลังจากผ่านไป 500ms
            container.addEventListener('mouseleave', () => {
                timeoutId = setTimeout(() => {
                    // ตรวจสอบว่าเมาส์ไม่ได้อยู่ใน dropdown ก่อนซ่อน
                    if (!container.matches(':hover') && !menu.matches(':hover')) {
                        menu.classList.add('hidden');
                    }
                }, 500); // รอ 500ms ก่อนซ่อน dropdown
            });

            // ป้องกันการซ่อน dropdown เมื่อคลิกใน dropdown
            menu.addEventListener('click', (e) => {
                // ถ้าไม่ได้คลิกที่ลิงก์ใน dropdown ให้ไม่ซ่อน dropdown
                if (e.target.tagName.toLowerCase() !== 'a') {
                    e.stopPropagation();
                }
            });
        });

        // ปิด dropdown เมื่อคลิกที่อื่นบนหน้า
        document.addEventListener('click', (e) => {
            const containers = document.querySelectorAll('.dropdown-container');
            containers.forEach(container => {
                if (!container.contains(e.target)) {
                    const menu = container.querySelector('.dropdown-menu');
                    menu.classList.add('hidden');
                }
            });
        });
    </script>