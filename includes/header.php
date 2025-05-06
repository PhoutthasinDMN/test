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
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
        <!-- ลิงก์ฟอนต์ Noto Sans Lao จาก Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Lao&display=swap" rel="stylesheet">
        <!-- Font Awesome 6.5.0 (ครอบคลุมครบทุกหมวด) -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


    </head>


    <body class="font-sans bg-blue-50">
        <!-- Navigation -->
        <nav class="bg-blue-800 text-white shadow-lg">
            <div class="container mx-auto px-6 py-3">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <a href="index.php" class="text-xl font-bold">
                            <i class="fas fa-heartbeat mr-2"></i><?php echo $_SESSION['lang'] == 'lo' ? SITE_NAME_LO : SITE_NAME_EN; ?>
                        </a>
                    </div>
                    <div class="hidden md:flex items-center space-x-8">
                        <a href="index.php" class="hover:text-blue-200"><?php echo t('ໜ້າຫຼັກ', 'Home'); ?></a>
                        <a href="about.php" class="hover:text-blue-200"><?php echo t('ກ່ຽວກັບເຮົາ', 'About'); ?></a>
                        <a href="services.php" class="hover:text-blue-200"><?php echo t('ບໍລິການ', 'Services'); ?></a>
                        <a href="contact.php" class="hover:text-blue-200"><?php echo t('ຕິດຕໍ່', 'Contact'); ?></a>

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
                    <ul class="mt-4 space-y-4">
                        <li><a href="index.php" class="block hover:bg-blue-700 px-2 py-1 rounded"><?php echo t('ໜ້າຫຼັກ', 'Home'); ?></a></li>
                        <li><a href="about.php" class="block hover:bg-blue-700 px-2 py-1 rounded"><?php echo t('ກ່ຽວກັບເຮົາ', 'About'); ?></a></li>
                        <li><a href="services.php" class="block hover:bg-blue-700 px-2 py-1 rounded"><?php echo t('ບໍລິການ', 'Services'); ?></a></li>
                        <li><a href="contact.php" class="block hover:bg-blue-700 px-2 py-1 rounded"><?php echo t('ຕິດຕໍ່', 'Contact'); ?></a></li>
                        <li><a href="appointments.php" class="block bg-blue-600 hover:bg-blue-700 px-2 py-1 rounded"><?php echo t('ນັດຫມໍ', 'Appointment'); ?></a></li>
                        <li class="pt-2 border-t border-blue-700">
                            <div class="flex justify-center space-x-4">
                                <a href="?lang=lo" class="text-sm <?php echo $_SESSION['lang'] == 'lo' ? 'font-bold underline' : 'opacity-70'; ?>">ລາວ</a>
                                <a href="?lang=en" class="text-sm <?php echo $_SESSION['lang'] == 'en' ? 'font-bold underline' : 'opacity-70'; ?>">EN</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>