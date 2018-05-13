$( document ).ready(function() {
    $(".support-cards").find(".card-block").slice(3).hide();
    $('.support-cards').removeClass('hide');
    $( ".view-more" ).click(function() {
        $(".support-cards").find(".card-block").slice(3).fadeIn('slow');
        $( ".view-more" ).fadeOut();
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

