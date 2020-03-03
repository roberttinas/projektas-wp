"use strict";

// Burger menu
let burger = document.querySelector(".burger");

burger.addEventListener("click", function(){
    document.querySelector(".main-menu").classList.toggle("show");
});


$(document).ready(function(){
    // Galerija
    $('[data-fancybox="gallery1"]').fancybox({
       loop: true,
    });
});

// Galerija
$('[data-fancybox="photos"]').fancybox({
    loop: true,
});

// Slider
var slider = tns({
    container: '.slider-container',
    items: 1,
    slideBy: 'page',
    autoplay: false, 
    mouseDrag: true,
    mode: 'carousel',
    controls: false,
    nav: true,
    navPosition: 'bottom',
    responsive: {
        600: {
          items: 2
        },
        900: {
          items: 3
        }
    }
});