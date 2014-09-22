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
                if ( $form.find(FormAjaxFields.cfg.slave.elem).length ) {
                    $form.find(FormAjaxFields.cfg.slave.elem).replaceWith(
                        $(html).find(FormAjaxFields.cfg.slave.elem)
                    );
                } else {
                    $form.find(FormAjaxFields.cfg.master_slave.block).append(
                        $(html).find(FormAjaxFields.cfg.slave.block)
                    );
                }
                if(typeof loadCountryStateFeedback === 'function'){
                    loadCountryStateFeedback();
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


function handleIvyLeague(select, input, afirmative){
    
    ivyLeagueAfirmative = afirmative;
    $(select).change(function(){
        checkIvyLeagueState();
    });
    
    
    function checkIvyLeagueState(){
        var selected = $(select).find('input[type="radio"]:checked');
        if($(selected).val() === ivyLeagueAfirmative){
            $(input).parent().show();
        } else {
            $(input).parent().hide();
        }
    }
    
    checkIvyLeagueState();
  
}

function handleOriginallyFrom(select, input){    
    
    $(select).change(function(){
        checkOriginallyFromState();
    });
    
    
    function checkOriginallyFromState(){
        console.debug($(select).val());
        if($(select).val() !== ''){
            $(input).parent().show();
        } else {
            $(input).parent().hide();
        }
    }
    
    checkOriginallyFromState();
  
}