jQuery(document).ready(function($){
    $('#upload-button').click(function(e) {
        e.preventDefault();
        var image = wp.media({
            title: 'Upload Image',
            multiple: false
        }).open().on('select', function(e) {
            var uploaded_image = image.state().get('selection').first();
            var image_url = uploaded_image.toJSON().url;
            var gallery_input = $('#apartment_gallery');
            var current_value = gallery_input.val();
            var new_value = (current_value.length > 0) ? current_value + ',' + image_url : image_url;
            gallery_input.val(new_value);
            $('#image-container').append('<div class="gallery-image"><img src="' + image_url + '" alt="" /><a href="#" class="remove-image">Remove</a></div>');
        });
    });

    $(document).on('click', '.remove-image', function(e) {
        e.preventDefault();
        $(this).parent('.gallery-image').remove();
        var gallery_input = $('#apartment_gallery');
        var current_value = gallery_input.val();
        var image_url = $(this).prev('img').attr('src');
        var new_value = current_value.replace(image_url, '').replace(',,', ',').replace(/^,|,$/g, '');
        gallery_input.val(new_value);
    });
});
