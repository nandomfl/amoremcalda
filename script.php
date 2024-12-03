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