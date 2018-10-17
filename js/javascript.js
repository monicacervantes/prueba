/*MENU MOBILE*/
  $(document).ready(function() {
  $(".mobile-menu").on('click', function(){
    $(".mobile-dropdown").slideToggle("fast");
  });
});

/* SCROLL*/
$(document).ready(function() {
        $(window).scroll(function() {
          if($(this).scrollTop() > 690) { 
              $('.navbar').addClass('solid');
          } else {
              $('.navbar').removeClass('solid');
          }
        });
});


/*form*/

$(function() {
    $('#contactForm').validate({
        rules: {
            name: {
                required: true,
                minlength: 2
            },
            email: {
                required: true,
                email: true
            },
            message: {
                required: true
            },
            phone: {
                required: true,
                number:true
            }
        },
        messages: {
            name: {
                required: "Se necesita su nombre",
                minlength: "Ingrese por lo menos dos carácteres"
            },
            email: {
              required: "Se necesita su correo para poder comunicarnos",
                email: "Por favor ingrese una dirección de email válida"
            },
            phone:{
              required: "Se necesita su teléfono",
              number:"Por favor solo ingresar números"
            },
            
            
        },
        submitHandler: function(form) {
            $(form).ajaxSubmit({
                type:"POST",
                data: $(form).serialize(),
                url:"mail/contact_me.php",
                success: function() {
                    $('#contactForm:input').attr('disabled', 'disabled');
                    $('#contactForm').fadeTo( "slow", 0, function() {
                        $(this).find(':input').attr('disabled', 'disabled');
                        $(this).find('label').css('cursor','default');
                        $('#success1').fadeIn();
                    });
                },
                error: function() {
                    $('#contactForm').fadeTo( "slow", 0, function() {
                        $('#error1').fadeIn();
                    });
                }
            });
        }
    });
});


/* carousel*/
$('#blogCarousel').carousel({
				interval: 5000
		});
