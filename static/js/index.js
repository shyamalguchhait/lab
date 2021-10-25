$(document).ready(function(){
    $(".research .img").each(function(index, element){
        let cls = element.parentElement.parentElement.parentElement.id;
        let name = "#" + cls + "> .write";
        console.log(name);
        $(element).hover(function(){
            $(name).show();
            $(this).css("color","white","background-color","black");
        },
        function(){
            $(name).hide();
        });
        });
    });
