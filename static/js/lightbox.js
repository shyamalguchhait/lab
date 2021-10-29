$(document).ready(function(){
  $("#prev").click(function(){
      plusSlides(-1);
  });
  $("#next").click(function(){
    plusSlides(+1);
  });
  $(document).keydown(function (event) {
    if (event.which == 37){
      plusSlides(-1);
    }
    if (event.which == 39){
      plusSlides(1);
    }
  });
});
document.addEventListener("swiped-left", function(e){plusSlides(-1)});
document.addEventListener("swiped-right", function(e){plusSlides(1)});
$(document).ready(function(){
  $(".imggrid").each(function(index){
    $(this).click(function(){
      openModal();
      currentSlide(index+1);
      console.log(index);
    });  
  });

  $(".image-small-show").each(function(index){
    $(this).click(function(){
      currentSlide(index+1);
    });
  });
});

function openModal() {
  document.getElementById("modal").style.display = "block";
  document.getElementById("lightbox").style.display = "none";
}
  
function closeModal() {
  document.getElementById("modal").style.display = "none";
  document.getElementById("lightbox").style.display = "block";
}
  
var slideIndex = 1; 
showSlides(slideIndex);
  
function plusSlides(n) {
  showSlides(slideIndex += n); 
}
  
function currentSlide(n) {
  showSlides(slideIndex = n);
}
  
function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("slides");
  var dots = document.getElementsByClassName("img");
  var actives = document.getElementsByClassName("image-small-show");
  var captionText = document.getElementById("figcaption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
      actives[i].firstElementChild.style.opacity = 0.5;
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  actives[slideIndex-1].firstElementChild.style.opacity = 1.;

  //captionText.innerHTML = dots[slideIndex-1].alt;
  if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
    // true for mobile device
    //document.write("mobile device");
    $(".scroll").css("display","none");
  }else{
    // false for not mobile device
    //document.write("not mobile device");
  }
}
$(document).ready(function(){
  if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
    // true for mobile device
    //document.write("mobile device");
    $(".scroll").css("display","none");
  }else{
    // false for not mobile device
    //document.write("not mobile device");
  }
});





