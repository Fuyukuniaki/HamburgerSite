
//-------------------------------------------------------------------------
function navActive(){
    $(function () {
        $("nav").toggleClass('active');
        $(".js-shade").toggleClass('inactive');
    });
};

function menu_slide(){
    if( $('.js-button__clickable').length > 0 ||
       $('.js-button__clickable').hasClass('clicked') ){
            $('.js-button__clickable').remove();
            $('.js-shade').removeClass('inactive').remove();
            $('.js-body').removeClass('inactive');
            $('nav').removeClass('active');
            $('.js-button__clickable').removeClass('clicked');
    }
    if(window.matchMedia("(max-width: 834px)").matches){
        $('.js-body').prepend('<h2 class="c-text-color__NavTitle c-text-size__NavTitle p-button__clickable js-button__clickable">Menu</h2>');
        $('.js-body').prepend('<div class="js-shade p-body__Shade"></div>');

        $('.js-button__clickable').each(function(){
            $(this).on('click', function(){
                $.when($('body').toggleClass('inactive'))
                 .done(navActive());
                $(this).toggleClass('clicked');
            });
        });
    }
};

function paginations(){
    $('.page-numbers').each(function(){
        if( $(this).hasClass('prev') ) {
            $('.prev').addClass('c-size__Pagination--prev c-text-size__Pagination--prev c-text-color__Pagination--prev').wrap('<li class="c-mainlist__Pagination--prev c-size__Pagination--prev c-background__Pagination--prev c-margin__Pagination--prev"></li>');
        }
        else if( $(this).hasClass('next') ) {
            $('.next').addClass('c-size__Pagination--next c-text-size__Pagination--next c-text-color__Pagination--next c-text-text-align--right').wrap('<li class="c-mainlist__Pagination--next c-size__Pagination--next c-background__Pagination--next c-margin__Pagination--next"></li>');
        }
        else if( $(this).hasClass('dots') ) {
            $('.dots').wrap('<li class="c-mainlist__Pagination--number c-size__Pagination--number c-text-text-align--center c-margin__Pagination--number c-text-color__Pagination--number"></li>');
        }
        else {
            $(this).addClass('c-size__Pagination--number').wrap('<li class="c-mainlist__Pagination--number c-size__Pagination--number c-text-text-align--center c-margin__Pagination--number c-background__Pagination--number c-text-color__Pagination--number"></li>');
            $('.current').parent('li').addClass('active');
        }
    });
    $('.p-section__Archive-list--pagination')
    .prepend('<li class="c-mainlist__Pagination--fraction c-margin__Pagination--fraction"><span class="c-text-size__Pagination--fraction--title">Page </span><span class="c-mainlist__Pagination--numerator"></span>/<span class="c-mainlist__Pagination--denominator"></span></li>');
    if($('.current').text()!=''){
        $('.c-mainlist__Pagination--numerator').append($('.current').text());
        $('.c-mainlist__Pagination--denominator').append($('.c-size__Pagination--number').filter(':last').text());
    } else if($('.p-section__Archive-list--pagination').children().length == 1){
        $('.p-section__Archive-list--pagination').remove();
    } else {
        $('.c-mainlist__Pagination--numerator').append('1');
        $('.c-mainlist__Pagination--denominator').append('1');
    }
    if(window.matchMedia("(max-width: 599px)").matches){
        if($('.c-size__Pagination--prev').length <= 0){
            $('.p-section__Archive-list--pagination').addClass('flexEnd');
            $('.c-mainlist__Pagination--next').addClass('jumpToNext');
        } else if($('.c-size__Pagination--next').length <= 0){
            $('.p-section__Archive-list--pagination').addClass('flexStart');
            $('.c-mainlist__Pagination--prev').addClass('jumpToPrev');
        } else {
            $('.c-mainlist__Pagination--prev').addClass('jumpToPrev');
            $('.c-mainlist__Pagination--next').addClass('jumpToNext');
        }
    } else {
        $('.c-mainlist__Pagination--prev').removeClass('jumpToPrev');
        $('.c-mainlist__Pagination--next').removeClass('jumpToNext');
    }
};

$(window).one('load', function(){
    paginations();
});
$(window).on('load resize', function(){
    menu_slide();
//-------------------------------------------------------------------------
});