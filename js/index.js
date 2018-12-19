(function ($) {

    $(document).on('ready', function () {

        ///////////
        // Login //
        ///////////

        var $login_form = $('#login-form');

        $login_form.on('submit', function (e) {

            e.preventDefault();

            $.ajax({
                "url": $login_form.attr('action'),
                "method": "POST",
                "dataType": "json",
                "data": $login_form.serialize()
            })

                .done(function (response) {
                    if (response.success && response.data) {
                        addAlert('Login successful', 'success');
                    } else {
                        addAlert('Bad credentials', 'warning');
                    }
                })

                .fail(function () {
                    addAlert('Connection error', 'danger');
                });

        });


        //////////////
        // Newsfeed //
        //////////////

        var $newsfeed = $('#newsfeed');

        $.ajax({
            "url": $newsfeed.data('url'),
            "method": "GET",
            "dataType": "json"
        })

            .done(function (response) {
                if (response.success && response.data) {
                    var posts = response.data;
                    $.each(posts, function (i, post) {
                        $newsfeed.append('\
								<li class="media" data-news-id="' + post.id + '">\
									<div class="media-left">\
                                        <a href="#">\
                                            <img class="media-object" width="64" height="64" src="' + post.image + '" alt="' + post.title + '">\
                                        </a>\
								    </div>\
									<div class="media-body">\
                                        <h4 class="media-heading">' + post.title + '</h4>\
                                        <p>' + post.content + '</p>\
                                        <p>' + post.content + '</p>\
								    </div>\
								</li>\
							');
                    });
                }
            })

            .fail(function () {
                addAlert('Feed is unavailable', 'danger');
            });


        ////////////
        // Remote //
        ////////////

        var $remote = $('#remote');

        $.ajax({
            "url": $remote.data('url'),
            "method": "POST",
            "dataType": "jsonp",
            "cache": "true"
        })

            .done(function (response) {
                if (response.success && response.data) {
                    $remote.append(response.data);
                } else {
                    addAlert('Bad remote response', 'warning');
                }
            })

            .fail(function () {
                addAlert('Remote connection error', 'danger');
            });

    });

    function addAlert(text, type) {
        var icons = {
            "success": "ok",
            "info"   : "info-sign",
            "warning": "warning-sign",
            "danger" : "remove"
        };
        $('#alerts').prepend('' +
            '<div class="alert alert-' + type + ' alert-dismissible" role="alert">' +
                '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                   '<span aria-hidden="true">&times;</span>' +
                '</button>' +
                '<i class="glyphicon glyphicon-' + icons[type] + '"></i>' +
                text +
            '</div>');
    }

})(window.jQuery);
