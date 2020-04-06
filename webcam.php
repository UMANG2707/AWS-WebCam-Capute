<!DOCTYPE html>

<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome | WebCam Capture Store</title>
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>

<body>
  <footer>
    <div class="container">
      <center>
        <h1>WebCam Capture</h1>
      </center>
    </div>
  </footer>

<div id = "banner_image">
    <form method="POST" action="storeimage.php">
        <div class="row">
            <div class="col-md-6">
                <div id="my_camera" style="padding-left: 10"></div>
                <br/>
                <input type=button value="Take Snapshot" onClick="take_snapshot()">
                <input type="hidden" name="image" class="image-tag">
            </div>
            <div class="col-md-6">
                <div id="results">Your captured image will appear here...</div>
                <br/>
                <button class="btn btn-success">Submit</button><br>
            </div>
        </div>
    </form>
</div>

<!-- Configure a few settings and attach camera -->

<script language="JavaScript">

    Webcam.set({

        width: 490,

        height: 390,

        image_format: 'jpeg',

        jpeg_quality: 100

    });


    Webcam.attach( '#my_camera' );

    function take_snapshot() {

        Webcam.snap( function(data_uri) {

            $(".image-tag").val(data_uri);

            document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';

        } );

    }

</script>

 <!--Footer-->
        <footer>
            <div class="container">
                <center>
                    <p>Copyright &copy; WebCam Capture. All Rights Reserved  |  Contact Us: +91 9512455268</p>
                </center>
            </div>
        </footer>
        <!--Footer end-->

</body>

</html>