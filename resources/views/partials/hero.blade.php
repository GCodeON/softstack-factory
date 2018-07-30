<div class="hero-bg hero">
    <div class="expanded row">
        <div class="columns small-12 medium-5 left-container">
            <div class="video-wrapper image-wrapper">
                @if(Request::is('/'))
                    <video class="full-media" autoplay playsinline muted loop>
                        <source src="https://player.vimeo.com/external/269681229.sd.mp4?s=ccde78fc1159a26dce8c37210bac058715c6219d&profile_id=165" type="video/mp4">
                    </video>

                    <div class="video-overlay"></div>

                    <div class="video-control-content">
                        <div class="video-play" data-analytics-action="start" data-analytics-category="video">
                            <a data-toggle="heroModal" data-analytics-click data-analytics-label="wntb-61-townhall">
                                <i class="fa fa-play-circle" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="title">Stand up for vermont’s youth</div>
                    </div>
                @endif
            </div>
        </div>
        <div class="columns small-12 medium-7 right-container">
            <div class="right-content">
                @if($title)
                    <h1>{!! $title !!}</h1>
                @endif
                <p> {!! $content !!}</p>
            </div>
        </div>


        <div class="image-overlay"></div>
    </div>


</div>
<div id="made-in-ny"></div>
<div class="reveal full" id="heroModal" data-reveal data-reveal>
    <div class="reveal-body">
        <button class="close-button" data-close aria-label="Close reveal" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class='embed-container'>
            <iframe class="heroModal-iframe vimeo-analytics-iframe" data-analytics-percents="10,20,30,40,50,60,70,80,90" src="https://player.vimeo.com/video/257015422" width="640"
                    height="360"
                    frameborder="0"
                    webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
    </div>
</div>