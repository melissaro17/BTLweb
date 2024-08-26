$(document).ready(function(){
  // Activador de Slick Slider
  $('.slick-banner').slick({
      autoplay: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      fade: true,
      autoplaySpeed: 2000,
      speed: 700,
      infinite: true,
      arrows: true
  });
});

(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()