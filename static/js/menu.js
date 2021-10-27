var lastScrollTop = 0;
var sidenav=document.querySelector(".sidenav");
console.log(sidenav);
// element should be replaced with the actual target element on which you have applied scroll, use window in case of no target element.
document.addEventListener("scroll", function(){ // or window.addEventListener("scroll"....
   var st = window.pageYOffset || document.documentElement.scrollTop; // Credits: "https://github.com/qeremy/so/blob/master/so.dom.js#L426"
   if (st > lastScrollTop){
      sidenav.style.marginTop = "0";
   } else {
      sidenav.style.marginTop = "100px";
   }
   lastScrollTop = st <= 0 ? 0 : st; // For Mobile or negative scrolling
}, false);


$(document).ready(function(){
   $(".toggle").click(function(){
      if($("input:checked").val()){
         document.documentElement.setAttribute("data-theme","dark");
      } else {
         document.documentElement.setAttribute("data-theme", "light");
      };
      
   });
});
