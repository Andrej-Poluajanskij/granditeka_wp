jQuery(document).ready(function($){
  //
//Click scroll on top
//

$('.go-on-top').click(function(){
  $('html, body').animate({
    scrollTop: $("header").offset().top
  }, 1000);
});


//
//Button scroll up visible/ unvisible
//
let prevScrollpos = window.pageYOffset;

window.onscroll = () => {

let currentScrollPos = window.pageYOffset;
let goTopDiv = document.querySelector(`.go-on-top`)

if (prevScrollpos > currentScrollPos) {
  goTopDiv.style.display = "block";
} else {
  goTopDiv.style.display = "none";
}
if (currentScrollPos < 1){
    goTopDiv.style.display = `none`;
}

prevScrollpos = currentScrollPos;
};

//
// Click scroll to section
//
$('.scrollToWorks').click(function(){
  $('html, body').animate({
    scrollTop: $(".category").offset().top
  }, 1000)
});



//
// Flip elements on scroll
//
$(document).ready(function() {
  $('.flip-up').addClass("hidden").viewportChecker({
      classToAdd: 'visible animated flipInY slow',
      offset: 150
     });
});

//
// Burger button & mobile meniu
//
let btn = document.querySelector(`.btn`);
let dark_screen = document.querySelector(`.dark-screen`)
let mobile_meniu = document.querySelector(`.mobile-meniu`)
let blur_screen = document.querySelector(`main`)
let fixed_screen = document.querySelector(`body`)

//open mobile meniu
$('.header-burger-meniu').click(function(){
  $(btn).toggleClass("active");     
  $(btn).toggleClass("not-active");
  // btn.classlist.toggle(`active`);
  // btn.classList.toggle(`not-active`);

  dark_screen.classList.toggle(`display-block`)
  mobile_meniu.classList.toggle(`mobile-meniu_hidden`);
  blur_screen.classList.toggle(`blur`);
  fixed_screen.classList.toggle(`fixed-screen`);
});


//close mobile meniu
window.onclick = (event) => {

if( event.target === dark_screen){

  dark_screen.classList.toggle(`display-block`)
  mobile_meniu.classList.toggle(`mobile-meniu_hidden`);
  blur_screen.classList.toggle(`blur`);
  fixed_screen.classList.toggle(`fixed-screen`);

  // btn.classList.toggle(`active`);
  // btn.classList.toggle(`not-active`);
  $(btn).toggleClass("active");     
  $(btn).toggleClass("not-active");
}

}
//
//Product inner page
//checkbox
//
$('label').change(function(){
  $(this).find('.checkbox').toggleClass('checked-icon');
});

//modal window
let modalWindow = document.querySelector('.modal-window-blur')

$('.openModal').click(function(){
  $(modalWindow).toggleClass('display-block');
});

$('.close-window').click(function(){
  $(modalWindow).toggleClass('display-block');
});



//
//Product inner page
//slider
//
// $(document).ready(function(){
//   $('.product_big-image').slick({
//     slidesToShow: 1,
//     slidesToScroll: 1,
//     arrows: true,
//     fade: true,
//     // cssEase: 'linear'
//   });
// });


});

//
//Product inner page
//tabs
//
let openDescription = (evt, tabID) => {
  
  let i, tabcontent, tablinks;
  tabcontent = document.querySelectorAll(".description-name-content");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.querySelectorAll(".description-name");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.querySelector(`#${tabID}`).style.display = "block";
  evt.currentTarget.className += " active";
}