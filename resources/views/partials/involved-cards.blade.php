<div class="experience support-cards hide">

    <div class="row gutter-small large-up-3 medium-up-2 small-up-1">
        <?php //dd($cards); ?>
        @foreach($cards as $card)
            @include('partials.card', ["card" => $card])
        @endforeach
    </div>

    <div class="row column small-12">
        <div class="clearfix">
            <button class="right view-more" data-analytics-click data-analytics-action="interaction">
                View More <i class="fas fa-long-arrow-alt-right"></i>
            </button>
        </div>
    </div>

</div>

