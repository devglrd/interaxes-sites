@extends('app')


@section('css')
@stop

@section('content')
    <div id="primary" class="content-area site-main" role="main">
        <!-- Start : Page Title Section -->
        
        <!-- Start : Display Page Title Section -->
        <div class="page-title-wrapper">
            <!-- Start : Page Title Section -->
            <div class="page-title"
                 style="background-image: url('../../wp-content/themes/hospitalplus/images/header/header.jpg')">
                <div class="container">
                    <h2>Doctors</h2>
                </div>
            </div>
            <!-- End : Page Title Section -->
            
            <!-- Start : Breadcrumb Section -->
            <div class="breadcrumb">
                <div class="container">
                    <a href="../../../hospitalplus.html">Home</a> <span class="separator fa fa-angle-right"></span> <a
                            href="../../doctors/index.html">Doctors</a> <span
                            class="separator fa fa-angle-right"></span>
                    <span class="breadcrumb_last">Dr. John Allen</span></div>
            </div>
            <!-- End : Breadcrumb Section -->
        </div>
        <!-- End : DIsplay Page Title Section -->
        <!-- End : Page Title Section -->
        <div class="main-content fullwidth-content">
            <div class="container">
                <div class="content-inner">
                    <div class="doctor-profile white-grid-detail">
                        <div class="thumbnail">
                            <img width="400" height="400"
                                 src="{{ asset('images/directeur-2.png') }}"
                                 class="attachment-hospitalplus-doctor-image size-hospitalplus-doctor-image wp-post-image"
                                 alt="Dr. John Allen" title="Dr. John Allen"
                                 sizes="(max-width: 400px) 100vw, 400px"/></div>
                        <div class="detail">
                            <header id="doctor-header" class="white-grid-detail-header">
                                <h1>Dr. John Allen</h1>
                                <small><i>
                                        Pulmonary </i></small>
                            </header>
                            
                            <div class="content">
                                <p>Bonjour j'adore PI</p>
                            </div>
                            
                            <footer id="doctor-footer" class="white-grid-detail-footer">
                                <!-- Start : Doctor Contact Information -->
                                <div class="doctor-contact">
                                    <ul>
                                        <li><i class="fa fa-envelope-o"></i> <a
                                                    href="../../../cdn-cgi/l/email-protection.html#1c767374725c74736f6c75687d706c70696f327f7371"><span
                                                        class="__cf_email__"
                                                        data-cfemail="0b616463654b6364787b627f6a677b677e7825686466">[email&#160;protected]</span></a>
                                        </li>
                                        
                                        <li><i class="fa fa-phone"></i> <a href="call:1-8700-9822">1-8700-9822</a></li>
                                    </ul>
                                </div>
                                <!-- End : Doctor Contact Information -->
                                
                                <!-- Start : Doctor Social Account -->
                                <div class="doctor-social social">
                                    <ul>
                                        <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                        
                                        <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                        
                                        <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                        
                                        <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                        
                                        <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                        
                                        <li><a href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                        
                                        <li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
                                        
                                        <li><a href="#" target="_blank"><i class="fa fa-vimeo"></i></a></li>
                                    </ul>
                                </div>
                                <!-- End : Doctor Social Account -->
                                <div>
                                    <a id="view-schedule" class="button blue small"
                                       href="../../index-department=pulmonary&amp;s=dr-john-allen.html">View Dr. John
                                                                                                        Allen
                                                                                                        Schedules</a>
                                </div>
                            
                            </footer>
                        </div>
                    
                    </div>
                </div>
                
                
                <!-- Start : Professional Doctors Section -->
                <section id="doctor-widget" class="section-widget wow fadeIn">
                    <div class="container">
                        
                        <h4 class="section-title">Other <strong>Doctors</strong></h4>
                        <div id="doctors" class="carousel-widget doctors">
                            <ul class="slides">
                                
                                <li id="post-268"
                                    class="wow fadeInLeft post-268 doctor type-doctor status-publish has-post-thumbnail hentry department-cardiology">
                                    <div class="thumbnail">
                                        <a href="../dr-kirk-romanov/index.html" title="Dr. Kirk Romanov"><img
                                                    width="280" height="280"
                                                    src="../../wp-content/uploads/sites/22/2015/01/Depositphotos_12694888_original-280x280.jpg"
                                                    class="attachment-hospitalplus-doctor-thumb-image size-hospitalplus-doctor-thumb-image wp-post-image"
                                                    alt="Dr. Kirk Romanov" title="Dr. Kirk Romanov"
                                                    srcset="../../wp-content/uploads/sites/22/2015/01/Depositphotos_12694888_original-280x280.jpg 280w, ../../wp-content/uploads/sites/22/2015/01/Depositphotos_12694888_original-150x150.jpg 150w, ../../wp-content/uploads/sites/22/2015/01/Depositphotos_12694888_original-300x300.jpg 300w, ../../wp-content/uploads/sites/22/2015/01/Depositphotos_12694888_original-400x400.jpg 400w, ../../wp-content/uploads/sites/22/2015/01/Depositphotos_12694888_original.jpg 500w"
                                                    sizes="(max-width: 280px) 100vw, 280px"/></a>
                                        <div class="overlay">
                                            <div class="table">
                                                <div class="table-cell tablecell">
                                                    <a class="overlay-link" href="../dr-kirk-romanov/index.html"
                                                       title="'. get_the_title() .'"></a>
                                                    <div class="social">
                                                        <ul>
                                                            <li><a href="#" target="_blank"><i
                                                                            class="fa fa-facebook"></i></a></li>
                                                            
                                                            <li><a href="#" target="_blank"><i
                                                                            class="fa fa-twitter"></i></a></li>
                                                            
                                                            <li><a href="#" target="_blank"><i
                                                                            class="fa fa-google-plus"></i></a></li>
                                                            
                                                            <li><a href="#" target="_blank"><i
                                                                            class="fa fa-instagram"></i></a></li>
                                                            
                                                            <li><a href="#" target="_blank"><i
                                                                            class="fa fa-linkedin"></i></a></li>
                                                            
                                                            <li><a href="#" target="_blank"><i
                                                                            class="fa fa-pinterest"></i></a></li>
                                                            
                                                            <li><a href="#" target="_blank"><i
                                                                            class="fa fa-youtube"></i></a></li>
                                                            
                                                            <li><a href="#" target="_blank"><i class="fa fa-vimeo"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="inner">
                                        <h3 class="post-title"><a href="../dr-kirk-romanov/index.html"
                                                                  title="Dr. Kirk Romanov">Dr. Kirk Romanov</a></h3>
                                        <!-- Start : Department Name -->
                                        <small><i>
                                                Cardiology </i></small>
                                        <!-- End : Department Name -->
                                        <br>
                                        Krik was born and raised in Los Angeles, California. He graduated from the
                                        University...
                                    </div>
                                </li>
                                <li id="post-272"
                                    class="wow fadeInLeft post-272 doctor type-doctor status-publish has-post-thumbnail hentry department-urology">
                                    <div class="thumbnail">
                                        <a href="../dr-janne-wilson/index.html" title="Dr. Janne Wilson"><img
                                                    width="280" height="280"
                                                    src="../../wp-content/uploads/sites/22/2015/02/Depositphotos_35019551_original-280x280.jpg"
                                                    class="attachment-hospitalplus-doctor-thumb-image size-hospitalplus-doctor-thumb-image wp-post-image"
                                                    alt="Dr. Janne Wilson" title="Dr. Janne Wilson"
                                                    srcset="../../wp-content/uploads/sites/22/2015/02/Depositphotos_35019551_original-280x280.jpg 280w, ../../wp-content/uploads/sites/22/2015/02/Depositphotos_35019551_original-150x150.jpg 150w, ../../wp-content/uploads/sites/22/2015/02/Depositphotos_35019551_original-400x400.jpg 400w"
                                                    sizes="(max-width: 280px) 100vw, 280px"/></a>
                                        <div class="overlay">
                                            <div class="table">
                                                <div class="table-cell tablecell">
                                                    <a class="overlay-link" href="../dr-janne-wilson/index.html"
                                                       title="'. get_the_title() .'"></a>
                                                    <div class="social">
                                                        <ul>
                                                            <li><a href="#" target="_blank"><i
                                                                            class="fa fa-facebook"></i></a></li>
                                                            
                                                            <li><a href="#" target="_blank"><i
                                                                            class="fa fa-twitter"></i></a></li>
                                                            
                                                            <li><a href="#" target="_blank"><i
                                                                            class="fa fa-google-plus"></i></a></li>
                                                            
                                                            <li><a href="#" target="_blank"><i
                                                                            class="fa fa-instagram"></i></a></li>
                                                            
                                                            <li><a href="#" target="_blank"><i
                                                                            class="fa fa-linkedin"></i></a></li>
                                                            
                                                            <li><a href="#" target="_blank"><i
                                                                            class="fa fa-pinterest"></i></a></li>
                                                            
                                                            <li><a href="#" target="_blank"><i
                                                                            class="fa fa-youtube"></i></a></li>
                                                            
                                                            <li><a href="#" target="_blank"><i class="fa fa-vimeo"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="inner">
                                        <h3 class="post-title"><a href="../dr-janne-wilson/index.html"
                                                                  title="Dr. Janne Wilson">Dr. Janne Wilson</a></h3>
                                        <!-- Start : Department Name -->
                                        <small><i>
                                                Urology </i></small>
                                        <!-- End : Department Name -->
                                        <br>
                                        Janne was born and raised in Los Angeles, California. He graduated from the
                                        University...
                                    </div>
                                </li>
                                <li id="post-267"
                                    class="wow fadeInLeft post-267 doctor type-doctor status-publish has-post-thumbnail hentry department-xray">
                                    <div class="thumbnail">
                                        <a href="../dr-howrad-stern/index.html" title="Dr. Howrad Stern"><img
                                                    width="280" height="280"
                                                    src="../../wp-content/uploads/sites/22/2015/01/male-doctor280x440.jpg"
                                                    class="attachment-hospitalplus-doctor-thumb-image size-hospitalplus-doctor-thumb-image wp-post-image"
                                                    alt="Dr. Howrad Stern" title="Dr. Howrad Stern"
                                                    srcset="../../wp-content/uploads/sites/22/2015/01/male-doctor280x440.jpg 280w, ../../wp-content/uploads/sites/22/2015/01/male-doctor280x440-150x150.jpg 150w"
                                                    sizes="(max-width: 280px) 100vw, 280px"/></a>
                                        <div class="overlay">
                                            <div class="table">
                                                <div class="table-cell tablecell">
                                                    <a class="overlay-link" href="../dr-howrad-stern/index.html"
                                                       title="'. get_the_title() .'"></a>
                                                    <div class="social">
                                                        <ul>
                                                            <li><a href="#" target="_blank"><i
                                                                            class="fa fa-facebook"></i></a></li>
                                                            
                                                            <li><a href="#" target="_blank"><i
                                                                            class="fa fa-twitter"></i></a></li>
                                                            
                                                            <li><a href="#" target="_blank"><i
                                                                            class="fa fa-google-plus"></i></a></li>
                                                            
                                                            <li><a href="#" target="_blank"><i
                                                                            class="fa fa-instagram"></i></a></li>
                                                            
                                                            <li><a href="#" target="_blank"><i
                                                                            class="fa fa-linkedin"></i></a></li>
                                                            
                                                            <li><a href="#" target="_blank"><i
                                                                            class="fa fa-pinterest"></i></a></li>
                                                            
                                                            <li><a href="#" target="_blank"><i
                                                                            class="fa fa-youtube"></i></a></li>
                                                            
                                                            <li><a href="#" target="_blank"><i class="fa fa-vimeo"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="inner">
                                        <h3 class="post-title"><a href="../dr-howrad-stern/index.html"
                                                                  title="Dr. Howrad Stern">Dr. Howrad Stern</a></h3>
                                        <!-- Start : Department Name -->
                                        <small><i>
                                                Xray </i></small>
                                        <!-- End : Department Name -->
                                        <br>
                                        Howard was born and raised in Los Angeles, California. He graduated from the
                                        University...
                                    </div>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </section>
                <!-- End : Professional Doctors Section -->        </div>
        </div>
    </div>
@stop

