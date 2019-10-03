@guest
<header id="masthead-pro">
    <div class="container">

        <h1><a href="index.html"><img src="/images/logo.png" alt="Logo"></a></h1>

        <nav id="site-navigation-pro">
            <ul class="sf-menu">
                <li class="normal-item-pro current-menu-item">
                    <a href="index.html">Home</a>
                </li>
                <li class="normal-item-pro">
                    <a href="dashboard-home.html">New Releases</a>
                    <!-- Sub-Menu Example >
                    <ul class="sub-menu">
                        <li class="normal-item-pro">
                            <a href="#!">Sub-menu item 1</a>
                        </li>
                        <li class="normal-item-pro">
                            <a href="#!">Sub-menu item 2</a>
                        </li>
                        <li class="normal-item-pro">
                            <a href="#!">Sub-menu item 3</a>
                        </li>
                    </ul>
                    < End Sub-Menu example -->
                </li>
                <li class="normal-item-pro">
                    <a href="signup-step1.html">Pricing Plans</a>
                </li>
                <li class="normal-item-pro">
                    <a href="faqs.html">FAQs</a>
                </li>
            </ul>
        </nav>

        <button class="btn btn-header-pro noselect" data-toggle="modal" data-target="#LoginModal" role="button">Sign In</button>

        <div id="mobile-bars-icon-pro" class="noselect"><i class="fas fa-bars"></i></div>

        <div class="clearfix"></div>
    </div><!-- close .container -->

    <nav id="mobile-navigation-pro">

        <ul id="mobile-menu-pro">
            <li>
                <a href="index.html">Home</a>
            </li>
            <li>
                <a href="dashboard-home.html">New Releases</a>
                <!-- Mobile Sub-Menu Example >
                <ul>
                    <li class="normal-item-pro">
                        <a href="#!">Sub-menu item 1</a>
                    </li>
                    <li class="normal-item-pro">
                        <a href="#!">Sub-menu item 2</a>
                    </li>
                    <li class="normal-item-pro">
                        <a href="#!">Sub-menu item 3</a>
                    </li>
                </ul>
                < End Mobile Sub-Menu Example -->
            </li>
            <li>
                <a href="signup-step1.html">Pricing Plans</a>
            </li>
            <li>
                <a href="faqs.html">FAQs</a>
            </li>
        </ul>
        <div class="clearfix"></div>

        <button class="btn btn-mobile-pro btn-green-pro noselect" data-toggle="modal" data-target="#LoginModal" role="button">Sign In</button>

    </nav>
</header>
@else
<header id="videohead-pro" class="sticky-header">
    <div id="video-logo-background"><a href="dashboard-home.html"><img src="images/logo-video-layout.png" alt="Logo"></a></div>

    <div id="video-search-header">
        <div id="search-icon-more"></div>
        <input type="text" placeholder="Search for Movies or TV Series" aria-label="Search">
        <div id="video-search-header-filtering">
            <form id="video-search-header-filtering-padding">
                <div class="row">
                    <div class="col-sm extra-padding">
                        <h5>Type:</h5>

                        <div class="row">
                            <div class="col-sm">
                                <label class="checkbox-pro-container">Movies
                                    <input type="checkbox" checked="checked" id="movies-type">
                                    <span class="checkmark-pro"></span>
                                </label>

                                <label class="checkbox-pro-container">TV Series
                                    <input type="checkbox" id="tv-type">
                                    <span class="checkmark-pro"></span>
                                </label>
                            </div><!-- close .col -->
                            <div class="col">
                                <label class="checkbox-pro-container">New Arrivals
                                    <input type="checkbox" id="movie-type">
                                    <span class="checkmark-pro"></span>
                                </label>

                                <label class="checkbox-pro-container">Documentary
                                    <input type="checkbox" id="documentary-type">
                                    <span class="checkmark-pro"></span>
                                </label>
                            </div><!-- close .col -->
                        </div><!-- close .row -->

                        <div class="dotted-dividers-pro"></div>
                    </div><!-- close .col -->
                    <div class="col-sm extra-padding">
                        <h5>Genres:</h5>
                        <select class="custom-select">
                            <option selected>All Genres</option>
                            <option value="1">Action</option>
                            <option value="2">Adventure</option>
                            <option value="3">Drama</option>
                            <option value="4">Animation</option>
                            <option value="5">Documentary</option>
                            <option value="6">Drama</option>
                            <option value="7">Horror</option>
                            <option value="8">Thriller</option>
                            <option value="9">Fantasy</option>
                            <option value="10">Romance</option>
                            <option value="11">Sci-Fi</option>
                            <option value="12">Western</option>
                        </select>
                        <div class="dotted-dividers-pro"></div>
                    </div><!-- close .col -->
                    <div class="col-sm extra-padding">
                        <h5>Country:</h5>
                        <select class="custom-select">
                            <option selected>All Countries</option>
                            <option value="1">Argentina</option>
                            <option value="2">Australia</option>
                            <option value="3">Bahamas</option>
                            <option value="4">Belgium</option>
                            <option value="5">Brazil</option>
                            <option value="6">Canada</option>
                            <option value="7">Chile</option>
                            <option value="8">China</option>
                            <option value="9">Denmark</option>
                            <option value="10">Ecuador</option>
                            <option value="11">France</option>
                            <option value="12">Germany</option>
                            <option value="13">Greece</option>
                            <option value="14">Guatemala</option>
                            <option value="15">Italy</option>
                            <option value="16">Japan</option>
                            <option value="17">asdfasdf</option>
                            <option value="18">Korea</option>
                            <option value="19">Malaysia</option>
                            <option value="20">Monaco</option>
                            <option value="21">Morocco</option>
                            <option value="22">New Zealand</option>
                            <option value="23">Panama</option>
                            <option value="24">Portugal</option>
                            <option value="25">Russia</option>
                            <option value="26">United Kingdom</option>
                            <option value="27">United States</option>
                        </select>
                        <div class="dotted-dividers-pro"></div>
                    </div><!-- close .col -->
                    <div class="col-sm extra-padding extra-range-padding">
                        <h5>Average Rating:</h5>
                        <input class="range-example-rating-input" type="text" min="0" max="10" value="4,10" step="1" />
                        <!-- JS is under /js/script.jss -->
                    </div><!-- close .col -->
                </div><!-- close .row -->
                <div id="video-search-header-buttons">
                    <a href="#!" class="btn btn-green-pro">Filter Search</a>
                    <a href="#!" class="btn">Reset</a>
                </div><!-- close #video-search-header-buttons -->
            </form><!-- #video-search-header-filtering-padding -->
        </div><!-- close #video-search-header-filtering -->
    </div><!-- close .video-search-header -->

    <div id="mobile-bars-icon-pro" class="noselect"><i class="fas fa-bars"></i></div>


    <div id="header-user-profile">
        <div id="header-user-profile-click" class="noselect">
            <img src="images/demo/user-profile.jpg" alt="Suzie">
            <div id="header-username">Suzie Smith</div><i class="fas fa-angle-down"></i>
        </div><!-- close #header-user-profile-click -->
        <div id="header-user-profile-menu">
            <ul>
                <li><a href="dashboard-profile.html"><span class="icon-User"></span>My Profile</a></li>
                <li><a href="dashboard-favorites.html"><span class="icon-Favorite-Window"></span>My Favorites</a></li>
                <li><a href="dashboard-account.html"><span class="icon-Gears"></span>Account Details</a></li>
                <li><a href="#!"><span class="icon-Life-Safer"></span>Help/Support</a></li>
                <li><a href="index.html"><span class="icon-Power-3"></span>Log Out</a></li>
            </ul>
        </div><!-- close #header-user-profile-menu -->
    </div><!-- close #header-user-profile -->

    <div id="header-user-notification">
        <div id="header-user-notification-click" class="noselect">
            <i class="far fa-bell"></i>
            <span class="user-notification-count">3</span>
        </div><!-- close #header-user-profile-click -->
        <div id="header-user-notification-menu">
            <h3>Notifications</h3>
            <div id="header-notification-menu-padding">
                <ul id="header-user-notification-list">
                    <li><a href="#!"><img src="images/demo/user-profile-2.jpg" alt="Profile">Lorem ipsum dolor sit amet, consec tetur adipiscing elit. <div class="header-user-notify-time">21 hours ago</div></a></li>
                    <li><a href="#!"><img src="images/demo/user-profile-3.jpg" alt="Profile">Donec vitae lacus id arcu molestie mollis. <div class="header-user-notify-time">3 days ago</div></a></li>
                    <li><a href="#!"><img src="images/demo/user-profile-4.jpg" alt="Profile">Aenean vitae lectus non purus facilisis imperdiet. <div class="header-user-notify-time">5 days ago</div></a></li>
                </ul>
                <div class="clearfix"></div>
            </div><!-- close #header-user-profile-menu -->
        </div>
    </div><!-- close #header-user-notification -->



    <div class="clearfix"></div>

    <nav id="mobile-navigation-pro">

        <ul id="mobile-menu-pro">
            <li class="current-menu-item">
                <a href="dashboard-home.html">
                    <span class="icon-Old-TV"></span>
                    TV Series
                </a>
            <li>
            <li>
                <a href="dashboard-movies.html">
                    <span class="icon-Reel"></span>
                    Movies
                </a>
            </li>
            <li>
                <a href="dashboard-playlists.html">
                    <span class="icon-Movie"></span>
                    Playlists
                </a>
            </li>
            <li>
                <a href="dashboard-new-arrivals.html">
                    <span class="icon-Movie-Ticket"></span>
                    New Arrivals
                </a>
            </li>
            <li>
                <a href="dashboard-coming-soon.html">
                    <span class="icon-Clock"></span>
                    Coming Soon
                </a>
            </li>
            <li>
                <a href="#!">
                    <i class="far fa-bell"></i>
                    <span class="user-notification-count">3</span>
                    Notifications
                </a>
            </li>
        </ul>
        <div class="clearfix"></div>

        <div id="search-mobile-nav-pro">
            <input type="text" placeholder="Search for Movies or TV Series" aria-label="Search">
        </div>

    </nav>

</header>
<nav id="sidebar-nav"><!-- Add class="sticky-sidebar-js" for auto-height sidebar -->
    <ul id="vertical-sidebar-nav" class="sf-menu">
        <li class="normal-item-pro current-menu-item">
            <a href="dashboard-home.html">
                <span class="icon-Old-TV"></span>
                TV Series
            </a>
        </li>
        <li class="normal-item-pro">
            <a href="dashboard-movies.html">
                <span class="icon-Reel"></span>
                Movies
            </a>
        </li>
        <li class="normal-item-pro">
            <a href="dashboard-playlists.html">
                <span class="icon-Movie"></span>
                Playlists
            </a>
        </li>
        <li class="normal-item-pro">
            <a href="dashboard-new-arrivals.html">
                <span class="icon-Movie-Ticket"></span>
                New Arrivals
            </a>
        </li>
        <li class="normal-item-pro">
            <a href="dashboard-coming-soon.html">
                <span class="icon-Clock"></span>
                Coming Soon
            </a>
        </li>

    </ul>
    <div class="clearfix"></div>
</nav>
@endguest
