jQuery(document).ready(function ($) {
   $('#navMobile .nav .menu-item').each(function () {
      $(this).click(function (e) {
         e.preventDefault();
         if (!$(this).hasClass('is-active')) {
            $(this).addClass('is-active');
            $(this).children('.sub-menu').slideDown();
         } else {
            $(this).removeClass('is-active');
            $(this).children('.sub-menu').slideUp();
         }
      })
   });
});

jQuery(document).ready(function ($) {
   function dbFilter(alphabetFilter, searchValue) {
      const af = alphabetFilter === "All" ? "" : alphabetFilter;
      $('.brand-item').each(function () {
         const brandItem = $(this);
         const brandContainer = brandItem.closest('.brand-container');
         brandContainer.show();
         // console.log(brandContainer);
         const title = brandItem.find('.title').text().trim();


         if (title.charAt(0).search(af) > -1 && title.toLowerCase().includes(searchValue.toLowerCase())) {
            brandItem.show();
         } else {
            brandItem.hide();
         }

         if (brandContainer.find('.brand-item:visible').length > 0) {
            brandContainer.show();
         } else {
            brandContainer.hide();
         };
      });
   }

   $('#alphabet .js-filter').click(function () {
      const valueFilter = $(this).text().trim();
      const searchValue = $('#search-input').val().trim();
      $(this).siblings().removeClass('active');
      $(this).addClass('active');
      dbFilter(valueFilter, searchValue);
   });

   $('.form-filter').submit(function (e) {
      e.preventDefault();
   });

   $('#search-input').keyup(function (e) {
      const keyCode = e.keyCode;
      const searchInputValue = $(this).val().toLowerCase().trim();
      const alphabet = $('#alphabet .js-filter.active').text().toLowerCase().trim();

      if (keyCode === 13) {
         dbFilter(alphabet, searchInputValue);
      } else {
         dbFilter('', searchInputValue);
      }
   });
});

