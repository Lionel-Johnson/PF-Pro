export function debounce(fn, delay = 200) {

    let timeout;

    return (...args) => {

        clearTimeout(timeout);

        timeout = setTimeout(() => fn(...args), delay);

    };

}

export function random(min,max){

    return Math.floor(Math.random()*(max-min+1))+min;

}