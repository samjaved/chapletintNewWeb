function counter(){   
  $('.count').each(function(){
      if ($(this).hasClass('start')){
          var elementTop = $(this).offset().top;
          var elementBottom = elementTop + $(this).outerHeight();
          var viewportTop = $(window).scrollTop();
          var viewportBottom = viewportTop + $(window).height();
          if(elementBottom > viewportTop && elementTop < viewportBottom){
              $(this).removeClass('start');
              $(this).animate({
                  Counter: $(this).text()
              }, {
                  duration: 5000,
                  easing: 'swing',
                  step: function (now) {
                      $(this).text(Math.ceil(now));
                  }
              });
          }
      }
  });
}
$(window).on('scroll', counter);
$(document).on('ready', counter);

$(document).ready(function(){
    $('#productslisting').owlCarousel({
    loop:false,
    margin:30,
    center:false,
    dots:false,
    mouseDrag:true,
    autoplay:false,
    autoplayTimeout:2000,
    autoplayHoverPause:true,
    mergeFit:true,
    stagePadding:false,
    nav: false,
      navText: ["<div class='left-nav' ><i class='flaticon-027-left-arrow'></i></div>","<div class='right-nav'><i class='flaticon-019-right-arrow'></i></div>"],
        responsive:{
          0:{
              items:1
          },
          500:{
              items:2
          },
          900:{
              items:4
          },
          1199:{
              items:4
          }
      } 
  });
  });



  $(document).ready(function(){
    $('#events').owlCarousel({
    loop:false,
    margin:140,
    center:false,
    dots:false,
    mouseDrag:true,
    autoplay:false,
    autoplayTimeout:2000,
    autoplayHoverPause:true,
    mergeFit:true,
    stagePadding:false,
    nav: true,
      navText: ["<div class='left-nav' ><img src='images/arrow-left.png' /></div>","<div class='right-nav'><img src='images/arrow-right.png' /></div>"],
        responsive:{
          0:{
              items:1
          },
          500:{
              items:2
          },
          900:{
              items:3,
              margin:30
          },
          1400:{
              items:3
          }
      } 
  });
  });

  $(document).ready(function(){
    $('#product__category').owlCarousel({
    loop:false,
    margin:30,
    center:false,
    dots:false,
    mouseDrag:true,
    autoplay:false,
    autoplayTimeout:2000,
    autoplayHoverPause:true,
    mergeFit:true,
    stagePadding:false,
    nav: true,
      navText: ["<div class='left-nav' ><img src='images/arrow-left.png' /></div>","<div class='right-nav'><img src='images/arrow-right.png' /></div>"],
        responsive:{
          0:{
              items:1
          },
          500:{
              items:2
          },
          900:{
              items:3,
              margin:30
          },
          1400:{
              items:4
          },
          1650:{
            items:5
        }
      } 
  });
  });

  $(document).ready(function(){
    $('#portfolio').owlCarousel({
    loop:false,
    center:false,
    margin:30,
    URLhashListener:true,
    startPosition: 'URLHash',
    autoWidth:true,
    nav: true,
      navText: ["<div class='left-nav' ><i class='flaticon-027-left-arrow'></i></div>","<div class='right-nav'><i class='flaticon-019-right-arrow'></i></div>"],
        responsive:{
          0:{
              items:1
          },
          500:{
              items:2
          },
          900:{
              items:5
          },
          1199:{
              items:5
          }
      } 
  });
  });

  $(document).ready(function(){
    $('#blog').owlCarousel({
    loop:true,
    margin:30,
    center:false,
    dots:false,
    mouseDrag:true,
    autoplay:true,
    autoplayTimeout:2000,
    autoplayHoverPause:true,
    mergeFit:true,
    stagePadding:false,
    nav: false,
      navText: ["<div class='left-nav' ><i class='flaticon-027-left-arrow'></i></div>","<div class='right-nav'><i class='flaticon-019-right-arrow'></i></div>"],
        responsive:{
          0:{
              items:1
          },
          500:{
              items:1
          },
          900:{
              items:2
          },
          1199:{
              items:3
          }
      } 
  });
  });



window.onscroll = () => {
    const nav = document.querySelector('#navbar');
    if(this.scrollY <= 700) nav.className = ''; else nav.className = 'scroll';
};


// Side Nav Start


// Side Nav Open
$(document).ready(function () {
    $("#Sidenav-button").click(function(){
      $("#sidenav").toggleClass("side-nav").css({"transition": "all 0.5s ease"});
    });
    $("#Sidenav-button").click(function(){
      $("#main").toggleClass("main-body").css({"transition": "all 0.5s ease"});
    });
    $("#Sidenav-button").click(function(){
      $("#swiper-slide").toggleClass("swiperslidemn").css({"transition": "all 0.5s ease"});
    });
    $("#Sidenav-button").click(function(){
      $(".button-none").toggleClass("button-none-n").css({"transition": "all 0.5s ease"});
    });
    $("#Sidenav-button").click(function(){
      $(".sub-main").toggle("");
    });
  });
  
  
  
  // Side Nav Close
  $(document).ready(function () {
    $("#Sidenav-close").click(function(){
      $("#sidenav").toggleClass("side-nav").css({"transition": "all 0.5s ease"});
    });
    $("#Sidenav-close").click(function(){
      $("#main").toggleClass("main-body").css({"transition": "all 0.5s ease"});
    });
    $("#Sidenav-close").click(function(){
      $("#swiper-slide").toggleClass("swiperslidemn").css({"transition": "all 0.5s ease"});
    });
    $("#Sidenav-close").click(function(){
      $(".button-none").toggleClass("button-none-n").css({"transition": "all 0.5s ease"});
    });
    $("#Sidenav-close").click(function(){
      $(".sub-main").toggle("");
    });
  });
  
  
  $(document).ready(function () {
    $("#Sidenav-close-body").click(function(){
      $("#sidenav").toggleClass("side-nav").css({"transition": "all 0.5s ease"});
    });
    $("#Sidenav-close-body").click(function(){
      $("#main").toggleClass("main-body").css({"transition": "all 0.5s ease"});
    });
    $("#Sidenav-close-body").click(function(){
      $("#swiper-slide").toggleClass("swiperslidemn").css({"transition": "all 0.5s ease"});
    });
    $("#Sidenav-close-body").click(function(){
      $(".button-none").toggleClass("button-none-n").css({"transition": "all 0.5s ease"});
    });
    $("#Sidenav-close-body").click(function(){
      $(".sub-main").toggle("");
    });
  });
  // Side Nav End

 // Mobile Menu
 $(document).ready(function(){
    $("#s-open").click(function(){
      $("#search").toggleClass("search-show").css({"transition": "all 0.7s ease"});
    });
    $("#s-close").click(function(){
      $("#search").toggleClass("search-show").css({"transition": "all 0.3s ease"});
    });
});


// Mobile Menu
$(document).ready(function(){
    $("#mobile-menu-open").click(function(){
        $("#mobile-menu-show").toggleClass("mobile-show").css({"transition": "all 0.7s ease"});
    });

    $("#mobile-menu-close").click(function(){
        $("#mobile-menu-show").toggleClass("mobile-show").css({"transition": "all 0.3s ease"});
    });
});


// Search
$(document).ready(function(){
  $("#search__button__open").click(function(){
      $("#search__main").toggleClass("search__show").css({"transition": "all 0.5s ease"});
      $("#overly__div").toggleClass("overly__show").css({"transition": "all 0.3s ease"});
  });
  $("#search__button__close").click(function(){
      $("#search__main").toggleClass("search__show").css({"transition": "all 0.3s ease"});
      $("#overly__div").toggleClass("overly__show").css({"transition": "all 0.7s ease"});
  });
});


$(document).ready(function(){
  
  /* 1. Visualizing things on Hover - See next part for action on click */
  $('#stars li').on('mouseover', function(){
    var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on
   
    // Now highlight all the stars that's not after the current hovered star
    $(this).parent().children('li.star').each(function(e){
      if (e < onStar) {
        $(this).addClass('hover');
      }
      else {
        $(this).removeClass('hover');
      }
    });
    
  }).on('mouseout', function(){
    $(this).parent().children('li.star').each(function(e){
      $(this).removeClass('hover');
    });
  });
  
  
  /* 2. Action to perform on click */
  $('#stars li').on('click', function(){
    var onStar = parseInt($(this).data('value'), 10); // The star currently selected
    var stars = $(this).parent().children('li.star');
    
    for (i = 0; i < stars.length; i++) {
      $(stars[i]).removeClass('selected');
    }
    
    for (i = 0; i < onStar; i++) {
      $(stars[i]).addClass('selected');
    }
    
    // JUST RESPONSE (Not needed)
    var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
    var msg = "";
    if (ratingValue > 1) {
        msg = "Thanks! You rated this " + ratingValue + " stars.";
    }
    else {
        msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
    }
    responseMessage(msg);
    
  });
  
  
});



jQuery(function($) {

  // Function which adds the 'animated' class to any '.animatable' in view
  var doAnimations = function() {
    
    // Calc current offset and get all animatables
    var offset = $(window).scrollTop() + $(window).height(),
        $animatables = $('.animatable');
    
    // Unbind scroll handler if we have no animatables
    if ($animatables.length == 0) {
      $(window).off('scroll', doAnimations);
    }
    
    // Check all animatables and animate them if necessary
    $animatables.each(function(i) {
       var $animatable = $(this);
      if (($animatable.offset().top + $animatable.height() - 20) < offset) {
        $animatable.removeClass('animatable').addClass('animated');
      }
    });
  
  };
  
  // Hook doAnimations on scroll, and trigger a scroll
  $(window).on('scroll', doAnimations);
  $(window).trigger('scroll');
  
  });


$(document).ready(function(){
  $(".dropdown").hover(            
      function() {
          $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).fadeIn("400");
          $(this).toggleClass('open');        
      },
      function() {
          $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).fadeOut("400");
          $(this).toggleClass('open');       
      }
  );
});

jQuery(".navbar-nav .nav-item .nav-link").click(function() {
    jQuery(this).parent().addClass('active').siblings().removeClass('active');

});

function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'en',autoDisplay: false}, 'google_translate_element2');}
/* <![CDATA[ */
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
/* ]]> */