$(document).ready(function() {

    //  toggler nav bar


    $(window).scroll(function() {
        if ($(document).scrollTop() > 77) {
            $(".navbar").addClass("navbar-tggler");
        } else {
            $(".navbar").removeClass("navbar-tggler");
        }
    });




    //  function list bars in show menu link


    $(".fa-bars").click(function(){
        $(".menu-link").slideToggle(600);
        $(this).css("display","none")
        $(".fa-times").toggle()
    });

    // function list bars hide menu link

    $(".fa-times").click(function(){
        $(".menu-link").slideToggle(600);
        $(this).toggle()
        $(".fa-bars").toggle()
    });



    // width for menu link 
  

    $(window).scroll(function() {
        if ($(document).scrollTop() > 77) {
            $(".menu-link").addClass("menu-fill");
        } else {
            $(".menu-link").removeClass("menu-fill");
        }
    });


});