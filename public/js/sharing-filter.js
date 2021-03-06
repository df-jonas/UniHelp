$(document).ready(function () {
    $(".filterlistener").on("change", function () {
        $.ajax({
            type: "POST",
            url: "/p/sharing/filter",
            data: $(".filterlistener").serialize(),
            success: function (json) {
                var newhtml = "";
                if (json.length > 0) {
                    newhtml = '<span id="filter-details" class="item padding col-xs-12">Er werden ' + json.length + ' resultaten gevonden.</span><br><br>';
                    $.each(json, function (key, value) {

                        newhtml += '<article class="file item clearfix">' +
                            '<a href="/p/sharing/' + value.id + '" class="header-title"><header>' + value.course.name + '<i class="fa fa-download"></i></header></a>' +
                            '<div class="padding"><div class="row flex">' +
                            '<section class="col-lg-1 col-md-2 col-sm-2 col-xs-2"><img src="/img/icons/001-file.png" class="account-img"></section>' +
                            '<section class="col-lg-5 col-md-6 col-sm-6 col-xs-10">' +
                            '<h2 class="item-title no-margin"><a href="/p/sharing/' + value.id + '">' + value.title + '</a></h2>' +
                            '<h3 class="item-campus">Erasmushogeschool Brussel</h3>' +
                            '</section>' +
                            '<section class="col-lg-6 col-lg-push-0 col-md-4 col-sm-4 col-sm-push-0 col-xs-8 col-xs-push-2">' +
                            '<div class="rating">';
                        for (var i = 1; i <= 5; i++) {
                            if (i <= value.averageRating) {
                                newhtml += '<span class="fa fa-star checked"></span>\n';
                            } else {
                                newhtml += '<span class="fa fa-star"></span>\n';
                            }
                        }
                        newhtml += '</div></section></div></div></article>';
                    });
                } else {
                    newhtml = '<span id="filter-details" class="item padding col-xs-12">Er werden geen resultaten gevonden.</span>';
                }
                $("#filter-results").html(newhtml);
            }
        });
    });
});