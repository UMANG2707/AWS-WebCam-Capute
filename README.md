# AWS-WebCam-Capute
Capture images using webcam and store it to Amazon S3 bucket.

## two step process.

![ec2-s3](https://user-images.githubusercontent.com/48994342/78523979-208a1c80-77f0-11ea-8c47-4ed46c9ca490.png)

#### 1. Create S3 bucket and store captured images to the s3 bucket using "aws-sdk for PHP".
#### 2. Create Ec2 instacme and host this web into it.

*** 

## 1. Create S3 bucket and store captured images to the s3 bucket using "aws-sdk for PHP".

![download](https://user-images.githubusercontent.com/48994342/78524306-351ae480-77f1-11ea-8689-fbd60018de87.png)

- Create simple web application which capture images and store it into local machine[As per our code it's look like this].
    - index.php
    
      <img width="935" alt="aa" src="https://user-images.githubusercontent.com/48994342/78525369-90020b00-77f4-11ea-8ef9-5bfe98dbdc59.png">
      
    - webcam.php
    
      <img width="941" alt="b" src="https://user-images.githubusercontent.com/48994342/78525752-b4aab280-77f5-11ea-9252-212bcfcc818d.png">


- Open AWS consol and create IAM and S3 bucket
    - Create IAM user with programmatic access and save `ACCESS KEY` and `SECRET ACCESS KEY`.
    - Create s3 bucket.
    - Then click Bucket Policy.
    
        <img width="1278" alt="1" src="https://user-images.githubusercontent.com/48994342/78636032-1ab23b00-78c5-11ea-988e-07da1e7e47c9.png">
        
        
        <img width="705" alt="2" src="https://user-images.githubusercontent.com/48994342/78636050-20a81c00-78c5-11ea-84b1-c956e3282c8d.png">

    - Set your Bucket Policy to be the same as below. Change `User Arn` to be your User ARN. Also change `Bucket Arn` to your Bucket ARN. The bucket ARN is above the textarea.
        ```
        {
            "Version": "2012-10-17",
            "Id": "Policy1488494182833",
            "Statement": [
                    {
                        "Sid": "Stmt1488493308547",
                        "Effect": "Allow",
                        "Principal": {
                        "AWS": "User Arn"
                    },
                    "Action": [
                        "s3:ListBucket",
                        "s3:ListBucketVersions",
                        "s3:GetBucketLocation",
                        "s3:Get*",
                        "s3:Put*"
                    ],
                    "Resource": "Bucket Arn"
                    }
                ]
            }
            ```
    - Click CORS configuration and add the following policy:
        ```
        <?xml version="1.0" encoding="UTF-8"?>
        <CORSConfiguration xmlns="http://s3.amazonaws.com/doc/2006-03-01/">
          <CORSRule>
            <AllowedOrigin>*</AllowedOrigin>
            <AllowedMethod>GET</AllowedMethod>
            <AllowedMethod>POST</AllowedMethod>
            <AllowedMethod>PUT</AllowedMethod>
            <MaxAgeSeconds>3000</MaxAgeSeconds>
            <AllowedHeader>Authorization</AllowedHeader>
          </CORSRule>
        </CORSConfiguration>
        ```
    - Click on the New inline policy
    
        <img width="242" alt="4" src="https://user-images.githubusercontent.com/48994342/78636635-5ac5ed80-78c6-11ea-905b-ca13ea94803d.png">

    - Update the policy to be as follows:
    
        <img width="1279" alt="3" src="https://user-images.githubusercontent.com/48994342/78636644-5c8fb100-78c6-11ea-8138-0805a115cd2e.png">

        ```
        {
            "Version": "2012-10-17",
            "Statement": [
                {
                    "Effect": "Allow",
                    "Action": [
                        "s3:ListAllMyBuckets",
                        "s3:PutObject",
                        "s3:GetObject"
                    ],
                    "Resource": [
                        "arn:aws:s3:::*"
                    ]
                }
            ]
        }
        ```
    - open `storeimage.php`
    
        - Replace bucket name, Access key and Secret access with yours also give region and version.
        
            <img width="523" alt="asd" src="https://user-images.githubusercontent.com/48994342/78569760-aedabe80-7841-11ea-920d-d84e6d73b1b0.png">
    
- Download aws-sdk for PHP and connect S3 bucket with web application.
    - Download composer and intall it.
        (https://getcomposer.org/Composer-Setup.exe)
    - Open root folder of your project and start cmd from location of that folder.
    - Run below command to download and install aws-sdk for PHP.
        - `composer require aws/aws-sdk-php`

*** 

## 2. Create Ec2 instance and host this web into it.

- Create EC2 instance and access it using SSH (https://github.com/UMANG2707/AWS-EC2-ACCESS-WITH-PUTTY).
- Download XAMPP server(https://dmsbilas.wordpress.com/2019/03/12/how-to-install-xampp-in-amazon-aws-ubuntu-linux/).
- Put this web application project into this instance and also install `aws-sdk for PHP` in root folder of project.

***

### Video Link : (https://www.youtube.com/watch?v=HCAcuj2-SZM&feature=youtu.be)
