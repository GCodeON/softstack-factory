$( document ).ready(function() {

    var show = 3,
        offset = 0;

    $(".support-cards").find(".card-block").slice(3).hide();

    offset += 3;

    $('.support-cards').removeClass('hide');
    $( ".view-more" ).click(function() {
        var $elements = $(".support-cards").find(".card-block").slice(offset, offset+show);
        $elements.fadeIn('slow');

        if($elements.length < 3){
            $( ".view-more" ).fadeOut();
        }
        offset += show;

    });

/*move me*/
    var iframe = $('.heroModal-iframe');
    var src = iframe.attr('src');
    // $("a[data-toggle=\'heroModal\']").click(function() {
    //     //iframe.attr('src', src + '?autoplay=1');
    //
    //      var player = new Vimeo.Player(iframe.get(0));
    //
    //     console.log("hi", iframe, player);
    //     player.on('timeupdate', function(data) {
    //         console.log(data);
    //     });
    //
    //     player.on('progress', function(data) {
    //         console.log(data);
    //     });
    //
    //     player.on('seeked', function(data) {
    //         console.log(data);
    //     });
    //
    //     player.on('play', function(data) {
    //         console.log(data);
    //     });
    // });
    //
    // $(".close-button").click(function() {
    //     ///iframe.attr('src', src);
    // });
});

