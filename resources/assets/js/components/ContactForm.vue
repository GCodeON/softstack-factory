<template>
    <div id="contact-form-container" class="margin-top-2">
        <form id="contact-us-form" data-mailchimp="https://rescueagency.us9.list-manage.com/subscribe/post-json?u=cf08e6aa3d7ef4ad33c4e0a9d&amp;id=2fc6b3060c" data-abide novalidate
              method="post" action="" v-if="!formComplete">

            <div class="row align-center">
                <div class="small-12 medium-8 columns">
                    <div id="form-message" class="margin-bottom-2 alert callout hide"></div>
                    <div id="form-alert" data-abide-error class="margin-bottom-2 alert callout" style="display: none;">
                        <p><i class="fi-alert"></i> <span class="message">There are some errors in your form.</span></p>
                    </div>
                    <label class="lead ">Email Address *</label>
                    <input type="text" v-model="data.email" required pattern="email">
                    <div class="row">
                        <div class="column small-12 medium-6 medium-centered">
                            <label class="lead ">First name</label>
                            <input type="text" v-model="data.firstname">
                        </div>
                        <div class="column small-12 medium-6 medium-centered">
                            <label class="lead ">Last name</label>
                            <input type="text" v-model="data.lastname">
                        </div>
                    </div>
                    <label class="lead ">Subject</label>
                    <input type="text" v-model="data.subject">
                    <label class="lead ">Message *</label>
                    <textarea name="message" v-model="data.message" class="message" required></textarea>
                    <button type="submit" class="button">Submit</button>
                </div>
            </div>
        </form>
        <transition name="slide-fade">
        <div class="row column small-12" v-if="formComplete">
            <div class="form-complete thank-you card-1 margin-vertical-3">
                <div class="row align-center">
                    <div class="column medium-9">
                        <h5>Thank you for contacting us!</h5>
                        <p>You should receive an email within the next two business days.</p>
                    </div>
                </div>
            </div>
        </div>
        </transition>
    </div>
</template>

<script>
    var vue,
        FormValidation = require('../form-validation'),
        MailChimp      = require('../mailchimp');

    export default {
        name   : "contact-form",
        props  : [],
        data() {
            vue        = this;
            return {
                data        : {},
                formComplete: false,
            };
        },
        mounted() {
            FormValidation.bind('#contact-form-container', function () {
                var $elem = $('[data-mailchimp]');
                vue.formComplete = true;

                if ($elem) {
                    MailChimp.request(
                        $elem.data('mailchimp'),
                        {
                            EMAIL: vue.data.email,
                            FNAME: vue.data.firstname || '',
                            LNAME: vue.data.lastname || '',
                            SUBJECT: vue.data.subject || '',
                            MESSAGE: vue.data.message
                        }
                    );
                }
            }, function () {
                // do nothing
            });
        },
        methods: {
            submit: function () {
//                console.log('viewing 3 more cards');
            }
        },
        watch  : {}
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