$(document).ready(function() {
    $(".loading").delay(1500).fadeOut();
    $("steb-but").click(function(){
    })

   
     // Trigger Nice Scroll Plagin
    
    // Change Header Height

    $("header").height($(window).height())

    // Scroll To Features

    $('header .arrow i').click(
        function(){
            $('html , body').animate({
                scrollTop:$('.features').offset().top
            },1000)
        });
    // show navbar

    $(window).scroll(function() {
        if ($(document).scrollTop() > 57) {
            $(".navbaro").addClass("navbars");
        } else {
            $(".navbaro").removeClass("navbars");
        }
    });


    $(".show-more").click(function(){
        $(".features .hidden").fadeIn(1000);
        $(this).css("display","none")
    });
    $('.hire').click(function(){
        $('html , body').animate({
            scrollTop:$('.our-team').offset().top
        },1000)
    })
    $('.ourbtn').click(function(){
        $('html , body').animate({
            scrollTop:$('.our-work').offset().top
        },1000)
    })

    $("#scrollup").click(function(){
        $("html , body").animate({
            scrollTop:$("header").offset().top

        },1300)
    })
   $(window).scroll(function() {
        if ($(document).scrollTop() < 600) {
            $(".scrollup").addClass("hidden");
        } else {
            $(".scrollup").removeClass("hidden");
        }
    });

    $(".removeing").click(function(){
        $(".searching").fadeToggle(900)
    })
    $(".fa-cogs").click(function(){
        $(this).toggle(),
            $(".mover").toggle(),
        $(".list-right").toggleClass("nonlist",2000),
        $(".righting").toggleClass("nonrighting",2000)
    }),

    $(".mover").click(function(){
        $(this).toggle(),
            $(".fa-cogs").toggle(),
        $(".list-right").toggleClass("nonlist",2000),
            $(".righting").toggleClass("nonrighting",2000)
    }),
    $(".c1").click(function(){
        var ff=$(".boorderr-botom").css("border-bottom"," 1px solid #218fe6")
    var ff=$(".stroke").css("stroke","#218fe6")
    var ff=$(".boorderr").css("border"," 1px solid #218fe6")
    var ff=$(".fill").css("fill","#218fe6")
    var mm=$(".ss").css("background","#218fe6")
    var ff=$("button").css("background","#218fe6")
    var ss=$(".content").css("background","rgba(33, 143, 230, 0.3)")
    var ss=$(".b").css("background","rgba(33, 143, 230, 0.6)")
    var st=$(".st").css("color","#218fe6")
    $("button").css("background",ff,mm,ss,st)
     }),
    $(".c2").click(function(){
        var ff=$(".boorderr-botom").css("border-bottom"," 1px solid #0f3456")
        var ff=$(".stroke").css("stroke","#0f3456")
        var ff=$(".boorderr").css("border"," 1px solid #0f3456")
        var ff=$(".fill").css("fill","#0f3456")
     var mm=$(".ss").css("background","#0f3456")
     var ff=$("button").css("background","#0f3456")

     var ss=$(".content").css("background","rgba(15, 52, 86, 0.7")
     var st=$(".st").css("color","#0f3456")
    $("button").css("background",ff,mm,ss,st)
    }),
    $(".c3").click(function(){
        var ff=$(".boorderr-botom").css("border-bottom"," 1px solid #2ecfe6")

        var ff=$(".stroke").css("stroke","#2ecfe6")
        var ff=$(".boorderr").css("border"," 1px solid #2ecfe6")
        var ff=$(".fill").css("fill","#2ecfe6")
        var ff=$("button").css("background","#2ecfe6")
        var mm=$(".ss").css("background","#2ecfe6")
        var ss=$(".content").css("background","rgba(46, 207, 230, 0.3)")
        var st=$(".st").css("color","#2ecfe6")
        $("button").css("background",ff,mm,ss,st)
    }),
    $(".c4").click(function(){
        var ff=$(".boorderr-botom").css("border-bottom"," 1px solid #52e6cf")

        var ff=$(".stroke").css("stroke","#52e6cf")
        var ff=$(".boorderr").css("border"," 1px solid #52e6cf")
        var ff=$(".fill").css("fill","#52e6cf")
        var ff=$("button").css("background","#52e6cf")
        var mm=$(".ss").css("background","#52e6cf")
        var ss=$(".content").css("background","rgba(82, 230, 207, 0.3)")
        var st=$(".st").css("color","#52e6cf")
        $("button").css("background",ff,mm,ss,st)
    }),
    $(".c5").click(function(){
        var ff=$(".boorderr-botom").css("border-bottom"," 1px solid #23e6c8")

        var ff=$(".stroke").css("stroke","#23e6c8")
        var ff=$(".boorderr").css("border"," 1px solid #23e6c8")
        var ff=$(".fill").css("fill","#23e6c8")
        var ff=$("button").css("background","#23e6c8")
        var mm=$(".ss").css("background","#23e6c8")
        var ss=$(".content").css("background","rgba(35, 230, 200, 0.3)")
        var st=$(".st").css("color","#23e6c8")
        $("button").css("background",ff,mm,ss,st)
    }),
    $(".c6").click(function(){
        var ff=$(".boorderr-botom").css("border-bottom"," 1px solid #2fe6a0")

        var ff=$(".stroke").css("stroke","#2fe6a0")
        var ff=$(".boorderr").css("border"," 1px solid #2fe6a0")
        var ff=$(".fill").css("fill","#2fe6a0")
        var ff=$("button").css("background","#2fe6a0")
        var mm=$(".ss").css("background","#2fe6a0")
        var ss=$(".content").css("background","rgba(47, 230, 160, 0.3)")
        var st=$(".st").css("color","#2fe6a0")
        $("button").css("background",ff,mm,ss,st)
    }),
    $(".c7").click(function(){
        var ff=$(".boorderr-botom").css("border-bottom"," 1px solid #16e689")

        var ff=$(".stroke").css("stroke","#16e689")
        var ff=$(".boorderr").css("border"," 1px solid #16e689")
        var ff=$(".fill").css("fill","#16e689")
        var ff=$("button").css("background","#16e689")
        var mm=$(".ss").css("background","#16e689")
        var ss=$(".content").css("background"," rgba(22, 230, 137, 0.3)")
        var st=$(".st").css("color","#16e689")
        $("button").css("background",ff,mm,ss,st)
    }),
    $(".c8").click(function(){
        var ff=$(".boorderr-botom").css("border-bottom"," 1px solid #29e64e")

        var ff=$(".stroke").css("stroke","#29e64e")
        var ff=$(".boorderr").css("border"," 1px solid #29e64e")
        var ff=$(".fill").css("fill","#29e64e")
        var ff=$("button").css("background","#29e64e")
        var mm=$(".ss").css("background","#29e64e")
        var ss=$(".content").css("background","rgba(41, 230, 78, 0.3)")
        var st=$(".st").css("color","#29e64e")
        $("button").css("background",ff,mm,ss,st)
    }),
    $(".c9").click(function(){
        var ff=$(".boorderr-botom").css("border-bottom"," 1px solid #85e633")

        var ff=$(".stroke").css("stroke","#85e633")
        var ff=$(".boorderr").css("border"," 1px solid #85e633")
        var ff=$(".fill").css("fill","#85e633")
        var ff=$("button").css("background","#85e633")
        var mm=$(".ss").css("background","#85e633")
        var ss=$(".content").css("background","rgba(133, 230, 51, 0.3)")
        var st=$(".st").css("color","#85e633")
        $("button").css("background",ff,mm,ss,st)
    }),
    $(".c10").click(function(){
        var ff=$(".boorderr-botom").css("border-bottom"," 1px solid #c7e619")

        var ff=$(".stroke").css("stroke","#c7e619")
        var ff=$(".boorderr").css("border"," 1px solid #c7e619")
        var ff=$(".fill").css("fill","#c7e619")
        var ff=$("button").css("background","#c7e619")
        var mm=$("button").css("background","#c7e619")
        var ss=$(".content").css("background","rgba(199, 230, 25, 0.3)")
        var st=$(".st").css("color","#c7e619")
        $("button").css("background",ff,mm,ss,st)
    }),
    $(".c11").click(function(){
        var ff=$(".boorderr-botom").css("border-bottom"," 1px solid #e6de0d")

        var ff=$(".stroke").css("stroke","#e6de0d")
        var ff=$(".boorderr").css("border"," 1px solid #e6de0d")
        var ff=$(".fill").css("fill","#e6de0d")
        var ff=$("button").css("background","#e6de0d")
        var mm=$(".ss").css("background","#e6de0d")
        var ss=$(".content").css("background","rgba(230, 222, 13, 0.3)")
        var st=$(".st").css("color","#e6de0d")
        $("button").css("background",ff,mm,ss,st)
    }),
        $(".c12").click(function(){
            var ff=$(".boorderr-botom").css("border-bottom"," 1px solid #e6af46")

            var ff=$(".stroke").css("stroke","#e6af46")
        var ff=$(".boorderr").css("border"," 1px solid #e6af46")
        var ff=$(".fill").css("fill","#e6af46")
            var ff=$("button").css("background","#e6af46")
            var mm=$(".ss").css("background","#e6af46")
            var ss=$(".content").css("background","rgba(230, 175, 70, 0.3)")
            var st=$(".st").css("color","#e6af46")
            $("button").css("background",ff,mm,ss,st)
        }),
        $(".c13").click(function(){
            var ff=$(".boorderr-botom").css("border-bottom"," 1px solid #e68811")

            var ff=$(".stroke").css("stroke","#e68811")
        var ff=$(".boorderr").css("border"," 1px solid #e68811")
        var ff=$(".fill").css("fill","#e68811")
            var ff=$("button").css("background","#e68811")
            var mm=$(".ss").css("background","#e68811")
            var ss=$(".content").css("background","rgba(230, 136, 17, 0.3)")
            var st=$(".st").css("color","#e68811")
            $("button").css("background",ff,mm,ss,st)
        }),
        $(".c14").click(function(){
            var ff=$(".boorderr-botom").css("border-bottom"," 1px solid #e66e1e")

            var ff=$(".stroke").css("stroke","#e66e1e")
        var ff=$(".boorderr").css("border"," 1px solid #e66e1e")
        var ff=$(".fill").css("fill","#e66e1e")
            var ff=$("button").css("background","#e66e1e")
            var mm=$(".ss").css("background","#e66e1e")
            var ss=$(".content").css("background","rgba(230, 110, 30, 0.4)")
            var st=$(".st").css("color","#e66e1e")
            $("button").css("background",ff,mm,ss,st)
        }),
        $(".c15").click(function(){
            var ff=$(".boorderr-botom").css("border-bottom"," 1px solid #e65517")

            var ff=$(".stroke").css("stroke","#e65517")
        var ff=$(".boorderr").css("border"," 1px solid #e65517")
        var ff=$(".fill").css("fill","#e65517")
            var ff=$("button").css("background","#e65517")
            var mm=$(".ss").css("background","#e65517")
            var ss=$(".content").css("background","rgba(230, 85, 23, 0.4)")
            var st=$(".st").css("color","#e65517")
            $("button").css("background",ff,mm,ss,st)
        }),
        $(".c16").click(function(){
            var ff=$(".boorderr-botom").css("border-bottom"," 1px solid #e63327")

            var ff=$(".stroke").css("stroke","#e63327")
        var ff=$(".boorderr").css("border"," 1px solid #e63327")
        var ff=$(".fill").css("fill","#e63327")
            var ff=$("button").css("background","#e63327")
            var mm=$(".ss").css("background","#e63327")
            var ss=$(".content").css("background","rgba(230, 51, 39, 0.4)")
            var st=$(".st").css("color","#e63327")
            $("button").css("background",ff,mm,ss,st)
        }),
        $(".c17").click(function(){
            var ff=$(".boorderr-botom").css("border-bottom"," 1px solid #e6243d")

            var ff=$(".stroke").css("stroke","#e6243d")
        var ff=$(".boorderr").css("border"," 1px solid #e6243d")
        var ff=$(".fill").css("fill","#e6243d")
            var ff=$("button").css("background","#e6243d")
            var mm=$(".ss").css("background","#e6243d")
            var ss=$(".content").css("background","rgba(230, 36, 61, 0.4)")
            var st=$(".st").css("color","#e6243d")
            $("button").css("background",ff,mm,ss,st)
        }),
        $(".c18").click(function(){
            var ff=$(".boorderr-botom").css("border-bottom"," 1px solid #e65258")

            var ff=$(".stroke").css("stroke","#e65258")
        var ff=$(".boorderr").css("border"," 1px solid #e65258")
        var ff=$(".fill").css("fill","#e65258")
            var ff=$("button").css("background","#e65258")
            var mm=$(".ss").css("background","#e65258")
            var ss=$(".content").css("background","rgba(230, 82, 88, 0.4)")
            var st=$(".st").css("color","#e65258")
            $("button").css("background",ff,mm,ss,st)
        }),
        $(".c19").click(function(){
            var ff=$(".stroke").css("stroke","#e66c85")
            var ff=$(".boorderr-botom").css("border-bottom"," 1px solid #e66c85")

        var ff=$(".boorderr").css("border"," 1px solid #e66c85")
        var ff=$(".fill").css("fill","#e66c85")
            var ff=$("button").css("background","#e66c85")
            var mm=$(".ss").css("background","#e66c85")
            var ss=$(".content").css("background","rgba(230, 108, 133, 0.4)")
            var st=$(".st").css("color","#e66c85")
            $("button").css("background",ff,mm,ss,st)
        }),
        $(".c20").click(function(){
            var ff=$(".stroke").css("stroke","#e66bd5")
            var ff=$(".boorderr-botom").css("border-bottom"," 1px solid #e66bd5")
            var ff=$(".boorderr").css("border"," 1px solid #e66bd5")
        var ff=$(".fill").css("fill","#e66bd5")
            var ff=$("button").css("background","#e66bd5")
            var mm=$(".ss").css("background","#e66bd5")
            var ss=$(".content").css("background"," rgba(230, 107, 213, 0.3)")
            var st=$(".st").css("color","#e66bd5")
            $("button").css("background",ff,mm,ss,st)
        })









        $(".svg-back").hover(function(){
            $(".small-back").fadeToggle()
        });
 



        $(".show-i").click(function(){
            $(".remo i").fadeIn();
        })

        $(".remo i").click(function(){
            $("iframe").fadeOut();
            $(this).fadeOut();
        })


        $(".show-i2").click(function(){
            $(".remo2 i").fadeIn();
        })

        $(".remo2 i").click(function(){
            $("iframe").fadeOut();
            $(this).fadeOut();
        })



        //   show section 1

        $(".show1").click(function(){
            $("iframe").fadeIn();
        })
        $(".show2").click(function(){
            $(".hide2").fadeIn();
        })
        $(".show3").click(function(){
            $(".hide3").fadeIn();
        })
        $(".show4").click(function(){
            $(".hide4 ").fadeIn();
        })
        $(".show5").click(function(){
            $(".hide5 ").fadeIn();
        })
        $(".show6").click(function(){
            $(".hide6 ").fadeIn();
        })
        $(".show7").click(function(){
            $(".hide7 ").fadeIn();
        })
        $(".show8").click(function(){
            $(".hide8 ").fadeIn();
        })


        //   show section 2

        $(".show9").click(function(){
            $(".hide9").fadeIn();
        })
        $(".show10").click(function(){
            $(".hide10").fadeIn();
        })
        $(".show11").click(function(){
            $(".hide11").fadeIn();
        })
        $(".show12").click(function(){
            $(".hide12 ").fadeIn();
        })
        $(".show13").click(function(){
            $(".hide13 ").fadeIn();
        })
        $(".show14").click(function(){
            $(".hide14 ").fadeIn();
        })
        $(".show15").click(function(){
            $(".hide15 ").fadeIn();
        })




      






        $(".pdf-hom h6").click(function(){
            $(".pdf-list").slideToggle(1000)
        })
});






