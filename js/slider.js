var slider = document.getElementById("slider"),
    sliderDots = Array.prototype.slice.call(document.getElementById("slider-dots").children),
    sliderContent = Array.prototype.slice.call(document.getElementById("slider-content").children),
    sliderleftArrow = document.getElementById("left-arrow"),
    sliderRightArrow = document.getElementById("right-arrow"),
    currentSlide = 0,
    currentActive = 0,
    sliderTimer;

window.onload = function () {

    function playSlide(slide) {
        for (var k = 0; k < sliderDots.length; k++) {
            sliderContent[k].classList.remove("active");
            sliderContent[k].classList.remove("inactive");
            sliderDots[k].classList.remove("active");
        }
        if (slide < 0) {
            slide = currentSlide = sliderContent.length - 1;
        }
        if (slide > sliderContent.length - 1) {
            slide = currentSlide = 0;
        }
        if (currentActive != currentSlide) {
            sliderContent[currentActive].classList.add("inactive");
        }
        sliderContent[slide].classList.add("active");
        sliderDots[slide].classList.add("active");

        currentActive = currentSlide;

        clearTimeout(sliderTimer);
        sliderTimer = setTimeout(function () {
            playSlide(currentSlide += 1);
        }, sliderSpeed)
    }

    sliderleftArrow.addEventListener("click", function () {
        playSlide(currentSlide -= 1);
    })
    sliderRightArrow.addEventListener("click", function () {
        playSlide(currentSlide += 1);
    })

    for (var l = 0; l < sliderDots.length; l++) {
        sliderDots[l].addEventListener("click", function () {
            playSlide(currentSlide = sliderDots.indexOf(this));
        })
    }
    playSlide(currentSlide);
}