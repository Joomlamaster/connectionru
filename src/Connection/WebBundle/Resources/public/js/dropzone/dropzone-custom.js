DropZoneStoreage = {};
DropZoneStoreage = {
    'initDropZone': function(url, removeUrl) {
        Dropzone.options.profileImages = {
            maxFiles: 1,
            init: function() {
                this.on("maxfilesexceeded", function(file){
                    this.removeFile(file);
                    return;
                });

                $('.dz-upload-message').on('click', function(){ $(this).parent().trigger('click')});

                this.on("addedfile", function(file) {
                    $(".global-loader").removeClass('hide');
                    if (file.size > 2000000) {
                        $(".global-loader").addClass('hide');
                        alert('Max File Size: 2MB');
                        profileImageDropzone.removeAllFiles();
                    } else {
                        $('.dz-upload-message').addClass('hidden');
                        setTimeout(function() {
                            $('.fm-popup').trigger('dz.added.file', { context: "dz.added.file" });
                            initJCrop();
                            $(".global-loader").addClass('hide');
                        }, 500);
                    }
                });

                $('#profile-images').on('fm.close.profile.popup', function() {
                    $('.dz-upload-message').removeClass('hidden');
                    profileImageDropzone.removeAllFiles();
                });

                $(".dz-upload-image").on('click', function(e){
                    e.preventDefault();
                    $("[name='profile_default_image']").prop("checked", "checked");
                    $(".fm-show-popup").trigger('click');
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
                $('.fm-popup').trigger('dz.upload.complete', data);
                $(".global-loader").addClass('hide');
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
            $(".global-loader").removeClass('hide');
            profileImageDropzone.processQueue();
        });
    }
};