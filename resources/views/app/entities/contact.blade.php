@extends('app')


@section('css')
@stop

@section('content')
    <div id="primary" class="content-area site-main" role="main" style="">
        
        <!-- Start : Display Page Title Section -->
        <div class="page-title-wrapper">
            <!-- Start : Page Title Section -->
            <div class="page-title"
                 style="background-image: url('../wp-content/themes/hospitalplus/images/header/header.jpg')">
                <div class="container">
                    <h2>Contact</h2>
                </div>
            </div>
            <!-- End : Page Title Section -->
            
            <!-- Start : Breadcrumb Section -->
            <div class="breadcrumb">
                <div class="container">
                    <a href="../../hospitalplus.html">Home</a> <span class="separator fa fa-angle-right"></span> <span
                            class="breadcrumb_last">Contact</span></div>
            </div>
            <!-- End : Breadcrumb Section -->
        </div>
        <!-- End : DIsplay Page Title Section -->
        <div class="main-content fullwidth-content">
            <div class="container">
                <div id="leftcontent">
                    <div class="blog-post-lists">
                        <div class="vc_row wpb_row vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_gmaps_widget wpb_content_element">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_map_wraper">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row wpb_row vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element  contact-info">
                                            <div class="wpb_wrapper">
                                                <div class="contact-wrapper">
                                                    <h2>Nous contacter</h2>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio dolorem ea, eligendi harum impedit mollitia numquam repellat! Consectetur ducimus facilis fugit incidunt magnam modi obcaecati officiis, quam totam vitae voluptates?</p>
                                                    <p></p>
                                                    <div class="contact-detail widget contact-widget">
                                                        <h4 class="widget-title">Information de <strong>contact</strong></h4>
                                                        <ul>
                                                            <li><i class="fa fa-envelope-o"></i> <a
                                                                        href="../../cdn-cgi/l/email-protection.html#ddb4b3bbb29db5b2aeadb4a9bcb1adb1a8aef3beb2b0"><span
                                                                            class="__cf_email__"
                                                                            data-cfemail="f79e999198b79f9884879e83969b879b8284d994989a">Email directeur : <strong>directeur@paradise-valley.com</strong></span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            
                                            </div>
                                        </div>
                                        <div class="widget social-widget social in_container ">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div role="form" class="wpcf7" id="wpcf7-f40-p19-o1" lang="en-US" dir="ltr">
                                            <div class="screen-reader-response"></div>
                                            <form action="#wpcf7-f40-p19-o1" method="post" class="wpcf7-form"
                                                  novalidate="novalidate">
                                                <div style="display: none;">
                                                    <input type="hidden" name="_wpcf7" value="40"/>
                                                    <input type="hidden" name="_wpcf7_version" value="4.9.2"/>
                                                    <input type="hidden" name="_wpcf7_locale" value="en_US"/>
                                                    <input type="hidden" name="_wpcf7_unit_tag"
                                                           value="wpcf7-f40-p19-o1"/>
                                                    <input type="hidden" name="_wpcf7_container_post" value="19"/>
                                                </div>
                                                <div id="contact-form">
                                                    <div class="block-form float-label">
                                                        <div class="form-group col-100">
                                                            <label for="name"> <span>Prénom</span><br/>
                                                                <span class="wpcf7-form-control-wrap name"><input
                                                                            type="text" name="name" value="" size="40"
                                                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required input"
                                                                            id="name" aria-required="true"
                                                                            aria-invalid="false"/></span><br/>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-100">
                                                            <label for="email"> <span>Adresse mail</span><br/>
                                                                <span class="wpcf7-form-control-wrap email"><input
                                                                            type="text" name="email" value="" size="40"
                                                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required input"
                                                                            id="email" aria-required="true"
                                                                            aria-invalid="false"/></span><br/>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-100">
                                                            <label for="telephone"> <span>Tel</span><br/>
                                                                <span class="wpcf7-form-control-wrap telephone"><input
                                                                            type="text" name="telephone" value=""
                                                                            size="40"
                                                                            class="wpcf7-form-control wpcf7-text input"
                                                                            id="telephone"
                                                                            aria-invalid="false"/></span><br/>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-100">
                                                            <label for="message"> <span>Votre demande</span><br/>
                                                                <span class="wpcf7-form-control-wrap message"><textarea
                                                                            name="message" cols="40" rows="10"
                                                                            class="wpcf7-form-control wpcf7-textarea input textarea"
                                                                            id="message"
                                                                            aria-invalid="false"></textarea></span><br/>
                                                            </label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="submit" value="Envoyer"
                                                                   class="wpcf7-form-control wpcf7-submit red button small"
                                                                   id="submit"/>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="wpcf7-response-output wpcf7-display-none"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <!-- START: RESPOND -->
                        <!-- END: RESPOND -->                </div>
                </div>
                
                
                <!-- Start : Sidebar Section -->
                {{--<div id="rightcontent">--}}
                    {{--<div id="widget-search-3" class="widget widget_search">--}}
                        {{--<!-- Start : Search Form Widgets -->--}}
                        {{--<form class="block-form float-label search-form" method="get" action="../index.html">--}}
                            {{--<div class="form-group col-100">--}}
                                {{--<input type="text" id="search" class="input" name="s" value=""/>--}}
                            {{--</div>--}}
                            {{--<button type="submit" class="search-button"></button>--}}
                        {{--</form>--}}
                        {{--<!-- End : Search Form Widgets --></div>--}}
                    {{--<div id="widget-categories-3" class="widget widget_categories"><h4 class="widget-title">Blog--}}
                                                                                                            {{--Categories</h4>--}}
                        {{--<ul>--}}
                            {{--<li class="cat-item cat-item-2"><a href="../category/blogs/index.html">Blogs</a> (10)--}}
                            {{--</li>--}}
                            {{--<li class="cat-item cat-item-3"><a href="../category/counseling/index.html">Counseling</a>--}}
                                {{--(1)--}}
                            {{--</li>--}}
                            {{--<li class="cat-item cat-item-4"><a href="../category/health/index.html">Health</a> (4)--}}
                            {{--</li>--}}
                            {{--<li class="cat-item cat-item-5"><a href="../category/kids/index.html">Kids</a> (3)--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                    {{--<div id="widget-warrior_latest_posts-3" class="widget warrior_latest_posts">--}}
                        {{--<div class="latest-news">--}}
                            {{--<h4 class="widget-title">Latest <strong>Posts</strong></h4>--}}
                            {{--<ul>--}}
                                {{--<li>--}}
                                    {{--<a href="../together-we-can-do-so-much/index.html">Together we can do so much</a>--}}
                                    {{--<div class="entry-meta">--}}
                                        {{--<span><i class="fa fa-calendar"></i>April 8, 2016</span>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="../the-three-musketeers-surgical-team/index.html">The Three Musketeers--}}
                                                                                               {{--Surgical Team</a>--}}
                                    {{--<div class="entry-meta">--}}
                                        {{--<span><i class="fa fa-calendar"></i>April 8, 2016</span>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="../accredited-surgical-facility/index.html">Accredited surgical--}}
                                                                                         {{--facility</a>--}}
                                    {{--<div class="entry-meta">--}}
                                        {{--<span><i class="fa fa-calendar"></i>April 8, 2016</span>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="../health-checks-for-babies/index.html">Health checks for babies</a>--}}
                                    {{--<div class="entry-meta">--}}
                                        {{--<span><i class="fa fa-calendar"></i>April 8, 2016</span>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                            {{----}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{----}}
                    {{--</div>--}}
                    {{--<div id="widget-tag_cloud-2" class="widget widget_tag_cloud"><h4 class="widget-title">Blog Tags</h4>--}}
                        {{--<div class="tagcloud"><a href="../tag/beach/index.html"--}}
                                                 {{--class="tag-cloud-link tag-link-6 tag-link-position-1"--}}
                                                 {{--style="font-size: 12pt;" aria-label="Beach (3 items)">Beach</a>--}}
                            {{--<a href="../tag/health/index.html" class="tag-cloud-link tag-link-7 tag-link-position-2"--}}
                               {{--style="font-size: 22pt;" aria-label="Health (7 items)">Health</a>--}}
                            {{--<a href="../tag/holiday/index.html" class="tag-cloud-link tag-link-8 tag-link-position-3"--}}
                               {{--style="font-size: 8pt;" aria-label="holiday (2 items)">holiday</a>--}}
                            {{--<a href="../tag/information/index.html"--}}
                               {{--class="tag-cloud-link tag-link-10 tag-link-position-4" style="font-size: 8pt;"--}}
                               {{--aria-label="Information (2 items)">Information</a>--}}
                            {{--<a href="../tag/kids/index.html" class="tag-cloud-link tag-link-12 tag-link-position-5"--}}
                               {{--style="font-size: 8pt;" aria-label="Kids (2 items)">Kids</a>--}}
                            {{--<a href="../tag/music/index.html" class="tag-cloud-link tag-link-14 tag-link-position-6"--}}
                               {{--style="font-size: 12pt;" aria-label="Music (3 items)">Music</a>--}}
                            {{--<a href="../tag/nature/index.html" class="tag-cloud-link tag-link-15 tag-link-position-7"--}}
                               {{--style="font-size: 12pt;" aria-label="Nature (3 items)">Nature</a>--}}
                            {{--<a href="../tag/randomstuff/index.html"--}}
                               {{--class="tag-cloud-link tag-link-16 tag-link-position-8" style="font-size: 18pt;"--}}
                               {{--aria-label="Randomstuff (5 items)">Randomstuff</a>--}}
                            {{--<a href="../tag/rock/index.html" class="tag-cloud-link tag-link-17 tag-link-position-9"--}}
                               {{--style="font-size: 12pt;" aria-label="Rock (3 items)">Rock</a></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <!-- End : Sidebar Section -->        </div>
        </div>
    </div>
@stop
