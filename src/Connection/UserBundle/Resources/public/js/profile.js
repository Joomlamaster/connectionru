window.onload = function(){
    $('[data-toggle="confirmation"]').confirmation({
        'popout':'true',
        'singleton': 'true',
        'btnOkClass': 'btn-info',
        'btnCancelClass': 'btn-default'
    });
}

