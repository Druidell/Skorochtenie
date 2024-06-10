// Слайдер
var controls = document.querySelectorAll('.controls');
for (var i = 0; i < controls.length; i++) {
    controls[i].style.display = 'inline-block';
}

var slider = document.querySelectorAll('.slider .slide');
var currentSlide = 0;
var slideInterval = setInterval(nextSlide, 2000);

function nextSlide() {
    goToSlide(currentSlide + 1);
}

function previousSlide() {
    goToSlide(currentSlide - 1);
}

function goToSlide(n) {
    slider[currentSlide].className = 'slide';
    currentSlide = (n + slider.length) % slider.length;
    slider[currentSlide].className = 'slide showing';
}

var next = document.getElementById('next');
var previous = document.getElementById('previous');

next.onclick = function () {
    nextSlide();
};
previous.onclick = function () {
    previousSlide();
};
