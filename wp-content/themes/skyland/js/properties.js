
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
    });
  
    $(expander).hover(over, out);
    function over(){ 
        this.animation.play() 
    };
    function out(){ 
        this.animation.reverse({
            duration: 0.5,
        }) 
    };

 
});
