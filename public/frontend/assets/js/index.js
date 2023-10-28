//=========== This section for mobile menu ============ 

function myFunction() {
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }

//=========== This section for Back to top btn ============ 
let mybutton = document.getElementById("topBtn");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

//================== Owl Carousel for About bottom Js=================
$('.owl-carousel').owlCarousel({
  loop: true,
  margin: 20,
  nav:  false,
  dots: true,
  autoplay: true,
  autoplayTimeout: 4000,
  responsive:{
    0:{
      items:1
    },
    600:{
      items:1
    },
    1000:{
      items:2
    }
  }
})


//================== Slick Slider Js=================

$(document).ready(function(){
  $('.single-item').slick({
    autoplay: true,
    autoplayTimeout: 2000,
    dots: true,
    infinite: true,
  });
});


//============= Inner Video===============
var btn = document.getElementById("preview");
var popUp = document.getElementById("video_popup");

var close = document.getElementsByClassName("video_close")[0];

  btn.onclick = function(){
    popUp.style.display = "block";
  }

  close.onclick = function(){
    popUp.style.display = "none";
  }


// ============ Client Feedback Sleder ==============


