@extends('layouts.common')
@section('content')
<!-- /header --><div class="fullwidthbanner-container revolution-slider">
    <div class="fullwidthbanner">
        <ul>
            <li data-transition="fade" data-slotamount="8">
                <img src="img/home_slider/paarty.jpg" />
            </li>
            <li data-transition="fade" data-slotamount="8">
                <img src="img/home_slider/event.jpg" />
            </li>

        </ul>
        <div class="tp-bannertimer"></div>
    </div>
</div>
<section id="main-content" class="container clearfix">
    <!-- recent works -->
    <section class="content items portfolio recent-works">
        <!-- item -->
        <article class="col-1-4">
            <h2 class="heading-icon deck">Recent <span class="color">Releases.</span></h2>
            <p>
                Mauris lorem metus, tincidunt quis commodo consectetur.
                <a href="#" class="text-button">View All</a>
            </p>
        </article>
        <!-- /item -->
        <!-- item -->
        <article class="col-1-4 clearfix">
            <a href="#" class="thumb-slide">
				<span class="thumbs-wrap">
					<img src="theme/placeholders/01A-portfolio-thumb-420x420.jpg" alt="" title="" />
					<img src="theme/placeholders/01B-portfolio-thumb-420x420.jpg" alt="" title="" />
				</span>
            </a>
            <footer>
                <h2><a href="#">Strike Back!</a></h2>
                <div class="cat"><a href="#">Glitch</a><a href="#">Breakcore</a></div>
            </footer>
        </article>
        <!-- /item -->
        <!-- item -->
        <article class="col-1-4">
            <a href="#" class="thumb-slide">
                <span class="badge free"></span>
				<span class="thumbs-wrap">
					<img src="theme/placeholders/02A-portfolio-thumb-420x420.jpg" alt="" title="" />
					<img src="theme/placeholders/02B-portfolio-thumb-420x420.jpg" alt="" title="" />
				</span>
            </a>
            <footer>
                <h2><a href="#">Speakerz Massive </a></h2>
                <div class="cat"><a href="#">Glitch</a></div>
            </footer>
        </article>
        <!-- /item -->
        <!-- item -->
        <article class="col-1-4">
            <a href="#" class="thumb-slide">
				<span class="thumbs-wrap">
					<img src="theme/placeholders/03A-portfolio-thumb-420x420.jpg" alt="" title="" />
					<img src="theme/placeholders/03B-portfolio-thumb-420x420.jpg" alt="" title="" />
				</span>
            </a>
            <footer>
                <h2><a href="#">Legacy of Bass</a></h2>
                <div class="cat"><a href="#">Glitch</a><a href="#">Dubstep</a></div>
            </footer>
        </article>
        <!-- /item -->
    </section>
    <div class="clear"></div>
    <!-- /recent-works -->
    <!-- boxes -->
    <section class="boxes">
        <!-- box -->
        <article class="box col-2-3">
            <h2>Hello we’re <span class="color">Eprom.</span></h2>
            <img src="theme/placeholders/about.jpg" alt="About Eprom" class="aligncenter">
            <p>In elementum pellentesque dolor ac gravida. Pellentesque elit leo, accumsan sed consectetur a, semper ac sem. Morbi sodales bibendum risus nec laoreet. Mauris est nisi, consequat vitae porta et, hendrerit sed metus.</p>
            <p>
                Aliquam eu magna vel metus ultrices ornare in et nisi. Quisque porta sodales orci, eu auctor leo tincidunt nec. Suspendisse posuere blandit tortor sit amet varius. Integer condimentum rutrum mi quis lobortis. Etiam consectetur posuere pretium.
                <a href="#" class="text-button">More About Us</a>
            </p>
        </article>
        <!-- /box -->
        <!-- box -->
        <div class="box col-1-3 last">
            <div class="widget">
                <h3>Latest <span class="color">News.</span></h3>
                <ul class="recent-entries">
                    <li><span class="date">23/11/12</span> <a href="#">Pellentesque elit leo, accumsan sed consectetur.</a> </li>
                    <li><span class="date">02/11/12</span> <a href="#">Aliquam eu magna vel metus ultrices ornare in.</a> </li>
                    <li><span class="date">30/10/12</span> <a href="#">Suspendisse posuere blandit tortor sit.</a> </li>
                    <li><span class="date">23/09/12</span> <a href="#">Quisque porta sodales orci.</a> </li>
                    <li><span class="date">07/05/12</span> <a href="#">Mauris est nisi, consequat vitae.</a> </li>
                </ul>
            </div>
            <!-- Twitter feed widget -->
            <div class="widget">
                <h3 class="widget-title">Twitter feed.</h3>
                <!-- twitter feed -->
                <ul class="tweets" data-tweets-count="2">
                    <li>Oops, our Twitter feed is unavailable at the moment - <a href="#">Follow us on Twitter!</a></li>
                </ul>
                <!-- /twitter feed  -->
            </div>
        </div>
        <!-- /box -->
    </section>
    <!-- /boxes -->
    <!-- boxes -->
    <section class="boxes">
        <!-- box -->
        <div class="box col-1-3">
            <h2 class="heading-icon podcast no-margin">Checkout new <br/><span class="color">podcasts.</span></h2>
        </div>
        <!-- /box -->
        <!-- box -->
        <div class="box col-1-3">
            <a href="http://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F37028581&amp;auto_play=false&amp;show_artwork=true&amp;color=fa4c29" class="thumb-icon mediabox tip" data-width="auto" data-height="200" data-tip-title="#United Breaks (48 min)" data-tip-desc="Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc consectetur eros eget lacus fringilla in feugiat odio viverra.">
                <img src="theme/placeholders/02-box-image-420x200.jpg" alt="" title="This is an example of a caption" />
                <span class="icon soundcloud"></span>
            </a>
        </div>
        <!-- /box -->
        <!-- box -->
        <div class="box col-1-3 last">
            <a href="http://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F37028581&amp;auto_play=false&amp;show_artwork=true&amp;color=fa4c29" class="thumb-icon mediabox tip" data-width="auto" data-height="200" data-tip-title="#United Breaks (48 min)" data-tip-desc="Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc consectetur eros eget lacus fringilla in feugiat odio viverra.">
                <img src="theme/placeholders/01-box-image-420x200.jpg" alt="" title="This is an example of a caption" />
                <span class="icon soundcloud"></span>
            </a>
        </div>
        <!-- /box -->
    </section>
    <!-- /boxes -->
</section>
@stop