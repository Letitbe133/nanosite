$(function(){

  function setHeight() {
    var hCard = $('.card:first .card-image').outerHeight();
    var hImg = $('.card:first .card-image img').outerHeight();
    var wImg = $('.card:first .card-image img').outerWidth();

    $('#target').css("height", hCard);
    $('#target iframe').attr({
      height: hImg,
      width: wImg
    });
  }

  setHeight();

  $(".button-collapse").sideNav({
    menuWidth: 200,
    closeOnClick: true
  });

  $('.scrollspy').scrollSpy({scrollOffset: 30});




})
