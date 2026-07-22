import Swiper from 'swiper';

import 'swiper/css';

export function createSlider(selector){

    return new Swiper(selector,{

        loop:true,

        speed:700,

        autoplay:true

    });

}