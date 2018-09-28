<header id="masthead" class="site-header">
    <!-- Start : Top Header Section -->
    
    <!-- Start : Display Top Header Section -->
    
    <!-- End : Display Top Header Section -->            <!-- Start : Top Header Section -->
    <div class="header-main">
        <div class="container">
            <!-- Start : Site Logo Section -->
            <div id="logo" class="site-title"><a href="index.html" class="custom-logo-link" rel="home"
                                                 itemprop="url"><img width="182" height="34"
                                                                     src="{{asset('images/logo.png')}}"
                                                                     class="custom-logo" alt="Hospital Plus"
                                                                     itemprop="logo"/></a></div>
            <!-- End : Site Logo Section -->
            
            <!-- Start : Nav Main menu -->
            <nav id="main-menu" class="site-navigation primary-navigation">
                <ul id="menu-main-menu" class="main">
                    <li id="menu-item-1014"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-142 current_page_item menu-item-1014">
                        <a href="{{ route('home') }}">Acceuil</a>
                    </li>
                    <li id="menu-item-1016"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1016">
                        <a href="#">Docteur clinique</a>
                        <ul class="sub-menu">
                            <li id="menu-item-975"
                                class="menu-item menu-item-type-taxonomy menu-item-object-department menu-item-has-children menu-item-975">
                                <a href="#">psychothérapeute</a>
                                <ul class="sub-menu">
                                    <li id="menu-item-971"
                                        class="menu-item menu-item-type-post_type menu-item-object-doctor menu-item-971">
                                        <a href="{{ route('director') }}">Directeur John Allen</a></li>
                                    <li id="menu-item-972"
                                        class="menu-item menu-item-type-post_type menu-item-object-doctor menu-item-972">
                                        <a href="{{ route('lewis') }}">Dr. Nancy Lewis</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li id="menu-item-1011"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1011"><a
                                href="{{ route('contact') }}">Contact</a></li>
                </ul>
                <a class="menu-trigger"><i class="fa fa-bars"></i></a>
            </nav>
            <!-- End : Nav Main menu -->
        </div>
    </div>
</header>