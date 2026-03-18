<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<footer class="relative bg-[#121212] py-10">
  <section class="relative z-10 max-w-7xl mx-auto px-5 text-left">

    <div class="grid grid-cols-2 md:grid-cols-3 gap-10 text-white">

      <!-- About -->
      <div class="col-span-2 md:col-span-1">
        <span class="font-bold text-lg bg-gradient-to-r from-[#311E68] to-[#7F55F8] bg-clip-text text-transparent">
          <?= $content['footer']['about'][0]['title'] ?>
        </span>
        <p class="mt-5 text-sm text-white"><?= $content['footer']['about'][0]['desc'] ?></p>
        <div class="flex space-x-5 mt-10">
          <a href="https://www.instagram.com/maxgym.performance/" class="h-8 w-8 flex items-center justify-center bg-transparent border border-[#311E68] rounded">
            <i class="fa-brands fa-instagram fa-lg text-[#311E68]"></i>
          </a>
          <a href="https://api.whatsapp.com/send/?phone=%2B6281563447530&text&type=phone_number&app_absent=0" class="h-8 w-8 flex items-center justify-center bg-transparent border border-[#311E68] rounded">
            <i class="fa-brands fa-whatsapp fa-lg text-[#311E68]"></i>
          </a>
          <a href="" class="h-8 w-8 flex items-center justify-center bg-transparent border border-[#311E68] rounded">
            <i class="fa-brands fa-tiktok fa-lg text-[#311E68]"></i>
          </a>
        </div>
      </div>

      <!-- Links -->
      <div>
        <span class="font-semibold text-lg bg-gradient-to-r from-[#311E68] to-[#7F55F8] bg-clip-text text-transparent">
          <?= $content['footer']['links'][0]['title'] ?>
        </span>
        <ul class="space-y-2 text-base text-white mt-5">
          <li><a href="/" class="hover:text-purple-400 transition"><?= $content['footer']['links'][0]['list'] ?></a></li>
          <li><a href="/pages/services.php" class="hover:text-purple-400 transition"><?= $content['footer']['links'][1]['list'] ?></a></li>
          <li><a href="/pages/membership.php" class="hover:text-purple-400 transition"><?= $content['footer']['links'][2]['list'] ?></a></li>
          <li><a href="/pages/contact.php" class="hover:text-purple-400 transition"><?= $content['footer']['links'][3]['list'] ?></a></li>
        </ul>
      </div>

      <!-- Contact -->
      <div>
        <span class="font-semibold text-lg bg-gradient-to-r from-[#311E68] to-[#7F55F8] bg-clip-text text-transparent">
          <?= $content['footer']['contact'][0]['title'] ?>
        </span>
        <ul class="space-y-2 text-base text-white mt-5">
          <li><?= $content['footer']['contact'][1]['address'] ?></li>
          <li><?= $content['footer']['contact'][2]['hours'] ?></li>
          <li><?= $content['footer']['contact'][3]['title'] ?></li>
        </ul>
      </div>

    </div>
    <p class="mt-10 text-sm text-left bg-gradient-to-r from-[#311E68] to-[#7F55F8] bg-clip-text text-transparent">
      <?= $content['footer']['copyright'] ?>
    </p>

  </section>
</footer>

