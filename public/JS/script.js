// Navbar scroll behavior
let lastScrollTop = 0;
const navbar = document.getElementById("navbar");
const delta = 5; // Minimum scroll untuk trigger

window.addEventListener("scroll", function () {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    // Pastikan scroll lebih dari delta
    if (Math.abs(lastScrollTop - scrollTop) <= delta) {
        return;
    }

    // Scroll ke bawah - sembunyikan navbar
    if (scrollTop > lastScrollTop && scrollTop > navbar.offsetHeight) {
        navbar.style.transform = "translateY(-100%)";
    }
    // Scroll ke atas - tampilkan navbar
    else {
        navbar.style.transform = "translateY(0)";
    }

    lastScrollTop = scrollTop;
});
