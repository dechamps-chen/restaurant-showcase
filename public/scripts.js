window.addEventListener('scroll', function () {
    var scrollPosition = window.scrollY;
    var nav = document.querySelector('#nav');

    if (scrollPosition > 30) {
        nav.classList.add('bg-gray-950');
    } else {
        nav.classList.remove('bg-gray-950');
    }
});

// Menu burger pour mobile
const menuClose = document.querySelector('#menu-close');
const menu = document.querySelector('#menu');
const menuOpen = document.querySelector('#menu-open');

menuClose.addEventListener('click', function () {
    menu.classList.toggle('hidden');
});

menuOpen.addEventListener('click', function () {
    menu.classList.toggle('hidden');
});