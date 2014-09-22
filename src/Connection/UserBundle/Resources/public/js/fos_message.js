FosMessage = {};

FosMessage = {    
    init: function() {        
        FosMessage.message.listen();
    },
    message : {
        'hi': function(hiUrl) {
            if (!hiUrl) {
                console.log('Wrong Url!');
                return;
            }

            $.get(hiUrl, function() {
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
                FosMessage.message.hi($(this).attr('data-href'));
            })
        }
    }
};