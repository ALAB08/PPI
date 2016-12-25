<script type="text/javascript">

    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("adminImagePreview").src = oFREvent.target.result;
        };
    };

    function PreviewImagePartner() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImagePartner").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("partnerImagePreview").src = oFREvent.target.result;
        };
    };

    function PreviewImageSeminar() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImageSeminar").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("seminarImagePreview").src = oFREvent.target.result;
        };
    };

</script>

<!--
    <head>
        <title>JavaScript PDF Viewer Demo</title>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script type="text/javascript">
            function PreviewImage() {
                pdffile=document.getElementById("uploadPDF").files[0];
                pdffile_url=URL.createObjectURL(pdffile);
                $('#viewer').attr('src',pdffile_url);
            }
        </script>
    </head>
    <body>
        <input id="uploadPDF" type="file" name="myPDF" onchange="PreviewImage()" />&nbsp;
        <input type="button" value="Preview" onclick="PreviewImage();" />

        <div style="clear:both">
           <iframe id="viewer" frameborder="0" scrolling="no" width="400" height="600"></iframe>
        </div>
    </body> 

    -->