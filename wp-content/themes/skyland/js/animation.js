const fadeElements = document.querySelectorAll('.fade-in-element');

// Animate the opacity of elements from 0 to 1 with ScrollTrigger
fadeElements.forEach((element) => {
    gsap.fromTo(
    element,
    {
        autoAlpha: 0,
        yPercent: 50, // Optional: Move the elements slightly up before fade-in
    },
    {
        autoAlpha: 1,
        yPercent: 0, // Optional: Move back to the original position after fade-in
        duration: 2,
        ease: 'power2.out',
        scrollTrigger: {
            markers: false,
            trigger: element, // Use the current element as the trigger
        },
    }
    );
});