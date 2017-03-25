$(document).ready(function() {
    
    
    /* Sticky Navigation */
    $('.sticky-prompt').waypoint(function(direction){
        
        if(direction == "down"){
            $('nav').addClass('sticky');
            $('.hide-navigation').addClass('sticky');
            $('.section-summary').addClass('summary-extended');
            

        } else {
            document.getElementById("toggle-dropdown").checked = true;
            $('nav').removeClass('sticky');
            $('.hide-navigation').removeClass('sticky');
            $('.section-summary').removeClass('summary-extended');

        }
        
    }, {
        offset: '50px;'
    });

    
    /* Scroll on Buttons */
    

    
    $('.js--scroll-to-art-and-design').click(function (){
        $('html, body').stop().animate({scrollTop: $('.js--row-art-and-design').offset().top-200}, 600);
    });
    
    $('.js--scroll-to-music').click(function (){
        $('html, body').stop().animate({scrollTop: $('.js--row-music').offset().top-200}, 600);
    });
    
    $('.js--scroll-to-literature').click(function (){
        $('html, body').stop().animate({scrollTop: $('.js--row-literature').offset().top-200}, 600);
    });
    
    $('.js--scroll-to-cooking').click(function (){
        $('html, body').stop().animate({scrollTop: $('.js--row-cooking').offset().top-200}, 600);
    });
    
    $('.js--scroll-to-fitness').click(function (){
        $('html, body').stop().animate({scrollTop: $('.js--row-fitness').offset().top-200}, 600);
    });
    
    $('.js--scroll-to-sport').click(function (){
        $('html, body').stop().animate({scrollTop: $('.js--row-sport').offset().top-200}, 600);
    });
    
    $('.js--scroll-to-mental').click(function (){
        $('html, body').stop().animate({scrollTop: $('.js--row-mental').offset().top-200}, 600);
    });
    
    $('.js--scroll-to-adventure').click(function (){
        $('html, body').stop().animate({scrollTop: $('.js--row-adventure').offset().top-200}, 600);
    });
    
    $('.js--scroll-to-science-and-technology').click(function (){
        $('html, body').stop().animate({scrollTop: $('.js--row-science-and-technology').offset().top-200}, 600);
    });
    
    $('.js--scroll-to-languages').click(function (){
        $('html, body').stop().animate({scrollTop: $('.js--row-languages').offset().top-200}, 600);
    });
    
    $('.js--scroll-to-politics').click(function (){
        $('html, body').stop().animate({scrollTop: $('.js--row-politics').offset().top-200}, 600);
    });
    
    $('.js--scroll-to-humanity').click(function (){
        $('html, body').stop().animate({scrollTop: $('.js--row-humanity').offset().top-200}, 600);
    });
    
    $('.js--scroll-to-crafting').click(function (){
        $('html, body').stop().animate({scrollTop: $('.js--row-crafting').offset().top-200}, 600);
    });
    
    $('.js--scroll-to-collaboration').click(function (){
        $('html, body').stop().animate({scrollTop: $('.js--row-collaboration').offset().top-200}, 600);
    });
    
    $('.js--scroll-to-entrepreneurship').click(function (){
        $('html, body').stop().animate({scrollTop: $('.js--row-entrepreneurship').offset().top-200}, 600);
    });
    
    $('.js--scroll-to-personal-achievement').click(function (){
        $('html, body').stop().animate({scrollTop: $('.js--row-personal-achievement').offset().top-200}, 600);
    });
    
    
    $(document).ready(function () {

        $('.section-badges').click(
            function () {
                CloseSticky();
            }            
        );
        
        $('.section-summary').click(
            function () {
                CloseSticky();
            }            
        );
        
        $('.mobile-nav-icon').click(
            function () {
                CloseNav();
            }            
        );
    });
    
    function CloseSticky() {
        //alert("Alert Message OnClick");
        document.getElementById("toggle-dropdown").checked = true;
        document.getElementById("toggle-nav-dropdown").checked = true;
    }
    
    function CloseNav() {
        //alert("Alert Message OnClick");
        document.getElementById("toggle-nav-dropdown").checked = true;
    }

});