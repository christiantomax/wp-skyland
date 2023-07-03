let active
let expanders = gsap.utils.toArray(".expander")
let activeIndex = 0
hideElements()

expanders.forEach(function(expander, index){
	let animation = gsap.timeline({paused:true})
	animation.to(expander, {width:"150vw", duration:0.4})
	expander.animation = animation // assign the animation to the current element
	
    if (index === activeIndex) {
        // Animate the active expander on page load
        setTimeout(function() {
            expander.animation.play();
            active = expander;
            showElements(expander);
            scrollToElement(expander);
            }, 1000); // Set a timeout to delay the animation
    }

})

function changeExpander(minOrMinus) {
    const nextIndex = activeIndex + minOrMinus;
    if (active) {
        active.animation.reverse();
        setTimeout(gsap.to(active, { width: "27.5vw", duration: 0.4 }), 2000);
    }
    activeIndex = nextIndex % expanders.length;
    active = expanders[activeIndex];
    active.animation.play();
    hideElements()
    showElements(active) 
}

function hideElements() {
    var otherElements = document.getElementsByClassName(`description-gallery`);
    for (var i = 0; i < otherElements.length; i++) {
        if(activeIndex !== i) {
            otherElements[i].style.display = "none";
        }
    }
}

function showElements(element) {
    var currentElements = document.getElementsByClassName(`description-gallery-${expanders.indexOf(element)}`);
    for (var i = 0; i < currentElements.length; i++) {
        currentElements[i].style.display = "flex";
    }
}

$(document).ready(function() {
    $('.slider').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
        draggable: true,
        responsive: [
            {
            breakpoint: 768,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
            }
            }
        ]
    });
});  