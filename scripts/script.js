$(document).ready(function() {
    
    // Contact form pop-up
    $(function() {
        $("#dialog").dialog({
            autoOpen: false,
            show: {
                effect: "fade",
                duration: 700
            },
            hide: {
                effect: "fade",
                duration: 200
            }
        });
    });
    $("#social_three").on("click", function() {
        $("#dialog").dialog("open");
    });    
    
    
    // Success dialog pop-up
    var success = $("#dialogTwo");
    if (success) {
        $(function() {
            $("#dialogTwo").dialog({
                autoOpen: true,
                show: {
                    effect: "fade",
                    duration: 700
                },
                hide: {
                    effect: "fade",
                    duration: 200
                }
            });
        });
    }

    
    // Twitter feed created with Tweetie from GitHub
    $('.tweet').twittie({
        dateFormat: '%b. %d, %Y',
        template: '{{tweet}} <div class="date"></div>',
        count: 5,
        loadingText: 'Loading!'
    }, function() {
        $('.tweetSpace').fadeTo(2000, 1);

        // only cycle Twitter feed on large devices
        var width = $(window).width();

        if (width > 1000) {  
            var refreshId = setInterval(function() {

                width = $(window).width();
                var item = $('.tweet ul').find('li:first');
                console.log(width);

                
                // exit if there are no more items, or the browser size is too small
                if (item.length == 0 || width < 1000) { 
                    $('.tweetSpace').fadeOut(1000, function() {
                        console.log("The width is" + width);
                        $(this).html("Follow <a href='https://twitter.com/SeanMisra'>@SeanMisra</a><br><a href='https://twitter.com/SeanMisra' class='fa fa-twitter' aria-hidden='true'>").fadeIn(1500);
                    });  
                    clearInterval(refreshId);
                }
                
                else {
                    //check for tiny tweets depending on browser size
                    //format accordingly/CSS absolute+relative acts as fallback in some cases
                    if(item.text().length <90 && width) {
                        item.append("<a href='https://twitter.com/SeanMisra' class='fa fa-twitter' aria-hidden='true'>")
                    }
                    else if (item.text().length < 127 && width > 1250) {
                        item.append("<a href='https://twitter.com/SeanMisra' class='fa fa-twitter' aria-hidden='true'>")
                    }
                    else if (item.text().length < 140 && width > 1380) {
                        item.append("<a href='https://twitter.com/SeanMisra' class='fa fa-twitter' aria-hidden='true'>")
                    }
                    
                    console.log("The length is", item.text().length);
                    $('.tweetSpace').fadeOut(1000, function() {
                        $(this).html(item).fadeIn(1500);
                    });
                }
            }, 6500);
        }
    });
    
    
    // quickQuery.js functions for UI improvements
    appear('h1', 1000, 1);
    timedAppear('#social_one', 1000, 1, 300);
    timedAppear('#social_two', 1000, 1, 600);
    timedAppear('#social_three', 1000, 1, 900);
    cssHover('#footer_message', "opacity", .5, 1, 1000);
});
