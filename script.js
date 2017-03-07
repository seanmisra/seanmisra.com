$(document).ready(function() {
    
    // Contact form dialog
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
});

