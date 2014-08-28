FormAjaxFields = {};

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
            }
        });
    },
    'init': function() {
        $(function() {
            $("form.master_slave .master").on('change', function() {
                console.log('asdasdasd');
                $form = $(this).closest('form');
                if ( $form.length ) {
                    master = $(this);
                    if (master.length) {
                        FormAjaxFields.loadCountryState($form);
                    }

                }
            });
            $("form.master_slave .master").trigger('change');
        });
    }
};