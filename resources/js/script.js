document.addEventListener("DOMContentLoaded", function () {
    const carouselContent = document.querySelector(".carousel-content");
    const cards = document.querySelectorAll(".card");
    const prevButton = document.querySelector(".carousel-control.prev");
    const nextButton = document.querySelector(".carousel-control.next");

    let currentIndex = 0;
    const cardsPerSlide = 4;
    const cardWidth = cards[0].offsetWidth + 20; // Card width + margin

    prevButton.addEventListener("click", function () {
        if (currentIndex > 0) {
            currentIndex = Math.max(currentIndex - cardsPerSlide, 0);
            updateCarousel();
        }
    });

    nextButton.addEventListener("click", function () {
        if (currentIndex < cards.length - cardsPerSlide) {
            currentIndex = Math.min(currentIndex + cardsPerSlide, cards.length - cardsPerSlide);
            updateCarousel();
        }
    });

    function updateCarousel() {
        const offset = -currentIndex * cardWidth;
        carouselContent.style.transform = `translateX(${offset}px)`;
    }
});
