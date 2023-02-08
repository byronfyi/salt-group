import Splide from '@splidejs/splide';
import '@splidejs/splide/css';

const carousel = () => {
    var drinks = new Splide( '.splide__drinks', {
      type: 'loop',
      perPage: 5,
      perMove: 1,
      gap: '1em',
      focus: 'center',
      autoWidth: true,
      pagination: false,
    } );

    var salt = new Splide( '.splide__salt', {
      type: 'loop',
      perPage: 5,
      perMove: 1,
      gap: '1em',
      focus: 'center',
      autoWidth: true,
      pagination: false,
    } );

    var shop = new Splide( '.splide__shop', {
      type: 'loop',
      perPage: 5,
      perMove: 1,
      gap: '0.5em',
      focus: 'center',
      autoWidth: true,
      pagination: false,
    } );

    drinks.mount();
    salt.mount();
    shop.mount();
}

export default carousel;
