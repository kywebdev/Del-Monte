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
                                        </div>
                                    </div>
                                    <form class="form search-form">
                                        <label for="search-form__input">Search All Recipes</label>
                                        <input id="search-form__input" class="search-form__input" type="search" placeholder="Search All Recipes" aria-label="Search All Recipes">
                                        <button class="search-form__submit" aria-label="Search">
                                            <svg class="icon svg-icon-search" aria-hidden="true"><use xlink:href="#svg-icon-search"></use></svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="container-fluid cards gallery-cards page-grid">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <a href="recipe-detail.php">
                                            <div class="card">
                                                <div class="card__container">
                                                    <div class="card__img">
                                                        <img src="img/avocado-salmon-salad-cups.jpg" alt="" />
                                                    </div>
                                                    <div class="card__text">
                                                        <div class="card__text__heading">
                                                            <p>Avocado Salmon Salad Cups</p>
                                                        </div>
                                                        <p class="card__text__desc">Salmon salad is great, but have you tried serving it in an Del Monte® avocado? Take a simple dish to the next level with these Salmon Salad Avocado Cups.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-7">
                                        <a href="recipe-detail.php">
                                            <div class="card">
                                                <div class="card__container">
                                                    <div class="card__img">
                                                        <img src="img/mini-chicken-meatballs.jpg" alt="" />
                                                    </div>
                                                    <div class="card__text">
                                                        <div class="card__text__heading">
                                                            <p>Honeyglow® Pineapple Mini Chicken Meatballs</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-7">
                                        <a href="recipe-detail.php">
                                            <div class="card">
                                                <div class="card__container">
                                                    <div class="card__img">
                                                        <img src="img/melon-sorbet-floats.jpg" alt="" />
                                                    </div>
                                                    <div class="card__text">
                                                        <div class="card__text__heading">
                                                            <p>MAG.nificent® Melon Sorbet Floats</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-5">
                                        <a href="recipe-detail.php">
                                            <div class="card">
                                                <div class="card__container">
                                                    <div class="card__img">
                                                        <img src="img/chia-pudding-cups.jpg" alt="" />
                                                    </div>
                                                    <div class="card__text">
                                                        <div class="card__text__heading">
                                                            <p>Tropical Chia Pudding Cups</p>
                                                        </div>
                                                        <p class="card__text__desc">No need for a vacation when you can have a taste-cation! Diving into this Tropical Chia Seed Pudding with layers of Del Monte® pineapples and Del Monte® bananas will take you to away to paradise.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
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
                                <div class="row">
                                    <div class="col-lg-4">
                                        <a href="recipe-detail.php">
                                            <div class="card">
                                                <div class="card__container">
                                                    <div class="card__img">
                                                        <img src="img/chile-lime-watermelon-paletas.jpg" alt="" />
                                                    </div>
                                                    <div class="card__text">
                                                        <div class="card__text__heading">
                                                            <p>Chile Lime Watermelon Paletas</p>
                                                        </div>
                                                        <p class="card__text__desc">In the spirit of trying something new, we're shaking (and spicing, and freezing) things up with our paletas made from Del Monte® watermelons, Del Monte® limes, agave and chili powder. Icy, spicy and delicious, these paletas are a great treat!</p>
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
                                                        <img src="img/pineapple-yogurt-bark.jpg" alt="" />
                                                    </div>
                                                    <div class="card__text">
                                                        <div class="card__text__heading">
                                                            <p>Honeyglow® Pineapple Yogurt Bark</p>
                                                        </div>
                                                        <p class="card__text__desc">Whether it’s the star of a fruit salad or inspiration for a dessert, we know you’ll love putting Honeyglow® Pineapple to the ultimate sweetness taste test. Try it out today with our Honeyglow® Pineapple Yogurt Bark!</p>
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
                                                        <img src="img/minted-watermelon-spritz.jpg" alt="" />
                                                    </div>
                                                    <div class="card__text">
                                                        <div class="card__text__heading">
                                                            <p>Minted Watermelon Spritz</p>
                                                        </div>
                                                        <p class="card__text__desc">Keep cool with a refreshing Minted Watermelon Spritz! This sparkling refresher packed with fresh Del Monte® watermelon puree and fresh squeezed Del Monte® lime juice is sure to be a great treat the whole family can enjoy!</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 text-center load-more">
                                    <p>Viewing 10 of 89 recipes</p>
                                    <button class="btn --green">load 6 more</button>
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