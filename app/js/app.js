//var jq14 = jQuery.noConflict(true);
(function ($) {

    // loading screen
    $(window).on('load', function() {
        setTimeout(function() {
            $('.loading-screen').fadeOut();
        }, 1000);

        // function pv_single_news_hero_adjustment(){
        //     var headline_h = $('.news-article-detail__headline').outerHeight();
        //     $('.news-article-detail__image').css('margin-top',headline_h * -1);           
        // }
        // if($('.news-article-detail__image').length){
        //     var window_w = $(window).width();
        //     if(window_w > 1385){
        //         pv_single_news_hero_adjustment();
        //     }
        // }
    });

    $(document).ready(function() {

        // image masks (paper tears)
        $('.image-mask').each(function(){
            $(this).wrap('<div class="image-mask__container"><div></div></div>');
        });
        $('.image-edges').each(function(){
            $(this).wrapInner('<div class="image-edges__container"></div>');
        });

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
        try {
            $("#menu").mmenu({
                onClick: {
                    close: true,
                    preventDefault: false,
                },
                offCanvas: {
                    page: {
                        selector: ".site-wrapper"
                    }
                },
                "extensions": [
                    "position-front"
                ]
            }, {
                offCanvas: {
                    page: {
                        selector: ".site-wrapper"
                    }
                }
            });
        } catch (ex) {
            console.error("Error on .mmenu", ex);
        }

        // toggle the mobile menu
        $('.mobile-nav__burger').on('click', function () {
            var api = $('#menu').data('mmenu');
        
            if ($(".mm-wrapper_opened").length > 0) {
                api.close();
            }
            else {
                api.open();
            }
        });

        // close the mobile nav if at a desktop breakpoint
        function closeMobileNav(width) {
            if ($('.mobile-nav').css('display') == 'none') {
                var api = $('#menu').data('mmenu');
                api.close();
            }
        }
        closeMobileNav( $(window).width() );
        $(window).on('resize', function() {
            closeMobileNav( $(this).width() );
        });

        // insert the mobile nav footer after the panels
        $('#menu footer').insertAfter('.mm-panels');

        // homepage image slider
        if ($('.homepage-slider').children().length > 1) {
            $('.homepage-slider').flickity({
                friction: 0.27,
                pageDots: false,
                wrapAround: true,
                autoPlay: 10000,
                imagesLoaded: true
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
        a.innerHTML = '<span class="initial-label"><sup>*</sup>' + selElmnt.options[selElmnt.selectedIndex].innerHTML + '</span>';
        a.innerHTML += '<svg aria-hidden="true"><use xlink:href="#svg-icon-angle-right"></use></svg>';
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
                    h.innerHTML += '<svg aria-hidden="true"><use xlink:href="#svg-icon-angle-right"></use></svg>';
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
        var x, y, i, custom_select, arrNo = [];
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

        // single article hero image
        // function pv_single_news_hero_adjustment(){
        //     var headline_h = $('.news-article-detail__headline').outerHeight();
        //     $('.news-article-detail__image').css('margin-top',headline_h * -1);           
        // }

        // $(window).resize(function(){
        //     if($('.news-article-detail__image').length){
        //         var window_w = $(window).width();
        //         if(window_w >= 1385){
        //             pv_single_news_hero_adjustment();
        //         }
        //         if(window_w < 1385){
        //             $('.news-article-detail__image').css('margin-top','-10%');
        //         }        
        //     }
        // });


        // Custom select
        $('.custom_select').on('focus',function(e){
            e.preventDefault();
            $(this).keypress(function(event){
                var keycode = (event.keyCode ? event.keyCode : event.which);
                if(keycode == '13'){
                    $(this).find('.select-selected').addClass('select-arrow-active');
                    $(this).find('.select-items').removeClass('select-hide');
                }
            });
        });

        $('.custom_select').on('blur',function(e){
            e.preventDefault();
            $(this).find('.select-selected').removeClass('select-arrow-active');
            $(this).find('.select-items').addClass('select-hide');
        });

        // Form label toggle
        $('.contact-form__item input, .contact-form__item .custom_select select, .contact-form__item textarea').focus(function(){
            $(this).siblings('label').css('display','none');
        });

        $('.contact-form__item input, .contact-form__item textarea').blur(function(){
            if(!$(this).val()) {
                $(this).siblings('label').css('display','block');    
            } else {
                $(this).siblings('label').css('display','none');
            }
        });

        // once a reason for comment has been selected, enable the Continue button
        $('.contact-reason .select-selected').on('click', function() {
            if (!($(this).find('p').length > 0)) {
                $('.contact-reason-button').removeAttr('disabled');
                $('#iagree-contact').removeAttr('disabled');
                $('#submit-contact').removeAttr('disabled');
            }
        });

        // when the dropdown's button is clicked, close the dropdown and show the gated content or message field, depending on the user's choice
        $('.contact-reason-button').on('click', function(e) {
            e.preventDefault();
            closeAllSelect();
            $(".contact-hidden-start").show();
            if ($('.contact-reason select').val() == 'Concern') {
                $('.contact-form .gated-content').fadeIn();
                $('.contact-form .iagree').fadeIn();
                $('.contact-form .submit').fadeIn();
                $('.contact-form .message').fadeOut();
                $('.contact-form .message textarea').prop("required", false);
                $('.contact-form .gated-content input').each(function(){
                  if($(this).attr("type") != "hidden" && $(this).attr("placeholder").indexOf("*") != -1 ){
                    $(this).prop("required", true);
                  }
                });
                $('.contact-form .gated-content textarea').prop("required", true);
                $('.contact-form .gated-content select').prop("required", true);
            } else {
                $('.contact-form .message').fadeIn();
                $('.contact-form .iagree').fadeIn();
                $('.contact-form .submit').fadeIn();
                $('.contact-form .gated-content').fadeOut();
                $('.contact-form .message textarea').prop("required", true);
                $('.contact-form .gated-content input').prop("required", false);
                $('.contact-form .gated-content textarea').prop("required", false);
                $('.contact-form .gated-content select').prop("required", false);
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
        $('.singlepicker input[type=text]').daterangepicker({
            singleDatePicker: true,
        });
        $('.singlepicker input[type=text]').val($('.singlepicker input[type=text]').attr('placeholder'));
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
                adaptiveHeight: true,
                imagesLoaded: true,
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
                adaptiveHeight: true,
                imagesLoaded: true
            });
            var flkty = $carousel.data('flickity');
            $(".product-varieties a").first().addClass("active");
            $(".product-varieties a").on('click', function (e) {
                e.preventDefault();
                $(".product-varieties a").removeClass("active");
                $(this).addClass("active");

                var idx = $(this).attr("data-start");
                $carousel.flickity('select', idx);
            });
            $carousel.on('select.flickity', function () {
                $(".product-varieties a").removeClass("active");
                $(".product-varieties a").each(function () {
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

        // enable popovers
        $('[data-toggle="popover"]').popover({
            content: function () {
                return $("<ul>"+$(this).siblings("ul").html() + "</ul>");
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

        // remove nav class when scrolled to the top of the screen
        var top_offset = $(window).scrollTop();
        if (top_offset == 0) {
            $('header').removeClass('small-nav');
            $('.mobile-nav').removeClass('bg');
        } else {
            $('header').addClass('small-nav');
            $('.mobile-nav').addClass('bg');
        }

        $(function () {
            $(window).scroll(function () {
                var top_offset = $(window).scrollTop();
                if (top_offset == 0) {
                    $('header').removeClass('small-nav');
                    $('.mobile-nav').removeClass('bg');
                } else {
                    $('header').addClass('small-nav');
                    $('.mobile-nav').addClass('bg');
                }
            })
        });

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


    // toggle form labels
    var inpsToMonitor = document.querySelectorAll (
        ".site-wrapper.contact .form-control"
    );
    for (var J = inpsToMonitor.length - 1;  J >= 0;  --J) {
        inpsToMonitor[J].addEventListener ("change",    adjustStyling, false);
        inpsToMonitor[J].addEventListener ("keyup",     adjustStyling, false);
        inpsToMonitor[J].addEventListener ("focus",     adjustStyling, false);
        inpsToMonitor[J].addEventListener ("blur",      adjustStyling, false);
        inpsToMonitor[J].addEventListener ("mousedown", adjustStyling, false);

        //-- Initial update. note that IE support is NOT needed.
        var evt = document.createEvent ("HTMLEvents");
        evt.initEvent ("change", false, true);
        inpsToMonitor[J].dispatchEvent (evt);
    }

    function adjustStyling (zEvent) {
        var inpVal  = zEvent.target.value;
        if (inpVal  &&  inpVal.replace (/^\s+|\s+$/g, "") )
            zEvent.currentTarget.parentNode.classList.add('--has-value');
        else
            zEvent.currentTarget.parentNode.classList.remove('--has-value');
    }


}($));

// wrap trademark symbols in sup tags
function superscript(html) {
    html =  html.replace(/((?!<sup>\s*))&reg;((?!\s*<\/sup>))/gi, '<sup>&reg;</sup>').replace(/((?!<sup>\s*))®((?!\s*<\/sup>))/gi, '<sup>&reg;</sup>');
    html =  html.replace(/((?!<sup>\s*))&trade;((?!\s*<\/sup>))/gi, '<sup>&trade;</sup>').replace(/((?!<sup>\s*))™((?!\s*<\/sup>))/gi, '<sup>&trade;</sup>');
    return html;
}

function copyText(element) {
  // click to copy URL

    var copyTextarea = $(element).children("textarea")[0];
    $(copyTextarea).css("display","block");
  copyTextarea.focus();
  copyTextarea.select();

  try {
      var successful = document.execCommand('copy');
      var msg = successful ? 'successful' : 'unsuccessful';
      console.log('Copying text command was ' + msg);
  } catch (err) {
      console.log('Oops, unable to copy');
  }

}
//document.body.innerHTML = superscript(document.body.innerHTML);