# AWS-WebCam-Capute
Capture images using webcam and store it to Amazon S3 bucket.

## two step process.

![ec2-s3](https://user-images.githubusercontent.com/48994342/78523979-208a1c80-77f0-11ea-8c47-4ed46c9ca490.png)

#### 1. Create S3 bucket and store captured images to the s3 bucket using "aws-sdk for PHP".
#### 2. Create Ec2 instacme and host this web into it.

*** 

## 1. Create S3 bucket and store captured images to the s3 bucket using "aws-sdk for PHP".

![download](https://user-images.githubusercontent.com/48994342/78524306-351ae480-77f1-11ea-8689-fbd60018de87.png)

- Create simple web application which capture images and store it into local machine.
    
- Open AWS consol and create IAM and S3 bucket.
- Download aws-sdk for PHP and connect S3 bucket with web application.

*** 

## 2. Create Ec2 instacme and host this web into it.

- Create EC2 instance and access it using SSH (https://github.com/UMANG2707/AWS-EC2-ACCESS-WITH-PUTTY).
- Download XAMPP server(https://dmsbilas.wordpress.com/2019/03/12/how-to-install-xampp-in-amazon-aws-ubuntu-linux/).
- Put this web application project into this instance.
