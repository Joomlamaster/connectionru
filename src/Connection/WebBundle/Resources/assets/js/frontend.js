var Common = (function($) {
    return {
        handleDatepicker: function() {
            $('.datepicker').attr('type', 'text').datepicker();
        }
    }
}(jQuery));

$(function(){
    Common.handleDatepicker();
});