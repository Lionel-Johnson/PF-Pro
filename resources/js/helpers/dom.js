export const $ = selector => document.querySelector(selector);

export const $$ = selector => document.querySelectorAll(selector);

export const on = (element,event,callback)=>{

    if(element){

        element.addEventListener(event,callback);

    }

};