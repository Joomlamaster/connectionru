FormAjaxFields = {};

FormAjaxFields = {
    'cfg': {
        'master_slave': {
            'block': '#master_slave'
        },
        'master': {
            'elem': '.master'
        },
        'slave': {
            'elem': '.slave',
            'block': '#slave_block'
        }
    },
    'loadCountryState': function($form) {
        var data = {};
        data[$(FormAjaxFields.cfg.master.elem).attr('name')] = $(FormAjaxFields.cfg.master.elem).val();
        $.ajax({
            url : $form.attr('action'),
            type: $form.attr('method'),
            data : data,
            success: function(html) {
                if ( $(FormAjaxFields.cfg.slave.elem).length ) {
                    $(FormAjaxFields.cfg.slave.elem).replaceWith(
                        $(html).find(FormAjaxFields.cfg.slave.elem)
                    );
                } else {
                    $(FormAjaxFields.cfg.master_slave.block).append(
                        $(html).find(FormAjaxFields.cfg.slave.block)
                    );
                }
            }
        });
    },
    'init': function() {
        $(function() {
            $form   = $('form.master_slave');
            if ( $form.length ) {
                master = $form.find('.master');
                if (master.length) {
                    $form.on('change', '#'+master.attr('id'), function() {
                        FormAjaxFields.loadCountryState($form);
                    });
                }

            }
        });
    }
};