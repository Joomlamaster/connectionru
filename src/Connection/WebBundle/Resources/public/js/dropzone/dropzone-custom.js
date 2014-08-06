DropZoneStoreage = {};
DropZoneStoreage = {
    'initDropZone': function(url, removeUrl) {
        Dropzone.options.profileImages = {
            maxFiles: 1,
            init: function() {
//                console.log('asdasdasd');
                this.on("maxfilesexceeded", function(file){
                    this.removeFile(file);
                    return;
                });

                this.on("addedfile", function(file) {
                    setTimeout(function() {
                        initJCrop();
                    }, 1000);
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
                $('.fm-popup').trigger('dz.upload.complete', { context: "dz.upload.complete" });
                profileImageDropzone.removeAllFiles();
            }
        };

        var profileImageDropzone = new Dropzone("#profile-images", {
            autoProcessQueue: false,
            thumbnailWidth: null,
            thumbnailHeight: null,
            maxFilesize: 2, //MB
            parallelUploads: 100 //have to set this high to ensure all images are processed when manually called

        });

        $(".dz-process-queue").on('click', function(e){
            e.preventDefault();
            profileImageDropzone.processQueue();
        });
    }
};