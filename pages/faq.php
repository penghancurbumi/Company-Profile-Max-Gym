<!-- FAQ SECTION -->
<section class="w-full bg-black">
    <div class="flex flex-col md:flex-row">

        <!-- LEFT: Heading -->
        <div class="w-full md:w-5/12 px-8 py-10 md:px-14 md:py-20 flex items-start">
            <div class="max-w-sm md:ml-auto textshow">
                <p class="text-white text-xs md:text-sm mb-2 text-gray-500"><?= $content['faq']['sub']?></p>
                <h2 class="text-3xl md:text-4xl font-black text-white leading-tight mb-5"><?= $content['faq']['title']?></h2>
                <p class="text-white/70 text-sm md:text-base leading-relaxed"><?= $content['faq']['desc']?></p>
                <div class="w-16 h-0.5 bg-purple-700 mt-5"></div>
            </div>
        </div>
        

        <!-- RIGHT: FAQ Dropdown -->
        <div class="w-full md:w-7/12 px-8 py-16 md:px-14 md:py-20">
            <div class="max-w-2xl space-y-0 textshow">

                <!-- FAQ Item -->
                <div class="faq-item border-b border-gray-800">
                    <button class="faq-trigger w-full flex items-center justify-between py-5 text-left gap-4">
                        <p class="text-white text-sm md:text-base font-medium"><?= $content['faq']['list'][0]['title']?></p>
                        <svg class="faq-icon flex-shrink-0 w-5 h-5 text-purple-400 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <p class="text-gray-400 text-sm leading-relaxed pb-5 pl-0"><?= $content['faq']['list'][0]['desc']?></p>
                    </div>
                </div>

                <!-- FAQ Item -->
                <div class="faq-item border-b border-gray-800">
                    <button class="faq-trigger w-full flex items-center justify-between py-5 text-left gap-4">
                        <p class="text-white text-sm md:text-base font-medium"><?= $content['faq']['list'][1]['title']?></p>
                        <svg class="faq-icon flex-shrink-0 w-5 h-5 text-purple-400 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <p class="text-gray-400 text-sm leading-relaxed pb-5"><?= $content['faq']['list'][1]['desc']?></p>
                    </div>
                </div>

                <!-- FAQ Item -->
                <div class="faq-item border-b border-gray-800">
                    <button class="faq-trigger w-full flex items-center justify-between py-5 text-left gap-4">
                        <p class="text-white text-sm md:text-base font-medium"><?= $content['faq']['list'][2]['title']?></p>
                        <svg class="faq-icon flex-shrink-0 w-5 h-5 text-purple-400 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <p class="text-gray-400 text-sm leading-relaxed pb-5"><?= $content['faq']['list'][2]['desc']?></p>
                    </div>
                </div>

                <!-- FAQ Item -->
                <div class="faq-item border-b border-gray-800">
                    <button class="faq-trigger w-full flex items-center justify-between py-5 text-left gap-4">
                        <p class="text-white text-sm md:text-base font-medium"><?= $content['faq']['list'][3]['title']?></p>
                        <svg class="faq-icon flex-shrink-0 w-5 h-5 text-purple-400 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <p class="text-gray-400 text-sm leading-relaxed pb-5"><?= $content['faq']['list'][3]['desc']?></p>
                    </div>
                </div>

                <!-- FAQ Item -->
                <div class="faq-item border-b border-gray-800">
                    <button class="faq-trigger w-full flex items-center justify-between py-5 text-left gap-4">
                        <p class="text-white text-sm md:text-base font-medium"><?= $content['faq']['list'][4]['title']?></p>
                        <svg class="faq-icon flex-shrink-0 w-5 h-5 text-purple-400 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                        <p class="text-gray-400 text-sm leading-relaxed pb-5"><?= $content['faq']['list'][4]['desc']?></p>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

<script>
    document.querySelectorAll('.faq-trigger').forEach(trigger => {
        trigger.addEventListener('click', () => {
            const item = trigger.parentElement;
            const answer = item.querySelector('.faq-answer');
            const icon = trigger.querySelector('.faq-icon');
            const isOpen = answer.style.maxHeight && answer.style.maxHeight !== '0px';

            // Tutup semua
            document.querySelectorAll('.faq-answer').forEach(a => a.style.maxHeight = '0px');
            document.querySelectorAll('.faq-icon').forEach(i => i.style.transform = 'rotate(0deg)');

            // Buka yang diklik (jika belum terbuka)
            if (!isOpen) {
                answer.style.maxHeight = answer.scrollHeight + 'px';
                icon.style.transform = 'rotate(180deg)';
            }
        });
    });
</script>
 <?php include "includes/language.php"; ?>