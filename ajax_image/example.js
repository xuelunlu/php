// JavaScript Document

$(document).ready(function() {

	$.ajax({
		url: "https://pic.pimg.tw/tstockatm/1700012506-2908695339-g.jpg",
		xhrFields: {
			responseType: "blob"
		}
	}).done(function(data, textStatus, jqXHR) {

		$("#book-image").attr("src", URL.createObjectURL(data));

	});

});