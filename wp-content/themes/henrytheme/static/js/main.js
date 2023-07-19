'use strict';

function openNavMenu() {
   const btnNav = document.getElementById('btnNav');
   const nav = document.getElementById('navMobile');

   function closeModal() {
      nav.classList.remove('openNav')
   };

   btnNav.addEventListener('click', () => {
      nav.classList.toggle('openNav');
   });

   document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') {
         closeModal()
      }
   })
}

function handleSlides() {
   var elms = document.getElementsByClassName("splide");
   const listSlides = [];
   if (elms.length > 0) {
      for (let i = 0, len = elms.length; i < len; i++) {
         const slide = new Splide(elms[i]).mount();
         listSlides.push(slide);
      }
   }
}

document.addEventListener('DOMContentLoaded', function () {
   openNavMenu();
   handleSlides();
});

