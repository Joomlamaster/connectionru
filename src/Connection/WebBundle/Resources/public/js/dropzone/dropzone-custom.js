DropZoneStoreage = {};
DropZoneStoreage = {
    'initDropZone': function(url, removeUrl) {
        Dropzone.options.profileImages = {
            maxFiles: 1,
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
            },
            'maxfilesexceeded': function() {
                console.log('maxfilesexceeded');
            }
        };

        var profileImageDropzone = new Dropzone("#profile-images", {
            maxFilesize: 2, //MB
            parallelUploads: 100 //have to set this high to ensure all images are processed when manually called

        });
    }
};