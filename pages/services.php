  <?php include "../includes/language.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Max Gym - Performance</title>
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/style.css">
    <link rel="icon" type="image/jpg" href="/image/favicon.jpg">
</head>

<body class="bg-black">
    <?php include '../components/navbar.php'?>

    <!-- Hero Section -->
    <section class="relative min-h-[60vh] pt-20 flex items-center justify-center text-white bg-cover bg-center grayscale" style="background-image: url('../image/room-gym1.png')">
        <div class="absolute inset-0 bg-black bg-opacity-80"></div>
        <div class="relative z-10 max-w-7xl mx-auto px-5 md:px-10 w-full">
            <div class="flex flex-col items-center text-center justify-center">
                <h1 class="text-4xl md:text-5xl font-semibold mb-5 animate-fadeUp"><?= $content['services']['services_title']; ?></h1>
                <p class="text-sm md:text-base font-semibold animate-fadeUp delay-1"><?= $content['services']['services_nav']; ?></p>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-16 md:py-20 text-white">
        <div class="max-w-7xl mx-auto px-5 md:px-10">

            <!-- Section Header -->
            <div class="text-center mb-12 animate-fadeUp">
                <div class="flex items-center justify-center gap-3 mb-4">
                    <div class="w-8 h-0.5 bg-gradient-to-r from-[#311E68] to-[#7F55F8]"></div>
                    <p class="text-[10px] md:text-sm bg-gradient-to-r from-[#311E68] to-[#7F55F8] bg-clip-text text-transparent font-bold tracking-widest italic "><?= $content['services']['WWO']['sub']; ?></p>
                    <div class="w-8 h-0.5 bg-gradient-to-r from-[#311E68] to-[#7F55F8]"></div>
                </div>
                <h2 class="text-xl md:text-3xl font-semibold mb-4"><?= $content['services']['WWO']['title1']. " "; ?><span class="bg-gradient-to-r from-[#311E68] to-[#7F55F8] bg-clip-text text-transparent"><?= $content['services']['WWO']['title2']; ?></span></h2>
                <p class="text-xs md:text-sm text-gray-400 max-w-xl mx-auto"><?= $content['services']['WWO']['desc']; ?></p>
            </div>

            <!-- Services Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- 1. Personal Training -->
                <div class="bg-[#121212] border border-white/5 rounded-2xl p-6 hover:border-purple-700 transition duration-300 boxReveal">
                    <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-gradient-to-t from-[#280069] to-[#4F00CF] mb-4">
                        <span class="iconify h-6 w-6 text-white" data-icon="mdi:account-supervisor"></span>
                    </div>
                    <h3 class="text-base md:text-lg font-semibold mb-2"><?= $content['services']['WWO']['list'][0]['title']?></h3>
                    <p class="text-xs md:text-sm text-gray-400"><?= $content['services']['WWO']['list'][0]['desc']?></p>
                </div>

                <!-- 2. Group Class -->
                <div class="bg-[#121212] border border-white/5 rounded-2xl p-6 hover:border-purple-700 transition duration-300 boxReveal">
                    <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-gradient-to-t from-[#280069] to-[#4F00CF] mb-4">
                        <span class="iconify h-6 w-6 text-white" data-icon="mdi:account-group"></span>
                    </div>
                    <h3 class="text-base md:text-lg font-semibold mb-2"><?= $content['services']['WWO']['list'][1]['title']?></h3>
                    <p class="text-xs md:text-sm text-gray-400"><?= $content['services']['WWO']['list'][1]['desc']?></p>
                </div>

                <!-- 3. Membership -->
                <div class="bg-[#121212] border border-white/5 rounded-2xl p-6 hover:border-purple-700 transition duration-300 boxReveal">
                    <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-gradient-to-t from-[#280069] to-[#4F00CF] mb-4">
                        <span class="iconify h-6 w-6 text-white" data-icon="mdi:card-account-details"></span>
                    </div>
                    <h3 class="text-base md:text-lg font-semibold mb-2"><?= $content['services']['WWO']['list'][2]['title']?></h3>
                    <p class="text-xs md:text-sm text-gray-400"><?= $content['services']['WWO']['list'][2]['desc']?></p>
                </div>

                <!-- 4. Strength Training -->
                <div class="bg-[#121212] border border-white/5 rounded-2xl p-6 hover:border-purple-700 transition duration-300 boxReveal">
                    <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-gradient-to-t from-[#280069] to-[#4F00CF] mb-4">
                        <span class="iconify h-6 w-6 text-white" data-icon="mdi:weight-lifter"></span>
                    </div>
                    <h3 class="text-base md:text-lg font-semibold mb-2"><?= $content['services']['WWO']['list'][3]['title']?></h3>
                    <p class="text-xs md:text-sm text-gray-400"><?= $content['services']['WWO']['list'][3]['desc']?></p>
                </div>

                <!-- 5. Cardio Training -->
                <div class="bg-[#121212] border border-white/5 rounded-2xl p-6 hover:border-purple-700 transition duration-300 boxReveal">
                    <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-gradient-to-t from-[#280069] to-[#4F00CF] mb-4">
                        <span class="iconify h-6 w-6 text-white" data-icon="mdi:run-fast"></span>
                    </div>
                    <h3 class="text-base md:text-lg font-semibold mb-2"><?= $content['services']['WWO']['list'][4]['title']?></h3>
                    <p class="text-xs md:text-sm text-gray-400"><?= $content['services']['WWO']['list'][4]['desc']?></p>
                </div>

                <!-- 6. Body Transformation -->
                <div class="bg-[#121212] border border-white/5 rounded-2xl p-6 hover:border-purple-700 transition duration-300 boxReveal">
                    <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-gradient-to-t from-[#280069] to-[#4F00CF] mb-4">
                        <span class="iconify h-6 w-6 text-white" data-icon="mdi:human-male-height"></span>
                    </div>
                    <h3 class="text-base md:text-lg font-semibold mb-2"><?= $content['services']['WWO']['list'][5]['title']?></h3>
                    <p class="text-xs md:text-sm text-gray-400"><?= $content['services']['WWO']['list'][5]['desc']?></p>
                </div>

            </div>
        </div>
    </section>

    <!-- Fasilitas Section -->
    <section class="py-16 md:py-20 text-white bg-[#0A0A0A]">
        <div class="max-w-7xl mx-auto px-5 md:px-10">

            <!-- Section Header -->
            <div class="text-center mb-12 animate-fadeUp">
                <div class="flex items-center justify-center gap-3 mb-4">
                    <div class="w-8 h-0.5 bg-gradient-to-r from-[#311E68] to-[#7F55F8]"></div>
                    <p class="text-[10px] md:text-sm bg-gradient-to-r from-[#311E68] to-[#7F55F8] bg-clip-text text-transparent font-bold tracking-widest italic"><?= $content['fasilitas']['sub']?></p>
                    <div class="w-8 h-0.5 bg-gradient-to-r from-[#311E68] to-[#7F55F8]"></div>
                </div>
                <h2 class="text-xl md:text-3xl font-semibold mb-4"><?= $content['fasilitas']['title1']?><span class="bg-gradient-to-r from-[#311E68] to-[#7F55F8] bg-clip-text text-transparent"><?= $content['fasilitas']['title2']?></span></h2>
                <p class="text-xs md:text-sm text-gray-400 max-w-xl mx-auto"><?= $content['fasilitas']['desc']?></p>
            </div>

            <!-- Fasilitas Grid -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6">

                <div class="flex items-center gap-3 bg-[#121212] border border-white/5 rounded-xl p-4 boxReveal">
                    <div class="w-10 h-10 flex-shrink-0 flex items-center justify-center rounded-lg bg-gradient-to-t from-[#280069] to-[#4F00CF]">
                        <span class="iconify h-5 w-5 text-white" data-icon="mdi:dumbbell"></span>
                    </div>
                    <p class="text-xs md:text-sm font-medium"><?= $content['fasilitas']['list'][0]['title']?></p>
                </div>

                <div class="flex items-center gap-3 bg-[#121212] border border-white/5 rounded-xl p-4 boxReveal">
                    <div class="w-10 h-10 flex-shrink-0 flex items-center justify-center rounded-lg bg-gradient-to-t from-[#280069] to-[#4F00CF]">
                        <span class="iconify h-5 w-5 text-white" data-icon="mdi:run"></span>
                    </div>
                    <p class="text-xs md:text-sm font-medium"><?= $content['fasilitas']['list'][1]['title']?></p>
                </div>

                <div class="flex items-center gap-3 bg-[#121212] border border-white/5 rounded-xl p-4 boxReveal">
                    <div class="w-10 h-10 flex-shrink-0 flex items-center justify-center rounded-lg bg-gradient-to-t from-[#280069] to-[#4F00CF]">
                        <span class="iconify h-5 w-5 text-white" data-icon="mdi:locker"></span>
                    </div>
                    <p class="text-xs md:text-sm font-medium"><?= $content['fasilitas']['list'][2]['title']?></p>
                </div>

                <div class="flex items-center gap-3 bg-[#121212] border border-white/5 rounded-xl p-4 boxReveal">
                    <div class="w-10 h-10 flex-shrink-0 flex items-center justify-center rounded-lg bg-gradient-to-t from-[#280069] to-[#4F00CF]">
                        <span class="iconify h-5 w-5 text-white" data-icon="mdi:shower"></span>
                    </div>
                    <p class="text-xs md:text-sm font-medium"><?= $content['fasilitas']['list'][3]['title']?></p>
                </div>

                <div class="flex items-center gap-3 bg-[#121212] border border-white/5 rounded-xl p-4 boxReveal">
                    <div class="w-10 h-10 flex-shrink-0 flex items-center justify-center rounded-lg bg-gradient-to-t from-[#280069] to-[#4F00CF]">
                        <span class="iconify h-5 w-5 text-white" data-icon="mdi:air-conditioner"></span>
                    </div>
                    <p class="text-xs md:text-sm font-medium"><?= $content['fasilitas']['list'][4]['title']?></p>
                </div>

                <div class="flex items-center gap-3 bg-[#121212] border border-white/5 rounded-xl p-4 boxReveal">
                    <div class="w-10 h-10 flex-shrink-0 flex items-center justify-center rounded-lg bg-gradient-to-t from-[#280069] to-[#4F00CF]">
                        <span class="iconify h-5 w-5 text-white" data-icon="mdi:wifi"></span>
                    </div>
                    <p class="text-xs md:text-sm font-medium"><?= $content['fasilitas']['list'][5]['title']?></p>
                </div>

                <div class="flex items-center gap-3 bg-[#121212] border border-white/5 rounded-xl p-4 boxReveal">
                    <div class="w-10 h-10 flex-shrink-0 flex items-center justify-center rounded-lg bg-gradient-to-t from-[#280069] to-[#4F00CF]">
                        <span class="iconify h-5 w-5 text-white" data-icon="mdi:cctv"></span>
                    </div>
                    <p class="text-xs md:text-sm font-medium"><?= $content['fasilitas']['list'][6]['title']?></p>
                </div>

                <div class="flex items-center gap-3 bg-[#121212] border border-white/5 rounded-xl p-4 boxReveal">
                    <div class="w-10 h-10 flex-shrink-0 flex items-center justify-center rounded-lg bg-gradient-to-t from-[#280069] to-[#4F00CF]">
                        <span class="iconify h-5 w-5 text-white" data-icon="mdi:parking"></span>
                    </div>
                    <p class="text-xs md:text-sm font-medium"><?= $content['fasilitas']['list'][7]['title']?></p>
                </div>

            </div>
        </div>
    </section>

    <?php include '../pages/adversement3.php'?>
    <?php include '../components/footer.php'?>
    <?php include '../components/floating-button.php'?>
    <script src="../js/script.js"></script>
</body>
</html>