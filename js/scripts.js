$(window).scroll(function(){
    var formFixed = $('#formFixed'),
        scroll = $(window).scrollTop();
  
        console.log(scroll)
    if (scroll >= 500 && scroll <= 3900) formFixed.addClass('sticky');
    else formFixed.removeClass('sticky');
});