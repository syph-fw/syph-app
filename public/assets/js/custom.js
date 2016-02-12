jQuery.noConflict();
jQuery(document).ready(function($){
	
	"use strict";
	
	Pace.on("done", function(){
		$(".loader-wrapper").fadeOut(500);
		$(".pace").remove();
	});
	

});
