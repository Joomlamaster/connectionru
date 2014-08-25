FM = {};

FM = {
    'popUp': {
        'updateProfileImageUrl': false,
        'listen': function(updateProfileImageUrl) {
            FM.updateProfileImageUrl = updateProfileImageUrl;
            FM.popUp.addProfileImage();
            FM.popUp.viewProfileImage();
        },
        'addProfileImage': function() {
            $('.fm-show-popup').on('click', function() {
                FM.popUp.closePopup();
                FM.popUp.showOverlay();
                popUpSelector   = $(this).data('target_popup');
                $targetPopUp    = $("#"+popUpSelector);

                if ( $targetPopUp.length == 0 ) {
                    return;
                }

                $targetPopUp.toggleClass('hidden');
                $targetPopUp.center();
                $targetPopUp.find('button.close-popup').on('click', function(){
                    FM.popUp.closePopup();
                });
            });

            $('.fm-popup').on('dz.upload.complete', function() {
                FM.popUp.closePopup();
            });

            $('.fm-popup').on('dz.added.file', function() {
                $targetPopUp.center();
            });
        },
        'viewProfileImage': function() {
            $(".profile-image-box img").on('click', function() {
                FM.popUp.closePopup();
                FM.popUp.showOverlay();
                $image       = $(this).clone();
                imageId      = $image.data('image_id');
                $targetPopUp = $("#view-profile-image");
                $targetPopUp.toggleClass('hidden').find('.fm-content').html($image);
                $targetPopUp.center();

                $targetPopUp.find('button.close-popup').on('click', function(){
                    FM.popUp.closePopup();
                });

                $targetPopUp.find('button.update-profile-image').on('click', function(e){
                    e.preventDefault();
                    $.ajax({
                        type: "POST",
                        url: FM.updateProfileImageUrl,
                        data: {image_id: imageId},
                        success: function(){
                            location.reload();
                            FM.popUp.closePopup();
                        }
                    });
                });
            });
        },
        'closePopup': function() {
            FM.popUp.hideOverlay();
            $('.fm-popup').addClass('hidden');
            $('#profile-images').trigger('fm.close.profile.popup', { context: "dz.added.file" });
        },
        'showOverlay': function() {
            var overlay = jQuery('<div id="overlay"> </div>');
            overlay.appendTo(document.body)
            overlay.on('click', function() {
                FM.popUp.closePopup();
            });
        },
        'hideOverlay': function() {
            $("#overlay").remove();
        }
    }
};