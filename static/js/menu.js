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
   $(".toggle").click(function(){// click 
      if($("input:checked").val()){
         document.documentElement.setAttribute("data-theme","dark");
         $.cookie("theme","dark");
      } else {
         document.documentElement.setAttribute("data-theme", "light");
         $.cookie("theme", "light");
      };
      
   });
   var theme = $.cookie("theme");
   if (theme){
      if (theme == "dark"){
         document.documentElement.setAttribute("data-theme","dark");
         $("#switch").prop("checked", true);
      } else{
         document.documentElement.setAttribute("data-theme","light");
         $("#switch").prop("checked", false);
      }

   }else{
      const darkThemeMq = window.matchMedia("(prefers-color-scheme: dark)")
      if (darkThemeMq.matches){
         document.documentElement.setAttribute("data-theme","dark");
         $("#switch").prop("checked", "true");
      } else{
         document.documentElement.setAttribute("data-theme","light");
      }
   }
});
