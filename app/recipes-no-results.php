<!doctype html>
<html class="no-js mm-wrapper_sidebar-closed" lang="en">
    <head>
        <title>Recipes Landing Page - No Results | Del Monte Fresh Produce</title>
        <?php include('includes/meta.php'); ?>
        <?php include('includes/favicon.php'); ?>
        <?php include('includes/styles.php'); ?>
    </head>
    <body id="top">
        <?php include('includes/loading-screen.php'); ?>
        <div class="site-wrapper general recipes-dataset recipes-no-results">
            <?php include('includes/mobile-nav.php'); ?>
            <div class="site">
                <?php include('includes/header.php'); ?>
                <main id="main">
                    <section class="main-content-wrapper">
                        <nav class="breadcrumb__nav" aria-label="breadcrumb">
                            <div class="section-container">
                                <ol class="breadcrumb__list">
                                    <li class="breadcrumb__list-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb__list-item --active" aria-current="page">Recipes</li>
                                </ol>
                            </div>
                        </nav>
                        <div class="section-container">
                            <div class="section__header">
                                <div class="section__header-container">
                                    <div class="page__title-container">
                                        <h1 class="page__title --orange"><span>RecipeS</span></h1>
                                        <div class="browse-filters">
                                            <button class="btn browse-by">Browse By</button>
                                            <?php include('includes/recipe-filter-flyout.php'); ?>
                                            <div class="dataset-tags">
                                                <span class="fas fa-tag"></span>
                                                <nav class="selected-filters nav tabs">
                                                    <ul class="filter-bar__buttons">
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
                                    </div>
                                    <form class="form search-form">
                                        <label for="search-form__input">Search All Recipes</label>
                                        <input id="search-form__input" class="search-form__input" type="search"  placeholder="Search All Recipes" aria-label="Search All Recipes">
                                        <button class="search-form__submit" aria-label="Search">
                                            <svg class="icon svg-icon-search" aria-hidden="true"><use xlink:href="#svg-icon-search"></use></svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="no-results">
                                <h2>Apologies, we have no results for your selection. Please try again.<br />May we make a few suggestions for you?</h2>
                                <form class="form search-form">
                                    <label for="search-form__input">Search Recipes</label>
                                    <input id="search-form__input" class="search-form__input" type="search"  placeholder="Search Recipes" aria-label="Search Recipes">
                                    <button class="search-form__submit" aria-label="Search">
                                        <svg class="icon svg-icon-search" aria-hidden="true"><use xlink:href="#svg-icon-search"></use></svg>
                                    </button>
                                </form>
                            </div>
                            <div class="container-fluid cards gallery-cards page-grid">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <a href="recipe-detail.php">
                                            <div class="card">
                                                <div class="card__container">
                                                    <div class="card__img">
                                                        <img src="img/cauliflower-fried-rice.jpg" alt="" />
                                                    </div>
                                                    <div class="card__text">
                                                        <div class="card__text__heading">
                                                            <p>Cauliflower Fried “Rice” With Honeyglow® Pineapple</p>
                                                        </div>
                                                        <p class="card__text__desc">Looking for a sweet spin on the average fried rice? Try our cauliflower fried "rice" topped with DelMonte® Honeyglow® Pineapple!</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-4">
                                        <a href="recipe-detail.php">
                                            <div class="card">
                                                <div class="card__container">
                                                    <div class="card__img">
                                                        <img src="img/snacking-cake.jpg" alt="" />
                                                    </div>
                                                    <div class="card__text">
                                                        <div class="card__text__heading">
                                                            <p>MAG.nificent® Snacking Cake with Brown Butter Cream Cheese Frosting</p>
                                                        </div>
                                                        <p class="card__text__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-4">
                                        <a href="recipe-detail.php">
                                            <div class="card">
                                                <div class="card__container">
                                                    <div class="card__img">
                                                        <img src="img/southwest-style-pasta-salad.jpg" alt="" />
                                                    </div>
                                                    <div class="card__text">
                                                        <div class="card__text__heading">
                                                            <p>Southwest Style Pasta Salad</p>
                                                        </div>
                                                        <p class="card__text__desc">How easy will your weekday lunch be with our Southwest-Style Pasta Salad recipe featuring Del Monte® avocado and limes? We'll break it down for you: Step 1: Open jar. Step 2: Eat your delicious lunch.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
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