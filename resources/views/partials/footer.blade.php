<div class="footer">

    <div class="row show-for-medium-up hide-for-small-only">
        <div class="columns large-6 ">
            <div class="links nav">
                <ul class="footer-nav">
                    {{--There are two footer menus for desktop and mobile layout--}}
                    <li><a href="/privacy" >Privacy Policy</a></li>
                    <li><a href="/contact-us">Contact Us</a></li>
                </ul>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="small-12 large-6 columns small-centered">
            <div class="logo">
                <a class="ga-logo" href="/" data-ga-category="Navigational Clicks" data-ga-action="Click Header" data-ga-label="Logo">
                    <img src="/images/blank.png" data-interchange="[{{ asset('/images/SSF_white.png') }}, small],
                            [{{ asset('/images/SSF_white.png') }}, medium]" alt="SoftStack Factory logo">
                </a>
            </div>
            <div class="flex-container align-center icons">
                <a href="{{$globals['facebook_url']}}" class="ga-footer-facebook" target="_blank"><i class="fab fa-facebook-square"></i></a>
                <a href="{{$globals['twitter_url']}}" class="ga-footer-twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="{{$globals['linkedin_url']}}" class="ga-footer-linkedin" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>

        <div class="large-6 columns login ">
            <span>SoftStack Factory Members <i class="fas fa-caret-right"></i> </span>
            <button type="button" class="login-btn" onclick="window.location='/admin'">Login</button>
        </div>


        <div class="columns small-12 show-for-small-only">

            <div class="links nav">
                <ul class="footer-nav">
                    <li><a href="/contact-us">Contact Us</a></li>
                    <li><a href="/privacy" >Privacy Policy</a></li>
                </ul>
            </div>

        </div>
    </div>

    <div class="row small-text">

        <div class="small-12 large-6 column">
            <p>SoftStack Factory is a 501(C)3 nonprofit company | ©2018 Softstack Factory | All rights reserved.
            </p>
        </div>
        <div class="small-12 large-6 column">
            <div class="links contact">
                <div class="contact">
                    <!-- <p>SoftStack Factory | 704 J St | San Diego, CA 92101 </p> -->
                </div>
            </div>
        </div>
    </div>
</div>
