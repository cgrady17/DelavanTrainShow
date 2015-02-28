/* Delavan Train Show | Custom JS */

$(function() {
	
	// Hide Video Overlay Text after 10 Seconds
	setTimeout(function() {
		$(".home-header-hgroup").hide(600);
	}, 10000);
	
	// Toggle Video Audio
	$("#video-audio-text").click(function() {
		if ($("video").prop('muted')) {
			var video = document.getElementById("bgVideo");
			video.muted = false;	
		} else {
			var video = document.getElementById("bgVideo");
			video.muted = true;
		}
	});
});