$(function(){
    $.datepicker.setDefaults({
        dateFormat: "yy-mm-dd"
    });
    $('#{{form.profile.birthdate.vars.id}}').datepicker({
        changeMonth: true,
        changeYear: true,
        yearRange: "-100:+0",
        maxDate: "+0D",
        //constrainInput: false,
        //format date mm-dd-yy mm/dd/yy
        onSelect: function (date) {
            $(this).val(date.substr(0, 10));
        }
    });
});