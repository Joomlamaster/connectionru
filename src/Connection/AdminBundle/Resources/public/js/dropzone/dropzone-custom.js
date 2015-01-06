DropZoneStoreage = {};
DropZoneStoreage = {
    'initDropZone': function(url, removeUrl, sortUrl) {
        Dropzone.options.propertyImages = {
            init: function() {

                thisDropzone = this;
                $.get(url, function(data) {
                    $.each(data, function(key,value){
                        var mockFile = { name: value.name, size: value.size, id: value.id };
                        thisDropzone.options.addedfile.call(thisDropzone, mockFile);
                        thisDropzone.options.thumbnail.call(thisDropzone, mockFile, value.name);
                    });
                });
            },
            'removedfile': function(file) {
                if (file.id) {
                    $.ajax({
                        type: 'POST',
                        url: removeUrl,
                        data: {id: file.id},
                        dataType: 'json'
                    });
                }
                var _ref;
                return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
            },
            'success': function(file, data) {
                var _ref;
                file.previewElement.parentNode.removeChild(file.previewElement);
                thisDropzone = this;
                var mockFile = { name: data.name, size: data.size, id: data.id };
                thisDropzone.options.addedfile.call(thisDropzone, mockFile);
                thisDropzone.options.thumbnail.call(thisDropzone, mockFile, data.name);
                $("form.dropzone").find("img[src='" + data.name + "']").closest('div.dz-preview').addClass('dz-success');
            }
        };

        var propImageDropzone = new Dropzone("#property-images", {
            maxFilesize: 2, //MB
            autoProcessQueue: false,
            parallelUploads: 100, //have to set this high to ensure all images are processed when manually called

        });

        $('a.fa-save').click(function() {
            propImageDropzone.processQueue();
        });

        $("form.dropzone").on('click', function() {
            $("div.dz-preview").removeClass('dz-success');
        });

        $("#property-images").sortable({
            items:'.dz-preview',
            cursor: 'move',
            opacity: 0.5,
            containment: '#property-images',
            distance: 20,
            tolerance: 'pointer',
            start: function() {
                $("div.dz-preview").removeClass('dz-success');
            },
            stop: function(e) {
                var data = [];
                $('.dz-preview .dz-filename span').each(function(e){
                    var Chibg   = $(this).css('background-image');
                    var Chisrc  = $(this).attr('src');
                    var Chihtml = $(this).html();
                    data.push(Chihtml);
                    $("form.dropzone").find("img[src='" + Chihtml + "']").closest('div.dz-preview').addClass('dz-success');
                });

                $.ajax({
                    type: 'POST',
                    url: sortUrl,
                    data: {'files': data},
                    dataType: 'json'
                });
            }
        });
    }
};