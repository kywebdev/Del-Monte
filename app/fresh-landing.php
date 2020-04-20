<!doctype html>
<html class="no-js mm-wrapper_sidebar-closed" lang="en">
    <head>
        <title>Fresh Prepared Landing Page | Del Monte Fresh Produce</title>
        <?php include('includes/meta.php'); ?>
        <?php include('includes/favicon.php'); ?>
        <?php include('includes/styles.php'); ?>
    </head>
    <body id="top">
        <?php include('includes/loading-screen.php'); ?>
        <div class="site-wrapper general gallery-page recipes-dataset">
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
                                <form class="form">
                                    <label for="recipe-search">Recipe Search</label>
                                    <input type="search" id="recipe-search" placeholder="Recipe Search" />
                                </form>
                                <div class="recipes-heading">
                                    <h1>Fresh Prepared Landing Page</h1>
                                    <div class="browse-filters">
                                        <a href="" class="btn btn--blue browse-by">Browse By <span class="down-arrow">&#9660;</span></a>
                                        <?php include('includes/product-filter-flyout.php'); ?>
                                        <span class="fas fa-tag"></span>
                                        <nav class="selected-filters nav tabs">
                                            <ul class="filter-bar__buttons -primary">
                                                <li>
                                                    <a href="" class="selected-filters__filter">Filter 1 <span class="fas fa-times"></span></a>
                                                </li>
                                                <li>
                                                    <a href="" class="selected-filters__filter">Filter 2 <span class="fas fa-times"></span></a>
                                                </li>
                                                <li>
                                                    <a href="" class="selected-filters__filter">Filter 3 <span class="fas fa-times"></span></a>
                                                </li>
                                                <li>
                                                    <a href="" class="selected-filters__filter">Filter 4 <span class="fas fa-times"></span></a>
                                                </li>
                                                <li>
                                                    <a href="" class="selected-filters__filter clear">Clear All <span class="fas fa-times"></span></a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </nav>
                            <div class="container-fluid cards">
                                <div class="row">
                                    <?php include('includes/cards/fresh-card.php'); ?>
                                    <?php include('includes/cards/fresh-card.php'); ?>
                                    <?php include('includes/cards/fresh-card.php'); ?>
                                    <?php include('includes/cards/fresh-card.php'); ?>
                                    <?php include('includes/cards/fresh-card.php'); ?>
                                    <?php include('includes/cards/fresh-card.php'); ?>
                                    <?php include('includes/cards/fresh-card.php'); ?>
                                    <?php include('includes/cards/fresh-card.php'); ?>
                                    <?php include('includes/cards/fresh-card.php'); ?>
                                    <?php include('includes/cards/fresh-card.php'); ?>
                                    <?php include('includes/cards/fresh-card.php'); ?>
                                    <?php include('includes/cards/fresh-card.php'); ?>
                                    <?php include('includes/cards/fresh-card.php'); ?>
                                    <?php include('includes/cards/fresh-card.php'); ?>
                                    <?php include('includes/cards/fresh-card.php'); ?>
                                    <?php include('includes/cards/fresh-card.php'); ?>
                                    <?php include('includes/cards/fresh-card.php'); ?>
                                    <?php include('includes/cards/fresh-card.php'); ?>
                                    <?php include('includes/cards/fresh-card.php'); ?>
                                    <?php include('includes/cards/fresh-card.php'); ?>
                                    <?php include('includes/cards/fresh-card.php'); ?>
                                    <?php include('includes/cards/fresh-card.php'); ?>
                                    <?php include('includes/cards/fresh-card.php'); ?>
                                    <?php include('includes/cards/fresh-card.php'); ?>
                                </div>
                            </div>
                            <div class="align-center">
                                <p><strong>Viewing 24 of 100 products</strong></p>
                                <a href="" class="btn btn--green">Load 76 more</a>
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
