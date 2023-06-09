jQuery(document).ready(function($) {
	$('.upload-image-button').click(function() {
		var customUploader = wp.media({
			title: 'Select Image',
			button: {
				text: 'Choose Image'
			},
			multiple: false
		}).on('select', function() {
			var attachment = customUploader.state().get('selection').first().toJSON();
			$('.custom-image-field').val(attachment.url);
			$('.image-preview').attr('src', attachment.url);
		}).open();
	});

	$('.remove-image-button').click(function() {
		$('.custom-image-field').val('');
		$('.image-preview').attr('src', '');
	});
});
