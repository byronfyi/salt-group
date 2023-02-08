import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger.js';

gsap.registerPlugin(ScrollTrigger);

const initAnimations = () => {
  paralax();
  transitions();
  mouse();
}

function paralax() {
  let getRatio = el => window.innerHeight / (window.innerHeight + el.offsetHeight);

  gsap.utils.toArray('.paralax').forEach((section, i) => {
    section.bg = section.querySelector('.paralax-bg');
    
    // the first image (i === 0) should be handled differently because it should start at the very top.
    // use function-based values in order to keep things responsive
    gsap.fromTo(section.bg, {
      backgroundPosition: () => '50% 0px'
    }, {
      backgroundPosition: () => `50% ${window.innerHeight * (0.25 - getRatio(section))}px`,
      ease: 'none',
      scrollTrigger: {
        trigger: section,
        start: () => i ? 'top bottom' : 'top top', 
        end: 'bottom top',
        scrub: true,
        invalidateOnRefresh: true // to make it responsive
      }
    });
  });
}

function transitions() {
  gsap.from('.gsap-hero', {
    stagger: 0.15,
    opacity: 0,
    y: 40,
  });
}

function mouse() {
  gsap.set('.ball', { xPercent: -50, yPercent: -50 });

  let xTo = gsap.quickTo('.ball', 'x', {duration: 0.6, ease: 'power3'}),
      yTo = gsap.quickTo('.ball', 'y', {duration: 0.6, ease: 'power3'});

  window.addEventListener('mousemove', e => {
    xTo(e.pageX);
    yTo(e.pageY);
  });

  const nav = document.querySelector('.header__nav');
  const ball = document.querySelector('.ball');

  nav.addEventListener('mouseover', (e) => {
    ball.style.visibility = 'visible';
    ball.style.opacity = 1;
    const link = e.target.closest('a');
    if (link) {
      ball.style.backgroundImage = `url('/wp-content/themes/salt-venue/public/images/${link.dataset.image}.jpg')`;
    }
  });

  nav.addEventListener('mouseleave', (e) => {
    ball.style.visibility = 'hidden';
    ball.style.opacity = 0;
  });


  // special thanks to Blake Bowen for most of the code.

  // quickTo() version, new in version 3.10.0: https://codepen.io/GreenSock/pen/xxpbORN?editors=0010
}

export default initAnimations;
