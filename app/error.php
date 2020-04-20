<!doctype html>
<html class="no-js mm-wrapper_sidebar-closed" lang="en">
    <head>
        <title>404 Error Page | Del Monte Fresh Produce</title>
        <?php include('includes/meta.php'); ?>
        <?php include('includes/favicon.php'); ?>
        <?php include('includes/styles.php'); ?>
    </head>
    <body id="top">
        <?php include('includes/loading-screen.php'); ?>
        <div class="site-wrapper">
            <?php include('includes/mobile-nav.php'); ?>
            <div class="error-page">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="error-page__container">
                                <h1>404</h1>
                                <h2>Fresh not found</h2>
                                <p>Looks like that webpage isn’t fresh anymore, and if it’s not fresh, it’s not good enough for Del Monte Fresh. Please go back or visit our <a href="index.php">home page</a>.</p>
                                <a href="index.php" class="btn btn--green">Back To Site</a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="error-page__bg-img">
                                <img src="img/fruits-error.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="error-page__bottom">
                    <div class="error-page__logo-container">
                        <img src="img/logo.svg" alt="Del Monte logo" class="error-page__logo" />
                    </div>
                </div>
            </div>
            <?php include('includes/cookies-prompt.php'); ?>
        </div>
        <?php include('includes/scripts.php'); ?>
    </body>
</html>