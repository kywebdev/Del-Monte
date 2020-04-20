<!doctype html>
<html class="no-js mm-wrapper_sidebar-closed" lang="en">
    <head>
        <title>Timeline Module Examples | Del Monte Fresh Produce</title>
        <?php include('includes/meta.php'); ?>
        <?php include('includes/favicon.php'); ?>
        <?php include('includes/styles.php'); ?>
    </head>
    <body id="top">
        <?php include('includes/loading-screen.php'); ?>
        <div class="site-wrapper general about">
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
                        </nav>
                        <div class="about-hero"></div>
                        <div class="timeline">
                            <div class="timeline__line"></div>
                            <?php include('includes/timeline-modules/one-year-one-img-left.php'); ?>
                            <?php include('includes/timeline-modules/one-year-one-img-right.php'); ?>
                            <?php include('includes/timeline-modules/two-years-one-img-left.php'); ?>
                            <?php include('includes/timeline-modules/two-years-one-img-right.php'); ?>
                            <?php include('includes/timeline-modules/two-years-three-imgs-left.php'); ?>
                            <?php include('includes/timeline-modules/two-years-three-imgs-right.php'); ?>
                            <?php include('includes/timeline-modules/two-years-three-lg-imgs.php'); ?>
                            <?php include('includes/timeline-modules/one-year-one-lg-img-left.php'); ?>
                            <?php include('includes/timeline-modules/one-year-one-lg-img-right.php'); ?>
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