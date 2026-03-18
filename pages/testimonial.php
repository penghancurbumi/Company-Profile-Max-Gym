<section class="relative flex py-16 md:py-20 overflow-hidden">
    <div class="absolute inset-0 bg-cover bg-center blur-sm" style="background-image: url('../image/image-testimonial.png')"></div>
    <div class="absolute inset-0 bg-black/60"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-5 md:px-10">

      <div class="text-center mb-12 animate-fadeUp">
        <div class="flex items-center justify-center gap-3 mb-4">
          <div class="w-8 h-0.5 bg-gradient-to-r from-[#311E68] to-[#7F55F8]"></div>
          <p class="text-[10px] md:text-sm font-bold bg-gradient-to-r from-[#311E68] to-[#7F55F8] bg-clip-text text-transparent italic"><?= $content['testimonial']['sub']?></p>
          <div class="w-8 h-0.5 bg-gradient-to-r from-[#311E68] to-[#7F55F8]"></div>
        </div>
        <h2 class="text-2xl md:text-4xl font-bold uppercase mb-3"><?= $content['testimonial']['title1']?> <span class="bg-gradient-to-r from-[#311E68] to-[#7F55F8] bg-clip-text text-transparent"><?= $content['testimonial']['title2']?></span></h2>
        <p class="text-xs md:text-sm text-gray-400 max-w-xl mx-auto"><?= $content['testimonial']['desc']?></p>
      </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 md:gap-6 boxReveal">
        <div class="rounded-xl bg-[#0F0F0F] p-5 md:p-6 min-h-[140px] md:min-h-[250px]">
            <div class="relative flex flex-col justify-start w-full text-white">
                <div class="flex items-center gap-4 mb-5">
                    <img src="image/testimonial/testimonial6.png" alt="testimonial image" class="h-9 w-9 md:h-10 md:w-10 rounded-full object-cover mt-1">
                    <h3 class="font-semibold text-sm sm:text-base md:text-lg">Nadya Mauliddya</h3>
                </div>
                <p class="text-xs sm:text-sm md:text-base line-clamp-3"><?= $content['testimonial']['rate'][0]['desc']?></p>
                <div class="flex text-yellow-500 mt-4">
                    <span class="iconify text-base md:text-lg" data-icon="material-symbols:star"></span>
                    <span class="iconify text-base md:text-lg" data-icon="material-symbols:star"></span>
                    <span class="iconify text-base md:text-lg" data-icon="material-symbols:star"></span>
                    <span class="iconify text-base md:text-lg" data-icon="material-symbols:star"></span>
                    <span class="iconify text-base md:text-lg" data-icon="material-symbols:star"></span>
                    <span class="iconify text-base md:text-lg" data-icon="material-symbols:star"></span>
                </div>
            </div>
        </div>
        <div class="rounded-xl bg-[#0F0F0F] p-5 md:p-6 min-h-[140px] md:min-h-[250px]">
            <div class="relative flex flex-col justify-start w-full text-white">
                <div class="flex items-center gap-4 mb-5">
                    <img src="image/testimonial/testimonial2.png" alt="testimonial image" class="h-9 w-9 md:h-10 md:w-10 rounded-full object-cover mt-1">
                    <h3 class="font-semibold text-sm sm:text-base md:text-lg">Revs X</h3>
                </div>
                <p class="text-xs sm:text-sm md:text-base line-clamp-3"><?= $content['testimonial']['rate'][1]['desc']?></p>
                <div class="flex text-yellow-500 mt-5">
                    <span class="iconify text-base md:text-lg" data-icon="material-symbols:star"></span>
                    <span class="iconify text-base md:text-lg" data-icon="material-symbols:star"></span>
                    <span class="iconify text-base md:text-lg" data-icon="material-symbols:star"></span>
                    <span class="iconify text-base md:text-lg" data-icon="material-symbols:star"></span>
                    <span class="iconify text-base md:text-lg" data-icon="material-symbols:star"></span>
                    <span class="iconify text-base md:text-lg" data-icon="material-symbols:star"></span>
                </div>
            </div>
        </div>
        <div class="rounded-xl bg-[#0f0f0f] p-5 md:p-6 min-h-[140px] md:min-h-[250px]">
            <div class="relative flex flex-col justify-start w-full text-white">
                <div class="flex items-center gap-4 mb-5">
                    <img src="image/testimonial/testimonial3.png" alt="testimonial image" class="h-10 w-10 rounded-full objext-cover mt-1">
                    <h3 class="font-semibold text-sm sm:text-base md:text-lg">Dynesh Malik</h3>
                </div>
                <p class="text-xs sm:text-sm md:text-base line-clamp-3"><?= $content['testimonial']['rate'][2]['desc']?></p>
                <div class="flex text-yellow-500 mt-5">
                    <span class="iconify text-base md:text-lg" data-icon="material-symbols:star"></span>
                    <span class="iconify text-base md:text-lg" data-icon="material-symbols:star"></span>
                    <span class="iconify text-base md:text-lg" data-icon="material-symbols:star"></span>
                    <span class="iconify text-base md:text-lg" data-icon="material-symbols:star"></span>
                    <span class="iconify text-base md:text-lg" data-icon="material-symbols:star"></span>
                    <span class="iconify text-base md:text-lg" data-icon="material-symbols:star"></span>
                </div>
            </div>
        </div>
        <div class="rounded-xl bg-[#0F0F0F] p-5 md:p-6 min-h-[140px] md:min-h-[250px]">
            <div class="relative flex flex-col justify-start w-full text-white">
                <div class="flex items-center gap-4 mb-5">
                    <img src="image/testimonial/testimonial4.png" alt="testimonial image" class="h-9 w-9 md:h-10 md:w-10 rounded-full object-cover mt-1">
                    <h3 class="font-semibold text-sm sm:text-base md:text-lg">Shera Wahyugi</h3>
                </div>
                <p class="text-xs sm:text-sm md:text-base line-clamp-3"><?= $content['testimonial']['rate'][3]['desc']?></p>
                <div class="flex text-yellow-500 mt-5">
                    <span class="iconify text-base md:text-lg" data-icon="material-symbols:star"></span>
                    <span class="iconify text-base md:text-lg" data-icon="material-symbols:star"></span>
                    <span class="iconify text-base md:text-lg" data-icon="material-symbols:star"></span>
                    <span class="iconify text-base md:text-lg" data-icon="material-symbols:star"></span>
                    <span class="iconify text-base md:text-lg" data-icon="material-symbols:star"></span>
                    <span class="iconify text-base md:text-lg" data-icon="material-symbols:star"></span>
                </div>
            </div>
        </div>
        <div class="rounded-xl bg-[#0f0f0f] p-5 md:p-6 min-h-[140px] md:min-h-[250px]">
            <div class="relative flex flex-col justify-start w-full text-white">
                <div class="flex items-center gap-4 mb-5">
                    <img src="image/testimonial/testimonial5.png" alt="testimonial image" class="h-10 w-10 rounded-full object-cover mt-1">
                    <h3 class="font-semibold text-sm sm:text-base md:text-lg">febi ftmh</h3>
                </div>
                <p class="text-xs sm:text-sm md:text-base line-clamp-3"><?= $content['testimonial']['rate'][4]['desc']?></p>
                <div class="flex text-yellow-500 mt-5">
                    <span class="iconify text-base md:text-lg" data-icon="material-symbols:star"></span>
                    <span class="iconify text-base md:text-lg" data-icon="material-symbols:star"></span>
                    <span class="iconify text-base md:text-lg" data-icon="material-symbols:star"></span>
                    <span class="iconify text-base md:text-lg" data-icon="material-symbols:star"></span>
                    <span class="iconify text-base md:text-lg" data-icon="material-symbols:star"></span>
                    <span class="iconify text-base md:text-lg" data-icon="material-symbols:star"></span>
                </div>
            </div>
        </div>
        <div class="rounded-xl bg-[#0f0f0f] p-5 md:p-6 min-h-[140px] md:min-h-[250px]">
            <div class="relative flex flex-col justify-start w-full text-white">
                <div class="flex items-center gap-4 mb-5">
                    <img src="image/testimonial/testimonial1.png" alt="testimonial image" class="h-10 w-10 rounded-full objext-cover mt-1">
                    <h3 class="font-semibold text-sm sm:text-base md:text-lg">Mara Giovano</h3>
                </div>
                <p class="text-xs sm:text-sm md:text-base line-clamp-3"><?= $content['testimonial']['rate'][5]['desc']?></p>
                <div class="flex text-yellow-500 mt-5">
                    <span class="iconify text-base md:text-lg" data-icon="material-symbols:star"></span>
                    <span class="iconify text-base md:text-lg" data-icon="material-symbols:star"></span>
                    <span class="iconify text-base md:text-lg" data-icon="material-symbols:star"></span>
                    <span class="iconify text-base md:text-lg" data-icon="material-symbols:star"></span>
                    <span class="iconify text-base md:text-lg" data-icon="material-symbols:star"></span>
                    <span class="iconify text-base md:text-lg" data-icon="material-symbols:star"></span>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<?php include "../includes/language.php"; ?>