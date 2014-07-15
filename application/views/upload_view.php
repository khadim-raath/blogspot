<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8"/>
        <title>Mini Ajax File Upload Form</title>

        <!-- Google web fonts -->
        <link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel='stylesheet' />

        <!-- The main CSS file -->
        <link rel="stylesheet" href="<?php echo base_url("plug/assets/css/style.css"); ?>">

    </head>

    <body>

        <form id="upload" method="post" action="do_upload" enctype="multipart/form-data">
            <div id="drop">
                Drop Here

                <a>Browse</a>
                <input type="file" name="upl" multiple value="upload" />
            </div>

            <ul>
                <!-- The file uploads will be shown here -->
            </ul>

        </form>

        <footer>
            <h2><a href="http://tutorialzine.com/2013/05/mini-ajax-file-upload-form/"><i>Tutorial:</i> Mini Ajax File Upload Form</a></h2>
            <div id="tzine-actions">
                
                <a id="tzine-download" href="http://tutorialzine.com/2013/05/mini-ajax-file-upload-form/" title="Download This Example!">Download</a>
            </div>
        </footer>
        
        <!-- JavaScript Includes -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="assets/js/jquery.knob.js"></script>
        <script type="text/javascript" src="<?php echo base_url("plug/assets/js/jquery.knob.js"); ?>"></script>


        <!-- jQuery File Upload Dependencies -->
        <script type="text/javascript" src="<?php echo base_url("plug/assets/js/jquery.ui.widget.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("plug/assets/js/jquery.iframe-transport.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("plug/assets/js/jquery.fileupload.js"); ?>"></script>
        <!-- Our main JS file -->
        <script type="text/javascript" src="<?php echo base_url("plug/assets/js/script.js"); ?>"></script>

        <!-- Only used for the demos. Please ignore and remove. --> 
        <script src="http://cdn.tutorialzine.com/misc/enhance/v1.js" async></script>
    </body>
</html>