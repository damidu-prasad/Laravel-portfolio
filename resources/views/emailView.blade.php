<form id="contact-form" class="form w-100" method="POST" action="{{ url('contact_mail') }}" data-toggle="validator">
    {{ csrf_field() }}
    <div class="messages"></div>
    <div class="input__wrap controls">
        <div class="d-grid grid-md-2" data-dsn-gap="0px 30px">
            <div class="form-group dsn-up">
                <div class="entry-box">
                    <input id="form_name" type="text" name="full-name" placeholder="Type your name" required="required"
                        data-error="name is required." />
                </div>
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group dsn-up">
                <div class="entry-box">

                    <input id="form_email" type="email" name="email" placeholder="Type your Email Address"
                        required="required" data-error="Valid email is required." />
                </div>
                <div class="help-block with-errors"></div>
            </div>
        </div>


        <div class="form-group dsn-up">
            <div class="entry-box">

                <textarea id="form_message" class="form-control" name="message" rows="7"
                    placeholder="Tell us about you and the world" required="required" data-error="Please,leave us a message."></textarea>
            </div>
            <div class="help-block with-errors"></div>
        </div>

        <div class="d-flex dsn-up">
            <div class="image-zoom move-circle border-color-default border-style border-rdu" data-dsn="parallax">
                <input type="submit" value="Send Message">
            </div>
        </div>
    </div>
</form>
