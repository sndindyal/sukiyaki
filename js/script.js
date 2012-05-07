$(function() {
		
		$(".ngg-gallery-thumbnail a").attr("class","galimgs")
		$(".ngg-gallery-thumbnail a").colorbox({rel:'galimgs',transition:"fade",title:""}); 
 		vidMode();          

});

function vidMode(){
	var vidURL = $('.entry-content iframe').attr('src');
	$('.entry-content iframe').attr('src',vidURL + '?wmode=transparent');
}