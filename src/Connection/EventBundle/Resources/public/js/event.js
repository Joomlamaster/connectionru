EM = {};

EM = {
    'subscriber': {
        'subscribeUrl'  : null,
        'unSubscribeUrl': null,
        'interestedUrl'  : null,
        'notInterestedUrl': null,
        'init': function(subscribeUrl, unSubscribeUrl, interestedUrl, notInterestedUrl) {
            EM.subscribeUrl     = subscribeUrl;
            EM.unSubscribeUrl   = unSubscribeUrl;
            EM.interestedUrl    = interestedUrl;
            EM.notInterestedUrl = notInterestedUrl;
            //  Handle Join Event Action
            $("div.going input").on('click', function() {
                var action = $(this).data('action');
                console.log(action);
                if ('subscribe' == action) {
                    EM.subscriber.handleSubscribe($(this).is(":checked"));
                } else if ('interested' == action) {
                    EM.subscriber.handleInterested($(this).is(":checked"));
                }
            });
        },
        'handleSubscribe': function(subscribe) {
            if (subscribe) {
                EM.subscriber.ajaxCall(EM.subscribeUrl);
            } else {
                EM.subscriber.ajaxCall(EM.unSubscribeUrl);
            }
        },
        'handleInterested': function(interested) {
            if (interested) {
                EM.subscriber.ajaxCall(EM.interestedUrl);
            } else {
                EM.subscriber.ajaxCall(EM.notInterestedUrl);
            }
        },
        'ajaxCall': function(url) {
            $.post(url);
        }
    },
    'comment': {
        'init': function(addCommentUrl) {
            $(".add-comment-form button.add-comment-button").on('click', function(e){
                e.preventDefault();
                form = $(this).closest('form').serialize();

                $.ajax({
                    type: "POST",
                    url: addCommentUrl,
                    dataType: "html",
                    data: form,
                    success: function (data) {
                        $('.comments').removeClass('hidden');
                        $('.add-comment-form textarea').removeClass('comment-content-error').val('');
                        $(data).appendTo(".comments");
                    },
                    error: function () {
                        $('.add-comment-form textarea').addClass('comment-content-error');
                    }
                });
            });
        }
    },
    'map': {
        'initialized': false,
        'init': function(lat, lng) {
            $("a.show-event-map").on('click', function(e) {
                e.preventDefault();
                if (!EM.map.initialized) {
                    lat = lat ? lat : 40.7127837;
                    lng = lng ? lng : -74.00594130000002;

                    var haightAshbury = new google.maps.LatLng(lat, lng);
                    var mapOptions = {
                        zoom: 8,
                        center: haightAshbury
                    };
                    map = new google.maps.Map(document.getElementById('map_canvas'),
                        mapOptions);

                    var marker = new google.maps.Marker({
                        position: new google.maps.LatLng(lat, lng)
                    });

                    marker.setMap(map);
                    map.panTo( marker.position );
                    EM.map.initialized = true;
                }
                EM.map.show();
            });
        },
        'show': function() {
            EM.showOverlay();
            $('div.event-map').removeClass('hidden').center();
        },
        'hide': function() {
            EM.hideOverlay();
            $('div.event-map').addClass('hidden');
        }
    },
    'social': {
        'share': {
            'facebook': function() {
                (function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s); js.id = id;
                    js.src = "http://connect.facebook.net/en_US/all.js#xfbml=1&appId=333611596791648&version=v2.0&lang=es";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
            }
        }
    },
    'user': {
        'goingUrl': false,
        'interestedUrl': false,
        'init': function (goingUrl, interestedUrl) {
            EM.user.goingUrl        = goingUrl;
            EM.user.interestedUrl   = interestedUrl;
            EM.user.goingInterested.listen();
        },
        'goingInterested': {
            'listen': function() {
                $goingInterested = $('.going-interested');
                $(".going-counter").on('click', function() {
                    EM.user.ajax($goingInterested, EM.user.goingUrl);
                });

                $(".interested-counter").on('click', function() {
                    EM.user.ajax($goingInterested, EM.user.interestedUrl);
                })
            }
        },
        'ajax': function($popup, url) {
            EM.showOverlay();
            $.ajax({
                type: "POST",
                url: url,
                dataType: "html",
                success: function (data) {
                    $popup.html(data).removeClass('hidden').center();
                },
                error: function () {
                    EM.hideOverlay();
                }
            });
        },
        'closePopup': function() {
            $('.going-interested').html("").addClass('hidden');
        }
    },
    'showOverlay': function() {
        var overlay = jQuery('<div id="overlay"> </div>');
        overlay.appendTo(document.body)
        overlay.on('click', function() {
            EM.map.hide();
            EM.user.closePopup();
        });
    },
    'hideOverlay': function() {
        EM.user.closePopup();
        $("#overlay").remove();
    }
};

jQuery.fn.center = function () {
    this.css("position","absolute");
    this.css("top", Math.max(0, (($(window).height() - $(this).outerHeight()) / 2) +
        $(window).scrollTop()) + "px");
    this.css("left", Math.max(0, (($(window).width() - $(this).outerWidth()) / 2) +
        $(window).scrollLeft()) + "px");
    return this;
}