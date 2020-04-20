<!doctype html>
<html class="no-js mm-wrapper_sidebar-closed" lang="en">
    <head>
        <title>Contact Page Template | Del Monte Fresh Produce</title>
        <?php include('includes/meta.php'); ?>
        <?php include('includes/favicon.php'); ?>
        <?php include('includes/styles.php'); ?>
    </head>
    <body id="top">
        <?php include('includes/loading-screen.php'); ?>
        <div class="site-wrapper general contact">
            <?php include('includes/mobile-nav.php'); ?>
            <div class="site">
                <?php include('includes/sidebar-validation.php'); ?>
                <main class="bg-texture-cabbage">
                    <section class="main-content-wrapper">
                        <div class="section-container">
                        <nav class="breadcrumbs" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">PagePath</a></li>
                                <li class="breadcrumb-item"><a href="#">BreadCrumb</a></li>
                                <li class="breadcrumb-item active" aria-current="page">General Page</li>
                            </ol>
                        </nav>
                        <div class="campaign-hero rip-1">
                            <picture>
                                <source srcset="img/contact-hero-desktop.jpg" media="(min-width: 901px)">
                                <img src="img/contact-hero-mobile.jpg" alt="" />
                            </picture>
                        </div>
                        <h1>Contact Us</h1>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis</p>
                        <p class="cta-copy">Short CTA copy to entice user to complete the form for sign-ups and/or to get access to gated content.  Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula.</p>
                        <h2>Customer Information</h2>
                        <form class="contact-form form">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-6 validation-error">
                                        <label for="fname-contact">First Name</label>
                                        <input type="text" id="fname-contact" placeholder="First Name" />
                                        <span class="validation-text">You must fill out this field</span>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="lname-contact">Last Name</label>
                                        <input type="text" id="lname-contact" placeholder="Last Name" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="email-updates-contact">Email</label>
                                        <input type="email" id="email-updates-contact" placeholder="Email" />
                                    </div>
                                    <div class="col-sm-6 validation-error">
                                        <div class="contact-reason">
                                            <label for="reason">Reason for Comment</label>
                                            <div class="custom_select" tabindex="0">
                                                <select id="reason">
                                                    <option disabled selected>Reason for Comment</option>
                                                    <option>Concern</option>
                                                    <option>Inquiry</option>
                                                    <option>Praise</option>
                                                    <option>Other</option>
                                                </select>
                                            </div>
                                            <span class="validation-text">You must fill out this field</span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <hr />
                                    </div>
                                    <div class="col-12 gated-content">
                                        <div class="row">
                                            <div class="col-12">
                                                <label for="addr1-contact">Address Line 1</label>
                                                <input type="text" id="addr1-contact" placeholder="Address Line 1" />
                                            </div>
                                            <div class="col-12">
                                                <label for="addr2-contact">Address Line 2</label>
                                                <input type="text" id="addr2-contact" placeholder="Address Line 2" />
                                            </div>
                                            <div class="col-md-5 col-sm-4">
                                                <label for="city-contact">City</label>
                                                <input type="text" id="city-contact" placeholder="City" />
                                            </div>
                                            <div class="col-md-3 col-sm-4 validation-error">
                                                <div class="custom_select" tabindex="0">
                                                    <label for="state-contact">State</label>
                                                    <select id="state-contact">
                                                        <option disabled selected>State</option>
                                                        <option>AL</option><option>AK</option><option>AZ</option><option>AR</option><option>CA</option><option>CO</option><option>CT</option><option>DE</option><option>FL</option><option>GA</option><option>HI</option><option>ID</option><option>IL</option><option>IN</option><option>IA</option><option>KS</option><option>KY</option><option>LA</option><option>ME</option><option>MD</option><option>MA</option><option>MI</option><option>MN</option><option>MS</option><option>MO</option><option>MT</option><option>NE</option><option>NV</option><option>NH</option><option>NJ</option><option>NM</option><option>NY</option><option>NC</option><option>ND</option><option>OH</option><option>OK</option><option>OR</option><option>PA</option><option>RI</option><option>SC</option><option>SD</option><option>TN</option><option>TX</option><option>UT</option><option>VT</option><option>VA</option><option>WA</option><option>WV</option><option>WI</option><option>WY</option><option>DC</option><option>PR</option>
                                                    </select>
                                                </div>
                                                <span class="validation-text">You must fill out this field</span>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="zip-contact">Zip</label>
                                                <input type="text" id="zip-contact" placeholder="Zip" />
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="custom_select" tabindex="0">
                                                    <label for="country-contact">Country</label>
                                                    <select id="country-contact">
                                                        <option disabled selected>Country</option>
                                                        <option>United States</option><option>Canada</option><option>Mexico</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="phone-contact">Phone</label>
                                                <input type="tel" id="phone-contact" placeholder="Phone" />
                                            </div>
                                            <div class="col-12">
                                                <h2>Product Information</h2>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="product-name-contact">Name of Product</label>
                                                <input type="text" id="product-name-contact" placeholder="Name of Product" />
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="purchase-date-contact">Date of Purchase</label>
                                                <div class="singlepicker">
                                                    <input type="text" id="datepicker" placeholder="Date of Purchase" />
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="store-purchased-contact">Name of Store of Purchase</label>
                                                <input type="text" id="store-purchased-contact" placeholder="Name of Store of Purchase" />
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="city-purchased-contact">City of Store of Purchase</label>
                                                <input type="text" id="city-purchased-contact" placeholder="City of Store of Purchase" />
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="custom_select" tabindex="0">
                                                    <label for="state-purchased-contact">State of Store of Purchase</label>
                                                    <select id="state-purchased-contact">
                                                        <option disabled selected>State of Store of Purchase</option>
                                                        <option>AL</option><option>AK</option><option>AZ</option><option>AR</option><option>CA</option><option>CO</option><option>CT</option><option>DE</option><option>FL</option><option>GA</option><option>HI</option><option>ID</option><option>IL</option><option>IN</option><option>IA</option><option>KS</option><option>KY</option><option>LA</option><option>ME</option><option>MD</option><option>MA</option><option>MI</option><option>MN</option><option>MS</option><option>MO</option><option>MT</option><option>NE</option><option>NV</option><option>NH</option><option>NJ</option><option>NM</option><option>NY</option><option>NC</option><option>ND</option><option>OH</option><option>OK</option><option>OR</option><option>PA</option><option>RI</option><option>SC</option><option>SD</option><option>TN</option><option>TX</option><option>UT</option><option>VT</option><option>VA</option><option>WA</option><option>WV</option><option>WI</option><option>WY</option><option>DC</option><option>PR</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="zip-purchased-contact">Zip Code of Store of Purchase</label>
                                                <input type="text" id="zip-purchased-contact" placeholder="Zip Code of Store of Purchase" />
                                            </div>
                                            <div class="col-12 validation-error">
                                                <label for="concern-contact">Please describe your concern</label>
                                                <textarea id="concern-contact" placeholder="Please describe your concern"></textarea>
                                                <span class="validation-text">You must fill out this field</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 message validation-error">
                                        <label for="message-contact">Message</label>
                                        <textarea id="message-contact" placeholder="Type your message here"></textarea>
                                        <span class="validation-text">You must fill out this field</span>
                                    </div>
                                    <div class="col-12 text-center validation-error">
                                        <input type="checkbox" id="iagree-contact" disabled />
                                        <label for="iagree-contact">‘I agree, to Del Monte’s<sup>®</sup> terms-of-conditions (link) and privacy policy’ (link), Dummy Text Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</label>
                                        <span class="validation-text">You must accept the terms and privacy policy</span>
                                    </div>
                                    <div class="col-12">
                                        <input type="submit" id="submit-contact" value="Submit" disabled />
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="contact-info">
                            <p>Please feel free to send us an email directly to our consumer service email</p>
                            <p><strong><a href="mailto:consumers@freshdelmonte.com">consumers@freshdelmonte.com</a></strong></p>
                            <p>You can also contact us at:<br />
                                <strong>305-520-8668 (Phone)<br />
                                Del Monte Fresh Produce, P.O. Box 149222<br />
                                Coral Gables, FL 33114-9222 USA</strong></p>
                        </div>
                        <div class="container-fluid cards featured-recipes">
                            <div class="row">
                                <a href="" class="col-md-4 col-sm-6">
                                    <div class="card rating-star">
                                        <div class="card__img">
                                            <img src="img/featured-recipe.jpg" alt="" class="card-bg-img" />
                                        </div>
                                        <div class="card__text">
                                            <p class="card__text__heading">Featured Recipe Title</p>
                                            <p class="card__text__desc">Fearured Recipe FPO Dummy Text, Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean</p>
                                            <div class="card__rating">
                                                <ul class="stars">
                                                    <li>
                                                        <img src="img/blue-star-5-5.png" alt="" />
                                                    </li>
                                                    <li>
                                                        <img src="img/blue-star-5-5.png" alt="" />
                                                    </li>
                                                    <li>
                                                        <img src="img/blue-star-5-5.png" alt="" />
                                                    </li>
                                                    <li>
                                                        <img src="img/blue-star-5-5.png" alt="" />
                                                    </li>
                                                    <li>
                                                        <img src="img/blue-star-2-5.png" alt="" />
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="" class="col-md-4 col-sm-6">
                                    <div class="card rating-star">
                                        <div class="card__img">
                                            <img src="img/featured-recipe.jpg" alt="" class="card-bg-img" />
                                        </div>
                                        <div class="card__text">
                                            <p class="card__text__heading">Featured Recipe Title</p>
                                            <p class="card__text__desc">Fearured Recipe FPO Dummy Text, Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean</p>
                                            <div class="card__rating">
                                                <ul class="stars">
                                                    <li>
                                                        <img src="img/blue-star-5-5.png" alt="" />
                                                    </li>
                                                    <li>
                                                        <img src="img/blue-star-5-5.png" alt="" />
                                                    </li>
                                                    <li>
                                                        <img src="img/blue-star-5-5.png" alt="" />
                                                    </li>
                                                    <li>
                                                        <img src="img/blue-star-5-5.png" alt="" />
                                                    </li>
                                                    <li>
                                                        <img src="img/blue-star-2-5.png" alt="" />
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="" class="col-md-4 col-sm-6">
                                    <div class="card rating-star">
                                        <div class="card__img">
                                            <img src="img/featured-recipe.jpg" alt="" class="card-bg-img" />
                                        </div>
                                        <div class="card__text">
                                            <p class="card__text__heading">Featured Recipe Title</p>
                                            <p class="card__text__desc">Fearured Recipe FPO Dummy Text, Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean</p>
                                            <div class="card__rating">
                                                <ul class="stars">
                                                    <li>
                                                        <img src="img/blue-star-5-5.png" alt="" />
                                                    </li>
                                                    <li>
                                                        <img src="img/blue-star-5-5.png" alt="" />
                                                    </li>
                                                    <li>
                                                        <img src="img/blue-star-5-5.png" alt="" />
                                                    </li>
                                                    <li>
                                                        <img src="img/blue-star-5-5.png" alt="" />
                                                    </li>
                                                    <li>
                                                        <img src="img/blue-star-2-5.png" alt="" />
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <?php include('includes/cards.php'); ?>
                        </div>
                        <a href="#top" class="back-to-top">
                            <img src="img/back-to-top.png" alt="" />
                        </a>
                    </section>
                    <?php include('includes/mobile-footer-validation.php'); ?>
                </main>
                <?php include('includes/sitemap.php'); ?>
            </div>
            <?php include('includes/cookies-prompt.php'); ?>
        </div>
        <?php include('includes/search-modal.php'); ?>
        <?php include('includes/updates-validation-modal.php'); ?>
        <?php include('includes/scripts.php'); ?>
    </body>
</html>
