@extends('layouts.site', ['bodyClass' => 'get-involved'])

@section ('content')
<header>
    @include('partials.hero', $hero)
</header>
<section data-analytics-label="getinvolvedandsupport" data-analytics-category="digital experience">
    @include('partials.involved-cards')
    <div class="row">
        <div class="columns text-center large-10 medium-10 small-12 medium-centered">
            <support-form data-analytics-visibility data-analytics-action="element visible"></support-form>
        </div>
    </div>
</section>

<a name="what-else"></a>
<section class="grid-like">

    <div class="row">
        <div class="columns text-center small-12">
            <h2 class="section-title">WHAT ELSE CAN I DO?</h2>
        </div>
    </div>

    <div class="row">
        <div class="column small-12 medium-5  image-full image-frame">
            <img src="/images/locate.png" alt="locate" />
        </div>
        <div class="column medium-7">
            <h3>
                LOCATE YOUR LOCAL
                COMMUNITY PARTNERS
            </h3>
            <h4>Together with your local community partner, you can:
            </h4>
            <ul>
                <li>
                    Raise awareness by talking with members of your community about how you can protect Vermont's youth from the dangers of tobacco products.
                </li>
                <li>
                    Help pass a local resolution expressing concern about tobacco products being marketed to youth.
                </li>
                <li>
                    Educate community leaders about options to decrease exposure to tobacco products and advertising—like content-neutral signage requirements or safety zones around schools and parks.
                </li>
            </ul>
            <select id="selectMe" data-analytics-change data-analytics-action="click" data-analytics-label="getinvolved-locatecommunitypartners" data-analytics-category="page-content">
                <option value="option1">Select Your County</option>
                <option value="addison">Addison County</option>
                <option value="bennington">Bennington County</option>
                <option value="caledonia">Caledonia County</option>
                <option value="chittenden">Chittenden County</option>
                <option value="essex">Essex County</option>
                <option value="franklin">Franklin County</option>
                <option value="lamoille">Lamoille County</option>
                <option value="orange">Orange County</option>
                <option value="orleans">Orleans County</option>
                <option value="rutland">Rutland County</option>
                <option value="washington">Washington County</option>
                <option value="windham">Windham County</option>
                <option value="windsor">Windsor County</option>
            </select>
            <div class="locations"></div>

        </div>

    </div>
    <div class="row">
        <div class="column medium-5  medium-push-7  small-12 image-full image-frame">
            <img src="/images/help.png" alt="help" />
        </div>

        <div class="column medium-7 medium-pull-5 small-12" data-analytics-category="social-share" data-analytics-label="getinvolved-helpsoundthealarm">
            <h3>
                <span>HELP SOUND</span>
                THE ALARM
            </h3>
            <p>
                Sharing this important information with your own social network is a simple way to help spread the word about how the tobacco industry targets Vermont’s youth.                 </p>
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo URL::current(); ?>" target="_blank"
               data-analytics-click data-analytics-action="facebook share"
               class="button square light-button"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/share?text=I+just+wrote+a+message+for+CounterBalance+to+show+my+concern.+Will+you+join+me+in+protecting+Vermont's+youth+from+being+targeted+by+the+tobacco+industry%3F&url=<?php echo URL::current(); ?>"
               data-analytics-click data-analytics-action="twitter share"
               target="_blank"  class="button square light-button"><i class="fab fa-twitter"></i></a>
        </div>


    </div>
    <div class="row">
        <div class="column medium-6 small-12 video-frame">
            <!-- <img src="/images/are-you.png" alt="Are you?" /> -->
            <div class="responsive-embed">
                <iframe class="full-video youtube-analytics-iframe" src="https://www.youtube.com/embed/oP9MkdBMZ9k?enablejsapi=1"
                        data-analytics-percents="10,20,30,40,50,60,70,80,90" frameborder="0" allowfullscreen=""></iframe>
            </div>
        </div>
        <div class="column medium-6 small-12">
            <h3>
                <span>ARE YOU</span>
                A RETAILER?
            </h3>
            <h4>Your store can help protect Vermont's youth from tobacco. Here are a few options to consider:</h4>
            <ul class="retailerSteps">
                <li>Take down exterior-facing tobacco ads such as sandwich boards or ads in windows</li>

                <li>Choose to not advertise tobacco products by not displaying any ads inside or outside of your store</li>

                <li>Take a step further and keep all tobacco products out of sight (under the counter or in a cabinet)</li>

                <li>Volunteer to stop selling flavored tobacco products</li>

                <li>Volunteer to stop selling all tobacco products</li>

            </ul>
            <p>
                See What Other Vermont Retailers Are Doing to take a stand against the tobacco industry’s influence. 
            </p>
            <a href="/get-the-facts#retailers-doing" class="button">Get The Facts</a>
        </div>
    </div>

</section>


@stop