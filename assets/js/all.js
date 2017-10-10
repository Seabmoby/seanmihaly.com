$(document).ready(function() {  

  //Extra Content Section
  $('.opentextsuite').click(function( event ) {
    event.preventDefault();
    $(this).toggleClass('open-extra-active');
    var opensuite = $(this).attr('href');
    $(opensuite).slideToggle('fast');    

    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top -100
        }, 500);
        return false;
      }
    }
  });

});
