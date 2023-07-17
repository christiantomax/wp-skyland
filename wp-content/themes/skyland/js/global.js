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
        navbar.classList.add("bg-black");
        document.body.style.overflow = 'hidden';
    } else {
        scrolled = true;
        navbar.classList.remove("bg-black");
        navbar.classList.add("bg-transparent");
        element.classList.add("hidden");
        document.body.style.overflow = 'auto';
    }
});

if (scrollPosition === 0) {
    navbar.classList.remove("bg-black");
    navbar.classList.add("bg-transparent");
    scrolled = false;
} else if (!scrolled) {
    navbar.classList.remove("bg-transparent");
    navbar.classList.add("bg-black");
    scrolled = true;
}
window.addEventListener("scroll", function() {
    scrollPosition = window.scrollY;
    if (scrollPosition === 0) {
        navbar.classList.remove("bg-black");
        navbar.classList.add("bg-transparent");
        scrolled = false;
    } else if (!scrolled) {
        navbar.classList.remove("bg-transparent");
        navbar.classList.add("bg-black");
        scrolled = true;
    }
});

// Get the submit button element
const submitButton = document.getElementById('submit');

// Get the parent element of the submit button
const parentElement = submitButton.parentNode;

// Add a new class to the parent element
parentElement.classList.add('mt-5', 'flex', 'items-center', 'xl:justify-end');

// Create a new sibling element
const newSibling = document.createElement('div');

// Add classes to the new sibling element
newSibling.classList.add('pt-2', 'ms-3', 'icon', 'animate-pulse');

// Create an <img> element
const imgElement = document.createElement('img');
imgElement.classList.add('h-4', 'lg:h-4', 'pb-1');
imgElement.src = 'http://localhost/skyland/wp-content/themes/skyland/assets//img/icon-arrow.png';

// Append the <img> element to the new sibling element
newSibling.appendChild(imgElement);

// Get the reference element
const referenceElement = document.querySelector('.icon');

// Insert the new sibling element after the reference element
referenceElement.insertAdjacentElement('afterend', newSibling);

// Insert the new sibling element after the submit button
parentElement.insertBefore(newSibling, submitButton.nextSibling);
