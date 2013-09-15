@extends('layouts.common')
@section('content')
<div  class="page-contact">
    <!-- /header --><!-- page header -->
    <section id="page-header">
        <div class="container clearfix">
            <hgroup>
                <h1 class="page-title">Contact</h1>
                <h2 class="page-subtitle">Get in touch with us.</h2>
            </hgroup>
            <hr>
        </div>
    </section>
    <!-- /page header -->
    <section id="main-content" class="container clearfix">
        <!-- boxes -->
        <section class="content">
            <!-- left -->
            <article class="col-1-3">
                <h2 class="heading-icon contact">Contact<br><span class="color">let's keep in touch.</span></h2>
                <ul class="details none">
                    <li>
                        <span>Address</span>
                        <div>5/31 Nehru Nagar, New Delhi - 110065</div>
                    </li>
                    <li>
                        <span>Email</span>
                        <div><a href="#">info@company.com</a></div>
                    </li>
                    <li>
                        <span>Tel.</span>
                        <div>(123) 456-789</div>
                    </li>
                </ul>
            </article>
            <!-- /left -->
            <!-- right -->
            <article class="col-2-3 last">
                <form action="http://themes.rascals.eu/eprom_html/dark/plugins/contact-form.php" method="post" class="form contact-form">

                    <p class="input">
                        <label for="contact-name"><strong>Name</strong> (required)</label>
                        <input type="text" name="name" value="" id="contact-name" required>
                    </p>

                    <div class="input">
                        <label for="contact-email"><strong>Email</strong> (required)</label>
                        <input type="email" name="email" value="" id="contact-email" required>
                    </div>

                    <p class="input">
                        <label for="contact-subject"><strong>Subject</strong></label>
                        <input type="text" name="subject" value="" id="contact-subject">
                    </p>

                    <p class="textarea">
                        <label for="contact-message"><strong>Your Message</strong> (required)</label>
                        <textarea name="message" id="contact-message" cols="88" rows="6" required></textarea>
                    </p>

                    <div class="hidden">
                        <label for="contact-spam-check">Do not fill out this field this is spam check.</label>
                        <input name="anty_spam" type="text" value="" id="contact-spam-check" />
                    </div>

                    <input type="submit" value="Submit Message">


                    <div class="clear"></div>

                </form>
            </article>
            <!-- /right -->
        </section>
        <!-- /boxes -->
    </section>

</div>



@stop