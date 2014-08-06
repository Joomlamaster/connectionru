FM = {};

FM = {
    'popUp': {
        'profileImage': function() {
            $('.fm-show-popup').on('click', function() {
                popUpSelector   = $(this).data('target_popup');
                $targetPopUp    = $("#"+popUpSelector);

                if ( $targetPopUp.length == 0 ) {
                    return;
                }

                $targetPopUp.toggleClass('hidden');
                $targetPopUp.center();
                $targetPopUp.find('button.close-popup').on('click', function(){
                    FM.popUp.closePopup();
                });
            });

            $('.fm-popup').on('dz.upload.complete', function() {
                FM.popUp.closePopup();
            });
        },
        'closePopup': function() {
            $('.fm-popup').addClass('hidden');
        }
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