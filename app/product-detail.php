<!doctype html>
<html class="no-js mm-wrapper_sidebar-closed" lang="en">
    <head>
        <title>Product Detail Page | Del Monte Fresh Produce</title>
        <?php include('includes/meta.php'); ?>
        <?php include('includes/favicon.php'); ?>
        <?php include('includes/styles.php'); ?>
    </head>
    <body id="top">
        <?php include('includes/loading-screen.php'); ?>
        <div class="site-wrapper general product-detail banana-theme">
            <?php include('includes/mobile-nav.php'); ?>
            <div class="site">
                <?php include('includes/sidebar.php'); ?>
                <main class="bg-texture-watermelon">
                    <section class="main-content-wrapper">
                        <div class="section-container">
                            <nav class="breadcrumbs" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">PagePath</a></li>
                                    <li class="breadcrumb-item"><a href="#">BreadCrumb</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">General Page</li>
                                </ol>
                                <form class='form'>
                                    <label for="products-search">Product Search</label>
                                    <input type="search" id="products-search" placeholder="Product Search" />
                                </form>
                            </nav>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-8 col-md-7">
                                        <!-- The color of the slider border, active slide indicator, page title and variety highlight is customizable by a theme class, which goes into the same div as the site-wrapper. See the app/scss/layouts/_product-themes.scss partial for a list of available theme classes. -->
                                        <div class="product-slider">
                                            <div class="slide">
                                                <img src="img/bananas.jpg" alt="" />
                                            </div>
                                            <div class="slide">
                                                <img src="img/bananas.jpg" alt="" />
                                            </div>
                                            <div class="slide">
                                                <img src="img/bananas.jpg" alt="" />
                                            </div>
                                            <div class="slide">
                                                <img src="img/bananas.jpg" alt="" />
                                            </div>
                                            <div class="slide">
                                                <img src="img/bananas.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div class="product-slider-footer">
                                            <h1>Bananas</h1>
                                            <div class="product-actions">
                                                <div class="product-actions__share" data-toggle="tooltip" data-placement="bottom" data-trigger="hover" title="Share">
                                                    <a href="" data-container="body" data-toggle="popover" data-placement="bottom" data-html="true" data-content="<ul>
                                                        <li>
                                                            <a href='' target='_blank'>
                                                                <span class='fab fa-linkedin-in'></span>
                                                                <span class='social-media-name'>LinkedIn</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href='' target='_blank'>
                                                                <span class='fab fa-facebook-f'></span>
                                                                <span class='social-media-name'>Facebook</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href='' target='_blank'>
                                                                <span class='fab fa-twitter'></span>
                                                                <span class='social-media-name'>Twitter</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href='' target='_blank'>
                                                                <span class='fab fa-pinterest-p'></span>
                                                                <span class='social-media-name'>Pinterest</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href='' target='_blank'>
                                                                <span class='fas fa-envelope'></span>
                                                                <span class='social-media-name'>Email</span>
                                                            </a>
                                                        </li>
                                                    </ul>">
                                                        <img src="img/share-gray.svg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-actions__print">
                                                    <a href="" data-toggle="tooltip" data-placement="bottom" data-trigger="hover" title="Print">
                                                        <img src="img/print-gray.svg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-actions__download">
                                                    <a href="" data-toggle="tooltip" data-placement="bottom" data-trigger="hover" title="Download PDF">
                                                        <img src="img/download.svg" alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="varieties">
                                            <div class="varieties__heading">
                                                <span>Other Varieties</span>
                                                <a href="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">View More</a>
                                            </div>
                                            <div class="product-varieties-initial">
                                                <div class="product-varieties">
                                                    <div class="product-varieties__variety active">
                                                        <div class="product-varieties__variety__image">
                                                            <div class="product-varieties__variety__image__initial">
                                                                <img src="img/bananas-packaged.jpg" alt="" />
                                                            </div>
                                                            <div class="product-varieties__variety__image__hover">
                                                                <img src="img/bananas-packaged-hover.jpg" alt="" />
                                                            </div>
                                                        </div>
                                                        <p>Product Name</p>
                                                    </div>
                                                    <div class="product-varieties__variety">
                                                        <div class="product-varieties__variety__image">
                                                            <div class="product-varieties__variety__image__initial">
                                                                <img src="img/bananas-mini.jpg" alt="" />
                                                            </div>
                                                            <div class="product-varieties__variety__image__hover">
                                                                <img src="img/bananas-mini-hover.jpg" alt="" />
                                                            </div>
                                                        </div>
                                                        <p>Product Name</p>
                                                    </div>
                                                    <div class="product-varieties__variety">
                                                        <div class="product-varieties__variety__image">
                                                            <div class="product-varieties__variety__image__initial">
                                                                <img src="img/bananas-monzano.jpg" alt="" />
                                                            </div>
                                                            <div class="product-varieties__variety__image__hover">
                                                                <img src="img/bananas-monzano-hover.jpg" alt="" />
                                                            </div>
                                                        </div>
                                                        <p>Product Name</p>
                                                    </div>
                                                    <div class="product-varieties__variety">
                                                        <div class="product-varieties__variety__image">
                                                            <div class="product-varieties__variety__image__initial">
                                                                <img src="img/bananas-organic.jpg" alt="" />
                                                            </div>
                                                            <div class="product-varieties__variety__image__hover">
                                                                <img src="img/bananas-organic-hover.jpg" alt="" />
                                                            </div>
                                                        </div>
                                                        <p>Product Name</p>
                                                    </div>
                                                    <div class="product-varieties__variety">
                                                        <div class="product-varieties__variety__image">
                                                            <div class="product-varieties__variety__image__initial">
                                                                <img src="img/bananas-red.jpg" alt="" />
                                                            </div>
                                                            <div class="product-varieties__variety__image__hover">
                                                                <img src="img/bananas-red-hover.jpg" alt="" />
                                                            </div>
                                                        </div>
                                                        <p>Product Name</p>
                                                    </div>
                                                    <div class="product-varieties__variety">
                                                        <div class="product-varieties__variety__image">
                                                            <div class="product-varieties__variety__image__initial">
                                                                <img src="img/bananas-single.jpg" alt="" />
                                                            </div>
                                                            <div class="product-varieties__variety__image__hover">
                                                                <img src="img/bananas-single-hover.jpg" alt="" />
                                                            </div>
                                                        </div>
                                                        <p>Product Name</p>
                                                    </div>
                                                    <div class="product-varieties__variety">
                                                        <div class="product-varieties__variety__image">
                                                            <div class="product-varieties__variety__image__initial">
                                                                <img src="img/bananas-packaged.jpg" alt="" />
                                                            </div>
                                                            <div class="product-varieties__variety__image__hover">
                                                                <img src="img/bananas-packaged-hover.jpg" alt="" />
                                                            </div>
                                                        </div>
                                                        <p>Product Name</p>
                                                    </div>
                                                    <div class="product-varieties__variety">
                                                        <div class="product-varieties__variety__image">
                                                            <div class="product-varieties__variety__image__initial">
                                                                <img src="img/bananas-mini.jpg" alt="" />
                                                            </div>
                                                            <div class="product-varieties__variety__image__hover">
                                                                <img src="img/bananas-mini-hover.jpg" alt="" />
                                                            </div>
                                                        </div>
                                                        <p>Product Name</p>
                                                    </div>
                                                    <div class="product-varieties__variety">
                                                        <div class="product-varieties__variety__image">
                                                            <div class="product-varieties__variety__image__initial">
                                                                <img src="img/bananas-monzano.jpg" alt="" />
                                                            </div>
                                                            <div class="product-varieties__variety__image__hover">
                                                                <img src="img/bananas-monzano-hover.jpg" alt="" />
                                                            </div>
                                                        </div>
                                                        <p>Product Name</p>
                                                    </div>
                                                    <div class="product-varieties__variety">
                                                        <div class="product-varieties__variety__image">
                                                            <div class="product-varieties__variety__image__initial">
                                                                <img src="img/bananas-organic.jpg" alt="" />
                                                            </div>
                                                            <div class="product-varieties__variety__image__hover">
                                                                <img src="img/bananas-organic-hover.jpg" alt="" />
                                                            </div>
                                                        </div>
                                                        <p>Product Name</p>
                                                    </div>
                                                    <div class="product-varieties__variety">
                                                        <div class="product-varieties__variety__image">
                                                            <div class="product-varieties__variety__image__initial">
                                                                <img src="img/bananas-red.jpg" alt="" />
                                                            </div>
                                                            <div class="product-varieties__variety__image__hover">
                                                                <img src="img/bananas-red-hover.jpg" alt="" />
                                                            </div>
                                                        </div>
                                                        <p>Product Name</p>
                                                    </div>
                                                    <div class="product-varieties__variety">
                                                        <div class="product-varieties__variety__image">
                                                            <div class="product-varieties__variety__image__initial">
                                                                <img src="img/bananas-single.jpg" alt="" />
                                                            </div>
                                                            <div class="product-varieties__variety__image__hover">
                                                                <img src="img/bananas-single-hover.jpg" alt="" />
                                                            </div>
                                                        </div>
                                                        <p>Product Name</p>
                                                    </div>
                                                    <div class="product-varieties__variety">
                                                        <div class="product-varieties__variety__image">
                                                            <div class="product-varieties__variety__image__initial">
                                                                <img src="img/bananas-packaged.jpg" alt="" />
                                                            </div>
                                                            <div class="product-varieties__variety__image__hover">
                                                                <img src="img/bananas-packaged-hover.jpg" alt="" />
                                                            </div>
                                                        </div>
                                                        <p>Product Name</p>
                                                    </div>
                                                    <div class="product-varieties__variety">
                                                        <div class="product-varieties__variety__image">
                                                            <div class="product-varieties__variety__image__initial">
                                                                <img src="img/bananas-mini.jpg" alt="" />
                                                            </div>
                                                            <div class="product-varieties__variety__image__hover">
                                                                <img src="img/bananas-mini-hover.jpg" alt="" />
                                                            </div>
                                                        </div>
                                                        <p>Product Name</p>
                                                    </div>
                                                    <div class="product-varieties__variety">
                                                        <div class="product-varieties__variety__image">
                                                            <div class="product-varieties__variety__image__initial">
                                                                <img src="img/bananas-monzano.jpg" alt="" />
                                                            </div>
                                                            <div class="product-varieties__variety__image__hover">
                                                                <img src="img/bananas-monzano-hover.jpg" alt="" />
                                                            </div>
                                                        </div>
                                                        <p>Product Name</p>
                                                    </div>
                                                    <div class="product-varieties__variety">
                                                        <div class="product-varieties__variety__image">
                                                            <div class="product-varieties__variety__image__initial">
                                                                <img src="img/bananas-organic.jpg" alt="" />
                                                            </div>
                                                            <div class="product-varieties__variety__image__hover">
                                                                <img src="img/bananas-organic-hover.jpg" alt="" />
                                                            </div>
                                                        </div>
                                                        <p>Product Name</p>
                                                    </div>
                                                    <div class="product-varieties__variety">
                                                        <div class="product-varieties__variety__image">
                                                            <div class="product-varieties__variety__image__initial">
                                                                <img src="img/bananas-red.jpg" alt="" />
                                                            </div>
                                                            <div class="product-varieties__variety__image__hover">
                                                                <img src="img/bananas-red-hover.jpg" alt="" />
                                                            </div>
                                                        </div>
                                                        <p>Product Name</p>
                                                    </div>
                                                    <div class="product-varieties__variety">
                                                        <div class="product-varieties__variety__image">
                                                            <div class="product-varieties__variety__image__initial">
                                                                <img src="img/bananas-single.jpg" alt="" />
                                                            </div>
                                                            <div class="product-varieties__variety__image__hover">
                                                                <img src="img/bananas-single-hover.jpg" alt="" />
                                                            </div>
                                                        </div>
                                                        <p>Product Name</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-varieties-toggle collapse" id="collapseOne">
                                                <div class="product-varieties"></div>
                                            </div>
                                        </div>
                                        <p>Bananas come in a variety of sizes and colors but are always sweet and satisfying when eaten! Bananas have been around forever. Did you know that they have grown on this planet for over 1 million years and that experts believe the first plants grew in the jungles of Southeast Asia?</p>
                                        <p>Nowadays bananas are known as one of the most versatile fruits because they can be enjoyed as a nutritious snack, part of a meal or dessert, in a milkshake, as a topping for cereal, or in a cool banana split.</p>
                                    </div>
                                    <div class="col-lg-4 col-md-5">
                                        <div class="featured-recipes">
                                            <h2>Featured Recipes</h2>
                                            <p>Our chefs are hard at work creating fresh and healthful recipes to suit your lifestyle. Until they are perfected and ready to share, please take a look at a few of our favorite recipes below.</p>
                                            <a href="" class="featured-recipes__recipe banana-theme">
                                                <img src="img/delmonte-featuredrecipeimages-sufganiyahsbananacustard_vertical1_hi_branded_heart_dec19_global-332x3332--(83x83).jpg" alt="" />
                                                <p>Sufganiyahs with Banana Custard</p>
                                            </a>
                                            <a href="" class="featured-recipes__recipe pineapple-theme">
                                                <img src="img/delmonte-featuredrecipeimages-pineapplemangocashewsmoothies_horizontal_branded_hi_heart_oct19_global-332x3332--(83x83).jpg" alt="" />
                                                <p>Pineapple-Mango Cashew Smoothies</p>
                                            </a>
                                            <a href="" class="featured-recipes__recipe banana-theme">
                                                <img src="img/delmonte-featuredrecipeimages-nobakechocolatecustardshoneyedbanana_horizontal_branded_hi_heart_oct19_global-332x3332--(83x83).jpg" alt="" />
                                                <p>No-Bake Mini Chocolate Custards with Honeyed Bananas</p>
                                            </a>
                                        </div>
                                        <div class="nutrition-facts">
                                            <!-- If the recipe does not have nutrition facts, use the bulleted list -->
                                            <!--<?php include('includes/nutrition-facts.php'); ?>-->
                                            <ul>
                                                <li>Very low in saturated fat, cholesterol and sodium</li>
                                                <li>Excellent source of vitamin B6</li>
                                                <li>Good source of dietary fiber, vitamin C, potassium and manganese</li>
                                            </ul>
                                        </div>
                                        <div class="tag-section">
                                            <span class="fas fa-tag"></span>
                                            <div class="tags">
                                                <ul>
                                                    <?php include('includes/tag.php'); ?>
                                                    <?php include('includes/tag.php'); ?>
                                                    <?php include('includes/tag.php'); ?>
                                                    <?php include('includes/tag.php'); ?>
                                                    <?php include('includes/tag.php'); ?>
                                                    <?php include('includes/tag.php'); ?>
                                                    <?php include('includes/tag.php'); ?>
                                                    <?php include('includes/tag.php'); ?>
                                                    <?php include('includes/tag.php'); ?>
                                                    <?php include('includes/tag.php'); ?>
                                                    <?php include('includes/tag.php'); ?>
                                                    <?php include('includes/tag.php'); ?>
                                                    <?php include('includes/tag.php'); ?>
                                                    <?php include('includes/tag.php'); ?>
                                                    <?php include('includes/tag.php'); ?>
                                                    <?php include('includes/tag.php'); ?>
                                                    <?php include('includes/tag.php'); ?>
                                                    <?php include('includes/tag.php'); ?>
                                                    <?php include('includes/tag.php'); ?>
                                                    <?php include('includes/tag.php'); ?>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="world-map">
                                            <h2>Countries of Origin</h2>
                                            <div class="map-container">
                                                <div class="content">
                                                    <div id="world-map"></div>
                                                </div>
                                            </div>
                                            <p class="map-directions">Pinch and swipe to zoom and pan</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="how-tos">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <h2>How to Select</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient.</p>
                                            </div>
                                            <div class="col-md-4">
                                                <h2>How to Prepare</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient.</p>
                                            </div>
                                            <div class="col-md-4">
                                                <h2>How to Store</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid product-video-section">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-6 col-sm-6">
                                            <div class="product-video-section__video">
                                                <div class="content">
                                                    <iframe src="https://www.youtube.com/embed/lds049CCxtY" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <div class="question-card">
                                                <span class="question-card__question">What's your favorite fruit?</span>
                                                <form class="form question-card__answers">
                                                    <div class="question-card__answers__answer">
                                                        <input type="radio" id="answer1" name="answers">
                                                        <label for="answer1">Answer 1</label>
                                                    </div>
                                                    <div class="question-card__answers__answer">
                                                        <input type="radio" id="answer2" name="answers">
                                                        <label for="answer2">Answer 2</label>
                                                    </div>
                                                    <div class="question-card__answers__answer">
                                                        <input type="radio" id="answer3" name="answers">
                                                        <label for="answer3">Answer 3</label>
                                                    </div>
                                                    <div class="question-card__answers__answer">
                                                        <input type="radio" id="answer4" name="answers">
                                                        <label for="answer4">Answer 4</label>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php include('includes/cards.php'); ?>
                        </div>
                        <a href="#top" class="back-to-top">
                            <img src="img/back-to-top.png" alt="" />
                        </a>
                    </section>
                    <?php include('includes/mobile-footer.php'); ?>
                </main>
                <?php include('includes/sitemap.php'); ?>
            </div>
            <?php include('includes/cookies-prompt.php'); ?>
        </div>
        <?php include('includes/search-modal.php'); ?>
        <?php include('includes/updates-modal.php'); ?>
        <?php include('includes/scripts.php'); ?>
        <script>
            var map_regions = { "BO": '#552445', "CL": '#552445', "PE": '#552445' };
        </script>
    </body>
</html>
