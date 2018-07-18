<template>
    <div id="spread-the-word-container">
        <form @submit.prevent data-abide novalidate method="post" action="" v-if="!formComplete"
              data-mailchimp="https://gcodeon.us18.list-manage.com/subscribe/post?u=70eff57570475b3386e13f41d&amp;id=f8d384a4c6">
            <div id="form-alert" data-abide-error class="margin-bottom-2 alert callout" style="display: none;">
                <p><i class="fi-alert"></i> <span class="message">Please check the permissions box to sign up for our newsletter.</span></p>
            </div>
            <div class="row">
                <div class="columns text-center large-9 medium-9 small-12">
                    <label>
                        <input type="text" v-model="data.email" name="email" placeholder="Enter Your Email Address" pattern="email" required>
                        <span class="form-error">Valid email required</span>
                    </label>
                    <label class="text-left">
                        <input type="checkbox" v-model="data.permission" id="can-share" name="can-share" value="1" required>
                        I would like to receive emails from SoftStack Factory
                        <span class="form-error"> Checkbox is required</span>
                    </label>
                </div>
                <div class="columns text-center large-3 medium-3 small-12 no-padding">
                    <button type="submit" class="button join-newsletter-btn">Join</button>
                </div>
            </div>

        </form>
        <div class="row column small-12" v-if="formComplete">
            <div class="thank-you form-complete card-1">
                <div class="row align-center">
                    <div class="column medium-9">
                        <h5>Thank you for signing up!</h5>
                        <p class="font-bold">Stay tuned for more program updates.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    var vue,
        FormValidation = require('../form-validation'),
        analytics = require("../analytics"),
        MailChimp = require('../mailchimp');

    export default {
        name   : "contact-form",
        data() {
            vue = this;

            return {
                data        : {},
                formComplete: false,
            };
        },
        mounted() {
            FormValidation.bind('#spread-the-word-container', function () {
                vue.formComplete = true;

                if ($('[data-mailchimp]')) {
                    analytics.fireEvent("submit", "form", "email signup");
                    MailChimp.request(
                        $('[data-mailchimp]').data('mailchimp'),
                        {
                            EMAIL: vue.data.email
                        }
                    );
                }
            }, function () {

            });
        },
        methods: {},
        watch  : {}
    };
</script>


<style scoped>

</style>