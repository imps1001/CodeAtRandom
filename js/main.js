
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
      var currentScrollPos = window.pageYOffset;
      if (prevScrollpos > currentScrollPos) {
        document.getElementById("navbarcr").style.top = "0";
      } else {
        document.getElementById("navbarcr").style.top = "-50px";
      }
      prevScrollpos = currentScrollPos;
    }
    $('#loginButton').click(function() {
      $('#loginModal').modal('show')
    });

    $('#RegisterButton').click(function() {
      $('#register_Modal').modal('show')
    });

    $('#register-link').click(function() {
      $('#loginModal').modal('hide')
      $('#register_Modal').modal('show')
    });
    $('#Loginlink').click(function() {
      $('#loginModal').modal('show')
    });
    /*$(document).ready(function(){
          $("#First_Modal").modal('show');
      });
    $('#register_first-link').click(function ()
    {
      $('#First_Modal').modal('hide')
      $('#register_Modal').modal('show')
    });*/
  
  
    if (!Cookies.get('popup')) {
      setTimeout(function() {
        $('#First_Modal').modal();
      }, 600);
    }

    $('#First_Modal').on('shown.bs.modal', function() {
      // bootstrap modal callback function
      // set cookie
      Cookies.set('popup', 'valid', {
        expires: 3,
        path: "/"
      }); // need to set the path to fix a FF bug
    })


    function showCourses(id) {
      if (id == 0) {
        $(".c-1").show();
        $(".c-2").hide();
        $(".c-3").hide();
        $(".c-4").hide();
        $(".t-0").show();
        $(".t-1").hide();
        $(".t-2").hide();
        $(".t-3").hide();
      } else if (id == 1) {
        $(".c-1").hide();
        $(".c-2").show();
        $(".c-3").hide();
        $(".c-4").hide();
        $(".t-0").hide();
        $(".t-1").show();
        $(".t-2").hide();
        $(".t-3").hide();
      } else if (id == 2) {
        $(".c-1").hide();
        $(".c-2").hide();
        $(".c-3").show();
        $(".c-4").hide();
        $(".t-0").hide();
        $(".t-1").hide();
        $(".t-2").show();
        $(".t-3").hide();
      } else if (id == 3) {
        $(".c-1").hide();
        $(".c-2").hide();
        $(".c-3").hide();
        $(".c-4").show();
        $(".t-0").hide();
        $(".t-1").hide();
        $(".t-2").hide();
        $(".t-3").show();
      }
    }
  

    jQuery(document).ready(function() {
      $('#myModal').on('hidden.bs.modal', function(e) {
        $('#myModal iframe').each(function() {
          var videoURL = $(this).attr('src');
          $(this).attr('src', videoURL);
        });
      });

    });