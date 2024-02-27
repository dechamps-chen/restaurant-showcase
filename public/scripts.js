window.addEventListener('scroll', function () {
    var scrollPosition = window.scrollY;
    var nav = document.querySelector('#nav');

    if (scrollPosition > 100) {
        nav.classList.add('bg-gray-950');
    } else {
        nav.classList.remove('bg-gray-950');
    }
});