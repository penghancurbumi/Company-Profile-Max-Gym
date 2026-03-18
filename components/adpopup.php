<style>
  @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
  @keyframes fadeIn  { from { opacity: 0; } to { opacity: 1; } }
  @keyframes slideUp { from { opacity: 0; transform: translateY(24px); } to { opacity: 1; transform: translateY(0); } }
  .animate-fadeIn  { animation: fadeIn  0.25s ease forwards; }
  .animate-slideUp { animation: slideUp 0.35s ease forwards; }
  .bebas { font-family: 'Bebas Neue', sans-serif; }
  .grad-text { background: linear-gradient(to right,#130049,#3A1E8C,#6943D4); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
  .btn-grad { background: linear-gradient(to right,#280069,#4F00CF); }
</style>

<div class="popup-overlay hidden fixed inset-0 bg-black/60 items-center justify-center z-[9999] p-4">
  <div class="popup-grid relative w-full max-w-[560px] rounded-2xl overflow-hidden bg-[#0A0A0A] grid grid-cols-2">

    <button class="btn-close absolute top-3 right-3 z-10 w-7 h-7 flex items-center justify-center rounded-md border border-white/20 bg-transparent text-white/60 text-lg cursor-pointer">
      ×
    </button>

    <section class="flex flex-col gap-3.5 p-6">
      <span class="text-[10px] font-medium tracking-widest uppercase text-violet-400">
        Ramadhan 2026
      </span>
      <div>
        <h1 class="bebas text-[38px] leading-none text-white tracking-wide m-0">
          RAMADHAN <span class="grad-text">KUAT!</span>
        </h1>
        <p class="mt-1.5 text-[13px] text-white/50">Sehat di bulan Ramadhan</p>
      </div>
      <div>
        <p class="bebas text-[42px] leading-none text-white tracking-wide m-0">15% Off</p>
        <p class="mt-1 text-[11px] text-white/40">*Untuk member reguler</p>
      </div>
      <div>
        <h3 class="text-[13px] font-medium text-white mb-1.5">Syarat &amp; Ketentuan</h3>
        <ul class="list-none m-0 p-0 flex flex-col gap-1.5">
          <li class="flex items-start gap-1.5 text-[11px] text-white/60">
            <svg class="mt-0.5 shrink-0" width="12" height="12" viewBox="0 0 13 13" fill="none"><path d="M2 6.5L5.2 9.5L11 3.5" stroke="#a78bfa" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            Berlaku untuk kategori Regular
          </li>
          <li class="flex items-start gap-1.5 text-[11px] text-white/60">
            <svg class="mt-0.5 shrink-0" width="12" height="12" viewBox="0 0 13 13" fill="none"><path d="M2 6.5L5.2 9.5L11 3.5" stroke="#a78bfa" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            Mencakup Extended Member &amp; New Member
          </li>
          <li class="flex items-start gap-1.5 text-[11px] text-white/60">
            <svg class="mt-0.5 shrink-0" width="12" height="12" viewBox="0 0 13 13" fill="none"><path d="M2 6.5L5.2 9.5L11 3.5" stroke="#a78bfa" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            Promo hanya berlaku di bulan Ramadhan 2026
          </li>
        </ul>
      </div>
      <div class="flex flex-col gap-2.5 mt-auto pt-1.5">
        <a href="https://api.whatsapp.com/send/?phone=6281563447530" class="btn-grad w-full text-center text-white text-[13px] font-medium py-2.5 px-4 rounded-lg border-none cursor-pointer no-underline">
          Daftar Sekarang
        </a>
        <button class="btn-close bg-transparent border-none text-[11px] text-white/30 cursor-pointer py-1">
          Tidak, Terima kasih
        </button>
      </div>
    </section>

    <figure class="popup-image-col m-0 relative overflow-hidden min-h-[240px] max-sm:hidden">
      <div class="absolute inset-0 bg-gradient-to-r from-[rgba(13,13,26,0.8)] to-transparent z-[1]"></div>
      <img src="/image/adpopup.png" alt="Ramadhan Kuat visual" class="w-full h-full object-cover" />
    </figure>

  </div>
</div>

<script>
(function () {
  var overlay = document.querySelector('.popup-overlay');
  if (!overlay) return;

  overlay.classList.remove('hidden');
  overlay.classList.add('flex', 'animate-fadeIn');

  function closePopup() {
    overlay.remove();
  }

  document.querySelectorAll('.btn-close').forEach(function (btn) {
    btn.addEventListener('click', closePopup);
  });

  overlay.addEventListener('click', function (e) {
    if (e.target === overlay) closePopup();
  });
})();
</script>