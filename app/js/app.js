var jq14 = jQuery.noConflict(true);
(function ($) {

    // loading screen
    $(window).on('load', function() {
        $('.loading-screen').fadeOut();
    });

    $(document).ready(function() {

        // back to top smooth scrolling
        function backToTop(width) {
            if (width <= 985) {
                $('.back-to-top').on('click', function(e) {
                    e.preventDefault();

                    var target = this.hash;
                    var $target = $(target);

                    $('html, body').stop().animate({
                        'scrollTop': 89 - $target.offset().top
                    }, 900, 'swing', function() {});
                });
            } else {
                $('.back-to-top').on('click', function(e) {
                    e.preventDefault();

                    var target = this.hash;
                    var $target = $(target);

                    $('html, body').stop().animate({
                        'scrollTop': 0 + $target.offset().top
                    }, 900, 'swing', function() {});
                });
            }
        }
        backToTop( $(window).width() );
        $(window).on('resize', function() {
            backToTop( $(this).width() );
        });

        // show/hide the login flyout
        $('.sidebar__login__signin').on('click', function(e) {
            e.preventDefault();
            if ($('.flyout-signin').hasClass('open')) {
                $('.flyout-signin').removeClass('open');
            } else {
                $('.flyout-signin').addClass('open');
                $('.flyout-newsletter').removeClass('open');
            }
        });

        // show/hide the newsletter flyout
        $('.sidebar__newsletter .btn').on('click', function(e) {
            e.preventDefault();
            if ($('.flyout-newsletter').hasClass('open')) {
                $('.flyout-newsletter').removeClass('open');
            } else {
                $('.flyout-newsletter').addClass('open');
                $('.flyout-signin').removeClass('open');
            }
        });

        // close login and newsletter flyouts when clicking outside of the sidebar
        $('main').on('click', function() {
            $('.flyout-signin').removeClass('open');
            $('.flyout-newsletter').removeClass('open');
        });

        // close the cookies prompt
        $('.cookies-prompt__buttons .btn--green').on('click', function(e) {
            e.preventDefault();
            $('.cookies-prompt').fadeOut();
            localStorage.setItem('toggleState','accept');
        });
        $('.cookies-prompt .remodal-close').on('click', function() {
            $('.cookies-prompt').fadeOut();
            localStorage.setItem('toggleState','accept');
        });
        $('.cookies-prompt__buttons .btn--red').on('click', function(e) {
            e.preventDefault();
            $('.cookies-prompt').fadeOut();
            localStorage.setItem('toggleState','decline');
        });


        // hide the cookies prompt if it's already been closed
        var state=localStorage.getItem('toggleState');
        if (state=='accept') {
            $('.cookies-prompt').hide();
        }
        if (state=='decline') {
            $('.cookies-prompt').hide();
            deleteCookies();
        }

        // delete cookies
        function deleteCookies() {
            var theCookies = document.cookie.split(';');
            for (var i = 0 ; i < theCookies.length; i++) {
                document.cookie = theCookies[i].split('=')[0] + '=; path=/; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
            }
        }

        // mobile nav menu
        $("#menu").mmenu({
            "extensions": [
                "position-front"
            ]
        });

        // insert the mobile nav footer after the panels
        $('#menu footer').insertAfter('.mm-panels');

        // toggle the sitemap
        var sitemapLink = $('a[href="/sitemap"]');
        sitemapLink.on('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            $('.site-wrapper').toggleClass('sitemap-open');
            $('.flyout-signin').removeClass('open');
            $('.flyout-newsletter').removeClass('open');

            if ($('.site-wrapper').hasClass('sitemap-open')) {
                $('.sidebar__login__search').attr('href', '');
                $('.sidebar__login__search').on('click', function(e) {
                    e.preventDefault();
                    $('.sitemap__search__overlay').toggleClass('sitemap-open-search');
                });
            } else {
                $('.sidebar__login__search').attr('href', '#search');
                $('.sidebar__login__search').unbind();
            }
        });
        $('.footer-nav .sitemap-link').on('click', function(e) {
            e.preventDefault();
        });

        // toggle the sitemap search
        $('.sitemap__search-icon').on('click', function(e) {
            e.preventDefault();
            $('.sitemap__search__overlay').toggleClass('sitemap-open-search');
        });

        // show sitemap when at hash
        var hash = window.location.hash;
        if (hash == "#sitemap") {
            $('.site-wrapper').addClass('sitemap-open');
        }

        // homepage image slider
        if ($('.homepage-slider').children().length > 1) {
            $('.homepage-slider').flickity({
                friction: 0.27,
                wrapAround: true,
                autoPlay: 10000,
                adaptiveHeight: true
            });
        }

        // homepage cta slider
        if ($('.cta-slider').children().length > 1) {
            $('.cta-slider').flickity({
                friction: 0.27,
                pageDots: false,
                prevNextButtons: false,
                wrapAround: true,
                draggable: false,
                asNavFor: '.homepage-slider',
                fade: true
            });
        }

        // fix jumpy background images in IE11
        if (navigator.userAgent.match(/Trident\/7\./)) {
            document.body.addEventListener('mousewheel', function() {
                event.preventDefault();
                var wheelDelta = event.wheelDelta;
                var currentScrollPosition = window.pageYOffset;
                window.scrollTo(0, currentScrollPosition - wheelDelta);
            });
        }

        // custom select dropdowns
        var x, i, j, selElmnt, a, b, c;
        /* Look for any elements with the class "custom_select": */
        x = document.getElementsByClassName("custom_select");
        for (i = 0; i < x.length; i++) {
        selElmnt = x[i].getElementsByTagName("select")[0];
        /* For each element, create a new DIV that will act as the selected item: */
        a = document.createElement("DIV");
        a.setAttribute("class", "select-selected");
        a.innerHTML = '<p class="initial-label">' + selElmnt.options[selElmnt.selectedIndex].innerHTML + '</p>';
        x[i].appendChild(a);
        /* For each element, create a new DIV that will contain the option list: */
        b = document.createElement("DIV");
        b.setAttribute("class", "select-items select-hide");
        for (j = 1; j < selElmnt.length; j++) {
            /* For each option in the original select element,
            create a new DIV that will act as an option item: */
            c = document.createElement("DIV");
            c.innerHTML = selElmnt.options[j].innerHTML;
            c.addEventListener("click", function(e) {
                /* When an item is clicked, update the original select box,
                and the selected item: */
                var y, i, k, s, h;
                s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                h = this.parentNode.previousSibling;
                for (i = 0; i < s.length; i++) {
                if (s.options[i].innerHTML == this.innerHTML) {
                    s.selectedIndex = i;
                    h.innerHTML = this.innerHTML;
                    y = this.parentNode.getElementsByClassName("same-as-selected");
                    for (k = 0; k < y.length; k++) {
                    y[k].removeAttribute("class");
                    }
                    this.setAttribute("class", "same-as-selected");
                    break;
                }
                }
                $(s).trigger("change");
                h.click();
            });
            b.appendChild(c);
        }
        x[i].appendChild(b);
        a.addEventListener("click", function(e) {
            /* When the select box is clicked, close any other select boxes,
            and open/close the current select box: */
            e.stopPropagation();
            closeAllSelect(this);
            this.nextSibling.classList.toggle("select-hide");
            this.classList.toggle("select-arrow-active");
        });
        }

        function closeAllSelect(elmnt) {
        /* A function that will close all select boxes in the document,
        except the current select box: */
        var x, y, i, arrNo = [];
        x = document.getElementsByClassName("select-items");
        y = document.getElementsByClassName("select-selected");
        for (i = 0; i < y.length; i++) {
            if (elmnt == y[i]) {
            arrNo.push(i)
            } else {
            y[i].classList.remove("select-arrow-active");
            }
        }
        for (i = 0; i < x.length; i++) {
            if (arrNo.indexOf(i)) {
            x[i].classList.add("select-hide");
            }
        }
        }

        // add submit button to the dropdown
        $('<button class="btn btn--green" disabled>Continue</button>').appendTo('.contact-reason .select-items');

        // prevent the dropdown from closing if an option has been selected
        $('.contact-reason .select-items div').on('click', function() {
            $(this).parent().parent().children('.select-selected').addClass('select-arrow-active');
            $(this).parent().parent().children('.select-items').removeClass('select-hide');
        });
        $('.contact-reason .select-selected').on('click', function() {
            if (!($(this).find('p').length > 0)) {
                console.log('worked');
                $(this).addClass('select-arrow-active');
                $(this).parent().children('.select-items').removeClass('select-hide');
                $('.contact-reason button').removeAttr('disabled');
            }
        });

        // when the dropdown's button is clicked, close the dropdown and show the gated content or message field, depending on the user's choice
        $('.contact-reason button').on('click', function(e) {
            e.preventDefault();
            closeAllSelect();
            if ($('.contact-reason select').val() == 'Concern') {
                $('.contact-form .gated-content').fadeIn();
                //$('.contact-form .gated-content textarea + .validation-text').fadeIn();
                $('.contact-form .message').fadeOut();
                //$('.contact-form .message textarea + .validation-text').fadeOut();

                $('.contact-form .message textarea').prop("required", false);
                $('.contact-form .gated-content input').each(function(){
                  if($(this).attr("type") != "hidden" && $(this).attr("placeholder").indexOf("*") != -1 ){
                    $(this).prop("required", true);
                  }
                });
                $('.contact-form .gated-content textarea').prop("required", true);
                $('.contact-form .gated-content select').prop("required", true);


                $('#iagree-contact').removeAttr('disabled');
                $('#submit-contact').removeAttr('disabled');
            } else {
                $('.contact-form .message').fadeIn();
                //$('.contact-form .message textarea + .validation-text').fadeIn();
                $('.contact-form .gated-content').fadeOut();
                //$('.contact-form .gated-content textarea + .validation-text').fadeOut();

                $('.contact-form .message textarea').prop("required", true);
                $('.contact-form .gated-content input').prop("required", false);
                $('.contact-form .gated-content textarea').prop("required", false);
                $('.contact-form .gated-content select').prop("required", false);

                $('#iagree-contact').removeAttr('disabled');
                $('#submit-contact').removeAttr('disabled');
            }
        });


        $('.contact-form .gated-content .internationalized').hide();
        $('.contact-form .gated-content .field-us').show();
        $('.contact-form .gated-content .internationalized').prop("required", false);
        $('.contact-form .gated-content .field-us').prop("required", true);

        $('.contact-form .gated-content .field-zip input[type=text]').each(function(){
          $(this).attr("data-placeholder", $(this).attr("placeholder"));
        });
        $('.contact-form .gated-content .field-ca input[type=text]').each(function(){
          $(this).attr("data-placeholder", $(this).attr("placeholder"));
        });

        $(".contact-country select").on("change", function(){
          if( $(this).val() == "United States") {
            $('.contact-form .gated-content .internationalized').hide();
            $('.contact-form .gated-content .field-us').show();
            $('.contact-form .gated-content .internationalized').prop("required", false);
            $('.contact-form .gated-content .field-us').prop("required", true);

            $('.contact-form .gated-content .field-zip input[type=text]').each(function(){
              $(this).attr("placeholder", $(this).attr("data-placeholder"));
            });
          } else if( $(this).val() == "Canada") {
            $('.contact-form .gated-content .internationalized').hide();
            $('.contact-form .gated-content .field-ca').show();
            $('.contact-form .gated-content .internationalized').prop("required", false);
            $('.contact-form .gated-content .field-ca').prop("required", true);

            $('.contact-form .gated-content .field-ca input[type=text]').each(function(){
              $(this).attr("placeholder", $(this).attr("data-placeholder"));
            });

            $('.contact-form .gated-content .field-zip input[type=text]').each(function(){
              $(this).attr("placeholder", $(this).attr("data-placeholder").replace("Zip", "Postal"));
            });
          } else {
            $('.contact-form .gated-content .internationalized').hide();
            $('.contact-form .gated-content .field-ca').show();
            $('.contact-form .gated-content .internationalized').prop("required", false);
            $('.contact-form .gated-content .field-ca').prop("required", true);

            $('.contact-form .gated-content .field-ca input[type=text]').each(function(){
              $(this).attr("placeholder", $(this).attr("data-placeholder").replace("Providence", "State / Providence / Region"));
            });

            $('.contact-form .gated-content .field-zip input[type=text]').each(function(){
              $(this).attr("placeholder", $(this).attr("data-placeholder").replace("Zip", "Postal"));
            });
          }

        });

        // toggle social icons
        $('.news-article__content__share a').on('click', function(e) {
            e.preventDefault();
        });
        $('.recipe-actions__share a').on('click', function(e) {
            e.preventDefault();
        });
        $('.product-actions__share a').on('click', function(e) {
            e.preventDefault();
        });

        // print news article
        $('.news-article__print a').on('click', function(e) {
            e.preventDefault();
            $('.bs-tooltip-bottom').css('visibility', 'hidden');
            window.print();
        });

        // print recipe
        $('.recipe-actions__print a').on('click', function(e) {
            e.preventDefault();
            $('.bs-tooltip-bottom').css('visibility', 'hidden');
            window.print();
        });

        // print product
        $('.product-actions__print a').on('click', function(e) {
            e.preventDefault();
            $('.bs-tooltip-bottom').css('visibility', 'hidden');
            window.print();
        });

        // date range picker
        $('.datepicker input').daterangepicker();
        $('.singlepicker input').daterangepicker({
            singleDatePicker: true,
        });
        $('.singlepicker input').val($('.singlepicker input').attr('placeholder'));
        $('.daterangepicker').appendTo('.singlepicker');
        $('.daterangepicker').appendTo('.multipicker');

        // toggle the recipe filter flyout
        $('.browse-by').on('click', function(e) {
            e.preventDefault();
            $(this).toggleClass('panel-active');
            $('.filter-flyout').toggleClass('is-open');
        });
        $('.close-flyout a').on('click', function(e) {
            e.preventDefault();
            $('.browse-by').toggleClass('panel-active');
            $('.filter-flyout').toggleClass('is-open');
        });

        // recipe image slider
        if ($('.recipe-slider').children().length > 1) {
            $('.recipe-slider').flickity({
                friction: 0.27,
                wrapAround: true,
                adaptiveHeight: true
            });
            var flkty = $('.recipe-slider').data('flickity');
            setTimeout(function() {
                flkty.resize();
            }, 100);
        }

        // product image slider
        if ($('.product-slider').children().length > 1) {
            var $carousel = $('.product-slider').flickity({
                friction: 0.27,
                wrapAround: true,
                adaptiveHeight: true
            });
            var flkty = $carousel.data('flickity');
            $(".product-varieties div").first().addClass("active");
            $(".product-varieties div").click(function () {
                $(".product-varieties div").removeClass("active");
                $(this).addClass("active");

                var idx = $(this).attr("data-start");
                $carousel.flickity('select', idx);
            });
            $carousel.on('select.flickity', function () {
                $(".product-varieties div").removeClass("active");
                $(".product-varieties div").each(function () {
                    var idx = $(this).attr("data-start");
                    var idxn = $(this).next().attr("data-start");
                    if (idx == flkty.selectedIndex || (idx < flkty.selectedIndex && flkty.selectedIndex < idxn)) {
                        $(this).addClass("active");
                    }
                });

            });
            setTimeout(function() {
                flkty.resize();
            }, 100);
        }

        // read more on news pages
        /*function showReadMore(width) {
            $('.news-article__content__snippet').each(function() {
                var height = $(this).height();
                var a = $(this).parent().children('.news-article__content__read-more');
                if (height >= 209 && width >= 535) {
                    a.css('display', 'block');
                    $(this).addClass('overflowed');
                } else {
                    a.css('display', 'none');
                    $(this).removeClass('overflowed');
                }
            });
        }
        showReadMore( $(window).width() );
        $(window).on('resize', function() {
            showReadMore( $(this).width() );
        });*/

        // calendar events
        if ($('.calendar-parent').length > 0) {
            $('.calendar-parent').clndr({
                events: lotsOfEvents,
                multiDayEvents: {
                    startDate: 'start',
                    endDate: 'end',
                    singleDay: 'date'
                }, clickEvents: {
                    click: function (target) {
                        if (target.events.length != 0) {

                            $("#datepicker").val(new Date(target.date).toLocaleDateString() + " - " + new Date(target.date).toLocaleDateString());
                            dmfp.eventsSearch();
                        }
                    }
                }
            });
        }

        // if the textarea has value, keep it expanded
        $('.comment-form textarea').keypress(function() {
            var textLength = $('.comment-form textarea').val().length;
            if (textLength > -1) {
                $('.comment-form textarea').css('height', '350px');
            }
        });

        // make filter selections sticky on mobile
        $(window).scroll(function () {
            // general
            if ($(window).scrollTop() > 147) {
                $('.recipes-dataset .browse-filters').addClass('nav-up');
            }
            if ($(window).scrollTop() < 148) {
                $('.recipes-dataset .browse-filters').removeClass('nav-up');
            }

            // news landing
            if ($(window).scrollTop() > 39) {
                $('.recipes-dataset.news-landing .browse-filters').addClass('nav-up');
            }
            if ($(window).scrollTop() < 40) {
                $('.recipes-dataset.news-landing .browse-filters').removeClass('nav-up');
            }

            // events landing
            if ($(window).scrollTop() > 92) {
                $('.recipes-dataset.event-details .browse-filters').addClass('nav-up');
            }
            if ($(window).scrollTop() < 93) {
                $('.recipes-dataset.event-details .browse-filters').removeClass('nav-up');
            }

            // search results
            if ($(window).scrollTop() > 157) {
                $('.recipes-dataset.searchresults .browse-filters').addClass('nav-up');
            }
            if ($(window).scrollTop() < 158) {
                $('.recipes-dataset.searchresults .browse-filters').removeClass('nav-up');
            }

            // recipes landing
            if ($(window).scrollTop() > 147) {
                $('.recipes-landing .browse-filters').addClass('nav-up');
            }
            if ($(window).scrollTop() < 148) {
                $('.recipes-landing .browse-filters').removeClass('nav-up');
            }
        });

        // filter list priority nav
        if ($('.recipes-dataset').length) {
            var container = document.querySelector('.tabs');
            var primary = container.querySelector('.-primary');
            var primaryItems = container.querySelectorAll('.-primary > li:not(.-more)');

            container.classList.add('-jsfied');
            primary.insertAdjacentHTML('beforeend', "\n<li class=\"-more\">\n<button type=\"button\" class=\"btn btn--green\" aria-haspopup=\"true\" aria-expanded=\"false\">\nMore\n</button>\n<ul class=\"-secondary\">\n".concat(primary.innerHTML, "\n</ul>\n</li>\n"));

            var secondary = container.querySelector('.-secondary');
            var secondaryItems = secondary.querySelectorAll('li');
            var allItems = container.querySelectorAll('li');
            var moreLi = primary.querySelector('.-more');
            var moreBtn = moreLi.querySelector('button');

            moreBtn.addEventListener('click', function (e) {
                e.preventDefault();
                container.classList.toggle('-show-secondary');
                moreBtn.setAttribute('aria-expanded', container.classList.contains('-show-secondary'));
            });

            var doAdapt = function doAdapt() {
                allItems.forEach(function (item) {
                    item.classList.remove('-hidden');
                });

                var stopWidth = moreBtn.offsetWidth;
                var hiddenItems = [];
                var primaryWidth = primary.offsetWidth;

                primaryItems.forEach(function (item, i) {
                    if (primaryWidth >= stopWidth + item.offsetWidth) {
                        stopWidth += item.offsetWidth;
                    } else {
                        item.classList.add('-hidden');
                        hiddenItems.push(i);
                    }
                });

                if (!hiddenItems.length) {
                    moreLi.classList.add('-hidden');
                    container.classList.remove('-show-secondary');
                    moreBtn.setAttribute('aria-expanded', false);
                } else {
                    secondaryItems.forEach(function (item, i) {
                        if (!hiddenItems.includes(i)) {
                            item.classList.add('-hidden');
                        }
                    });
                }
            };

            doAdapt();
            window.addEventListener('resize', doAdapt);
            document.addEventListener('click', function (e) {
                var el = e.target;

                while (el) {
                    if (el === secondary || el === moreBtn) {
                        return;
                    }

                    el = el.parentNode;
                }

                container.classList.remove('-show-secondary');
                moreBtn.setAttribute('aria-expanded', false);
            });
        }

        // move varieties into appropriate sections based on window width
        function varietyRows(width) {
            if (width >= 0 && width <= 535) {
                $('.product-varieties-initial .product-varieties .product-varieties__variety:nth-child(n+4)').prependTo('.product-varieties-toggle .product-varieties');
            } else if (width >= 536 && width <= 1285) {
                $('.product-varieties-toggle .product-varieties .product-varieties__variety:nth-child(-n+1)').appendTo('.product-varieties-initial .product-varieties');
                $('.product-varieties-initial .product-varieties .product-varieties__variety:nth-child(n+5)').prependTo('.product-varieties-toggle .product-varieties');
            } else if (width >= 1286) {
                $('.product-varieties-toggle .product-varieties .product-varieties__variety:nth-child(-n+4)').appendTo('.product-varieties-initial .product-varieties');
                $('.product-varieties-initial .product-varieties .product-varieties__variety:nth-child(n+9)').prependTo('.product-varieties-toggle .product-varieties');
            }
        }
        varietyRows( $(window).width() );
        $(window).on('resize', function() {
            varietyRows( $(this).width() );
        });

        // show or hide the Show More button based on the number of varieties
        function showHideMore(width) {
            var variety = $('.product-varieties__variety');

            if (width >= 0 && width <= 535) {
                if ( variety.length <= 3) {
                    $('.varieties__heading a').hide();
                } else {
                    $('.varieties__heading a').show();
                }
            } else if (width >= 536 && width <= 1285) {
                if ( variety.length <= 4) {
                    $('.varieties__heading a').hide();
                } else {
                    $('.varieties__heading a').show();
                }
            } else if (width >= 1286) {
                if ( variety.length <= 8) {
                    $('.varieties__heading a').hide();
                } else {
                    $('.varieties__heading a').show();
                }
            }
        }
        showHideMore( $(window).width() );
        $(window).on('resize', function() {
            showHideMore( $(this).width() );
        });

        // change the active product variety on thumbnail click
        $('.product-varieties__variety').on('click', function() {
            $('.product-varieties__variety').removeClass('active');
            $(this).addClass('active');
        });

        // show and hide the different rating states
        $('.rating-initial a').on('click', function(e) {
            e.preventDefault();
            $('.rating-initial').addClass('is-hidden');
            $('.rating-form').addClass('is-visible');
        });
        $('.rate .submit-rating').on('click', function(e) {
            e.preventDefault();
            $('.rating-form').removeClass('is-visible').addClass('is-hidden');
            $('.signed-in .rating-results').addClass('is-visible');
        });

        // enable tooltips
        $('[data-toggle="tooltip"]').tooltip();

        $('[data-toggle="tooltip"]').on('click', function() {
            var sharePopup = $(this).parent().children('.share-popup');
            if ((sharePopup).hasClass('show-popup')) {
                $('.bs-tooltip-bottom').css('visibility', 'hidden');
            } else {
                $('.bs-tooltip-bottom').css('visibility', 'visible');
            }
        });
        $('.recipe-actions__favorite a').on('click', function(e) {
            e.preventDefault();
            $(this).toggleClass('added removed');

            if ($(this).hasClass('added')) {
                $(this).attr('data-original-title', 'Remove from favorites');
            } else {
                $(this).attr('data-original-title', 'Add to favorites');
            }
        });

        // enable popovers
        $('[data-toggle="popover"]').popover({
            content: function () {
                return "<ul>"+$(this).siblings("ul").html() + "</ul>";
            }
        });

        // world map
        if ($('#world-map').length == 1) {
            $('#world-map').vectorMap({
                map: 'world_mill',
                backgroundColor: 'white',
                regionStyle: {
                    initial: {
                        fill: '#c6c6c6'
                    }
                },
                series: {
                    regions: [{
                        values: map_regions,
                        attribute: 'fill'
                    }]
                },
                onRegionOver: function(event, code) {
                    if (Object.keys(map_regions).indexOf(code) == -1 ) {
                        event.preventDefault();
                        $('.jvectormap-tip').css('opacity', '0');
                    } else {
                        $('.jvectormap-tip').css('opacity', '1');
                    }
                }
            });
        }

    });
    superscriptElement($('body'));
    function superscriptElement(element) {
      if( $(element).children().length == 0 )
      {
        if($(element).html() != undefined ){
          $(element).html(superscript($(element).html()));
        }

      } else {
        $(element).children().each(function(){
          var html = $(this).html();
          if( html.indexOf("®") != -1 ||  html.indexOf("™") != -1 ) {
              superscriptElement(this);
          }
          //if(html != undefined && ( html.indexOf("®") != -1 || html.indexOf("™") != -1 )) {
              //didn't find it just use the raw html
              //$(this).html(superscript(html));
          //}
        });
      }
    }
}(jq14));




// wrap trademark symbols in sup tags
function superscript(html) {
    html =  html.replace(/((?!<sup>\s*))&reg;((?!\s*<\/sup>))/gi, '<sup>&reg;</sup>').replace(/((?!<sup>\s*))®((?!\s*<\/sup>))/gi, '<sup>&reg;</sup>');
    html =  html.replace(/((?!<sup>\s*))&trade;((?!\s*<\/sup>))/gi, '<sup>&trade;</sup>').replace(/((?!<sup>\s*))™((?!\s*<\/sup>))/gi, '<sup>&trade;</sup>');
    return html;
}
//document.body.innerHTML = superscript(document.body.innerHTML);
