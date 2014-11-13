<!DOCTYPE html>
<html>
<head>
    <title>Dictionary Using AJAX</title>
    <script src="/js/jquery.min.js" type="text/javascript"></script>
    <script src="/js/fetch.js" type="text/javascript"></script>
</head>
<body>
<h2>Enter a word to lookup its definition</h2>

<form action="/index.php/dict/define" method=GET>
    Word: <input type=text name="word" onkeyup="fetch(this.value);">
    <input type=submit value="Get definition">
    <div id="mydiv"></div>
</form>
</body>
</html>