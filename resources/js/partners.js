const track=document.querySelector(".partners-track");

if(track){

track.addEventListener("mouseenter",()=>{

track.style.animationPlayState="paused";

});

track.addEventListener("mouseleave",()=>{

track.style.animationPlayState="running";

});

}