jQuery(document).ready(function($) {

    $('.sub-menu1 ul').removeClass('sub-menu1').addClass('sub-menu2');

    $('.show_menu').click(function(){
        $('.wrap_menu_top, .blog_menu').slideToggle();
    });
    
    $(window).on('load resize', function(){
        if($(window).width() >= 800){
            $('.wrap_menu_top, .blog_menu').show();
        }  
    });

    //dropdown for articles & videos
    $('#menu-hover li').hover(function() {
        $(this).addClass('menu_item_hovered4');
        $(this).children('#menu-hover li > ul.sub-menu1').slideDown(100);
    }, function() {
        $(this).removeClass('menu_item_hovered4');
        $(this).removeClass('menu_item_hovered3');
        $(this).children('#menu-hover li > ul.sub-menu1').slideUp(200);
    });
    
    
    //display search bar on mobile
    $('.show_search').click(function(){
        $('#mobile_search_box').fadeToggle();
    });
    
    
    //open sides menus on mobile
    $('.left-off-canvas-toggle, .right-off-canvas-toggle, .exit-off-canvas').on('click', function(){
        
        if($(this).hasClass('left-off-canvas-toggle')){
            $('.off-canvas-wrap').toggleClass('move-right');
            
            if($('.off-canvas-wrap').hasClass('move-right')){
                sessionStorage.setItem('scrollBarPos', $(document).scrollTop());
                
                $('html, body').animate({
                    scrollTop: 0
                }, 0);
            }else{
                setTimeout(function(){
                    $('html, body').animate({
                        scrollTop: sessionStorage.getItem('scrollBarPos')
                    }, 0);
                },650);
                
            }

        }else if($(this).hasClass('right-off-canvas-toggle')){
            $('.off-canvas-wrap').toggleClass('move-left');
        }else{
            $('.off-canvas-wrap').removeClass('move-right move-left');
        }
    });
    
    
     $('.accordion').accordion();
     
     $(document).find('.hreview-aggregate').detach().appendTo('#comments');
	
});