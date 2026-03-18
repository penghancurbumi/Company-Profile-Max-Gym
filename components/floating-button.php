<a
    href="https://api.whatsapp.com/send/?phone=6281563447530"
    target="_blank"
    id="scrollBtn" 
    class="fixed bottom-6 right-6 md:bottom-10 md:right-10 bg-gradient-to-t from-[#280069] to-[#4F00CF] 
           text-white w-14 h-14 rounded-full flex 
           items-center justify-center shadow-lg z-40">
    <i class="fa-brands fa-whatsapp fa-2xl text-white"></i>
</a>

<script>
const scrollBtn = document.getElementById("scrollBtn");
scrollBtn.classList.remove("hidden");

scrollBtn.addEventListener("click", function(){
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
});
</script>