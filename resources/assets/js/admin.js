$(document).ready(function () {
    if ($(".admin-resources").length > 0) {
        $(".resource-download").click(function () {
            var $resource  = $(this).closest(".resource"),
                resourceId = $resource.attr("data-id");

            $.post("/admin/log-resource-access", {"resource_id": resourceId}, function () {

            });
        });

        $(".deleteResource").click(function(e){
            e.preventDefault();

            var doIt = confirm("Really delete this resource forever?");

            if(doIt){
                window.location = $(this).attr("href");
            }
        });
    }

    $(".deleteUser").click(function(e){
        e.preventDefault();

        var doIt = confirm("Really delete this user forever?");

        if(doIt){
            window.location = $(this).attr("href");
        }
    });
});

