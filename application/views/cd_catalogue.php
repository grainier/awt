<html>
<head>
    <title>CD Catalogue</title>
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.0.4/css/bootstrap-combined.min.css"/>
    <script src="/js/jquery.min.js" language="JavaScript"></script>
</head>
<body>

<div class="container">
    <div class="row" id="result"></div>
</div>

<script language="JavaScript">
    $(document).ready(function() {
        $.get("/xml/cd_catalogue.xml", function (data) {
            // get the XSLT file and load it into a XML DOM object
            var xslobj = getXslObj();
            xsltProcessor = new XSLTProcessor();
            xsltProcessor.importStylesheet(xslobj);
            resultDocument = xsltProcessor.transformToFragment(data, document);
            $('#result').append(resultDocument);
        }, "xml");
    });
//    $('#findsubmit').click(function () {
//        $.get("/xml/cd_catalogue.xml", function (data) {
//            // get the XSLT file and load it into a XML DOM object
//            var xslobj = getXslObj();
//            xsltProcessor = new XSLTProcessor();
//            xsltProcessor.importStylesheet(xslobj);
//            resultDocument = xsltProcessor.transformToFragment(data, document);
//            $('#result').append(resultDocument);
//        }, "xml");
//        return false;
//    });

    function getXslObj() {
        var xslobj = null;
        $.ajax({
            url: "/xsl/cd_catalogue.xsl",
            success: function (xsldata) {
                xslobj = xsldata;
            },
            async: false,
            dataType: "xml"
        });
        return xslobj;
    }
</script>
</body>
</html>