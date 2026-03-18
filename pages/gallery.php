<section id="gallery" class="py-16 md:py-20">
    <div class="max-w-7xl mx-auto px-5 md:px-10">
     <div class="text-center mb-12 animate-fadeUp">
        <div class="flex items-center justify-center gap-3 mb-4">
          <div class="w-8 h-0.5 bg-gradient-to-r from-[#311E68] to-[#7F55F8]"></div>
          <p class="text-[10px] md:text-sm font-bold bg-gradient-to-r from-[#311E68] to-[#7F55F8] bg-clip-text text-transparent italic"><?= $content['gallery']['sub']?></p>
          <div class="w-8 h-0.5 bg-gradient-to-r from-[#311E68] to-[#7F55F8]"></div>
        </div>
        <h2 class="text-2xl md:text-4xl font-bold uppercase mb-3"><?= $content['gallery']['title1']?> <span class="bg-gradient-to-r from-[#311E68] to-[#7F55F8] bg-clip-text text-transparent"><?= $content['gallery']['title2']?></span></h2>
        <p class="text-xs md:text-sm text-gray-400 max-w-xl mx-auto"><?= $content['gallery']['desc']?></p>
      </div>
      
    <div class="grid grid-cols-1 md:grid-cols-12 gap-4 sm:gap-6 boxReveal">
        <div class="col-span-12 md:col-span-7 overflow-hidden rounded-2xl border border-white/10 group cursor-pointer">
            <img src="image/image1.jpg" alt="gallery 1"
                class="w-full h-[200px] sm:h-[250px] md:h-[300px] object-cover transition duration-500 group-hover:scale-110">
        </div>

        <div class="col-span-12 md:col-span-5 overflow-hidden rounded-2xl border border-white/10 group cursor-pointer">
            <img src="image/image2.jpg" alt="gallery 2"
                class="w-full h-[200px] sm:h-[250px] md:h-[300px] object-cover transition duration-500 group-hover:scale-110">
        </div>

        <div class="col-span-12 md:col-span-5 overflow-hidden rounded-2xl border border-white/10 group cursor-pointer">
            <img src="image/image3.jpg" alt="gallery 3"
                class="w-full h-[200px] sm:h-[250px] md:h-[350px] object-cover transition duration-500 group-hover:scale-110">
        </div>

        <div class="col-span-12 md:col-span-7 overflow-hidden rounded-2xl border border-white/10 group cursor-pointer">
            <img src="image/image4.jpg" alt="gallery 4"
                class="w-full h-[200px] sm:h-[250px] md:h-[350px] object-cover transition duration-500 group-hover:scale-110">
        </div>
    </div>
</div>
</section>