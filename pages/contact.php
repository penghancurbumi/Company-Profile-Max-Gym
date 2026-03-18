<?php include "../includes/language.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Max Gym - Performance</title>
    <link rel="icon" type="image/jpg" href="/image/favicon.jpg">
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/style.css">
</head>

<body class="bg-black">
    <?php include '../components/navbar.php'?>    

    <!-- Hero Section -->
    <section class="relative min-h-[60vh] pt-20 flex items-center justify-center text-white bg-cover bg-center grayscale" style="background-image: url('../image/image-contact.jpg')">
        <div class="absolute inset-0 bg-black bg-opacity-80"></div>
        <div class="relative z-10 max-w-7xl mx-auto px-5 md:px-10 w-full ">

            <div class="flex flex-col items-center text-center justify-center">
                <h1 class="text-4xl md:text-5xl font-semibold mb-5 animate-fadeUp"><?= $content['contact']['title']?></h1>
                <p class="text-sm md:text-base font-semibold animate-fadeUp delay-1"><?= $content['contact']['nav']?></p>
            </div>
        </div>
    </section>

    <section class="py-16 md:py-20 text-white ">
        
        <div class="max-w-7xl mx-auto px-5 md:px-10">
        <div class="grid grid-cols-1 lg:grid-cols-[1.5fr_1fr] items-stretch gap-10 lg:gap-12 animate-fadeUp delay-3">

        <div class="space-y-12">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="flex items-start gap-4 boxReveal">
                    <div class="w-12 h-12 md:w-16 md:h-16 flex-shrink-0 flex items-center justify-center rounded-xl bg-gradient-to-t from-[#280069] to-[#4F00CF]">
                        <span class="h-6 w-6 md:h-8 md:w-8 iconify text-white" data-icon="gis:location-poi"></span>
                    </div>
                    <div class="items-center">
                        <h3 class="font-bold text-base md:text-lg"><?= $content['contact']['body']['info'][0]['title']?></h3>
                        <p class="text-xs md:text-sm text-gray-300"><?= $content['contact']['body']['info'][0]['location']?></p>
                    </div>
                </div> 

                <div class="flex items-start gap-4 boxReveal">
                    <div class="w-12 h-12 md:w-16 md:h-16 flex-shrink-0 flex items-center justify-center rounded-xl bg-gradient-to-t from-[#280069] to-[#4F00CF]">
                        <span class="h-6 w-6 md:h-8 md:w-8 iconify text-white" data-icon="mdi:clock"></span>
                    </div>
                    <div>
                        <h3 class="font-bold text-base md:text-lg"><?= $content['contact']['body']['info'][1]['title']?></h3>
                        <p class="text-xs md:text-sm text-gray-300"><?= $content['contact']['body']['info'][1]['hour']['weekday']?></p>
                        <p class="text-xs md:text-sm text-gray-300"><?= $content['contact']['body']['info'][1]['hour']['weekend']?></p>
                    </div>
                </div>

                <div class="flex items-start gap-4 boxReveal">
                    <div class="w-12 h-12 md:w-16 md:h-16 flex-shrink-0 flex items-center justify-center rounded-xl bg-gradient-to-t from-[#280069] to-[#4F00CF]">
                        <span class="h-6 w-6 md:h-8 md:w-8 iconify text-white" data-icon="mdi:phone"></span>
                    </div>
                    <div>
                        <h3 class="font-bold text-base md:text-lg"><?= $content['contact']['body']['info'][2]['title']?></h3>
                        <p class="text-xs md:text-sm text-gray-300"><?= $content['contact']['body']['info'][2]['Telp']?></p>
                    </div>
                </div>

                <div class="flex items-start gap-4 boxReveal">
                    <div class="w-12 h-12 md:w-16 md:h-16 flex-shrink-0 flex items-center justify-center rounded-xl bg-gradient-to-t from-[#280069] to-[#4F00CF]">
                        <span class="h-6 w-6 md:h-8 md:w-8 iconify text-white" data-icon="mdi:email"></span>
                    </div>
                    <div>
                        <h3 class="font-bold text-base md:text-lg"><?= $content['contact']['body']['info'][3]['title']?></h3>
                        <p class="text-xs md:text-sm text-gray-300"><?= $content['contact']['body']['info'][3]['email']?></p>
                    </div>
                </div>
            </div>
            <div class="w-full h-64 md:h-80 lg:h-96 rounded-xl overflow-hidden border border-gray-700 BoxReveal">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3383.4675645537877!2d106.94713723293707!3d-6.919926571649072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e684941017048b1%3A0x2a73ec0fa4f227cc!2sMax%20Gym%20%26%20Zumba%20Fitness%20performance!5e0!3m2!1sid!2sid!4v1772519316865!5m2!1sid!2sid" 
                    class="w-full h-full" style="border:0" loading="lazy"></iframe>
            </div>
        </div>

            <div id="contactForm" class="w-full bg-[#121212] p-6 md:p-10 rounded-2xl border border-white/5 BoxReveal">
                    <h2 class="text-2xl md:text-3xl font-semibold mb-2 mt-3"><?= $content['contact']['message']['title']?></h2>
                    <p class="text-xs md:text-sm text-gray-400 mb-6"><?= $content['contact']['message']['desc']?></p>

                    <form method="POST" autocomplete="off" class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium mb-1"><?= $content['contact']['message']['input'][0]['title']?></label>
                            <input name="name" type="text" placeholder="<?= $content['contact']['message']['input'][0]['placeholder']?>"
                                class="w-full bg-[#121212] border border-gray-800 rounded-lg p-3 text-sm focus:border-purple-500 outline-none
                                 focus:placeholder-transparent">
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-1"><?= $content['contact']['message']['input'][1]['title']?></label>
                            <input name="email" type="email" placeholder="<?= $content['contact']['message']['input'][1]['placeholder']?>"
                                class="w-full bg-[#121212] border border-gray-800 rounded-lg p-3 text-sm focus:border-purple-500 outline-none
                                 focus:placeholder-transparent">
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-1"><?= $content['contact']['message']['input'][2]['title']?></label>
                            <textarea name="message" rows="4" placeholder="<?= $content['contact']['message']['input'][2]['placeholder']?>"
                                    class="w-full h-32 md:h-36 bg-[#121212] border border-gray-800 rounded-lg p-3 text-sm focus:border-purple-500 
                                    outline-none resize-none focus:placeholder-transparent"></textarea>
                        </div>
                        <div id="formAlert" class="hidden p-3 rounded text-white mb-3"></div>
                        <button type="submit"
                            class="w-fit md:w-fit px-8 py-3 bg-gradient-to-r from-[#280069] to-[#4F00CF] rounded-lg font-semibold text-sm hover:opacity-90 transition">
                            <?= $content['contact']['message']['button']?>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const form = document.querySelector('#contactForm form');
        const alertBox = document.getElementById('formAlert');

        if (!form) return;

        form.addEventListener('submit', function(e) {
            e.preventDefault();

            const name    = form.querySelector('[name="name"]').value.trim();
            const email   = form.querySelector('[name="email"]').value.trim();
            const message = form.querySelector('[name="message"]').value.trim();

            // Validasi field kosong
            if (!name || !email || !message) {
                alertBox.classList.remove('hidden', 'bg-green-500');
                alertBox.classList.add('bg-red-500');
                alertBox.innerHTML = 'Semua field harus diisi.';
                return;
            }

            // Format pesan WhatsApp
            const text = `Halo Max Gym! 👋\n\n*Nama:* ${name}\n*Email:* ${email}\n\n*Pesan:*\n${message}`;
            const encoded = encodeURIComponent(text);
            const waURL = `https://api.whatsapp.com/send/?phone=6287816001844&text=${encoded}`;

            // Tampilkan notif sukses
            alertBox.classList.remove('hidden', 'bg-red-500');
            alertBox.classList.add('bg-green-500');   
            alertBox.innerHTML = 'Mengarahkan ke WhatsApp...';

            form.reset();

            // Buka WhatsApp setelah 800ms
            setTimeout(() => {
                window.open(waURL, '_blank');
            }, 800);
        });
    });
    </script>
<?php include '../components/footer.php'?> 
<?php include '../components/floating-button.php'?>
<script src="../js/script.js"></script>
</body>
</html>

