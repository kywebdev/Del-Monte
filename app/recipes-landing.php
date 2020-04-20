<!doctype html>
<html class="no-js mm-wrapper_sidebar-closed" lang="en">
    <head>
        <title>Recipes Landing Page | Del Monte Fresh Produce</title>
        <?php include('includes/meta.php'); ?>
        <?php include('includes/favicon.php'); ?>
        <?php include('includes/styles.php'); ?>
    </head>
    <body id="top">
        <?php include('includes/loading-screen.php'); ?>
        <div class="site-wrapper general recipes-landing">
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
                                    <h1>Recipes</h1>
                                    <div class="browse-filters">
                                        <a href="" class="btn btn--blue browse-by">Browse By <span class="down-arrow">&#9660;</span></a>
                                        <?php include('includes/recipe-filter-flyout.php'); ?>
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
                                    <?php include('includes/cards/featured-monthly-recipe-card.php'); ?>
                                    <?php include('includes/cards/recipe-card.php'); ?>
                                </div>
                                <div class="row">
                                    <?php include('includes/cards/recipe-card.php'); ?>
                                    <?php include('includes/cards/recipe-card.php'); ?>
                                    <?php include('includes/cards/recipe-card.php'); ?>
                                </div>
                                <div class="row">
                                    <?php include('includes/cards/recipe-card.php'); ?>
                                    <?php include('includes/cards/featured-monthly-recipe-card.php'); ?>
                                </div>
                                <div class="row">
                                    <?php include('includes/cards/recipe-card.php'); ?>
                                    <?php include('includes/cards/recipe-card.php'); ?>
                                    <?php include('includes/cards/recipe-card.php'); ?>
                                </div>
                                <div class="row">
                                    <?php include('includes/cards/featured-monthly-recipe-card.php'); ?>
                                    <?php include('includes/cards/recipe-card.php'); ?>
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
