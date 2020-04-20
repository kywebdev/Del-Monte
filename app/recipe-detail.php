<!doctype html>
<html class="no-js mm-wrapper_sidebar-closed" lang="en">
    <head>
        <title>Recipe Detail Page | Del Monte Fresh Produce</title>
        <?php include('includes/meta.php'); ?>
        <?php include('includes/favicon.php'); ?>
        <?php include('includes/styles.php'); ?>
    </head>
    <body id="top">
        <?php include('includes/loading-screen.php'); ?>
        <div class="site-wrapper general recipe-detail pineapple-theme">
            <?php include('includes/mobile-nav.php'); ?>
            <div class="site">
                <?php include('includes/sidebar.php'); ?>
                <main class="bg-texture-cabbage">
                    <section class="main-content-wrapper">
                        <div class="section-container">
                            <nav class="breadcrumbs" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">PagePath</a></li>
                                    <li class="breadcrumb-item"><a href="#">BreadCrumb</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">General Page</li>
                                </ol>
                                <form class='form'>
                                    <label for="recipes-search">Recipe Search</label>
                                    <input type="search" id="recipes-search" placeholder="Recipe Search" />
                                </form>
                            </nav>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-8 col-md-7">
                                        <!-- The color of the slider border, active slide indicator and page title is customizable by a theme class, which goes into the same div as the site-wrapper. See the app/scss/layouts/_recipe-themes.scss partial for a list of available theme classes. -->
                                        <div class="recipe-slider">
                                            <div class="slide">
                                                <img src="img/recipe-img-1.jpg" alt="" />
                                            </div>
                                            <div class="slide">
                                                <img src="img/recipe-img-1.jpg" alt="" />
                                            </div>
                                            <div class="slide">
                                                <img src="img/recipe-img-1.jpg" alt="" />
                                            </div>
                                            <div class="slide">
                                                <img src="img/recipe-img-1.jpg" alt="" />
                                            </div>
                                            <div class="slide">
                                                <img src="img/recipe-img-1.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div class="recipe-actions">
                                            <div class="recipe-actions__favorite">
                                                <a href="" class="removed" data-toggle="tooltip" data-placement="bottom" data-trigger="hover" title="Save to favorites">
                                                    <span class="fas fa-heart"></span>
                                                </a>
                                            </div>
                                            <div class="recipe-actions__share" data-toggle="tooltip" data-placement="bottom" data-trigger="hover" title="Share">
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
                                            <div class="recipe-actions__print">
                                                <a href="" data-toggle="tooltip" data-placement="bottom" data-trigger="hover" title="Print">
                                                    <img src="img/print-gray.svg" alt="" />
                                                </a>
                                            </div>
                                            <div class="recipe-actions__download">
                                                <a href="" data-toggle="tooltip" data-placement="bottom" data-trigger="hover" title="Download PDF">
                                                    <img src="img/download.svg" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                        <h1>Honey Orange Glazed Chicken Skewers</h1>
                                        <div class="recipe-body">
                                            <h2>Ingredients:</h2>
                                            <ul class="ingredient-list">
                                                <li>
                                                    <span class="ingredient-divider">Ingredient Divider</span>
                                                    <span class="ingredient-amt"></span>
                                                    <span class="ingredient"></span>
                                                </li>
                                                <li>
                                                    <span class="ingredient-divider"></span>
                                                    <span class="ingredient-amt">1</span>
                                                    <span class="ingredient">Boneless skinless chicken breast</span>
                                                </li>
                                                <li>
                                                    <span class="ingredient-divider"></span>
                                                    <span class="ingredient-amt">⅔</span>
                                                    <span class="ingredient">Cup preferred barbecue sauce, divided</span>
                                                </li>
                                                <li>
                                                    <span class="ingredient-divider"></span>
                                                    <span class="ingredient-amt">4</span>
                                                    <span class="ingredient">Clices bacon</span>
                                                </li>
                                                <li>
                                                    <span class="ingredient-amt">1</span>
                                                    <span class="ingredient">Pound prepared pizza dough</span>
                                                </li>
                                                <li>
                                                    <span class="ingredient-divider"></span>
                                                    <span class="ingredient-amt">6 oz.</span>
                                                    <span class="ingredient">Mozzarella, torn into ¾” chunks or shredded</span>
                                                </li>
                                                <li>
                                                    <span class="ingredient-divider"></span>
                                                    <span class="ingredient-amt">2</span>
                                                    <span class="ingredient">Cups 1” chunks Del Monte<sup>&reg;</sup> pineapple</span>
                                                </li>
                                                <li>
                                                    <span class="ingredient-divider"></span>
                                                    <span class="ingredient-amt">½</span>
                                                    <span class="ingredient">Red onion, very thinly sliced</span>
                                                </li>
                                                <li>
                                                    <span class="ingredient-divider">Ingredient Divider</span>
                                                    <span class="ingredient-amt"></span>
                                                    <span class="ingredient"></span>
                                                </li>
                                                <li>
                                                    <span class="ingredient-divider"></span>
                                                    <span class="ingredient-amt">1</span>
                                                    <span class="ingredient">Jalapeño pepper, very thinly sliced</span>
                                                </li>
                                                <li>
                                                    <span class="ingredient-divider"></span>
                                                    <span class="ingredient-amt">1</span>
                                                    <span class="ingredient">JXXXdfgbdfgbs</span>
                                                </li>
                                                <li>
                                                    <span class="ingredient-divider"></span>
                                                    <span class="ingredient-amt">1</span>
                                                    <span class="ingredient">dfgbs sbdfgbsg sbgbgsa</span>
                                                </li>
                                                <li>
                                                    <span class="ingredient-divider"></span>
                                                    <span class="ingredient-amt">1</span>
                                                    <span class="ingredient">sdfgbsfh sebrgwersybw45 sdrgvsg</span>
                                                </li>
                                                <li>
                                                    <span class="ingredient-divider"></span>
                                                    <span class="ingredient-amt">1</span>
                                                    <span class="ingredient">jeruv347 q4itblv8awiueg sedfjuyw2</span>
                                                </li>
                                            </ul>
                                            <h2>Instructions:</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                                            <blockquote>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec</blockquote>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec</p>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-5">
                                        <div class="recipes-sidebar-container">
                                            <div class="recipes-sidebar">
                                                <!-- Del Monte would like the ability to choose dietary icons in the future, but not for launch. In the meantime, we'll show tags. -->
                                                <!--<div class="container-fluid">
                                                    <div class="row dietary-icons">
                                                        <div class="col-lg-4 col-md-6 col-sm-4 dietary-icons__icon">
                                                            <img src="img/gluten-free.svg" alt="" />
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-4 dietary-icons__icon">
                                                            <img src="img/vegan.svg" alt="" />
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-4 dietary-icons__icon">
                                                            <img src="img/low-fat.svg" alt="" />
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-4 dietary-icons__icon">
                                                            <img src="img/organic.svg" alt="" />
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-4 dietary-icons__icon">
                                                            <img src="img/no-sugar.svg" alt="" />
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-4 dietary-icons__icon">
                                                            <img src="img/contains-fish.svg" alt="" />
                                                        </div>
                                                    </div>
                                                </div>-->
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
                                                <div class="recipe-notes">
                                                    <div class="recipe-notes__note">
                                                        <p>Yield:</p>
                                                        <p>XX</p>
                                                    </div>
                                                    <div class="recipe-notes__note">
                                                        <p>Prep Time:</p>
                                                        <p>XX:XX</p>
                                                    </div>
                                                    <div class="recipe-notes__note">
                                                        <p>Cook Time:</p>
                                                        <p>XX:XX</p>
                                                    </div>
                                                    <div class="recipe-notes__note">
                                                        <p><br />Calories Per Serving:</p>
                                                        <p><br />XXXX</p>
                                                    </div>
                                                    <p><br />Dietary Restrictions: Notes** Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes (Cointains Nuts, This is gluten free.)</p>
                                                </div>
                                                <div class="recipe-rating">
                                                    <!-- This div should be shown when a user is not logged in. They will be prompted sign in or create an account if they want to rate the recipe. -->
                                                    <!--<div class="signin-to-rate">
                                                        <div class="rating-results">
                                                            <ul>
                                                                <li>
                                                                    <img src="img/purple-star-5-5.png" alt="" />
                                                                </li>
                                                                <li>
                                                                    <img src="img/purple-star-5-5.png" alt="" />
                                                                </li>
                                                                <li>
                                                                    <img src="img/purple-star-5-5.png" alt="" />
                                                                </li>
                                                                <li>
                                                                    <img src="img/purple-star-5-5.png" alt="" />
                                                                </li>
                                                                <li>
                                                                    <img src="img/purple-star-2-5.png" alt="" />
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <p><strong>Want to rate this recipe? <a href="">Sign in</a> or <a href="">create an account</a>.</strong></p>
                                                    </div>-->
                                                    <!-- This div should be shown if a user is logged in. It will take the user through the steps to rate the recipe. -->
                                                    <div class="signed-in">
                                                        <div class="rating-initial">
                                                            <ul>
                                                                <li>
                                                                    <img src="img/purple-star-5-5.png" alt="" />
                                                                </li>
                                                                <li>
                                                                    <img src="img/purple-star-5-5.png" alt="" />
                                                                </li>
                                                                <li>
                                                                    <img src="img/purple-star-5-5.png" alt="" />
                                                                </li>
                                                                <li>
                                                                    <img src="img/purple-star-5-5.png" alt="" />
                                                                </li>
                                                                <li>
                                                                    <img src="img/purple-star-2-5.png" alt="" />
                                                                </li>
                                                            </ul>
                                                            <p><strong>Have you made this recipe? <a href="">Rate it!</a></strong></p>
                                                        </div>
                                                        <form class="rating-form form cf">
                                                            <div class="rate">
                                                                <input type="radio" id="star5" name="rate" value="5" />
                                                                <label for="star5">5 stars</label>
                                                                <input type="radio" id="star4" name="rate" value="4" />
                                                                <label for="star4">4 stars</label>
                                                                <input type="radio" id="star3" name="rate" value="3" />
                                                                <label for="star3">3 stars</label>
                                                                <input type="radio" id="star2" name="rate" value="2" />
                                                                <label for="star2">2 stars</label>
                                                                <input type="radio" id="star1" name="rate" value="1" />
                                                                <label for="star1">1 star</label>
                                                                <input type="submit" class="btn btn--green submit-rating" value="Submit Rating" />
                                                            </div>
                                                        </form>
                                                        <div class="rating-results">
                                                            <ul>
                                                                <li>
                                                                    <img src="img/purple-star-5-5.png" alt="" />
                                                                </li>
                                                                <li>
                                                                    <img src="img/purple-star-5-5.png" alt="" />
                                                                </li>
                                                                <li>
                                                                    <img src="img/purple-star-5-5.png" alt="" />
                                                                </li>
                                                                <li>
                                                                    <img src="img/purple-star-5-5.png" alt="" />
                                                                </li>
                                                                <li>
                                                                    <img src="img/purple-star-2-5.png" alt="" />
                                                                </li>
                                                            </ul>
                                                            <p><strong>Thank you for your feedback!</strong></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nutrition-facts">
                                                <!-- If the recipe does not have nutrition facts, use the bulleted list -->
                                                <?php include('includes/nutrition-facts.php'); ?>
                                                <!--<ul>
                                                    <li>FPO: Bullet Point: Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</li>
                                                    <li>FPO: Bullet Point: Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</li>
                                                    <li>FPO: Bullet Point: Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</li>
                                                    <li>FPO: Bullet Point: Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</li>
                                                    <li>FPO: Bullet Point: Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</li>
                                                    <li>FPO: Bullet Point: Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</li>
                                                    <li>FPO: Bullet Point: Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</li>
                                                </ul>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid recipe-video-section">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-6 col-sm-6">
                                            <div class="recipe-video-section__video">
                                                <div class="content">
                                                    <iframe src="https://www.youtube.com/embed/lds049CCxtY" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <div class="question-card">
                                                <span class="question-card__question">Question FPO TILE Dummy Text Line copy Dummy Text Line copy</span>
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
                                <div class="recommended-section">
                                    <h2>Recommended Products & / (OR) Recipes</h2>
                                    <div class="container-fluid cards gallery-cards page-grid">
                                        <div class="row">
                                            <?php include('includes/cards/recipe-card.php'); ?>
                                            <?php include('includes/cards/recipe-card.php'); ?>
                                            <?php include('includes/cards/recipe-card.php'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-form">
                                    <form class="form">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="fullname">Full Name</label>
                                                    <input type="text" id="fullname" placeholder="Full Name" />
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="comment-email">Email</label>
                                                    <input type="email" id="comment-email" placeholder="Email" />
                                                </div>
                                                <div class="col-12">
                                                    <label for="comment">Add a Comment</label>
                                                    <textarea id="comment" placeholder="Add a Comment"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <input type="checkbox" id="iagree-comment" />
                                            <label for="iagree-comment">‘I agree, to Del Monte’s<sup>®</sup> terms-of-conditions (link) and privacy policy’ (link), Dummy Text Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</label>
                                            <button class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="comments">
                                    <div class="comments__comment">
                                        <span class="username">Username: Pixelfader</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem. Aliquam erat volutpat. Donec placerat nisl magna, et faucibus arcu condimentum sed.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem. Aliquam erat volutpat. Donec placerat nisl magna, et faucibus arcu condimentum sed.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor semLorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem. Aliquam erat volutpat. Donec placerat nisl magna, et faucibus arcu condimentum sed.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem.</p>
                                    </div>
                                    <div class="comments__comment">
                                        <span class="username">Username: Pixelfader</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem. Aliquam erat volutpat. Donec placerat nisl magna, et faucibus arcu condimentum sed.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem. Aliquam erat volutpat. Donec placerat nisl magna, et faucibus arcu condimentum sed.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor semLorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem. Aliquam erat volutpat. Donec placerat nisl magna, et faucibus arcu condimentum sed.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem.</p>
                                    </div>
                                    <div class="align-center">
                                        <p><strong>Viewing 2 of 10 comments</strong></p>
                                        <a href="" class="btn btn--green">Load 8 more</a>
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
    </body>
</html>
