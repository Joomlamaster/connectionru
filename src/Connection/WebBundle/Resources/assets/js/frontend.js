var Common = (function($) {
    return {
        handleDatepicker: function() {
            var datepicker = $.fn.datepicker.noConflict(); // return $.fn.datepicker to previously assigned value
            $.fn.bootstrapDP = datepicker;                 // give $().bootstrapDP the bootstrap-datepicker functionality

            $.fn.bootstrapDP.defaults.format = "mm/dd/yyyy";
            $.fn.bootstrapDP.defaults.autoclose = true;

            $('[data-provide="datepicker"]').attr('type', 'text');
        }
    }
}(jQuery));

Common.handleDatepicker();