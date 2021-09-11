var h=document.body.scrollHeight;
console.log(h);
$(document).ready(function() {
    if ($(document).width() < 900){
        $('.sidenav').hide();
    } else{
        $('.sidenav').show();
        $('.main').css({" margin-left:":"0px !important;"});
    }
    console.log($(document).width());
    $(window).scroll(function() {
        if ($(document).scrollTop() > 100) {
           // $('.sidenav').fadeOut('slow');
           $('.sidenav').css({"margin-top":"0"});
           console.log($(document).scrollTop());
        }
        else if ($(document).scrollTop()< 104) {
            $('.sidenav').css({"margin-top":"104px"});
        }
    });
})