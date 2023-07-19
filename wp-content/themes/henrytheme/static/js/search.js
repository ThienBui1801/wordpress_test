// jQuery(document).ready(function ($) {
//    const form = $('.form-filter');
//    const input = $('.input-search');

//    form.submit(function (e) {
//       e.preventDefault();
//       input.keyup(function () {
//          call_ajax(form.serialize());

//          if (input.val()) {
//             $('.main-render').addClass('hidden');
//             $('.js-render').removeClass('hidden');
//          } else {
//             $('.main-render').removeClass('hidden');
//             $('.js-render').addClass('hidden');
//          }
//       })
//    })

//    function call_ajax(args) {
//       console.log(wpAjax.ajaxUrl);
//       $.ajax({
//          type: 'POST',
//          url: wpAjax.ajaxUrl,
//          data: {
//             action: 'filter',
//             category: args,
//             s: args,
//          },
//          success: function (res) {
//             $('.js-render').html(res);
//          },
//          error: function (res) {
//             console.warn(res)
//          }
//       });
//    }
// });

// jQuery(document).ready(function ($) {
//    $('#alphabet li').click(function () {
//       var selectedLetter = $(this).text();

//       if ($(this).hasClass('all')) {
//          $('.main-render').removeClass('hidden');
//          $('.js-render').addClass('hidden');
//       } else {
//          call_ajax(selectedLetter);
//          $('.main-render').addClass('hidden');
//          $('.js-render').removeClass('hidden');
//       }
//    });

//    function call_ajax(args) {
//       $.ajax({
//          type: 'POST',
//          url: wpAjax.ajaxUrl,
//          data: {
//             action: 'filter_alphabet',
//             letter: args,
//          },
//          success: function (res) {
//             // console.log(res);
//             $('.js-render').html(res);
//          },
//          error: function (res) {
//             console.warn(res);
//          }
//       });
//    }
// });


