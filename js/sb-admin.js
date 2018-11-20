(function($) {
  "use strict"; // Start of use strict

  // Toggle the side navigation
  $("#sidebarToggle").on('click',function(e) {
    e.preventDefault();
    $("body").toggleClass("sidebar-toggled");
    $(".sidebar").toggleClass("toggled");
  });

  // Prevent the content wrapper from scrolling when the fixed side navigation hovered over
  $('body.fixed-nav .sidebar').on('mousewheel DOMMouseScroll wheel', function(e) {
    if ($(window).width() > 768) {
      var e0 = e.originalEvent,
        delta = e0.wheelDelta || -e0.detail;
      this.scrollTop += (delta < 0 ? 1 : -1) * 30;
      e.preventDefault();
    }
  });

  // Scroll to top button appear
  $(document).on('scroll',function() {
    var scrollDistance = $(this).scrollTop();
    if (scrollDistance > 100) {
      $('.scroll-to-top').fadeIn();
    } else {
      $('.scroll-to-top').fadeOut();
    }
  });

  // Smooth scrolling using jQuery easing
  $(document).on('click', 'a.scroll-to-top', function(event) {
    var $anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: ($($anchor.attr('href')).offset().top)
    }, 1000, 'easeInOutExpo');
    event.preventDefault();
  });


  
    $(document).ready(function() {
        //variables
        var password = $('[name=password]');
        var repeat_password = $('[name=repeat_password]');
        var confirmacion = "Las contraseñas si coinciden";
        var longitud = "La contraseña debe estar formada entre 6-10 carácteres (ambos inclusive)";
        var negacion = "No coinciden las contraseñas";
        var vacio = "La contraseña no puede estar vacía";
        var span = $('<br/><span></span>').insertAfter(repeat_password);
        span.hide();

        function coincidePassword() {
                var valor1 = password.val();
                var valor2 = repeat_password.val();
                
                span.show().removeClass();

                if (valor1 != valor2) {
                    span.text(negacion).addClass('alert alert-danger');
                }
                if (valor1.length == 0 || valor1 == "") {
                    span.text(vacio).addClass('alert alert-danger');
                }
                if (valor1.length < 6 || valor1.length > 10) {
                    span.text(longitud).addClass('alert alert-danger');
                }
                if (valor1.length != 0 && valor1 == valor2) {
                    span.text(confirmacion).removeClass("alert alert-danger").addClass('alert alert-success');
                }
            }
            
        repeat_password.keyup(function() {
            coincidePassword();
        });
    });




})(jQuery); // End of use strict
