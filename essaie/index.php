<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diaporama d'Arrière-plan</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            overflow: hidden;
        }
        .slideshow-container {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: -1;
        }
        .slide {
            position: absolute;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }
        .active {
            opacity: 1;
        }
    </style>
</head>
<body>

<div class="slideshow-container">
    <div class="slide" style="background-image: url('./Pellicule\ Photo/fond2');"></div>
    <div class="slide" style="background-image: url('./Pellicule\ Photo/fond3');"></div>
    <div class="slide" style="background-image: url('./Pellicule\ Photo/fond4');"></div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
    let slides = document.querySelectorAll('.slide');
    let currentSlide = 0;
    const slideInterval = 5000; // Intervalle de changement d'image en millisecondes

    function showNextSlide() {
        slides[currentSlide].classList.remove('active');
        currentSlide = (currentSlide + 1) % slides.length;
        slides[currentSlide].classList.add('active');
    }

    setInterval(showNextSlide, slideInterval);

    // Initialiser le diaporama en montrant la première image
    slides[currentSlide].classList.add('active');
});

</script>
</body>
</html>
