/* eslint-disable semi */
/* eslint-disable space-before-function-paren */
/* eslint-disable space-in-parens */
/* eslint-disable indent */
(function ($) {
  $(document).ready(function () {
    $('#cars-category-section').css('background-image', 'url(' + $('#cars-category li').first().data('background') + ')');
    $('#cars-category li').first().addClass('underline');
    $('#cars-category li')
      .click(function (el) {
        $('#cars-category-section').css('background-image', 'url(' + el.target.attributes['data-background'].value + ')');
        $('.slider-cars').removeClass('underline');

        $(el.target).addClass('underline');
      });
    $('#about-list li')
      .click(function (el) {
        var selElem = el.target.attributes['data-element'].value
        if (selElem == 'teams-element') {
          $('#about-section').css('background-image', 'none');
          $('#about-section .text-white').addClass('text-black');
          $('#about-section .text-white').removeClass('text-white');
          $('#about-section .overlay').css('background', 'white');
        } else {
          $('#about-section .overlay').css('background', '#202020');
          $('#about-section').css('background', 'url(' + el.target.attributes['data-background'].value + ')');
          $('.slider-about').removeClass('text-black');
          $('.slider-about').addClass('text-white');

          $('#about-section .text-black').addClass('text-white');
          $('#about-section .text-black').removeClass('text-black');
        }

        $('.slider-about').removeClass('underline');
        $(el.target).addClass('underline');
        $('.about-element').addClass('hidden');
        $(`.${selElem}`).removeClass('hidden');
      });
  });
  // eslint-disable-next-line no-undef
}(jQuery));

