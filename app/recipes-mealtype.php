<!doctype html>
<html class="no-js mm-wrapper_sidebar-closed" lang="en">
    <head>
        <title>Breakfast Recipes | Del Monte Fresh Produce</title>
        <?php include('includes/meta.php'); ?>
        <?php include('includes/favicon.php'); ?>
        <?php include('includes/styles.php'); ?>
    </head>
    <body id="top">
        <?php include('includes/loading-screen.php'); ?>
        <div class="site-wrapper general recipes-dataset">
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
                                    <label for="recipes-search">Search All Recipes</label>
                                    <input type="search" id="recipes-search" placeholder="Search All Recipes" />
                                </form>
                                <div class="recipes-heading">
                                    <h1>Breakfast Recipes</h1>
                                    <div class="browse-filters">
                                        <a href="" class="btn btn--blue browse-by">Browse By <span class="down-arrow">&#9660;</span></a>
                                        <?php include('includes/recipe-filter-flyout.php'); ?>
                                        <span class="fas fa-tag"></span>
                                        <nav class="selected-filters nav tabs">
                                            <ul class="filter-bar__buttons -primary">
                                                <li>
                                                    <a href="" class="selected-filters__filter">Breakfast <span class="fas fa-times"></span></a>
                                                </li>
                                                <li>
                                                    <a href="" class="selected-filters__filter">Bananas <span class="fas fa-times"></span></a>
                                                </li>
                                                <li>
                                                    <a href="" class="selected-filters__filter">Pineapple <span class="fas fa-times"></span></a>
                                                </li>
                                                <li>
                                                    <a href="" class="selected-filters__filter">Kiwi <span class="fas fa-times"></span></a>
                                                </li>
                                                <li>
                                                    <a href="" class="selected-filters__filter">Gluten Free <span class="fas fa-times"></span></a>
                                                </li>
                                                <li>
                                                    <a href="" class="selected-filters__filter">Low Calorie <span class="fas fa-times"></span></a>
                                                </li>
                                                <li>
                                                    <a href="" class="selected-filters__filter clear">Clear All <span class="fas fa-times"></span></a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </nav>
                            <div class="container-fluid cards gallery-cards page-grid">
                                <div class="row">
                                    <?php include('includes/cards/recipe-card.php'); ?>
                                    <?php include('includes/cards/featured-recipe-card.php'); ?>
                                </div>
                                <div class="row">
                                    <?php include('includes/cards/featured-recipe-card.php'); ?>
                                    <?php include('includes/cards/recipe-card.php'); ?>
                                </div>
                                <div class="row">
                                    <?php include('includes/cards/recipe-card.php'); ?>
                                    <?php include('includes/cards/recipe-card.php'); ?>
                                    <?php include('includes/cards/recipe-card.php'); ?>
                                </div>
                                <div class="row">
                                    <?php include('includes/cards/recipe-card.php'); ?>
                                    <?php include('includes/cards/recipe-card.php'); ?>
                                    <?php include('includes/cards/recipe-card.php'); ?>
                                </div>
                                <div class="row">
                                    <?php include('includes/cards/recipe-card.php'); ?>
                                    <?php include('includes/cards/recipe-card.php'); ?>
                                    <?php include('includes/cards/recipe-card.php'); ?>
                                </div>
                                <div class="row">
                                    <?php include('includes/cards/recipe-card.php'); ?>
                                    <?php include('includes/cards/recipe-card.php'); ?>
                                    <?php include('includes/cards/recipe-card.php'); ?>
                                </div>
                                <div class="row">
                                    <?php include('includes/cards/recipe-card.php'); ?>
                                    <?php include('includes/cards/recipe-card.php'); ?>
                                    <?php include('includes/cards/recipe-card.php'); ?>
                                </div>
                                <div class="row">
                                    <?php include('includes/cards/recipe-card.php'); ?>
                                    <?php include('includes/cards/recipe-card.php'); ?>
                                    <?php include('includes/cards/recipe-card.php'); ?>
                                </div>
                                <div class="row">
                                    <?php include('includes/cards/recipe-card.php'); ?>
                                    <?php include('includes/cards/recipe-card.php'); ?>
                                    <?php include('includes/cards/recipe-card.php'); ?>
                                </div>
                            </div>
                            <div class="align-center">
                                <p><strong>Viewing 25 of 100 recipes</strong></p>
                                <a href="" class="btn btn--green">Load 75 more</a>
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
