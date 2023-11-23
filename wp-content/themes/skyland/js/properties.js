let active
var expanders = document.querySelectorAll('.expander');


gsap.set(".property-detail[items]",{autoAlpha: 0, display: 'none'})

expanders.forEach(function(expander) {

    $(expander).each(function(index, element){
        var attributeValue = element.getAttribute('items');

        var tl = gsap.timeline({ paused: true, defaults: { duration: 1 } });

        tl.fromTo(element.target,{
            width: '27.5vw',
        },{
            width: '55.vw',
        })
        .fromTo('[items="desc_'+attributeValue+'"]',{
            autoAlpha: 0, 
            display: 'none',
        },{
            autoAlpha: 1, 
            display: 'block',
        },">-0.3")
        .fromTo('[items="explore_'+attributeValue+'"]',{
            autoAlpha: 0, 
            display: 'none',
        },{
            autoAlpha: 1, 
            display: 'block',
        },"<")

        element.animation = tl;

        console.log(index,element,attributeValue)
    });
  
    $(expander).hover(over, out);
    function over(){ 
        this.animation.play() 
        

        console.log("MASUK OVER")
    };
    function out(){ 
        this.animation.reverse() 
        console.log("MASUK OUT")
    };

    // expander.addEventListener('mouseenter', (event) => {
    // });
    
    // expander.addEventListener('mouseleave', (event) => {
    //     var hoveredElement = event.target;
    //     var attributeValue = hoveredElement.getAttribute('items');
        
    //     var parts = attributeValue.split('_');
    //     var numberRow = parts[0];
    //     var numberColumn = parts[1];

    //     var tl = gsap.timeline({ paused: true, defaults: { duration: .5 } });


    //     tl.fromTo(event.target,{
    //         width: '55.vw',
    //     },{
    //         width: '27.5vw',
    //     })
    //     .fromTo('[items="desc_'+attributeValue+'"]',{
    //         autoAlpha: 1, 
    //         display: 'block',
    //     },{
    //         autoAlpha: 0, 
    //         display: 'none',
    //     },">-0.3")
    //     .fromTo('[items="explore_'+attributeValue+'"]',{
    //         autoAlpha: 1, 
    //         display: 'block',
    //     },{
    //         autoAlpha: 0, 
    //         display: 'none',
    //     },"<")
        
    //     tl.play()
    // });
});


// expanders.forEach(function(expander, index){
// 	let animation = gsap.timeline({paused:true})
// 	animation.fromTo(expander,{
//         width: "27.5vw",
//     },{
//         width:"55vw",
//     })
// 	expander.animation = animation // assign the animation to the current element
// 	hideElements(expander);
	
//     // add event handler resize animation when on mouse enter div
// 	expander.addEventListener("mouseenter", function(){
// 		if (!animation.isActive()) { // Check if the animation is not already running
//             animation.play()
//               .then(() => { // After the animation completes
//                 active = expander;
//                 showElements(expander);
//                 scrollToElement(expander);
//             });
//         }
// 	})
	

//     //handler out from div selection
// 	expander.addEventListener("mouseleave", function() {
//         if (!animation.isActive()) { // Check if the animation is not already running
//             expander.animation.reverse()
//               .then(() => { // After the animation completes
//                 setTimeout(() => {
//                   gsap.to(expander, { width: "27.5vw", duration: 0.4 }); // Separate animation to set the width back to normal
//                 }, 2000);
//                 setTimeout(() => {
//                 hideElements(expander);
//                 }, 2000);
//             });
//         }
// 	});

	
//     function hideElements(element) {
//         var otherElements = document.getElementsByClassName(`project-description`);
//         for (var i = 0; i < otherElements.length; i++) {
//             otherElements[i].style.display = "none";
//         }
//     }

//     function showElements(element) {
//         var currentElements = document.getElementsByClassName(`project-description-${expanders.indexOf(element)}`);
//         for (var i = 0; i < currentElements.length; i++) {
//             currentElements[i].style.display = "flex";
//         }
//     }

// 	// function scrollToElement(element) {
// 	// 	const offsetTop = element.offsetTop;
// 	// 	const scrollOptions = {
// 	// 		top: offsetTop,
// 	// 		behavior: 'smooth'
// 	// 	};
// 	// 	window.scrollTo(scrollOptions);
// 	// }

// })

// const showButton = document.getElementById('showButton');
// const dropdownOptions = document.getElementById('dropdownOptions');
// const optionItems = document.getElementsByClassName('option');

// // Toggle dropdown visibility when the button is clicked
// showButton.addEventListener('click', function() {
//     dropdownOptions.classList.toggle('hidden');
// });

// // Apply styling to all option items
// Array.from(optionItems).forEach(function(item) {
//     item.addEventListener('click', function() {
//         // Remove selected class from all options
//         Array.from(optionItems).forEach(function(option) {
//             option.classList.remove('selected');
//         });

//         // Add selected class to the clicked option
//         this.classList.add('selected');

//         // Update the button text to the selected option
//         showButton.textContent = this.textContent;

//         // Hide the dropdown options
//         dropdownOptions.classList.add('hidden');
//     });
// });