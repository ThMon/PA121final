function onClickExecute()
{
    var radioChoice;

    radioChoice = $('input[name=what]:checked').val();

    switch(radioChoice)
    {
        case '1':
        $.get('php/1-get-html-article.php', ajaxGetHtmlArticle);
        break;

    }

}