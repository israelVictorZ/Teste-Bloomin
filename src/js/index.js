// HEADER COLLAPSE
const toggle = document.querySelector('.nav-toggle')
const navItems = document.querySelector('.nav-items')

toggle.addEventListener('click', function () {
    navItems.classList.toggle('active')
    this.classList.toggle('active')
})

// HEADER SLICK
const header = document.querySelector('header')
const navBrand = document.querySelector('.nav-brand img')

console.log(navBrand);

window.addEventListener('scroll', function () {
    let height = window.scrollY

    if (height > 1) {
        navBrand.setAttribute('src', 'public/black-logo.png')
        header.classList.add('nav-slicked')
    }

    if (height < 1) {
        navBrand.setAttribute('src', 'public/white-logo.png')
        header.classList.remove('nav-slicked')
    }
})


// OWL CAROUSEL BANNER
$(".owl-banner").owlCarousel({
    autoplay: false,
    smartSpeed: 1500,
    margin: 0,
    stagePadding: 0,
    items: 1,
    dots: true,
    loop: true,
    nav: true,
    navText: ["<img src='public/icons/ico-arrow.png'>", "<img src='public/icons/ico-arrow.png'>"]
});
