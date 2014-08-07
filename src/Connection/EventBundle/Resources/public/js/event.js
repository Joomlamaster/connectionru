EM = {};

EM = {
    'subscriber': {
        'subscribeUrl'  : null,
        'unSubscribeUrl': null,
        'init': function(subscribeUrl, unSubscribeUrl) {
            EM.subscribeUrl     = subscribeUrl;
            EM.unSubscribeUrl   = unSubscribeUrl;
            //  Handle Join Event Action
            $("div.going input").on('click', function(){
                EM.subscriber.handle($(this).is(":checked"));
            });
        },
        'handle': function(subscribe) {
            if (subscribe) {
                EM.subscriber.subscribeToEvent();
            } else {
                EM.subscriber.unSubscribeToEvent();
            }
        },
        'subscribeToEvent': function() {
            EM.subscriber.ajaxCall(EM.subscribeUrl);
        },
        'unSubscribeToEvent': function() {
            EM.subscriber.ajaxCall(EM.unSubscribeUrl);
        },
        'ajaxCall': function(url) {
            $.post(url);
        }
    }
};