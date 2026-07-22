const testimonialCards =
document.querySelectorAll(".testimonial-card");

const testimonialObserver =
new IntersectionObserver(

(entries)=>{

entries.forEach(entry=>{

if(entry.isIntersecting){

entry.target.animate(

[

{

opacity:0,

transform:"translateY(50px)"

},

{

opacity:1,

transform:"translateY(0)"

}

],

{

duration:700,

fill:"forwards",

easing:"ease"

}

);

testimonialObserver.unobserve(entry.target);

}

});

},

{

threshold:.2

}

);

testimonialCards.forEach(card=>{

testimonialObserver.observe(card);

});