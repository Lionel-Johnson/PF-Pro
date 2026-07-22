const slider = document.querySelector(".testimonial-track");

if(slider){

slider.addEventListener("mouseenter",()=>{

slider.style.animationPlayState="paused";

});

slider.addEventListener("mouseleave",()=>{

slider.style.animationPlayState="running";

});

}