<div class="home-hero">
    <div class="hero-bg hero">
        <div class="expanded row">
            <div class="columns small-12 large-10 left-container">
                <div class="video-wrapper image-wrapper">
                @if(Request::is('/'))
                    <video class="full-media" autoplay playsinline muted loop>
                        <source src="/videos/softstack-factory-intro.mp4" type="video/mp4">
                    </video>

                    <div class="video-overlay"></div>

                    <div class="video-control-content">
                        <div class="video-play" data-analytics-action="start" data-analytics-category="video">
                            <a data-toggle="heroModal" data-analytics-click  data-analytics-label="wntb-61-townhall">
                                <i class="fa fa-play-circle" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="title">Watch Videos</div>
                    </div>
                @endif
                </div>
            </div>
            <div class="columns small-12 large-2 right-container">
                <div class="right-content">
                    @if($title)
                        <h1>{{$title}}</h1>
                    @endif
                    <p> {{$content}}</p>
                    <a href="/apply" class="button">Apply Here</a>
                </div>
            </div>


            <div class="image-overlay"></div>
        </div>
    </div>

    <div id="made-in-ny"></div>
    <div class="reveal full" id="heroModal" data-reveal data-reveal >
        <div class="reveal-body">
            <button class="close-button" data-close aria-label="Close reveal" type="button">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class='embed-container'>
                <iframe class="heroModal-iframe vimeo-analytics-iframe"  data-analytics-percents="10,20,30,40,50,60,70,80,90"  width="640" height="360" src="https://www.youtube.com/embed/7GH77LbWU_8?controls=0&amp;showinfo=0;" frameborder="0" allow="autoplay; encrypted-media" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>