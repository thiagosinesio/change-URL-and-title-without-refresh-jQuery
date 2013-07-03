var baseUrl = $('base').attr('href');
//alert(baseUrl);
$(function() {
    $('a').click(function() {
        var link = $(this).attr('href');
        var url = baseUrl + link;
        var title = $(this).attr('title');
        window.history.pushState(url, title, url);
        document.title = title;
        return false;
    });
});
