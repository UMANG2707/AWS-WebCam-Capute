<?php
    require('vendor/autoload.php');

    use Aws\S3\S3Client;
    use Aws\S3\Exception\S3Exception;

    $s3 = new Aws\S3\S3Client([
        'version'  => 'Version',
        'region'   => 'Region',
    ]);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome | WebCam Capture Store</title>
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body >
      <footer>
            <div class="container">
                <center>
                    <h1>WebCam Capture</h1>
                </center>
            </div>
        </footer>
        <div >
            <!--Main banner image-->
            <div id = "banner_image">
                <div class="container">	
                    <center>
                        <div id="banner_content">
                            <h1>Start WebCam</h1>
                            <h1>&</h1>
                            <h1>Take Photos</h1>
                            <br/>
                            <a  href="webcam.php" class="btn btn-danger btn-lg active"><BUTTON><h3>Start WebCam</h3></BUTTON></a>
                        </div>
                    </center>
                </div>
            </div>
            <!--Main banner image end-->
        </div>
        
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