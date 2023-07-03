let active
let expanders = gsap.utils.toArray(".expander")

expanders.forEach(function(expander, index){
	let animation = gsap.timeline({paused:true})
	animation.to(expander, {width:"55vw", duration:0.4})
	expander.animation = animation // assign the animation to the current element
	hideElements(expander);
	
    // add event handler resize animation when on mouse enter div
	expander.addEventListener("mouseenter", function(){
		expander.animation.play()
		active = expander
        showElements(expander);
		scrollToElement(expander);
	})
	

    //handler out from div selection
	expander.addEventListener("mouseleave", function() {
        event.stopPropagation();
        expander.animation.reverse();
    
        // Add a separate animation to set the width back to normal
        setTimeout(gsap.to(expander, { width: "27.5vw", duration: 0.4 }), 2000);
        setTimeout(hideElements(expander), 2000);
	});

	
    function hideElements(element) {
        var otherElements = document.getElementsByClassName(`project-description`);
        for (var i = 0; i < otherElements.length; i++) {
            otherElements[i].style.display = "none";
        }
    }

    function showElements(element) {
        var currentElements = document.getElementsByClassName(`project-description-${expanders.indexOf(element)}`);
        for (var i = 0; i < currentElements.length; i++) {
            currentElements[i].style.display = "flex";
        }
    }

	function scrollToElement(element) {
		const offsetTop = element.offsetTop;
		const scrollOptions = {
			top: offsetTop,
			behavior: 'smooth'
		};
		window.scrollTo(scrollOptions);
	}

})

const showButton = document.getElementById('showButton');
const dropdownOptions = document.getElementById('dropdownOptions');
const optionItems = document.getElementsByClassName('option');

// Toggle dropdown visibility when the button is clicked
showButton.addEventListener('click', function() {
    dropdownOptions.classList.toggle('hidden');
});

// Apply styling to all option items
Array.from(optionItems).forEach(function(item) {
    item.addEventListener('click', function() {
        // Remove selected class from all options
        Array.from(optionItems).forEach(function(option) {
            option.classList.remove('selected');
        });

        // Add selected class to the clicked option
        this.classList.add('selected');

        // Update the button text to the selected option
        showButton.textContent = this.textContent;

        // Hide the dropdown options
        dropdownOptions.classList.add('hidden');
    });
});