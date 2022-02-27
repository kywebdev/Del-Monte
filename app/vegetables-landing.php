<!doctype html>
<html class="no-js mm-wrapper_sidebar-closed" lang="en">
    <head>
        <title>Vegetables Landing Page | Del Monte Fresh Produce</title>
        <?php include('includes/meta.php'); ?>
        <?php include('includes/favicon.php'); ?>
        <?php include('includes/styles.php'); ?>
    </head>
    <body id="top">
        <?php include('includes/loading-screen.php'); ?>
        <div class="site-wrapper general gallery-page">
            <?php include('includes/mobile-nav.php'); ?>
            <div class="site">
                <?php include('includes/header.php'); ?>
                <main id="main">
                    <section class="main-content-wrapper">
                        <nav class="breadcrumb__nav" aria-label="breadcrumb">
                            <div class="section-container">
                                <ol class="breadcrumb__list">
                                    <li class="breadcrumb__list-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb__list-item"><a href="products-landing.php">Products</a></li>
                                    <li class="breadcrumb__list-item --active" aria-current="page">Fresh Vegetables</li>
                                </ol>
                            </div>
                        </nav>
                        <div class="section-container">
                            <div class="section__header">
                                <div class="section__header-container">
                                    <div class="page__title-container">
                                        <h1 class="page__title --green"><span>fReSh vegetableS</span></h1>
                                    </div>
                                    <form class="form search-form">
                                        <label for="search-form__input">Search all products</label>
                                        <input id="search-form__input" class="search-form__input" type="search"  placeholder="Search all products" aria-label="Search all products">
                                        <button class="search-form__submit aria-label="Search">
                                            <svg class="icon svg-icon-search" aria-hidden="true"><use xlink:href="#svg-icon-search"></use></svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="container-fluid cards global-cards page-grid product-cards">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="card">
                                            <a href="product-detail.php" class="card__img">
                                                <img src="img/broccoli.jpg" alt="" />
                                                <div class="card__text__heading">
                                                    <p>bRoccoli ></p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="card">
                                            <a href="product-detail.php" class="card__img">
                                                <img src="img/broccoli.jpg" alt="" />
                                                <div class="card__text__heading">
                                                    <p>bRoccoli ></p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="card">
                                            <a href="product-detail.php" class="card__img">
                                                <img src="img/broccoli.jpg" alt="" />
                                                <div class="card__text__heading">
                                                    <p>bRoccoli ></p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="card">
                                            <a href="product-detail.php" class="card__img">
                                                <img src="img/broccoli.jpg" alt="" />
                                                <div class="card__text__heading">
                                                    <p>bRoccoli ></p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="card">
                                            <a href="product-detail.php" class="card__img">
                                                <img src="img/broccoli.jpg" alt="" />
                                                <div class="card__text__heading">
                                                    <p>bRoccoli ></p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="card">
                                            <a href="product-detail.php" class="card__img">
                                                <img src="img/broccoli.jpg" alt="" />
                                                <div class="card__text__heading">
                                                    <p>bRoccoli ></p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 text-center load-more">
                                <p>Viewing 6 of 18 products</p>
                                <button class="btn --green">load 6 more</button>
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