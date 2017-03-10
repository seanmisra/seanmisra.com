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
    
    // quickQuery.js functions for UI improvements
    appear('h1', 1000, 1);
    timedAppear('#social_one', 1000, 1, 300);
    timedAppear('#social_two', 1000, 1, 600);
    timedAppear('#social_three', 1000, 1, 900);
    cssHover('#git_message', "opacity", .5, 1, 1000);
    cssHover('.tweetSpace>a, li>a', "opacity", .5, 1, 1000);

    // Twitter feed created with Tweetie from GitHub
    $('.tweet').twittie({
        dateFormat: '%b. %d, %Y',
        template: '{{tweet}} <div class="date"></div>',
        count: 5,
        loadingText: 'Loading!'
    }, function() {

        $('.tweetSpace').fadeTo(2000, 1);
        var refreshId = setInterval(function() {

            var item = $('.tweet ul').find('li:first');
            console.log(item);

            if (item.length == 0) { 
                $('.tweetSpace').fadeOut(1000, function() {
                    $(this).html("Follow <a href='https://twitter.com/SeanMisra'>@SeanMisra</a><br><a href='https://twitter.com/SeanMisra' class='fa fa-twitter' aria-hidden='true'>").fadeIn(1500);
                });  
                clearInterval(refreshId);
            }

            else {
                //check for tiny tweets
                if(item.text().length < 80) {
                    console.log("I got here!");
                    item.append("<a href='https://twitter.com/SeanMisra' class='fa fa-twitter' aria-hidden='true'>")
                }

                $('.tweetSpace').fadeOut(1000, function() {
                    $(this).html(item).fadeIn(1500);
                });
            }
        }, 6500);

    });

});
