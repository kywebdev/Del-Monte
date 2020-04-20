<aside class="sidebar">
    <header class="sidebar__header">
        <div class="sidebar__top">
            <div class="sidebar__login">
                <!-- The "Sign In" text will change with the profiling. For some users it will say "Sign In/Sign Up". -->
                <a href="" class="sidebar__login__signin">Sign In</a>
                <a href="/sitemap" class="sidebar__login__sitemap">
                    <div class="con">
                        <div class="bar arrow-top"></div>
                        <div class="bar arrow-middle"></div>
                        <div class="bar arrow-bottom"></div>
                    </div>
                </a>
                <a href="#search" class="sidebar__login__search">
                    <img src="img/magnifying-glass-gray.png" alt="" />
                </a>
                <div class="flyout-signin">
                    <form class='form'>
                        <label for="username-d">User Name</label>
                        <input type="text" id="username-d" placeholder="User Name" />
                        <label for="password-d">Password</label>
                        <input type="password" id="password-d" placeholder="Password" />
                        <input type="checkbox" id="forgotpass-d" />
                        <label for="forgotpass-d">Forgot your Password? Click Button to send a reset message.</label>
                        <input type="submit" value="Submit" />
                    </form>
                </div>
            </div>
            <div class="sidebar__logo">
                <a href="index.php">
                    <img src="img/logo.svg" alt="Del Monte logo" />
                </a>
            </div>
            <nav class="sidebar__navigation">
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="recipes-landing.php">Recipes</a>
                        <ul>
                            <li>
                                <a href=""><span class="line"></span><span class="subnav-text">All</span></a>
                            </li>
                            <li>
                                <a href="recipes-mealtype.php"><span class="line"></span><span class="subnav-text">Breakfast</span></a>
                            </li>
                            <li>
                                <a href=""><span class="line"></span><span class="subnav-text">Lunch</span></a>
                            </li>
                            <li>
                                <a href=""><span class="line"></span><span class="subnav-text">Dinner</span></a>
                            </li>
                            <li>
                                <a href=""><span class="line"></span><span class="subnav-text">Snacks</span></a>
                            </li>
                            <li>
                                <a href=""><span class="line"></span><span class="subnav-text">Appetizers</span></a>
                            </li>
                            <li>
                                <a href=""><span class="line"></span><span class="subnav-text">Desserts</span></a>
                            </li>
                            <li>
                                <a href=""><span class="line"></span><span class="subnav-text">Drinks</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="products-landing.php">Products</a>
                        <ul>
                            <li>
                                <a href="products-landing.php"><span class="line"></span><span class="subnav-text">All Products</span></a>
                            </li>
                            <li>
                                <a href="fruits-landing.php"><span class="line"></span><span class="subnav-text">Fruits</span></a>
                            </li>
                            <li>
                                <a href="vegetables-landing.php"><span class="line"></span><span class="subnav-text">Vegetables</span></a>
                            </li>
                            <li>
                                <a href="fresh-landing.php"><span class="line"></span><span class="subnav-text">Fresh Prepared</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="https://www.freshdelmontecsr.com" target="_blank">Corporate Responsibility</a>
                    </li>
                    <li>
                        <a href="news-events.php">News & Events</a>
                        <ul>
                            <li>
                                <a href="news-landing.php"><span class="line"></span><span class="subnav-text">News</span></a>
                            </li>
                            <li>
                                <a href="events-landing.php"><span class="line"></span><span class="subnav-text">Events</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="about.php">About Us</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="sidebar__bottom">
            <div class="sidebar__newsletter">
                <a href="" class="btn btn--green">Newsletter Sign-up</a>
                <p class="sidebar__newsletter__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem.</p>
            </div>
            <div class="flyout-newsletter">
                <form>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-6">
                                <label for="first-name">First Name</label>
                                <input type="text" id="first-name" placeholder="First Name" />
                            </div>
                            <div class="col-6">
                                <label for="last-name">Last Name</label>
                                <input type="text" id="last-name" placeholder="Last Name" />
                            </div>
                            <div class="col-12">
                                <label for="email">Email</label>
                                <input type="email" id="email" placeholder="Email" />
                            </div>
                            <div class="col-12 align-center">
                                <input type="checkbox" id="disclaimer" />
                                <label for="disclaimer">Disclaimer: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem. Aliquam erat volutpat. Donec placerat nisl magna, et faucibus arcu condimentum sed.</label>
                            </div>
                            <!--<div class="col-12 align-center">
                                <input type="checkbox" id="create-account" />
                                <label for="create-account">Create an Account</label>
                            </div>-->
                            <div class="col-12 align-center">
                                <?php include('includes/captcha.php'); ?>
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="Submit" />
                </form>
            </div>
            <div class="sidebar__social">
                <ul>
                    <li>
                        <a href="" target="_blank"><span class="fab fa-youtube"></span></a>
                    </li>
                    <li>
                        <a href="" target="_blank"><span class="fab fa-instagram"></span></a>
                    </li>
                    <li>
                        <a href="" target="_blank"><span class="fab fa-pinterest-p"></span></a>
                    </li>
                    <li>
                        <a href="" target="_blank"><span class="fab fa-facebook-f"></span></a>
                    </li>
                    <li>
                        <a href="" target="_blank"><span class="fab fa-twitter"></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <footer class="sidebar__footer">
        <ul>
            <li>
                <a href="contact.php">Contact Us</a>
            </li>
            <li>
                <a href="privacy.php">Privacy Policy</a>
            </li>
            <li>
                <a href="">Legal</a>
            </li>
            <li>
                <a href="/sitemap">Sitemap</a>
            </li>
        </ul>
        <p class="sidebar__footer__copyright">&copy;2019 Del Monte <br />Fresh Produce N.A., Inc.</p>
    </footer>
</aside>
