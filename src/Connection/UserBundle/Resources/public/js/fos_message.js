FosMessage = {};

FosMessage = {
    hiUrl: false,
    init: function(hiUrl) {
        FosMessage.hiUrl = hiUrl;
        FosMessage.message.listen();
    },
    message : {
        'hi': function() {
            if (!FosMessage.hiUrl) {
                console.log('Wrong Url!');
                return;
            }

            $.get(FosMessage.hiUrl, function() {
                $alert = $('<div class="alert alert-success" role="alert"><strong>Well done!</strong> Message sent.</div>');
                $alert.appendTo('body').center();
                setTimeout(function(){
                    $alert.remove();
                }, 1000);
            });
        },
        listen: function() {
            $('.fos-message.hi-message').on('click', function(e) {
                e.preventDefault();
                FosMessage.message.hi();
            })
        }
    }
};