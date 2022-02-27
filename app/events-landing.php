<!doctype html>
<html class="no-js mm-wrapper_sidebar-closed" lang="en">
    <head>
        <title>Events Landing Page | Del Monte Fresh Produce</title>
        <?php include('includes/meta.php'); ?>
        <?php include('includes/favicon.php'); ?>
        <?php include('includes/styles.php'); ?>
    </head>
    <body id="top">
        <?php include('includes/loading-screen.php'); ?>
        <div class="site-wrapper general event-details">
            <?php include('includes/splash-modal.php'); ?>
            <?php include('includes/mobile-nav.php'); ?>
            <div class="site">
                <?php include('includes/header.php'); ?>
                <main id="main">
                    <section class="main-content-wrapper">
                        <nav class="breadcrumb__nav" aria-label="breadcrumb">
                            <div class="section-container">
                                <ol class="breadcrumb__list">
                                    <li class="breadcrumb__list-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb__list-item"><a href="news-events.php">News & Events</a></li>
                                    <li class="breadcrumb__list-item --active" aria-current="page">Events</li>
                                </ol>
                            </div>
                        </nav>
                        <div class="section-container">
                            <div class="section__header">
                                <div class="section__header-container">
                                    <div class="page__title-container">
                                        <h1 class="page__title --purple-100"><span>eventS</span></h1>
                                        <div class="browse-filters">
                                            <button class="btn browse-by">Browse By</button>
                                            <?php include('includes/events-filter-flyout.php'); ?>
                                        </div>
                                    </div>
                                    <form class="form search-form">
                                        <label for="search-form__input">Search All Events</label>
                                        <input id="search-form__input" class="search-form__input" type="search" placeholder="Search All Events" aria-label="Search All Events">
                                        <button class="search-form__submit" aria-label="Search">
                                            <svg class="icon svg-icon-search" aria-hidden="true"><use xlink:href="#svg-icon-search"></use></svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <p class="page__subhead">Stay up to date with our upcoming events.</p>
                            <div class="calendar-section">
                                <div class="lg-calendar">
                                    <div class="calendar-parent"></div>
                                </div>
                            </div>
                            <script>
                                var lotsOfEvents = [
                                    {
                                        date: '2021-10-31'
                                    }, {
                                        start: '2021-10-10',
                                        end: '2021-10-11'
                                    }, {
                                        date: '2021-11-05'
                                    }, {
                                        start: '2021-10-16',
                                        end: '2019-10-22'
                                    },
                                    {
                                        date: '2019-11-04'
                                    }, {
                                        start: '2019-11-16',
                                        end: '2019-11-22'
                                    },
                                    {
                                        date: '2019-12-04'
                                    },
                                    {
                                        start: '2019-12-16',
                                        end: '2019-12-22'
                                    }
                                ];
                            </script>
                            <div class="events">
                                <!--<p class="no-events">There are no events to show right now. Check back later for new events.</p>-->
                                <div class="event">
                                    <div class="event__title" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" role="button" aria-controls="collapseOne">
                                        <h3><a href="news-detail.php">Event Name</a></h3>
                                        <a href="news-detail.php" class="event__title__details">
                                            <span class="event-date">09/09/2019</span>
                                            <span class="event-time">10:30 AM EST</span>
                                        </a>
                                    </div>
                                    <div class="event__content collapse show" id="collapseOne">
                                        <div class="event__location">
                                            <a href="news-detail.php" class="event__location__addr">
                                                <p class="event__location__line-1">Location</p>
                                                <p class="event__location__line-2">123 Address Lane, City, State Zip</p>
                                            </a>
                                        </div>
                                        <div class="tag-section">
                                            <span class="fas fa-tag"></span>
                                            <div class="tags">
                                                <ul>
                                                    <li class="tags__tag">
                                                        <a href="">COVID-19</a>
                                                    </li>
                                                    <li class="tags__tag">
                                                        <a href="">community</a>
                                                    </li>
                                                    <li class="tags__tag">
                                                        <a href="">Chicago</a>
                                                    </li>
                                                    <li class="tags__tag">
                                                        <a href="">garden salads</a>
                                                    </li>
                                                    <li class="tags__tag">
                                                        <a href="">pico de gallo</a>
                                                    </li>
                                                    <li class="tags__tag">
                                                        <a href="">carrots</a>
                                                    </li>
                                                    <li class="tags__tag">
                                                        <a href="">watermelon</a>
                                                    </li>
                                                    <li class="tags__tag">
                                                        <a href="">mangos</a>
                                                    </li>
                                                    <li class="tags__tag">
                                                        <a href="">melons</a>
                                                    </li>
                                                    <li class="tags__tag">
                                                        <a href="">cantaloupe</a>
                                                    </li>
                                                    <li class="tags__tag">
                                                        <a href="">fruit salad blends</a>
                                                    </li>
                                                    <li class="tags__tag">
                                                        <a href="">fresh produce</a>
                                                    </li>
                                                    <li class="tags__tag">
                                                        <a href="">donation</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <a href="news-detail.php" class="event-text-link">
                                            <p>Turnip greens yarrow ricebean rutabaga endive cauliflower sea lettuce kohlrabi amaranth water spinach avocado daikon napa cabbage asparagus winter purslane kale. Celery potato scallion desert raisin horseradish spinach carrot soko. Lotus root water spinach fennel kombu maize bamboo shoot green bean swiss chard seakale pumpkin onion chickpea gram corn pea. Brussels sprout coriander water chestnut gourd swiss chard wakame kohlrabi beetroot.</p>
                                        </a>
                                        <div class="event-links">
                                            <div class="event-links__buttons">
                                                <a href="" target="_blank" class="btn --green">Event Website</a>
                                                <a href="" target="_blank" class="btn-inline">
                                                    Get Directions
                                                    <svg class="icon svg-icon-angle-right" aria-hidden="true"><use xlink:href="#svg-icon-angle-right"></use></svg>
                                                </a>
                                            </div>
                                            <div class="event-links__social share-print">
                                                <div class="news-article__content__share" data-toggle="tooltip" data-placement="bottom" data-trigger="hover" title="Share">
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
                                                        <li>
                                                            <a href=''>
                                                                <span class='fas fa-link'></span>
                                                                <span class='social-media-name'>Copy Link</span>
                                                            </a>
                                                        </li>
                                                    </ul>">
                                                        <img src="img/share-green.svg" alt="" loading="lazy" />
                                                    </a>
                                                </div>
                                                <div class="news-article__calendar">
                                                    <a href="" class="calendar" data-toggle="tooltip" data-placement="bottom" data-trigger="hover" title="Add to Calendar">
                                                        <svg class="icon svg-icon-calendar" aria-hidden="true"><use xlink:href="#svg-icon-calendar"></use></svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="event">
                                    <div class="event__title" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" role="button" aria-controls="collapseTwo">
                                        <h3><a href="news-detail.php">Event Name</a></h3>
                                        <a href="news-detail.php" class="event__title__details">
                                            <span class="event-date">09/09/2019</span>
                                            <span class="event-time">10:30 AM EST</span>
                                        </a>
                                    </div>
                                    <div class="event__content collapse" id="collapseTwo">
                                        <div class="event__location">
                                            <a href="#" class="event__location__addr">
                                                <p class="event__location__line-1">Location</p>
                                                <p class="event__location__line-2">123 Address Lane, City, State Zip</p>
                                            </a>
                                        </div>
                                        <div class="tag-section">
                                            <span class="fas fa-tag"></span>
                                            <div class="tags">
                                                <ul>
                                                    <li class="tags__tag">
                                                        <a href="">COVID-19</a>
                                                    </li>
                                                    <li class="tags__tag">
                                                        <a href="">community</a>
                                                    </li>
                                                    <li class="tags__tag">
                                                        <a href="">Chicago</a>
                                                    </li>
                                                    <li class="tags__tag">
                                                        <a href="">garden salads</a>
                                                    </li>
                                                    <li class="tags__tag">
                                                        <a href="">pico de gallo</a>
                                                    </li>
                                                    <li class="tags__tag">
                                                        <a href="">carrots</a>
                                                    </li>
                                                    <li class="tags__tag">
                                                        <a href="">watermelon</a>
                                                    </li>
                                                    <li class="tags__tag">
                                                        <a href="">mangos</a>
                                                    </li>
                                                    <li class="tags__tag">
                                                        <a href="">melons</a>
                                                    </li>
                                                    <li class="tags__tag">
                                                        <a href="">cantaloupe</a>
                                                    </li>
                                                    <li class="tags__tag">
                                                        <a href="">fruit salad blends</a>
                                                    </li>
                                                    <li class="tags__tag">
                                                        <a href="">fresh produce</a>
                                                    </li>
                                                    <li class="tags__tag">
                                                        <a href="">donation</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <a href="news-detail.php" class="event-text-link">
                                            <p>Turnip greens yarrow ricebean rutabaga endive cauliflower sea lettuce kohlrabi amaranth water spinach avocado daikon napa cabbage asparagus winter purslane kale. Celery potato scallion desert raisin horseradish spinach carrot soko. Lotus root water spinach fennel kombu maize bamboo shoot green bean swiss chard seakale pumpkin onion chickpea gram corn pea. Brussels sprout coriander water chestnut gourd swiss chard wakame kohlrabi beetroot.</p>
                                        </a>
                                        <div class="event-links">
                                            <div class="event-links__buttons">
                                                <a href="" target="_blank" class="btn --green">Event Website</a>
                                                <a href="" target="_blank" class="btn-inline">
                                                    Get Directions
                                                    <svg class="icon svg-icon-angle-right" aria-hidden="true"><use xlink:href="#svg-icon-angle-right"></use></svg>
                                                </a>
                                            </div>
                                            <div class="event-links__social share-print">
                                                <div class="news-article__content__share" data-toggle="tooltip" data-placement="bottom" data-trigger="hover" title="Share">
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
                                                        <li>
                                                            <a href=''>
                                                                <span class='fas fa-link'></span>
                                                                <span class='social-media-name'>Copy Link</span>
                                                            </a>
                                                        </li>
                                                    </ul>">
                                                        <img src="img/share-green.svg" alt="" loading="lazy" />
                                                    </a>
                                                </div>
                                                <div class="news-article__calendar">
                                                    <a href="" class="calendar" data-toggle="tooltip" data-placement="bottom" data-trigger="hover" title="Add to Calendar">
                                                        <svg class="icon svg-icon-calendar" aria-hidden="true"><use xlink:href="#svg-icon-calendar"></use></svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="event">
                                    <div class="event__title" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" role="button" aria-controls="collapseThree">
                                        <h3><a href="news-detail.php">Event Name</a></h3>
                                        <a href="news-detail.php" class="event__title__details">
                                            <span class="event-date">09/09/2019</span>
                                            <span class="event-time">10:30 AM EST</span>
                                        </a>
                                    </div>
                                    <div class="event__content collapse" id="collapseThree">
                                        <div class="event__location">
                                            <a href="#" class="event__location__addr">
                                                <p class="event__location__line-1">Location</p>
                                                <p class="event__location__line-2">123 Address Lane, City, State Zip</p>
                                            </a>
                                        </div>
                                        <div class="tag-section">
                                            <span class="fas fa-tag"></span>
                                            <div class="tags">
                                                <ul>
                                                    <li class="tags__tag">
                                                        <a href="">COVID-19</a>
                                                    </li>
                                                    <li class="tags__tag">
                                                        <a href="">community</a>
                                                    </li>
                                                    <li class="tags__tag">
                                                        <a href="">Chicago</a>
                                                    </li>
                                                    <li class="tags__tag">
                                                        <a href="">garden salads</a>
                                                    </li>
                                                    <li class="tags__tag">
                                                        <a href="">pico de gallo</a>
                                                    </li>
                                                    <li class="tags__tag">
                                                        <a href="">carrots</a>
                                                    </li>
                                                    <li class="tags__tag">
                                                        <a href="">watermelon</a>
                                                    </li>
                                                    <li class="tags__tag">
                                                        <a href="">mangos</a>
                                                    </li>
                                                    <li class="tags__tag">
                                                        <a href="">melons</a>
                                                    </li>
                                                    <li class="tags__tag">
                                                        <a href="">cantaloupe</a>
                                                    </li>
                                                    <li class="tags__tag">
                                                        <a href="">fruit salad blends</a>
                                                    </li>
                                                    <li class="tags__tag">
                                                        <a href="">fresh produce</a>
                                                    </li>
                                                    <li class="tags__tag">
                                                        <a href="">donation</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <a href="news-detail.php" class="event-text-link">
                                            <p>Turnip greens yarrow ricebean rutabaga endive cauliflower sea lettuce kohlrabi amaranth water spinach avocado daikon napa cabbage asparagus winter purslane kale. Celery potato scallion desert raisin horseradish spinach carrot soko. Lotus root water spinach fennel kombu maize bamboo shoot green bean swiss chard seakale pumpkin onion chickpea gram corn pea. Brussels sprout coriander water chestnut gourd swiss chard wakame kohlrabi beetroot.</p>
                                        </a>
                                        <div class="event-links">
                                            <div class="event-links__buttons">
                                                <a href="" target="_blank" class="btn --green">Event Website</a>
                                                <a href="" target="_blank" class="btn-inline">
                                                    Get Directions
                                                    <svg class="icon svg-icon-angle-right" aria-hidden="true"><use xlink:href="#svg-icon-angle-right"></use></svg>
                                                </a>
                                            </div>
                                            <div class="event-links__social share-print">
                                                <div class="news-article__content__share" data-toggle="tooltip" data-placement="bottom" data-trigger="hover" title="Share">
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
                                                        <li>
                                                            <a href=''>
                                                                <span class='fas fa-link'></span>
                                                                <span class='social-media-name'>Copy Link</span>
                                                            </a>
                                                        </li>
                                                    </ul>">
                                                        <img src="img/share-green.svg" alt="" loading="lazy" />
                                                    </a>
                                                </div>
                                                <div class="news-article__calendar">
                                                    <a href="" class="calendar" data-toggle="tooltip" data-placement="bottom" data-trigger="hover" title="Add to Calendar">
                                                        <svg class="icon svg-icon-calendar" aria-hidden="true"><use xlink:href="#svg-icon-calendar"></use></svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="align-center load-more">
                                    <p>Viewing 3 of 20 events</p>
                                    <a href="#" class="btn --green">Load 17 more</a>
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
