<script type="text/javascript">

    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("adminImagePreview").src = oFREvent.target.result;
        };
    };

    function PreviewImagePartnerBanner() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImagePartnerBanner").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("partnerBannerImagePreview").src = oFREvent.target.result;
        };
    };

    function PreviewImagePartnerLogo() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImagePartnerLogo").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("partnerLogoImagePreview").src = oFREvent.target.result;
            document.getElementById("partnerLogo2ImagePreview").src = oFREvent.target.result;
        };
    };

    function PreviewImageSeminarBanner() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImageSeminarBanner").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("seminarBannerImagePreview").src = oFREvent.target.result;
        };
    };

    function PreviewImageSeminarLogo() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImageSeminarLogo").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("seminarLogoImagePreview").src = oFREvent.target.result;
            document.getElementById("seminarLogo2ImagePreview").src = oFREvent.target.result;
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