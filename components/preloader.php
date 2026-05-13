<!-- Global Preloader with Plain CSS (No Tailwind dependency) -->
<style>
    #global-preloader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background-color: #000000;
        z-index: 999999;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        transition: opacity 0.5s ease;
        margin: 0;
        padding: 0;
    }
    .loader-wrapper {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 60px;
        height: 60px;
        margin-bottom: 20px;
    }
    .loader-ring {
        position: absolute;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        border: 4px solid rgba(255, 255, 255, 0.1);
        border-top-color: #4F00CF;
        animation: spin 1s linear infinite;
    }
    .loader-text-bottom {
        color: #9ca3af;
        font-family: sans-serif;
        font-size: 12px;
        letter-spacing: 0.2em;
        text-transform: uppercase;
        animation: pulse-op 2s ease-in-out infinite;
        margin: 0;
    }
    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
    @keyframes pulse-op {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.5; }
    }
</style>

<div id="global-preloader">
    <div class="loader-wrapper">
        <div class="loader-ring"></div>
    </div>
    <p class="loader-text-bottom">Loading...</p>
</div>

<script>
    // Hide preloader when the page is fully loaded (images, CSS, etc.)
    window.addEventListener('load', function() {
        const preloader = document.getElementById('global-preloader');
        if (preloader) {
            preloader.style.opacity = '0';
            setTimeout(() => {
                preloader.style.display = 'none';
            }, 500); // Matches the 0.5s CSS transition
        }
    });
</script>
