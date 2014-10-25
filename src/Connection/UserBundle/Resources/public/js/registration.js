FormAjaxFields = {};
var ivyLeagueAfirmative;

FormAjaxFields = {
    'cfg': {
        'master_slave': {
            'block': '.master_slave'
        },
        'master': {
            'elem': '.master'
        },
        'slave': {
            'elem': '.slave',
            'block': '.slave_block'
        }
    },
    'loadCountryState': function($form) {
        var data = {};
        data[$form.find(FormAjaxFields.cfg.master.elem).attr('name')] = $form.find(FormAjaxFields.cfg.master.elem).val();
        $.ajax({
            url : $form.attr('action'),
            type: $form.attr('method'),
            data : data,
            success: function(html) {
                if(typeof preLoadSlaveFeedback === 'function'){
                    preLoadSlaveFeedback($form.find(FormAjaxFields.cfg.slave.block));
                }
                if ( $form.find(FormAjaxFields.cfg.slave.elem).length ) {
                    $form.find(FormAjaxFields.cfg.slave.elem).replaceWith(
                        $(html).find(FormAjaxFields.cfg.slave.elem)
                    );
                } else {
                    $form.find(FormAjaxFields.cfg.master_slave.block).append(
                        $(html).find(FormAjaxFields.cfg.slave.block)
                    );
                }
                if(typeof loadSlaveFeedback === 'function'){
                    loadSlaveFeedback();
                }
            }
        });
    },
    'init': function() {
        $(function() {
            $("form.master_slave .master").on('change', function() {
                $form = $(this).closest('form');
                if ( $form.length ) {
                    master = $(this);
                    if (master.length) {
                        FormAjaxFields.loadCountryState($form);
                    }

                }
            });
            if ( $(".slave_block").length == 0 ) {
                $("form.master_slave .master").trigger('change');
            }
        });
    }
};


function handleIvyLeague(){
    $(".ivy-league-checkbox").change(function(){
        checkIvyLeagueState();
    });

    function checkIvyLeagueState(){
        if ( $(".ivy-league-checkbox").is(":checked") ) {
            $(".ivy-league-text").removeClass('hidden');
        } else {
            $(".ivy-league-text").addClass('hidden');
        }
    }
    checkIvyLeagueState();
  
}

function handleOriginallyFrom(select, input){    
    
    $(select).change(function(){
        checkOriginallyFromState();
    });
    
    
    function checkOriginallyFromState(){
        if($(select).val() !== ''){
            $(input).parent().show();
        } else {
            $(input).parent().hide();
        }
    }
    
    checkOriginallyFromState();
  
}