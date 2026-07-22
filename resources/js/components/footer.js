const year=document.getElementById("year");

if(year){

year.textContent=new Date().getFullYear();

}

const backTop=document.getElementById("backTop");

window.addEventListener("scroll",()=>{

if(window.scrollY>500){

backTop.style.display="flex";

}else{

backTop.style.display="none";

}

});

backTop?.addEventListener("click",()=>{

window.scrollTo({

top:0,

behavior:"smooth"

});

});