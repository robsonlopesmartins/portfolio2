$(document).on('ready', function(){
    $(document).on('click', '.list-tabs li', function(){
        var clickedCat = $(this).attr('data-cat');
        $('.list-tabs li').removeClass('active');
        $(this).addClass('active');
        
        $('.list-blocks .item').hide();

        $('.list-blocks .item').map(function(index, item){
            var currCats = $(item).attr('data-cat').split(',');
            if(currCats.indexOf(clickedCat) != -1){
                $(item).show();
            }
        });
        if(clickedCat == 'all'){
            $('.list-blocks .item:not(.empty)').show();
        }
        if(clickedCat == 'product-design'){
            $('.list-blocks .item.empty').show();
        }
    })

    $(document).on('click', '.btn-action', function(){
        $('html, body').animate({
            scrollTop: $('.work-list').eq(0).offset().top - 70
        }, 500);
        return false;
    })

    var toTop = $('#backToTop');

    $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
            toTop.addClass('show');
        } else {
            toTop.removeClass('show');
        }
    });

    toTop.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop:0}, '300');
    });
});