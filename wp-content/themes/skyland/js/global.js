var button = document.getElementById("nav-btn-macaron");
var navbar = document.getElementById("navbar");
var scrolled = false;
var scrollPosition = window.scrollY;

button.addEventListener("click", function() {
    var element = document.getElementById("navbar-dropdown");
    console.log("masuk");
    // Get the src attribute value of the image
    if(element.classList.contains("hidden")){
        scrolled = true;
        element.classList.remove("hidden");
        navbar.classList.remove("bg-transparent");
        navbar.classList.add("bg-with-gradient");
        document.body.style.overflow = 'hidden';
    } else {
        scrolled = true;
        navbar.classList.remove("bg-with-gradient");
        navbar.classList.add("bg-transparent");
        element.classList.add("hidden");
        document.body.style.overflow = 'auto';
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