$(function() {
		
		$(".ngg-gallery-thumbnail a").attr("class","galimgs")
		$(".ngg-gallery-thumbnail a").colorbox({rel:'galimgs',transition:"fade",title:""}); 
 		vidMode();          

});

function vidMode(){
	$('.entry-content iframe').each(function(){
		var vidURL = $(this).attr('src');
		$(this).attr('src',vidURL + '?wmode=transparent');
	});
}