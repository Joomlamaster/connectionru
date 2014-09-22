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
        showSendMessage: function(hiUrl) {
            if (!hiUrl) {
                console.log('Wrong Url!');
                return;
            }

            $.get(hiUrl, function(data) {
                $modal = $(
                        '<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">'+
                            '<div class="modal-dialog modal-lg">'+
                                '<div class="modal-content" style="height:450px;">'+  
                                    '<div class="modal-header">'+
                                        '<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>'+
                                         '<h4 class="modal-title">Send a message to this user</h4>'+
                                    '</div>'+
                                    '<div class="modal-body">'+
                                        data+
                                    '</div>'+                                   
                                '</div>'+
                            '</div>'+
                        '</div>');
                $modal.modal();              
            });
        },
        listen: function() {
            $('.fos-message.hi-message').on('click', function(e) {
                e.preventDefault();
                FosMessage.message.hi($(this).attr('data-href'));
            })
            $('.fos-message.send-message').on('click', function(e) {
                e.preventDefault();
                FosMessage.message.showSendMessage($(this).attr('data-href'));
            })
        }
    }
};