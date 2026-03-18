  <!-- ─── HERO ─── -->
  <section class="relative h-screen flex items-center justify-center text-white bg-cover bg-center" style="background-image: url('../image/hero-bg.png')">
    <div class="absolute inset-0 bg-black bg-opacity-80"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-5 md:px-10 w-full">
      <div class="flex flex-col-reverse md:flex-row items-center justify-between gap-10 min-h-[30vh] md:min-h-[60vh]">
        <div class="md:w-1/2 text-center md:text-left">
          <h1 class="text-3xl md:text-5xl font-bold leading-tight mb-4 animate-fadeUp">Transform Your
            <span class="block mt-2">Body With <span class="bg-gradient-to-r from-[#130049] via-[#3A1E8C] to-[#6943D4] bg-clip-text text-transparent">MaxGym</span></span>
          </h1>
          <p class="text-gray-300 text-sm md:text-base mb-6 max-w-lg mx-auto md:mx-0 animate-fadeUp delay-1">
            <?= $content['home']['hero_desc']; ?>.
          </p>
          <div class="flex justify-center md:justify-start gap-4 animate-fadeUp delay-2">
            <a href="/pages/membership.php" class="px-6 py-3 bg-gradient-to-r from-[#280069] to-[#4F00CF] rounded-lg font-semibold text-[10px] md:text-sm hover:opacity-90 transition"><?= $content['home']['hero_join']; ?></a>
            <a href="#program" class="px-6 py-3 border border-white/30 rounded-lg text-[10px] md:text-sm hover:bg-white hover:text-black transition"><?= $content['home']['hero_view']; ?></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ─── PROGRAM ─── -->
  <section id="program" class="py-16 md:py-20 text-white">
    <div class="max-w-7xl mx-auto px-5 md:px-10">

      <div class="text-center mb-12 animate-fadeUp">
        <div class="flex items-center justify-center gap-3 mb-4">
          <div class="w-8 h-0.5 bg-gradient-to-r from-[#311E68] to-[#7F55F8]"></div>
          <p class="text-[10px] md:text-sm font-bold bg-gradient-to-r from-[#311E68] to-[#7F55F8] bg-clip-text text-transparent italic"><?= $content['program']['program_p']; ?></p>
          <div class="w-8 h-0.5 bg-gradient-to-r from-[#311E68] to-[#7F55F8]"></div>
        </div>
        <h2 class="text-2xl md:text-4xl font-bold uppercase mb-3"><?= $content['program']['program_our']. " "; ?><span class="bg-gradient-to-r from-[#311E68] to-[#7F55F8] bg-clip-text text-transparent"><?= $content['program']['program_program']; ?></span></h2>
        <p class="text-xs md:text-sm text-gray-400 max-w-xl mx-auto"><?= $content['program']['program_desc']; ?></p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

    <!-- Personal Training -->
      <div class="relative overflow-hidden rounded-xl h-[220px] md:h-[280px] group cursor-pointer boxReveal">
        <img src="../image/personal-trainning.png" alt="Personal Training"
          class="w-full h-full object-cover absolute inset-0 transition duration-500 group-hover:scale-105 grayscale group-hover:grayscale-0">
        <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/30 to-transparent group-hover:from-[#14003c]/95 transition duration-300"></div>
        <div class="absolute bottom-0 left-0 right-0 p-4 md:p-6 flex items-end justify-between">
          <div>
            <h3 class="text-base md:text-xl font-bold uppercase mb-1"><?= $content['program']['list'][0]['title']; ?></h3>
            <p class="text-xs text-gray-300 max-w-xs"><?= $content['program']['list'][0]['desc']; ?></p>
          </div>
          <a href="/pages/services.php"
            class="ml-4 w-9 h-9 flex-shrink-0 rounded-full bg-gradient-to-t from-[#280069] to-[#4F00CF] hover:bg-purple-600 flex items-center justify-center transition">
            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
            </svg>
          </a>
        </div>
      </div>

      <!-- Strength Training -->
      <div class="relative overflow-hidden rounded-xl h-[220px] md:h-[280px] group cursor-pointer boxReveal">
        <img src="../image/strenght-trainning.png" alt="Strength Training"
          class="w-full h-full object-cover absolute inset-0 transition duration-500 group-hover:scale-105 grayscale group-hover:grayscale-0">
        <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/30 to-transparent group-hover:from-[#14003c]/95 transition duration-300"></div>
        <div class="absolute bottom-0 left-0 right-0 p-4 md:p-6 flex items-end justify-between">
          <div>
            <h3 class="text-base md:text-xl font-bold uppercase mb-1"><?= $content['program']['list'][1]['title']; ?></h3>
            <p class="text-xs text-gray-300 max-w-xs"><?= $content['program']['list'][1]['desc']; ?></p>
          </div>
          <a href="/pages/services.php"
            class="ml-4 w-9 h-9 flex-shrink-0 rounded-full bg-gradient-to-t from-[#280069] to-[#4F00CF] hover:bg-purple-600 flex items-center justify-center transition">
            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
            </svg>
          </a>
        </div>
      </div>

      <!-- Group Class / Zumba -->
      <div class="relative overflow-hidden rounded-xl h-[220px] md:h-[280px] group cursor-pointer boxReveal">
        <img src="../image/zumba-class.png" alt="Group Class"
          class="w-full h-full object-cover absolute inset-0 transition duration-500 group-hover:scale-105 grayscale group-hover:grayscale-0">
        <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/30 to-transparent group-hover:from-[#14003c]/95 transition duration-300"></div>
        <div class="absolute bottom-0 left-0 right-0 p-4 md:p-6 flex items-end justify-between">
          <div>
            <h3 class="text-base md:text-xl font-bold uppercase mb-1"><?= $content['program']['list'][2]['title']; ?></h3>
            <p class="text-xs text-gray-300 max-w-xs"><?= $content['program']['list'][2]['desc']; ?></p>
          </div>
          <a href="/pages/services.php"
            class="ml-4 w-9 h-9 flex-shrink-0 rounded-full bg-gradient-to-t from-[#280069] to-[#4F00CF] hover:bg-purple-600 flex items-center justify-center transition">
            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
            </svg>
          </a>
        </div>
      </div>

      <!-- Fitness Training / Cardio -->
      <div class="relative overflow-hidden rounded-xl h-[220px] md:h-[280px] group cursor-pointer boxReveal">
        <img src="../image/fitness-trainning.png" alt="Fitness Training"
          class="w-full h-full object-cover absolute inset-0 transition duration-500 group-hover:scale-105 grayscale group-hover:grayscale-0">
        <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/30 to-transparent group-hover:from-[#14003c]/95 transition duration-300"></div>
        <div class="absolute bottom-0 left-0 right-0 p-4 md:p-6 flex items-end justify-between">
          <div>
            <h3 class="text-base md:text-xl font-bold uppercase mb-1"><?= $content['program']['list'][3]['title']; ?></h3>
            <p class="text-xs text-gray-300 max-w-xs"><?= $content['program']['list'][3]['desc']; ?></p>
          </div>
          <a href="/pages/services.php"
            class="ml-4 w-9 h-9 flex-shrink-0 rounded-full bg-gradient-to-t from-[#280069] to-[#4F00CF] hover:bg-purple-600 flex items-center justify-center transition">
            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- ─── WHY CHOOSE US ─── -->
  <section class="py-16 md:py-20 text-white bg-[#0A0A0A]">
    <div class="max-w-7xl mx-auto px-5 md:px-10">

      <div class="text-center mb-12 animate-fadeUp">
        <div class="flex items-center justify-center gap-3 mb-4">
          <div class="w-8 h-0.5 bg-gradient-to-r from-[#311E68] to-[#7F55F8]"></div>
          <p class="text-[10px] md:text-sm font-bold bg-gradient-to-r from-[#311E68] to-[#7F55F8] bg-clip-text text-transparent italic"><?= $content['choose']['choose_p']; ?></p>
          <div class="w-8 h-0.5 bg-gradient-to-r from-[#311E68] to-[#7F55F8]"></div>
        </div>
        <h2 class="text-2xl md:text-4xl font-bold uppercase mb-3"><?= $content['choose']['choose_title1']. " "; ?><span class="bg-gradient-to-r from-[#311E68] to-[#7F55F8] bg-clip-text text-transparent"><?= $content['choose']['choose_title2']; ?></span></h2>
        <p class="text-xs md:text-sm text-gray-400 max-w-xl mx-auto"><?= $content['choose']['choose_desc']; ?></p>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

        <div class="text-center bg-[#121212] border border-white/5 rounded-2xl p-6 hover:border-purple-700 transition duration-300 boxReveal">
          <div class="w-14 h-14 flex items-center justify-center rounded-xl bg-gradient-to-t from-[#280069] to-[#4F00CF] mb-4 mx-auto">
            <span class="iconify h-7 w-7 text-white" data-icon="mdi:medal"></span>
          </div>
          <h3 class="text-base font-semibold mb-2"><?= $content['choose']['list']['0']['title']; ?></h3>
          <p class="text-xs text-gray-400"><?= $content['choose']['list']['0']['desc']; ?></p>
        </div>

        <div class="text-center bg-[#121212] border border-white/5 rounded-2xl p-6 hover:border-purple-700 transition duration-300 boxReveal">
          <div class="w-14 h-14 flex items-center justify-center rounded-xl bg-gradient-to-t from-[#280069] to-[#4F00CF] mb-4 mx-auto">
            <span class="iconify h-7 w-7 text-white" data-icon="mdi:dumbbell"></span>
          </div>
          <h3 class="text-base font-semibold mb-2"><?= $content['choose']['list']['1']['title']; ?></h3>
          <p class="text-xs text-gray-400"><?= $content['choose']['list']['1']['desc']; ?></p>
        </div>

        <div class="text-center bg-[#121212] border border-white/5 rounded-2xl p-6 hover:border-purple-700 transition duration-300 boxReveal">
          <div class="w-14 h-14 flex items-center justify-center rounded-xl bg-gradient-to-t from-[#280069] to-[#4F00CF] mb-4 mx-auto">
            <span class="iconify h-7 w-7 text-white" data-icon="mdi:tag-outline"></span>
          </div>
          <h3 class="text-base font-semibold mb-2"><?= $content['choose']['list']['2']['title']; ?></h3>
          <p class="text-xs text-gray-400"><?= $content['choose']['list']['2']['desc']; ?></p>
        </div>

        <div class="text-center bg-[#121212] border border-white/5 rounded-2xl p-6 hover:border-purple-700 transition duration-300 boxReveal">
          <div class="w-14 h-14 flex items-center justify-center rounded-xl bg-gradient-to-t from-[#280069] to-[#4F00CF] mb-4 mx-auto">
            <span class="iconify h-7 w-7 text-white" data-icon="mdi:heart-outline"></span>
          </div>
          <h3 class="text-base font-semibold mb-2"><?= $content['choose']['list']['3']['title']; ?></h3>
          <p class="text-xs text-gray-400"><?= $content['choose']['list']['3']['desc']; ?></p>
        </div>

      </div>
    </div>
  </section>