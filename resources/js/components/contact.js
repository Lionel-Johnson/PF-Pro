const form = document.querySelector(".contact-form form");

if(form){

form.addEventListener("submit",(e)=>{

e.preventDefault();

alert("Votre message a été envoyé avec succès.");

});

}