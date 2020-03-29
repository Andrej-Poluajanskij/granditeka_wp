jQuery(document).ready(function($){
  //
//Click scroll on top
//

$('.go-on-top').click(function(){
  $('html, body').animate({
    scrollTop: $("header").offset().top
  }, 1000);
});


 
// document.querySelector('.loader').style.display = 'none'
$(document).on('submit', '#form', function(e){
console.log('submit');
e.preventDefault();
  // $('.loader-holder').fadeIn();
  $('.loader').toggleClass("display-none");
  var formData = new FormData(this);
  formData.append('action', 'send_contact_form_message');

  $.ajax({
      url: variables.ajax_url,
      data: formData,
      processData: false,
      contentType: false,
      type: 'POST',
      success: function (data) {
        console.log(data);
        console.log('veikia');
        $('.loader').toggleClass("display-none");
      }
  });


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


//close mobile meniu onclick on screen
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
  // fixed_screen.classList.toggle(`fixed-screen`);
});

$('.close-window').click(function(){
  $(modalWindow).toggleClass('display-block');
  // fixed_screen.classList.toggle(`fixed-screen`);
});

});

//
//Product inner page
//slider
// //
// var slideIndex = 1;
// showSlideImage(slideIndex);


// function slideImage(n) {
//   showSlideImage(slideIndex += n);
//   // myFunction(minCount += n, maxCount += n)
// }


// let myFunction = (n, m) => {
//   // console.log(n, m);

//   let i,y
//   imageOnShow = document.querySelectorAll(".slider-image_small");

//   if (m > imageOnShow.length){
//     // maxCount = 3
//     imageOnShow[1,2,0].style.display = 'block'
//   }
//   if (n < 0){
//     minCount = 1
//     maxCount = 4
//   }

//   // for (i = 0; i < imageOnShow.length; i++) {
//   //   imageOnShow[i].style.display = 'none'
//   // }

//   for (y = n; y < m; y++){
//     imageOnShow[y].style.display = 'block'
//   }
// }
// myFunction(minCount, maxCount)

//
// Image modal window
let imageModalWindow = document.querySelector(".image-modal");
let modalImage = document.querySelector(".modal-content");
let currentImage = document.querySelector(".slider-image")
let fixed_screen = document.querySelector(`body`)

let openModal = () => {
  
  imageModalWindow.style.display = 'block';
  modalImage.src = currentImage.src;
  fixed_screen.classList.toggle(`fixed-screen`);

};

let closeModal = () => {
  imageModalWindow.style.display = 'none';
  fixed_screen.classList.toggle(`fixed-screen`);
};



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


let aaaa = document.querySelector('.description_tabs')
window.onload = () => {
  if(document.querySelector('html').contains(aaaa)){
    console.log('yra');
    document.querySelector('.description_tabs').firstElementChild.classList.add("active");
    document.querySelector('.description-content').firstElementChild.classList.add("content-block");
  }
  // else{
  //   console.log('nera')
  // }

}

