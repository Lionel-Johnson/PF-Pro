const buttons=document.querySelectorAll(".portfolio-filter button");

const cards=document.querySelectorAll(".portfolio-card");

buttons.forEach(button=>{

button.addEventListener("click",()=>{

buttons.forEach(btn=>btn.classList.remove("active"));

button.classList.add("active");

const filter=button.dataset.filter;

cards.forEach(card=>{

if(filter==="*"){

card.style.display="block";

return;

}

card.style.display=

card.dataset.category===filter

?

"block"

:

"none";

});

});

});