<!DOCTYPE html>
<html>
<head>
    <title>Book Search</title>
    <script src="/js/jquery.min.js" language="JavaScript"></script>
    <script type="application/javascript">
        $(document).ready(function() {
            $('#search').click(function () {
                var url = "/index.php/library";
                var type = "type/{{type}}";
                var genre = "/genre/{{genre}}";
                var subgenre = "subgenre/{{subgenre}}";

                if ($('#type').val()) url += '/' + type.replace("{{type}}", $('#type').val());
                if ($('#genre').val()) url += '/' + genre.replace("{{genre}}", $('#genre').val());
                if ($('#subgenre').val()) url += '/' + subgenre.replace("{{subgenre}}", $('#subgenre').val());

                $.ajax({
                    url: url,
                    success: function (data) {
                        $('#result').html(data);
                    },
                    async: true,
                    type: "GET"
                });
            });

            $('#add').click(function () {
                var url = "/index.php/library" +
                    "/type/" + $('#type').val() +
                    "/genre/" + $('#genre').val() +
                    "/subgenre/" + $('#subgenre').val() +
                    "/title/" + $('#title').val();

                $.ajax({
                    url: url,
                    success: function (data) {
                        $('#result').html(data);
                    },
                    async: true,
                    type: "PUT"
                });
            });

            $('#delete').click(function () {
                var url = "/index.php/library" +
                    "/type/" + $('#type').val() +
                    "/genre/" + $('#genre').val() +
                    "/subgenre/" + $('#subgenre').val() +
                    "/title/" + $('#title').val();

                $.ajax({
                    url: url,
                    success: function (data) {
                        $('#result').html(data);
                    },
                    async: true,
                    type: "DELETE"
                });
            });
        });
    </script>
</head>
<body>
    <input id="title" type="text" placeholder="Title">
    <input id="type" type="text" placeholder="Type">
    <input id="genre" type="text" placeholder="Genre">
    <input id="subgenre" type="text" placeholder="Sub Genre">
    <input id="search" type="button" value="Search">
    <input id="add" type="button" value="Add">
    <input id="delete" type="button" value="Delete">
    <hr />
    <div id="result">
    <!--    result goes here    -->
    </div>
</body>
</html>