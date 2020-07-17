jQuery(document).ready(function($) {

  var visible = false;
  $(window).scroll(function() {
    var scrollTop = $(this).scrollTop();
    if (!visible && scrollTop > 100) {
      $(".scrollToTop").fadeIn();
      visible = true;
    } else if (visible && scrollTop <= 100) {
      $(".scrollToTop").fadeOut();
      visible = false;
    }
  });

  $(".scrollToTop").click(function() {
    $("html, body").animate({
      scrollTop: 0
    }, 800);
    return false;
  });

});



$('input,textarea').on('focus',function () {
  $(this).parent('.field').addClass('focus');
});
var campos = $('input,textarea');
campos.on('blur',function () {
  campos.each(function (e) {
      if(campos.eq(e).val() == ''){
          campos.eq(e).parent('.field').removeClass('focus');
      }
  });
}); 


(function() {
  'use strict';

  var boxHeader = document.querySelector('.box-menu').offsetHeight;
  window.addEventListener('scroll', setupNav);

  function setupNav() {
    var posYheight = getYscroll(); //  Recebe a função que faz a leitura do scroll.
    if(posYheight > boxHeader && !hasClassFx()) {
      document.body.classList.add('fx');
    } 
    if(posYheight <= boxHeader && hasClassFx()) {
      document.body.classList.remove('fx');
    } 
  }

  function getYscroll () {
    return window.pageYOffset;
  }

  function hasClassFx () {
    return !!document.querySelector('.fx'); 
  } 
})();


(function() {
  'use strict';

  var toggleBtn = document.querySelector('.menu-toggle .btn-toggle');
  var navSidebar = document.getElementById('sidebar-wrapper');
  toggleBtn.addEventListener('click', adicionaActive);

  function adicionaActive() {  
    toggleBtn.classList.toggle('active');
    navSidebar.classList.toggle('active');
    document.body.classList.toggle('active-layer');

    var layerBody = document.querySelector(".overlay"); 
    layerBody.addEventListener('click', removeLayer);
    function removeLayer() {
      document.body.classList.remove('active-layer');
      navSidebar.classList.remove('active');
      toggleBtn.classList.remove('active');
    }
  }

})();


  

(function() {
  'use strict';

  var behavior = function (val) {
    return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
  },
  options = {
    onKeyPress: function (val, e, field, options) {
        field.mask(behavior.apply({}, arguments), options);
    }
  };
  $('.phone').mask(behavior, options);
  $('.date').mask('00/00/0000');
})(); 



