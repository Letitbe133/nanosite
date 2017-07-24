$(function(){

// Egalisation hauteurs de cartes
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

// Initialisation sideNav
  $(".button-collapse").sideNav({
    menuWidth: 200,
    closeOnClick: true
  });

// Initialisation scrollspy
  $('.scrollspy').scrollSpy({scrollOffset: 30});


// Initialisation modal
  $('.modal').modal({
    opacity: 0.2,
    inDuration: 300
  });

  $('#modal-trigger').on('click', function(){
    $('#modal').modal('close');
  })

  // // Initialisation toast
  // $('button[type=submit]').on("click", function(){
  //   setTimeout(function() {
  //     var feedback = $('.feedback').text();
  //     if(feedback.length > 0){
  //       Materialize.toast(feedback, 7000);
  //     }
  //   }, 1000);
  //   })

  const MutationObserver = window.MutationObserver ||
  window.WebKitMutationObserver ||
  window.MozMutationObserver


  var observer = new MutationObserver((changes) => {
    console.log(changes);
    changes.forEach((change) => {
      console.log('Mutation', change);
      if(change.type === 'characterData') {
        console.info('text content', change.target.nodeValue)
      }
    });
  });

  var target = document.querySelector('#feedback');

  var config = {
    attributes: true,
    childList: true,
    characterData: true,
    subtree: true
  };

  observer.observe(target, config);








})
