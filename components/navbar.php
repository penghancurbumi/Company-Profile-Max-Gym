 <?php include "../includes/language.php"; ?>
<nav class="absolute top-0 left-0 w-full text-white z-50">
    <div class="max-w-7xl mx-auto px-6 md:px-10">

        <div class="flex items-center h-20">

        <div class="flex-1 font-bold text-xl">
            <span class="text-white">Max
            <span class="bg-gradient-to-r from-[#311E68] to-[#7F55F8] bg-clip-text text-transparent">Gym</span>
            </span>
        </div>

        <div class="hidden md:flex flex-1 space-x-10 text-base font-medium">
            <a href="/" class="hover:text-purple-400 transition"><?= $content['navbar']['home']; ?></a>
            <a href="/pages/services.php" class="hover:text-purple-400 transition"><?= $content['navbar']['services']; ?></a>
            <a href="/pages/membership.php" class="hover:text-purple-400 transition"><?= $content['navbar']['membership']; ?></a>
            <a href="/pages/contact.php" class="hover:text-purple-400 transition"><?= $content['navbar']['contact']; ?></a>
        </div>

        <div class="flex flex-1 justify-end items-center gap-4">
            <?php include __DIR__ . "/language-switcher.php"; ?>
            <button id="menu-btn" class="md:hidden text-3xl">
                <span class="iconify" data-icon="ei:navicon"></span>
            </button>
        </div>

        <div id="overlay" class="fixed inset-0 bg-black/50 hidden z-40"></div>

        <div id="sidebar"class="fixed md:none top-0 right-0 h-screen w-full z-50 flex flex-col 
                shadow-lg items-start justify-start bg-[#121212]/50 backdrop-blur px-8 mb-8 
                font-semibold translate-x-full transition-transform duration-300">

                <div class="flex items-center py-5 w-full mb-5">
                    <div class="font-bold text-xl">
                        <span class="text-white">Max
                        <span class="bg-gradient-to-r from-[#311E68] to-[#7F55F8] bg-clip-text text-transparent">Gym</span>
                        </span>
                    </div>

                    <button id="close-btn" class="text-3xl ml-auto">
                        <span class="iconify text-white" data-icon="mdi:close"></span>
                    </button>
                </div>
                    <a href="/" class="sidebar-link text-lg block w-full py-3 border-b border-white/10 hover:text-[#311E68] transition">
                        <?= $content['navbar']['home']; ?>
                    </a>
                    <a href="/pages/services.php" class="sidebar-link text-lg block w-full py-3 border-b border-white/10 hover:text-[#311E68] transition">
                        <?= $content['navbar']['services']; ?>
                    </a>
                    <a href="/pages/Membership.php" class="sidebar-link text-lg block w-full py-3 border-b border-white/10 hover:text-[#311E68] transition">
                        <?= $content['navbar']['membership']; ?>
                    </a>
                    <a href="/pages/contact.php" class="sidebar-link text-lg block w-full py-3 border-b border-white/10 hover:text-[#311E68]
                     transition">
                    <?= $content['navbar']['contact']; ?>
                </a>
        </div>
       <script>
            const menuBtn = document.getElementById("menu-btn");
            const sidebar = document.getElementById("sidebar");
            const closeBtn = document.getElementById("close-btn");
            const overlay = document.getElementById("overlay");

            // buka/tutup sidebar
            menuBtn.addEventListener("click", () => {
                sidebar.classList.remove("translate-x-full");
                overlay.classList.remove("hidden");
                document.body.classList.add("overflow-hidden");
            });
            closeBtn.addEventListener("click", () => {
                sidebar.classList.add("translate-x-full");
                overlay.classList.add("hidden");
                document.body.classList.remove("overflow-hidden");
            });
            overlay.addEventListener("click", () => {
                sidebar.classList.add("translate-x-full");
                overlay.classList.add("hidden");
                document.body.classList.remove("overflow-hidden");
            });

           const joinBtn = document.getElementById('joinNowBtn');

            joinBtn.addEventListener('click', (e) => {
                e.preventDefault();

                // Tutup sidebar dulu
                sidebar.classList.add("translate-x-full");
                overlay.classList.add("hidden");
                document.body.classList.remove("overflow-hidden");

                // Scroll ke form setelah animasi sidebar selesai
                setTimeout(() => {
                    const contactForm = document.querySelector('#contactForm');
                    if (contactForm) {
                        // dapatkan posisi elemen relatif terhadap viewport
                        const rect = contactForm.getBoundingClientRect();
                        const scrollTop = window.scrollY || window.pageYOffset;

                        // hitung posisi scroll agar elemen berada di tengah viewport
                        const scrollTo = rect.top + scrollTop - (window.innerHeight / 1) + (rect.height / 1);

                        window.scrollTo({
                            top: scrollTo,
                            behavior: 'smooth' // smooth scroll
                        });
                    }
                }, 200); // delay sesuai durasi animasi sidebar
            });
            </script>
        </div>
    </div>
</nav>
