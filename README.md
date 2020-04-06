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


- Open AWS consol and create IAM and S3 bucket.
    - Create s3 bucket.
    - Create IAM user with programmatic access and save `ACCESS KEY` and `SECRET ACCESS KEY`.
    - open `storeimage.php`
        - Replace bucket name, Access key and Secret access with yours also give region and version.
            <img width="523" alt="asd" src="https://user-images.githubusercontent.com/48994342/78569760-aedabe80-7841-11ea-920d-d84e6d73b1b0.png">
    
- Download aws-sdk for PHP and connect S3 bucket with web application.
    - Download composer and intall it.
        (https://getcomposer.org/Composer-Setup.exe)
    - Open root folder of your project and start cmd from location of that folder.
    - Run below command to download and instal `aws-sdk for PHP`.
        `composer require aws/aws-sdk-php`
    - 

*** 

## 2. Create Ec2 instance and host this web into it.

- Create EC2 instance and access it using SSH (https://github.com/UMANG2707/AWS-EC2-ACCESS-WITH-PUTTY).
- Download XAMPP server(https://dmsbilas.wordpress.com/2019/03/12/how-to-install-xampp-in-amazon-aws-ubuntu-linux/).
- Put this web application project into this instance and also install `aws-sdk for PHP` in project's root folder.
