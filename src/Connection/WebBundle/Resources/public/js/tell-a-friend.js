TAF = {};

TAF = {
    'init': function() {
        $('#tell-a-friend').on('click', function(e){
            e.preventDefault();
            TAF.show();
        });
    },
    'show': function() {
        TAF.showOverlay();
        $('.tell-a-friend').removeClass('hidden').center();
    },
    'hide': function() {
        TAF.hideOverlay();
        $('.tell-a-friend').addClass('hidden');
    },
    'showOverlay': function() {
        var overlay = jQuery('<div id="overlay"> </div>');
        overlay.appendTo(document.body)
        overlay.on('click', function() {
            TAF.hide();
        });
    },
    'hideOverlay': function() {
        $("#overlay").remove();
    }
}

$(function(){
    TAF.init();
});

jQuery.fn.center = function () {
    this.css("position","absolute");
    this.css("top", Math.max(0, (($(window).height() - $(this).outerHeight()) / 2) +
        $(window).scrollTop()) + "px");
    this.css("left", Math.max(0, (($(window).width() - $(this).outerWidth()) / 2) +
        $(window).scrollLeft()) + "px");
    return this;
}