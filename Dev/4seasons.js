const navbar = document.getElementById("navigation");
const navCollapse = document.getElementById("navbarSupportedContent");

// --- Scroll behavior ---
function updateNavbarOnScroll() {
    if (window.pageYOffset > 0) {
        navbar.classList.add('scrolled'); // scrolled background
    } else if (!navCollapse.classList.contains('show')) {
        navbar.classList.remove('scrolled'); // transparent at top if menu closed
    }
}

// Initialize scroll behavior
window.addEventListener('scroll', updateNavbarOnScroll);
window.addEventListener('load', updateNavbarOnScroll);

// --- Mobile menu open/close ---
navCollapse.addEventListener('show.bs.collapse', function() {
    navbar.classList.add('scrolled');      // instantly brown
    navCollapse.classList.add('scrolled'); // collapse brown
    navbar.classList.add('shadow-sm');     // optional shadow
});

navCollapse.addEventListener('hide.bs.collapse', function() {
    navbar.classList.remove('shadow-sm');
    navCollapse.classList.remove('scrolled');
    updateNavbarOnScroll(); // recheck scroll position
});
