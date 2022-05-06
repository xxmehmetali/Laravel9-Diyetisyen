
//  PUTS USER'S IP INTO FORM
$(document).ready(function() {
    $.get("https://api.ipify.org", function(data){
        $(".ip_hidden").attr("value",data);
    });
});

window.onload = function WindowLoad(event) {
    $('.showTable td:first-child').each(function () {
        $(this).addClass("width-20vw");
    });
}

