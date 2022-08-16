jQuery(function($) {
  
  $('.editarow').on('click', function(e) {
    $(this).parent('.profiledata').next('.wtn-form-textbox').toggleClass('show');
    $(this).parent('.profiledata').children('p').toggleClass('hide');
    $(this).parent('.profiledata').toggleClass('mb-0');
    $('.wtn-profilebox-formbox .wtn-btnbox').addClass('show');
    e.preventDefault();
  });
 });

 //new Mmenu(document.querySelector("#menu"));





