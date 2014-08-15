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
    }
};