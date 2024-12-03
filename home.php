<!-- home.php -->
<?php include 'header.php'; ?>
<div class="conteudo">
    <p>
        <br>
        Bem-vindo à nossa confeitaria! Confira nossos deliciosos doces e produtos exclusivos.
    </p>
    <div class="carrossel-container">
        <div class="carrossel">
            <div class="slide"><img src="img/amorcapa.jpg" alt="Imagem 1"></div>
            <div class="slide"><img src="img/briga2.jpg" alt="Imagem 2"></div>
            <div class="slide"><img src="img/capa2.jpg" alt="Imagem 3"></div>
        </div>
        <button class="prev" onclick="prevSlide()">&#10094;</button>
        <button class="next" onclick="nextSlide()">&#10095;</button>
    </div>
    <br>
    <p>Descubra nossos doces artesanais!</p>
</div>
<?php include 'footer.php'; ?>


<script>
    let currentSlide = 0;

    function showSlide(index) {
        const slides = document.querySelector('.carrossel');
        const totalSlides = document.querySelectorAll('.slide').length;

        if (index >= totalSlides) {
            currentSlide = 0;
        } else if (index < 0) {
            currentSlide = totalSlides - 1;
        } else {
            currentSlide = index;
        }

        slides.style.transform = `translateX(-${currentSlide * 100}%)`;
    }

    function nextSlide() {
        showSlide(currentSlide + 1);
    }

    function prevSlide() {
        showSlide(currentSlide - 1);
    }

    // Automatic slide (optional)
    setInterval(() => {
        nextSlide();
    }, 5000); // Slide muda a cada 5 segundos

    </script>