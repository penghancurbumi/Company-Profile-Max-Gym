<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
<?php

$toggleLang = $lang === "id" ? "en" : "id";
$flag = $lang === "id" ? "id" : "gb";

?>

<a href="?lang=<?= $toggleLang ?>" 
   class="ml-auto group relative flex items-center gap-2 px-3 py-2 rounded-lg border border-gray-300 hover:border-purple-600 transition-all duration-300 cursor-pointer">

    <img 
        src="https://hatscripts.github.io/circle-flags/flags/<?= $flag ?>.svg"
        class="w-5 h-5"
    >

    <span class="text-xs font-semibold uppercase">
        <?= $lang ?? 'id' ?>
    </span>

    <iconify-icon 
        icon="mdi:swap-horizontal" 
        class="hidden md:inline-block text-base text-gray-500 group-hover:text-purple-500">
    </iconify-icon>

</a>
