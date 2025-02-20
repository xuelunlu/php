// JavaScript Document

$(document).ready(function() {

	var editor = CKEDITOR.replace('body');

	editor.on('change', function(evt) {

		evt.editor.updateElement();

	});

	CKFinder.setupCKEditor(editor, base_url + 'ckfinder_php_2.6.3/ckfinder/');

	$("#node").ajaxForm({

		dataType: 'json',

		beforeSerialize: function($form, options) {

		},
		success: function(data, status, xhr, $form) {

			console.log(data);

		}

	});

});