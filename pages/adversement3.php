
<section class="relative py-16 md:py-20">
    <div class="max-w-7xl mx-auto px-0 md:px-10">
        <div class="relative overflow-hidden rounded-none md:rounded-xl flex flex-col text-center justify-center bg-[#0F0F0F] h-[250px] md:h-[350px]">

            <!-- Background Image -->
            <div class="absolute inset-0 bg-cover bg-center grayscale"
                style="background-image: url('../image/strenght-trainning.png')"></div>

            <!-- Overlay -->
            <div class="absolute inset-0 bg-black/80"></div>

            <!-- Content -->
            <div class="relative z-10 px-4 md:px-6 py-10 min-h-[250px] flex items-center justify-center">
                <div class="max-w-2xl text-white mx-auto">
                    <p class="text-xs mb-2 textshow"><?= $content['adversement_3']['sub']?></p>
                    <h2 class="text-lg sm:text-2xl md:text-3xl font-semibold mb-4 textshow">
                        <?= $content['adversement_3']['title']?></h2>
                    <p class="text-[10px] md:text-sm mb-6 textshow">
                        <?= $content['adversement_3']['desc']?></p>
                    <a href="/pages/membership.php">
                    <button class="px-6 py-3 text-xs font-semibold bg-gradient-to-r from-[#280069] to-[#4F00CF] hover:opacity-90 transition textshow">
                        <?= $content['adversement_3']['button']?></button>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
