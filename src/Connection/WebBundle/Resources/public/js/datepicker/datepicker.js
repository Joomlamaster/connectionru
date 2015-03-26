$(function(){
    $.datepicker.setDefaults({
        dateFormat: "dd-mm-yy"
    });
    $('#fos_user_registration_form_profile_birthdate, #connection_user_profile_edit_profile_birthdate').datepicker({
        changeMonth: true,
        changeYear: true,
        yearRange: "-100:+0",
        maxDate: "+0D",
        dateFormat: "mm-dd-yy/",
        //format date mm-dd-yy mm/dd/yy
        onSelect: function (date) {
            $(this).val(date.substr(0, 10));
        }
    });
});