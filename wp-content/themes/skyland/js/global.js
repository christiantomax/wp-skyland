var button = document.getElementById("nav-btn-macaron");
var navbar = document.getElementById("navbar");
var scrolled = false;
var scrollPosition = window.scrollY;

button.addEventListener("click", function() {
    var isExpanded = $('#nav-btn-macaron').attr('aria-expanded');
    console.log("isExpanded", isExpanded)
    if (isExpanded === 'true') {
        navbar.classList.remove("bg-with-black");
        navbar.classList.add("bg-with-gradient");
    } else {
        navbar.classList.add("bg-with-black");
    }
});

if (scrollPosition === 0) {
    navbar.classList.remove("bg-with-gradient");
    navbar.classList.add("bg-transparent");
    scrolled = false;
} else if (!scrolled) {
    navbar.classList.remove("bg-transparent");
    navbar.classList.add("bg-with-gradient");
    scrolled = true;
}
window.addEventListener("scroll", function() {
    scrollPosition = window.scrollY;
    if (scrollPosition === 0) {
        navbar.classList.remove("bg-with-gradient");
        navbar.classList.add("bg-transparent");
        scrolled = false;
    } else if (!scrolled) {
        navbar.classList.remove("bg-transparent");
        navbar.classList.add("bg-with-gradient");
        scrolled = true;
    }
});
