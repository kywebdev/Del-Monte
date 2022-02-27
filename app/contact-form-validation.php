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
                <?php include('includes/header.php'); ?>
                <main id="main">
                    <section class="main-content-wrapper">
                        <nav class="breadcrumb__nav" aria-label="breadcrumb">
                            <div class="section-container">
                                <ol class="breadcrumb__list">
                                    <li class="breadcrumb__list-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb__list-item"><a href="about.php">About Us</a></li>
                                    <li class="breadcrumb__list-item --active" aria-current="page">Contact Us</li>
                                </ol>
                            </div>
                        </nav>
                        <div class="section-container">
                            <div class="section__header">
                                <div class="section__header-container">
                                    <div class="page__title-container">
                                        <h1>
                                            <span class="page__title --red"><span>we would love to </span></span><br/>
                                            <span class="page__title --red"><span>heaR fRom you</span></span>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        <p class="contact-form__intro">If you did not find the information you are looking for in the Frequently Asked Questions, please complete the contact form below and someone will be in touch with you as soon as possible.</p>
                        <form class="contact-form form" action="#thankyou">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12">
                                        <h2 class="contact-form__title">Customer Information</h2>
                                    </div>
                                    <div class="col-sm-6 contact-form__item validation-error">
                                        <label for="fname-contact"><sup>*</sup>First Name</label>
                                        <input type="text" id="fname-contact">
                                        <span class="validation-text">You must fill out this field</span>
                                    </div>
                                    <div class="col-sm-6 contact-form__item">
                                        <label for="lname-contact"><sup>*</sup>Last Name</label>
                                        <input type="text" id="lname-contact">
                                    </div>
                                    <div class="col-sm-6 contact-form__item">
                                        <label for="email-updates-contact"><sup>*</sup>Email</label>
                                        <input type="email" id="email-updates-contact">
                                    </div>
                                    <div class="col-sm-6 contact-form__item validation-error">
                                        <div class="custom_select" tabindex="0">
                                            <label for="state-contact"><sup>*</sup>Country</label>
                                            <select id="state-contact">
                                                <option disabled selected>Country</option>
                                                <option>United States</option>
                                                <option>Canada</option>
                                                <option>Mexico</option>
                                            </select>
                                        </div>
                                        <span class="validation-text">You must fill out this field</span>
                                    </div>
                                    <div class="col-sm-6 contact-form__item">
                                        <div class="contact-reason">
                                            <div class="custom_select" tabindex="0">
                                                <label for="reason">Reason for Comment</label>
                                                <select id="reason">
                                                    <option disabled selected>Reason for Comment</option>
                                                    <option>Concern</option>
                                                    <option>Inquiry</option>
                                                    <option>Praise</option>
                                                    <option>Other</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <button class="contact-reason-button btn --green" disabled="disabled">Continue</button>
                                    </div>
                                    <div class="col-12 gated-content">
                                        <div class="row">
                                            <div class="col-12 contact-form__item">
                                                <label for="addr1-contact"><sup>*</sup>Address Line 1</label>
                                                <input type="text" id="addr1-contact" />
                                            </div>
                                            <div class="col-12 contact-form__item">
                                                <label for="addr2-contact">Address Line 2</label>
                                                <input type="text" id="addr2-contact"  />
                                            </div>
                                            <div class="col-md-5 col-sm-4 contact-form__item">
                                                <label for="city-contact"><sup>*</sup>City</label>
                                                <input type="text" id="city-contact" />
                                            </div>
                                            <div class="col-md-3 col-sm-4 contact-form__item validation-error">
                                                <div class="custom_select" tabindex="0">
                                                    <label for="state-contact">State</label>
                                                    <select id="state-contact">
                                                        <option disabled selected>State</option>
                                                        <option>AL</option><option>AK</option><option>AZ</option><option>AR</option><option>CA</option><option>CO</option><option>CT</option><option>DE</option><option>FL</option><option>GA</option><option>HI</option><option>ID</option><option>IL</option><option>IN</option><option>IA</option><option>KS</option><option>KY</option><option>LA</option><option>ME</option><option>MD</option><option>MA</option><option>MI</option><option>MN</option><option>MS</option><option>MO</option><option>MT</option><option>NE</option><option>NV</option><option>NH</option><option>NJ</option><option>NM</option><option>NY</option><option>NC</option><option>ND</option><option>OH</option><option>OK</option><option>OR</option><option>PA</option><option>RI</option><option>SC</option><option>SD</option><option>TN</option><option>TX</option><option>UT</option><option>VT</option><option>VA</option><option>WA</option><option>WV</option><option>WI</option><option>WY</option><option>DC</option><option>PR</option>
                                                    </select>
                                                </div>
                                                <span class="validation-text">You must fill out this field</span>
                                            </div>
                                            <div class="col-sm-4 contact-form__item">
                                                <label for="zip-contact"><sup>*</sup>Zip</label>
                                                <input type="text" id="zip-contact" />
                                            </div>
                                            <div class="col-sm-6 contact-form__item">
                                                <div class="custom_select" tabindex="0">
                                                    <label for="country-contact">Country</label>
                                                    <select id="country-contact">
                                                        <option disabled selected>Country</option>
                                                        <option>United States</option><option>Canada</option><option>Mexico</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 contact-form__item">
                                                <label for="phone-contact">Phone</label>
                                                <input type="tel" id="phone-contact" />
                                            </div>
                                            <h2 class="col-12 contact-form__title">Product Information</h2>
                                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4 contact-form__item">
                                                <label for="product-name-contact">Name of Product</label>
                                                <input type="text" id="product-name-contact" />
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4 contact-form__item">
                                                <div class="singlepicker">
                                                    <label for="datepicker">Date of Purchase</label>
                                                    <input type="text" id="datepicker" />
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4 contact-form__item">
                                                <label for="store-purchased-contact">Name of Store of Purchase</label>
                                                <input type="text" id="store-purchased-contact" />
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4 contact-form__item">
                                                <label for="city-purchased-contact">City of Store of Purchase</label>
                                                <input type="text" id="city-purchased-contact"  />
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4 contact-form__item">
                                                <div class="custom_select" tabindex="0">
                                                    <label for="state-purchased-contact">State of Store of Purchase</label>
                                                    <select id="state-purchased-contact">
                                                        <option disabled selected>State of Store of Purchase</option>
                                                        <option>AL</option><option>AK</option><option>AZ</option><option>AR</option><option>CA</option><option>CO</option><option>CT</option><option>DE</option><option>FL</option><option>GA</option><option>HI</option><option>ID</option><option>IL</option><option>IN</option><option>IA</option><option>KS</option><option>KY</option><option>LA</option><option>ME</option><option>MD</option><option>MA</option><option>MI</option><option>MN</option><option>MS</option><option>MO</option><option>MT</option><option>NE</option><option>NV</option><option>NH</option><option>NJ</option><option>NM</option><option>NY</option><option>NC</option><option>ND</option><option>OH</option><option>OK</option><option>OR</option><option>PA</option><option>RI</option><option>SC</option><option>SD</option><option>TN</option><option>TX</option><option>UT</option><option>VT</option><option>VA</option><option>WA</option><option>WV</option><option>WI</option><option>WY</option><option>DC</option><option>PR</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4 contact-form__item">
                                                <label for="zip-purchased-contact">Zip Code of Store of Purchase</label>
                                                <input type="text" id="zip-purchased-contact" />
                                            </div>
                                            <div class="col-12 contact-form__item validation-error">
                                                <label for="concern-contact">Please describe your concern</label>
                                                <textarea id="concern-contact"></textarea>
                                                <span class="validation-text">You must fill out this field</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 contact-form__item message validation-error">
                                        <label for="message-contact">Type your message here</label>
                                        <textarea id="message-contact"></textarea>
                                        <span class="validation-text">You must fill out this field</span>
                                    </div>
                                    <div class="col-12 iagree validation-error">
                                        <input type="checkbox" id="iagree-contact" />
                                        <label for="iagree-contact">‘I agree, to Del Monte’s® terms-of-conditions (link) and privacy policy’ (link), Dummy Text Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</label>
                                        <span class="validation-text">You must accept the terms and privacy policy</span>
                                    </div>
                                    <div class="col-12 submit">
                                        <input id="submit-contact" class="btn --green" type="submit" value="Submit" disabled />
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="contact-info">
                            <p>Please feel free to contact the Consumer Affairs Department directly. <br/> <a class="contact-info__link" href="mailto:consumers@freshdelmonte.com">consumers@freshdelmonte.com</a></p>
                            <ul class="contact-info__list">
                                <li class="contact-info__list-item">
                                    <a href="tel:+1-305-520-8668">305-520-8668</a>
                                </li>
                                <li class="contact-info__list-item --no-bullet">
                                    <address class="contact-info__address">
                                        <span>Del Monte Fresh Produce N.A., Inc.</span>
                                        <span>P.O. Box 149222</span>
                                        <span>Coral Gables, FL 33114-9222 USA</span>
                                    </address>
                                </li>
                            </ul>
                        </div>
                        <div class="remodal thankyou-modal" data-remodal-id="thankyou">
                            <button data-remodal-action="close" class="remodal-close"></button>
                            <div class="remodal-content">
                                <h2>
                                    <span class="page__title --red"><span>thank you foR </span></span><br/>
                                    <span class="page__title --red"><span>filling out ouR foRm!</span></span>
                                </h2>
                                <p>We will get back to you as soon as we can. In the meantime, continue checking out our site!</p>
                                <a href="index.php" class="btn --green">Home</a>
                            </div>
                        </div>
                        <?php include('includes/cards.php'); ?>
                        </div>
                        <?php include('includes/footer.php'); ?>
                    </section>
                </main>
            </div>
            <?php include('includes/cookies-prompt.php'); ?>
        </div>
        <?php include('includes/updates-modal.php'); ?>
        <?php include('img/svg-sprite/svg/symbols.svg'); ?>
        <?php include('includes/scripts.php'); ?>
    </body>
</html>