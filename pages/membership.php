<?php include "../includes/language.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Max Gym - Performance</title>
  <style>html, body { background-color: #000 !important; }</style>
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/style.css">
    <link rel="icon" type="image/jpg" href="/image/favicon.jpg">
    <style>
     
    .divider {
      height: 1px;
      background: linear-gradient(to right, transparent, rgba(139, 92, 246, 0.4), transparent);
    }

    .btn-join {
      background: linear-gradient(to right,#280069, #4F00CF);
      transition: all 0.3s ease;
      letter-spacing: 0.05em;
    }
    </style>
</head>
<body>
  <?php include "../components/navbar.php"?>

<section class="relative min-h-[60vh] pt-20 flex items-center justify-center text-white bg-cover bg-center grayscale" 
  style="background-image: url('../image/image-adverement.jpg')">
    <div class="absolute inset-0 bg-black opacity-80"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-5 md:px-10 w-full">
        <div class="flex flex-col items-center text-center justify-center">
          <h2 class="text-4xl md:text-5xl font-semibold mb-5 animate-fadeUp"><?= $content['membership']['title']?></h2>
          <p class="text-xs md:text-sm font-light animate-fadeUp delay-1"><?= $content['membership']['nav']?></p>
        </div>
    </div>
</section>

<section class="py-14 sm:py-16 md:py-20 bg-black">
  <div class="max-w-5xl mx-auto px-4 sm:px-6 md:px-10">

    <div class="text-center mb-12 text-white">
      <div class="flex items-center justify-center gap-3 mb-5 animate-fadeUp">
          <div class="w-8 h-0.5 bg-gradient-to-r from-[#311E68] to-[#7F55F8]"></div>
          <p class="text-[10px] md:text-sm font-bold bg-gradient-to-r from-[#311E68] to-[#7F55F8] bg-clip-text text-transparent italic"><?= $content['membership']['plan']['sub']?></p>
          <div class="w-8 h-0.5 bg-gradient-to-r from-[#311E68] to-[#7F55F8]"></div>
      </div>
      <h2 class="text-2xl sm:text-3xl md:text-5xl font-bold textshow uppercase mb-5 animate-fadeUp delay-1"><?= $content['membership']['plan']['title1']. " "?> <span class="bg-gradient-to-r from-[#311E68] to-[#7F55F8] bg-clip-text text-transparent"><?= $content['membership']['plan']['title2']?></span></h2>
      <p class="text-[10px] md:text-sm mb-5 animate-fadeUp delay-2"><?= $content['membership']['plan']['desc']?></p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-10">

      <!-- CARD 1 -->
      <div class="relative bg-[#111111] rounded-sm p-4 md:p-6 boxReveal text-white">
        <div class="flex items-center justify-between mb-4">
          <span class="text-purple-700 text-xs font-semibold tracking-wider"><?= $content['membership']['plan']['list'][0]['sub']?></span>
        </div>

        <h3 class="text-2xl md:text-3xl mb-1 tracking-wide"><?= $content['membership']['plan']['list'][0]['title']?></h3>
        <p class="text-xs md:text-sm text-gray-500 mb-6"><?= $content['membership']['plan']['list'][0]['desc']?></p>
        
        
        <div class="mb-5">
          <div class="flex items-center gap-2 mb-2">
            <div class="check-icon">
              <svg class="w-2.5 h-2.5 text-white" fill="none" viewbox="0 0 24 24" stroke="CurrentColor" stroke-wide="3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
              </svg>
            </div>
            <p class="text-xs text-gray-400 uppercase tracking-wider font-medium"><?= $content['membership']['plan']['list'][0]['package'][0]['title']?></p>
          </div>
          <div class="flex items-baseline gap-1 pl-5 mb-2">
            <span class="text-3xl text-white"><?= $content['membership']['plan']['list'][0]['package'][0]['price']?></span>
            <span class="text-gray-500 text-xs"><?= $content['membership']['plan']['list'][0]['package'][0]['month']?></span>
          </div>
        </div>

        <div class="divider mb-6"></div>

        <div class="mb-8">
          <div class="flex items-center gap-2 mb-2">
            <div class="check-icon">
              <svg class="w-2.5 h-2.5 text-white" fill="none" viewbox="0 0 24 24" stroke="CurrentColor" stroke-wide="3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
              </svg>
            </div>
            <p class="text-xs text-gray-400 uppercase tracking-wider font-medium"><?= $content['membership']['plan']['list'][0]['package'][1]['title']?></p>
          </div>
          <div class="flex items-baseline gap-1 pl-5 mb-2">
            <span class="text-3xl text-white"><?= $content['membership']['plan']['list'][0]['package'][1]['price']?></span>
            <span class="text-gray-500 text-xs"><?= $content['membership']['plan']['list'][0]['package'][1]['visit']?></span>
          </div>
          <div class="divider mb-4"></div>

          <div class="flex flex-row items-center gap-2 ml-5">
            <div class="check-icon">
              <svg class="w-2.5 h-2.5 text-white bg-purple-700 rounded" fill="none" viewbox="0 0 24 24" stroke="CurrentColor" stroke-wide="3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
              </svg>
            </div>
            <p class="text-white text-xs"><?= $content['membership']['plan']['list'][0]['benefit']['benefit_1']?></p>
          </div>

          <div class="flex flex-row items-center gap-2 ml-5">
            <div class="check-icon">
              <svg class="w-2.5 h-2.5 text-white bg-purple-700 rounded" fill="none" viewbox="0 0 24 24" stroke="CurrentColor" stroke-wide="3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
              </svg>
            </div>
            <p class="text-whie text-xs"><?= $content['membership']['plan']['list'][0]['benefit']['benefit_2']?></p>
          </div>
        
          <div class="flex flex-row items-center gap-2 ml-5">
            <div class="check-icon">
              <svg class="w-2.5 h-2.5 text-white bg-purple-700 rounded" fill="none" viewbox="0 0 24 24" stroke="CurrentColor" stroke-wide="3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
              </svg>
            </div>
                      <p class="text-white text-xs"><?= $content['membership']['plan']['list'][0]['benefit']['benefit_3']?></p>
          </div>
          
        </div>
        <a href="https://api.whatsapp.com/send/?phone=6281563447530" 
            target="_blank"
            class=" btn-join block text-center font-semibold text-sm py-4 uppercase tracking-wider">Get Started</a>
      </div>

  <!-- CARD 2 -->
  <div class="relative bg-[#111111] rounded-sm p-4 md:p-6 boxReveal text-white">
    <div class="flex items-center justify-between mb-4">
      <span class="text-purple-700 text-xs font-semibold tracking-wider"><?= $content['membership']['plan']['list'][1]['sub'] ?></span>
    </div>

    <h3 class="text-2xl md:text-3xl mb-1 tracking-wide"><?= $content['membership']['plan']['list'][1]['title'] ?></h3>
    <p class="text-xs md:text-sm text-gray-500 mb-6"><?= $content['membership']['plan']['list'][1]['desc'] ?></p>

    <div class="mb-5">
      <div class="flex items-center gap-2 mb-2">
        <div class="check-icon flex-shrink-0">
          <svg class="w-2.5 h-2.5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth="3">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
          </svg>
        </div>
        <p class="text-xs text-gray-400 uppercase tracking-wider font-medium"><?= $content['membership']['plan']['list'][1]['package'][0]['title'] ?></p>
      </div>
      <div class="flex items-baseline gap-1 pl-5">
        <span class="text-3xl text-white"><?= $content['membership']['plan']['list'][1]['package'][0]['price'] ?></span>
        <span class="text-gray-500 text-xs"><?= $content['membership']['plan']['list'][1]['package'][0]['month'] ?></span>
      </div>
    </div>

    <div class="divider mb-6"></div>

    <!-- Sama dengan card 1: package[1] + divider + benefit dalam satu div mb-8 -->
    <div class="mb-8">
      <div class="flex items-center gap-2 mb-2">
        <div class="check-icon flex-shrink-0">
          <svg class="w-2.5 h-2.5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth="3">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
          </svg>
        </div>
        <p class="text-xs text-gray-400 uppercase tracking-wider font-medium"><?= $content['membership']['plan']['list'][1]['package'][1]['title'] ?></p>
      </div>
      <div class="flex items-baseline gap-1 pl-5 mb-2">
        <span class="text-3xl text-white"><?= $content['membership']['plan']['list'][1]['package'][1]['price'] ?></span>
        <span class="text-gray-500 text-xs"><?= $content['membership']['plan']['list'][1]['package'][1]['visit'] ?></span>
      </div>

      <div class="divider mb-4"></div>

      <div class="flex flex-row items-center gap-2 ml-5">
        <div class="check-icon flex-shrink-0">
          <svg class="w-2.5 h-2.5 text-white bg-purple-700 rounded" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth="3">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
          </svg>
        </div>
        <p class="text-white text-xs"><?= $content['membership']['plan']['list'][1]['benefit']['benefit_1'] ?></p>
      </div>

      <div class="flex flex-row items-center gap-2 ml-5  ">
        <div class="check-icon flex-shrink-0">
          <svg class="w-2.5 h-2.5 text-white bg-purple-700 rounded" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth="3">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
          </svg>
        </div>
        <p class="text-white text-xs"><?= $content['membership']['plan']['list'][1]['benefit']['benefit_2'] ?></p>
      </div>

      <div class="flex flex-row items-center gap-2 ml-5">
        <div class="check-icon flex-shrink-0">
          <svg class="w-2.5 h-2.5 text-white bg-purple-700 rounded" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth="3">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
          </svg>
        </div>
        <p class="text-white text-xs"><?= $content['membership']['plan']['list'][1]['benefit']['benefit_3'] ?></p>
      </div>
    </div>

    <a href="https://api.whatsapp.com/send/?phone=6281563447530"
      target="_blank"
      class="btn-join block text-center font-semibold text-sm py-4 uppercase tracking-wider">Get Started</a>
    </div>
  </div>
</section>
<?php include "../pages/adversement1.php"?>
<?php include '../pages/faq.php'?>
<?php include "../components/footer.php"?>
<?php include "../components/floating-button.php"?>
<script src="/js/script.js"></script>
</body>
</html>
