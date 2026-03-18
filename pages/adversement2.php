<section class="w-full relative overflow-hidden mb-10">
    <div class="py-14 md:py-20 flex flex-col text-center justify-center bg-[#0F0F0F] ">
        <div class="absolute inset-0 bg-cover bg-center grayscale" style="background-image: url('/image/image-adverement.jpg')"></div>
        <div class="absolute inset-0 bg-black/80"></div>
        <div class="container mx-auto z-10 px-6">
            <div class="max-w-2xl text-white mx-auto">
                <p class="text-xs mb-2 textshow"><?= $content['adversement_2']['sub']?></p>
                <h2 class="text-xl sm:text-2xl md:text-3xl font-semibold mb-4 textshow uppercase"><?= $content['adversement_2']['title']?></h2>
                <p class="text-[10px] md:text-sm mb-6 textshow"><?= $content['adversement_2']['desc']?></p>
                <a href="https://api.whatsapp.com/send/?phone=6281563447530" class="px-4 py-3 text-xs font-semibold bg-gradient-to-r from-[#280069] to-[#4F00CF] textshow"><?= $content['adversement_2']['button']?></a>
            </div>
        </div>
    </div>
</section>