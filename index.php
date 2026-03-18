<?php include_once 'includes/language.php'?>
<!DOCTYPE html>
<html>
<head>

<title>Max Gym - Performance</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/jpg" href="/image/favicon.jpg">
<style>html, body { background-color: #000 !important; }</style>
<script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="/style.css">
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.2 });
        document.querySelectorAll('.boxReveal, .textshow').forEach(el => {
            observer.observe(el);
        });
    });
</script>

</head>
<body class="min-h-screen bg-black text-white">

    <?php
    if (file_exists('components/adpopup.php')) {
        include 'components/adpopup.php';
    } else {
        echo '<!-- ERROR: components/adpopup.php tidak ditemukan -->';
    }
    ?>

    <div>
        <?php include 'components/navbar.php'?>    
        <?php include 'pages/home.php'?>
        <?php include 'pages/adversement2.php'?>
        <?php include 'pages/gallery.php'?>
        <?php include 'pages/testimonial.php'?>
        <?php include 'components/footer.php'?>
    </div>
    <?php include 'components/floating-button.php'?>
    <script src="/js/script.js"></script>
</body>
</html>