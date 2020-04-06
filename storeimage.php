<?php
require './vendor/autoload.php';

use Aws\S3\S3Client;
use Aws\S3\Exception\S3Exception;
  
    if(isset($_POST['image'])){
        $img = $_POST['image'];
        $folderPath = "upload/";

        $image_parts = explode(";base64,", $img);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
  
        $image_base64 = base64_decode($image_parts[1]);
        $fileName = date("Y-m-d") . "-" . time() . '.jpeg';
  
        $file = $folderPath . $fileName;
        //file_put_contents($file, $image_base64);
  
        //echo $file;

        
        $Bucket='BUCKET NAME';
        $key='ACCESS KEY';
        $secret='SECRET ACCESS KEY';

        try {
		// You may need to change the region. It will say in the URL when the bucket is open
		// and on creation.
		$s3 = S3Client::factory(
			array(
				'credentials' => array(
					'key' => $key,
					'secret' => $secret
				),
				'version' => 'latest',
				'region'  => 'Region'
			)
		);
	} catch (Exception $e) {
		// We use a die, so if this fails. It stops here. Typically this is a REST call so this would
		// return a json object.
		die("Error: " . $e->getMessage());
	}

	$keyName = 'test_example/' . basename($fileName);
	$pathInS3 = 'https://s3.us-east-1.amazonaws.com/' . $Bucket . '/' . $keyName;
	try {
		// Uploaded:
		//$file = $_FILES["fileToUpload"]['tmp_name'];

		$s3->putObject(
			array(
				'Bucket'=>$Bucket,
				'Key' =>  $keyName,
				'SourceFile' => $img,
				'StorageClass' => 'REDUCED_REDUNDANCY'
			)
		);

	} catch (S3Exception $e) {
		die('Error:' . $e->getMessage());
	} catch (Exception $e) {
		die('Error:' . $e->getMessage());
	}


	echo 'Done';


        
    }
?>