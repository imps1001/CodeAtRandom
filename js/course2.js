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

let acc = document.querySelectorAll(".accordion");
let i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function () {
      this.classList.toggle("active");
      let panel = this.nextElementSibling;
      if (panel.style.maxHeight) {
          panel.style.maxHeight = null;
      } else {
          panel.style.maxHeight = panel.scrollHeight + "px";
      }
  });
}

$('.accordion-heading').on('click', (e) => {
  if ($(e.target).parent().parent().hasClass('active-accordion')) {
      $('.accordion-heading').parent().parent().removeClass('active-accordion')
  }
  else {
      $('.accordion-heading').parent().parent().removeClass('active-accordion')
      $(e.target).parent().parent().addClass('active-accordion')
  }
})

function pay_now() {
    var course_id = 2;

    jQuery.ajax({
      type: 'post',
      url: 'payment_process.php',
      data: "course_id=" + course_id,
      success: function(result) {

        var options = {
          "key": "rzp_test_qYyG9sLV44cGfn",
          "amount": "119900",
          "currency": "INR",
          "name": "Code At Random (OPC) Pvt Ltd",
          "description": "Java Course For Class 9th ICSE  ",
          "image": "https://i.pinimg.com/originals/b8/62/cd/b862cd2f8ba5bb3bb17145d9f3949b36.jpg",
          "handler": function(response) {
            jQuery.ajax({
              type: 'post',
              url: 'payment_process.php',
              data: "payment_id=" + response.razorpay_payment_id + "&course_id=" + course_id,
              success: function(result) {

                window.location.href = "thank_you.php";
              }
            });
          },
          "notes": {
            "address": "5, Khanderao Gate Jhansi (UP)"
          },
          "theme": {
            "color": "#3399ff"
          }
        };
        var rzp1 = new Razorpay(options);
          rzp1.open();
      }
    });


  }