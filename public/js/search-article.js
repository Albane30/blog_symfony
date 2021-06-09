$(function (){
    $('#search-input').on('keyup', function(){
        var value = $(this).val();
        console.log(value);
        $.get('/article/search-json?terms=' + value, function(articles){
            $('#results').html('');
            for(let i =0; i<articles.length; i++) {
                $('#results').append("<li>" + articles[i].title + "</li>");
            }
            // articles.forEach(function (article){
                // $('#results').append("<li>" + article.title + "</li>");
            // });
        });
    });
});