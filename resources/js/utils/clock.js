function updateClock(){

    const time = document.getElementById("current-time");

    const date = document.getElementById("current-date");

    const location = document.getElementById("visitor-location");

    const now = new Date();

    if(time){

        time.textContent = now.toLocaleTimeString();

    }

    if(date){

        date.textContent = now.toLocaleDateString(

            navigator.language,

            {

                weekday:"long",

                year:"numeric",

                month:"long",

                day:"numeric"

            }

        );

    }

    if(location){

        const tz = Intl.DateTimeFormat().resolvedOptions().timeZone;

        location.textContent = tz.replace("_"," ");

    }

}

updateClock();

setInterval(updateClock,1000);