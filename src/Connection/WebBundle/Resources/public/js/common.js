URL = {};
URL = {
    'listen': function() {
        $('.redirect').on('click', function(e) {
            e.preventDefault();
            href = $(this).data('href');

            if (!href) {
                return;
            }

            URL.redirect(href);
        });
    },
    'redirect': function(href) {
        window.location.href = href;
    }
};

$(document).ready(function(){
    URL.listen();
});