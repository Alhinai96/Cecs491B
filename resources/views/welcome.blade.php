
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="html5, css3, lynda, local storage, canvas, forms, semantics, web apps">
    <!--make sure mobile devices display the page at the proper scale	-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
    <link href="css/main.css" rel="stylesheet" type="text/css" media="screen, projection">
</head>

<body id="home" class="no-js">
    <div id="wrapper">
        <header id="mainHeader"> <a href="/" title="home" class="logo"-->

        <!-- I need this div because IE is an affront to mankind-->
        <div>
            <h1>BuyTech</h1>
        </div>
        </a>
        <nav id="siteNav">
            <h1></h1>
            <ul>
                <li><a href="products.htm" title="Products">Products <br />.</a>
                    <ul>
                        <li><a href="/products.htm" title="Computers & tablets">Computers & tablets</a></li>
                        <li><a href="/products.htm" title="Phones">Phones</a></li>
                        <li><a href="/products.htm" title="Cameras">Cameras</a></li>
                        <li><a href="/products.htm" title="Consoles and Video Games">Consoles and Video Games</a></li>
                    </ul>
                </li>


                <li><a href="brands.htm" title="Brands">Brands <br />.</a>
                    <ul>
                        <li><a href="brands/Apple.htm" title="Apple">Apple</a></li>
                        <li><a href="brands/sony.htm" title="Sony">Sony</a></li>
                        <li><a href="brands/Microsoft.htm" title="terms and conditions">Microsoft</a></li>
                        <li><a href="brands/Samsung.htm" title="terms and conditions">samsung</a></li>
                    </ul>
                </li>
                <li><a href="deals.html" title="Deals">Deals <br /><span class="tagline">.</span></a>

                </li>
                <li><a href="contact.htm" title="contact us" class="last">Contact <br /><span class="tagline">.</span></a>
                    <ul>
                        <li><a href="support.htm" title="need help?">Support</a></li>
                    </ul>
                </li>
                <li>
                  <!-- @if (Route::has('login'))
                      <div class="top-right links">
                          @auth
                              <a href="{{ url('/home') }}">Home</a>
                          @else
                              <a href="{{ route('login') }}">Login</a>

                              @if (Route::has('register'))
                                  <a href="{{ route('register') }}">Register</a>
                              @endif
                          @endauth
                      </div>
                  @endif -->
                    <a href="{{ route('login') }}" title="log in" class="last">Login
                    </a>
                </li>
                <li>
                    <a href="{{ route('register') }}" title="register" class="last">Register
                    </a>
                </li>

            </ul>
        </nav>
        </header>
        <section id="actionCall" width="600" height="500">
            <h1>BuyTech</h1>

            <a href="/products.htm" title="Shopping Cart!">
                <h2>Shopping cart</h2>
            </a>
        </section>
        <div id="contentWrapper">
            <section id="mainContent">
                <article id="mainArticle">
                    <h1>Apple Deals</h1>
                    <p class="spotlight">Apple Shopping Event.
                        Great deals on select Apple favorites from iPhone to iPad, MacBook and more.<br /> </p>
                    <h1>Computers deals</h1>
                    <p class="spotlight">Save up to $200 on select Windows computers.<br /> <span class="accent"><a href="/tours_cycle.htm" title="Cycle California">Shop these Windows computers </a></span></p>
                    <h1>Apple Deals</h1>
                    <p class="spotlight">Apple Shopping Event.
                        Great deals on select Apple favorites from iPhone to iPad, MacBook and more.<br /> <span class="accent"><a href="/tours_cycle.htm" title="Cycle California">Shop the apple event</a></span></p>
                </article>
            </section>
            <aside id="secondaryContent">
                <div id="specials" class="callOut">
                    <h1>Monthly Specials</h1>
                    <h2 class="top"><img src="/images/calm_bug.gif" alt="TV" width="75" height="75">Toshiba - 43” Class – LED - 2160p – Smart - 4K UHD TV with HDR – Fire TV Edition</h2>
                    <p>
                        Add to Cart <br>
                        <a href="/tours/tour_detail_cycle.htm">$250</a>
                    </p>
                    <h2><img src="/images/desert_bug.gif" alt="headphone" width="75" height="75">Jabra - Elite 65t True Wireless Earbud Headphones - Titanium Black</h2>
                    <p>
                        Add to Cart <br>
                        <a href="/tours/tour_detail_cycle.htm">$119</a>
                    </p>
                    <h2><img src="/images/backpack_bug.gif" alt="Phone" width="75" height="41">Samsung - Galaxy Tab A (2018) - 10.5" - 32GB - Black</h2>
                    <p>
                        Add to cart <br>
                        <a href="/tours/tour_detail_cycle.htm">$620</a>
                    </p>
                    <h2><img src="/images/taste_bug.gif" alt="XBox" width="75" height="75">Microsoft - Xbox One X 1TB Fallout 76 Bundle with 4K Ultra HD Blu-ray - Black</h2>
                    <p>
                        Add to Cart <br>
                        <a href="/tours/tour_detail_taste.htm">$399</a>
                    </p>
                </div>
                <div id="trivia" class="callOut">
                    <h1></h1>
                    <p></p>
                </div>
            </aside>
        </div>
        <footer id="pageFooter">
            <section id="quickLinks">
                <h1>Quick Nav</h1>
                <ul id="quickNav">
                    <li><a href="/" title="Our home page">Home</a></li>
                    <li><a href="products.htm" title="Products">products</a></li>
                    <li><a href="brands.htm" title="Brands">Brands</a></li>
                    <li><a href="Deals.html" title="Deals">Deals</a></li>

                    <li><a href="contact.htm" title="Contact and support">Contact</a></li>

            </section>
            <section id="footerResources">
                <h1>Resources</h1>
                <ul id="quickNav">

                    <li><a href="support.htm" title="Need help?">Support</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                </ul>
            </section>
            <section id="companyInfo">
                <h1>Contact</h1>

            </section>
        </footer>
    </div>
</body>

</html>
