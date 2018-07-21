<template>
    <div id="support-form-container">
        <form @submit.prevent data-abide novalidate class="text-white">
            <div class="form-section section-one" v-if="!formComplete">
                <p>Support SoftStack Factory by leaving a testimonial</p>
                <textarea rows="4" cols="50"
                          v-model="data.message"
                          id="why-support-textarea"
                          placeholder="Your Message.." required></textarea>
            </div>
            <transition name="slide-fade">
                <div class="form-section section-two" v-show="data.message" v-if="!formComplete">
                    <label id="full">
                        Full Name:
                        <input type="text" v-model="data.fullname" name="full" required>
                    </label>
                    <label id="zip">
                        Job Title:
                        <input type="text" v-model="data.city" required>
                    </label>

                    <button
                            class="primary submit button light-button">
                        Submit
                        <i class="fas fa-angle-right margin-left-1"></i>
                    </button>

                </div>
            </transition>
        </form>
        <transition name="slide-fade">
            <div class="form-section section-three" v-if="formComplete">
                <div class="thank-you form-complete card-1">
                    <div class="row align-center">
                        <div class="column medium-9">
                            <h5>Thank You!</h5>
                            <p>Your testimonial has been submitted!</strong>
                            </p>
                            <a @click.prevent="shareFacebook()" target="_blank"
                               data-analytics-click data-analytics-action="facebook share"
                               class="button square light-button"><i class="fab fa-facebook-f"></i></a>
                            <a v-bind:href="twitterUrl" target="_blank"
                               data-analytics-click data-analytics-action="twitter share"
                               class="button square light-button"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </transition>
    </div>
</template>

<script>
    var analytics     = require("../analytics.js"),
        FacebookShare = require('../facebook-share'),
        vue,
        twitterCopy   = 'Want to learn how to code? Apply now!';

    function firePixel() {
        if (window.fbq) {
            fbq('track', 'CompleteRegistration');
        }
    }

    function bindForm() {
        var $div = $('#support-form-container');

        $div.find('form').off('submit').on('submit', function () {
            event.preventDefault();
        });

        $div.off('forminvalid.zf.abide').on("forminvalid.zf.abide", function (ev, el) {
            console.log('form invalid');
        });

        $div.off('formvalid.zf.abide').on("formvalid.zf.abide", function (ev, el) {
            $.post('/add-support', vue.data || {}, function (response) {
                vue.formComplete = true;
                firePixel();
                analytics.fireEvent("experience-complete", "digital experience", "getinvolvedandsupport");
            });
            console.log('form valid');
        });
    }

    export default {
        name    : "support-form",
        props   : [],
        data() {
            vue = this;
            return {
                formComplete: false,
                twitterCopy : twitterCopy,
                data        : {}
            };
        },
        computed: {
            facebookUrl: function () {
                return 'https://www.facebook.com/sharer/sharer.php?' + $.param({u: location.protocol + '//' + location.hostname});

            },
            twitterUrl : function () {
                return 'https://twitter.com/share?text=' + encodeURIComponent(this.twitterCopy);
            }

        },
        mounted() {
            bindForm();
            var fired = false;
            $("#why-support-textarea").keyup(function () {
                if ($(this).val() && !fired) {
                    fired = true;
                    console.log("fire");
                    analytics.fireEvent("experience-start", "digital experience", "getinvolvedandsupport");
                }
            });
        },
        methods : {
            shareFacebook: function () {
                var host    = [location.protocol, location.host].join('//'),
                    options = {
                        'og:url'         : host + '#get-involved',
                        'og:title'       : 'SoftStack Factory',
                        'og:description' : 'Want to learn how to code? Apply now!',
                        'og:image'       : host + '/images/social-share.jpg',
                        'og:image:height': 630,
                        'og:image:width' : 1200
                    };

                FacebookShare.share(options);

            }
        }
    };
</script>


<style scoped>
    .slide-fade-enter-active {
        transition : all .3s ease;
    }

    .slide-fade-leave-active {
        transition : all .8s cubic-bezier(1.0, 0.5, 0.8, 1.0);
    }

    .slide-fade-enter, .slide-fade-leave-to
        /* .slide-fade-leave-active below version 2.1.8 */
    {
        transform : translateX(10px);
        opacity   : 0;
    }

</style>