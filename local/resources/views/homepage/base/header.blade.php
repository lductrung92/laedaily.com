<header id="masthead" class="site-header clearfix">
    <div id="header-text-nav-container" class="clearfix">


        <div class="inner-wrap">
            <div id="header-text-nav-wrap" class="clearfix">
                <div id="header-left-section">
                    <div id="header-logo-image">
                        <a href="{{ asset('/') }}" rel="home" itemprop="url">
                            <img width="296" height="90" src="assets/logo/logo.png"
                                    class="custom-logo" alt="" itemprop="logo"/>
                        </a>
                    </div>
                    <div id="header-text" class="screen-reader-text">
                        <h1 id="site-title">
                            <a href="{{ asset('/') }}" title="laedaily" rel="home">laedaily</a>
                        </h1>
                        <p id="site-description">laedaily</p>
                    </div>
                </div>
                <div id="header-right-section">
                    <div class="social-links clearfix">
                        <ul>
                            <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <nav id="site-navigation" class="main-navigation clearfix" role="navigation">
            <div class="inner-wrap clearfix">
                <div class="home-icon front_page_on">
                    <a href="{{ asset('/') }}" title="Trang chủ">
                        <i class="fa fa-home"></i>
                    </a>
                </div>
                <h4 class="menu-toggle"></h4>
                <div class="menu-primary-container">
                    <ul id="menu-primary" class="menu">
                        <li id="menu-item" class="menu-item menu-item-type-taxonomy menu-item-object-category">
                            <a href="gioi-thieu.html">Giới thiệu</a>
                        </li>


                    </ul>
                </div>

                <div class="random-post">
                    <a href="{{ asset('/') }}" title=""><i class="fa fa-random"></i></a>
                </div>
                <i class="fa fa-search search-top"></i>
                <div class="search-form-top">
                    <form action="search" method="get">
                        <div class="search-wrap"><input type="text" placeholder="Search" class="s field" name="s">
                            <button class="search-icon" type="submit"></button>
                        </div>
                    </form>
                </div>
            </div>
        </nav>
    </div>
</header>