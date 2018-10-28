import '../scss/style.scss';
//import 'owl.carousel/dist/assets/owl.carousel.css';
import 'owl.carousel';
import 'owl.carousel2.thumbs';

$(document).ready(function() {


var DefaultFieldsToHide = [$(".field-4"), $(".field-6"), $(".field-7"), $(".field-8"), $(".field-11")];
$.each(DefaultFieldsToHide, function() {
    $(this).hide();
});

$('.form-stacked select').on('change', function() {
  var FieldsToHide = {
    "Compliment" : [$(".field-4"), $(".field-6"), $(".field-7"), $(".field-8"), $(".field-11")],
    "Productinformatie" : [],
    "Klacht product" : []
  };

$('.field').show();
  //console.log(this.value);
  var ArrayToHide = FieldsToHide[this.value];

  $.each(ArrayToHide, function() {
    $(this).hide();
  });

});


$('.faq__question').on('click', function(){
  $(this).toggleClass('active');
  $(this).next('.faq__answer').slideToggle();
});

$('form.selector').submit(function(e){
  e.preventDefault();
  var selectValue = $(this).find('select').val();
  window.location.replace(selectValue);
});

$('.owl-carousel').owlCarousel({
  items: 1,
  loop: true,
  thumbs: true,
  thumbsPrerendered: true
});


var menuOpen = false
var menuToggle = document.getElementById('menu__toggle')


menuToggle.addEventListener('click', function() {
  menuOpen ? closeMenu() : openMenu()
})

$('.menu__mobile li a').on('click', function(event) {
  closeMenu()
  return true;
});

function openMenu() {
  document.getElementById('menu__toggle').innerHTML = '<span class="menu__mobile__close"></span><i class="fa fa-lg fa-times" aria-hidden="true"></i>'
  $('#menu__mobile').stop().fadeIn(150);


  menuOpen = true;
}

function closeMenu() {
  $('#menu__mobile').stop().fadeOut(150);
  document.getElementById('menu__toggle').innerHTML = '<i class="fa fa-lg fa-bars" aria-hidden="true"></i>'

  menuOpen = false;
}

})

