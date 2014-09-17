
(function($) {
    var opts;
    var form;
    
    $.fn.formInit = function(options) {
        opts = options;
        form = this;

        $('#quick-search-btn').click(function() {
            form.find(' .search-type').val('quick');
            $('#extended-search-tab').hide();
        });
        $('#extended-search-btn').click(function() {
            form.find(' .search-type').val('extended');
            $('#extended-search-tab').show();
        });
        
        this.find(' button[type="reset"]').click(function(){
            $(form).find('input[type="radio"]').removeAttr('checked');
            $(form).find('.marital-status input:first').attr('checked', 'checked');
            $(form).find('select option').removeAttr('selected');
            $(form).find('.state').remove();
            updateGender(form);
            updateSeek(form);
        });
        
        if(opts.userGenderField === ''){
            updateGender(form);
        }
        
        if(opts.userSeekField === ''){
            updateSeek(form);
        }
    };

    $.fn.formUpdate = function() {
        if (this.find(' .gender:first').val() === '') {
            updateGender(this);
        }
        if (this.find(' .seek:first').val() === '') {
            updateSeek(this);
        }
    };
        
    function updateGender(obj) {
        if (opts.userGender !== '0') {
            $(obj).find('.gender input[value="' + opts.userGender + '"]').attr('checked', 'checked');
        } else {
            $(obj).find('.gender input:first').attr('checked', 'checked');
        }
    }

    function updateSeek(obj) {
        if (opts.userSeek !== '0') {
            $(obj).find('.seek input[value="' + opts.userSeek + '"]').attr('checked', 'checked');
        } else {
            $(obj).find('.seek input:first').attr('checked', 'checked');
        }
    }

}
( jQuery ))

