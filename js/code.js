var baseUrl = window.location.origin;

$(function() {
  $('a').click(function() {
  	var link = $(this).attr('href');
		var url = baseUrl+'/'+link;
		var title = $(this).attr('title');
		window.history.pushState(null, null, url);
		document.title = title;
  		return false;
 	});
});
