$( document ).ready(function() {
    // var iframe = $('.heroModal-iframe');
    // var src = iframe.attr('src');
    // $("a[data-toggle=\'heroModal\']").click(function() {
    //     console.log(iframe);
    //     //iframe.attr('src', src + '?autoplay=1');
    //
    //     var player = new Vimeo.Player(iframe.get(0));
    //
    //     player.play();
    // });
    //
    // $(".close-button").click(function() {
    //     //iframe.attr('src', src);
    // });

    var $videoModal = $("#heroModal"),
        $iframe = $(".heroModal-iframe"),
        player;

    if(! $videoModal.length || !$iframe.length){
        return;
    }

    player = new Vimeo.Player($iframe);

    $videoModal.on("open.zf.reveal", function(){
        player.play();
    });

    $videoModal.on("closed.zf.reveal", function(){
        player.setCurrentTime(0);
        player.pause();

        $iframe.trigger("rescue.video-closed");
    });
});

