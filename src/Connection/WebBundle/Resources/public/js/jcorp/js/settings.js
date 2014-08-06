function initJCrop(){
    // Create variables (in this scope) to hold the API and image size
    var jcrop_api,
        boundx,
        boundy,

    // Grab some information about the preview pane
        $preview = $('#preview-pane'),
        $pcnt = $('.dz-image-preview'),
        $pimg = $('.dz-image-preview img'),

        xsize = $pcnt.width(),
        ysize = $pcnt.height();

    $pimg.Jcrop({
        onChange: updatePreview,
        onSelect: updatePreview,
        aspectRatio: 5/7
    },function(){
        // Use the API to get the real image size);
        var bounds = this.getBounds();
        boundx = bounds[0];
        boundy = bounds[1];
        // Store the API in the jcrop_api variable
        jcrop_api = this;
        jcrop_api.setSelect([0,0,150,100]);
        jcrop_api.setOptions({
            allowSelect: false
        });

        // Move the preview into the jcrop container for css positioning
        //$preview.appendTo(jcrop_api.ui.holder);
    });

    function updatePreview(c)
    {
        if (parseInt(c.w) > 0)
        {
            if ($("form[name=jcrop]").length) {
                $('#jcrop_x').val(c.x);
                $('#jcrop_y').val(c.y);
                $('#jcrop_x2').val(c.x2);
                $('#jcrop_y2').val(c.y2);
                $('#jcrop_w').val(c.w);
                $('#jcrop_h').val(c.h);
            }
        }
    };

    function getRandom() {
        var dim = jcrop_api.getBounds();
        return [
            Math.round(Math.random() * dim[0]),
            Math.round(Math.random() * dim[1]),
            Math.round(Math.random() * dim[0]),
            Math.round(Math.random() * dim[1])
        ];
    };

};