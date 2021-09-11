//Get the button
var mybutton = document.getElementById("topbuttom");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > ht/2 || document.documentElement.scrollTop > ht/2) {
    mybutton.style.display = "none";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topfunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

var mybbutton = document.querySelector("#bbuttom");

window.onscroll = function() {bscrollFunction()};
var ht=document.body.scrollHeight;
function bscrollFunction(){
    if (document.body.scrollTop <h/2 || document.documentElement.scrollTop <h/2){
        mybbutton.style.display = "none";
    } else {
        mybbutton.style.display = "none";
    }
}
// When the user clicks on the button, scroll to the top of the document
function bfunction() {
    document.body.scrollTop = ht;
    document.documentElement.scrollTop = ht;
  }

  var h=document.body.scrollHeight;
  $(document).ready(function() {
      $('#bbuttom').show();
      $(window).scroll(function() {
          if ($(document).scrollTop() > 100) {
             // $('.sidenav').fadeOut('slow');
             $('#bbuttom').hide()
             $('#topbuttom').show()
             console.log($(document).scrollTop());
          }
          else if( $(document).scrollTop()<100) {
              $('#bbuttom').show();
              $('#topbuttom').hide();          
            }
      });
  })