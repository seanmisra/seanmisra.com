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

});
